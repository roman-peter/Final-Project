<?php 
include 'inc/header.php';
include "inc/carousel.php";
?>

<div class="container">
      <!-- Page Heading -->
      <h1 class="my-4">Code Factory Alumni<br>
        <small>Check our content below:</small>
      </h1>
      <p class="lead mb-4">
  		  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
      </p>

      <!-- TEASER ITEM -->
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item teaser">
          <div class="card h-100">
            <a routerLink = "stories"><i class="fas fa-newspaper animate-teaser"></i></a>
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">
                <a routerLink = "stories">Stories</a>
              </h4>
              <p class="card-text">In this page you can read about some of our former students. Each of them told us a bit about their experience as a student at CodeFactory, as well as their current careers.</p>
              <a class="mt-auto" routerLink = "stories">
                <i class="fas fa-chevron-circle-right"></i> 
                Stories
              </a>              
            </div>
          </div>
        </div>

        <!-- TEASER ITEM -->
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item teaser">
          <div class="card h-100">
            <a routerLink = "directory">
              <i class="fas fa-clipboard-check animate-teaser"></i>
            </a>
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">
                <a routerLink = "directory">Directory</a>
              </h4>
              <p class="card-text">This page includes relevant information about our directory board. You can use our filter to select member by course.</p>
              <a class="mt-auto" routerLink = "directory"><i class="fas fa-chevron-circle-right"></i> Directory</a>
            </div>
          </div>
        </div>

        <!-- TEASER ITEM -->
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item teaser">
          <div class="card h-100">
            <a routerLink = "career">
              <i class="fas fa-chalkboard-teacher animate-teaser"></i>
            </a>
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">
                <a class="mt-auto" routerLink = "career"> Careers</a>
              </h4>
              <p class="card-text">Here you can look for the current working positions available. We always keep it updated with the latest job opportunities.
              </p>
              <a class="mt-auto" routerLink = "career"><i class="fas fa-chevron-circle-right"></i> Careers</a>              
            </div>
          </div>
        </div>

        <!-- TEASER ITEM -->
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item teaser">
          <div class="card h-100">
            <a routerLink = "events">
              <i class="fas fa-user-graduate animate-teaser"></i>
            </a>
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">
                <a routerLink = "events"> Events</a>
              </h4>
              <p class="card-text">If you are interested in participating on coding events, meetups, or simply checking out the next parties that we are organizing, visit our events page.
              </p>
              <a class="mt-auto" routerLink = "events"><i class="fas fa-chevron-circle-right"></i> Events</a>              
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->

<?php 
include 'inc/footer.php';
?>