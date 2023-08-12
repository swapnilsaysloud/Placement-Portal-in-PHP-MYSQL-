
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
	max-width: 800px;
	margin: 180px 400px 200px 350px;
	padding: 60px;
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
  select {
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
  


    </style>
</head>

<body>
  <div class="container">
    <h1>For which Profile?</h1>
    <form method="post" action = 'EligibleCandidates.php'>
    <div class="form-group">
                    <label for="ProfileName">Profile Name:</label>
                    <select name="ProfileName" id="ProfileName">
                        <option value="SDE">SDE</option>
                        <option value="Finance">Finance</option>
                        <option value="Management">Management</option>
                        <option value="Core">Core</option>
                        <option value="Others">Others</option>
                    </select>
                    <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
                </div>
	</form>
  </div>

</body>

</html>