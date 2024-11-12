@extends('Layouts.master')
@section('contents')
<div class="page-content">
  <link href="assets/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- BELOW CSS FILE IS NOT REQUIRED -->
  <link href="assets/plugins/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen" />
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
        <li><a href="#" class="active">Notifications</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Notifications - <span class="semi-bold">Variations</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Notification <span class="semi-bold">Options</span></h4>
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
                  <h3>Layout <span class="semi-bold">Options</span></h3>
                  <p>This plugin has layout options where you can display it in any corner of the screen, simply click one layout corners and press the buttons on the other section to see the magic</p>
                  <br>
                  <div class="location-selector">
                    <div class="bit top left" data-position="top left"></div>
                    <div class="bit top right" data-position="top right"></div>
                    <div class="bit top" data-position="top"></div>
                    <div class="bit bottom left" data-position="bottom left"></div>
                    <div class="bit bottom right" data-position="bottom right"></div>
                    <div class="bit bottom" data-position="bottom"></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Status <span class="semi-bold">Options</span></h3>
                  <p>Try different status option to send the approprate message to the user with a status color or even image</p>
                  <br>
                  <p>
                    <button class="btn btn-danger btn-cons" onclick="showErrorMessage('Ops! Something went wrong')">Show Error Messsage</button>
                    <button class="btn btn-primary btn-cons" onclick="showSuccess('Your message has been succeeded')">Show Success Messsage</button>
                    <button class="btn btn-success btn-cons" onclick="progressMessage()">Inprogress Message</button>
                  </p>
                  </p>
                </div>
                <div class="col-md-4">
                  <h3>Simple <span class="semi-bold">Code</span></h3>
                  <p>Simple js code that is required to excute and open up a alert box</p>
                  <pre>Messenger().post("Thanks for checking out Messenger!");</pre>
                  <p>More options</p>
                  <pre>Messenger().post({
                        message: msg,
                        type: 'error',
                        showCloseButton: true
                    });	
                    </pre>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
    <!-- NOT REQUIRED : ONLY FOR DEMO-->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.3/underscore-min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min.js"></script>
    <script src="assets/plugins/jquery-notifications/js/messenger.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-notifications/js/messenger-theme-future.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/location-sel.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/theme-sel.js"></script>
    <!-- END -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script type="text/javascript" src="assets/plugins/jquery-notifications/js/demo/demo.js"></script>
    <script type="text/javascript" src="assets/js/notifications.js"></script>
    <!-- END PAGE LEVEL JS -->
@endsection