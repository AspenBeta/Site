<?php
$action = $_GET["action"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];

if($action = "save") {
  file_put_contents("saves.txt", $Username);
  file_put_contents("saves.txt", $Password);
}
?>
<html>
<head>
 <title>myform</title>
</head>
<body>
  <form action="?action=save" name="myform" method="post">
    <input type=text name="Username">
	<input type=text name="Password">
    <input type="submit" value="submit">
  </form>
</body>
</html>
