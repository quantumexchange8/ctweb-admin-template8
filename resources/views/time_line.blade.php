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
      <div class="row">
        <div class="col-md-10 col-vlg-7">
          <ul class="cbp_tmtimeline">
            <li>
              <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                <span class="date">today</span>
                <span class="time">10:05 <span class="semi-bold">am</span></span>
              </time>
              <div class="cbp_tmicon primary animated bounceIn"> <i class="fa fa-comments"></i> </div>
              <div class="cbp_tmlabel">
                <div class="p-t-10 p-l-30 p-r-20 p-b-20 xs-p-r-10 xs-p-l-10 xs-p-t-5">
                  <h4 class="inline m-b-5"><span class="text-success semi-bold">Jane smith</span> </h4>
                  <h5 class="inline muted semi-bold m-b-5">@johnsmith</h5>
                  <div class="muted">Shared publicly - 12:45pm</div>
                  <p class="m-t-5 dark-text"> Painter Lucian Freud was also born on December 8th a few years later - in 1922. Here's his "Girl with Roses" </p>
                </div>
                <div class="clearfix"></div>
                <div class="tiles grey p-t-10 p-b-10 p-l-20">
                  <ul class="action-links">
                    <li>Like</li>
                    <li>Comment</li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </li>
            <li>
              <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                <span class="date">yesterday</span>
                <span class="time">8:45 <span class="semi-bold">pm</span></span>
              </time>
              <div class="cbp_tmicon success animated bounceIn"> <i class="fa fa-map-marker"></i> </div>
              <div class="cbp_tmlabel">
                <div class="p-t-10 p-l-30 p-r-20 p-b-20 xs-p-r-10 xs-p-l-10 xs-p-t-5">
                  <h4 class="inline m-b-5"><span class="text-success semi-bold">Jane smith</span> </h4>
                  <h5 class="inline muted semi-bold m-b-5">near florida</h5>
                  <div class="muted">Shared publicly - 8:45pm</div>
                </div>
                <div id="map" class="" style="width:100%;height:250px"></div>
                <div class="clearfix"></div>
                <div class="tiles grey p-t-10 p-b-10 p-l-20">
                  <ul class="action-links">
                    <li>Like</li>
                    <li>Comment</li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </li>
            <li>
              <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                <span class="date">yesterday</span>
                <span class="time">1:30 <span class="semi-bold">pm</span></span>
              </time>
              <div class="cbp_tmicon info animated bounceIn"> <i class="fa fa-quote-left"></i> </div>
              <div class="cbp_tmlabel">
                <div class="p-t-10 p-l-30 p-r-20 p-b-20 xs-p-r-10 xs-p-l-10 xs-p-t-5">
                  <h4 class="inline m-b-5"><span class="text-success semi-bold">John smith</span> </h4>
                  <h5 class="inline muted semi-bold m-b-5">near florida</h5>
                  <div class="muted">Shared publicly - 8:45pm</div>
                  <div class="m-t-5 dark-text">
                    <h3> <span class="semi-bold">Steve Jobs</span> Time Capsule` is 
                Finally Unearthed on <span class="semi-bold">Skyace News</span> </h3>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="tiles grey p-t-10 p-b-10 p-l-20">
                  <ul class="action-links">
                    <li>Like</li>
                    <li>Comment</li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </li>
            <li>
              <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                <span class="date">today</span>
                <span class="time"><span class="animate-number" data-value="12" data-animation-duration="600"></span>:<span class="animate-number" data-value="45" data-animation-duration="600"></span> <span class="semi-bold">pm</span></span>
              </time>
              <div class="cbp_tmicon animated bounceIn">
                <div class="user-profile"> <img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35" alt=""> </div>
              </div>
              <div class="cbp_tmlabel">
                <div class="p-t-10 p-l-30 p-r-20 p-b-20 xs-p-r-10 xs-p-l-10 xs-p-t-5">
                  <h4 class="inline m-b-5"><span class="text-success semi-bold">Jane smith</span> </h4>
                  <h5 class="inline muted semi-bold m-b-5">@johnsmith</h5>
                  <div class="muted">Shared publicly - 12:45pm</div>
                  <p class="m-t-5 dark-text"> Painter Lucian Freud was also born on December 8th a few years later - in 1922. Here's his "Girl with Roses"<a href="#" class="text-primary">http://goo.gl/LWmNLq</a> ... </p>
                  <a href="#" class="muted">Read more(10 lines)</a> </div>
                <div class="m-l-10 m-r-10 xs-m-l-5 xs-m-r-5"> <img src="assets/plugins/jquery-superbox/img/superbox/superbox-full-18.jpg" style="width:100%" alt=""> </div>
                <div class="clearfix"></div>
                <div class="xs-p-r-10 xs-p-l-10 p-l-30 p-r-20 p-b-10 p-t-20 row">
                  <div class="col-md-6">
                    <h5 class="inline m-r-10">205 comments</h5>
                    <h5 class="inline">21,586 People like this</h5>
                  </div>
                  <div class="col-md-6">
                    <ul class="my-friends no-margin pull-right">
                      <li>
                        <div class="profile-pic"> <img width="35" height="35" data-src-retina="assets/img/profiles/e2x.jpg" data-src="assets/img/profiles/e.jpg" src="assets/img/profiles/e.jpg" alt=""> </div>
                      </li>
                      <li>
                        <div class="profile-pic"> <img width="35" height="35" data-src-retina="assets/img/profiles/b2x.jpg" data-src="assets/img/profiles/b.jpg" src="assets/img/profiles/b.jpg" alt=""> </div>
                      </li>
                      <li>
                        <div class="profile-pic"> <img width="35" height="35" data-src-retina="assets/img/profiles/h2x.jpg" data-src="assets/img/profiles/h.jpg" src="assets/img/profiles/h.jpg" alt=""> </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="tiles grey p-t-10 p-b-10 p-l-20">
                  <ul class="action-links">
                    <li>Like</li>
                    <li>Comment</li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END PAGE -->
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
<script src="assets/js/google_maps.js" type="text/javascript"></script>
@endsection