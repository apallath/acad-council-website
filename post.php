<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Post' clonable='1'>
  <cms:editable name='post_summary' type='richtext'/>
  <cms:editable name='post_content' type='richtext'/>
  <cms:editable name='post_image'
    crop='1'
    width='900'
    height='300'
    type='image'
  />
  <cms:editable name='post_author' type='text'/>

  <cms:folder name="event" title="Event"/>
  <cms:folder name="intern-experience" title="Internship Experiences"/>
  <cms:folder name="conf-workshop-experience" title="Conference/Workshop Experiences"/>
  <cms:folder name="competition-experience" title="Competition/Contest Experiences"/>
  <cms:folder name="other-experience" title="Other Experiences"/>
  <cms:folder name="opinion" title="Opinion"/>
</cms:template>
<cms:if k_is_page>
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
    <link href="css/round-about.css" rel="stylesheet">
    <link href="css/material-icons-styling.css" rel="stylesheet">

    <!-- Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Academic Council IITGN</a>
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
              <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hobby-groups.php">Hobby-Groups</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Experiences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opinions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ADH &amp; PAL</a>
            </li>
          </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><cms:show k_page_title /></h1>

          <!-- Author -->
          <p class="lead">
            by
            <cms:show post_author/>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <cms:show k_page_date format='jS M, y'/> &bull; <a href="#"><cms:show k_comments_count/> Comments</a></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<cms:show post_image/>" alt="">

          <hr>

          <!-- Post Content -->
          <cms:show post_content/>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <cms:if k_page_foldertitle>
            <cms:set my_category=k_page_foldertitle/>
          <cms:else/>
            <cms:set my_category='Uncategorized'/>
          </cms:if>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Category</h5>
            <div class="card-body">
            <cms:show my_category/>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Summary</h5>
            <div class="card-body">
              <cms:show post_summary/>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <footer class="py-5 bg-dark">
      <div class="container m-6 text-white">
        <div class="row">
          <div class="col-sm-6">
            <h5>Academic Council 2017-18</h5>
            <br>
            Indian Institute of Technology Gandhinagar, 
            <br>
        Palaj, Simkheda, Gandhinagar, Gujarat - 382355
        <br><br>
        <a href="http://www.iitgn.ac.in/aca-programm.htm">IIT Gandhinagar | Academics</a>
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
</cms:if>
<?php COUCH::invoke(); ?>
