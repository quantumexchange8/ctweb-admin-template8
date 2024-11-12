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
    <div class="overlayer overlay-fixed">
      <div class="overlayer-wrapper">
        <div class="content">
          <h2>Google <span class="semi-bold">Maps</span></h2>
        </div>
      </div>
    </div>
    <div class="overlayer overlay-fixed top-right ">
      <div class="overlayer-wrapper">
        <div class="content">
          <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" class="btn btn-primary " id="map-zoom-in"><i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-primary" id="map-zoom-out"><i class="fa fa-minus"></i> </button>
          </div>
        </div>
      </div>
    </div>
    <div id="map" class="demo-map overlay-fixed"></div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->
<script src="assets/js/google_maps.js" type="text/javascript"></script>
@endsection