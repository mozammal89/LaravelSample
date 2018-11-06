@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/delivery.png')}}"> Delivery</div>
                <div class="row">
                    <div class=col-md-9>
                    <h4>Add New Dealer</h4>                   
                </div>
                <div class=col-md-3>
                    <a href="/demand" align="right" class=" btn btn-warning">delivery Chalan List </a>
                </div>
                </div>
                <div class="card-body">             
                <div class="row">
                    <div class="col-sm-8">
                    <label style="margin-top: 30px;">Delivery Chalan</label> 
                    </div>
                <div class="col-sm-3">
                   <input align="right" type="text" id="dcdate" class="form-control" placeholder="Select date">
                </div>
                </div>
                
                <div style="margin-bottom: 150px" class="toparea">
                    <div class="row">
                        <div class="col-sm-6">
                            Consignee :
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="8"></textarea>
                        </div>
                        <div class="col-sm-6">
                             Consignor :
                                <br/>
                                <label>Esquire Plastic LTD</label>
                                </br/>
                                Jamaldi, Gazaria, Munshigonj
                                <hr>
                            <div id="inputh" class="md-form hp col-sm-12">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-pass">Reuck No </label>
                            </div>
                            <div id="inputh" class="md-form hp col-sm-12">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-pass">Product</label>
                            </div>   
                        </div>                        
                    </div> 
                    <div id="inputh" class="md-form hp col-sm-12">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Purchase Order #</label>
                    </div>                    
                </div>
                <!-- <div style="height: 50px" id="inputh" class="md-form hp col-sm-12">                 
                    <label style="margin-left:15px; color:lightseagreen" for="defaultForm-pass">Shipping Details: </label>
                </div> -->                 
                    <label style="color:lightseagreen">Shipping Details:</label>
                    <div class="hr">
                    </div>

                    <div class="row ">
                        
                        <div class="col-sm-3">
                            <p align="left" style="font-weight: bold; font-size: 16px;margin-bottom: 0px;padding-bottom: 0px;">Description</p>
                        </div>
                        <div class="col-sm-2">      
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Product Code</p>   
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Box Qty</p>
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Qty/Box</p>
                        </div>
                        <div class="col-sm-2"> 
                            <p align="left" style="font-weight: bold; font-size: 16px; margin-bottom: 0px;padding-bottom: 0px;">Quantity</p>
                        </div>
                        
                        <div class="col-sm-1">
                            <button align="left" style="position: absolute;height: 30px"  class="btn btn-success add_form_field"><span style="font-size:16px; font-weight:bold;"><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                    </div>
                    <div class="hr" style="width: 100%;background-color:black;height:3px;margin-bottom:15px;">
                    </div>
                    <div id="goods_container">  
                        <div class=" container1">  
                             
                            <div id="inputh" class="md-form col-sm-3 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Description</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Product Code</label>                  
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Box Qty</label>
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Qty/Box</label>
                            </div>
                            <div id="inputh" class="md-form col-sm-2 ">                   
                                <input type="text" id="defaultForm-pass" class="form-control">
                                <label style="margin-left:15px" for="defaultForm-email">Quantity</label>
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
            $(wrapper).append('<div class=" container1">                                                                                                                               <div id="inputh" class="md-form col-sm-3 "                                                   <input type="text" id="defaultForm-pass" class="form-control">                                                      <label style="margin-left:15px" for="defaultForm-email">Description</label>                                              </div>                                               <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Product Code</label>                                              </div>                                                                     <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Box Qty</label>                            </div>                              <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Qty/Box</label>                            </div>                               <div id="inputh" class="md-form col-sm-2 ">                                                   <input type="text" id="defaultForm-pass" class="form-control">                                <label style="margin-left:15px" for="defaultForm-email">Quantity</label>                            </div>                                                                     <div class="col-sm-1 delete"><a href="#" style="height:30px;width: 45px;margin-left: 15px;" class="btn btn-danger "><i class="glyphicon glyphicon-remove"></i></a>  </div> </div>'); 
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

//date
$('#dcdate').datepicker({
    autoclose: true
});

$('#dcdate').on('show', function(e){
    console.debug('show', e.date, $(this).data('stickyDate'));
    
    if ( e.date ) {
         $(this).data('stickyDate', e.date);
    }
    else {
         $(this).data('stickyDate', null);
    }
});

$('#dcdate').on('hide', function(e){
    console.debug('hide', e.date, $(this).data('stickyDate'));
    var stickyDate = $(this).data('stickyDate');
    if ( !e.date && stickyDate ) {
        console.debug('restore stickyDate', stickyDate);
        $(this).datepicker('setDate', stickyDate);
        $(this).data('stickyDate', null);
    }
});    
}); //end document function
    
</script>
@endsection