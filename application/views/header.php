<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css" media="screen">
            img{
                display: none;
            }
            .src{
                display: block !important;
                width: 100px;
                height: 100px;

            }
            nav a{
                color:#fff !important;
            }
        </style>
    </head>
    <body>
        <nav style="padding: 20px;background: black;" class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Admin</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse container" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav  navbar-right">
                    <li class=""><a href="#">menu1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">menu2</a></li>
                    <li><a href="#">menu3</a></li>
                    <li><a href="#">menu4</a></li>
                    
                    </li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
        <?php $this->load->view($subview); ?>