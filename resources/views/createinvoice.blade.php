@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
      <h1>Create Invoice</h1>
      <h2>Hospital Management System</h2>
  </div>

  <section class="invoice" style="padding:20px;">
    <form class="shadow-lg" action="index.html" method="post" style="padding:30px;">
      <div class="row">
        <div class="col-md-3">
          <h3>Invoice # 1</h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="btn-group">
          <a href="#" class="btn btn-primary" style="margin:5px;">
            <i class="fa fa-newspaper-o"></i>
            Invoices
          </a>
          <a href="#" class="btn btn-primary" style="margin:5px;">
            <i class="fa fa-truck"></i>
            Whole Sale
          </a>
        </div>
      </div>
      <hr>
      <div class="row">
          <div class="col">
            <label for="Search">
              <i class="fa fa-barcode"></i>
              Search
            </label>
            <input
              type="search"
              name=""
              value=""
              placeholder="Search"
              class="form-control"
              >
              <small>Search through product name(e.g.Flagyl)</small>
          </div>
          <div class="col">
            <label for="addAccount">
              <i class="fa fa-truck"></i>
              Add Account
            </label>
            <select class="form-control" name="">
              <option value="">Select Account</option>
              <option value="medixDemo">Name : Medix Demo</option>
            </select>
            <small>Make sure to select right customer whom your are suppling, to maintian accounts.</small>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Weight</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Discount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Panadol</td>
                  <td>20 kg</td>
                  <td>30.00</td>
                  <td>
                    <input type="number" name="" value="1">
                  </td>
                  <td>
                    <input type="number" name="" value="0">
                  </td>
                  <td style="cursor:pointer;">
                    <i style="color:skyblue;" class="fa fa-trash margin"></i>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
        <hr>
        <div class="col-md-6">
          <div class="row total-grid-values">
            <div class="col-md-4 col-sm-12 col-xs-12">
                Gross Total :
                <input type="number" name="" value="" class="form-control">
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                Tax Total :
                <input type="number" name="" value="" class="form-control">
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                Discount :
                <input type="number" name="" value="" class="form-control">
            </div>
          </div>
          <hr>
          <div class="row total-grid-values" style="padding:10px;">
              <div class="col-md-4">
                Total Amount :  103.00
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                Bill Paid (VND) :
                <input type="number" name="" value="100.3" class="form-control">
              </div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                Cash Recieved :
                <input type="number" name="" value="0" class="form-control">
              </div>
          </div>
          <hr>
          <div class="btn-group">
            <a href="#" class="btn btn-primary" style="margin:5px;">
              <i class="fa fa-newspaper-o"></i>
              New Invoice
            </a>
            <a href="#" class="btn btn-warning" style="margin:5px;">
              <i class="fa fa-mail-reply"></i>
              Return Items
            </a>
            <a href="#" class="btn btn-danger" style="margin:5px;">
              <i class="fa fa-print"></i>
              Save & Print
            </a>
          </div>
        </div>
      </div>
      <hr>
    </form>
  </section>
</div>
@endsection
