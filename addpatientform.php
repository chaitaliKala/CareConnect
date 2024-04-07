<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Patient Daily Checkup Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2; /* Light blue background */
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: rgba(0, 123, 255, 0.2); /* Light blue background with transparency */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.5s ease forwards; /* Animation */
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        background-color: #fff; /* White background for input fields */
    }
    button {
        background-color: #007bff; /* Blue shade */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }
    button:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }

    /* Animation keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>
<div class="container">
    <h2>Patient Daily Checkup Form</h2>
    <!-- <div>
        <button id="prevDayBtn">Previous Day</button>
        <button id="nextDayBtn">Next Day</button>
        <button id="newDayBtn">Add New Day</button>
        <button id="editBtn" style="display:none;">Edit</button>
        <button id="resetBtn" style="display:none;">Reset</button>
        <button id="saveBtn" style="display:none;">Save Changes</button> <br> <br>
    </div> -->
    <form id="patientForm" method="post" action="addpatientform.php">
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="name">Patient Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="room">Room Number:</label>
            <input type="text" id="room" name="room" required>
        </div>
        <div class="form-group">
            <label for="patientId">Patient ID:</label>
            <input type="text" id="patientId" name="patientId" required>
        </div>
        <div class="form-group">
            <label for="doctor">Doctor Name:</label>
            <input type="text" id="doctor" name="doctor">
        </div>
        <div class="form-group">
            <label for="patientStatus">Patient Status:</label>
            <input type="text" id="patientStatus" name="patientStatus">
        </div>
        <hr>
        <h3>Daily Checkup Details</h3>
        <div class="form-group">
            <label for="vitalSigns">Vital Signs:</label>
            <textarea id="vitalSigns" name="vitalSigns" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="bloodPressure">Blood Pressure:</label>
            <input type="text" id="bloodPressure" name="bloodPressure" required>
        </div>
        <div class="form-group">
            <label for="sugarLevel">Sugar Level:</label>
            <input type="text" id="sugarLevelF" name="sugarLevelF" placeholder="F" required>
            <input type="text" id="sugarLevelPP" name="sugarLevelPP" placeholder="PP" required>
        </div>
        <div class="form-group">
            <label for="oxygenLevel">Oxygen Level:</label>
            <input type="text" id="oxygenLevel" name="oxygenLevel" required>
        </div>
        <div class="form-group">
            <label for="assignmentTreatment">Assignment and Treatment:</label>
            <textarea id="assignmentTreatment" name="assignmentTreatment" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="patientEducation">Patient Education Session:</label>
            <textarea id="patientEducation" name="patientEducation" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="otherComments">Other Comments:</label>
            <textarea id="otherComments" name="otherComments" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="hospital">Hospital Name</label>
            <textarea id="hospital" name="hospital" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" id="submit">Save</button> 
       
    </form>
<!-- <button  onclick="redirect()" style="background-color: rgb(107, 128, 150); float:right;">Home</button> -->
</div>
<script src="buttons.js"></script>
<script>
       function redirect(){
        window.location.href="admindashboard.php";
       }
    </script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $name = $_POST['name'];
    $room = $_POST['room'];
    $patientId = $_POST['patientId'];
    $doctor = $_POST['doctor'];
    $patientStatus = $_POST['patientStatus'];
    $vitalSigns = $_POST['vitalSigns'];
    $bloodPressure = $_POST['bloodPressure'];
    $sugarLevelF = $_POST['sugarLevelF'];
    $sugarLevelPP = $_POST['sugarLevelPP'];
    $oxygenLevel = $_POST['oxygenLevel'];
    $assignmentTreatment = $_POST['assignmentTreatment'];
    $patientEducation = $_POST['patientEducation'];
    $otherComments = $_POST['otherComments'];
    $hospital = $_POST['hospital'];



    // inserting data of all unique paitent


    $sql="INSERT INTO `patientcheckup`(`date`, `name`, `room`, `patientId`, `doctor`, `patientStatus`, `vitalSigns`, `bloodPressure`, `sugarLevelF`, `sugarLevelPP`, `oxygenLevel`, `assignmentTreatment`, `patientEducation`, `comment`, `hospital`) VALUES ('$date', '$name', '$room',  '$patientId', '$doctor', '$patientStatus', '$vitalSigns', '$bloodPressure', '$sugarLevelF', '$sugarLevelPP', ' $oxygenLevel', '$assignmentTreatment', '$patientEducation', '$otherComments','$hospital')";

// creating table for each patient
    $table= "CREATE TABLE `$name` (
      
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    name VARCHAR(255) NOT NULL,
    room VARCHAR(50) NOT NULL,
    patientId VARCHAR(50) NOT NULL ,
    doctor VARCHAR(255),
    patientStatus VARCHAR(255),
    vitalSigns TEXT NOT NULL,
    bloodPressure VARCHAR(50) NOT NULL,
    sugarLevelF VARCHAR(50) NOT NULL,
    sugarLevelPP VARCHAR(50) NOT NULL,
    oxygenLevel VARCHAR(50) NOT NULL,
    assignmentTreatment TEXT NOT NULL,
    patientEducation TEXT NOT NULL,
    comment VARCHAR(200) NOT NULL,
    hospital VARCHAR(200) NOT NULL

);";

// inserting data into  each patient data
$sqlp="INSERT INTO `$name`(`date`, `name`, `room`, `patientId`, `doctor`, `patientStatus`, `vitalSigns`, `bloodPressure`, `sugarLevelF`, `sugarLevelPP`, `oxygenLevel`, `assignmentTreatment`, `patientEducation`, `comment`, `hospital`) VALUES ('$date', '$name', '$room',  '$patientId', '$doctor', '$patientStatus', '$vitalSigns', '$bloodPressure', '$sugarLevelF', '$sugarLevelPP', ' $oxygenLevel', '$assignmentTreatment', '$patientEducation', '$otherComments','$hospital')";


        

  $add = mysqli_query($conn,$sql) or die(mysqli_error($conn));
  $tb = mysqli_query($conn,$table) or die(mysqli_error($conn));

  $addp = mysqli_query($conn,$sqlp) or die(mysqli_error($conn));



  
  if($add){
    // $_SESSION['name'] = $user;
    //     setcookie("username", $user, time() + 7200);
    //     setcookie("password", $pass, time() + 7200);
    //     header("Location: index.php");
    //     exit();
    echo "<script>";
    echo 'alert("Data inserted successfully...");';
    echo 'window.location.href="admindashboard.php";';
    echo "</script>";



   
  }
  else{
    alert($conn->error_log());
  }
}





?>