<?php
    $connection = mysqli_connect("localhost", "s403170", "wrobelrafal", "s403170")or die("Connection with the database is impossible!");
    $db = mysqli_select_db($connection,"s403170")or die("Unable to select the database!");
    $sql_result = mysqli_query($connection,"select * from Favoritesongtable")or die("Problems with reading the data!");
echo "<TABLE BORDER=1>";
echo "<TR><TH>id</TH><TH>name</TH><TH>email</TH><TH>favorite_song</TH>";
        while($row = mysqli_fetch_array($sql_result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $favorite_song = $row['favorite_song'];
            echo "<TR><TD>$id</TD><TD>$name</TD><TD>$email</TD><TD>$favorite_song</TD></TR>";
        }
    echo "</TABLE>";

mysqli_free_result($sql_result);
mysqli_close($connection);
?>
