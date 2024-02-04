<?php
require_once("db.php");
$query="select * from everynews";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Displaying the messgaes</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
body{
            background-color: rosybrown;
            margin:0;
            padding: 2%;
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
            color: #2d3d6d;
            size: 3px;
        }
        .menu{
            margin-top: 0%;
            background-color: #afce40;
        }
        
    </style>

</head>

<body>
    <div class="header">
        <h1>Welcome to Ziva Online Social Media</h1>
    <div class="menu">
        <center>
        <table width="100%">
            <tr><th>
            <a href="home.php">Home</a></th>
            <th><a href="display.php">All conversation</a></th>
            <th><a href="about.html">About Us</a></th>
            <th><a href="contact.html">Contact Us</a>
            <th><a href="se.php">Click here to search</a>
            <th>
            </th>
        </tr>
        </table>
        </center>
        </div>
        </div>
        <br>
        <br>

    <div class="bs-example">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="page-header clearfix">
                        <h2 class="pull-left">Data From DataBase</h2>

                    </div>
                    
                      <table class='table table-bordered table-striped'>
                      <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>gender</th>
                        <th>address</th>
                        <th>Email id</th>
                        <th>Message</th>
                      </tr>
                    <tr>
                    
                    <?php
                    while ($row=mysqli_fetch_assoc($result))
                    {       
                    ?>
                        <tr>

                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo $row['gender']; ?></td>

                        <td><?php echo $row['address']; ?></td>

                        <td><?php echo $row['email']; ?></td>

                        <td><?php echo $row['message']; ?></td>

                        </tr>

                    <?php
                    }
                    ?>

                    </table>

                     
                </div>

            </div>       

        </div>

    </div>

</body>

</html>
