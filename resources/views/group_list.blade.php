@extends('Layouts.master')
@section('contents')
<div class="page-content">
  <link href="assets/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css" media="screen" />

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
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Group List</a></li>
      </ul>
      <div class="page-title">
        <i class="icon-custom-left"></i>
        <h3>Group - <span class="semi-bold">List</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple ">
            <div class="grid-title no-border">
              <h4>Message <span class="semi-bold">boxes</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <h3>Sortable  <span class="semi-bold">List</span></h3>
              <p>Here is a useful sortable list that can be grouped and sorted by simply dragging and dropping even on a touch device
                <br>
                <br>
                <code id="nestable-output"></code>
                <code id="nestable2-output"></code>
              </p>
              <br>
              <div class="cf nestable-lists">
                <div class="dd" id="nestable">
                  <ol class="dd-list">
                    <li class="dd-item" data-id="1">
                      <div class="dd-handle">Item 1</div>
                    </li>
                    <li class="dd-item" data-id="2">
                      <div class="dd-handle">Item 2</div>
                      <ol class="dd-list">
                        <li class="dd-item" data-id="3">
                          <div class="dd-handle">Item 3</div>
                        </li>
                        <li class="dd-item" data-id="4">
                          <div class="dd-handle">Item 4</div>
                        </li>
                        <li class="dd-item" data-id="5">
                          <div class="dd-handle">Item 5</div>
                          <ol class="dd-list">
                            <li class="dd-item" data-id="6">
                              <div class="dd-handle">Item 6</div>
                            </li>
                            <li class="dd-item" data-id="7">
                              <div class="dd-handle">Item 7</div>
                            </li>
                            <li class="dd-item" data-id="8">
                              <div class="dd-handle">Item 8</div>
                            </li>
                          </ol>
                        </li>
                        <li class="dd-item" data-id="9">
                          <div class="dd-handle">Item 9</div>
                        </li>
                        <li class="dd-item" data-id="10">
                          <div class="dd-handle">Item 10</div>
                        </li>
                      </ol>
                    </li>
                    <li class="dd-item" data-id="11">
                      <div class="dd-handle">Item 11</div>
                    </li>
                    <li class="dd-item" data-id="12">
                      <div class="dd-handle">Item 12</div>
                    </li>
                  </ol>
                </div>
                <div class="dd" id="nestable2">
                  <ol class="dd-list dark">
                    <li class="dd-item " data-id="13">
                      <div class="dd-handle">Item 13</div>
                    </li>
                    <li class="dd-item" data-id="14">
                      <div class="dd-handle">Item 14</div>
                    </li>
                    <li class="dd-item" data-id="15">
                      <div class="dd-handle">Item 15</div>
                      <ol class="dd-list">
                        <li class="dd-item" data-id="16">
                          <div class="dd-handle">Item 16</div>
                        </li>
                        <li class="dd-item" data-id="17">
                          <div class="dd-handle">Item 17</div>
                        </li>
                        <li class="dd-item" data-id="18">
                          <div class="dd-handle">Item 18</div>
                        </li>
                      </ol>
                    </li>
                  </ol>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE -->
    </div>
  </div>
@endsection
@section('scripts')
<script src="assets/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="assets/js/group_list.js" type="text/javascript"></script>
@endsection