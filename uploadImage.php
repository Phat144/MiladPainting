<?php
$conn = mysqli_connect("localhost", "root", "", "miladPainting");
if ($conn) {
    echo "connected";  
}
    if (isset($_POST['uploadfilesubmit'])) {
        $fileName = $_FILES['fileUpload']['name'];
        $filetmpName = $_FILES['fileUpload']['tmp_name'];
        $fileType = $_FILES['fileUpload']['type'];
        $locationName = $_POST['location'];
        for ($i=0; $i <= count($filetmpName)-1; $i++){
            $name = addslashes($fileName[$i]);
            $tmp = addslashes(file_get_contents($filetmpName[$i]));
            $sql = "INSERT INTO `uploadImage` (`imgName`,`imageFile`, `LocationName`) VALUES ('$name','$tmp', '$locationName')";
            $qry = mysqli_query($conn, $sql);
        }
    }
?>


<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fileUpload[]" multiple="multiple">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location">
            <input type="submit" name="uploadfilesubmit" value="Upload Image">
        </form>
    
    </body>

</html>