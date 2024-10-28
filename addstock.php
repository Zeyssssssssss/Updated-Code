<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>New Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 250px;
            background-color: #333;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Main content */
        .main-content {
            margin-left: 260px; /* Adjust to sidebar width */
            padding: 20px;
            flex-grow: 1;
            height: 100%;
            overflow-y: auto;
        }

        /* Navbar styling */
        .navbar {
            background-color: #333;
            padding: 15px;
            color: white;
            text-align: center;
        }

        .navbar h1 {
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, select, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .btn {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="User Profile.php"><i class="fa-solid fa-cog"></i> User Profile</a>
    <a href="dashboard.php"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a>
    <a href="inventory.php"><i class="fa-solid fa-file-alt"></i> Borrow </a>
    <a href="stocks.php"><i class="fa-solid fa-boxes"></i> Stocks</a>    
    <a href="tracker.php"><i class="fa-solid fa-map-marker-alt"></i> Transaction Details</a>
    <a href="return.php"><i class="fa-solid fa-undo-alt"></i> Return Record</a>
</div>

<!-- Main content -->
<div class="main-content">
    <div class="navbar">
        <h1>New Record</h1>
    </div>

    <div class="container">
        <h2>Create New Record</h2>
        <form action="submit_record.php" method="post">
            <!-- Form group for Item Name -->
            <div class="form-group">
                <label for="item-name">Item Name:</label>
                <input type="text" id="item-name" name="item_name" required>
            </div>

            <!-- Form group for Item Code -->
            <div class="form-group">
                <label for="item-code">Item Code:</label>
                <input type="text" id="item-code" name="item_code" required>
            </div>

            <!-- Form group for Date -->
            <div class="form-group">
                <label for="date">Date of Record:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <!-- Form group for Employee Assigned -->
            <div class="form-group">
                <label for="employee">Category:</label>
                <select id="employee" name="employee" required>
                    <option value="">Select a Category</option>
                    <option value="construction">Construction</option>
                    <option value="machinery">Heavy Machinery</option>
                    <option value="tools">Tools</option>
                </select>
            </div>

            <!-- Form group for Remarks -->
            <div class="form-group">
                <label for="remarks">Remarks:</label>
                <textarea id="remarks" name="remarks" rows="4"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn">Submit Record</button>
        </form>
    </div>
</div>

</body>
</html>
