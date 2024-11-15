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
        <li><a href="#" class="active">Search Results</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Search - <span class="semi-bold">Results</span></h3>
      </div>
      <div class="pull-left" id="Filters">
        <div class="btn-group">
          <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space"> <span class="anim150">Region</span> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li class="active" data-filter="all" data-dimension="region"><a href="#">All</a></li>
            <li data-filter="alaska" data-dimension="region"><a href="#">Alaska</a></li>
            <li data-filter="intermountain" data-dimension="region"><a href="#">Intermountain</a></li>
            <li data-filter="northeast" data-dimension="region"><a href="#">Northeast</a></li>
            <li data-filter="pacific_west" data-dimension="region"><a href="#">Pacific</a> </li>
            <li data-filter="southeast" data-dimension="region"><a href="#">Southeast</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space"> <span class="anim150">Recreation</span> <span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <li class="active" data-filter="all" data-dimension="recreation"><a href="#">All</a></li>
            <li data-filter="camping" data-dimension="recreation"><a href="#">Camping</a></li>
            <li data-filter="climbing" data-dimension="recreation"><a href="#">Climbing</a></li>
            <li data-filter="fishing" data-dimension="recreation"><a href="#">Fishing</a></li>
            <li data-filter="swimming" data-dimension="recreation"><a href="#">AlSwimmingl</a></li>
          </ul>
        </div>
      </div>
      <div class="pull-right">
        <div data-toggle="buttons-radio" class="btn-group">
          <button class="btn btn-primary active" type="button" id="ToList"><i class="fa fa-th-list"></i></button>
          <button class="btn btn-primary" type="button" id="ToGrid"><i class="fa fa-th-large"></i></button>
        </div>
      </div>
      <div class="clearfix"></div>
      <br>
      <div id="Parks" class="just">
        <!-- "TABLE" HEADER CONTAINING SORT BUTTONS (HIDDEN IN GRID MODE)-->
        <div class="list_header">
          <div class="meta name active desc" id="SortByName"> Name &nbsp; <span class="sort anim150 asc active" data-sort="data-name" data-order="desc"></span> <span class="sort anim150 desc" data-sort="data-name" data-order="asc"></span> </div>
          <div class="meta region">Region</div>
          <div class="meta rec">Recreation</div>
          <div class="meta area" id="SortByArea"> Area in Acres &nbsp; <span class="sort anim150 asc" data-sort="data-area" data-order="asc"></span> <span class="sort anim150 desc" data-sort="data-area" data-order="desc"></span> </div>
        </div>
        <!-- FAIL ELEMENT -->
        <div class="fail_element anim250">Sorry &mdash; we could not find any parks matching matching these criteria</div>
        <!-- BEGIN LIST OF PARKS (MANY OF THESE ELEMENTS ARE VISIBLE ONLY IN LIST MODE)-->
        <ul>
          <li class="mix northeast camping climbing fishing swimming" data-name="Acadia" data-area="47452.80">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/acadia.jpg" alt="" /> </div>
              <div class="titles">
                <h2>Acadia</h2>
                <p><em>Maine</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Northeast</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Climbing</li>
                <li>Fishing</li>
                <li>Swimming</li>
              </ul>
            </div>
            <div class="meta area">
              <p>47,452.80</p>
            </div>
          </li>
          <li class="mix intermountain camping climbing" data-name="Arches" data-area="76678.98">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/arches.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Arches</h2>
                <p><em>Utah</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Intermountain</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Climbing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>76,678.98</p>
            </div>
          </li>
          <li class="mix pacific_west camping fishing" data-name="Crater Lake" data-area="183224.05">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/crater.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Crater Lake</h2>
                <p><em>Oregon</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Pacific West</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>183,224.05</p>
            </div>
          </li>
          <li class="mix alaska camping climbing fishing" data-name="Denali" data-area="4740911.37">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/denali.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Denali</h2>
                <p><em>Alaska</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Alaska</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Climbing</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>4,740,911.37</p>
            </div>
          </li>
          <li class="mix alaska camping fishing" data-name="Glacier Bay" data-area="3223383.66">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/glacier.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Glacier Bay</h2>
                <p><em>Alaska</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Alaska</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>3,223,383.66</p>
            </div>
          </li>
          <li class="mix intermountain camping fishing" data-name="Grand Canyon" data-area="1217261.75">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/grand.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Grand Canyon</h2>
                <p><em>Arizona</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Intermountain</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>1,217,261.75</p>
            </div>
          </li>
          <li class="mix southeast camping fishing" data-name="Great Smoky Mountains" data-area="522418.90">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/great.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Great Smoky Mountains</h2>
                <p><em>Tennessee, North Carolina</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Southeast</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>522,418.90</p>
            </div>
          </li>
          <li class="mix pacific_West camping swimming" data-name="Haleakala" data-area="33264.62">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/haleakala.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Haleakala</h2>
                <p><em>Hawaii</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Pacific West</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Swimming</li>
              </ul>
            </div>
            <div class="meta area">
              <p>33,264.62</p>
            </div>
          </li>
          <li class="mix intermountain camping climbing fishing swimming" data-name="Yellowstone" data-area="2219790.71">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/yellowstone.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Yellowstone</h2>
                <p><em>Wyoming, Montana, Idaho</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Intermountain</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Climbing</li>
                <li>Fishing</li>
                <li>Swimming</li>
              </ul>
            </div>
            <div class="meta area">
              <p>2,219,790.71</p>
            </div>
          </li>
          <li class="mix intermountain camping climbing fishing" data-name="Intermountain" data-area="146597.40">
            <div class="meta name">
              <div class="img_wrapper"> <img src="assets/img/others/zion.jpg" onload="" alt="" /> </div>
              <div class="titles">
                <h2>Zion</h2>
                <p><em>Utah</em></p>
              </div>
            </div>
            <div class="meta region">
              <p>Intermountain</p>
            </div>
            <div class="meta rec">
              <ul>
                <li>Camping</li>
                <li>Climbing</li>
                <li>Fishing</li>
              </ul>
            </div>
            <div class="meta area">
              <p>146,597.40</p>
            </div>
          </li>
          <!-- END LIST OF PARKS -->
        </ul>
      </div>
    </div>
    <!-- END PAGE -->
  </div>
@endsection
@section('scripts')
<script src="assets/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->
<script src="assets/js/search_results.js" type="text/javascript"></script>
@endsection