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
          <p>YOU ARE HERE
            <p>
        </li>
        <li><a href="#" class="active">Simple Grids</a></li>
      </ul>
      <div class="page-title">
        <i class="icon-custom-left"></i>
        <h3>Typo<span class="semi-bold">graphy</span></h3>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple transparent">
                <div class="grid-title">
                  <h4>General <span class="semi-bold">Typography</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body">
                  <h1 class="light">go explore the <span class="semi-bold">world</span></h1>
                  <h4>small things in life matters the most</h4>
                  <h2>Big Heading <span class="semi-bold">Body</span>, <i>Variations</i> </h2>
                  <h4><span class="semi-bold">Open Me</span>, Light , <span class="semi-bold">Bold</span> , <i>Everything</i></h4>
                  <p>
                    is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking) </p>
                  <p>and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography</p>
                  <div class="blog-bar">
                    <a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-comment"></i></a>
                  </div>
                  <h2 class="all-caps">Capital Big <span class="semi-bold">Heading</span> Body</h2>
                  <h4><span class="semi-bold">OPEN ME</span>, LIGHT , <span class="semi-bold">BOLD</span> , <i>EVERYTHING</i></h4>
                  <p class="all-caps">typographers do not design typefaces, and some type designers do not consider themselves typographers. In modern times, typography has been put into motion—in film, television and online broadcasts—to add emotion to mass communicatio</p>
                  <h3><span class="semi-bold">Numbers</span> looks great! - 1234<span class="semi-bold">56</span>7890</h3>
                  <h3>Let your Creativity Flow <span class="semi-bold">123<sup>$</sup></span></h3>
                  <h3>Numerics <span class="semi-bold">233.<sup><u>00</u></sup></span></h3>
                  <div class="blog-bar">
                    <a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-comment"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple vertical green">
                <div class="grid-title no-border">
                  <h4>Address <span class="semi-bold">Box</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid ">
                    <address class="margin-bottom-20 margin-top-10">
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                    <address>
                                        <strong>Full Name</strong><br>
                                        <a href="mailto:#">first.last@example.com</a>
                                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple transparent">
                <div class="grid-title no-border">
                  <h4><i class="icon-tasks"></i> Simple <span class="semi-bold">Wells</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid ">
                    <br>
                    <div class="well well-large">
                      <h4><span class="semi-bold">OPEN ME</span>, LIGHT , <span class="semi-bold">BOLD</span> , <i>EVERYTHING</i></h4>
                    </div>
                    <div class="well">
                      <h4><span class="semi-bold">OPEN ME</span>, LIGHT , <span class="semi-bold">BOLD</span> , <i>EVERYTHING</i></h4>
                    </div>
                    <div class="well well-small">
                      is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking)
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>General <span class="semi-bold">Heading</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <h1>h1. Heading 1</h1>
                    <h2>h2. Heading 2</h2>
                    <h3>h3. Heading 3</h3>
                    <h4>h4. Heading 4</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Unordered <span class="semi-bold">List</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor sem</li>
                        <li>Ac tristique libero volutpat at</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Ordered <span class="semi-bold">List</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <ol class="bold">
                    <li><span class="normal">Lorem ipsum dolor sit amet</span></li>
                    <li><span class="normal">Consectetur adipiscing elit</span></li>
                    <li><span class="normal">Integer molestie lorem at massa</span></li>
                    <li><span class="normal">Facilisis in pretium nisl aliquet</span></li>
                    <li><span class="normal">Nulla volutpat aliquam velit</span></li>
                    <li><span class="normal">Faucibus porta lacus fringilla vel</span></li>
                    <li><span class="normal">Aenean sit amet erat nunc</span></li>
                    <li><span class="normal">Eget porttitor lorem</span></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Font <span class="semi-bold">Colors</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <p class="muted margin-top-10">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
                    <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam.</p>
                    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4><i class="icon-quote-left"></i> Blockquote <span class="semi-bold">Options</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <div class="row-fluid">
                    <blockquote class="margin-top-20">
                      <p>It is during our darkest moments that we must focus to see the light.</p>
                      <small>Aristotle Onassis </small>
                    </blockquote>
                    <blockquote class="pull-right">
                      <p>The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.</p>
                      <small>Helen Keller </small>
                    </blockquote>
                    <div class="clearfix"></div>
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