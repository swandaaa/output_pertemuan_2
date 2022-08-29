<!DOCTYPE html>
<html>
	<head>
		<title>Identitas Diri</title>
		<link  rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div class="header">
			<h1>Output Pertemuan 2</h1>
		</div>
		<?php 
			$name = $_GET["name"];
			$fakultas = $_GET["fakultas"];
			$prodi = $_GET["prodi"];
			$nim = (integer) $_GET["nim"];
			$email = $_GET["email"];
			$github = $_GET["github"];
			$education=array($_GET["education1"],$_GET["education2"],$_GET["education3"]);
			$profile=$_GET["profilDiri"];
		?>
		<div class="left">
			<div class="name">
				<?php 
					echo $name;
				?>
			</div>
			
			<br>
			
			<div class="identity">
				<?php
					echo ("Nama : " . $name . "<br>");
					echo ("NIM : " . $nim . "<br>");
					echo ("Fakultas : " . $fakultas . "<br>");
					echo ("Program Studi : " . $prodi . "<br>");
					echo ("Email : " . $email . "<br>");
					echo ("Github : " . $github . "<br>");
				?>
			</div>
		</div>
		
		<div class="profile">
			<h2>Profile</h2>
				<?php echo ("<p>".$profile."</p>")?>
			<h2>Education</h2>
			<ul>
				<?php
					for($i=0; $i<3; $i++){
						echo ("<li>" . $education[$i] . "</li><br>");
					}
				?>
			</ul>
		</div>
	</body>
</html>