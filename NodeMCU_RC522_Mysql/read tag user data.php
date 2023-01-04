<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_GET['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM table_nodemcu_rfidrc522_mysql where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
	
	$msg = null;
if (!isset($data['fname'])) {
    $msg = "UNRECOGNIZED ID CARD/ID TAG PLEASE REGISTER!!!";
    $data['id'] = $id;
    $data['lrn'] = "--------";
    $data['fname'] = "--------";
    $data['mname'] = "--------";
    $data['lname'] = "--------";
    $data['gender'] = "--------";
    $data['section'] = "--------";
    $data['email'] = "--------";
    $data['mobile'] = "--------";
	} else {
		$msg = null;
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<style>
		td.lf {
			padding-left: 15px;
			padding-top: 12px;
			padding-bottom: 12px;
		}
	</style>
</head>
 
	<body>	
		<div>
			<form>
				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#10a0c5"><font  color="#FFFFFF">
						<b>User Data</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['id'];?></td>
								</tr>
								<tr>
									<td width="113" align="left" class="lf">Student LRN</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['lrn'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">First Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['fname'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Middle Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['mname'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Last Name</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['lname'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Gender</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['gender'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Section</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['section'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Email</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['email'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Mobile Number</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['mobile'];?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p style="color:red;"><?php echo $msg;?></p>

	</body>
</html>