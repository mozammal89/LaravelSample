@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/demand.png')}}"> Demand Letter</div>
                <div class="row">
                    <div class=col-md-10>
                    <h4>Add New Dealer</h4>                   
                </div>
                <div class=col-md-2>
                    <a href="/demand" align="right" class=" btn btn-warning">demand List </a>
                </div>
                </div>
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
							<label class="form-check-label" for="inlineRadio1">TT</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">DD</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3" value="option3">
							<label class="form-check-label" for="inlineRadio3">Online</label>
						</div>
                        <div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio4" value="option1">
							<label class="form-check-label" for="inlineRadio4">Check</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio5" value="option2">
							<label class="form-check-label" for="inlineRadio5">Cash</label>
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
                
                    <label></label>
                    <div class="hr">
		            </div>

                    <div class="row ">
                        
                        <div class="col-sm-2">
                            <p align="left" style="font-weight: bold; font-size: 16px;margin-bottom: 0px;padding-bottom: 0px;">Product Code</p>
                        </div>
                        <div class="col-sm-2">      
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Product Name</p>   
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Color</p>
                        </div>
                        <div class="col-sm-1"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Order</p>
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">U.Price</p>
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;margin-left: 8px;">Total</p>
                        </div>
                        <div class="col-sm-1">
                            <button align="left" style="position: absolute;height: 30px"  class="btn btn-success add_form_field"><span style="font-size:16px; font-weight:bold;"><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                    </div>
                    <div class="hr" style="width: 100%;background-color:black;height:3px;margin-bottom:15px;">
                    </div>
                    <div id="goods_container">	
                        <div class=" container1">  
                             
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Product Code</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Product Name</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Color</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-1 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Order</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">U.Price</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Total Amount</label>                  
                            </div>
                            <div class="col-sm-1">                            
                            </div>	
                        </div>
                    </div>
                    <div class="text-center col-sm-12 hp">
                        <button class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>							  
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		// add dynamic infut field
    var max_fields      = 10;
    var wrapper         = $(".container1");
    var add_button      = $(".add_form_field");      
    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;          
            $(wrapper).append('<div class=" container1">                                                                                                                 <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Product Code</label>                                              </div>                            <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Product Name</label>                                              </div>                            <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Color</label>                                              </div>                            <div id="inputh" class="md-form col-sm-1 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                               <label style="margin-left:15px" for="defaultForm-email">Order</label>                                              </div>                            <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">U.Price</label>                                              </div>                            <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Total Amount</label>                                              </div>                                         <div class="col-sm-1 delete"><a href="#" style="height:30px;width: 45px;margin-left: 15px;" class="btn btn-danger "><i class="glyphicon glyphicon-remove"></i></a>  </div> </div>'); 
            //add input box
        }
  else
  {
  alert('You Reached the limits')
  }

    var dom=$('.row').children().children("#qtyid");
    //console.log(dom);
    });
  //delete dynamically create input field
    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
        total();
    })       
}); //end document function
    
</script>
@endsection