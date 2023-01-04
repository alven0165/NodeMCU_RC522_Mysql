<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$id = $_POST['id'];
		$lrn = $_POST['lrn'];
		$section = $_POST['section'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_nodemcu_rfidrc522_mysql (fname,mname,lname,id,lrn,gender,section,email,mobile) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($fname,$mname,$lname,$id,$lrn,$gender,$section,$email,$mobile));
		Database::disconnect();
		header("Location: user data.php");
    }
?>