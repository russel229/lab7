<!DOCTYPE html>
<html>
<body>
MAIL</body>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
Name: <input type="text" name="email">
<input type="submit" value="Submit">
</form>
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