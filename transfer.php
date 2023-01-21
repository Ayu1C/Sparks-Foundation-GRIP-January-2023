<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from details where AccountNo=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from details where AccountNo=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['CurrentBalance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['CurrentBalance'] - $amount;
                $sql = "UPDATE details set CurrentBalance=$newbalance where AccountNo=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['CurrentBalance'] + $amount;
                $sql = "UPDATE details set CurrentBalance=$newbalance where AccountNo=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['FirstName'];
                $receiver = $sql2['FirstName'];
                $sql = "INSERT INTO transaction (`TransferFrom`, `TransferTo`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful'); </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style type="text/css">
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
        table
        {
            margin: 40px auto 15px;
        }

        td
        {
            padding: 17px;
            text-align:center;
			font-size:22px;
			color: black;  
            border: 2px solid grey;
        }
		th{
			color:#e08794;
			font-size:24px;
			padding:18px;
            border: 2px solid grey;
            background-color:white;
		}
        .css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.btn{
			text-align:center;
			padding:10px;
            width: 100px;
            color: white;
            background-color:blueviolet;
            font-size: 20px;
		}

        .btn:hover{
            color: whitesmoke;
            background-color: #e08794;
        }
	
        label
        {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 23px;
            font-weight: bold;
            color:blues;
        }

        input
        {
            padding: 8px;

        }
		
    </style>
</head>

<body>

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
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
    </nav>

 
	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM details where AccountNo=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table>
                <tr>
                    <th class="text-center">Account Number</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['AccountNo'] ?></td>
                    <td class="py-2"><?php echo $rows['FirstName'] ?><?php echo "&nbsp"; ?><?php echo  $rows['LastName']; ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['CurrentBalance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM details where AccountNo!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['AccountNo'];?>" >
                    
                <?php echo $rows['FirstName'] ?><?php echo "&nbsp"; ?><?php echo  $rows['LastName']; ?>(Balance: 
                    <?php echo $rows['CurrentBalance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
