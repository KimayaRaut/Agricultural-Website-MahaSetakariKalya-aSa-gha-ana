<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>MahaSetakariKalyanaSanghatana.com</title>

    <style>
    	#feedback{
    		background-color: #DA685C;
    		color: white;
    		font-family: 'Montserrat', sans-serif;
    		text-align: center;
    		vertical-align: center;

    	}

    	#feedback h1{
    		font-size: 50px;

    	}

    	#btn{
    		background-color: #35B367;
    	}

    </style>
  </head>
  <body>
    <!-- ***********************************************Header************************************************** -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#" id="title" ><img src="img/titlelogo.png" style="width: 55px; height: 55px;" id="titlelogo">MahaSetakariKalyanaSanghatana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item" active>
            <a class="nav-link" href="http://localhost/dkcoders/test.php" style="color:#F99910;">Feedback</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="News.html" ">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
<!-- ***********************************************End Header************************************************** -->

<!-- ***********************************************Marquee************************************************** -->
      <marquee behavior="scroll" direction="left" id="fmarquee"> 
          Market Rates : 
          <a href="http://www.mumbaiapmc.org/uplaodeddocuments/dailyrates.pdf">Click Here To Download</a>
          <span>
            /   कोरोनाच्या संसर्गास प्रतिबंध करण्यासाठी करण्यात आलेल्या उपाय योजनांचा तपशील:<a href="http://59.185.247.61:808/">Click Here</a>
          </span>
      </marquee>
<!-- *********************************************** End Marquee************************************************** -->

<!-- *****************************************************Note********************************************** -->
<div id="note">
	<span>We would love to hear from you!</span>
	<span>Please use the Contact Form to send us a message.</span>
</div>
<!-- ***************************************************** End Note********************************************** -->

<!-- *****************************************************feedback******************************************** -->
<div id="feedback">
	<h1>Feedback Form</h1>
		<form action="pro.php" method="POST">
		Name : <input type="text" name="name1" ><br><br>
		Rate(1 to 10) :<input type="number" name="rate"><br><br>
		Comments : <input type="text" name="comment"><br><br>
		Email : <input type="text" name="email"><br><br>
		<input type="submit" id="btn" value="Submit"><br><br>
	</form>
</div>
<!-- ***************************************************** End feedback******************************************** -->

<!-- ************************************************Collapse Nav********************************************* -->
      <div id="collaps_nav">
        <div id="collaps_nav_sub">
          <div class="btn" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="https://www.msamb.com/"><img src="img/logo.png"></a>
          </div>

          <div class="btn " data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="https://www.maharashtra.gov.in/"><img src="img/logo1.png"></a>
          </div>

          <div class="btn " data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="http://www.krishi.maharashtra.gov.in/"><img src="img/logo2.png"></a>
          </div>

          <div class="btn " data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="http://apeda.gov.in/"><img src="img/logo5.png"></a>
          </div>

          <div class="btn" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="http://www.digitalindia.gov.in/"><img src="img/logo6.png"></a>
          </div>

          <div class="btn " data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseExample">
             <a href="https://india.gov.in/"><img src="img/logo7.png"></a>
          </div>
        </div> 
      </div>
<!-- ************************************************ End Collapse Nav**************************************** -->


<!-- ************************************************Footer********************************************* -->
<div id="footer">
  <hr>
  <span id="follow">
    Follow Us On :
    <a href="https://www.facebook.com/mahasetakari.kalyanasanghatana" target="_blank"><img src="img/facebook.png" style="width: 20px; height: 20px;"></a>
    <a href="https://mobile.twitter.com/KalyanaMaha" target="_blank"><img src="img/twitter.png" style="width: 20px; height: 20px;"></a>
    <a href="https://instagram.com/mahasetakarikalyanasanghatana?igshid=5s7dg0xsi809" target="_blank"><img src="img/insta.png" style="width: 20px; height: 20px;"></a>
    <hr>
  <span>© Last updated on 09/04/2021.</span><br>
 <span> © 2021 MahaSetakariKalyanaSanghatana.com</span>
</div>
<!-- ************************************************End Footer***************************************** -->


 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>