<?php
$name = $_POST['name'];
$status = $_POST['status'];
$occupation = $_POST['occupation'];
$district = $_POST['district'];
$qualification = $_POST['qualification'];
$maxval = $_POST['maxval'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$comaddress = $_POST['comaddress'];
$cooperation = $_POST['cooperation'];
$recommend = $_POST['recommend'];
$relation = $_POST['relation'];
$statusnew = "";
foreach($status as $val) {
    $statusnew .= $val;
    $statusnew .= " ";
}
$sibling = "";
for ($i = 0; $i < $maxval; ++$i) {
	if (!empty($gender[$i]) && !empty($age[$i])) {
	$sibling .= "Gender:".$gender[$i].", Age:".$age[$i]."\r\n";
}
}

				$to       = "tony161293@gmail.com";
				$subject  = 'Beneficiary Submission details';
				$headers  = "From: contact@silentspringkerala.org\r\n";
				$headers .= "Reply-To: Plese don't reply to this email\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message  = '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		        <html xmlns="http://www.w3.org/1999/xhtml">
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		        <title>Beneficiary Details</title>
		        </head>
		        <html>
		        <body>
		        <table width="100%" border="1" cellpadding="5" style="padding:10px; border:0px solid #eaeaea;">
		        <tr style="font-size:16px; color:#000;">
		        <td width="50%" height="40" class="image"><strong>Specification</strong></td>
		        <td width="50%"><strong>Value</strong></td>
		        </tr>
		        <tr>
				<td width="50%" height="43" align="left" valign="middle">Name</td>
				<td width="50%" height="43" align="left" valign="middle">'.$name.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Status</td>
				<td width="50%" height="43" align="left" valign="middle">'.$statusnew.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Occupation</td>
				<td width="50%" height="43" align="left" valign="middle">'.$occupation.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">District</td>
				<td width="50%" height="43" align="left" valign="middle">'.$district.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Qualification</td>
				<td width="50%" height="43" align="left" valign="middle">'.$qualification.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Address</td>
				<td width="50%" height="43" align="left" valign="middle">'.$address.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Communication address</td>
				<td width="50%" height="43" align="left" valign="middle">'.$comaddress.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Recommended by</td>
				<td width="50%" height="43" align="left" valign="middle">'.$recommend.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Cooperation</td>
				<td width="50%" height="43" align="left" valign="middle">'.$cooperation.'</td>
				</tr>
				</table>
				</body>
				</html>
				';

mail($to, $subject, $message, $headers);

?>
