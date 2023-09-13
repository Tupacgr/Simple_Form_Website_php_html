<?php
	$fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$percentage_save = $_POST['percentage_save'];
	$percentage_spend = $_POST['percentage_spend'];
	$satisfied = $_POST['satisfied'];

	// Database connection
	$conn = new mysqli('localhost','root','','form_results');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form_results(fullname, gender, age, percentage_save, percentage_spend, satisfied) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiiis", $fullname, $gender, $age, $percentage_save, $percentage_spend, $satisfied);
		$execval = $stmt->execute();
		echo $execval;
		//echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header("Location: thanks.php", true, 301);
        exit();
	}
?>