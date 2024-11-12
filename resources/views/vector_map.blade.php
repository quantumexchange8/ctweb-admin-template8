@extends('Layouts.master')
@section('contents')
<link href="assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" media="screen" />

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
  <div class="overlayer">
    <div class="overlayer-wrapper overlay-fixed">
      <div class="content">
        <h2>Vector <span class="semi-bold">Maps</span></h2>
        <h4>8,545,654 <i class="icon-map-marker"></i>
  </h4>
      </div>
    </div>
  </div>
  <div id="world-map" class="demo-map" style="height:860px;"></div>
</div>
@endsection
@section('scripts')
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="assets/js/vector_maps.js" type="text/javascript"></script>
@endsection