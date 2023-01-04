<html>
	<head>
		<script>
			function loadDoc() {
			  var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				 document.getElementById("output").innerHTML = this.responseText;
				 //alert(this.responseText);
				}
			  };
			  xhttp.open("GET", "ajax-1.php", true);
			  xhttp.send();
			  
			  setTimeout('loadDoc()',1000);
			}
		</script>
	</head>
	
	<body>
		<h1 id='output'></h1>
		<button onclick="loadDoc()">click here</button>
		
	</body>
	
</html>