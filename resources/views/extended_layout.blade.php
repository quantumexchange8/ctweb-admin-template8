@extends('Layouts.master')
@section('sidebar')
    @include('Layouts.email-sidebar')
@endsection
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
      <div class="page-title">
        <h3>Master Page</h3>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- END PAGE -->
  </div>

  
@endsection