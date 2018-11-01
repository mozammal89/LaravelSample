@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/demand.png')}}"> Demand Report</div> 
                <div class="card-body">
                    <div class="row">
                        <div style="margin-bottom: 40px" align="right" class="col-sm-4">
                            <img  src="{{URL::asset('logo2.png')}}" height="50px" >
                        </div>
                        <div class="col-sm-6">
                            <img  src="{{URL::asset('logo3.png')}}" height="50px" >
                        </div>
                    </div>
                    <hr style="margin-bottom: 30px">
                    <div  class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">Dealer/Customer Name :</label> Md. Mozammal Hossain
                    </div>
                    <div  class="col-sm-4 "> 
                        <label style="margin-left:15px" for="defaultForm-pass">Dealer Code :</label> Moz123456
                    </div>
                    <div  class="col-sm-3 ">
                        <label style="margin-left:15px" for="defaultForm-email">Date :</label> 01/11/1/2018
                                     
                    </div>
                    <div   class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">Address :</label> Uttara, Dhaka, Bangladesh
                    </div> 
                    <div  class="col-sm-4 ">
                        <label style="margin-left:15px" for="defaultForm-pass">Mobile :</label> 01934115336
                    </div>
                    <div  class="col-sm-3 "> 
                        <label style="margin-left:15px" for="defaultForm-email">Sales Officer :</label> abc xyz                  
                    </div>
                    <div  class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">District :</label> Dhaka
                    </div>
                    <div  class="col-sm-4 ">
                        <label style="margin-left:15px" for="defaultForm-pass">Sales Area :</label> Uttara
                    </div>
                    <div  class="col-sm-3 ">
                        <label style="margin-left:15px" for="defaultForm-email">Sales Zones :</label> Sector-14                   
                    </div>
                    <div  class="col-sm-12 ">
                        <label style="margin-left:15px" for="defaultForm-email">ID No :</label> 0123456789                  
                    </div>  
                    <div  class="col-sm-9 ">
                        <label style="margin-left:15px" for="defaultForm-email">Bank name/Address :</label> Uttara Bank, Dhaka, Bangladesh 
                    </div>
                    <div  class="col-sm-3 "> 
                        <label style="margin-left:15px" for="defaultForm-email">Date :</label> 01/11/2018
                    </div>
                    <div  class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">TT Check No :</label> abc123
                    </div>
                    <div  class="col-sm-4 ">
                        <label style="margin-left:15px" for="defaultForm-email">Select Fayment Type :</label> Cash
                    </div>
                    
                    <div  class="col-sm-3 ">
                        <label style="margin-left:15px" for="defaultForm-email">Amount :</label> 536580 tk
                    </div>
                    <div  class="col-sm-6 ">
                        <label style="margin-left:15px" for="defaultForm-email">Running Cradit Balance :</label> 567897200 tk                  
                    </div>
                <div style="margin-top: 35px" class="col-md-12">        
                    <div class="table-responsive">                
                        <table id="mytable" class="table table-bordred table-striped">                   
                            <thead>                                    
                              <th style="font-weight: bold;color:black">S.No</th>
                              <th style="font-weight: bold;color:black">Product Code</th>
                              <th style="font-weight: bold;color:black">Color</th>                     
                              <th style="font-weight: bold;color:black">Demand Amount</th>
                              <th style="font-weight: bold;color:black">Unit Price</th>
                              <th style="font-weight: bold;color:black">Cost Amount</th>
                            </thead>
                            <tbody>    
                                <tr>                    
                                  <td>1</td>
                                  <td>Product Code 1</td>
                                  <td>Red</td>
                                  <td>100 pieces</td>
                                  <td>100 tk</td>                    
                                  <td>1000 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td>2</td>
                                  <td>Product Code 2</td>
                                  <td>Blue</td>
                                  <td>200 pieces</td>
                                  <td>100 tk</td>                    
                                  <td>2000 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td >3</td>
                                  <td >Product Code 3</td>
                                  <td >Yellow</td>
                                  <td>300 pieces</td>
                                  <td>100 tk</td>                    
                                  <td>3000 tk</td>                    
                                </tr>    
                
                                <tr>
                                  <td>4</td>
                                  <td>Product Code 4</td>
                                  <td>Green</td>
                                  <td>400 pieces</td>
                                  <td>100 tk</td>                    
                                  <td>4000 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td >5</td>
                                  <td >Product Code 5</td>
                                  <td >Black</td>
                                  <td>500 pieces</td>
                                  <td>100 tk</td>                    
                                  <td>5000 tk</td>                    
                                </tr>    
                            </tbody>        
                      </table>               
                      </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection