<?php

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Patient ID Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2; /* Light gray background */
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #0a8f9e; /* Theme color */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #fff; /* White text color */
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        color: #fff; /* White text color */
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #fff; /* White border */
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        background-color: #fff; /* White background for input fields */
        color: #0a8f9e; /* Theme color text */
    }

    button {
        background-color: #fff; /* White background */
        color: #0a8f9e; /* Theme color text */
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    button:hover {
        background-color: #e6e6e6; /* Light gray background on hover */
    }
</style>
</head>
<body>
<div class="container">
    <h2>Patient ID Form</h2>
    <form method="GET" action="track.php">
        <div class="form-group">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" name="patientId" placeholder="Enter Patient ID" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>


</body>
</html>
