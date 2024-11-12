@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <!-- BEGIN MODEL-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <!-- END MODEL-->
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Messages & Notifications</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Alerts - <span class="semi-bold">Messages & Notifications</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple ">
            <div class="grid-title no-border">
              <h4>Message <span class="semi-bold">boxes</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Simple <span class="semi-bold">Alert</span></h3>
                <p>Alerts help to gain user attention and give feedback for proccessed task. These alerts are built with different background and borders to show</p>
                <br>
                <div class="alert">
                  <button class="close" data-dismiss="alert"></button>
                  Warning:&nbsp;Your monthly traffic is reaching limit. </div>
                <div class="alert alert-success">
                  <button class="close" data-dismiss="alert"></button>
                  Success:&nbsp;The <a href="#" class="link">page</a> has been added. </div>
                <div class="alert alert-info">
                  <button class="close" data-dismiss="alert"></button>
                  Info:&nbsp;You have <a href="#" class="link">198</a> unread messages. </div>
                <div class="alert alert-error">
                  <button class="close" data-dismiss="alert"></button>
                  Danger:&nbsp;The daily <a href="#" class="link">cronjob</a> has failed.
                  <button class="btn btn-danger btn-sm btn-small pull-right" type="button">Take Action</button>
                </div>
                <div style="display:none">
                  <p>Animate your message box to again more attention from user</p>
                  <div class="alert" id="animateAlert" style="display:none">
                    <button class="close" data-dismiss="alert"></button>
                    <a href="#" class="link">Danger:</a> Your monthly traffic is reaching limit. </div>
                  <button class="btn btn-white btn-cons" type="button" id="btnFlip">Flip</button>
                  <button class="btn btn-success btn-cons" type="button" id="btnShake">Shake</button>
                  <button class="btn btn-white btn-cons" type="button" id="btnBouce">bouce</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Message <span class="semi-bold">boxes</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Descriptive <span class="semi-bold">Alerts</span></h3>
                <p>Need more description space? Change classes to <code>alert-error</code> <code class="text-success">alert-success</code> <code class="text-info">alert-info</code> <code class="text-warning">alert-warning</code> at ease with different customized color set.</p>
                <br>
                <div class="alert alert-block alert-error fade in">
                  <button type="button" class="close" data-dismiss="alert"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> Error!</h4>
                  <p> Error-handling routine in <a href="#" class="link">x208888</a> and specifies the location of the routine within a procedure </p>
                  <div class="button-set">
                    <button class="btn btn-danger btn-cons" type="button">Do this</button>
                    <button class="btn btn-white btn-cons" type="button">Or this</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Labels <span class="semi-bold">& badge</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <h3>Simple <span class="semi-bold">Labels</span></h3>
                <p>A label, with optional background colors. Use the <code>label</code>class to create a label</p>
                <br>
                <span class="label">DEFAULT</span> <span class="label label-success">VIEW</span> <span class="label label-warning">HOLD</span> <span class="label label-important">ALERT</span> <span class="label label-info">SUCCESS</span> <span class="label label-inverse">SOLD</span>
                <br>
                <br>
                <h4>Badge <span class="semi-bold">Variations</span></h4>
                <p>A Badge, with optional background colors. Use the <code>badge</code>class to create a Badge</p>
                <span class="badge">2</span>&nbsp;&nbsp; <span class="badge badge-success">8</span>&nbsp;&nbsp; <span class="badge badge-warning">12</span>&nbsp;&nbsp; <span class="badge badge-important">300</span>&nbsp;&nbsp; <span class="badge badge-info">25</span>&nbsp;&nbsp; <span class="badge badge-inverse">5</span>&nbsp;&nbsp; </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple ">
            <div class="grid-title no-border">
              <h4>Alerts & <span class="semi-bold">Notifications</span></h4>
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
                  <h3>Tool <span class="semi-bold">Tips</span></h3>
                  <p>Tooltips can be a helpful way to provide information to visitors without creating clutter in a design. Tooltip plugin let’s you transform native tooltip’s into customizable overlays. You can adjust their content, position and appearance.</p>
                  <br>
                  <button type="button" class="btn btn-white tip" data-toggle="tooltip" title="Up here!">Top</button>
                  <button type="button" class="btn btn-white tip" data-toggle="tooltip" title="Hello there!" data-placement="right">Right</button>
                  <button type="button" class="btn btn-white tip" data-toggle="tooltip" title="Look down!" data-placement="bottom">Down</button>
                  <button type="button" class="btn btn-white tip" data-toggle="tooltip" title="Over here!" data-placement="left">Left</button>
                </div>
                <div class="col-md-4">
                  <h3>Simple <span class="semi-bold">Popovers</span></h3>
                  <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information. Hover over the button to trigger the popover. Requires Tooltip to be included.Four options are available: top, right, bottom, and left aligned.</p>
                  <br>
                  <button type="button" data-content="And here's some amazing content. It's very engaging. right?" id="popover" title="" data-toggle="popover" class="btn btn-primary" data-original-title="A Title">Click to toggle popover</button>
                </div>
                <div class="col-md-4">
                  <h3>Boostrap <span class="semi-bold">Modals</span></h3>
                  <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults. Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
                  <br>
                  <button class="btn btn-lg" data-toggle="modal" data-target="#myModal"> Launch demo modal </button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <br>
                          <i class="fa fa-credit-card fa-7x"></i>
                          <h4 id="myModalLabel" class="semi-bold">We need your billing info.</h4>
                          <p class="no-margin">You'll be charged $29/Month and get immediate access to new plan </p>
                          <br>
                        </div>
                        <div class="modal-body">
                          <div class="row form-row">
                            <div class="col-md-8">
                              <input type="text" class="form-control" placeholder="Your Card Number">
                            </div>
                            <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="CVS">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-12">
                              <input type="text" class="form-control" placeholder="Card Holder's Name">
                            </div>
                          </div>
                          <div class="row form-row">
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Month">
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Year">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
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
      <!-- END PAGE -->
    </div>
  </div>
@endsection