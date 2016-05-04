<!DOCTYPE html>
<html>
<head>
    <title>blog</title>
</head>
<body>
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