<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $disease = $_POST['disease'];

    // Prevent SQL injection
    $disease = mysqli_real_escape_string($conn, $disease);

    // Fetch remedies based on selected disease
    $sql = "SELECT remedies FROM home_remedies WHERE disease='$disease'";
    $res = mysqli_query($conn, $sql);
    
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        echo "<script>alert('{$row['remedies']}');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<div id="result"></div>
</body>
</html>