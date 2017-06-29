<!DOCTYPE html>
<html>
<head>
	<title>userTable</title>
</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>email</th>
				<th>createdAt</th>			
			</tr>
		</thead>
		<tbody>
			
<?php
$users = require('users.php');

foreach ($users as $user) {
	echo '<tr><td>'.$user->getId().'</td><td>'.$user->getEmail().'</td><td> '.$user->getCreatedAt().'</td></tr>';
}

?>						
		</tbody>
	</table>





</body>
</html>