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
        <!-- Personal Information Section -->
        <div id="personal-info-section">
            <!-- View Information -->
            <div id="view-info">
                <h3>Personal Information</h3>
                <img src="default-profile.jpg" alt="Profile Image" class="profile-img mb-3">
                <p><strong>First Name:</strong> <span id="view-first-name">John Doe</span></p>
                <p><strong>Email:</strong> <span id="view-email">johndoe@example.com</span></p>
                <p><strong>Address:</strong> <span id="view-address">123 Main St, City, Country</span></p>
                <button class="btn btn-primary" id="edit-info-btn">Edit</button>
            </div>

            <!-- Edit Information -->
            <div id="edit-info" class="form-container">
                <h3>Edit Personal Information</h3>
                <form id="edit-info-form">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" class="form-control" value="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" value="johndoe@example.com">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" class="form-control">123 Main St, City, Country</textarea>
                    </div>
                    <button type="button" class="btn btn-success" id="save-info-btn">Save</button>
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

            // Save Personal Information
            $("#save-info-btn").click(function () {
                let firstName = $("#first-name").val();
                let email = $("#email").val();
                let address = $("#address").val();

                // Update view fields
                $("#view-first-name").text(firstName);
                $("#view-email").text(email);
                $("#view-address").text(address);

                // Switch back to view mode
                $("#edit-info").hide();
                $("#view-info").show();
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

