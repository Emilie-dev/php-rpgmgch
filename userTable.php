<!DOCTYPE html>
<html>
<head>
	<title>userTable</title>
</head>
<body>
	
	<table>
		<thead>
			<th>id</th>
			<th>email</th>
			<th>createdAt</th>
		</thead>
		<tbody>
			
<?php
$users = require('users.php');

foreach ($users as $user) {
	echo '<tr><td>'.$user->id().' '.$user->email().' '.$user->createdAt().'</td></tr>';
}

?>			
			
		</tbody>
	</table>





</body>
</html>