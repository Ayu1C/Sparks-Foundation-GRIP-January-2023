<?php
$servername = "localhost";
$username = "root";
$password = "No password";
$dbname = "customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$q="select * from details ";
$result=mysqli_query($conn,$q);
$row_count=mysqli_num_rows($result);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/images/bank.png">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Capital Bank</title>

    <!-- CSS  -->
    <style>
        body
        {
            background-color: #EEF1FF;
        }
        h1
        {
           position: absolute;
           top: 80px;
           left: 670px;
        }
         
        .navbar
        {
            background-color: #B1B2FF;
        }

        .nav-item
        {
           font-family: Arial, Helvetica, sans-serif;
           font-weight:700;
           font-size: 20px;
           margin-left: 25px;
        }

        table{
            border: solid black 2px;
            text-align:center;
			margin: 150px auto;
			border:4px solid gray;
			
        }

        td
        {
            border: solid black 2px;
            padding: 10px;
            text-align:center;
			font-size:22px;
			color: black;
             
        }
		th{
			color:#e08794;
			font-size:24px;
			padding:16px;
		}
        .btn{
			margin-left:auto;
			margin-right:auto;
			background-color: #B1B2FF;
			text-align:center;
			padding:2px;
            border: solid grey 2px;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 20px;
		}
		.btn:hover{
			background-color:blue;
			color: azure;
		}
		
    </style>
</head>
<body>

<?php
    include 'config.php';
    $sql = "SELECT * FROM details";
    $result = mysqli_query($conn,$sql);
?>

    <!-- navbar -->
    <nav class="navbar fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold; font-size: 30px;" href="#">
            <img src="images/bank.png" alt="Logo" width="37" height="37" class="d-inline-block align-text-top">
            Capital Bank
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php #contact">Contact</a>
            </li>
          </ul>
        </div>
    </nav>


    <!-- customers list -->
    <h1><u>Customers</u></h1>
    <table>
        <thead style="font-family:'Montserrat', sans-serif;">
            <th>S.NO.</th>
            <th>NAME</th>
			<th>ACCOUNT NO.</th>
            <th>CONTACT NO.</th>
            <th>EMAIL</th>
            <th>BALANCE</th>
            <th>OPERATION</th>
        </thead>
        <tbody>
		<tr id="01">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn ">Transfer</button></a></td>
		</tr>
		<tr id="02">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="03">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="04">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="05">
			<?php  
				$row=mysqli_fetch_array($result);
			?> class="row-data"
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="06">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="07">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="08">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="09">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
        <tr id="10">
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td class="row-data"><?php echo  $row["SNo"]; ?></td>
			<td class="row-data"><?php echo  $row["FirstName"]; ?><?php echo "&nbsp"; ?><?php echo  $row["LastName"]; ?></td>
			<td class="row-data"><?php echo  $row["AccountNo"]; ?></td>
            <td class="row-data"><?php echo  $row["ContactNo"]; ?></td>
			<td class="row-data"><?php echo  $row["Email"]; ?></td>
			<td class="row-data"><?php echo  $row["CurrentBalance"]; ?></td>
			<td><a href="transfer.php?id= <?php echo $row['AccountNo'] ;?>"> <button type="button" class="btn">Transfer</button></a></td>
		</tr>
		</tbody>
    </table>

    
</body>


</html>