<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payroll System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-size: 16px;
        }
        input, select {
            padding: 12px;
            margin: 8px 0;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"], select {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
        }
        input[type="submit"], button {
            background-color: #ff4757;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 12px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #e84118;
            transform: scale(1.05);
        }
        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "payroll";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $update = $_POST["id"];

                    $sql = $conn->prepare("SELECT * FROM employees WHERE EmployeeID = ?");
                    $sql->bind_param("i", $update);
                    $sql->execute();
    
                    $result = $sql->get_result();
        if ($result->num_rows > 0) {while($row = $result->fetch_assoc()) {
            echo '
            <h2>Update Employees ID No. '.$row["EmployeeID"].'</h2>
        <form id="submit">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
            <input type="hidden" name="id" value="'.$row["EmployeeID"].'" required></input>

            
            <label for="position">Position:</label>
            <select id="position" name="position" required>
                <option value="">Select Position</option>
                <option value="Senior Consultant">Senior Consultant</option>
                <option value="Mobile Developer">Mobile Developer</option>
                <option value="HR Assistant">HR Assistant</option>
                <option value="Data Engineer">Data Engineer</option>
                <option value="Office Manager">Office Manager</option>
                <option value="Junior Accountant">Junior Accountant</option>
                <option value="Legal Advisor">Legal Advisor</option>
                <option value="Recruitment Specialist">Recruitment Specialist</option>
                <option value="Operations Specialist">Operations Specialist</option>
                <option value="Sales Representative">Sales Representative</option>
                <option value="Technical Lead">Technical Lead</option>
                <option value="Business Consultant">Business Consultant</option>
                <option value="Web Designer">Web Designer</option>
                <option value="Database Administrator">Database Administrator</option>
                <option value="Marketing Coordinator">Marketing Coordinator</option>
                <option value="Copywriter">Copywriter</option>
                <option value="Software Architect">Software Architect</option>
                <option value="Administrative Assistant">Administrative Assistant</option>
                <option value="Customer Service Manager">Customer Service Manager</option>
                <option value="Public Relations Officer">Public Relations Officer</option>
                <option value="Security Specialist">Security Specialist</option>
                <option value="Event Planner">Event Planner</option>
                <option value="Executive Assistant">Executive Assistant</option>
                <option value="Chief Financial Officer">Chief Financial Officer</option>
                <option value="Operations Manager">Operations Manager</option>
            </select>

            <label for="rate_type">Rate Type:</label>
            <select id="rate_type" name="rate_type" required>
                <option value="monthly">Monthly</option>
                <option value="hourly">Hourly</option>
                <option value="daily">Daily</option>
            </select>
            
            <label for="rate">Rate:</label>
            <input type="number" min="1" step="1" id="rate" name="rate" placeholder="Enter Salary" required>
            
            <button type="submit">Update Employees</button>
        </form>
            ';
        }
      }
    }
    $conn->close();?>
    </div>
    <script src="updatescript.js"></script>
</body>
</html>