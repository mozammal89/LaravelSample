@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/dealer.png')}}"> Dealer</div>
                <h3 align="center">Add New Dealer</h3>
               		<div class="content-box-large">
			  				<div class="panel-heading">				           				          
					            <div class="panel-options">
					              <a href="/dealer" class=" btn btn-warning ">Dealer List </a>
					            </div>
					        </div>
                <div class="card-body">
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Dealer Name</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Dealer S.Name</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">           
                        <label style="margin-left:15px" for="defaultForm-email">Proprietor</label>
                    </div>
                    <div  id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Dlr Code</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Dealer Type</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="opdate" class="form-control" placeholder="Op.Date"> 
                        <!-- <label style="margin-left:15px" for="defaultForm-email">Op. Date</label>                   -->
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Open Month</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="email" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-pass">Police Station</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Address</label>                   
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Contact No</label>                  
                    </div>  
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Base</label>                   
                    </div> 
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Area</label>                   
                    </div>  
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">SPO ID</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">SPO</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Line Manager</label>                   
                    </div>
                    <div id="inputh" class="md-form col-sm-6 ">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">DSM</label>                  
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Zone</label>
                    </div>
                    <div id="inputh" class="md-form col-sm-6 hp">                   
                        <input type="text" id="defaultForm-pass" class="form-control">
                        <label style="margin-left:15px" for="defaultForm-email">Remarks</label>                   
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
<script type="text/javascript">
    $(document).ready(function(){
            $('#opdate').datepicker({
    autoclose: true
});

$('#opdate').on('show', function(e){
    console.debug('show', e.date, $(this).data('stickyDate'));
    
    if ( e.date ) {
         $(this).data('stickyDate', e.date);
    }
    else {
         $(this).data('stickyDate', null);
    }
});

$('#opdate').on('hide', function(e){
    console.debug('hide', e.date, $(this).data('stickyDate'));
    var stickyDate = $(this).data('stickyDate');
    if ( !e.date && stickyDate ) {
        console.debug('restore stickyDate', stickyDate);
        $(this).datepicker('setDate', stickyDate);
        $(this).data('stickyDate', null);
    }
});
    });
</script>
@endsection