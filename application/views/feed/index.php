


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo site_url() ?>/FeedController/logout/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
    <div class="col-sm-8 text-left"> 
      <h1><?php echo $welcome; ?> </h1>
      <p><?php print_r($this->session->userdata('google_user')); ?></p>
      <hr>
      <h3>Test</h3>
      <p><?php echo $this->session->userdata('uid'); ?></p>
       <!--user icon in two different styles-->
  <i class="fas fa-user"></i>
  <i class="far fa-user"></i>
  <!--brand icon-->
  <i class="fab fa-github-square"></i>
  
  
  <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
</button>

<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
</button>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        

      </div>
      
    </div>
  </div>
</div>

