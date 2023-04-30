function test_it(entry) {
 

    var pyt_10;
       if (entry.value!=null && entry.value.length!=0) {
       entry.value=""+ eval(entry.value);
       }
       computeForm(entry.form);
       }
   
       function computeForm(form) {
       var total=0
       
       for (var count=0; count<4; count++)
       {
       if (form.a[count].checked){
       var total=total+parseInt(form.a[count].value);
       }
       }
       
       for (var count=0; count<4; count++)
       {
       if (form.b[count].checked){
       var total=total+parseInt(form.b[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.c[count].checked){
       var total=total+parseInt(form.c[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.d[count].checked){
       var total=total+parseInt(form.d[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.e[count].checked){
       var total=total+parseInt(form.e[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.f[count].checked){
       var total=total+parseInt(form.f[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.g[count].checked){
       var total=total+parseInt(form.g[count].value);
       }
       }
       
       for (var count=0; count<4; count++)
       {
       if (form.h[count].checked){
       var total=total+parseInt(form.h[count].value);
       }
       }
       
       for (var count=0; count<4; count++)
       {
       if (form.i[count].checked){
       var total=total+parseInt(form.i[count].value);
       }
       }
   
       for (var count=0; count<4; count++)
       {
       if (form.j[count].checked){
       var total=total+parseInt(form.j[count].value);
       pyt_10 = form.j[count].value;
       }
       }
       
   
       if (total > 12 || pyt_10 > 1){ document.write(' <center><h1> Therapico Depression Test Results </h1></center> The obtained result of the Edinburgh Postnatal Depression Scale indicates the presence of a risk of depression, so it is advisable to consult a doctor or psychologist. A diagnosis of depression can be made by a specialist only on the basis of a complete history and mental state assessment. Do not hesitate and consult a psychiatrist, family doctor or psychologist as soon as possible. Only a specialist can verify the test result, make a diagnosis of depression or rule it out.') }
       else { document.write('The obtained result does not indicate the likelihood of depression. However, it is an auxiliary tool and if you suspect that you may be depressed, it is best to consult a psychiatrist, GP or psychologist. Only a specialist can verify the test result: recognize or exclude depression.')}
   
       }