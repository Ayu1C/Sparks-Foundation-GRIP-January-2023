<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/images/bank.png">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Capital Bank</title>
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
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>

        </div>
    </nav>

    <div id="home">
        <div  class="caption">
            <h1>
                Your Money, Our Responsibility.
                Transfer Securely, Transfer Instantly.
            </h1>  
            <br>
            <br>
            <a href="customers.php">
              <button id="submitBtn" class="btn btn-lg btn-primary">View Account Holders >></button>
            </a>  
           
        </div>  
        <img class="transferIMG" src="images/money_transfer-removebg-preview.png" alt="money_transfer">
    </div>

    <!-- about section -->
    <div  id="about">
         <p>
          <h2>About Us</h2>
          <br>
          Capital Bank is an Indian Multinational, Public Sector Banking and Financial services statutory body headquartered in Mumbai. The rich heritage and legacy of over 50 years, accredits Capital Bank as the most trusted Bank by Indians.

          Capital Bank serves over 10 lakh customers through its vast network of over 2,000 branches, 2617 ATMs/ADWMs, 1,968 BC outlets, with an undeterred focus on innovation, and customer centricity, which stems from the core values of the Bank - Service, Transparency, Ethics, Politeness and Sustainability.
          
          The Bank has successfully diversified businesses through its various subsidiaries i.e General Insurance, Life Insurance, Mutual Fund, Online Money Transfers, etc. It has spread its presence globally and operates across time zones through 51 offices in 10 foreign countries.
          
          Growing with times, Capital Bank continues to redefine banking in India, as it aims to offer responsible and sustainable Banking solutions.
         </p>

    </div>

    <!-- contact section  -->
    <div id="contact">
      <h2 class="contactHeading">Contact Us</h2>
      <br>
    <form action="get">
      <label for="Name" >Name : </label>
      <input type="text" class="form"><br><br>
      <label for="Contact No." >Contact No. :</label>
      <input type="tel" class="form"><br><br>
      <label for="Email" >Email : </label>
      <input type= "email" class="form"><br><br>
      <label for="What can we help you with ?">What can we help you with ?</label><br>
      <textarea name="details" id="" cols="43" rows="2" style="border-radius: 3px;"></textarea><br><br>
      <button type="submit" class="btn btn-primary">Submit</button><br><br>
    </form>
       
    </div>    
    

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  
</body>
</html>