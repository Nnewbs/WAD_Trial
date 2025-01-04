<?php
// Include the database connection
include('dbconn.php');
session_start();

// Query to get user information from the database
$sql = "SELECT username, email, address FROM users WHERE id = '$id'";
$result = mysqli_query($dbconn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the update of personal information
    $username = mysqli_real_escape_string($dbconn, $_POST['username']);
    $email = mysqli_real_escape_string($dbconn, $_POST['email']);
    $address = mysqli_real_escape_string($dbconn, $_POST['address']);
    
    // Update query
    $update_sql = "UPDATE users SET username = '$username', email = '$email', address = '$address' WHERE id = '$user_id'";
    
    if (mysqli_query($dbconn, $update_sql)) {
        // Update the session and display success message
        $_SESSION['message'] = "Information updated successfully!";
        header("Location: account.php"); // Redirect to refresh the page
    } else {
        $_SESSION['message'] = "Error updating information: " . mysqli_error($dbconn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .btn-group {
            margin-top: 10px;
        }

        .form-container {
            display: none;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" id="personal-info-tab">Personal Information</a>
        <a href="#" id="order-history-tab">Order History</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']);
        }
        ?>
        
        <!-- Personal Information Section -->
        <div id="personal-info-section">
            <!-- View Information -->
            <div id="view-info">
                <h3>Personal Information</h3>
                <img src="default-profile.jpg" alt="Profile Image" class="profile-img mb-3">
                <p><strong>Username:</strong> <span id="view-username"><?php echo $user['username']; ?></span></p>
                <p><strong>Email:</strong> <span id="view-email"><?php echo $user['email']; ?></span></p>
                <p><strong>Address:</strong> <span id="view-address"><?php echo $user['address']; ?></span></p>
                <button class="btn btn-primary" id="edit-info-btn">Edit</button>
            </div>

            <!-- Edit Information -->
            <div id="edit-info" class="form-container">
                <h3>Edit Personal Information</h3>
                <form method="POST" id="edit-info-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $user['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" class="form-control" name="address"><?php echo $user['address']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" id="save-info-btn" name="save-info-btn">Save</button>
                    <button type="button" class="btn btn-secondary" id="cancel-info-btn">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Order History Section -->
        <div id="order-history-section" style="display: none;">
            <h3>Order History</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Order Number</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>#12345</td>
                        <td>2025-01-01</td>
                        <td>$120.00</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>#12346</td>
                        <td>2025-01-02</td>
                        <td>$80.00</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function () {
            // Toggle sections
            $("#personal-info-tab").click(function () {
                $("#personal-info-section").show();
                $("#order-history-section").hide();
            });

            $("#order-history-tab").click(function () {
                $("#personal-info-section").hide();
                $("#order-history-section").show();
            });

            // Edit Personal Information
            $("#edit-info-btn").click(function () {
                $("#view-info").hide();
                $("#edit-info").show();
            });

            // Cancel Edit
            $("#cancel-info-btn").click(function () {
                $("#edit-info").hide();
                $("#view-info").show();
            });
        });
    </script>
</body>

</html>
