<!DOCTYPE html>
<?php
session_start();
$mysqli = new mysqli('localhost', 's403170', 'wrobelrafal', 's403170');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $mysqli->real_escape_string($_POST['email']);

$sql = "INSERT INTO newsletter (email)"
  . "VALUES ('$email')";

  if($mysqli->query($sql) === true){
    $_SESSION['message'] = "Thank you $email for submiting";
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
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="music.php">Music</a></li>
            <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>

          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
    <h1>A website created in memory of Juice WRLD</h1>
        <p>Jarad Anthony Higgins known professionally as Juice WRLD was an American rapper, singer, and songwriter, born in Chicago, Illinois. His song "Lucid Dreams" has been played on the music streaming platform Spotify over one billion times."Lucid Dreams" and his earlier hit single "All Girls Are the Same" helped him gain a recording contract with Lil Bibby's Grade A Productions and Interscope Records.</p>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1>Subrscribe to my newsletter</h1>

        <form class="index" action="index.php" method="post" enctype="multipart/form-data">

          <input type="email" placeholder="Enter Email..." name="email" required/>
    <input type="submit" value="Subscribe" name="register" class="button_1"/>

        </form>

      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <a href="https://open.spotify.com/artist/4MCBfE4596Uoi2O4DtmEMz"><img src="./img/logo_html.png"></a>
          <h3>Juice WRLD's Spotify</h3>
          <p>Checkout Juice WRLD music on Spotify</p>
        </div>
        <div class="box">
          <a href="https://www.youtube.com/channel/UC0BletW9phE4xHFM44q4qKA"><img src="./img/logo_css.png"></a>
          <h3>Juice WRLD's Youtube</h3>
          <p>This is Juice WRLD's official channel.</p>
        </div>
        <div class="box">
          <a href="https://www.instagram.com/juicewrld999/?hl=pl"><img src="./img/logo_brush.png"></a>
          <h3>Juice WRLD's instagram</h3>
          <p>Juice WRLD 9💔9💔9 </p>
        </div>

      </div>
    </section>

    <footer>
      <p>999WRLD Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
