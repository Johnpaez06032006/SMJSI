<!DOCTYPE html>
<html>
<head>
	<title>User Logiiin</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

	<center>
		<?php include('header.html');?>
		</br>
		<table width="19%" style="border: 4px solid #3c8653;border-style: inset;border-radius: 10px;background-color: #21b8cc;">
			<tr>
				<th width="80%">
					</br>
					<font style="font-size: 15px;"><a href="login.php?usertype=ADMIN" style="text-decoration: none;text-decoration: none;background-color: #6cf1de;border-style: outset;border: 2px solid gray;border-radius: 5px;padding: 10px 30px;color: black;">ADMIN</a></font>
					&nbsp;&nbsp;
					<font style="font-size: 15px;"><a href="login.php?usertype=USER" style="text-decoration: none;text-decoration: none;background-color: #6cf1de;border-style: outset;border: 2px solid gray;border-radius: 5px;padding: 10px 30px;color: black;">USER</a></font>
					</br></br>
				</th>
			</tr>
		</table>
		</br> 
		<center>
			<button><a href="search.php" style="text-decoration: none; color: white; background-color: black; padding: 3px; border-radius: 5px;">Search Students Here</a></button> 
		</center>
	</center>




</body>
</html>




