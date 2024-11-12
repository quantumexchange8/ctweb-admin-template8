@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body">Widget settings form goes here</div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tables</a>
        </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Basic - <span class="semi-bold">Tables</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple ">
            <div class="grid-title no-border">
              <h4>Table  <span class="semi-bold">Styles</span></h4>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body no-border">
              <h3>Basic  <span class="semi-bold">Table</span></h3>
              <table class="table no-more-tables">
                <thead>
                  <tr>
                    <th style="width:1%">
                      <div class="checkbox check-default">
                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                        <label for="checkbox10"></label>
                      </div>
                    </th>
                    <th style="width:9%">Project Name</th>
                    <th style="width:22%">Description</th>
                    <th style="width:6%">Price</th>
                    <th style="width:10%">Progress</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="v-align-middle">
                      <div class="checkbox check-default">
                        <input id="checkbox11" type="checkbox" value="1">
                        <label for="checkbox11"></label>
                      </div>
                    </td>
                    <td class="v-align-middle">Early Bird</td>
                    <td class="v-align-middle"><span class="muted">Redesign project template</span>
                    </td>
                    <td><span class="muted">$4,500</span>
                    </td>
                    <td class="v-align-middle">
                      <div class="progress">
                        <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox check-default">
                        <input id="checkbox12" type="checkbox" value="1">
                        <label for="checkbox12"></label>
                      </div>
                    </td>
                    <td>
                      <div class="inline">Angry Birds</div> <span class="label label-important">ALERT!</span>
                    </td>
                    <td><span class="muted">Something goes here</span>
                    </td>
                    <td><span class="muted">$9,000</span>
                    </td>
                    <td>
                      <div class="progress">
                        <div data-percentage="10%" class="progress-bar progress-bar-danger animate-progress-bar"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox check-default">
                        <input id="checkbox13" type="checkbox" value="1">
                        <label for="checkbox13"></label>
                      </div>
                    </td>
                    <td>PHP Login page</td>
                    <td class="v-align-middle"><span class="muted">A project in business and science is typically defined</span>
                    </td>
                    <td><span class="muted">$5,400</span>
                    </td>
                    <td>
                      <div class="progress">
                        <div data-percentage="65%" class="progress-bar progress-bar-info animate-progress-bar"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox check-default">
                        <input id="checkbox14" type="checkbox" value="1">
                        <label for="checkbox14"></label>
                      </div>
                    </td>
                    <td>Zombies</td>
                    <td class="v-align-middle"><span class="muted">frequently involving research or design</span>
                    </td>
                    <td><span class="muted">$6,000</span>
                    </td>
                    <td>
                      <div class="progress ">
                        <div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple ">
                <div class="grid-title no-border">
                  <h4>Table <span class="semi-bold">Styles</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <h3>Stripped  <span class="semi-bold">Table</span></h3>
                  <p>They (allegedly) aid usability in reading tabular data by offering the user a coloured means of separating and differentiating rows from one another. Simply add the class<code>.table-striped</code>
                  </p>
                  <br>
                  <table class="table table-striped table-flip-scroll cf">
                    <thead class="cf">
                      <tr>
                        <th>
                          <div class="checkbox check-default ">
                            <input id="checkbox1" type="checkbox" value="1" class="checkall">
                            <label for="checkbox1"></label>
                          </div>
                        </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox2" type="checkbox" value="1">
                            <label for="checkbox2"></label>
                          </div>
                        </td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td> <span class="label label-important">ALERT!</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox3" type="checkbox" value="1">
                            <label for="checkbox3"></label>
                          </div>
                        </td>
                        <td>
                          <div class="inline">Jacob </div><span class="label label-important">ALERT!</span>
                        </td>
                        <td>Thornton</td>
                        <td><span class="label label-success">WORK</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox4" type="checkbox" value="1">
                            <label for="checkbox4"></label>
                          </div>
                        </td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td><span class="label label-important">ALERT!</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <h3>Hover  <span class="semi-bold">Table</span></h3>
                  <p>Hover tables is addition option that allows you to see what row you selected, this helps to see all the columns in that row. Use the following class to toggle this option
                    <code>.table-hover</code>
                  </p>
                  <br>
                  <table class="table table-hover no-more-tables">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple ">
                <div class="grid-title no-border">
                  <h4>Table <span class="semi-bold">Styles</span></h4>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <h3>Bordered  <span class="semi-bold">Table</span></h3>
                  <p>
                    Old is gold, here is old fashion bordered table, we tweaked it a bit so that the headings looks more prominent. As shown in all of the examples these tables are made to handle extra elements like small buttons, labels and even charts in it. By using the class <code>.table-bordered</code>. You can mix all the above mention classes to bring a unique table design
                  </p>
                  <br>
                  <table class="table table-bordered no-more-tables">
                    <thead>
                      <tr>
                        <th style="width:1%">
                          <div class="checkbox check-default">
                            <input id="checkbox20" type="checkbox" value="1" class="checkall">
                            <label for="checkbox20"></label>
                          </div>
                        </th>
                        <th class="text-center" style="width:12%">Month</th>
                        <th class="text-center" style="width:22%">Sales</th>
                        <th class="text-center" style="width:6%">Graph</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox21" type="checkbox" value="1">
                            <label for="checkbox21"></label>
                          </div>
                        </td>
                        <td class="text-center">January</td>
                        <td class="text-right">$ 50,000.00</td>
                        <td class="text-center">
                          <div class="customer-sparkline" data-sparkline-color="#0aa699" data-sparkline-type="bar">
                            <!-- 4,5,6,3,6,4,1 -->
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox22" type="checkbox" value="1">
                            <label for="checkbox22"></label>
                          </div>
                        </td>
                        <td class="text-center">February</td>
                        <td class="text-right">$ 10,000.00</td>
                        <td class="text-center">
                          <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#f35958">
                            <!-- 1,5,6,1,2,7,8 -->
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox23" type="checkbox" value="1">
                            <label for="checkbox23"></label>
                          </div>
                        </td>
                        <td class="text-center">March</td>
                        <td class="text-right">$ 85,000.00</td>
                        <td class="text-center">
                          <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0090d9">
                            <!-- 8,4,5,6,9,4,2 -->
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox24" type="checkbox" value="1">
                            <label for="checkbox24"></label>
                          </div>
                        </td>
                        <td class="text-center">April</td>
                        <td class="text-right">$ 56,000.00</td>
                        <td class="text-center">
                          <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#fdd01c">
                            <!-- 5,6,8,2,3,4,5 -->
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="checkbox check-default">
                            <input id="checkbox25" type="checkbox" value="1">
                            <label for="checkbox25"></label>
                          </div>
                        </td>
                        <td class="text-center">May</td>
                        <td class="text-right">$ 98,000.00</td>
                        <td class="text-center">
                          <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0aa699">
                            <!-- 1,5,4,6,3,5,2 -->
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE -->
  </div>
@endsection
@section('scripts')
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script>
//TODO AT TO API
$('table .checkbox input').click(function()
{
  if ($(this).is(':checked'))
  {
    $(this).parent().parent().parent().toggleClass('row_selected');
  }
  else
  {
    $(this).parent().parent().parent().toggleClass('row_selected');
  }
});
// Demo charts - not required 
$('.customer-sparkline').each(function()
{
  $(this).sparkline('html',
  {
    type: $(this).attr("data-sparkline-type"),
    barColor: $(this).attr("data-sparkline-color"),
    enableTagOptions: true
  });
});
</script>
@endsection