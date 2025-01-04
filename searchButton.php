<?php
    include("dbconn.php");

    if($_POST['search'] == "tie" || $_POST['search'] == "slim man" || $_POST['search'] == "Fit Shirt" || $_POST['search'] == "slim fit shirt" || $_POST['search'] == "SLIM FIT SHIRT" || $_POST['search'] == "man shirt" || $_POST['search'] == "MAN SHIRT"){
        echo "<script> window.location='tie.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "hoodie man" || $_POST['search'] == "regular hoodie" || $_POST['search'] == "regular fit hoodie" || $_POST['search'] == "Regular Fit Hoodie" || $_POST['search'] == "REGULAR FIT HOODIE"){
        echo "<script> window.location='man2.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "knit man" || $_POST['search'] == "knit pullover" || $_POST['search'] == "KNIT PULLOVER" || $_POST['search'] == "KNIT MAN"){
        echo "<script> window.location='man3.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "women top" || $_POST['search'] == "bishop top" || $_POST['search'] == "BISHOP TOP" || $_POST['search'] == "bishoptop" || $_POST['search'] == "BISHOPTOP"){
        echo "<script> window.location='women1.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "women dress" || $_POST['search'] == "womendress" || $_POST['search'] == "WOMEN DRESS" || $_POST['search'] == "WOMENDRESS" || $_POST['search'] == "checkered dress" || $_POST['search'] == "CHECKERED DRESS" || $_POST['search'] == "checkereddress" || $_POST['search'] == "CHECKEREDDRESS"){
        echo "<script> window.location='women2.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "shirt women" || $_POST['search'] == "SHIRT WOMEN" || $_POST['search'] == "shirtwomen" || $_POST['search'] == "SHIRTWOMEN" || $_POST['search'] == "Printed T-shirt" || $_POST['search'] == "PRINTED T-SHIRT" || $_POST['search'] == "printedtshirt" || $_POST['search'] == "PRINTEDTSHIRT"){
        echo "<script> window.location='women3.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "bucket hat" || $_POST['search'] == "BUCKET HAT" || $_POST['search'] == "buckethat" || $_POST['search'] == "BUCKETHAT" || $_POST['search'] == "tie-detail sun hat" || $_POST['search'] == "TIE-DETAIL SUN HAT" || $_POST['search'] == "tie detail sunhat" || $_POST['search'] == "TIE DETAIL SUNHAT" || $_POST['search'] == "tie detail sun hat" || $_POST['search'] == "TIE DETAIL SUN HAT"){
        echo "<script> window.location='acc1.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "beanie" || $_POST['search'] == "BEANIE" || $_POST['search'] == "rib-knit hat" || $_POST['search'] == "RIB-KNIT HAT" || $_POST['search'] == "rib knit hat" || $_POST['search'] == "RIB KNIT HAT" || $_POST['search'] == "ribknit hat" || $_POST['search'] == "RIBKNIT HAT"){
        echo "<script> window.location='acc2.php?id=".$id."'</script>";
    }
    else {
        echo "<script>alert('The item not available in our store at the moment!'); window.location='shopPage.php';</script>";
    }
?>