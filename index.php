<html>
	
<body>

<!-- Your form -->
<form name="form" id="my-form">

	<!-- Required field email -->
	<input type="text" name="email" data-rule="required|email"/>

	<input type="submit" value="Submit"/>

</form>

<!-- Append the validator JS script -->
<script type="text/javascript" src="js-form-validator.js"></script>

<script>
	// Init validator with standart settings
	new Validator(document.querySelector('#my-form'), function (err, res) {
		return res;
	});
</script>
	
</body>
</html>
