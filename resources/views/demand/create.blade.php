@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Dealer/Customer Name</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Dealer Code</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="date" id="defaultForm-pass" class="form-control">                   
                    </div>
                    <div  id="inputh" class="md-form col-sm-5 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Address</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Mobile</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-4 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control"> 
                        <label style="margin-left:15px" for="defaultForm-email">Sales Officer</label>                  
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">District</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="email" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Sales Area</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Sales Zones</label>                   
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">ID No</label>                  
                    </div>  
                    <div id="inputh" class="col-sm-7 hp">
                    <div  class="form-group">
                    <label class="form-check-label" for="inlineRadio1">Select Fayment Type :</label> 								    
						<div style="margin-top:15px" class="form-check form-check-inline">
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
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio4" value="option1">
							<label class="form-check-label" for="inlineRadio4">KG</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio5" value="option2">
							<label class="form-check-label" for="inlineRadio5">Piece</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio6" value="option3">
							<label class="form-check-label" for="inlineRadio6">abc</label>
						</div>
					</div>
                    </div>
                    <div id="inputh" class="md-form col-sm-5 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Bank name/Address</label>                   
                    </div>  
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">TT Check No</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="date" id="defaultForm-pass" class="form-control">
                    </div>
                    <div id="inputh" class="md-form col-sm-3 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Amount</label>                   
                    </div>
                    <div id="inputh" class="md-form col-sm-3 ">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Running Cradit Balance</label>                  
                    </div>
                    <div class="text-center col-sm-12 hp">
                        <button class="btn btn-primary waves-effect waves-light">Save</button>
                    </div> 
								  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection