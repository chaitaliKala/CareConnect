<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>CareConnect</title> 
	<link rel="stylesheet"
		href="admindashstyle.css"> 
	<link rel="stylesheet"
		href="responsive.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">CareConnect</div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> 
		</div> 

		<!-- <div class="searchbar"> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div>  -->

		<!-- <div class="message"> 
			<div class="circle"></div> 
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 
			<div class="dp"> -->
			<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div>  

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= 
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgTomJ_XtY2YT-rKaOCLV5BttjZc2172FUNBdWHqgcLA&s"
							class="nav-img"
							alt="dashboard"> 
							<h4><a href="index.php">Home</a></h4>
					</div> 

					<div class="option2 nav-option"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img"
							alt="articles"> 
						<h4><a href="addpatientform.php"> Add Patient</a></h4> 
					</div> 

					<div class="nav-option option3"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img"
							alt="report"> 
						<h4><a href="admindashboard.php"> View Patient</a></h4> 
					</div> 

					
					<!-- <div class="nav-option option6"> 
						<img src= 
"https://png.pngtree.com/png-vector/20190507/ourmid/pngtree-vector-doctor-icon-png-image_1024938.jpg"
							class="nav-img"
							alt="settings"> 
						<h4> View Doctor</h4> 
					</div>  -->

					<div class="nav-option logout"> 
						<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img"
							alt="logout"> 
						<h4><a href="adminlogin.php">Logout</a></h4> 
					</div> 

				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="searchbar2"> 
				<input type="text"
					name=""
					id=""
					placeholder="Search"> 
				<div class="searchbtn"> 
				<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button"> 
				</div> 
			</div> 

			<!-- <div class="box-container"> 

				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">60.5k</h2> 
						<h2 class="topic">Article Views</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views"> 
				</div> 

				<div class="box box2"> 
					<div class="text"> 
						<h2 class="topic-heading">150</h2> 
						<h2 class="topic">Likes</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
						alt="likes"> 
				</div> 

				<div class="box box3"> 
					<div class="text"> 
						<h2 class="topic-heading">320</h2> 
						<h2 class="topic">Comments</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
						alt="comments"> 
				</div> 

				<div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading">70</h2> 
						<h2 class="topic">Published</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
				</div> 
			</div>  -->
			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Patient Status</h1> 
					 
				</div> 

				<div class="report-body"> 
					<div class="report-topic-heading"> 
						<h3 class="t-op">Article</h3> 
						<h3 class="t-op">Views</h3> 
						<h3 class="t-op">Comments</h3> 
						<h3 class="t-op">Status</h3> 
					</div> 

			<?php
            include('connection.php');
            $count=0;
            $fetch=mysqli_query($conn,"SELECT * FROM patientcheckup") or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($fetch))
            {
                extract($row);

                ?>
			
					<div class="items"> 
						<div class="item1"> 
							<h3 class="t-op-nextlvl"><?php echo $row['name']?></h3> 
							<h3 class="t-op-nextlvl"><?php echo $row['patientId']?></h3> 
							<h3 class="t-op-nextlvl"><?php echo $row['room']?></h3> 
							<h3 class="t-op-nextlvl label-tag"><?php echo $row['patientStatus']?></h3> 
						</div> 

						
					</div> 
					<?php
            }
            ?>
				</div> 
				
			</div> 
			
		</div> 
	</div> 

	<script src="./admindashindex.js"></script> 

	
   
    
</body> 
</html>
