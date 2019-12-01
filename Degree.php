<!DOCTYPE html>
<html>
<fieldset>
<legend><h1>
DEGREE</h1></legend>
<input type="checkbox" name="SSC" value="ssc">SSC <br>
<input type="checkbox" name="HSC" value="hsc">HSC <br>
<input type="checkbox" name="BSc" value="bsc"> <br>
</fieldset><br>
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