<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search</title>
    <style>
        body{
            background-color:#2a9d8f;
            margin:0;
            padding: 1%;
        }
        .header{
           
            text-align: center;
            background-color: #2d3d6d;
            color:azure;
            
        }
        
        a,a:link{
            text-decoration: none;
            color: #2d3d6d;
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


    </style>
</head>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter the text </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="enter name to search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","zivanews");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM everynews WHERE CONCAT(id,name,gender,address,email,message) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['gender']; ?></td>
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['message']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4" class="text-danger">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>