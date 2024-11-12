@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Buttons</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Buttons - <span class="semi-bold">Variations</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Basic <span class="semi-bold">Buttons</span></h4>
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
                  <h3>Button <span class="semi-bold">Colors</span></h3>
                  <p>Basic buttons are traditional buttons with borders and background. Use any of the available button classes to quickly create a styled button. Compatible for bootstrap version 2 and 3.</p>
                  <br>
                  <!-- Standard gray button with gradient -->
                  <button type="button" class="btn btn-default btn-cons">Default</button>
                  <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                  <button type="button" class="btn btn-primary btn-cons">Primary</button>
                  <!-- Indicates a successful or positive action -->
                  <button type="button" class="btn btn-success btn-cons">Success</button>
                  <!-- Contextual button for informational alert messages -->
                  <button type="button" class="btn btn-info btn-cons">Info</button>
                  <!-- Indicates caution should be taken with this action -->
                  <button type="button" class="btn btn-warning btn-cons">Warning</button>
                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-danger btn-cons">Danger</button>
                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-white btn-cons">White</button>
                  <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                  <button type="button" class="btn btn-link btn-cons">Link</button>
                </div>
                <div class="col-md-4">
                  <h3>Size <span class="semi-bold">Options</span></h3>
                  <p>Fancy larger or smaller buttons? Add <code>.btn-large</code> <code>.btn-small</code> or <code>.btn-mini</code> for additional sizes.</p>
                  <br>
                  <p>
                    <button type="button" class="btn btn-primary btn-lg btn-large">Large button</button>
                    <button type="button" class="btn btn-white btn-lg btn-large">Large button</button>
                  </p>
                  <p>
                    <button type="button" class="btn btn-primary">Default button</button>
                    <button type="button" class="btn btn-white">Default button</button>
                  </p>
                  <p>
                    <button type="button" class="btn btn-primary btn-sm btn-small">Small button</button>
                    <button type="button" class="btn btn-white btn-sm btn-small">Small button</button>
                  </p>
                  <p>
                    <button type="button" class="btn btn-primary btn-xs btn-mini">Mini button</button>
                    <button type="button" class="btn btn-white btn-xs btn-mini">Mini button</button>
                  </p>
                </div>
                <div class="col-md-4">
                  <h3>Button <span class="semi-bold">Blocks</span></h3>
                  <p>Create block level buttons,those that span the full width of a parent by adding <code>.btn-block</code></p>
                  <br>
                  <button class="btn btn-block btn-success" type="button">Button Block</button>
                  <button class="btn btn-block btn-white" type="button">Bored Button Block</button>
                  <button class="btn btn-block btn-primary" type="button"><i class="fa fa-cloud-download"></i>&nbsp;&nbsp;Iconic Button Block</button>
                  <button class="btn btn-block btn-white" type="button"><i class="fa fa-cloud-download"></i>&nbsp;&nbsp;Iconic Button Block</button>
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
              <h4>Button <span class="semi-bold">Options</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Button <span class="semi-bold">Disable</span></h3>
                  <p>Customizable disabled buttons & links that works with both disable attribute and class. These are compatible for all color variations</p>
                  <br>
                  <p> <a href="#" class="btn btn-primary disabled">Primary link</a> <a href="#" class="btn disabled">Link</a> </p>
                  <p>
                    <button type="button" class="btn  btn-primary disabled" disabled="disabled">Primary button</button>
                    <button type="button" class="btn " disabled>Button</button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Button <span class="semi-bold">Options</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Tag <span class="semi-bold">Options</span></h3>
                  <p>Use <code>.btn</code> to create the same output of all for different types of HTML tags </p>
                  <br>
                  <a class="btn" href="">Link</a>
                  <button class="btn" type="submit">Button</button>
                  <input class="btn" type="button" value="Input">
                  <input class="btn" type="submit" value="Submit">
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
              <h4>Button <span class="semi-bold">Dropdowns</span></h4>
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
                  <h3>Basic <span class="semi-bold">Dropdowns</span></h3>
                  <p>We've simplified our dropdown buttons by getting rid of the dedicated dropdown associated with them, this looks more clean and also available in all different colors</p>
                  <br>
                  <div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Default <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-primary dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Primary <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Success <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-info dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Info <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-warning dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Warning <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-danger dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> Danger <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group"> <a class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> White <span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>With <span class="semi-bold">Speration</span></h3>
                  <p>Want to use a different action for each button? this method allows to have two different actions for each button for the drop down and the button.</p>
                  <br>
                  <div class="row-fluid">
                    <div class="btn-group btn-demo-space">
                      <button class="btn btn-demo-space">Action</button>
                      <button class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ">
                      <button class="btn btn-white btn-demo-space"> Action</button>
                      <button class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="btn-group">
                      <button class="btn btn-demo-space">Action</button>
                      <button class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-white btn-demo-space"><i class="icon-cog"></i> Action</button>
                      <button class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h3>Size <span class="semi-bold">Options</span></h3>
                  <p>Like the tradition bootstrap size options theses buttons type also are available on all sizes and they are customized to fit the correct dimension</p>
                  <br>
                  <div class="btn-group">
                    <button class="btn btn-large btn-success btn-demo-space">Action</button>
                    <button class="btn btn-large btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-large btn-white btn-demo-space">Action</button>
                    <button class="btn btn-large btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <br>
                  <div class="btn-group">
                    <button class="btn btn-success btn-demo-space">Action</button>
                    <button class="btn btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-white btn-demo-space">Action</button>
                    <button class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <br>
                  <div class="btn-group">
                    <button class="btn btn-small btn-success btn-demo-space">Action</button>
                    <button class="btn btn-small btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-small btn-white btn-demo-space">Action</button>
                    <button class="btn btn-small btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <br>
                  <div class="btn-group">
                    <button class="btn btn-mini btn-success btn-demo-space">Action</button>
                    <button class="btn btn-mini btn-success dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-mini btn-white btn-demo-space">Action</button>
                    <button class="btn btn-mini btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown"> <span class="caret"></span> </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Grouped <span class="semi-bold">Buttons</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Single <span class="semi-bold">Button Group</span></h3>
                  <p>Button groups are great when you need to display a group of actions in a bar. These build off the button styles and work perfectly with the grid. They come in different toggle options like <code>switch</code> or <code>radio</code></p>
                  <br>
                  <div class="btn-group" data-toggle="buttons-radio">
                    <button class="btn"><i class="fa fa-align-left"></i></button>
                    <button class="btn active btn-primary"><i class="fa fa-align-justify"></i></button>
                    <button class="btn"><i class="fa fa-align-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Grouped <span class="semi-bold">Buttons</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Multiple <span class="semi-bold">Button Group</span></h3>
                  <p>A button bar is a group of button groups, perfect for situations where you want groups of actions that are all related to a similar element or page</p>
                  <br>
                  <div class="btn-group">
                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-white">1</button>
                    <button class="btn btn-white  active">2</button>
                    <button class="btn btn-white">3</button>
                    <button class="btn btn-white">4</button>
                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Grouped <span class="semi-bold">Buttons</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-12">
                  <h3>Vertical <span class="semi-bold">Button Group</span></h3>
                  <p>Want it in a different perspective? its customized to work both vertical and horizontal ways</p>
                  <br>
                  <div class="btn-group btn-group-vertical" data-toggle="buttons-radio">
                    <button class="btn"><i class="fa fa-align-left"></i></button>
                    <button class="btn active btn-primary"><i class="fa fa-align-justify"></i></button>
                    <button class="btn"><i class="fa fa-align-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Iconic <span class="semi-bold">Buttons</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <div class="row">
                <div class="col-md-6">
                  <h3>Common <span class="semi-bold">Icon Buttons</span></h3>
                  <p>Basic buttons are traditional buttons with borders and background with an extra component like an icon. You can place it either on the left or the right which ever you want with different color options</p>
                  <br>
                  <button type="button" class="btn btn-primary btn-cons"><i class="fa fa-check"></i>&nbsp;Submit</button>
                  <!-- Indicates a successful or positive action -->
                  <button type="button" class="btn btn-success btn-cons"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;<span class="bold">Upload</span></button>
                  <!-- Contextual button for informational alert messages -->
                  <button type="button" class="btn btn-info btn-cons"><i class="fa fa-paste"></i> Edit</button>
                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-danger btn-cons"><i class="fa fa-warning-sign"></i> <span class="bold">Warning</span></button>
                  <!-- Indicates a dangerous or potentially negative action -->
                  <button type="button" class="btn btn-white btn-cons"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Map</button>
                </div>
                <div class="col-md-6">
                  <h3>Social <span class="semi-bold">Icon Buttons</span></h3>
                  <p>Fancy social icons? here are some of pre-made icons and buttons done by use which can come in handy</p>
                  <br>
                  <p> <a href="#" class="btn-social"><i class="fa fa-facebook"></i></a> <a href="#" class="btn-social"><i class="fa fa-twitter"></i> </a> <a href="#" class="btn-social"><i class="fa fa-dribbble"></i></a> <a href="#" class="btn-social"><i class="fa fa-pinterest-square"></i></a> <a href="#" class="btn-social"><i class="fa fa-tumblr"></i> </a> <a href="#" class="btn-social"><i class="fa fa-linkedin-sign"></i> </a> </p>
                  <br>
                  <div class="row">
                    <button type="button" class="btn btn-block btn-info"> <span class="pull-left"><i class="fa fa-facebook"></i></span> <span class="bold">Login with Facebook</span></button>
                    <button type="button" class="btn btn-block btn-success"> <span class="pull-left"><i class="fa fa-twitter"></i></span> <span class="bold">Login with Twitter</span></button>
                    <button type="button" class="btn btn-block btn-danger"> <span class="pull-left"><i class="fa fa-google-plus"></i></span> <span class="bold">Login with Google+</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Button <span class="semi-bold">Toggles</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <h3>Toggle <span class="semi-bold">Variations</span></h3>
              <p>Button groups can act as a radio or a switch or even a single toggle. Below are some examples click to see what happens</p>
              <br>
              <p>
                <button type="button" class="btn btn-primary" data-toggle="button">Single Toggle</button>
              </p>
              <div class="btn-group m-b-10" data-toggle="buttons-checkbox">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary active">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
              <br>
              <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" class="btn btn-primary active">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE -->
  </div>
@endsection