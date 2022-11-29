
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

body{

  background-color: #eee;
}   

.wrapper{
      width: 100%;
    position: absolute;
    height: 18.5%;
    background-color: #000;
    clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
    transition: 1s all;
    margin-top: -20px;
}

.navbar-red:hover .wrapper{

  clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%);

}

.navbar-red{

  background-color: #ccddff; 
  color: #fff;
  margin-left: -10px;

}

 font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: darkred;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
   

}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.m1{
  color:red; 
  margin-left:50px;
  margin-top: -20px;
}

.m2{
   width:1225px;
   margin-left: -8px;
    height: 150px;
    margin-top: -17px;
}

.m3{
    color:red;
     font-size: 50px;
      text-align: center;
}

    </style>
  </head>
  <body>
    <div>
    <div>
      <nav class="navbar navbar-expand-lg navbar-red navbar-dark">
        <div class="wrapper">
        </div>
  <div class="container-fluid all-show" style="height: 90px;">
   <h2 style="color: blue;"> <img src="fl.png"; style="width:50px;">TRAVEL</h2>
   <h4 class="m1">Creating Happy Memorys...</h4>

   <h4>
    <div class="navbar" style="margin-left: 250px; margin-top: -70px;">
      <a href="travelee.php" style="color:green;">HOME</a>
      <a href="aboutus.php" style="color:green;">ABOUT US</a>
      <a href="contact.php" style="color:green;">CONTACT</a>
      <a href="khan.php" style="color:green;">REGISTRATION</a>
      <a href="log.php" style="color:green;">LOGIN</a>
   <div class="dropdown">
      <button class="dropbtn" style="color:green;">PLACES</button>
    <div class="dropdown-content">
      <a href="mnali.php">manali</a>
      <a href="shimla.php">shimla</a>
      <a href="kasmir.php">kashmir valley</a>
      <a href="ladak.php">ladakh</a>
      <a href="#">valley of flowers</a>
      <a href="#">rishikesh</a>
      <a href="#">nainital</a>
      <a href="#">haridwar</a>
      <a href="#">dehradun</a>
      <a href="#">agra</a>
      <a href="#">jodhpur</a>
      <a href="#">goa</a>
    </div>
  </div> 
 </div>
     </h4>
 </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
      </div>
    </div>
  </div>
 </ul>
 </nav>
  </div>
  </div>
  
  </body>
  </html>