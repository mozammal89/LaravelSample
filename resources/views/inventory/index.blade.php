@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/storage.png')}}"> Inventory</div>
                <h3 align="center">Inventory List</h3>
                <div class="content-box-large">
                  <div class="card-body">       
                  <div class=col-md-10>
                    <h4>Inventory Details</h4>
                  </div>
                  <div class=col-md-2>
                      <a href="#" style="width: 35px" class=" btn btn-success btn-sm glyphicon glyphicon-plus"> </a>
                  </div>
        <div class="col-md-12">        
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">                   
                <thead>                   
                  <th style="font-weight: bold;color:black">S.No</th>              
                  <th style="font-weight: bold;color:black">Product Type</th>
                  <th style="font-weight: bold;color:black">Item</th>
                  <th style="font-weight: bold;color:black">Opening Stock</th>                     
                  <th style="font-weight: bold;color:black">Production/ Receive Quantity</th>
                  <th style="font-weight: bold;color:black">Other Received</th>                     
                  <th style="font-weight: bold;color:black">Total</th>                     
                  <th style="font-weight: bold;color:black">Delivery Qty</th>                     
                  <th style="font-weight: bold;color:black">Broken/ Reject</th>                     
                  <th style="font-weight: bold;color:black">Closing Stock</th>                     
                  <th style="font-weight: bold;color:black">Minimum Stock</th>                      
                  <th style="font-weight: bold;color:black">Unit Price</th>
                  <th style="font-weight: bold;color:black">Total Price</th>
                </thead>
                <tbody>    
                  <tr>
                      <td>1</td>                      
                      <td>Product 1</td>
                      <td>Design Bucket-5L-Red</td>
                      <td>500</td>
                      <td>300</td>
                      <td>2</td>                    
                      <td>802</td>                    
                      <td>30</td>                    
                      <td>5</td>                    
                      <td>767</td>                    
                      <td>2200</td>                    
                      <td>50</td>                    
                      <td>38350</td>
                  </tr>
    
                  <tr>
                      <td style="background-color: #ffff008f;">2</td>
                      <td style="background-color: #ffff008f;">Product 2</td>
                      <td style="background-color: #ffff008f;">Design Bucket-8L-green</td>
                      <td style="background-color: #ffff008f;">390</td>
                      <td style="background-color: #ffff008f;">200</td>
                      <td style="background-color: #ffff008f;">5</td>                    
                      <td style="background-color: #ffff008f;">595</td>                    
                      <td style="background-color: #ffff008f;">388</td>                 
                      <td style="background-color: #ffff008f;">7</td>                    
                      <td style="background-color: #ffff008f;">200</td>            
                      <td style="background-color: #ffff008f;">1800</td>            
                      <td style="background-color: #ffff008f;">48</td>            
                      <td style="background-color: #ffff008f;">9600</td>            
                  </tr>
    
    
                  <tr>
                      <td style="background-color: #ff0000e0; color: #fff">3</td>
                      <td style="background-color:#ff0000e0; color: #fff">Product 3</td>
                      <td style="background-color:#ff0000e0; color: #fff">Design Bucket-5L-blue</td>
                      <td style="background-color:#ff0000e0; color: #fff">580</td>
                      <td style="background-color: #ff0000e0; color: #fff">120</td>
                      <td style="background-color: #ff0000e0; color: #fff">36</td>                    
                      <td style="background-color: #ff0000e0; color: #fff">736</td>                    
                      <td style="background-color: #ff0000e0; color: #fff">628</td>                    
                      <td style="background-color: #ff0000e0; color: #fff">9</td>                    
                      <td style="background-color: #ff0000e0; color: #fff">99</td>   
                      <td style="background-color: #ff0000e0; color: #fff">718</td>   
                      <td style="background-color: #ff0000e0; color: #fff">32</td>   
                      <td style="background-color: #ff0000e0; color: #fff">718</td>   
                  </tr>    
    
                  <tr>
                      <td>4</td>
                      <td>Product 4</td>
                      <td>Design Bucket-8L-black</td>
                      <td>400</td>
                      <td>320</td>
                      <td>68</td>                    
                      <td>788</td>                    
                      <td>45</td>                    
                      <td>9</td>                    
                      <td>734</td>
                      <td>718</td>   
                      <td>718</td>   
                      <td>718</td>   
                  </tr>
    
    
                  <tr>
                      <td>5</td>
                      <td >Product 5</td>
                      <td >Design Bucket-5L-Red</td>
                      <td >600</td>
                      <td>190</td>
                      <td>54</td>                    
                      <td>844</td>                    
                      <td>30</td>                    
                      <td>4</td>                    
                      <td>810</td> 
                      <td>718</td>   
                      <td>718</td>   
                      <td>718</td>   
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
