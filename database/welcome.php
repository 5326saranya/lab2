<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <h2>This website is about Ameena Bee shop which is stationery shop at TTDI Jaya, Shah Alam, Selangor. From there you can buy any exercise book for exam also. </h2>
    <a href="logout.php">Logout</a>
</body>
</html>