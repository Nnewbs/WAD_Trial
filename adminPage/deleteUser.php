<?php include("dbconn.php"); //$dbconn ?>
<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = '$id'";
    $dbconn -> query ($sql);

    if($dbconn -> query($sql) === true) {
        echo "<script>alert('The user has been successfully deleted!'); window.location = 'adminHome.php?id=".$id."';</script>";
    } else {
        echo "<script>alert('Failed to delete the user data. Please try again!'); window.location = 'adminHome.php';</script>";
    }
?>
