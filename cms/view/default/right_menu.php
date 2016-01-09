<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?=$TITLE?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?=$_SESSION['user_name'] ?><i class="fa fa-caret-down"></i>
                        
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=$url_rewrite?>quit"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>    
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?=$url_rewrite?>content/home"><i class="fa fa-home  fa-fw"></i> Home </a>			
                        </li>
                        
                        <li>
                             <a href="<?=$url_rewrite?>"><i class="fa fa-legal fa-fw"></i> Mobility<span class="fa arrow"></span></a>
                             
                             <ul class="nav nav-second-level">
                                  <li><a href="<?=$url_rewrite?>content/about/1"><i class="fa fa-institution  fa-fw"></i> Inbound<span class="fa arrow"></span></a>
								   <ul class="nav nav-third-level">
									 <li><a href="<?=$url_rewrite?>content/internship_inbound/1"><i class="fa fa-group fa-fw"></i> Internship</a></li>
									 <li><a href="<?=$url_rewrite?>content/destination/2"><i class="fa fa-send fa-fw"></i> Visiting Lecturer & Research</a></li>
									 <li><a href="<?=$url_rewrite?>content/destination/3"><i class="fa fa-file fa-fw"></i> Extend Visa Form</a></li>
									 
								   </ul>
								  </li>
                                  <li><a href="<?=$url_rewrite?>content/about/2"><i class="fa fa-globe fa-fw"></i> Outbound<span class="fa arrow"></span></a>
								   <ul class="nav nav-third-level">
									 <li><a href="<?=$url_rewrite?>content/destination/1"><i class="fa fa-group fa-fw"></i> Internship</a></li>
									 <li><a href="<?=$url_rewrite?>content/destination/2"><i class="fa fa-send fa-fw"></i> Visiting Lecturer & Research</a></li>
									 <li><a href="<?=$url_rewrite?>content/destination/3"><i class="fa fa-file fa-fw"></i> Study-Credit Earning</a></li>
								   </ul>
								  </li>
                             </ul>
                        </li>
                        <li>
                             <a href="<?=$url_rewrite?>"><i class="fa fa-road fa-fw"></i> Joint Activities<span class="fa arrow"></span></a>
                             
                             <ul class="nav nav-second-level">
                                  <li><a href="<?=$url_rewrite?>content/destination/1"><i class="fa fa-file fa-fw"></i> International Conference</a></li>
                                  <li><a href="<?=$url_rewrite?>content/destination/2"><i class="fa fa-file fa-fw"></i> Workshop</a></li>
                                  <li><a href="<?=$url_rewrite?>content/destination/3"><i class="fa fa-group fa-fw"></i> Joint Publication</a></li>
								  <li><a href="<?=$url_rewrite?>content/destination/4"><i class="fa fa-group fa-fw"></i> Joint Research</a></li>
                             </ul>
                        </li>
                       
                        
                       
                      
                        <?php
                        if($_SESSION['level']==1){
                         ?>    
                        
                        <li>
                            <a href="<?=$url_rewrite?>content/setting"><i class="fa fa-lock  fa-fw"></i> Setting</a>
                        </li>
                        <?php
                        } 
                       
                        ?>
                    </ul>
                    
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>