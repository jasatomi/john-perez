<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="#"><img src="image/logo.jpg" width="88px" /></a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class=""><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
      <li class="active"><a href="">Showbiz <span class="sr-only">(current)</span></a></li>
        
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="sports.php">Sports</a></li>
            <li><a href="money.php">Money</a></li>

           
            
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin/login.php">Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

  <style type="text/css">
    #homecontent{
  background: url("background/showbiz.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: gray;

}
body{
  background: url("background/showbiz.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: gray;
}
  </style>

   </head>
  <body>
 <?php
   echo "<div id='minicontent1'><img id='imagestyles' src='background/logo2.png' width='400px' height='200px'><div id='share-buttons'>
    

     
    <a href='http://www.facebook.com/sharer.php?u=http://localhost/kaya_yan/showbiz.php' target='_blank'>
        <img src='http://localhost/kaya_yan/icons/facebook.png' alt='Facebook' />
    </a>
    
    
    <a href='https://plus.google.com/share?url=http://localhost/kaya_yan/showbiz.php' target='_blank'>
        <img src='http://localhost/kaya_yan/icons/google.png' alt='Google' />
    </a>
   
    
    <a href='http://www.tumblr.com/share/link?url=http://localhost/kaya_yan/showbiz.php&amp;title=Simple Share Buttons' target='_blank'>
        <img src='http://localhost/kaya_yan/icons/tumblr.png' alt='Tumblr' />
    </a>
     
    
    <a href='https://twitter.com/share?url=http://localhost/kaya_yan/showbiz.php&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons' target='_blank'>
        <img src='http://localhost/kaya_yan/icons/twitter.png' alt='Twitter' />
    </a>
       
</div></div>";
    include("config/config.php");
    require_once("nbbc/nbbc.php");
    $bbcode = new bbcode;

    $sql = "SELECT * FROM showbiz ORDER BY id DESC";
    $res = mysqli_query($conn,$sql) or die(mysqli_error());

    $posts = "";

    if(mysqli_num_rows($res)>0){
      while($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
        $image = $row['image'];
        $output = $bbcode->Parse($content);

        echo "<div id='homecontent'>";
        $posts .= "<div id='content1'><h2 id=h1style>$title</h2><p id='outputstyle'>$output</p><img id='imagestyle' src='image/".$image."' width='400px' height='200px'><p id='datestyle'>Published: $date</p></div>";


      }
      echo $posts;
    } else {
      echo "There are no posts to display!";
    }
   
    
  ?>
 </body>
</html>