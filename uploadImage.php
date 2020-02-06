<?php
$conn = mysqli_connect("localhost", "root", "", "miladPainting");
if ($conn) {
    echo "connected";  
}
    if (isset($_POST['uploadfilesubmit'])) {
        $fileName = $_FILES['fileUpload']['name'];
        $filetmpName = $_FILES['fileUpload']['tmp_name'];
        $folder = 'gallery/';
        $locationName = $_POST['location'];
        
        move_uploaded_file($filetmpName, $folder.$fileName);
    
    $sql = "INSERT INTO `uploadImage` (`imageFile`, `LocationName`) VALUES ('$fileName', '$locationName')";
    
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "image uploaded";
    }
}


?>


<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="fileUpload">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location">
            <input type="submit" name="uploadfilesubmit" value="Upload Image">
        </form>
    
    </body>

</html>