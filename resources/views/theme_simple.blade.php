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
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/themes/webarch.simple.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="/">
            <img src="assets/img/logo-b.png" class="logo" alt="" data-src="assets/img/logo-b.png" data-src-retina="assets/img/logo-b2x.png" width="106" height="21" />
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown hidden-xs hidden-sm">
              <a href="/" class="dropdown-toggle active" data-toggle="">
                <i class="material-icons">home</i>
              </a>
            </li>
            <li class="dropdown hidden-xs hidden-sm">
              <a href="/email" class="dropdown-toggle">
                <i class="material-icons">email</i><span class="badge bubble-only"></span>
              </a>
            </li>
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
              <li class="quicklinks  m-r-10">
                <a href="#" class="">
                  <i class="material-icons">refresh</i>
                </a>
              </li>
              <li class="quicklinks">
                <a href="#" class="">
                  <i class="material-icons">apps</i>
                </a>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
              <li class="m-r-10 input-prepend inside search-form no-boarder">
                <span class="add-on"> <i class="material-icons">search</i></span>
                <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
              </li>
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                  <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
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
          <!-- END TOP NAVIGATION MENU -->
          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <div class="chat-toggler sm">
              <div class="profile-pic">
                <img src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />
                <div class="availability-bubble online"></div>
              </div>
            </div>
            <ul class="nav quick-section ">
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li>
                    <a href="/user-profile"> My Account</a>
                  </li>
                  <li>
                    <a href="/calender">My Calendar</a>
                  </li>
                  <li>
                    <a href="/email"> My Inbox&nbsp;&nbsp;
                  		<span class="badge badge-important animated bounceIn">2</span>
                  	</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="/login"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                  </li>
                </ul>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i class="material-icons">chat</i><span class="badge badge-important hide">1</span>
				</a>
                <div class="simple-chat-popup chat-menu-toggle hide">
                  <div class="simple-chat-popup-arrow"></div>
                  <div class="simple-chat-popup-inner">
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
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username">Fred <span class="semi-bold">Smith</span></div>
              <div class="status">Life goes on...</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li class="start "> <a href="/"><i class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li> <a href="/dashboard_v1"> Dashboard v1 </a> </li>
                <li class=""> <a href="/ "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
              </ul>
            </li>
            <li>
              <a href="/widgets"> <i class="material-icons">panorama_horizontal</i> <span class="title">Widgets</span> <span class="label label-important bubble-only pull-right "></span></a>
            </li>
            <li>
              <a href="/email"> <i class="material-icons">email</i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span>
              </a>
            </li>
            <li class="open active">
              <a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">Themes</span> <span class=" open  arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/theme_coporate">Coporate </a> </li>
                <li> <a href="/theme_simple">Simple</a> </li>
                <li> <a href="/theme_elegant">Elegant</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">airplay</i> <span class="title">Layouts</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/layout_options"> Layout Options </a> </li>
                <li> <a href="/boxed_layout">Boxed Layout </a> </li>
                <li> <a href="/boxed_layout_v2">Inner Boxed Layout </a> </li>
                <li> <a href="/extended_layout">Extended Layout</a> </li>
                <li> <a href="/RTL">RTL Layout</a> </li>
                <li> <a href="/horizontal_menu">Horizontal Menu</a> </li>
                <li> <a href="/horizontal_menu_boxed">Horizontal Menu & Boxed</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> UI Elements</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/typography"> Typography </a> </li>
                <li> <a href="/messages_notifications"> Messages & Notifications </a> </li>
                <li> <a href="/notifications"> Notifications </a> </li>
                <li> <a href="/icons">Icons</a> </li>
                <li class=""> <a href="/buttons">Buttons</a> </li>
                <li> <a href="/tabs_accordian"> Tabs & Accordions </a> </li>
                <li> <a href="/sliders">Sliders</a> </li>
                <li> <a href="/group_list">Group list </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Forms</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/form_elements">Form Elements </a> </li>
                <li> <a href="/form_validations">Form Validations</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">apps</i> <span class="title">Grids</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/grids_simple">Simple Grids</a> </li>
                <li> <a href="/grids_draggable">Draggable Grids </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">playlist_add_check</i> <span class="title">Tables</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/tables"> Basic Tables </a> </li>
                <li> <a href="/datatables"> Data Tables </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">location_on</i> <span class="title">Maps</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/google_map"> Google Maps </a> </li>
                <li> <a href="/vector_map"> Vector Maps </a> </li>
              </ul>
            </li>
            <li>
              <a href="/charts"> <i class="material-icons">timeline</i> <span class="title">Charts</span> </a>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">layers</i> <span class="title">Extra</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="/user-profile"> User Profile </a> </li>
                <li> <a href="/time_line"> Time line </a> </li>
                <li> <a href="/support_ticket"> Support Ticket </a> </li>
                <li> <a href="/gallery"> Gallery</a> </li>
                <li class=""><a href="/calender"> Calendar</a> </li>
                <li> <a href="/search_results"> Search Results </a> </li>
                <li> <a href="/invoice"> Invoice </a> </li>
                <li> <a href="/404"> 404 Page </a> </li>
                <li> <a href="/500"> 500 Page </a> </li>
                <li> <a href="/blank_template"> Blank Page </a> </li>
                <li> <a href="/login"> Login </a> </li>
                <li> <a href="/login_v2">Login v2</a> </li>
                <li> <a href="/lockscreen"> Lockscreen </a> </li>
              </ul>
            </li>
            <li class="">
              <a href="javascript:;"> <i class="material-icons">more_horiz</i> <span class="title">Menu Levels</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="javascript:;"> Level 1 </a> </li>
                <li>
                  <a href="javascript:;"> <span class="title">Level 2</span> <span class=" arrow"></span> </a>
                  <ul class="sub-menu">
                    <li> <a href="javascript:;"> Sub Menu </a> </li>
                    <li> <a href="ujavascript:;"> Sub Menu </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="hidden-lg hidden-md hidden-xs" id="more-widgets">
              <a href="javascript:;"> <i class="material-icons"></i></a>
              <ul class="sub-menu">
                <li class="side-bar-widgets">
                  <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="material-icons">add</i></a></span></p>
                  <ul class="folders">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>
                        My quick tasks </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon red"></div>
                        To do list </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon blue"></div>
                        Projects </a>
                    </li>
                    <li class="folder-input" style="display:none">
                      <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                    </li>
                  </ul>
                  <p class="menu-title">PROJECTS </p>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Redesign home page</p>
                    </div>
                  </div>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Statistical report</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <div class="side-bar-widgets">
            <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="material-icons">add</i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon red"></div>
                  To do list </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a>
              </li>
              <li class="folder-input" style="display:none">
                <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="">
              </li>
            </ul>
            <p class="menu-title">PROJECTS </p>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                <p>Redesign home page</p>
              </div>
            </div>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
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
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <a href="/lockscreen"><i class="material-icons">power_settings_new</i></a></div>
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
            <li><a href="#" class="active">themes</a> </li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Theme - <span class="semi-bold">Simple</span></h3>
          </div>
          <div class="row">
            <div class="col-md-7">
              <div class="grid simple transparent">
                <div class="grid-title">
                  <h4>General <span class="semi-bold">Typography</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body">
                  <h1 class="light">go explore the <span class="semi-bold">world</span></h1>
                  <h4>small things in life matters the most</h4>
                  <h2>Big Heading <span class="semi-bold">Body</span>, <i>Variations</i> </h2>
                  <h4><span class="semi-bold">Open Me</span>, Light , <span class="semi-bold">Bold</span> , <i>Everything</i></h4>
                  <p>
                    is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking) </p>
                  <p>and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography</p>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Help <span class="semi-bold">Guide</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <p>This is a simple overview of how the <b>simple</b> theme would look like, we have taken care all the elements that are built on to webarch and even 3rd party plugins To setup you use the following two options
                  </p>
                  <br>
                  <h4>Option <span class="semi-bold">One</span> </h4>
                  <p>The old fashion CSS method, simply replace your core style sheet link with this one </p>
                  <code>
           			webarch/css/themes/webarch.simple.css
           		</code>
                  <br>
                  <br>
                  <h4>Option <span class="semi-bold">Two</span> </h4>
                  <p>Using LESS, simply open up <b>style.less</b> and <b>responsive.less</b> file and change the following varriable, but dont forget to compile it too</p>
                  <code>
           			@theme-name:"simple";
           		</code>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Basic <span class="semi-bold">Buttons</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row">
                    <div class="col-md-4">
                      <h3>Button <span class="semi-bold">Colors</span></h3>
                      <p>Basic buttons are traditional buttons with borders and background. Use any of the available button classes to quickly create a styled button. Compatible for bootstrap version 2 and 3.</p>
                      <br>
                      <!-- Standard gray button with gradient -->
                      <button type="button" class="btn btn-default btn-cons">Default</button>
                      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                      <button type="button" class="btn btn-primary btn-cons">Primary</button>
                      <!-- Indicates a successful or positive action -->
                      <button type="button" class="btn btn-success btn-cons">Success</button>
                      <!-- Contextual button for informational alert messages -->
                      <button type="button" class="btn btn-info btn-cons">Info</button>
                      <!-- Indicates caution should be taken with this action -->
                      <button type="button" class="btn btn-warning btn-cons">Warning</button>
                      <!-- Indicates a dangerous or potentially negative action -->
                      <button type="button" class="btn btn-danger btn-cons">Danger</button>
                      <!-- Indicates a dangerous or potentially negative action -->
                      <button type="button" class="btn btn-white btn-cons">White</button>
                      <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                      <button type="button" class="btn btn-link btn-cons">Link</button>
                    </div>
                    <div class="col-md-4">
                      <h3>Size <span class="semi-bold">Options</span></h3>
                      <p>Fancy larger or smaller buttons? Add <code>.btn-large</code> <code>.btn-small</code> or <code>.btn-mini</code> for additional sizes.</p>
                      <br>
                      <p>
                        <button type="button" class="btn btn-primary btn-lg btn-large">Large button</button>
                        <button type="button" class="btn btn-white btn-lg btn-large">Large button</button>
                      </p>
                      <p>
                        <button type="button" class="btn btn-primary">Default button</button>
                        <button type="button" class="btn btn-white">Default button</button>
                      </p>
                      <p>
                        <button type="button" class="btn btn-primary btn-sm btn-small">Small button</button>
                        <button type="button" class="btn btn-white btn-sm btn-small">Small button</button>
                      </p>
                      <p>
                        <button type="button" class="btn btn-primary btn-xs btn-mini">Mini button</button>
                        <button type="button" class="btn btn-white btn-xs btn-mini">Mini button</button>
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h3>Button <span class="semi-bold">Blocks</span></h3>
                      <p>Create block level buttons,those that span the full width of a parent by adding <code>.btn-block</code></p>
                      <br>
                      <button class="btn btn-block btn-success" type="button">Button Block</button>
                      <button class="btn btn-block btn-white" type="button">Bored Button Block</button>
                      <button class="btn btn-block btn-primary" type="button"><i class="fa fa-cloud-download"></i>&nbsp;&nbsp;Iconic Button Block</button>
                      <button class="btn btn-block btn-white" type="button"><i class="fa fa-cloud-download"></i>&nbsp;&nbsp;Iconic Button Block</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple ">
                <div class="grid-title no-border">
                  <h4>Progressbars </h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row">
                    <div class="col-md-4">
                      <h3>Progess bar <span class="semi-bold">Colors</span></h3>
                      <p>Progress bars comes with customized colors and transparent background that would fit any colored widget or portlet</p>
                      <br>
                      <div class="col-md-11">
                        <div class="progress">
                          <div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                          <div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                          <div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                          <div data-percentage="0%" style="width: 20%;" class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-11">
                        <h3>Progess bar <span class="semi-bold">Sizes</span></h3>
                        <p>We have customized progress bars size to be more elegant and intuitive</p>
                        <br>
                        <p>Meet Steve</p>
                        <div class="progress progress-small">
                          <div data-percentage="0%" style="width: 45%;" class="progress-bar progress-bar-success"></div>
                        </div>
                        <div class="progress progress-small">
                          <div data-percentage="0%" style="width: 45%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <p>Big Progress</p>
                        <div class="progress progress-success">
                          <div data-percentage="0%" style="width: 68%;" class="progress-bar progress-bar-success"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="col-md-11">
                        <h3>Other <span class="semi-bold">Options</span></h3>
                        <p>A cool animation that shows the progress bar is active, these coming in all 4 colours plus all sizes. </p>
                        <br>
                        <div class="progress progress-striped active progress-large">
                          <div data-percentage="0%" style="width: 45%;" class="progress-bar progress-bar-success"></div>
                        </div>
                        <div class="progress progress-striped active ">
                          <div data-percentage="0%" style="width: 45%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple ">
                    <div class="grid-title no-border">
                      <h4>Table <span class="semi-bold">Styles</span></h4>
                      <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                    </div>
                    <div class="grid-body no-border">
                      <h3>Stripped  <span class="semi-bold">Table</span></h3>
                      <p>They (allegedly) aid usability in reading tabular data by offering the user a coloured means of separating and differentiating rows from one another. Simply add the class<code>.table-striped</code>
                      </p>
                      <br>
                      <table class="table table-striped table-flip-scroll cf">
                        <thead class="cf">
                          <tr>
                            <th>
                              <div class="checkbox check-default ">
                                <input id="checkbox1" type="checkbox" value="1" class="checkall">
                                <label for="checkbox1"></label>
                              </div>
                            </th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox2" type="checkbox" value="1">
                                <label for="checkbox2"></label>
                              </div>
                            </td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td> <span class="label label-important">ALERT!</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox3" type="checkbox" value="1">
                                <label for="checkbox3"></label>
                              </div>
                            </td>
                            <td>Jacob&nbsp;&nbsp;<span class="label label-important">ALERT!</span>
                            </td>
                            <td>Thornton</td>
                            <td><span class="label label-success">WORK</span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox4" type="checkbox" value="1">
                                <label for="checkbox4"></label>
                              </div>
                            </td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td><span class="label label-important">ALERT!</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                      <h3>Hover  <span class="semi-bold">Table</span></h3>
                      <p>Hover tables is addition option that allows you to see what row you selected, this helps to see all the columns in that row. Use the following class to toggle this option
                        <code>.table-hover</code>
                      </p>
                      <br>
                      <table class="table table-hover no-more-tables">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="grid simple ">
                    <div class="grid-title no-border">
                      <h4>Table <span class="semi-bold">Styles</span></h4>
                      <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                      </div>
                    </div>
                    <div class="grid-body no-border">
                      <h3>Bordered  <span class="semi-bold">Table</span></h3>
                      <p>
                        Old is gold, here is old fashion bordered table, we tweaked it a bit so that the headings looks more prominent. As shown in all of the examples these tables are made to handle extra elements like small buttons, labels and even charts in it. By using the class <code>.table-bordered</code>. You can mix all the above mention classes to bring a unique table design
                      </p>
                      <br>
                      <table class="table table-bordered no-more-tables">
                        <thead>
                          <tr>
                            <th style="width:1%">
                              <div class="checkbox check-default">
                                <input id="checkbox20" type="checkbox" value="1" class="checkall">
                                <label for="checkbox20"></label>
                              </div>
                            </th>
                            <th class="text-center" style="width:12%">Month</th>
                            <th class="text-center" style="width:22%">Sales</th>
                            <th class="text-center" style="width:6%">Graph</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox21" type="checkbox" value="1">
                                <label for="checkbox21"></label>
                              </div>
                            </td>
                            <td class="text-center">January</td>
                            <td class="text-right">$ 50,000.00</td>
                            <td class="text-center">
                              <div class="customer-sparkline" data-sparkline-color="#0aa699" data-sparkline-type="bar">
                                <canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox22" type="checkbox" value="1">
                                <label for="checkbox22"></label>
                              </div>
                            </td>
                            <td class="text-center">February</td>
                            <td class="text-right">$ 10,000.00</td>
                            <td class="text-center">
                              <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#f35958">
                                <canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox23" type="checkbox" value="1">
                                <label for="checkbox23"></label>
                              </div>
                            </td>
                            <td class="text-center">March</td>
                            <td class="text-right">$ 85,000.00</td>
                            <td class="text-center">
                              <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0090d9">
                                <canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox24" type="checkbox" value="1">
                                <label for="checkbox24"></label>
                              </div>
                            </td>
                            <td class="text-center">April</td>
                            <td class="text-right">$ 56,000.00</td>
                            <td class="text-center">
                              <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#fdd01c">
                                <canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox check-default">
                                <input id="checkbox25" type="checkbox" value="1">
                                <label for="checkbox25"></label>
                              </div>
                            </td>
                            <td class="text-center">May</td>
                            <td class="text-right">$ 98,000.00</td>
                            <td class="text-center">
                              <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0aa699">
                                <canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- BEGIN CHAT -->
      <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
          <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">group chats</div>
              <div class="side-widget-content">
                <div id="groups-list">
                  <ul class="groups">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Office work</a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Personal vibes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="side-widget fadeIn">
              <div class="side-widget-title">favourites</div>
              <div id="favourites-list">
                <div class="side-widget-content">
                  <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                    <div class="user-profile">
                      <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                      <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
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
          <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="chat-messages-header">
              <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
              <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
            </div>
            <div class="chat-messages scrollbar-dynamic clearfix">
              <div class="inner-scroll-content clearfix">
                <div class="sent_time">Yesterday 11:25pm</div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
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
      </div>
      <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
  </body>
</html>