<?php
$conn = mysqli_connect("localhost", "root", "", "miladPainting");
if ($conn) {
    echo "connected";  
}
    
$result = mysql_query("SELECT * from uploadImage");


?>


<!DOCTYPE html>
<html>
    <title>Gallery</title>
    <body>
        
    </body>

</html>