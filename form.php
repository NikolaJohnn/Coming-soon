<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Coming soon</title>
  <title>Coming soon</title>
</head>
<body>
<header>  
    <div class="container">
      <div class="container-fluid"> 

        <a href="index.php"><img src="img/logo.svg" alt="logo"></a> <nav><b><a href="index.php" id="nav3">About us</a>&nbsp;&nbsp;<a href="form.php" id="nav4">Contact</a></b></nav>

        <div class="nav-mobile NM1" onclick="myFunction()"  id="NM1"><img src="img/burger.svg" alt=""></div>

        <div onclick="myFunction()" class="nav-mobile NM2" id="NM2"><img src="img/x.svg" alt=""></div>
      </div>
    </div>
  </header>
   <div class="arms"></div>
    <section id="first" class="first1">
      <div class="form">
        <form  method="POST" action="apply.php">       
        <p>Full Name</p>
          <input type="text" name="name">
          <p>Email</p>        
          <input type="email" name="email">
            <br> 
            <div class="radio-button">
            <div class="RB">
              <input type="radio" id="HSP" name="professor" value="High school teacher">
            
              <label for="HST">High school teacher</label>
              </div>
              <br>
            <div class="RB">
              <input type="radio" id="UP" name="professor" value="University Professor">
           
              <label for="UP">University Professor</label>
            </div>
            </div>
            <br>
            <p>Which grade level do you teach?</p>
            <input type="text" name="level" placeholder="Fill in..."> <br><br>
          <button>SEND</button>
        </form>
      </div>
      <div class="arms"></div>
    </section>

    <section id="second">
      <img src="img/Arms-2.svg" alt="">
      <nav><b><a href="index.php" id="nav3">About us</a><br><br><br><a href="form.php" id="nav4">Contact</a></b></nav>
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
        z.style.display = "flex"
        p.style.display = "none"
      }
    }
    </script>

</body>
</html>