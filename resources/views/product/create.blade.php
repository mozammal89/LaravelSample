@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/products.png')}}"> Product</div>
                <h3 align="center">Add New Product</h3>
               		<div class="content-box-large">
			  				<div class="panel-heading">				           				          
					            <div class="panel-options">
					              <a href="/product" class=" btn btn-warning ">Product List </a>
					            </div>
					        </div>
                <div class="card-body">
                    <div style="margin-top: 15px" id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Product Name</label>
                    </div>
                    <div  id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Color</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">           
                        <label style="margin-left:15px" for="defaultForm-email">Capacity/Quantity</label>
                    </div>
                    <div style="margin-top: 10px;" id="inputh" class="md-form col-sm-6 hp">                   
                        <!-- <input type="text" id="defaultForm-email" class="form-control"> -->
                        <!-- <label style="margin-left:15px" for="defaultForm-email">Unit</label> -->
                        <select class="form-control" id="inlineFormCustomSelect">
        					<option selected>Select Unit/Size</option>
					        <option value="1">Liter</option>
					        <option value="1">Kg</option>
					        <option value="2">ml</option>
					        <option value="3">pcs</option>
					        <option value="3">Small</option>
					        <option value="3">Big</option>
					        <option value="3">Medium</option>
      					</select>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">DP Price</label>
                    </div>
                    <div style="" id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control"> 
                        <label style="margin-left:15px" for="defaultForm-email">Cost Price</label>         
                    </div>
                    <div class="text-center col-sm-12 hp">
                        <button class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>							  
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection