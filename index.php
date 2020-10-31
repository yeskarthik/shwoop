<html>
	<head>
		<link rel="stylesheet" href="assets/css/tables.css">
		<link rel="stylesheet" href="assets/css/layout.css">
		<link rel="stylesheet" href="assets/css/forms.css">
		<link rel="stylesheet" href="assets/css/js-splash.css">
		<link rel="stylesheet" href="assets/css/font-awesome.css">
		<link rel="stylesheet" href="assets/css/js-socnet.css">
		<link rel="stylesheet" href="assets/css/mobile.css">
		<link rel="stylesheet" href="assets/codemirror/css/codemirror.css">
		<link rel="stylesheet" href="assets/codemirror/theme/monokai.css">
		<link rel="stylesheet" href="assets/codemirror/theme/github-light.css">
		
	</head>
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
