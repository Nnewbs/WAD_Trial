<?php
// Include database connection
include("dbconn.php");
session_start();

// Handle Delete Item via GET request
if (isset($_GET['deleteItemId'])) {
    $itemId = $_GET['deleteItemId'];
    // Redirect to deleteProduct.php with item ID
    header("Location: deleteProduct.php?id=$itemId");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .chart-container {
            width: 100%;
            height: 400px;
        }

        .menu-management-table {
            margin-top: 20px;
        }

        .menu-management-form {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="adminHome.php">Dashboard</a>
        <a href="adminMenuMan.php">Menu Management</a>
        <a href="adminOrderMan.php">Order Management</a>
        <a href="adminSummary.php">Transaction Summary</a>
        <a href="adminMemView.php">Registered Members</a>
        <a href="index.php">Logout</a>
    </div>

    <div class="content">
        <!-- Menu Management -->
        <div id="menu-management" class="mt-5">
            <h2>Menu Management</h2>

            <!-- Add New Item Form -->
            <form action="adminMenuMan.php" method="post" enctype="multipart/form-data" class="menu-management-form">
            <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" name="id" required>
                </div>
                <div class="form-group">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                </div>
                <button type="submit" name="addItem" class="btn btn-success">Add Item</button>
            </form>

            <!-- Menu Items Table -->
            <table class="table table-bordered menu-management-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch all items
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($dbconn, $query);
                    $count = 1;

                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>RM " . number_format($row['price'], 2) . "</td>";
                            echo "<td><img src='images/" . $row['filename'] . "' alt='" . $row['name'] . "' width='80'></td>";
                            echo "<td>
                                    <a href='deleteProduct.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No items available.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <scrip>
    <?php

    // Handle Add Item
    if (isset($_POST['addItem'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $fileName = $_FILES["image"]["name"];
        $tempName = $_FILES["image"]["tmp_name"];
        $targetPath = "images/" . $fileName;

        if (move_uploaded_file($tempName, $targetPath)) {
            $insertQuery = "INSERT INTO products (id, name, price, filename) VALUES ('$id','$name', '$price', '$fileName')";
            if (mysqli_query($dbconn, $insertQuery)) {
                echo "<script>alert('Item added successfully!'); window.location.href='adminMenuMan.php';</script>";
            } else {
                echo "<script>alert('Error adding item!');</script>";
            }
        } else {
            echo "<script>alert('Error uploading file!');</script>";
        }
    }
    ?>
</body>
</script>
</html>

