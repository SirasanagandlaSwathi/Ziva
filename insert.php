

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,initial-scale=1">
    <title>News</title>
    <style>
        body{
            background-color: rgb(241, 241, 240);
            margin:0;
            padding: 1%;
        }
        .header{
           
            text-align: center;
            background-color: #2d3d6d;
            color:azure;
            
        }
        .button{
            color:blue;
            background-color: azure;
        }
        a,a:link{
            text-decoration: none;
        }
        .menu{
            margin-top: 0%;
            background-color: #afce40;
        }
        section{
            padding-left: 2%;
            
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Welcome to Ziva Online Social Media</h1>
    <div class="menu">
        <center>
        <table width="100%">
        <nav>
            <tr><th>
            <a href="home.php">Home</a></th>
            <th><a href="display.php">All conversation</a></th>
            <th><a href="about.html">About Us</a></th>
            <th><a href="contact.html">Contact Us</a>
            <th><a href="se.php">Click here to search</a>
            </th>
        </tr>
        </nav>
        </table>
        </center>
        </div>
        </div>


	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "zivanews");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO everynews VALUES ('$id', 
			'$name','$gender','$address','$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$id\n $name\n "
				. "$gender\n $address\n $email\n $message");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		?>
	</center>
</body>

</html>
