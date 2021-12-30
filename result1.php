<html>
<head> 
	<link rel="stylesheet" type="text/css" href="result1.css"> 
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Online Result Management</title>
</head>
<body>
	<center>
		<div class="txt">Online Result</div>
		<div class="content">
			<div class="content2">
				<div class="max">Input Panel</div>
      <!-- ADDDING FORM-->
      	<form action="result2.php" method="post"><br>
      		<input type="text" name="roll" placeholder="Roll Number" required><br/><br><br>
      		
      		<select id="country" name="country"> 
    <option value="pre">Pre Test/Half Yearly</option>
    <option value="fin">Test/Final</option>
</select> <br/><br><br>
<select id="class" name="class">
    <option value="six">Six</option>
    <option value="seven">Seven</option>
    <option value="eight">Eight</option>
    <option value="nine">Nine</option>
    <option value="ten">Ten</option></select>
<br/><br><br>
   <input type="submit" name="" value="Submit">
   </form>
			</div>
		</div>
		</center>
    
	</body>
	</html>