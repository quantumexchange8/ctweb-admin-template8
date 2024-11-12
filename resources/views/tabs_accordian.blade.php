@extends('Layouts.master')
@section('contents')
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
        <li><a href="#" class="active">Tabs & Accordians</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Simple - <span class="semi-bold">Tabs & Accordians</span></h3>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel-group" id="accordion" data-toggle="collapse">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
               Collapsible Group Item 
            </a>
          </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                  Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
            <a class="" data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">
              Typography Variables 
            </a>
          </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in">
                <div class="panel-body">
                  <h1 class="light">go explore the <span class="semi-bold">world</span></h1>
                  <h4>small things in life matters the most</h4>
                  <h2>Big Heading <span class="semi-bold">Body</span>, <i>Variations</i> </h2>
                  <h4><span class="semi-bold">Open Me</span>, Light , <span class="semi-bold">Bold</span> , <i>Everything</i></h4>
                  <p> is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking) </p>
                  <p>and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
             Easy Edit 
            </a>
          </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active">
              <a href="#tab1hellowWorld" role="tab" data-toggle="tab">Hello World</a>
            </li>
            <li>
              <a href="#tab1FollowUs" role="tab" data-toggle="tab">Hello Two</a>
            </li>
            <li>
              <a href="#tab1Inspire" role="tab" data-toggle="tab">Hello Three</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Dropdown <b class="caret"></b> </a>
              <ul class="dropdown-menu">
                <li><a href="#">New Project</a></li>
                <li><a href="#">Edit Details</a></li>
                <li><a href="#">View More</a></li>
                <li class="divider"></li>
                <li><a href="#" class="text-error">Delete Project</a></li>
              </ul>
            </li>
          </ul>
          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="tab1hellowWorld">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h3><span class="semi-bold">Sometimes</span> Small 
                things in life means 
                the most</h3>
                </div>
                <div class="col-md-6">
                  <h3 class="semi-bold">great tabs</h3>
                  <p class="light">default, the textarea element comes with a vertical scrollbar (and maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue entering and reviewing their text (by scrolling up and down).</p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab1FollowUs">
              <div class="row">
                <div class="col-md-12">
                  <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                  <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                  <br>
                  <p class="pull-right">
                    <button type="button" class="btn btn-white btn-cons">White</button>
                    <button type="button" class="btn btn-success btn-cons">Success</button>
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab1Inspire">
              <div class="row">
                <div class="col-md-12">
                  <h3>Follow us & get updated!</h3>
                  <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                  <br>
                  <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs" role="tablist">
              <li>
                <a href="#tab2hellowWorld" role="tab" data-toggle="tab">Hello World</a>
              </li>
              <li class="active">
                <a href="#tab2FollowUs" role="tab" data-toggle="tab">Hello Two</a>
              </li>
              <li>
                <a href="#tab2Inspire" role="tab" data-toggle="tab">Hello Three</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane " id="tab2hellowWorld">
                <div class="row column-seperation">
                  <div class="col-md-6">
                    <h3><span class="semi-bold">Sometimes</span> Small 
                  things in life means 
                  the most</h3>
                  </div>
                  <div class="col-md-6">
                    <h3 class="semi-bold">great tabs</h3>
                    <p class="light">default, the textarea element comes with a vertical scrollbar (and maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue entering and reviewing their text (by scrolling up and down).</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane active" id="tab2FollowUs">
                <div class="row">
                  <div class="col-md-12">
                    <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                    <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                    <br>
                    <p class="pull-right">
                      <button type="button" class="btn btn-white btn-cons">White</button>
                      <button type="button" class="btn btn-success btn-cons">Success</button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab2Inspire">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Follow us & get updated!</h3>
                    <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                    <br>
                    <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tabbable tabs-right">
            <ul class="nav nav-tabs" role="tablist">
              <li>
                <a href="#tab3hellowWorld" role="tab" data-toggle="tab">Hello World</a>
              </li>
              <li>
                <a href="#tab3FollowUs" role="tab" data-toggle="tab">Hello Two</a>
              </li>
              <li class="active">
                <a href="#tab3Inspire" role="tab" data-toggle="tab">Hello Three</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane " id="tab3hellowWorld">
                <div class="row column-seperation">
                  <div class="col-md-6">
                    <h3><span class="semi-bold">Sometimes</span> Small 
                  things in life means 
                  the most</h3>
                  </div>
                  <div class="col-md-6">
                    <h3 class="semi-bold">great tabs</h3>
                    <p class="light">default, the textarea element comes with a vertical scrollbar (and maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue entering and reviewing their text (by scrolling up and down).</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab3FollowUs">
                <div class="row">
                  <div class="col-md-12">
                    <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                    <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                    <br>
                    <p class="pull-right">
                      <button type="button" class="btn btn-white btn-cons">White</button>
                      <button type="button" class="btn btn-success btn-cons">Success</button>
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane active" id="tab3Inspire">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Follow us & get updated!</h3>
                    <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                    <br>
                    <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-pills" role="tablist">
            <li class="active">
              <a href="#tab4hellowWorld" role="tab" data-toggle="tab">Hello World</a>
            </li>
            <li>
              <a href="#tab4FollowUs" role="tab" data-toggle="tab" class="active">Hello Two</a>
            </li>
            <li>
              <a href="#tab4Inspire" role="tab" data-toggle="tab">Hello Three</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab4hellowWorld">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h3><span class="semi-bold">Sometimes</span> Small 
                things in life means 
                the most</h3>
                </div>
                <div class="col-md-6">
                  <h3 class="semi-bold">great tabs</h3>
                  <p class="light">default, the textarea element comes with a vertical scrollbar (and maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue entering and reviewing their text (by scrolling up and down).</p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab4FollowUs">
              <div class="row">
                <div class="col-md-12">
                  <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                  <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                  <br>
                  <p>
                    <button type="button" class="btn btn-white btn-cons">White</button>
                    <button type="button" class="btn btn-success btn-cons">Success</button>
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane " id="tab4Inspire">
              <div class="row">
                <div class="col-md-12">
                  <h3>Follow us & get updated!</h3>
                  <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                  <br>
                  <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-tabs" id="tab-5">
            <li class="active pull-right"><a href="#tab5hellowWorld">Hello World</a></li>
            <li class="pull-right"><a href="#tab5FollowUs">Hello Two</a></li>
            <li class="pull-right"><a href="#tab5Inspire">Hello Three</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab5hellowWorld">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h3><span class="semi-bold">Sometimes</span> Small 
                things in life means 
                the most</h3>
                </div>
                <div class="col-md-6">
                  <h3 class="semi-bold">great tabs</h3>
                  <p class="light">default, the textarea element comes with a vertical scrollbar (and maybe even a horizontal scrollbar). This vertical scrollbar enables the user to continue entering and reviewing their text (by scrolling up and down).</p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab5FollowUs">
              <div class="row">
                <div class="col-md-12">
                  <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                  <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                  <br>
                  <p>
                    <button type="button" class="btn btn-white btn-cons">White</button>
                    <button type="button" class="btn btn-success btn-cons">Success</button>
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane " id="tab5Inspire">
              <div class="row">
                <div class="col-md-12">
                  <h3>Follow us & get updated!</h3>
                  <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                  <br>
                  <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
    </div>
    <!-- END PAGE -->
  </div>
@endsection