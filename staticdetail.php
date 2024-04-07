<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Patient Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    .container {
        margin-top: 50px;
    }
    .card {
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        background-color: #6050DC;
        color: white;
        border-bottom: none;
    }
    .card-body {
        background-color: #f0f8ff; /* Light blue */
        color: #333;
        border: 1px solid #ddd;
        border-top: none;
    }
    .btn-print {
        background-color: #0056b3; /* Dark blue */
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-print:hover {
        background-color: #004080; /* Darker blue on hover */
    }
    @media print {
        .btn-print {
            display: none;
        }
    }
</style>
</head>
<body>
<?php
$table=$_GET['name'];
$query = "SELECT * FROM $table WHERE id='" . $_GET['id'] . "'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
} else {
    $row = mysqli_fetch_assoc($result);
    $date = $row['date'];
    $name = $row['name'];
    $room = $row['room'];
    $patientId = $row['patientId'];
    $doctor = $row['doctor'];
    $patientStatus = $row['patientStatus'];
    $vitalSigns = $row['vitalSigns'];
    $bloodPressure = $row['bloodPressure'];
    $sugarLevelF = $row['sugarLevelF'];
    $sugarLevelPP = $row['sugarLevelPP'];
    $oxygenLevel = $row['oxygenLevel'];
    $assignmentTreatment = $row['assignmentTreatment'];
    $patientEducation = $row['patientEducation'];
    $otherComments = $row['comment'];
}
?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Patient Details</h5>
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> <?php echo $date; ?></p>
            <p><strong>Patient Name:</strong> <?php echo $name; ?></p>
            <p><strong>Room Number:</strong> <?php echo $room; ?></p>
            <p><strong>Patient ID:</strong> <?php echo $patientId; ?></p>
            <p><strong>Doctor Name:</strong> <?php echo $doctor; ?></p>
            <p><strong>Patient Status:</strong> <?php echo $patientStatus; ?></p>
            <p><strong>Vital Signs:</strong> <?php echo $vitalSigns; ?></p>
            <p><strong>Blood Pressure:</strong> <?php echo $bloodPressure; ?></p>
            <p><strong>Sugar Level (Fasting):</strong> <?php echo $sugarLevelF; ?></p>
            <p><strong>Sugar Level (Postprandial):</strong> <?php echo $sugarLevelPP; ?></p>
            <p><strong>Oxygen Level:</strong> <?php echo $oxygenLevel; ?></p>
            <p><strong>Assignment and Treatment:</strong> <?php echo $assignmentTreatment; ?></p>
            <p><strong>Patient Education Session:</strong> <?php echo $patientEducation; ?></p>
            <p><strong>Other Comments:</strong> <?php echo $otherComments; ?></p>
            <button class="btn-print" onclick="window.print()">Print</button>
            <button class="btn-print"  onclick="redirect()">Home Remedies</button>

        </div>
    </div>
</div>
</body>

<script>

    function redirect()
    {
        window.location.href="home_remedies.php";
    }
    </script>
</html>
