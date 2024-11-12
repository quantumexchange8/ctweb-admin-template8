@extends('Layouts.master')
@section('contents')
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="assets/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">

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
      <li><a href="#" class="active">Form layouts & Validations</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
      <h3>Form - <span class="semi-bold">Validations</span></h3>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="grid simple form-grid">
          <div class="grid-title no-border">
            <h4>Traditional <span class="semi-bold">Validation</span></h4>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#grid-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="grid-body no-border">
            <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate">
              <div class="form-group">
                <label class="form-label">Amount</label> <span class="help">e.g. "5000"</span>
                <input class="form-control" id="form1Amount" name="form1Amount" type="number" required>
              </div>
              <div class="form-group">
                <label class="form-label">Card Holder's Name</label> <span class="help">e.g. "Jane Smith"</span>
                <div class="input-with-icon right">
                  <i class=""></i>
                  <input class="form-control" id="form1CardHolderName" name="form1CardHolderName" type="text" required>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Card Number</label>z <span class="help">e.g. "5689569985"</span>
                <div class="input-with-icon right">
                  <input class="form-control" id="form1CardNumber" name="form1CardNumber" type="text" type=text pattern="[0-9]{13,16}" required>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Card Type</label> <span class="help">e.g. "Visa"</span>
                <div class=" right">
                  <i class=""></i>
                  <select class="form-control select2" id="cardType" name="cardType" data-init-plugin="select2" required>
                    <option value="">
                      Select Type
                    </option>
                    <option value="1">
                      Visa
                    </option>
                    <option value="2">
                      Master
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <div class="pull-right">
                  <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                  <button class="btn btn-white btn-cons" type="button">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="grid simple form-grid">
          <div class="grid-title no-border">
            <h4>Icon <span class="semi-bold">Validation</span></h4>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#grid-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="grid-body no-border">
            <br>
            <form id="form_iconic_validation" action="#">
              <div class="form-group">
                <label class="form-label">Your Name</label>
                <span class="help">e.g. "Jonh Smith"</span>
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="text" name="form1Name" id="form1Name" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Your email</label>
                <span class="help">e.g. "john@examp.com"</span>
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="text" name="form1Email" id="form1Email" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Website</label>
                <span class="help">e.g. "http://www.webarc.com"</span>
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <input type="text" name="form1Url" id="form1Url" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Gender</label>
                <span class="help">e.g. "Select one"</span>
                <div class="input-with-icon  right">
                  <i class=""></i>
                  <select name="gendericonic" id="gendericonic" class="select2 form-control" data-init-plugin="select2">
                    <option value="">Select...</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <div class="pull-right">
                  <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
                  <button type="button" class="btn btn-white btn-cons">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple form-grid">
          <div class="grid-title no-border">
            <h4>Condensed <span class="semi-bold">Layout</span></h4>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#grid-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="grid-body no-border">
            <form class="form-no-horizontal-spacing" id="form-condensed">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>
                  <div class="row form-row">
                    <div class="col-md-5">
                      <input name="form3FirstName" id="form3FirstName" type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-7">
                      <input name="form3LastName" id="form3LastName" type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-5">
                      <select name="form3Gender" id="form3Gender" class="select2 form-control">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                    </div>
                    <div class="col-md-7">
                      <input type="text" placeholder="Date of Birth" class="form-control" id="form3DateOfBirth" name="form3DateOfBirth">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input name="form3Occupation" id="form3Occupation" type="text" class="form-control" placeholder="Occupation">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-8">
                      <div class="radio">
                        <input id="male" type="radio" name="gender" value="male" checked="checked">
                        <label for="male">Male</label>
                        <input id="female" type="radio" name="gender" value="female">
                        <label for="female">Female</label>
                      </div>
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input name="form3Email" id="form3Email" type="text" class="form-control" placeholder="email@address.com">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4>Postal Information</h4>
                  <div class="row form-row">
                    <div class="col-md-12">
                      <input name="form3Address" id="form3Address" type="text" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-6">
                      <input name="form3City" id="form3City" type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-md-6">
                      <input name="form3State" id="form3State" type="text" class="form-control" placeholder="State">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-8">
                      <input name="form3Country" id="form3Country" type="text" class="form-control" placeholder="Country">
                    </div>
                    <div class="col-md-4">
                      <input name="form3PostalCode" id="form3PostalCode" type="text" class="form-control" placeholder="Postal Code">
                    </div>
                  </div>
                  <div class="row form-row">
                    <div class="col-md-4">
                      <input name="form3TeleCode" id="form3TeleCode" type="text" class="form-control" placeholder="+94">
                    </div>
                    <div class="col-md-8">
                      <input name="form3TeleNo" id="form3TeleNo" type="text" class="form-control" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="row small-text">
                    <p class="col-md-12">
                      NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
                    </p>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="pull-left">
                  <div class="checkbox checkbox check-success 	">
                    <input type="checkbox" value="1" id="chkTerms">
                    <label for="chkTerms">I Here by agree on the Term and condition. </label>
                  </div>
                </div>
                <div class="pull-right">
                  <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                  <button class="btn btn-white btn-cons" type="button">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="grid simple transparent">
          <div class="grid-title">
            <h4>Form <span class="semi-bold">Wizard</span></h4>
            <div class="tools">
              <a href="javascript:;" class="collapse"></a>
              <a href="#grid-config" data-toggle="modal" class="config"></a>
              <a href="javascript:;" class="reload"></a>
              <a href="javascript:;" class="remove"></a>
            </div>
          </div>
          <div class="grid-body ">
            <div class="row">
              <form id="commentForm">
                <div id="rootwizard" class="col-md-12">
                  <div class="form-wizard-steps">
                    <ul class="wizard-steps">
                      <li class="" data-target="#step1">
                        <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Basic information</span> </a>
                      </li>
                      <li data-target="#step2" class="">
                        <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Account information</span> </a>
                      </li>
                      <li data-target="#step3" class="">
                        <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">User settings</span> </a>
                      </li>
                      <li data-target="#step4" class="">
                        <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Feedback <br>
                    </span> </a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="tab-content transparent">
                    <div class="tab-pane" id="tab1">
                      <br>
                      <h4 class="semi-bold">Step 1 - <span class="light">Basic Information</span></h4>
                      <br>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input type="text" placeholder="Full Name" class="form-control no-boarder " name="txtFullName" id="txtFullName">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-6">
                          <input type="text" placeholder="First Name" class="form-control no-boarder " name="txtFirstName" id="txtFirstName">
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Last Name" class="form-control no-boarder " name="txtLastName" id="txtLastName">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                      <br>
                      <h4 class="semi-bold">Step 2 - <span class="light">Account Information</span></h4>
                      <br>
                      <div class="row form-row">
                        <div class="col-md-8">
                          <input type="text" placeholder="Country" class="form-control no-boarder " name="txtCountry" id="txtCountry">
                        </div>
                        <div class="col-md-4">
                          <input type="text" placeholder="Postal Code" class="form-control no-boarder " name="txtPostalCode" id="txtPostalCode">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-4">
                          <input type="text" placeholder="+94" class="form-control no-boarder " name="txtPhoneCode" id="txtPhoneCode">
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="Phone Number" class="form-control no-boarder " name="txtPhoneNumber" id="txtPhoneNumber">
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                      <br>
                      <h4 class="semi-bold">Step 3 - <span class="light">User Settings</span></h4>
                      <br>
                    </div>
                    <div class="tab-pane" id="tab4">
                      <br>
                      <h4 class="semi-bold">Step 4 - <span class="light">Feedback</span></h4>
                      <br>
                    </div>
                    <ul class=" wizard wizard-actions">
                      <li class="previous first" style="display:none;"><a href="javascript:;" class="btn">&nbsp;&nbsp;First&nbsp;&nbsp;</a></li>
                      <li class="previous"><a href="javascript:;" class="btn">&nbsp;&nbsp;Previous&nbsp;&nbsp;</a></li>
                      <li class="next last" style="display:none;"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Last&nbsp;&nbsp;</a></li>
                      <li class="next"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Next&nbsp;&nbsp;</a></li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="grid simple form-grid">
          <div class="grid-title no-border">
            <h4>Ace <span class="semi-bold">Concepts</span></h4>
            <div class="tools">
              <a class="collapse" href="javascript:;"></a>
              <a class="config" data-toggle="modal" href="#grid-config"></a>
              <a class="reload" href="javascript:;"></a>
              <a class="remove" href="javascript:;"></a>
            </div>
          </div>
          <div class="grid-body no-border">
            <div class="row-fluid">
              <h3>Login <span class="semi-bold">Here</span></h3>
              <p>Enter your username and password to login</p>
              <br>
              <div class="row form-row">
                <div class="input-append col-md-10 col-sm-10 primary">
                  <input type="text" id="appendedInput" class="form-control" placeholder="someone@example.com">
                  <span class="add-on"><span class="arrow"></span><i class="fa fa-align-justify"></i> </span>
                </div>
              </div>
              <div class="row form-row">
                <div class="input-append col-md-10 col-sm-10 primary">
                  <input type="password" id="appendedInput2" class="form-control" placeholder="your password">
                  <span class="add-on"><span class="arrow"></span><i class="fa fa-lock"></i> </span>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-cons-md"> Login</button>
                <button type="button" class="btn btn-white btn-cons-md">Clear</button>
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
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="assets/js/form_validations.js" type="text/javascript"></script>
@endsection
