<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal</title>
  <style>
    .dropbtn {
      background-color: #37b9c2;
      color: white;
      padding: 10px;
      font-size: 13px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown-content button:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #dbe464;
    }

    #bound {
      margin: 20px;
    }

    .logou {
      margin-left: 50px ;
      margin-bottom: 10px;
      float: center;
    }

     h2 {
       color: crimson;
       text-decoration: underline;
       text-transform: uppercase;
     }

     .bud1 {
       float: left;
       border: 2px solid crimson;
       width: 30%;
       overflow: hidden;
       height: 800px;
     }

     .bud2 {
      float: left;
      margin-left: 20px;
      border: 2px solid crimson;
      width: 60%;
      overflow: hidden;
      height: 800px;
     }

     body {
       background-image: url("https://prod.wp.cdn.aws.wfu.edu/sites/197/2020/03/177-1776450_performance-learning-helpful-articles-cartoon-parent-png.png");
       background-repeat: no-repeat;
       background-size: cover;
       
     }

     img {
       border-radius: 60px;
       margin-left: 15px;
       margin-top: 3px;
       width: 120px;
       height: 120px;
     }

     p {
       text-align: center;
     }

  </style>
</head>

<body>

  <img src="https://image.shutterstock.com/image-vector/vector-illustration-education-elements-260nw-1242560170.jpg"
    style="width: 70px; height: 30px; float: left;">
  
  <div id="bound">
    <div class="dropdown" style="margin-left: 20px;">
      <button class="dropbtn">Info</button>
      <div class="dropdown-content" style="left:0;">
        <a href="stumar.html">Marks</a>
        <a href="stuattend.html">Attendance</a>
        <a href="stutimetable.html">Time table</a>
        <a href="stufee.html">Fee structure</a>
      </div>
    </div>

    <div class="dropdown" style="float:right;">
      <button class="dropbtn">Logout</button>
      <div class="dropdown-content">
        <img src="https://prod.wp.cdn.aws.wfu.edu/sites/197/2020/03/177-1776450_performance-learning-helpful-articles-cartoon-parent-png.png"></img>
        <p>Name: xyp9x<p>
        <button class="logou">Logout</button>
      </div>
    </div>
  </div>
  <hr>
  <div class="bud1">
    <p>Not yet confirmed</p>
  </div>
  <div class="bud2">
    <h2>Spotlight:</h2>
  </div>
</body>

</html>