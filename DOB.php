<!DOCTYPE html>
<html>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
 
       <fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" />/
						<input type="text" size="2" />/
						<input type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
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