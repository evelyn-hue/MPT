<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management Table</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .table-container {
            width: 97%;
            height: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            background: white;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .table-header {
            background-color: #1976d2;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.2em;
            border-radius: 10px;
        }

        .table-row {
            width: 98%;
            height: auto;
            border-bottom: 1px solid #ddd;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.2s;
            flex-wrap: wrap;
        }

        .table-row:hover {
            background-color: #f1f1f1;
        }

        .table-cell {
            flex-basis: 250px;
            text-align: center; /* Center align text in cells */

        }

        .button {
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin-left: 5px;
        }

        .update {
            background-color: #4caf50; /* Green */
        }

        .update:hover {
            background-color: #388e3c; /* Darker green */
            transform: scale(1.05);
        }

        .delete {
            background-color: #f44336; /* Red */
        }

        .delete:hover {
            background-color: #c62828; /* Darker red */
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<h2>Data Management Table</h2>

<div class="table-container">
    <div class="table-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="flex: 1;">ID</span>
            <span style="flex: 2;">Name</span>
            <span style="flex: 2;">Position</span>
            <span style="flex: 2;">RateType</span>
            <span style="flex: 2;">Rate</span>
            <span style="flex: 1;">Actions</span>
            
        </div>
    </div>
    
</div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "payroll";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = $conn->prepare("SELECT * FROM employees");

        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {

            $rows = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($rows as $row) {

                echo ' <div class="table-container">
    <div class="table-row">
        <div class="table-cell">' . $row["EmployeeID"] . '</div>
        <div class="table-cell">' . $row["Name"] . '</div>
        <div class="table-cell">' . $row["Position"] . '</div>
        <div class="table-cell">' . $row["RateType"] . '</div>
        <div class="table-cell">' . $row["Rate"] . '
        
        
        </div>
        
        <form method="POST" action="updatef1.php">
            <button class="button update">Update</button>
            <input type="hidden" name="id" value=" '.$row["EmployeeID"].'" required></input>

        </form>
            
        <form method="POST" action="delete.php">
            <button class="button delete">Delete</button>
            <input type="hidden" name="id" value=" '.$row["EmployeeID"].'" required></input>

        </form>
            
        </div>
    </div>
            ';

            }
        }
        ?> 
                  
</body>
</html>