<h1>Members Details</h1>
<?php
	include('connection.php');
	$firstname = "";
	$lastname = "";
	$address = "";
	$job = "";
	$id = "";
	$update = false;
	
	if(isset($_GET['action']) and $_GET['action'] == "edit"){
		$id = $_GET['id'];
		$update = true;
		$query = "SELECT * FROM userdetails WHERE id=$id";
		
		$result = $con->query($query);
		print_r($result);
		if($result->num_rows == 1){
			$n = $result->fetch_assoc();
			$firstname = $n["firstname"];
			$lastname = $n["lastname"];
			$address = $n["address"];
			$job = $n["job"];
		}
	}
?>

<?php 
$query = "SELECT * FROM userdetails";
$result = $con->query($query);
?>
<table style="boarder:1px solid">
	<thead>
		<th>ID        </th>
		<th>First Name</th>
		<th>Last Name </th>
		<th>Address   </th>
		<th>Job Title </th>
		<th>Action    </th>
	</thead>

	<?php
	if($result){
		while($row = $result->fetch_row()){ //$row = $result->fetch_assoc(); meka dammoth methanta $row[id],$row[firstname],lastname,address, job  kiyala enne
			print_r($row);
			echo "<br>";
	?>
	<tr>
		<td><?php echo $row[0] ?></td>
		<td><?php echo $row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><?php echo $row[3] ?></td>
		<td><?php echo $row[4] ?></td>
		<td><a href="crudApplication.php?action=edit&amp;id=<?php echo $row[0]; ?>">Edit</a>&emsp;
		    <a href="member_action.php?action=delete;id=<?php echo $row[0]; ?>">Remove</a> </td>
	</tr>
		<?php }
	}
	$result->free_result();
	?>
	
</table>

<h1>Add Members</h1>
<form action="member_action.php" method="post">
	First Name : <input type="text" name="firstname" value="<?php echo $firstname ?>"><br><br>
	Last Name  : <input type="text" name="lastname" value="<?php echo $lastname ?>"><br><br>
	Address    : <input type="text" name="address" value="<?php echo $address ?>"><br><br>
	Job Title  : <input type="text" name="job" value="<?php echo $job ?>"><br><br>
	<?php
	if($update){ ?>
		<input style="float:right" type="submit" name="update" value="update">
	<?php 
	}else?>
	<?php{?>
	<input style="float:right" type="submit" name="add" value="add" ><br><br>
</form>