@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Deshboard</div>
                <h3 align="center">Dealer</h3>
                <div class="content-box-large">
                  <div class="card-body">       
                  <div class=col-md-10>
                    <h4>All Dealer Details</h4>
                  </div>
                  <div class=col-md-2>
                      <a href="/dealer/create" style="width: 35px" class=" btn btn-success btn-sm glyphicon glyphicon-plus"> </a>
                  </div>
        <div class="col-md-12">        
        <div class="table-responsive">                
            <table id="mytable" class="table table-bordred table-striped">                   
                <thead>                   
                  <th><input type="checkbox" id="checkall" /></th>                  
                  <th>Dealer Name</th>
                  <th>D.Sort Name</th>
                  <th>Proprietor</th>                     
                  <th>Type</th>                     
                  <th>Op. Date</th>                     
                  <th>Op.Month</th>                     
                  <th>P.S</th>                     
                  <th>Address</th>                     
                  <th>Contact No.</th>                     
                  <th>Edit</th>                      
                  <th>Delete</th>
                </thead>
                <tbody>    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>                      
                      <td>Dealer Name 1</td>
                      <td>S.Name 1</td>
                      <td>ABC</td>
                      <td>Inactive</td>
                      <td>October 29, 2018</td>                    
                      <td>October</td>                    
                      <td>Uttara</td>                    
                      <td>Dhaka</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                     
                      <td>Dealer Name 2</td>
                      <td>S.Name 2</td>
                      <td>ABC</td>
                      <td>active</td>
                      <td>October 29, 2018</td>                    
                      <td>October</td>                    
                      <td>Uttara</td>                 
                      <td>Dhaka</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      
                      <td >Dealer Name 3</td>
                      <td >S.Name 3</td>
                      <td >ABC</td>
                      <td>Inactive</td>
                      <td>October 29, 2018</td>                    
                      <td>October</td>                    
                      <td>Uttara</td>                    
                      <td>Dhaka</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                     
                      <td>Dealer Name 4</td>
                      <td>S.Name 4</td>
                      <td>ABC</td>
                      <td>Inactive</td>
                      <td>October 29, 2018</td>                    
                      <td>October</td>                    
                      <td>Uttara</td>                    
                      <td>Dhaka</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                  </tr>
    
    
                  <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      
                      <td >Dealer Name 5</td>
                      <td >S.Name 5</td>
                      <td >ABC</td>
                      <td>active</td>
                      <td>October 29, 2018</td>                    
                      <td>October</td>                    
                      <td>Uttara</td>                    
                      <td>Dhaka</td>                    
                      <td>564564</td>                    
                                          
                                         
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
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
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
          </div>
          <div class="modal-body">       
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
            </div>       
          </div>
          <div class="modal-footer ">
              <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
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
