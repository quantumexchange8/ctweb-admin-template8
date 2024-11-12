@extends('Layouts.master')
@section('contents')
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
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
    <div class="row" style="max-height:600px;">
      <div class="tiles row tiles-container red no-padding">
        <div class="col-md-4 tiles red no-padding">
          <div class="tiles-body">
            <div class="calender-options-wrapper">
              <h3 class="text-white semi-bold" id="calender-current-day"></h3>
              <h2 class="text-white" id="calender-current-date"></h2>
              <div id='external-events' class="hide-inphone events-wrapper">
                <div class="events-heading">&nbsp;Draggable Events</div>
                <div class='external-event'>My Event 1</div>
                <div class='external-event'>My Event 2</div>
                <div class='external-event'>My Event 3</div>
                <div class='external-event'>My Event 4</div>
                <div class='external-event'>My Event 5</div>
                <div class="checkbox check-default p-t-20">
                  <input type="checkbox" value="1" id='drop-remove'>
                  <label for="drop-remove">Keep Me Signed in</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 tiles white no-padding">
          <div class="tiles-body">
            <div class="full-calender-header">
              <div class="pull-left">
                <div class="btn-group ">
                  <button class="btn btn-success" id="calender-prev"><i class="fa fa-angle-left"></i></button>
                  <button class="btn btn-success" id="calender-next"><i class="fa fa-angle-right"></i></button>
                </div>
              </div>
              <div class="pull-right">
                <div data-toggle="buttons-radio" class="btn-group">
                  <button class="btn btn-primary active" type="button" id="change-view-month">month</button>
                  <button class="btn btn-primary " type="button" id="change-view-week">week</button>
                  <button class="btn btn-primary" type="button" id="change-view-day">day</button>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>
@endsection
@section('scripts')
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui-touch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/calender.js" type="text/javascript"></script>
@endsection