<!DOCTYPE html>
<html>
<head>
	<title>set</title>
</head>
<body>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript">
		  swal("Click on either the button or outside the modal.")
                            .then((value) => {
                              swal(`The returned value is: ${value}`);
                            });
	</script>

</body>
</html>