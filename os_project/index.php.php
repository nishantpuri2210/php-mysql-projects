

<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<h3> Contact US</h3>
<form action="thankyou.php" method="post">
  Name:<br>
  <input type="text" name="u_name" required><br>
 
  Email:<br>
  <input type="email" name="u_email" required><br>
 
Subject:<br>
  <input type="text" name="subj" required><br>
 
Response:<br>
  <input type="text" name="response" required><br>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>