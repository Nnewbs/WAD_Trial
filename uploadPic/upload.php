<?php
include_once("dbconn.php");
if ($_POST["submit"]) {
    $fullName = $_POST["fullname"];
    $fileName = $_FILES["image"]["name"];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "images/".$fileName;
    if(in_array($ext, $allowedTypes)){
        if(move_uploaded_file($tempName, $targetPath)){
            $query = "INSERT INTO items (name, filename) VALUES ('$fullName', '$fileName')";
            if(mysqli_query($dbconn, $query)){
                header("Location: index.php");
            }else{
                echo "Something is wrong";
            }
        }else{
            echo "File is not uploaded";
        }
    }else{
        echo "Your files are not allowed";
    }
}
?>