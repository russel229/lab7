<!DOCTYPE html>
<html>
<fieldset>
<legend><h1>
BLOOD Group</h1></legend>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
<select>
    <option>A Positive</option>
    <option>A Negative</option>
    <option>B Positive</option>
    <option>B Negative</option>
    <option>AB Positive</option>
    <option>AB Negative</option>
    <option>AB Unknown</option>
    <option>O Positive</option>
    <option>O Negative</option>
   
</select></fieldset><br>
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