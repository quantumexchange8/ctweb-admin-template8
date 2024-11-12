@extends('Layouts.master')
@section('sidebar')
    @include('Layouts.email-sidebar')
@endsection
@section('contents')
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    
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
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-body no-border" style="min-height: 850px;">
                  <br>
                  <div class="row-fluid ">
                    <h2>New Message </h2>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-label">Sender</label>
                        <span class="help">e.g. "someone@example.com"</span>
                        <div class="controls">
                          <input type="text" class="form-control ">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-label">Subject</label>
                        <span class="help">e.g. "Meeting Agenda"</span>
                        <div class="controls">
                          <input type="text" class="form-control ">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="25"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="admin-bar" id="quick-access" style="display:">
      <div class="admin-bar-inner">
        <div class="form-horizontal">
        </div>
        <button class="btn btn-danger btn-cons btn-add" type="button"><i class="icon-envelope"></i> Send</button>
        <button class="btn btn-white btn-cons btn-cancel" type="button">Save</button>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
@endsection
@section('scripts')
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
$(document).ready(function()
{
  $('#text-editor').wysihtml5();
  $("#quick-access").css("bottom", "0px");
});
</script>
@endsection