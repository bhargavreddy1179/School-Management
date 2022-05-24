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
      background-color: #3e8e41;
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
       background-image: url("https://image.shutterstock.com/image-vector/vector-illustration-school-building-260nw-553127521.jpg");
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
        <a href="stupro.php">Profile</a>
        <a href="stucred.php">Credentials</a>
        <a href="#">Faculty info</a>
        <a href="stumar.php">Marks</a>
        <a href="stuattend.php">Attendance</a>
        <a href="stutimetable.php">Time table</a>
        <a href="stufee.html">Fees structure</a>
      </div>
    </div>

    <div class="dropdown" style="float:right;">
      <button class="dropbtn">Logout</button>
      <div class="dropdown-content">
        <img src="data:image/png;base64,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"></img>
        <p>19BCE1342<p>
        <p>Bhargava</p>
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