
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('css/offcanvas.css');?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
             <li class="active"><a href="#">Home</a></li>
            <?php 
              foreach($pages as $page){
                echo  "<li>";
                echo "<a href='" .site_url().'/pages/single_page/'.$page['page_id']."'>"; 
                echo $page['name']; 
                echo  "</a>"; 
                echo "</li>"; 
              }
            ?>
          </ul>
           <div class=" navbar-right">
             <ul class="nav navbar-nav">
               <li class="admin_icon"><a class="admin_ref" href="<?php echo site_url(). '/admin/dashboard'; ?>">Admin Panel</a></li>
             </ul>
           </div>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>
            <?php 
              if($settings == null){
                echo "Text about you and your page"; 
               }
              else {
                echo $settings[0]['about_text'];
              }

            ?>
            </p>
          </div>

          <div class="row">
          <?php 
            foreach($articles as $n){
              echo "<div class='col-xs-6 col-lg-4'>";
              echo "<h2>"; 
              echo "<a href='" .site_url().'/articles/single_article/'.$n['ID']."'>"; 
              echo $n['title']; 
              echo "</a>"; 
              echo "</h2>"; 
              echo "<p>";
              echo $n['content']; 
              echo "</p>"; 
              echo "<p><a class='btn btn-default' href='#'' role='button'>Read More &raquo;</a></p>"; 
              echo "</div>"; 
            }
            
          ?>
           </div> 


         </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
           <div class="panel panel-default stats-articles">
            <div class="panel-heading"><b>About me</b></div>
            <div class="panel-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nibh at mauris porta laoreet nec finibus quam. </p>
            </div>
        
        </div>

         <div class="panel panel-default stats-articles">
            <div class="panel-heading"><b>Categories</b></div>
            <div class="panel-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nibh at mauris porta laoreet nec finibus quam. </p>
            </div>
        
        </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>
     
      <footer>
        <p>
        <?php 
          if($settings == null){
            echo "@copyright"; 
          }
          else {
            echo $settings[0]['footer_text'];
          }

       ?>
     </p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
  </body>
</html>
