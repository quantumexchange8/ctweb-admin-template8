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
        <li><a href="#" class="active">Advance Layout options</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Layout - <span class="semi-bold">options</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Menu <span class="semi-bold">Options</span></h4>
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
                  <h3>Condenesed <span class="semi-bold">Menu</span></h3>
                  <p>Want to focus more on your content ? use webarch condensend menu, with a single toggle option</p>
                  <p> Use JS API <pre>$("body").condensMenu();</pre></p>
                  <p> or CSS Class </p>
                  <p> Add <code>condense-menu</code> to the body tag</p>
                  <br>
                  <button type="button" class="btn btn-primary btn-cons" onclick="$('body').condensMenu();">Condense it</button>
                </div>
                <div class="col-md-4">
                  <h3>Show/Hide <span class="semi-bold">Menu</span></h3>
                  <p>Want to focus more on your content ? use webarch condensend menu, with a single toggle option</p>
                  <p> Use JS API <pre>$("body").toggleMenu();</pre></p>
                  <p> or CSS Class </p>
                  <p> Add <code>hide-sidebar</code> to the body tag</p>
                  <br>
                  <button type="button" class="btn btn-primary btn-cons" onclick="$('body').toggleMenu();">Show / hide</button>
                </div>
                <div class="col-md-4">
                  <h3>Other<span class="semi-bold"> options</span></h3>
                  <p>Remove fixed menu option?</p>
                  <p> JS API <pre>$("body").toggleFixedMenu();</pre></p>
                  <p> or CSS Class </p>
                  <p> Add <code>menu-non-fixed</code> to the body tag</p>
                  <br>
                  <button type="button" class="btn btn-primary btn-cons" onclick="$('body').toggleFixedMenu();">Toggle it</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Other <span class="semi-bold">options</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <h3>Show/Hide <span class="semi-bold">Header</span></h3>
              <p>You can now switch off and on the content header if you dont need it</p>
              <p> JS API :<pre>$("body").toggleHeader();</pre></p>
              <p> or CSS Class </p>
              <p> Add <code>hide-top-content-header</code> to the body tag</p>
              <br>
              <button type="button" class="btn btn-success btn-cons" onclick="$('body').toggleHeader();">Toggle Header</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Chat <span class="semi-bold">Options</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <h3>Toggle <span class="semi-bold">Chat</span></h3>
              <p>You can now switch off and on the content header if you dont need it</p>
              <p> JS API :<pre>$("body").toggleChat();</pre></p>
              <br>
              <button type="button" class="btn btn-success btn-cons" onclick="$('#sidr').toggleChat();">Toggle Chat</button>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection