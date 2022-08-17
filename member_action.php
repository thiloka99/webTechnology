<?php
echo 
?>
<?php
	include("connection.php");

	if(isset($_POST["add"])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$job = $_POST['job'];
		
		$query = "INSERT INTO userdetails(firstname, lastname, address, job) VALUES ('$firstname', '$lastname', '$address', '$job')";
		if($con->query($query)){ //mysqli_query($con, $sql)--- prosedural style
			header("location:crudApplication.php");
		}
		else{
			echo "connection error: ".$con->connect_error;
		}
	}
	
	if(isset($_POST["update"])){
		$id = $_POST["id"];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$job = $_POST['job'];
		
		$query = "UPDATE userdetails SET firstname='$firstname', lastname='$lastname', address='$address', job='$job' WHERE id=$id";
		$con->query($query);
		$_SESSION['message'] = "Members details update!";
		header("location:crudApplication.php")
	}
	
	if(isset($_GET['action']) and $_GET['action'] == "delete"){
		$id = $_GET['id'];
		$query = "DELETE FROM userdetails WHERE id=$id";
		$con->query($query);
		$_SESSION['message'] = "Member deleted successfully!";
	}
?>