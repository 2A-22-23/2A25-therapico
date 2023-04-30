<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Suivi</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #f2f2f2;
        }

        .wrapper {
            width: 500px;
            height: 550px;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
        }

        header {
            width: 100%;
            height: 50px;
            background-color:#00FF7F;
            color: #fff;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 50px;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            width: 100%;
            color: #7f7f7f;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
            width: 100%;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #00FF7F;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #009acd;
        }

        #error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="signup">
            <h1>Update Suivi</h1>
        </header>
        <?php
include '../Controller/suiviC.php';

$error = "";

// create suivi
$suivi = null;

// create an instance of the controller
$suiviC = new suiviC();

if (
    isset($_POST["cin_s"]) &&
    isset($_POST["cin_d"]) &&
    isset($_POST["cin_p"]) &&
    isset($_POST["date_consultation"]) &&
    isset($_POST["symptomes"]) &&
    isset($_POST["diagnostic"]) 
   
) {
    if (
        !empty($_POST["cin_s"]) &&
        !empty($_POST['cin_d']) &&
        !empty($_POST["cin_p"]) &&
        !empty($_POST["date_consultation"]) &&
        !empty($_POST["symptomes"]) &&
        !empty($_POST["diagnostic"]) 
    ) {
        // Check if diagnostic is A, B, or C
switch($_POST['diagnostic']) {
    case 'A':
    case 'B':
    case 'C':
        // Diagnostic is valid
        break;
    default:
        // Invalid diagnostic
        $error = "Invalid diagnostic";
        break;
}
 {
            // Check if symptomes is one of the allowed options
            $allowed_symptomes = ['Dépression', 'Trouble bipolaire', 'Trouble anxieux', 'Schizophrénie', 'Trouble de la personnalité'];
            if (!in_array($_POST['symptomes'], $allowed_symptomes)) {
                $error = "Invalid symptomes";
            } else {
                $suivi = new suivi(
                    $_POST['cin_s'],
                    $_POST['cin_d'],
                    $_POST['cin_p'],
                    $_POST['date_consultation'],
                    $_POST['symptomes'],
                    $_POST['diagnostic']
                );
                $suiviC->updatesuivi($suivi, $_POST["cin_s"]);
                header('Location:Listesuivis.php');
            }
        }
    } else {
        $error = "Missing information";
    }
}

if (isset($_POST['cin_s'])) {
    $suivi = $suiviC->showsuivi($_POST['cin_s']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update suivi</title>
</head>
<body>
    <h1>Update suivi</h1>

    <?php if (!empty($error)): ?>
        <div id="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php if (isset($_POST['cin_s'])): ?>
        <form action="" method="POST">
            <input type="number" name="cin_s" value="<?php echo $suivi['cin_s']; ?>" id="cin_s" placeholder="ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
            <input type="number" name="cin_d" id="cin_d" value="<?php echo $suivi['cin_d']; ?>" placeholder="Doctor ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
            <input type="number" name="cin_p" id="cin_p" value="<?php echo $suivi['cin_p']; ?>" placeholder="Patient ID Card" pattern="[0-9]+" minlength="8" maxlength="8" required />
            <input type="date" name="date_consultation" id="date_consultation" value="<?php echo $suivi['date_consultation']; ?>" placeholder="Consultation date" required />
<select name="symptomes" id="symptomes">
<option value="Dépression" <?php if ($suivi['symptomes'] == 'Dépression') echo 'selected="selected"'; ?>>Dépression</option>
<option value="Trouble bipolaire" <?php if ($suivi['symptomes'] == 'Trouble bipolaire') echo 'selected="selected"'; ?>>Trouble bipolaire</option>
<option value="Trouble anxieux" <?php if ($suivi['symptomes'] == 'Trouble anxieux') echo 'selected="selected"'; ?>>Trouble anxieux</option>
<option value="Schizophrénie" <?php if ($suivi['symptomes'] == 'Schizophrénie') echo 'selected="selected"'; ?>>Schizophrénie</option>
<option value="Trouble de la personnalité" <?php if ($suivi['symptomes'] == 'Trouble de la personnalité') echo 'selected="selected"'; ?>>Trouble de la personnalité</option>
</select>
<select name="diagnostic" id="diagnostic">
<option value="A" <?php if ($suivi['diagnostic'] == 'A') echo 'selected="selected"'; ?>>A</option>
<option value="B" <?php if ($suivi['diagnostic'] == 'B') echo 'selected="selected"'; ?>>B</option>
<option value="C" <?php if ($suivi['diagnostic'] == 'C') echo 'selected="selected"'; ?>>C</option>
</select>
<input type="submit" value="Update" />
</form>
<?php endif; ?>

</div>
</body>
</html>

