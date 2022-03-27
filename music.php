<!DOCTYPE html>
<?php
session_start();
$mysqli = new mysqli('localhost', 's403170', 'wrobelrafal', 's403170');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $mysqli->real_escape_string($_POST['name']);
  $email = $mysqli->real_escape_string($_POST['email']);
$favorite_song = $mysqli->real_escape_string($_POST['favorite_song']);
$sql = "INSERT INTO Favoritesongtable (name, email, favorite_song)"
  . "VALUES ('$name' ,'$email', '$favorite_song')";

  if($mysqli->query($sql) === true){
    $_SESSION['message'] = "Thank you for voting $name";
header("location: thank.php");
  }
  else{$_SESSION['message'] = "Something went wrong";}
}
?>

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
          <li class="current"><a href="music.php">Music</a></li>
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
            <div class="box">
              <img src="./img/Juice2_html.jpg">

            </div>
            <li>
              <h3>Goodbye & Good Riddance</h3>
              <p>Goodbye & Good Riddance is the debut studio album by American rapper Juice Wrld. It was released on May 23, 2018, by Grade A Productions and Interscope Records.The album features a sole guest appearance from Lil Uzi Vert and production from Benny Blanco, Cardo, Mitch Mula, Nick Mira, and Sidepce, among others.</p>

            </li>
            <div class="box">
              <img src="./img/Juice3_html.jpg ">

            </div>

            <li>
              <h3>Death Race for Love</h3>
              <p>Death Race for Love is the second studio album by American rapper Juice Wrld and the last album to be released during his lifetime. It was released on March 8, 2019, through Grade A Productions and distributed by Interscope Records.</p>
              <div class="box">
                <img src="./img/Juice4_html.jpg ">

              </div>
            </li>
            <li>
              <h3>Wrld on Drugs</h3>
              <p>Wrld on Drugs (stylized in all caps), also known as Future & Juice Wrld Present... Wrld on Drugs is a collaborative mixtape by American rappers Future and Juice Wrld.  It was released on October 19, 2018 by Epic Records, Freebandz, Grade A and Interscope Records.</p>
            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>What's your favorite song?</h3>
           <form class="quote" action="music.php" method="post" enctype="multipart/form-data" >
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name" name="name" required/>
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Enter Email" name="email" required/>
  						</div>
  						<div>
  							<label>Favorite Song</label><br>
  							<input type="text" placeholder="Favorite Song" name="favorite_song" required/>
  						</div>
  						<input type="submit" value="Send" name="register" class="button_1"/>
  <h1><a href="./display.php" target="_blank">Check results of the query</a></h1>
        	</form>


          </div>

      </aside>
      </div>
    </section>

    <footer>

      <p>999WRLD Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
