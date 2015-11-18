<?php
$support = $_POST['support'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$martial = $_POST['martial'];
$occupation = $_POST['occupation'];
$district = $_POST['district'];
$spouse = $_POST['spouse'];
$heroccupation = $_POST['heroccupation'];
$address = $_POST['address'];
$comaddress = $_POST['comaddress'];
$qualification = $_POST['qualification'];
$how = $_POST['how'];
$workdist = $_POST['workdist'];
$experience = $_POST['experience'];
$cooperation = $_POST['cooperation'];
$recommend = $_POST['recommend'];
$relation = $_POST['relation'];

				$to       = "tony161293@gmail.com";
				$subject  = 'Support Submission details';
				$headers  = "From: contact@silentspringkerala.org\r\n";
				$headers .= "Reply-To: Plese don't reply to this email\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message  = '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		        <html xmlns="http://www.w3.org/1999/xhtml">
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		        <title>Support Details</title>
		        </head>
		        <html>
		        <body>
		        <table width="100%" border="1" cellpadding="5" style="padding:10px; border:0px solid #eaeaea;">
		        <tr style="font-size:16px; color:#000;">
		        <td width="50%" height="40" class="image"><strong>Specification</strong></td>
		        <td width="50%"><strong>Value</strong></td>
		        </tr>
		        <tr>
				<td width="50%" height="43" align="left" valign="middle">Support type</td>
				<td width="50%" height="43" align="left" valign="middle">'.$support.'</td>
				</tr>
		        <tr>
				<td width="50%" height="43" align="left" valign="middle">Name</td>
				<td width="50%" height="43" align="left" valign="middle">'.$name.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Phone</td>
				<td width="50%" height="43" align="left" valign="middle">'.$phone.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Email</td>
				<td width="50%" height="43" align="left" valign="middle">'.$email.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Gender</td>
				<td width="50%" height="43" align="left" valign="middle">'.$sex.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Martial status</td>
				<td width="50%" height="43" align="left" valign="middle">'.$martial.'</td>
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
				<td width="50%" height="43" align="left" valign="middle">Spouse</td>
				<td width="50%" height="43" align="left" valign="middle">'.$spouse.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Her Occupation</td>
				<td width="50%" height="43" align="left" valign="middle">'.$heroccupation.'</td>
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
				<td width="50%" height="43" align="left" valign="middle">Qualification</td>
				<td width="50%" height="43" align="left" valign="middle">'.$qualification.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">How can you support us...??</td>
				<td width="50%" height="43" align="left" valign="middle">'.$how.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">District you are intending to work</td>
				<td width="50%" height="43" align="left" valign="middle">'.$workdist.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Any experience in social work</td>
				<td width="50%" height="43" align="left" valign="middle">'.$experience.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">What makes you to cooperate with this work?</td>
				<td width="50%" height="43" align="left" valign="middle">'.$cooperation.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Recommended By</td>
				<td width="50%" height="43" align="left" valign="middle">'.$recommend.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Relation to the Person</td>
				<td width="50%" height="43" align="left" valign="middle">'.$relation.'</td>
				</tr>
				</table>
				</body>
				</html>
				';

mail($to, $subject, $message, $headers);

?>
