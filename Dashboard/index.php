
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Feedback Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #007bff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            background-color: #007bff !important;
        }

        .navbar a {
            color: white !important;
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-light">Dashboard</h4>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-comments"></i> Feedback</a>
        <a href="#"><i class="fas fa-users"></i> Users</a>
        <a href="#"><i class="fas fa-chart-bar"></i> Reports</a>
        <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Citizen Feedback System</a>
                <span class="navbar-text">Welcome, <?php echo $_SESSION['username']; ?>!</span>
            </div>
        </nav>

        <!-- Dashboard Cards -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h5>Total Feedbacks</h5>
                        <p class="fs-3"><i class="fas fa-comments"></i> 120</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h5>Active Users</h5>
                        <p class="fs-3"><i class="fas fa-users"></i> 85</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-center">
                        <h5>Pending Reviews</h5>
                        <p class="fs-3"><i class="fas fa-hourglass-half"></i> 15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
