<?php
    include("dbconn.php");

    if($_POST['search'] == "chips" || $_POST['search'] == "chipsmore" || $_POST['search'] == "CHIPSMORE" || $_POST['search'] == "chip" || $_POST['search'] == "Chipsmore" || $_POST['search'] == "Chocolate Cookies" || $_POST['search'] == "Cookies"){
        echo "<script> window.location='chipsmore.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "pepsi" || $_POST['search'] == "pep" || $_POST['search'] == "Pepsi" || $_POST['search'] == "PEPSI" || $_POST['search'] == "peps"){
        echo "<script> window.location='pepsi.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "cola" || $_POST['search'] == "Cola" || $_POST['search'] == "coca cola" || $_POST['search'] == "COLA"){
        echo "<script> window.location='cola.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "Heaven" || $_POST['search'] == "Heaven & Earth" || $_POST['search'] == "Heav" || $_POST['search'] == "Green Tea" || $_POST['search'] == "HEAVEN & EARTH"){
        echo "<script> window.location='heaven2.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "mee sedap" || $_POST['search'] == "MEE SEDAP" || $_POST['search'] == "MEE" || $_POST['search'] == "Instant Noodles" || $_POST['search'] == "Instant" || $_POST['search'] == "INSTANT NOODLES" || $_POST['search'] == "Mee sedap" || $_POST['search'] == "MEE"){
        echo "<script> window.location='meesedap.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "mister" || $_POST['search'] == "misterpotato" || $_POST['search'] == "MISTER POTATO" || $_POST['search'] == "SNACK" || $_POST['search'] == "snack" || $_POST['search'] == "junk food" || $_POST['search'] == "potato snack" || $_POST['search'] == "POTATO SNACK"){
        echo "<script> window.location='mister.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "MUNCHYS" || $_POST['search'] == "munchys" || $_POST['search'] == "biscuits" || $_POST['search'] == "BISCUITS" || $_POST['search'] == "cracker" || $_POST['search'] == "CRACKER" || $_POST['search'] == "Butter Cracker" || $_POST['search'] == "BUTTER CRACKER" || $_POST['search'] == "butter biscuit" || $_POST['search'] == "BUTTER BISCUIT"){
        echo "<script> window.location='munchys.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "ODEN" || $_POST['search'] == "Oden" || $_POST['search'] == "tom yum" || $_POST['search'] == "TOM YUM" || $_POST['search'] == "soup" || $_POST['search'] == "SOUP" || $_POST['search'] == "HOT FOOD" || $_POST['search'] == "Spicy"){
        echo "<script> window.location='oden.php?id=".$id."'</script>";
    }
    else if($_POST['search'] == "waffle" || $_POST['search'] == "WAFFLE" || $_POST['search'] == "butter waffle" || $_POST['search'] == "peanut waffle" || $_POST['search'] == "chocolate waffle" || $_POST['search'] == "hot waffle" || $_POST['search'] == "HOT WAFFLE" || $_POST['search'] == ""){
        echo "<script> window.location='waffle.php?id=".$id."'</script>";
    }
    else {
        echo "<script>alert('The item not available in our store at the moment!'); window.location='shopPage.php';</script>";
    }
?>