<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Hobby-Groups page' />
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website for IITGN Academic Council">
    <meta name="author" content="Akash Pallath">

    <title>Academic Council | IIT Gandhinagar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Student Acad-Council</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.html">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adh-pal.php">ADH &amp; PAL</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="experiences.php">Experiences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="opinions.php">Opinions</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Hobby-Groups
               <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Hobby-Groups</h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">Mathematics</h2>
              <cms:editable name='math_group' type='richtext'>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              </cms:editable>
              <a href="https://www.facebook.com/mathegon.28/" class="btn btn-outline-dark"><i class="fa fa-facebook-square"></i> MatheGon</a>
            </div>
            <div class="card-footer text-muted">
              Contact Point: <a class="btn btn-info" href="mailto:parab.amogh@iitgn.ac.in">Amogh Parab</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">Economics</h2>
              <cms:editable name='eco_group' type='richtext'>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              </cms:editable>
              <!--<a href="#" class="btn btn-primary">Facebook Page</a>-->
            </div>
            <div class="card-footer text-muted">
              Contact Point: <a class="btn btn-info" href="mailto:ayan.rakshit@iitgn.ac.in">Ayan Rakshit</a>
            </div>
          </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Academic Hobby-Groups @ IITGN </h5>
            <div class="card-body">
              <cms:editable name='sidebar_content' type='richtext'>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!
              </cms:editable>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container m-6 text-white">
        <div class="row">
          <div class="col-sm-6">
            <h5>Academic Council 2017-18</h5>
            <br>
            Indian Institute of Technology Gandhinagar, 
            <br>
        Palaj, Gandhinagar, Gujarat - 382355
        <br><br>
        <a href="http://www.iitgn.ac.in/aca-programm.htm" target="_" style="color:#7fbfff !important">IIT Gandhinagar | Academics</a>
        <br>
        <a href="https://www.facebook.com/ranchossofiitgn/" target="_" style="color:#7fbfff !important">Ranchos of IITGN</a>
        <br><br>
        <a class="btn btn-info" href="mailto:acad.secy@iitgn.ac.in">Email: acad.secy@iitgn.ac.in</a>
        <br><br>
        <small>Website developed by Akash Pallath (ChE 2015-19, General Member, AC 2017-18)</small>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  </body>
</html>
<?php COUCH::invoke(); ?>

