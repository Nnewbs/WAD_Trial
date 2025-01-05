<?php
    include("dbconn.php"); //$conn
    session_start();

    // Fetch user data based on the logged-in user (assuming logged in user is stored in session)
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = mysqli_fetch_assoc($query);
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
        <a href="logout.php">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Personal Information Section -->
        <div id="personal-info-section">
            <!-- View Information -->
            <div id="view-info">
                <h3>Personal Information</h3>
                <img src="default-profile.jpg" alt="Profile Image" class="profile-img mb-3">
                <p><strong>Username:</strong> <span id="view-username"><?php echo $row['username']; ?></span></p>
                <p><strong>Email:</strong> <span id="view-email"><?php echo $row['email']; ?></span></p>
                <button class="btn btn-primary" id="edit-info-btn">Edit</button>
            </div>

            <!-- Edit Information -->
            <div id="edit-info" class="form-container">
                <h3>Edit Personal Information</h3>
                <form id="edit-info-form" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" value="<?php echo $row['username']; ?>" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" value="<?php echo $row['email']; ?>" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success" id="save-info-btn" name="update-info">Save</button>
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

    <?php
        if (isset($_POST['update-info'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Hash password if provided
            if (!empty($password)) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = '$user_id'";
            } else {
                // If password is not provided, just update username and email
                $updateQuery = "UPDATE users SET username = '$username', email = '$email' WHERE id = '$user_id'";
            }

            // Update user data in the database
            if (mysqli_query($dbconn, $updateQuery)) {
                echo "<script>alert('Your information has been updated successfully!'); window.location.href='accountDetail.php';</script>";
            } else {
                echo "<script>alert('Failed to update your information. Please try again!');</script>";
            }
        }
    ?>
</body>

</html>


