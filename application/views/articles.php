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

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="<?php echo site_url('css/dashboard.css');?>" rel="stylesheet">

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="<?php echo site_url().'admin/dashboard/settings'; ?>">Settings</a></li>
            <li><a href="<?php echo site_url().'users/logout/'; ?>">Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>



    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Overview</a></li>
            <li ><a href="#">Pages <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">News</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Users</a></li>
            <li><a href="<?php echo site_url().'admin/dashboard/settings/'; ?>">Settings</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Page Settings</h1>

          <div class="row placeholders">
            
          </div>

         

          <h2 class="sub-header">Your Articles</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Article id</th>
                  <th>Title</th>
                  <th>Date published</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 

         foreach($articles as $t){ 


          echo "<tr>" ;
          echo "<td>";
          echo $t['ID']; 
          echo "</td>"; 
          echo "<td>";
          echo $t['title']; 
          echo "</td>"; 
          echo "<td>";
          echo $t['date']; 
          echo "</td>"; 
          echo "<td>";
          echo "<a href=". base_url().'/pages/edit_page_form/'. $t['ID'].">";       
          echo "<img src=". site_url('img/edit.png').">"; 
          echo "</a>"; 
          echo "<a href=". base_url().'/articles/delete_article/'. $t['ID'].">";       
          echo "<img src=". site_url('img/delete.png')." id='delete_img'>"; 
          echo "</a>"; 
          echo "</td>";
          echo "</tr>"; 
        
        } 

    ?>
              </tbody>
            </table>

            <h3 id="new_page"><a href="<?php echo base_url() . '/articles/new_article_form'; ?>"<span>Add new article</span></h3>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
