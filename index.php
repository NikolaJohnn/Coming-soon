<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Coming soon</title>
</head>
<body>

  <header>  
    <div class="container">
      <div class="container-fluid"> 

        <a href="index.php"><img src="img/logo.svg" alt="logo"></a> <nav><b><a href="#" id="nav1">About us</a>&nbsp;&nbsp;<a href="form.php" id="nav2">Contact</a></b></nav>

        <div class="nav-mobile NM1" onclick="myFunction()"  id="NM1"><img src="img/burger.svg" alt=""></div>

        <div onclick="myFunction()" class="nav-mobile NM2" id="NM2"><img src="img/x.svg" alt=""></div>
      </div>
    </div>
  </header>

  <section id="first" class="first">

  <div class="title">

    <h1>COMING SOON</h1>

    <h2>A Remote Teaching Solution You’ve Been Waiting For</h2>

    <h3>Introducing Remote Labs - a way to bring project-based <br> learning into your virtual classroom.</h3>

   </div>
   <div class="CD">

     <div class="days">

      <p id="demo" class="timer"></p>
      <h3>Days</h3>

     </div>

      <div class="hours">

        <p id="demo2"class="timer"></p>
        <h3>Hours</h3>

      </div>

      <div class="minutes">

        <p id="demo3" class="timer"></p>
        <h3>Minutes</h3>

      </div>

       <div class="seconds">
        <p id="demo4" class="timer"></p>

      <h3>Seconds</h3>

     </div>

    </div>

    <img id="img" src="img/neurons_tossing_synapse-2.svg" alt="neurons_tossing_synapse">

    <footer>
 
      <div class="footer-content">
      
        <p>Join our list and you’ll be the first to know as soon as we launch. Get our lesson plans <br> for FREE!</p>

        <a id="a" href="form.php">Get on the List!</a>
  
        <div class="SM">
         <a href="https://twitter.com/backyardbrains" target="_blank"><img src="img/Twitter.svg" alt="Twitter"></a> 
         <a href="https://www.instagram.com/backyardbrains/" target="_blank"> <img src="img/insta.svg" alt="Instagram"></a> 
         <a href="https://www.facebook.com/BackyardBrains" target="_blank"> <img src="img/Fb.svg" alt="FaceBook"></a> 
        </div>

      </div>

    <footer>

</section>

    <section id="second">

      <img src="img/Arms-2.svg" alt="">
      <nav><b><a href="index.php" id="nav1">About us</a><br><br><br><a href="form.php" id="nav2">Contact</a></b></nav>
      <img src="img/neurons_tossing_synapse-2.svg" alt="">

    </section>

    <script>
    function myFunction() {
      var x = document.getElementById("NM1");
      var y = document.getElementById("NM2");
      var z = document.getElementById("first");
      var p = document.getElementById("second");
      if (x.style.display === "flex") {
        x.style.display = "none";
        y.style.display = "flex"
        p.style.display = "flex"
        z.style.display = "none"
      } else {
        x.style.display = "flex";
        y.style.display = "none"
        z.style.display = "block"
        p.style.display = "none"
      }
    }

    // Set the date we're counting down to
    var countDownDate = new Date("Sep 15, 2020 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days;

    document.getElementById("demo2").innerHTML = hours;

    document.getElementById("demo3").innerHTML = minutes;

    document.getElementById("demo4").innerHTML = seconds;
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  </script>
</body>
</html>