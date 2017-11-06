<?php 

include "functions.php";


if($_POST['name']){
  include_name($_POST['name']);
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Devopinhos</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Devopinhos</h3>
              <nav class="nav nav-masthead">
                <a><?php 
                date_default_timezone_set("America/Sao_Paulo");
                echo date("d/m/Y H:i"); ?> </a>
              </nav>
            </div>
          </div>

          <div class="inner cover" align="center">
            <div class="row">
              <div class="col-md-6">
                <img src="http://blog.honeypot.io/assets/cover-images/what-is-devops-cover.png" width="100%" align="center"/>
              </div>
              <div class="col-md-6">
                <h5>Hi, Welcome... <br><br> Please enter your name below and become one more DevOpinho registered<br><br></h5>
                <form method="post" >
  <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">yep, include me!</button>
</div>
</form>
              </div>
            </div>
          </div>

          <div class="inner cover" align="center">
            <div class="row">
              <div class="col-md-6">
                <br>
              <p>We have  <?php cont_names(); ?> DevOpinhos registred</p>
              </div>
              <div class="col-md-6" align="left">
              <?php get_names(); ?>
              </div>
            </div>
          </div>


          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
