<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Patient Tracking</title>
<link rel="stylesheet" href="style.css">
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f5f9; /* Light blue background */
        position: relative;
        min-height: 100vh;
    }

    .header .button-container {
        display: flex;
        align-items: center;
    }

    .header .button-container button {
        margin-left: 10px;
    }

    .updbtn {
        background-color: rgba(0, 0, 0, 0); /* Transparent button */
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 15px;
        min-height: 30px;
        min-width: 120px;
        cursor: pointer;
    }

    .add-btn {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 10px 15px;
        cursor: pointer;
    }

    .level {
        display: flex;
        justify-content: center;
        padding-top: 50px;
        position: relative;
    }

    .left-cards,
    .right-cards {
        display: flex;
        flex-direction: column;
        align-items: center;
        
    }
    .right-cards{
        margin-top: 65px;
    }

    .card {
        background-color: #fff; /* White card background */
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    header {
        display: flex;
        align-items: center; /* Align items vertically */
        justify-content: space-between; /* Spread items horizontally */
        color: #fff;
        padding: 15px;
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    header .patient-info {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 2px solid #fff;
        padding: 10px;
        border-radius: 10px;
        background-color: #2c3e50; /* Dark blue patient info */
        z-index: 2; /* Ensure patient info appears above cards */
    }

    header .patient-info h1 {
        margin: 0;
        color: #fff; /* White patient name */
    }

    header .patient-info p {
        margin-top: 5px;
        color: #fff; /* White patient ID */
    }

    header button {
        background-color: transparent;
        color: #fff;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin: 0 10px; /* Add margin to the buttons */
        position: relative;
        z-index: 1; /* Ensure buttons appear above other elements */
    }

    .logout {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .view-btn {
    background-color: #74a0be;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.view-btn:hover {
    background-color: #2980b9;
}


    /* Vertical divider */
    .vertical-divider {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 100%;
        background-color: #000;
        z-index: 1; /* Ensure divider appears above cards */
    }

    /* Add space between cards */
    .left-cards .card {
        margin-bottom: 20px;
    }

    .right-cards .card {
        margin-bottom: 20px;
    }

    /* Media Queries */
    @media screen and (max-width: 768px) {
        header .button-container {
            position: absolute;
            bottom: 15px;
            right: 15px;
        }

        .header .button-container button {
            margin-left: 5px;
        }

        .add-btn {
            position: absolute;
            bottom: 10px;
            left: 10px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .left-cards,
        .right-cards {
            flex-direction: column;
            align-items: stretch;
        }

        .right-cards {
            margin-top: 20px;
        }

        .card {
            margin: 10px 0;
        }

        header .patient-info {
            padding: 8px;
            font-size: 14px;
        }

        header .patient-info h1 {
            font-size: 16px;
        }

        header .patient-info p {
            font-size: 14px;
        }
    }
</style>
</head>
<body>
<?php




$query = "SELECT * FROM patientcheckup WHERE patientId='" . $_GET['patientId'] . "'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
} else {
    $row = mysqli_fetch_assoc($result);
    $tableName = $row['name'];


    $sel = "SELECT * FROM $tableName";
    $res = mysqli_query($conn, $sel);

   ?>

    <header>
        
        <div class="patient-info">
            <h1>Patient Name:<?php echo $tableName?> </h1>
            <p>Patient ID: <?php echo $_GET['patientId']; ?></p>
            <p>Room No: <?php echo $row['room']; ?></p>
            <p>Doctor Name:<?php echo $row['doctor']; ?></p>
        </div>
        <div class="button-container">
            <button class="updbtn">Home</button>
           
        </div>
    </header>

<?php
        
        while ($row1 = mysqli_fetch_assoc($res)) {
            
    


// mysqli_close($conn);
?>

    <!-- Vertical divider -->
    <div class="vertical-divider"></div>

    <main>
        <section class="level">
            <?php 

             if($row1['id']%2!=0){
            ?>
            <div class="left-cards">
                <div class="card candy blue">
                    <h2>Day <?php echo $row1['id'];?></h2>
                    <p>Some details about Day 1</p>
                    <a href="staticdetail.php?id=<?php echo $row1['id']; ?>&name=<?php echo $tableName;?>">
    <button class="view-btn">View</button>
</a>
                </div>

             
                <!-- <div class="card candy green">
                    <h2>Day 3</h2>
                    <p>Some details about Day 3</p>
                    <button class="view-btn">View</button>
                </div> -->
            </div>
            <?php 
             }
             else{
            ?>
            <div class="right-cards">
                <div class="card candy red">
                    <h2>Day <?php echo $row1['id'];?></h2>
                    <p>Some details about Day 2</p>
                    <a href="staticdetail.php?id=<?php echo $row1['id']; ?>&name=<?php echo $tableName;?>">
    <button class="view-btn">View</button>
</a>
                </div>
                <!-- <div class="card candy orange">
                    <h2>Day 4</h2>
                    <p>Some details about Day 4</p>
                    <button class="view-btn">View</button>
                </div> -->
            </div>
            <?php
             }
             }
}
            ?>
            <!-- Add more cards here for additional days -->
        </section>
    </main>



</body>
</html>
