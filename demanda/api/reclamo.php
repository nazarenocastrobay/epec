<?php



require 'connDB.php';

$id= $_REQUEST['id'];
$accion= $_REQUEST['accion'];

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Attempt update query execution
	$sql = "UPDATE reclamos SET reclamo='si' WHERE email='fabi@email.com'";
	if(mysqli_query($conn, $sql)){
	    echo "Records were updated successfully.";
	} else {
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	 
	// Close connection
	mysqli_close($conn); 
}else{  
    if ($conn) {
			echo 'Conexion exitosa';
			
			$conn->query('SET CHARACTER SET utf8');
	    	$conn->query('SET NAMES utf8');
	    	$nombre= $_REQUEST['name'];
			$email= $_REQUEST['email'];
			$telefono= $_REQUEST['phone'];
			$reclamo= $_REQUEST['message'];
			$aprobado= "no";

			$sql = "INSERT INTO reclamos (nombre, email, telefono, reclamo, aprobado)
	VALUES ('$nombre', '$email', '$telefono', '$reclamo', '$aprobado')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
	} else {
		echo 'Conexion fallida';

	}
}
