<html>
<head>
    <title>Deret Fibonaci</title>
</head>
<script language="Javascript">
  
        
        function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
        
        <!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
//-->
    </script>
<body>
<form method="post" action="hitung.php">
    <input type="text" name="angkasebelum" placeholder="Angka Sebelumnya" onkeypress="return isNumberKey(event)" required>
    <input type="text" name="angkaskrng" placeholder="Angka Sekarang" onkeypress="return isNumberKey(event)" required>
    <input type="text" name="jumlah" placeholder="Jumlah deret" onkeypress="return isNumberKey(event)" required>
    <input type="submit" name="hasil" value="Hasil"><br><br>
</form>
</body>
</html>