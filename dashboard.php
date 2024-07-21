<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Dummy path for profile picture. Replace this with actual path or URL
$profilePic = 'asset/user.finall.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .sidebar {
            width: 250px;
            background-color: #c3d4e4;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar .logo-container {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar .logo-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .sidebar h2 {
            margin: 0 0 20px;
            font-size: 1.5em;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            font-size: 1.1em;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }
        .dashboard-container {
            margin-bottom: 20px;
        }
        .dashboard-container h2 {
            margin: 0 0 20px;
            color: #333;
        }
        .user-profile {
            display: flex;
            align-items: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        .user-profile img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }
        .user-profile p {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }
        .logout-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .pie-chart-container {
            width: 100%;
            max-width: 400px;
        }
        .customer-count {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 200px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            font-size: 1.2em;
            color: #333;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="asset/mlogoo.png" alt="Logo">
        </div>
        <h2>Dashboard</h2>
        <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
        <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
        <a href="logout.php" class="logout-button"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="main-content">
        <div class="dashboard-container">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <div class="user-profile">
                <img src="<?php echo htmlspecialchars($profilePic); ?>" alt="Profile Picture">
                <p>Username: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                <!-- Add more profile details here if needed -->
            </div>
        </div>
        <div class="content-wrapper">
            <!-- Pie Chart Section -->
            <div class="pie-chart-container">
                <canvas id="pieChart"></canvas>
            </div>
            <!-- Customer Count Section -->
            <div class="customer-count">
                Number of Customers: <strong>50</strong>
            </div>
        </div>
    </div>
    <script>
        // Pie Chart Data
        const pieData = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100, 80, 150, 200],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                hoverOffset: 4
            }]
        };

        // Pie Chart Configuration
        const config = {
            type: 'pie',
            data: pieData,
        };

        // Render Pie Chart
        const pieChart = new Chart(
            document.getElementById('pieChart'),
            config
        );
    </script>
</body>
</html>
