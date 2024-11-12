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
      <div class="row">
        <div class="col-md-11">
          <div class="grid simple">
            <div class="grid-body no-border invoice-body">
              <br>
              <div class="pull-left"> <img src="assets/img/invoicelogo.png" data-src="assets/img/invoicelogo.png" data-src-retina="assets/img/invoicelogo2x.png" width="222" height="31" class="invoice-logo" alt="">
                <address>
          <strong>Twitter, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
              </div>
              <div class="pull-right">
                <h2>invoice</h2>
              </div>
              <div class="clearfix"></div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col-md-9">
                  <h4 class="semi-bold">Daren forthway</h4>
                  <address>
            <strong>Webarch Holdings.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
                </div>
                <div class="col-md-3">
                  <br>
                  <div>
                    <div class="pull-left"> INVOICE NO : </div>
                    <div class="pull-right"> 000985 </div>
                    <div class="clearfix"></div>
                  </div>
                  <div>
                    <div class="pull-left"> INVOICE DATE : </div>
                    <div class="pull-right"> 15/02/13 </div>
                    <div class="clearfix"></div>
                  </div>
                  <br>
                  <div class="well well-small green">
                    <div class="pull-left"> Total Due : </div>
                    <div class="pull-right"> 84,000 USD </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th style="width:60px" class="unseen text-center">QTY</th>
                    <th class="text-left">DESCRIPTION</th>
                    <th style="width:140px" class="text-right">UNIT PRICE</th>
                    <th style="width:90px" class="text-right">TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="unseen text-center">1</td>
                    <td>iPhone 5 32GB White &amp; Silver (GSM) Unlocked</td>
                    <td class="text-right">$749.00</td>
                    <td class="text-right">$749.00</td>
                  </tr>
                  <tr>
                    <td class="unseen text-center">2</td>
                    <td>iPad mini with Wi-Fi 32GB - White &amp; Silver</td>
                    <td class="text-right">$429.00</td>
                    <td class="text-right">$858.00</td>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="4">
                      <h4 class="semi-bold">terms and conditions</h4>
                      <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                      <h5 class="text-right semi-bold">Thank you for your business</h5></td>
                    <td class="text-right"><strong>Subtotal</strong></td>
                    <td class="text-right">$1607.00</td>
                  </tr>
                  <tr>
                    <td class="text-right no-border"><strong>Shipping</strong></td>
                    <td class="text-right">$0.00</td>
                  </tr>
                  <tr>
                    <td class="text-right no-border"><strong>VAT Included in Total</strong></td>
                    <td class="text-right">$0.00</td>
                  </tr>
                  <tr>
                    <td class="text-right no-border">
                      <div class="well well-small green"><strong>Total</strong></div>
                    </td>
                    <td class="text-right"><strong>$1607.00</strong></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <br>
              <h5 class="text-right text-black">Designer identity</h5>
              <h5 class="text-right semi-bold text-black">John Smith</h5>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="invoice-button-action-set">
            <p>
              <button class="btn btn-primary" type="button"><i class="fa fa-print"></i></button>
            </p>
            <p>
              <button class="btn " type="button"><i class="fa fa-cloud-download"></i></button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection



