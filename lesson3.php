<?php
if(empty($_GET['name'])){
header('Location:'.$_SERVER['PHP_SELF'].'?'.'name=lukifox');
}else{echo "";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS Labs - 3</title>
  <style type="text/css">
    a{
      text-decoration:none;
      border:3px solid purple;
      padding:10px;
      border-radius:15px;
    }
    a:active{
      color:red;
    }
    a:link{
      color:yellow;
    }
    a:visited {
      color: cyan;
    }
    a:visited a{
        color:red;
    }
    a:hover{
      color:purple;
    }
    *{
      margin:0;
      padding:0;
    }
    body{
      background-image:url("bac.jpg");
      color:red;
      text-align:center;
      margin-top:20px;
      background-attachment: fixed;
    }
    .main{
        padding:0px;
        margin-top:30px;
    }
    .data{
      width:600px;
      height:650px;
      border:2px solid red;
      margin: 50px auto 0;
      padding:10px;
      display: inline-block;
    }
    .footer{
      text-align:center;
      margin-top:30px;
    }
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    }
    .g{
      color:yellow;
    }
    marquee{
      font-size:18px;
    }
    p{
      font-size:20px;
    }
    img{
      border-radius:50%;
      border:5px solid purple;
    }
  </style>
</head>
<body>
<embed src="song.mp3" loop="true" autostart="true" width="250" height="50">

<div class="main">
    <a href="index.php">Home</a> |
    <a href="lesson1.php">Lesson-1</a> |
    <a href="lesson2.php">Lesson-2</a> |
    <a href="lesson3.php">Lesson-3</a> |
    <a href="lesson4.php">Lesson-4</a> |
    <a href="lesson5.php">Lesson-5</a> |
    <a href="lesson6.php">Lesson-6</a> |
    <a href="lesson7.php">Lesson-7</a> |
    <a href="lesson8.php">Lesson-8</a> |
    <a href="lesson9.php">Lesson-9</a> |
    <a href="lesson10.php">Lesson-10</a> |
    <a href="lesson11.php">Lesson-11</a> |
    <a href="lesson12.php">Lesson-12</a>
  </div>

  <div class="data">
    <h2><font color="yellow">X</font><font color="green">S</font><font color="red">S</font> 
    <font color="cyan"> Challenge</font> By-</h2><br>
    <marquee behavior="alternate" scrollamount="20">
    <h3>- <font color="Cyan">Phyo</font><font color="Yellow"> Myat</font><font color="lightyellow"> Han</font> -</h3>
    </marquee>
    <br><br><br>
    <center><img src="logo.jpg" width=230px height=230px alt="#" /></center>
    <br><br><br>
    <h2>Exploit: 
        <b class='g'> 
        <?php $name = preg_replace('/script/i', '', $_GET['name']); echo $name; ?>
         </b> </h2>
    <br><br><br><br><br><br>
    <marquee scrollamount="10">** 
    <font color="#7414ab">မှောင်ရီဝိုးတဝါး</font>
    <font color="grey">   ကြယ်မစုံလည်း</font>
    <font color="red">    ရောင်နီ</font>
    <font color="#1a889e">လာလိမ့်မယ်</font> **</marquee>
  </div>
  <div class="footer">
    <p>
      <font color="yellow">Created</font> <font color="green">for</font> <font color="red">my</font> <font color="#7414ab">students</font> <b><font color="Cyan">&&</b></font> 
      <font color="white">To</font> <font color="yellow">improve</font> <font color="red">your</font> <font color="green">skill</font> 
      <font color="white">in</font> <font color="lightgreen">this</font> <font color="cyan">lab.</font></p>
  </div>
</body>
</html>