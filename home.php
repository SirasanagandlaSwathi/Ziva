<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ziva</title>

    <style>
        body{
            background-color: lavenderblush;
            margin:0;
            padding: 0%;
        
        }
        .header{
           
            text-align: center;
            background-color: #2d3d6d;
            color:azure;
            
        }
        
        a,a:link{
            text-decoration: none;
        }
        .menu{
            margin-top: 0%;
            background-color: #afce40;
        }
       
        h1{
            padding: 0%;
            text-decoration: solid;
            text-align: center;
        }
        form{
            margin: 3% 10% 10% 10%;
            border: 5px solid black;
            padding:30px;
        }
        label,input{
            display:block;
            margin-bottom:10px;
            width:100%;
        }
        input[type="submit"]{
            background-color:#9a031e;
            color:white;
            padding:10px 15px;
            border:none;
            border-radius: 4px;
            cursor:pointer;
        }

    </style>

</head>
<body>

<body>
    <div class="header">
        <h1>Welcome to Ziva Online Social Media</h1>
    <div class="menu">
        <center>
        <table width="100%">
            <tr>
        <th><a href="home.php">Home</a></th>
            <th><a href="display.php">All conversation</a></th>
            <th><a href="about.html">About Us</a></th>
            <th><a href="contact.html">Contact Us</a>
            <th><a href="se.php">Click here to search</a>
            </th>
        </tr>
        
        </table>
        </center>
        </div>
        </div>
        <h1>Give Your Suggestions</h1>
        <div>
		<form action="insert.php" method="post/get">
        <p>
			<label for="id">id:</label>
			<input type="text" name="id" id="Id">
			</p>

			
        <p>
			<label for="Name">Name:</label>
			<input type="text" name="name" id="Name">
			</p>

			
        <p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
        <p>         
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
        <p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>
            <p>
			<label for="message" row="20" col="50">Message:</label>
			<input type="text" name="message" id="Message">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
