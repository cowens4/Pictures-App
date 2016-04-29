<!DOCTYPE html>
<html lang="en">
<head>
  <title>Twitter Pictures</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #8d672d;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #b4794b; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #4b8385;
      color: #ffffff;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #ffffff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<a name="top"></a>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Twitter Pictures</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#arch">ARCHITECTURE</a></li>
        <li><a href="#nature">NATURE</a></li>
        <li><a href="#wof">WORLDS OF FUN</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<a name="arch"></a>
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Architecture</h3>
  <a class="twitter-grid" href="https://twitter.com/corbinowens92/timelines/726082204367880192">Architecture</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  <p>A collection of architectural pictures from the Architecture Digest Twitter page.</p>
</div>

<!-- Second Container -->
<a name="nature"></a>
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Nature</h3>
  <a class="twitter-grid" href="https://twitter.com/TwitterDev/timelines/539487832448843776">National Park Tweets</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  <p>A collection of US National Park pictures from the US Department of Interior Twitter page.</p>
</div>

<!-- Third Container -->
<a name="wof"></a>
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">Worlds of Fun</h3>
  <a class="twitter-grid" href="https://twitter.com/corbinowens92/timelines/721016618151579648">Worlds of Fun</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  <p>A collection of Worlds of Fun pictures from the Worlds of Fun Twitter page.</p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
	<a href="#top">Back to Top</a>
  <p>Twitter Pictures Collected by Corbin Owens</p> 
</footer>

</body>
</html>
