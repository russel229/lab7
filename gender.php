<!DOCTYPE html>
<html>
<fieldset>
<legend><h1>
GENDER</h1></legend>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
                
 <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br>

</form>
</fieldset>
<input type="submit" value="Submit">
<script>
function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>


</html>