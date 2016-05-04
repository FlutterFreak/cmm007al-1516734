
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
<>

< class="container border">

<header>


    <div class="row border">





        <div class="col-md-12">

            <h2>myBlog</h2>
            <h3>because the internet needs to know what I think</h3>
        </div>

    </div>



</header>
<main>
    <div class="row">
        <div class="col-md-12 min-height">

            <div class="navbar">
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php">All Blog Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php?category=work">work Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php?category=university">University Items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="blog.php?category=family">Family items</a></h5></div>

                </div>
                <div class="row">
                    <div class="col-md-12"><h5><a href="add.php?">Insert a Blog Item</a></h5></div>

                </div>


            </div>
        </div>
    </div>
    <div class = "row margin-top">
        <div class="col-md-6">
            <input value="<?php echo $blog['entryTitle'] by $blogview['submitter']  ; ?>" class="form-control">
        </div>

    </div>

    <div class = "row margin-top">
        <div class="col-md-6">
            <input value="<?php echo $blog['Category']; ?>" class="form-control">
        </div>

    </div>

    <div class = "row margin-top">
        <div class="col-md-9">
            <textarea class="form-control"> <?php echo $blog['entrySummary']; ?> </textarea>
        </div>

    </div>

</main>
</body>
</html>