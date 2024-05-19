<?php 
$userName = "John";
$password = "1234";
$email = "t@t.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Practice</title>
</head>

<body>
<?php if ($userName === "John" && $password === "1234" && $email === "t@t.com") : ?>
    <h3> Welcome John</h3>
    <p> You are logged in</p>
<?php else : ?>
    <h3> You are not logged in</h3>
    <p> Please login</p>
<?php endif; ?>
    

</body>

</html>