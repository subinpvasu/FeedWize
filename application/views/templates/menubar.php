<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

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
        <li><a href="#">Projects</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu"> 	
          <li><a href="#"><i class="far fa-address-card"></i> Profile</a></li>
          <li><a href="#"><i class="far fa-envelope-open"></i> Notifications</a></li>
          <li><a href="<?php echo site_url() ?>/FeedController/logout/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
  
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li>
                    <a class="menu-toggle" href="#"><i class="fas fa-align-justify fa-2x"></i></a>
                </li>
                <li>
                    <a class="selected" href="#"><i class="fas fa-chart-line fa-2x"></i>&nbsp;&nbsp;<h5>Dashboard</h5></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-upload fa-2x"></i>&nbsp;&nbsp;<h5>Imports</h5></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-forward fa-2x"></i>&nbsp;&nbsp;<h5>Preview</h5></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-cog fa-2x"></i>&nbsp;&nbsp;<h5>Settings</h5></a>
                </li>
                                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->