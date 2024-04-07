<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Remedies</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
    background-color: #f0f8ff; /* Light blue */
    color: #000; /* Black */
}

h1 {
    margin-top: 50px;
    color: #000080; /* Navy blue */
}

select {
    margin-top: 20px;
    padding: 10px;
    font-size: 16px;
}

button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #000080; /* Navy blue */
    color: #fff; /* White */
    border: none;
    border-radius: 5px;
}

button:hover {
    background-color: #4169e1; /* Royal blue */
}
</style>
</head>
<body>


<h1>Select a Disease</h1>
<form action="" method="post">
    <select id="dropdown" name="disease">
        <option value="">Select a disease...</option>
        <?php
        include 'connection.php';

        // Fetch data from the database
        $sql = "SELECT * FROM home_remedies";
        $result = $conn->query($sql);

        // Populate dropdown list with data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['disease'] . "'>" . $row['disease'] . "</option>";
            }
        } else {
            echo "<option value=''>No diseases found</option>";
        }
        ?>
    </select>
    <?php
if (isset($_POST['submit'])) {
    include 'connection.php';

    $disease = $_POST['disease'];

    // Prevent SQL injection
    $disease = mysqli_real_escape_string($conn, $disease);

    // Fetch remedies based on selected disease
    $sql = "SELECT * FROM home_remedies WHERE disease='$disease'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h1>Remedies for $disease</h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>{$row['remedies']}</p>";
        }
    } else {
        echo "<h1>No remedies found for $disease</h1>";
    }
}
?>
    <br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
