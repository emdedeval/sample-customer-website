<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  
}

.topnav {
  overflow: hidden;
  background-color: white;
   position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */

}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 14px 16px; 
  text-decoration: none;
  font-size: 17px;
}
.topnav1 {
  float: left;
  color: black;
  text-decoration: none;
  
}
.topnav a:hover {
  background-color: gray;
  color: black;
}

.topnav a.active {
  color: black;
}

.side{
  
  background-image: url("images/coverimg.jpg");
  
  height: 600px;
  
  background-position: center;
  background-size: cover;

}
.a1{
  float: right;
  display: table;
  text-align: right;
  width: 50%;
  padding:0px 15px 5px 15px;
}
.a2{
  float: left;
  display: table;
  text-align: left;
  width: 50%;
  padding:0px 5px 5px 15px;
}
tr,td{
  padding: 15px;
  text-align: left;
}
th{
  text-align: center;
  font-size: 20px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.category{
  color: gray;
}
display: table;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a href="#Categories">Categories</a>
  <a href="#about">About</a>
  <div class ="topnav1" >
      <p>TALENT WEBSITE</p></div>
</div>

<div class="side" style="padding-left:16px">
 <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>
  <h2 style="margin-left: 10% ; color: white;margin-left: 5%;font-family: Papyrus; id="top" ">Showcase your Talent here!!!!!</h2><br>
<h2 style="margin-left: 10% ; color: white;margin-left: 5%;font-family:Papyrus;">Stop wasting valuable time and get discovered your talent.</h2>
</div><br>
    <h2 style="font-family: cursive" id="about"><center>ABOUT US</center></h2>
    <table>
      <th >About </th>
      <th>Passion</th>
      <th>Services</th>
      <th> Contact</th>
      <br><br>
      <tr>
        <td ><img src="images/1.png"  class="center"> </td>
        <td><img src="images/2.png" class="center" ></td>
        <td><img src="images/3.png" class="center" ></td>
        <td><img src="images/4.png" class="center"></td>
        <br><br><br>
      </tr>
      <tr style="font-size: 18px;font-family: Centaur"> 
          <td > We aim at unifying the world of talents.The platform is for Talents like singers, dancers, musicians, comedian, photographers, makeup artists, hair stylists to showcase and nurture their talent in various fields</td>
          <td >Here we connect creative people in the same platform .We have the necessary experience and platform to guide you on your career path. Join now and grab the opportunities available for your talent.</td>
          <td >Dexturous is not just an online platform it’s a mission to help Talented artists to provide a platform to get a recognition for their talent around the globe. User can browse all the members profiles in our Talent Directory. </td>
          <td > We collect your personal information through your use of the services including your registration details;and the content you access.You can access and correct your personal information anytime..</td>
      </tr>
    </table><br><br>
    
<div class='category' >
<div >
  <h3 style="text-align: center;">Let The World Know Who You Are, The Talent You Possess, The Impact You Can Make!.</h3><br><br><br>
  <a href="#Categories"><img src="images/category.png" width="18%" height="18%" style="margin-left: 10px; "></a>
</div><br><br>
<div style="float: right;" >
  <img src="images/talent4.png" width="700px" height="400px" align="right">
 </div>
</div>
<br><center >
<h3 style="font-family: Castellar"; id="Categories" >SHOWCASING SOME TALENTs:</h3>
<br>
<h2 style="font-family: Castellar">THE WORLD OF TALENTs</h2></center><br>
<table >
    <tr>
            <td ><a href="singing.html "target="_blank"><img src="images/music.jpg"  class="center" style="width: 300px"></a> </td>
            <td><a href="comedy.html " target="_blank"><img src="images/comedian.jpg" class="center" style="width: 300px" ></td>
            <td><a href="sketch.html " target="_blank"><img src="images/doodle.jpg" class="center" style="width: 300px" ></td>
            <td><a href="makeup.html " target="_blank"><img src="images/makeup.jpeg" class="center" style="width: 300px"></td>

    </tr>
    <tr>
            <td ><a href="dance.html " target="_blank"><img src="images/dance.jpg"  class="center" style="width: 300px"></a> </td>
            <td><a href="singing.html" target="_blank"><img src="images/musician.jpg" class="center" style="width: 300px" ></a></td>
            <td><a href="photography.html "target="_blank"><img src="images/photography.jpg" class="center" style="width: 300px" ></a></td>
            <td><a href="sketch.html " target="_blank"><img src="images/sketch.jpg" class="center" style="width: 300px"></a></td>

     </tr>
 </table><br>
  <img src="images/talent2.png" width="100%" height="700"><br>
  <a href="#top"> <img src="images/tothetop.png" alt="to the top"  style="width:15%;height:15%;border:0;" ></a>

</body>
</html>
