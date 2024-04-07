<!DOCTYPE html>
<html lang="en">
<head>
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- for Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- color -->
    <link href="assets/css/variables.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Tracking</title>
    <link rel="stylesheet" href="style.css">
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-image: url('');
            position: relative;
            min-height: 100vh;
            background-color: #cad7fda4;
        }

        

        .updbtn {
            background-color: #9CC7DA;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px;
            min-height: 30px;
            min-width: 120px;
            cursor: pointer;
        }

        .add-btn {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color:  #9CC7DA;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .level {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background-color: #B3DFF3;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            max-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        @media screen and (min-width: 768px) {
            .level {
                padding-top: 100px;
            }
            .card {
                flex-basis: calc(50% - 20px);
            }
        }

        @media screen and (min-width: 1024px) {
            .card {
                flex-basis: calc(33.333% - 20px);
            }
        }

    </style>
</head>
<body>

<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <h2  class="logo d-flex align-items-center scrollto me-auto me-lg-0" style="color:#485664;">CareConnect<span>.</span></h2>

        <h2  class="logo d-flex align-items-center scrollto me-auto me-lg-0" style="color:#485664;"><center> Patient Tracking </Center></h2>

        <nav id="navbar" class="navbar">
            <ul>

                <li class="nav-link scrollto"><a href="index.php"><span>Home</span> </a>

                </li>
                <li><a class="nav-link scrollto" href="addpatientform.php">Add patient</a></li>

                <li><a class="nav-link scrollto" href="adminlogin.php">Logout</a></li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<main>
    <section class="level">

        <div class="grid-container">
            <?php
            include('connection.php');
            $count=0;
            $fetch=mysqli_query($conn,"SELECT * FROM patientcheckup") or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($fetch))
            {
                extract($row);

                ?>
                <div class="card candy blue">
                    <h5>Patient Name: <?php echo $row['name']?></h5>
                    <p>Patient Id:<?php echo $row['patientId']?></p>

                    <p>Room No: <?php echo $row['room']?></p>
                    <p>Status:<?php echo $row['patientStatus']?></p>
                    <a  href="updateform.php?id=<?php echo  $patientId;?>"><input type="button" name="submit" class="updbtn" value="Daily Update"/></a>
                    <!-- <button name="update"  onclick="redirect()">Daily Update</button> -->
                </div>
                <?php
            }
            ?>
        </div>
    </section>
</main>
<a href="addpatientform.php"><button class="add-btn updbtn">Add Patient</button></a>

<script>
    function redirect(){
        window.location.href="addpatientform.php";
    }

</script>

</body>
</html>
