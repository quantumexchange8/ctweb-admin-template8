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
        <li><a href="#" class="active">Support</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Support</h3>
        <div class="pull-right actions">
          <button class="btn btn-primary btn-cons" type="button" id="btn-new-ticket">New Ticket</button>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple transparent" id="new-ticket-wrapper" style="display:none">
            <div class="grid-title no-border">
              <h4 class="semi-bold">How can we help you?</h4>
            </div>
            <div class="grid-body">
              <form class="" id="new-ticket-form">
                <div class="row form-row">
                  <div class="col-md-8">
                    <input type="text" placeholder="Subject" class="form-control" id="txtSubject" name="txtSubject">
                  </div>
                  <div class="col-md-4">
                    <input type="text" placeholder="Department" class="form-control" id="txtDept" name="txtDept">
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-12">
                    <textarea rows="8" class="form-control" id="txtMessage" placeholder="Please detail your issue or question"></textarea>
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-12 margin-top-10">
                    <div class="pull-left">
                      <div class="checkbox checkbox check-success"> &nbsp;
                        <input type="checkbox" id="checkbox1" value="1">
                        <label for="checkbox1">I Here by agree on the Term and condition. </label>
                      </div>
                    </div>
                    <div class="pull-right">
                      <button class="btn btn-cons" type="button" id="btn-close-ticket">Close</button>
                      <button class="btn btn-primary btn-cons" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <h4>Open <span class="semi-bold">Tickets</span></h4>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Too many down times</h4>
              <p><span class="text-success bold">Ticket #456</span> - Created on 10/29/13 at 06:33 - Last reply About 1 Month ago by alex&nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="view" href="javascript:;"><i class="fa fa-search"></i></a> <a class="remove" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar_small.jpg" src="assets/img/profiles/avatar_small.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis
                    <br> and lately there was a lot of down time. One that caught my eye was this
                    <br> Incident report
                    <br>
                    <br> New Critical Incident started at 13:10 MST on Monday, October 28
                    <br> Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.
                    <br>
                    <br> Incident duration was 41 minutes.
                    <br>
                    <br> The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation
                    <br>
                    <br> Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,
                      <br>
                      <br> Thank you for reaching us, We are looking into this issue and will update you.
                      <br>
                      <br> Alex
                      <br>
                      <hr>
                      <p class="small-text">Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Post a reply</label>
                      <div class="controls">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Sub domain to point to a different droplet</h4>
              <p><span class="text-success bold">Ticket #569</span> - Created on 11/02/13 at 06:33 - Last reply About 1 Month ago by William&nbsp;&nbsp;</p>
              <div class="actions"> <a class="view" href="javascript:;"><i class="fa fa-search"></i></a> <a class="remove" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar_small.jpg" src="assets/img/profiles/avatar_small.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis
                    <br> and lately there was a lot of down time. One that caught my eye was this
                    <br> Incident report
                    <br>
                    <br> New Critical Incident started at 13:10 MST on Monday, October 28
                    <br> Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.
                    <br>
                    <br> Incident duration was 41 minutes.
                    <br>
                    <br> The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation
                    <br>
                    <br> Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,
                      <br>
                      <br> Thank you for reaching us, We are looking into this issue and will update you.
                      <br>
                      <br> Alex
                      <br>
                      <hr>
                      <p class="small-text">Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Post a reply</label>
                      <div class="controls">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4>Closed <span class="semi-bold">Tickets</span></h4>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Too many down times</h4>
              <p><span class="text-success bold">Ticket #456</span> - Created on 10/29/13 at 06:33 - Last reply About 1 Month ago by alex&nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis
                    <br> and lately there was a lot of down time. One that caught my eye was this
                    <br> Incident report
                    <br>
                    <br> New Critical Incident started at 13:10 MST on Monday, October 28
                    <br> Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.
                    <br>
                    <br> Incident duration was 41 minutes.
                    <br>
                    <br> The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation
                    <br>
                    <br> Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,
                      <br>
                      <br> Thank you for reaching us, We are looking into this issue and will update you.
                      <br>
                      <br> Alex
                      <br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">Domain Propergation</h4>
              <p><span class="text-success bold">Ticket #885</span> - Created on 10/19/13 at 06:33 - Last reply About 1 Month ago by support&nbsp;&nbsp;<span class="label label-important">ALERT</span></p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis
                    <br> and lately there was a lot of down time. One that caught my eye was this
                    <br> Incident report
                    <br>
                    <br> New Critical Incident started at 13:10 MST on Monday, October 28
                    <br> Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.
                    <br>
                    <br> Incident duration was 41 minutes.
                    <br>
                    <br> The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation
                    <br>
                    <br> Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,
                      <br>
                      <br> Thank you for reaching us, We are looking into this issue and will update you.
                      <br>
                      <br> Alex
                      <br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple no-border ">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold">How to access via Putty</h4>
              <p><span class="text-success bold">Ticket #152</span> - Created on 10/09/13 at 06:33 - Last reply About 1 Month ago by support&nbsp;&nbsp;</p>
              <div class="actions"> <a class="expand" href="javascript:;"><i class="fa fa-search"></i></a> <a class="view" href="javascript:;"><i class="fa fa-times"></i></a> </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                <div class="user-profile-pic-wrapper">
                  <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                </div>
                <div class="info-wrapper">
                  <div class="info"> Hi I have installed agent to monitor the usage of the droplet done via Anturis
                    <br> and lately there was a lot of down time. One that caught my eye was this
                    <br> Incident report
                    <br>
                    <br> New Critical Incident started at 13:10 MST on Monday, October 28
                    <br> Critical Incident started at 13:10 MST on Monday, October 28 with ace has ended at 13:51 MST on Monday, October 28.
                    <br>
                    <br> Incident duration was 41 minutes.
                    <br>
                    <br> The server did not respond for 41 minutes.As you see 41 minutes is a big deal for us as we are going to lose alot of revenue we need you guys to check if these records are correct and if so why and will this happen again? or do we need to purchase some sort of cluster ? this is a very critical situation
                    <br>
                    <br> Waiting for your reply </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="info"> Hi,
                      <br>
                      <br> Thank you for reaching us, We are looking into this issue and will update you.
                      <br>
                      <br> Alex
                      <br>
                      <hr>
                      <p>Posted on 10/29/13 at 07:21</p>
                    </div>
                    <div class="form-group">
                      <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>
                      <div class="input-with-icon  right"> <i class=""></i>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
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
<script src="assets/js/support_ticket.js" type="text/javascript"></script>
@endsection