<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['fname'];
        $name = $_POST['mname'];
        $name = $_POST['lname'];
		$id = $_POST['id'];
        $name = $_POST['lrn'];
		$gender = $_POST['gender'];
        $name = $_POST['section'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE table_nodemcu_rfidrc522_mysql  fname = ?, mname = ?, lname = ?, lrn = ?, section = ?, gender =?, email =?, mobile =? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$gender,$email,$mobile,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>