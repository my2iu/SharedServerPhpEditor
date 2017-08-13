<?php
require_once 'common.inc';
if (isset($_REQUEST['password']) and $_REQUEST['password'] == trim(file_get_contents('../../password'))):
	login();	
	header('Location: .');
elseif (isLoggedIn()): 
	header('Location: .');
else: ?>
	<?php if (isset($_REQUEST['password'])):  ?>
		<div style="color: red;">Password incorrect</div>
	<?php endif; ?>
	<h1>Enter password</h1>
	<form action="login.php" method="post">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password">
		<input type="submit" name="submit" value="submit">
	</form>
<?php endif; ?>
<body>



</body>
