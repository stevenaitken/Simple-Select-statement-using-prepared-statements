<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Steven Aitken 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<main class="mainContent">
<?php 
include 'includes/errors.php';
include 'includes/db_connx.php';  
$username = $_POST['search'];

$sql ="SELECT username, pwd FROM users WHERE username =?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result
while ($row = $result->fetch_assoc()) {
    echo "<p>".$row['username']."</p>";
    echo "<p>".$row['pwd']."</p>";
}

$stmt->close();
$conn->close();

?>
</main>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>






