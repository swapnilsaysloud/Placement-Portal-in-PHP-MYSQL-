<?php

function help($name, $sem)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iitp_tpc";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "Select * from sem1_courses where Specialization = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td> 1 </td>';
        echo '<td>' . $row['Course'] . '</td>';
        echo '<td>' . $row['Credit'] . '</td>';
        echo '<td>' . $row['CCode'] . '</td>';
        echo '</tr>';
    }
    $sql = "Select * from sem2_courses where Specialization = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td> 2 </td>';
        echo '<td>' . $row['Course'] . '</td>';
        echo '<td>' . $row['Credit'] . '</td>';
        echo '<td>' . $row['CCode'] . '</td>';
        echo '</tr>';
    }
    $sql = "Select * from sem3_courses where Specialization = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td> 3 </td>';
        echo '<td>' . $row['Course'] . '</td>';
        echo '<td>' . $row['Credit'] . '</td>';
        echo '<td>' . $row['CCode'] . '</td>';
        echo '</tr>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        body {
	background-color: #f9f9f9;
	font-family: Arial, sans-serif;
  }
  
  /* Container */
  .container {
	max-width: 900px;
	margin: 180px 100px 200px 350px;
	padding: 40px;
	background-color: #ffffff;
	text-align: center;
	border-radius: 8px;
	box-shadow: 0 2px 6px rgba(0,0,0,0.3);
  }
  
  /* Heading */
  h1 {
	text-align: center;
	font-size: 36px;
	margin-bottom: 40px;
	color: #FE7062;
  }
  
  /* Form Group */
  .form-group {
	margin-bottom: 20px;
  }
  
  /* Label */
  label {
	display: block;
	font-size: 18px;
	margin-bottom: 8px;
	color: #FE7062;
  }
  
  /* Select */
  select ,
  input[type='text']{
	width: 100%;
	padding: 12px 20px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	font-size: 16px;
	background-color: #f5f5f5;
	color: #333333;
	margin-bottom: 20px;
  }
  
  /* Button */
  button {
	background-color: #FE7062;
	color: #ffffff;
	border: none;
	padding: 12px 20px;
	border-radius: 4px;
	cursor: pointer;
	font-size: 18px;
  }
  
  button:hover {
	background-color: #2d0603;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    margin: 50px auto;
    font-family: 'Open Sans', sans-serif;
}

caption {
    font-weight: bold;
    margin-bottom: 10px;
}

thead {
    background-color: #f5f5f5;
    font-weight: bold;
    color: #333;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f1f1f1;
}
 


        </style>
</head>

<body>
    <div class="container">
        <h1>Enter Branch to know courses</h1>
        <form method="post">
            <div class="form-group">
                <label for="Branch">Enter Branch:*</label>
                <select name="Branch" id="Branch" required>
                    <option value="CSE">Computer Science and Engineering</option>
                    <option value="EEE">Electrical and Electronics Engineering </option>
                    <option value="MNC">Maths and Computing</option>
                    <option value="AI/DS">Artificial Intelligence and Data Science</option>
                    <option value="PH">Engineering Physics</option>
                    <option value="MME">Material and Metallurgical Engineering</option>
                    <option value="ME">Mechnical Engineering</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="CH">Chemical Engineering</option>
                </select>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
                <a href="SeeMarks.php">See marks</a>
            </div>
        </form>
    </div>
    <div class="container1">
        <table>
            <thead>
                <tr>
                    <th>Semester</th>
                    <th>Course</th>
                    <th>Credit</th>
                    <th>CCode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "iitp_tpc";
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = htmlspecialchars($_REQUEST['Branch']);
                    $sem = 'sem1_courses';
                    help($name, $sem);
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

</html>