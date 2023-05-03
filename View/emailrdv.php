<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Send Email</title>
</head>
<body>

<form class="" action="send.php" method="post">
<style> .btn-email{background-color: #00ccbb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 100px;
            background-color: darkcyan;
          transition: all 0.3s ease;
          margin-right: 10px;

}  .btn-email:hover {
    background-color: grey;
  color: black;
  border-color: black;
}
</style>

<label for="email">Email :</label> 
<input type="email" name="email"  placeholder="exemple@gmail.com" minlength="8"maxlength="25" required value="">
<label for="subject">Subject :</label> 
<input type="text" name="subject" value="" pattern="[A-Za-z\- ]+" placeholder="Subject" maxlength="255" required> 
<label for="message">Message :</label> 
<input type="text" name="message" value="" pattern="[A-Za-z\- ]+" placeholder="Message" maxlength="255" required >
<button type="submit" class="btn-email"name="send">Send</button>
</form>
</body>
</html>