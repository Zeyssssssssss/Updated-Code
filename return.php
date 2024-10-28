<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Return Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
        }

        /* Sidebar style */
        .sidebar {
            height: 100vh;
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
        .container {
            margin-left: 260px; /* Adjusted for sidebar width */
            width: calc(100% - 260px); /* Make sure container takes the remaining width */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            font-style: italic;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 150px;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .filter {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5cb85c; /* Green background */
            color: white; /* White text */
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .filter:hover {
            background-color: #4cae4c; /* Darker green on hover */
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
    <a href="tracker.php"><i class="fa-solid fa-map-marker-alt"></i>  Transaction Details </a>
    <a href="return.php"><i class="fa-solid fa-undo-alt"></i> Return Record</a>
</div>

<!-- Main content -->
<div class="container">
    <h1>Returned Items</h1>
    
   


    
    <table id="trackerTable">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Item ID</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Returned Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Excavator</td>
                <td>001</td>
                <td>34</td>
                <td>Item Returned</td>
                <td>2024-10-07</td>
            </tr>
            <tr>
                <td>Bulldozer</td>
                <td>002</td>
                <td>24</td>
                <td>Item Returned</td>
                <td>2024-10-05</td>
            </tr>
            <tr>
                <td>Crane</td>
                <td>003</td>
                <td>314</td>
                <td>Item Returned</td>
                <td>2024-09-30</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- JavaScript to filter table -->
<script>
function filterTable() {
    const input = document.getElementById("search");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("trackerTable");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        const td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            const textValue = td.textContent || td.innerText;
            tr[i].style.display = textValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
}
</script>
</body>
</html>
