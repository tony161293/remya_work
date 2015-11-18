<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];

				$to       = "tony161293@gmail.com";
				$subject  = 'Contact form Response';
				$headers  = "From: contact@silentspringkerala.org\r\n";
				$headers .= "Reply-To: Plese don't reply to this email\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$message  = '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		        <html xmlns="http://www.w3.org/1999/xhtml">
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		        <title>Contact Response</title>
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
				<td width="50%" height="43" align="left" valign="middle">Email</td>
				<td width="50%" height="43" align="left" valign="middle">'.$email.'</td>
				</tr>
				<tr>
				<td width="50%" height="43" align="left" valign="middle">Subject</td>
				<td width="50%" height="43" align="left" valign="middle">'.$sub.'</td>
				</tr>
				</table>
				</body>
				</html>
				';

mail($to, $subject, $message, $headers);

?>
