<?php
    $connection = mysqli_connect("localhost", "s403170", "wrobelrafal", "s403170")or die("Connection with the database is impossible!");
    $db = mysqli_select_db($connection,"s403170")or die("Unable to select the database!");
    $sql_result = mysqli_query($connection,"select * from list_of_classes")or die("Problems with reading the data!");
echo "<TABLE BORDER=1>";
echo "<TR><TH>id</TH><TH>	name_of_class</TH><TH>type_of_class</TH><TH>exam</TH>";
        while($row = mysqli_fetch_array($sql_result)){
            $id = $row['id'];
            $name_of_class = $row['name_of_class'];
            $type_of_class = $row['type_of_class'];
            $exam = $row['exam'];
            echo "<TR><TD>$id</TD><TD>$name_of_class</TD><TD>$type_of_class</TD><TD>$exam</TD></TR>";
        }
    echo "</TABLE>";

mysqli_free_result($sql_result);
mysqli_close($connection);
?>
