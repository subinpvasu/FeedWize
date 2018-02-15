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
          <li>
              
        <select class="selectpicker" data-style="btn-default">
    <optgroup label="Active Accounts">
        <option>Select</option>
        <option>Account 1</option>
        <option>Account 2</option>
        <option>Account 3</option>
        <option>Account 4</option>
    </optgroup>
    <optgroup label="Inactive Accounts">
      <option>Account 9</option>
      <option>Account 7</option>
      <option>Account 6</option>
    </optgroup>
  </select>      
              
          </li>
      </ul>
      <ul class="nav navbar-nav navbar-right"  data-style="btn-warning">
          <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('google_user')['username']; ?> <span class="caret"></span> <img src="<?php echo $this->session->userdata('google_user')['imageurl']; ?>" class="img-circle" alt="User" width="25" height="25"> </a>
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
                    <a <?php echo $menu_active==1?'class="selected"':''; ?>  href="<?php echo site_url() ?>/FeedController/dashboard/"><i class="fas fa-chart-line fa-2x"></i>&nbsp;&nbsp;<h5>Dashboard</h5></a>
                </li>
                <li>
                    <a <?php echo $menu_active==2?'class="selected"':''; ?>  href="<?php echo site_url() ?>/FeedController/imports/"><i class="fas fa-upload fa-2x"></i>&nbsp;&nbsp;<h5>Imports</h5></a>
                </li>
                <li>
                    <a <?php echo $menu_active==3?'class="selected"':''; ?>  href="<?php echo site_url() ?>/FeedController/preview/"><i class="fas fa-forward fa-2x"></i>&nbsp;&nbsp;<h5>Preview</h5></a>
                </li>
                <li>
                    <a <?php echo $menu_active==4?'class="selected"':''; ?>  href="<?php echo site_url() ?>/FeedController/settings/"><i class="fas fa-cog fa-2x"></i>&nbsp;&nbsp;<h5>Settings</h5></a>
                </li>
                                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->