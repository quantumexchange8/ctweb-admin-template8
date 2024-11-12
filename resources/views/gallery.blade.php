@extends('Layouts.master')
@section('contents')
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/jquery-superbox/css/style.css" rel="stylesheet" type="text/css" media="screen" />
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
        <li><a href="#" class="active">Gallery</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Photo - <span class="semi-bold">Gallery</span></h3>
      </div>
      <div class="superbox">
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-1.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-1.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-2.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-2.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-3.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-3.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-4.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-4.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-5.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-5.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-6.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-6.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-7.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-7.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-8.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-8.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-9.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-9.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-10.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-10.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-11.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-11.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-12.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-12.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-13.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-13.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-14.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-14.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-15.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-15.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-16.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-16.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-17.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-17.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-18.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-18.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-19.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-19.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-20.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-20.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-21.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-21.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-22.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-22.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-23.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-23.jpg" alt="" class="superbox-img"> </div>
        <!--
            -->
        <div class="superbox-list"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-thumb-24.jpg" data-img="assets/plugins/jquery-superbox/img/superbox/superbox-full-24.jpg" alt="" class="superbox-img"> </div>
        <div class="superbox-float"></div>
      </div>
      <!-- /SuperBox -->
    </div>
  </div>
@endsection

@section('scripts')
<script src="assets/plugins/jquery-superbox/js/superbox.js" type="text/javascript"></script>

<script>
$(function()
{
  // Call SuperBox - that's it!
  $('.superbox').SuperBox();
});
</script>
@endsection