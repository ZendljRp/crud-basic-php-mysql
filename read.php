<?php 

$link = mysqli_connect('localhost', 'root', '', 'demo_crud');

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id =".$id;

if($result = mysqli_query($link, $query)){
	while($user = mysqli_fetch_assoc($result)){
		$name = $user['name'];
		$email = $user['email'];
		$phone = $user['phone'];
		$created = $user['created'];
		$modified = $user['modified'];
	}
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD basico con PHP y MySQL</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="wrapper">
		<ul>
			<li>ID: <?php echo $id ?></li>
			<li>Nombre: <?php echo $name ?></li>
			<li>Email: <?php echo $email ?></li>
			<li>Telefono: <?php echo $phone ?></li>
			<li>Fecha de creacion: <?php echo $created ?></li>
			<li>Fecha de modificacion: <?php echo $modified ?></li>
		</ul>
		<a class="btn" href="index.php"><< Volver</a>
	</div>
</body>
</html>
