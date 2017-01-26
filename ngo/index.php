<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
<style>
.right {
    position: absolute;
    right: 0px;
    width: 300px;
    	
}
</style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include 'header.php';?>
  <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/1.jpg"  alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
         
                </div>
            </div>
        </div>
        </div>
        <div>  
        <div style="float:right;width:250px">
        <h1>Swami Vivekananda Quotes</h1>
<p>asdasd</p>

<p>asdasd</p>
<p>asdasd</p>
        </div>
<div class="panel panel-default" style="float:left;width:1050px" >
  <div class="panel-heading">
    <h3 class="panel-title">Swami Vivekanada</h3>
  </div>
  <div class="panel-body">
<div>
<img src="img/vivekananda1.jpg" align="left" style="width:100px;height:100px;">

  <p>  The Kendram is inspired by the rousing call of Swami Vivekananda to serve every man

as God himself-- -‘Nara’ as’ Narayana’.We are driven by his vision of India rising from

the villages and forests, from the most remote and most backward sections of our great

motherland.</p>
<a href=swami.php>Read More</a>
  </div>
</div>

<div class="panel panel-default" style="float:left">
  <div class="panel-heading">
    <h3 class="panel-title">Swami Mridananda</h3>
  </div>
  <div class="panel-body">
  <img src="img/vivekananda1.jpg" align="left" style="width:100px;height:100px;">
  <p>  The guidance of Swami Mridananda is instrumental in establishment of the Kendram. After the

Samadhi of Swamiji, the Kendram instituted an award in his name for spiritual seva leaders in the

state. Till now 10 stalwarts received it.</p>
<a href=swamim.php>Read More</a>

  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>