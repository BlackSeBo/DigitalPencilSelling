<?php

?>
<!DOCTYPE html>
<html lang="de-DE">
	<head>
		<title>Digital Pencil Selling</title>
		<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<script type="text/javascript" src="assets/js/jspdf.min.js"></script>
		<script type="text/javascript" src="assets/js/html2canvas.js"></script>
		<script type="text/javascript">
			
			function genPDF() {
				html2canvas(document.getElementById("form")).then(function (canvas) {
						
						var img = canvas.toDataURL("image/png");
						var doc = new jsPDF('landscape');
                        var width = doc.internal.pageSize.width;
                        var height = doc.internal.pageSize.height;
						doc.addImage(img, 'JPEG',0,0, width, height);
						doc.save('test.pdf');
					
				});
			}
			
		</script>
	</head>

	<body>
		<div class="img" id="form">
			<img class="fit" src="assets/image/bg.jpg">
            <div class="text">

                <input class="textfeld" id="name" type="text" name="Name">
				<input class="textfeld" id="mitarbeiter" type="text" name="mitarbeiter">
				<input class="textfeld" id="shop" type="text" name="shop">
				<input class="textfeld" id="datum" type="text" name="datum">

            </div>
		</div>
        <div class="download">
            <a href="javascript:genPDF();">Download</a>
        </div>

	</body>
	
</html>