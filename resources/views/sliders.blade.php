@extends('Layouts.master')
@section('contents')
<link href="assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css" />

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
      <li><a href="#" class="active">Sliders</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
      <h3>Simple - <span class="semi-bold">Sliders</span></h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple">
          <div class="grid-title no-border">
            <h4>Basic <span class="semi-bold">Sliders</span></h4>
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
                <h3>Slider <span class="semi-bold">Colors</span></h3>
                <p>Basic slider with different color options, use of the below classes to quickly create a styled slider. Uses native boostrap colors scheme classes </p>
                <div class="row">
                  <div class="slider primary col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-value="60" data-slider-step="1" data-slider-max="70" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider sucess col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-max="70" data-slider-step="1" data-slider-value="50" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider info col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-max="70" data-slider-step="1" data-slider-value="44" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider warning col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-max="70" data-slider-step="1" data-slider-value="30" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider danger col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-max="70" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4">
                <h3>Slider <span class="semi-bold">Orientation</span></h3>
                <p>Sliders having the option for both vertical and horizontal orientaion by simply changing the <code>data-slider-orientation</code></p>
                <div class="slider sucess">
                  <input type="text" data-slider-tooltip="hide" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="10" data-slider-step="1" data-slider-max="70" data-slider-min="-20" value="" class="slider-element">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="50" data-slider-orientation="vertical" data-slider-selection="after" data-slider-tooltip="hide">
                </div>
                <br>
              </div>
              <div class="col-md-4">
                <h3>Slider <span class="semi-bold">Flip fill</span></h3>
                <p>This option allows to change the side of the fill color which can be either before or after the knob</p>
                <div class="row">
                  <div class="slider primary col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="60" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider primary col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="20" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="hide">
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple">
          <div class="grid-title no-border">
            <h4>Slider <span class="semi-bold">Options</span></h4>
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
                <h3>Slider <span class="semi-bold">Values</span></h3>
                <p>This slider have the option to change <code>min</code>, <code>max</code> and <code>step</code> values to anything you want. By altering these values you could archive a level of smooth sliding</p>
                <div class="row">
                  <div class="slider primary col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="60" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider sucess col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="50" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
                <div class="row">
                  <div class="slider info col-md-8">
                    <input type="text" class="slider-element form-control" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="40" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <h3>Slider <span class="semi-bold">More Options</span></h3>
                <p>Sliders having the option for both vertical and horizontal orientaion by simply changing the <code>data-slider-selection</code></p>
                <div class="slider sucess">
                  <input type="text" data-slider-tooltip="hide" data-slider-selection="before" data-slider-orientation="vertical" data-slider-value="30" data-slider-step="1" data-slider-max="70" data-slider-min="1" value="" class="slider-element">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="60" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="40" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="hide">
                </div>
                <div class="slider sucess">
                  <input type="text" class="slider-element" value="" data-slider-min="1" data-slider-max="70" data-slider-step="1" data-slider-value="50" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="hide">
                </div>
              </div>
              <div class="col-md-4">
                <h3>Slider <span class="semi-bold">Range</span></h3>
                <div class="slider primary">
                  <p>A cool demo that allows you to have a rang selector with two slider knobs and a value foramtor that can be currency or whatever you want. Attributes to change : <code>data-slider-value</code> </p>
                  <br>
                  <input type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="" class="slider-element form-control" data-slider-selection="after">
                </div>
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
  <script src="assets/plugins/modernizr.js" type="text/javascript"></script>
  <script src="assets/plugins/boostrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL PLUGINS -->
  <script>
  $(document).ready(function()
  {
    $('.slider-element').slider();
  });
  </script>
@endsection