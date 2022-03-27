<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="A website created in memory of Juice WRLD ">
  <meta name="keywords" content="A website created in memory of Juice WRLD ">
  <meta name="author" content="Rafał Wróbel L3">
  <title>999WRLD | Welcome</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
  <div class="container">
    <div id="branding">
      <section id="contact">

      <a href="index.php"><img src="img/logo2.png" alt="logo"></a>

      </section>
<h1><span class="highlight">999WRLD</span></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="career.html">Career</a></li>
          <li><a href="contact.html">Contact</a></li>
  </ul>
    </nav>
  </div>
</header>
<section id="main">
  <div class="container">
    <article id="main-col">
      <ul id="music">
<div class="body-content">
    <div class="module">
        <h2>Thank you for submiting!</h2>
        <div class="success">
             <?=$_SESSION['message'] ?>
           </div>
        <h1>Go back to Home page:</h1>
<a href="index.php"><img src="img/home.png" height="30%" width="30%" ></a>
        <h1>Check results of the query:</h1>   <a href="./display.php" target="_blank"><img src="img/user.png" height="28%" width="28%"></a>

    </div>
</div>

   </article>
   <aside id="sidebar">
     <div class="dark">
       <h3>What now?</h3>
       <p>
  Use panel above or icons to go back to home page, or use user icon to see What's your favorite song query results.</p>
     </div>
   </section>
   <footer>
   <p>999WRLD Copyright &copy; 2020</p>
   </footer>
</body>
   </html>
