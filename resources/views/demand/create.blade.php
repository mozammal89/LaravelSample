@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <div class="md-form col-sm-6">                   
                    <input type="text" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">Dealer/Customer Name</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-pass">Dealer Code</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="date" id="defaultForm-pass" class="form-control">                   
                </div>
                <div class="md-form col-sm-5">                   
                    <input type="text" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">Address</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-pass">Mobile</label>
                </div>
                <div class="md-form col-sm-4">                   
                    <input type="text" id="defaultForm-pass" class="form-control"> 
                    <label for="defaultForm-email">Sales Officer</label>                  
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">District</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="email" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-pass">Sales Area</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-email">Sales Zones</label>                   
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-email">ID No</label>                  
                </div>
                <div class="md-form col-sm-6">                   
                    <!-- <input type="text" id="defaultForm-pass" class="form-control">
                                     -->
                                     <label style="position: inherit;" for="defaultForm-email">Type Of Payment :  </label>
                                     <div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										  <label class="form-check-label" for="inlineRadio1">KG</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										  <label class="form-check-label" for="inlineRadio2">Piece</label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										  <label class="form-check-label" for="inlineRadio3">Meter</label>
										</div>
                                        <div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										  <label class="form-check-label" for="inlineRadio3">ABC</label>
										</div>
                                        <div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3">
										  <label class="form-check-label" for="inlineRadio3">ASD</label>
										</div>

                </div>
                <div class="md-form col-sm-6">                   
                    <input type="text" id="defaultForm-pass" class="form-control"> 
                    <label for="defaultForm-email">Bank name/Address</label>                   
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">TT Check No</label>
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="date" id="defaultForm-pass" class="form-control">
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-email">Amount</label>                   
                </div>
                <div class="md-form col-sm-3">                   
                    <input type="text" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-email">Running Cradit Balance</label>                  
                </div>
                <div class="text-center">
                    <button class="btn btn-primary waves-effect waves-light">next</button>
                </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection