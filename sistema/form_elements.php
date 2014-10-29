<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen">
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<link href="assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="index.html"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/></a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">	
        <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
		<li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>        
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
			<li class="m-r-10 input-prepend inside search-form no-boarder">
				<span class="add-on"> <span class="iconset top-search"></span></span>
				 <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
			</li>
		  </ul>
	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							John <span class="bold">Smith</span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>	
				<div id="notification-list" style="display:none">
					<div style="width:300px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
										A min ago
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capicity
									</div>
									<div class="date pull-left">
									2 mins ago
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You haveve got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
									<div class="date pull-left">
									An hour ago
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>				
				</div>
				<div class="profile-pic"> 
					<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
				</div>       			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="user-profile.html"> My Account</a>
                  </li>
                  <li><a href="calender.html">My Calendar</a>
                  </li>
                  <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
			<li class="quicklinks"> 	
			<a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" ><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
			</a> 
				<div class="simple-chat-popup chat-menu-toggle hide" >
					<div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
						 <div style="width:100px">
						 <div class="semi-bold">David Nester</div>
						 <div class="message">Hey you there </div>
						</div>
					</div>
				</div>
			</li> 
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>

<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username">John <span class="semi-bold">Smith</span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
      <ul>
        <li class="start"> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow"></span> </a> 
		   <ul class="sub-menu">
            <li > <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
            <li class="active"> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul>
		</li>
        <li class=""> <a href="widgets.html"> <i class="fa fa-envelope"></i> <span class="title">Widgets</span> <span class="label label-important pull-right ">HOT</span></a> </li>
        <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span></a> </li>
        <li class=""> <a href="../../frontend/index.html"> <i class="fa fa-flag"></i>  <span class="title">Frontend</span></a></li>
        <li class=""> <a href="javascript:;"> <i class="fa fa-file-text"></i> <span class="title">Layouts</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="layout_options.html"> Layout Options </a> </li>
              <li > <a href="boxed_layout.html">Boxed Layout </a> </li>
              <li > <a href="extended_layout.html">Extended Layout</a> </li>
            </ul>
        </li>            
        <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="typography.html"> Typography </a> </li>
            <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
            <li > <a href="notifications.html"> Notifications </a> </li>
            <li > <a href="icons.html">Icons</a> </li>
            <li > <a href="buttons.html">Buttons</a> </li>
            <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
            <li > <a href="sliders.html">Sliders</a> </li>
            <li > <a href="group_list.html">Group list </a> </li>
          </ul>
        </li>
        <li class="active open"> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow open"></span> </a>
          <ul class="sub-menu">
            <li class="active"> <a href="form_elements.html">Form Elements </a> </li>
            <li > <a href="form_validations.html">Form Validations</a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="grids_simple.html">Simple Grids</a> </li>
            <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="tables.html"> Basic Tables </a> </li>
            <li > <a href="datatables.html"> Data Tables </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="google_map.html"> Google Maps </a> </li>
            <li > <a href="vector_map.html"> Vector Maps </a> </li>
          </ul>
        </li>
        <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>
        <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="user-profile.html"> User Profile </a> </li>
            <li > <a href="time_line.html"> Time line </a> </li>
            <li > <a href="support_ticket.html"> Support Ticket </a> </li>
            <li > <a href="gallery.html"> Gallery</a> </li>
            <li class=""><a href="calender.html"> Calendar</a> </li>
            <li > <a href="search_results.html"> Search Results </a> </li>
            <li > <a href="invoice.html"> Invoice </a> </li>
            <li > <a href="404.html"> 404 Page </a> </li>
            <li > <a href="500.html"> 500 Page </a> </li>
            <li > <a href="blank_template.html"> Blank Page </a> </li>
            <li > <a href="login.html"> Login </a> </li>
            <li > <a href="login_v2.html">Login v2</a> </li>
            <li > <a href="lockscreen.html"> Lockscreen </a> </li>
          </ul>
        </li>
        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="javascript:;"> Level 1 </a> </li>
            <li > <a href="javascript:;"> <span class="title">Level 2</span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li > <a href="javascript:;"> Sub Menu </a> </li>
                <li > <a href="ujavascript:;"> Sub Menu </a> </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a>
          <ul class="sub-menu">
            <li class="side-bar-widgets">
              <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
              <ul class="folders" >
                <li><a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a> </li>
                <li><a href="#">
                  <div class="status-icon red"></div>
                  To do list </a> </li>
                <li><a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a> </li>
                <li class="folder-input" style="display:none">
                  <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                </li>
              </ul>
              <p class="menu-title">PROJECTS </p>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Redesign home page</p>
                </div>
              </div>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Statistical report</p>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      <div class="side-bar-widgets">
        <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
        <ul class="folders" >
          <li><a href="#">
            <div class="status-icon green"></div>
            My quick tasks </a> </li>
          <li><a href="#">
            <div class="status-icon red"></div>
            To do list </a> </li>
          <li><a href="#">
            <div class="status-icon blue"></div>
            Projects </a> </li>
          <li class="folder-input" style="display:none">
            <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" >
          </li>
        </ul>
        <p class="menu-title">PROJECTS </p>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Redesign home page</p>
          </div>
        </div>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Statistical report</p>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
  <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>		
	</div>
	<div class="pull-right">
		<div class="details-status">
		<span class="animate-number" data-value="86" data-animation-duration="560">86</span>%
	</div>	
	<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Elements</span></h3>
      </div>
	  <!-- BEGIN BASIC FORM ELEMENTS-->
        <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Simple <span class="semi-bold">Elemets</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border"> <br>
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <div class="form-group">
                        <label class="form-label">Your Name</label>
                        <span class="help">e.g. "Mona Lisa Portrait"</span>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Password</label>
                        <span class="help">e.g. "Mona Lisa Portrait"</span>
                        <div class="controls">
                          <input type="password" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email</label>
                        <span class="help">e.g. "some@example.com"</span>
                        <div class="controls">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Placeholder</label>
                        <span class="help">e.g. "some@example.com"</span>
                        <div class="controls">
                          <input type="text" placeholder="You can put anything here" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Disabled</label>
                        <span class="help">e.g. "some@example.com"</span>
                        <div class="controls">
                          <input type="text" placeholder="You can put anything here" class="form-control" disabled="disabled">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	<!-- END BASIC FORM ELEMENTS-->	 
	
	<!-- BEGIN FORM OPTIONS-->	  
	  <div class="row">
        <div class="col-md-8">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Form <span class="semi-bold">Options</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="span8">
                  <h3>Control <span class="semi-bold">Sizes</span></h3>
                  <p>Basic buttons are traditional buttons with borders and background. Use any of the available button classes to quickly create a styled button. Compatible for bootstrap version 2 and 3.</p>
					<br>
					<input class="form-control input-lg" type="text" placeholder=".input-lg">
					<br>
					<input class="form-control" type="text" placeholder="Default input">
					<br>
					<input class="form-control input-sm" type="text" placeholder=".input-sm">
					<br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Form <span class="semi-bold">Options</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Form <span class="semi-bold">Controls</span></h3>
                <p>Adding on top of existing browser controls, Bootstrap includes other useful form components. Add text or buttons before or after any text-based input. Do note that select elements are not supported here.</p>
                <br>
				<div class="input-group transparent">
				  <span class="input-group-addon ">
					<i class="fa fa-instagram"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Username">
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon primary">				  
				  <span class="arrow"></span>
					<i class="fa fa-align-justify"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Username">
				</div>
				<br>
				<div class="input-group">
				  <input type="text" class="form-control">
				   <span class="input-group-addon primary">		
				   <span class="arrow"></span>
					<i class="fa fa-align-justify"></i>		
				   </span>
				</div>
				
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!-- END FORM OPTIONS-->
	  
	  <!-- BEGIN CHECKBOX CONTROLS-->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Checkbox <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Color <span class="semi-bold">Options</span></h3>
                  <p>Our very own image-less pure CSS and retina compatible check box. These check boxes are customized and aviable in all boostrap color classes</p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-default">
                      <input id="checkbox1" type="checkbox" value="1">
                      <label for="checkbox1">Keep Me Signed in</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-success 	">
                      <input id="checkbox2" type="checkbox" value="1" checked="checked">
                      <label for="checkbox2">I agree</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary">
                      <input id="checkbox3" type="checkbox" value="1">
                      <label for="checkbox3">Mark</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-info">
                      <input id="checkbox4" type="checkbox" value="1">
                      <label for="checkbox4">Steve Jobs </label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-warning">
                      <input id="checkbox5" type="checkbox" value="1" checked="checked">
                      <label for="checkbox5">Action</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-danger">
                      <input id="checkbox6" type="checkbox" value="1" checked="checked">
                      <label for="checkbox6">Mark as read</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Shape <span class="semi-bold">Options</span></h3>
                  <p>Bored with traditional boxed shape check boxes? Here is a circle one simply add the class <code>.checkbox-circle</code> to change it</p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-default checkbox-circle">
                      <input id="checkbox7" type="checkbox" value="1" checked="checked">
                      <label for="checkbox7">Keep Me Signed in</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-success checkbox-circle">
                      <input id="checkbox8" type="checkbox" value="1" >
                      <label for="checkbox8">I agree</label>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="checkbox check-primary checkbox-circle" >
                      <input id="checkbox9" type="checkbox" value="1" checked="checked">
                      <label for="checkbox9">Mark</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>State <span class="semi-bold">Options</span></h3>
                  <p>These act the same way as normal HTML check boxes. Here are some states that </p>
                  <br>
                  <div class="row-fluid">
                    <div class="checkbox check-success">
                      <input id="check1" type="checkbox" name="check" value="check1" disabled="disabled">
                      <label for="check1">Checkbox No. 1</label>
                      <br>
                      <input id="check2" type="checkbox" name="check" value="check2" checked="checked" disabled="disabled">
                      <label for="check2">Checkbox No. 2</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!-- END CHECKBOX CONTROLS-->
	  
	  <!-- BEGIN RADIO/TOGGLE CONTROLS-->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Toggle <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Color <span class="semi-bold">Options</span></h3>
                  <p>Pure CSS radio button with a cool animation. These are available in all primary colors in bootstrap</p>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="radio">
                        <input id="male" type="radio" name="gender" value="male" checked="checked">
                        <label for="male">Male</label>
                        <input id="female" type="radio" name="gender" value="female">
                        <label for="female">Female</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="radio radio-success">
                        <input id="yes" type="radio" name="optionyes" value="yes">
                        <label for="yes">Agree</label>
                        <input id="no" type="radio" name="optionyes" value="no" checked="checked">
                        <label for="no">Disagree</label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                  <h3>State <span class="semi-bold">Options</span></h3>
                  <p>Use of different color opacity helps to destigues between different states such as disable</p>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="radio radio-primary">
                        <input id="Disabled" type="radio" name="Disabled" value="Disabled"  disabled="disabled">
                        <label for="Disabled">Disabled</label>
                        <input id="ADisabled" type="radio" name="ADisabled" value="ADisabled" checked="checked"  disabled="disabled">
                        <label for="ADisabled">Disabled</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Slide <span class="semi-bold">Toggle</span></h3>
                  <p>A cool iOS7 slide toggle. These are cutomize for all boostrap colors</p>
                  <br>
                  <div class="row-fluid">
                    <div class="slide-primary">
                      <input type="checkbox" name="switch" class="ios" checked="checked"/>
                    </div>
                    <div class="slide-success">
                      <input type="checkbox" name="switch" class="iosblue" checked="checked"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!-- END RADIO/TOGGLE CONTROLS-->
	  
	  <!-- BEGIN DROPDOWN CONTROLS-->
      <div class="row">
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Simple <span class="semi-bold">dropdowns</span></h3>
                  <p>These are highly customizable dropdowns that come with search option for use to search </p>
                  <br>
                  <select id="source" style="width:100%">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Remote <span class="semi-bold">data</span></h3>
                  <p>Load options via ajax to the dropdown control</p>
                  <br>
                  <input type="hidden" value="" style="width:300px" id="e12" tabindex="-1" class="select2-offscreen">
                  <select id="remote" style="width:100%">
                    <option value="1">Loading...</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Dropdown <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Multi <span class="semi-bold">Select</span></h3>
                  <p>Fancy multiselect option box. Customized for the anypreference</p>
                  <br>
                  <select id="multi" style="width:100%" multiple>
                    <option value="Jim">Jim</option>
                    <option value="John">John</option>
                    <option value="Lucy">Lucy</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!-- END DROPDOWN CONTROLS-->
	  
	  <!-- BEGIN DATEPICKER CONTROLS-->
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Date <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-4">
                  <h3>Simple  Date<span class="semi-bold"> Picker</span></h3>
                  <p>Date picker is powered by boostrap date picker, this is customized in way that it suites our theme and design, Have a look!</p>
                  <br>
                  <div class="input-append success date col-md-10 col-lg-6 no-padding">
                    <input type="text" class="form-control">
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                  <br>
                  <br>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-4">
                  <h3>Over<span class="semi-bold">view</span></h3>
                  <p>Here is an attached calender in case you want to see how it looks like, this is only used for a demo purpose</p>
                  <br>
                  <div id="dp5" data-date="12-02-2013" data-date-format="dd-mm-yyyy"></div>
                </div>
                <div class="col-md-4">
                  <h3>Advance <span class="semi-bold">Settings</span></h3>
                  <p>Some advance setting that you can do with this calender, like to start from years an disable sections of dates</p>
                  <br>             
                    <div class="input-append success date col-md-10 col-lg-6">
                      <input type="text" class="form-control" id="sandbox-advance">
                      <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span>
					</div>            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- BEGIN TIMEPICKER/COLORPICKER CONTROLS-->
      <div class="row">
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Time <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">    
                <h3>Simple Time <span class="semi-bold">Picker</span></h3>
                <p>This is a time picker controller that can be customized for both 24hour and 12 hour clocks</p>
                <br>
                <div class="form-group">
                  <label class="form-label">Default Timepicker</label>
                  <div class="controls">
                    <div class="input-append bootstrap-timepicker-component">
                      <input type="text" class="timepicker-default span12">
                      <span class="add-on"><span class="arrow"></span><i class="fa fa-clock-o"></i></span> </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">24hr Timepicker</label>
                  <div class="controls">
                    <div class="input-append bootstrap-timepicker-component">
                      <input type="text" class="timepicker-24 span12">
                      <span class="add-on"><span class="arrow"></span><i class="fa fa-clock-o"></i></span> </div>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Color <span class="semi-bold">Controls</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
                <h3>Color <span class="semi-bold">Picker</span></h3>
                <p>Hardly used but we included it too, You can pick a color and return it to any element you want</p>
                <br>
                <a data-color="rgb(255, 255, 255)" data-color-format="hex" id="cp4" class="btn btn-primary my-colorpicker-control" href="#" data-colorpicker-guid="8">Change background color</a> <br>
                <br>
                <div class="clearfix"></div>
              </div>
          </div>
        </div>
      </div>
	  <!-- END TIMEPICKER/COLORPICKER CONTROLS-->
	  
	  <!-- BEGIN INPUT HELPERS CONTROLS-->
      <div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Input <span class="semi-bold">Helpers</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">


                  <div class="row">
                    <div class="col-md-6">
                      <h3>Input <span class="semi-bold">Masks</span></h3>
                      <p>These assure the user will never enter invalid phone no, email or anything that has a pattern even without validations</p>
                      <br>
                      <div class="form-group">
                        <label class="form-label">Date</label>
                        <span class="help">e.g. "25/12/2013"</span>
                        <div class="controls">						 
							<input type="text" class="form-control" id="date">						                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Telephone</label>
                        <span class="help">e.g. "(324) 234-3243"</span>
                        <div class="controls">
                          <input type="text" class="form-control" id="phone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Custom</label>
                        <span class="help">e.g. "23-4324324"</span>
                        <div class="controls">
                          <input type="text" class="form-control" id="tin">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Social Security Number</label>
                        <span class="help">e.g. "432-43-2432"</span>
                        <div class="controls">
                          <input type="text" placeholder="You can put anything here" class="form-control" id="ssn">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Input <span class="semi-bold">autonumeric</span></h3>
                      <p>Do you forget small things? here is something that helps to automatically placed forgotten dollar signs, decimal places and even comma separates and many more!</p>
                      <br>
                      <div class="form-group">
                        <label class="form-label">Decimal place and comma separator</label>
                        <span class="help">e.g. "53,000.00"</span>
                        <div class="controls">
                          <input type="text" class="form-control" data-a-sep="," data-a-dec=".">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Weird way but works</label>
                        <span class="help">e.g. "45.000,00"</span>
                        <div class="controls">
                          <input type="text" class="form-control" data-a-sep="." data-a-dec=",">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Dollar prefix</label>
                        <span class="help">e.g. "$45.50"</span>
                        <div class="controls">
                          <input type="text" class="form-control" data-a-sign="$ ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Range</label>
                        <span class="help">e.g. "0 - 9,999"</span>
                        <div class="controls">
                          <input type="text" class="form-control" data-v-max="9999" data-v-min="0">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
	  <!-- END INPUT HELPERS CONTROLS-->
	  
	  <!-- BEGIN HTML5 WYSIWG CONTROLS-->
      <div class="row">
        <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>HTML5 <span class="semi-bold">WYSIWYG</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
      
                    <h3>Simple <span class="semi-bold">Editor</span></h3>
                    <p>Simple, elegant WYSIYG editor that acts as a word editor all necessary actions that is required to type simple content with style is available in this editor.
                      Its powererd by HTML5 WYSIYG editor which will work even on any mobile device. Simply place it any <code>textarea</code> </p>
                    <br>
                    <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10"></textarea>
                  
                </div>
              </div>
        </div>
      </div>	  
	  <!-- END HTML5 WYSIWG CONTROLS-->
	  
	  <!-- BEGIN TAG INPUTS / FILE UPLOADER CONTROLS-->
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Tags <span class="semi-bold">Input</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <h3>Tag <span class="semi-bold">Input</span></h3>
                    <p>Do you use tags to organize content on your site? This plugin will turn your boring tag list into a magical input that turns each tag into a style-able object with its own delete link. </p>
                    <br>
                    <input class="span12 tagsinput" type="text" value="Amsterdam,Washington" data-role="tagsinput" />
                    <input class="span12 tagsinput" type="text" value="johnsmith@webarc.com,janesmith@webarc.com" data-role="tagsinput" />
                    <input class="span12 tagsinput" id="source-tags" type="text"  />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Drag n Drop <span class="semi-bold">Uploader</span></h4>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <form action="/file-upload" class="dropzone no-margin">
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	   <!-- END TAG INPUTS / FILE UPLOADER CONTROLS-->
      <!-- END PAGE -->
    </div>
  </div>
</div>
<!-- BEGIN CHAT --> 
<div id="sidr" class="chat-window-wrapper">
	<div id="main-chat-wrapper" >
	<div class="chat-window-wrapper fadeIn" id="chat-users" >
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget fadeIn">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content" >
				<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>

	<div class="chat-window-wrapper fadeIn" id="messages-wrapper" style="display:none">
	<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>					
		</div>
	<div class="clearfix"></div>	
	<div class="chat-messages-header">
	<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
	<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
	</div>
	<div class="chat-messages">
		<div class="sent_time">Yesterday 11:25pm</div>
		<div class="user-details-wrapper " >
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Hello, You there?
			   </div>
			</div>					
			<div class="clearfix"></div>
		   <div class="sent_time off">Yesterday 11:25pm</div>
		</div>		
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					How was the meeting?
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="sent_time ">Today 11:25pm</div>
		<div class="user-details-wrapper pull-right">
			<div class="user-details">
			  <div class="bubble sender">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Sent On Tue, 2:45pm</div>
		</div>		
	</div>
	</div>
	<div class="chat-input-wrapper" style="display:none">
		<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>