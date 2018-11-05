@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/report.png')}}"> Report</div>
                <h3 align="center">Product Delivery Report</h3>
                <div class="content-box-large">
                  <div class="card-body">       
                  
        <div class="col-md-12">        
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">                   
                <thead>                   
                                
                  <th style="font-weight: bold;color:black">D.O.Delivery</th>
                  <th style="font-weight: bold;color:black">Challan No</th>                     
                  <th style="font-weight: bold;color:black">Bill No</th>                     
                  <th style="font-weight: bold;color:black">DO Date</th>                     
                  <th style="font-weight: bold;color:black">N.O.Dealer</th>                     
                  <th style="font-weight: bold;color:black">Dealer Code</th>
                  <th style="font-weight: bold;color:black">DO No</th>
                  <th style="font-weight: bold;color:black">Total Amount</th>
                  <th style="font-weight: bold;color:black">Status</th>
                  <th style="font-weight: bold;color:black">Detaila</th>

                </thead>
                <tbody>    
                  <tr>                     
                      <td>30-Jun-18</td>
                      <td>15768</td>
                      <td>EPL/Dlr/2018/06-5650</td>
                      <td>28-Jun-18</td>
                      <td>KMC Trading</td>                    
                      <td>1003</td>                   
                      <td>4909</td>                   
                      <td>13296 tk</td>                   
                      <td style="background-color: green;color: #fff">Delivered</td>                   
                      <td><a class="btn btn-warning " href="product/delivery/report">Print</a></td>
                     
                  </tr>
    
                  <tr>
                      <td> Name 2</td>
                      <td>Description 2</td>
                      <td>65</td>
                      <td>12</td>
                      <td>October 29, 2018</td>                    
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                    
                       <td><a class="btn btn-warning " href="report/create">Print</a></td> 
                  </tr>
    
    
                  <tr>
                      <td > Name 3</td>
                      <td >Description 3</td>
                      <td >65</td>
                      <td>12</td>
                      <td>October 29, 2018</td>                    
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                    
                       <td><a class="btn btn-warning " href="report/create">Print</a></td>
                  </tr>    
    
                  <tr>
                      <td> Name 4</td>
                      <td>Description 4</td>
                      <td>65</td>
                      <td>12</td>
                      <td>October 29, 2018</td>                    
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                    
                       <td><a class="btn btn-warning " href="report/create">Print</a></td>
                  </tr>
    
    
                  <tr>
                      <td > Name 5</td>
                      <td >Description 5</td>
                      <td >65</td>
                      <td>12</td>
                      <td>October 29, 2018</td>                    
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                   
                      <td>516515</td>                    
                       <td><a class="btn btn-warning " href="report/create">Print</a></td>
                  </tr>    
                </tbody>        
          </table>

          <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>                
          </div>            
        </div>

        <div  class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div  class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">        
                  <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                  <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>        
                </div>
              </div>
              <div class="modal-footer ">
                  <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </div>
            </div>
    <!-- /.modal-content --> 
        </div>
      <!-- /.modal-dialog --> 
      </div>   
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              
          </div>
          <div class="modal-body">       
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
            </div>       
          </div>
          <div class="modal-footer ">
              <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
          </div>
        </div>
    <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

</script>
@endsection
