

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
-->
<html>

<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>BugTracker</title>
</head>
<body>

<div class="container border">

    <header>


        <div class="row border">





            <div class="col-md-12">

                <h2>myBlog</h2>
                <h3>because the internet needs to know what I think</h3>
            </div>

        </div>



    </header>

    <div class="row">
        <div class="col-md-12 min-height">

            <div class="navbar">
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php">All Blog Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php">work Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php">University Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php">Family items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="add.php">Insert a Blog Item</a></h5></div>

                </div>


            </div>
        </div>
<div class="row">
    <div class="col-md-12 min-height">

        <div class="navbar">
            <div class="row">
                <div class="col-md-12"><h5><a href="blog.php">All Blog Items</a></h5></div>

            </div>
            <div class="row">
                <div class="col-md-12"><h5><a href="blog.php">work Items</a></h5></div>

            </div>
            <div class="row">
                <div class="col-md-12"><h5><a href="blog.php">University Items</a></h5></div>

            </div>
            <div class="row">
                <div class="col-md-12"><h5><a href="blog.php">Family items</a></h5></div>

            </div>
            <div class="row">
                <div class="col-md-12"><h5><a href="add.php">Insert a Blog Item</a></h5></div>

            </div>


        </div>
    </div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// execute if requested using HTTP GET Method
?>
<div class="row">
    <div class="col-md-10 border min-height">

        <div class = "row" style="margin-top: 10px;">
            <div class="col-md-3"> Enter Title:</div>
            <div class="col-md-9"> <input type="text" name="entertitle" class="form-control" required=""> </div>
        </div>

        <div class = "row" style="margin-top:10px;">
            <div class="col-md-3"> Enter summary:</div>
            <div class="col-md-9"> <textarea name="entersummary"class="form-control" required=""></textarea> </div>
        </div>

        <div class = "row" style="margin-top: 10px;">
            <div class="col-md-3">  Catagory: </div>
            <div class="col-md-9"> <input type="text" name="category" class="form-control" required=""></div>

            <div class = "row" style="margin-top: 10px;">
                <div class="col-md-3">  Submitted by: </div>
                <div class="col-md-9"> <input type="text" name="submittedby" class="form-control"></div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-md-2" style="float:right;">
                    <input type="submit" value="Submit" class="form-control">

                </div>

            </div>

        </div>
    </div>
<?
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

$message = "";
if(isset($_POST['save_blog']))
{
    $title = $_POST['entertitle'];
    $category = $_POST['category'];
    $summary = $_POST['entersummary'];
    $submitter = $_POST['submittedby'];

    $con = new mysqli("localhost", "root", "root", "bugtracker");

    $sql = "insert into bug (entryTitle,Category,entrySummary,submitter)values('$title','$category','$summary',' $submitter')";

    $con->query($sql);
    $con->close();
    $message = "<h3>Data saved successfully</h3>";

}//end if statement



// execute if requested using HTTP POST Method
}
else {
// this is impossible
}
?>
</body>
</html>