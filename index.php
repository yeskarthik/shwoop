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
<form action="upload.php" name="form" id="my-form" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
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
