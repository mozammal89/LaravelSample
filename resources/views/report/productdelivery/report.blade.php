@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/demand.png')}}"> Delivery Report</div> 
                <div class="card-body">
                    <div class="row">
                        <div style="margin-bottom: 40px" align="right" class="col-sm-4">
                            <img  src="{{URL::asset('logo2.png')}}" height="50px" >
                        </div>
                        <div class="col-sm-6">
                            <img  src="{{URL::asset('logo3.png')}}" height="50px" >
                        </div>
                    </div>
                    <h3 align="center" style="background-color: #e11d2e;color: white; font-family: -webkit-body;">Product Delivery</h3>
                    <hr style="margin-bottom: 30px">
                    <div  class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">Dealer/Customer Name :</label> KMC Trading
                    </div>
                    <div  class="col-sm-4 "> 
                        <label style="margin-left:15px" for="defaultForm-pass">Dealer Code :</label> 1003
                    </div>
                    <div  class="col-sm-3 ">
                        <label style="margin-left:15px" for="defaultForm-email">Date of Delivery :</label> 30-Jun-18
                                     
                    </div>
                    <div   class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">Challan No :</label> 15768
                    </div> 
                    <div  class="col-sm-4 ">
                        <label style="margin-left:15px" for="defaultForm-pass">Bill No :</label> EPL/Dlr/2018/06-5650
                    </div>
                    <div  class="col-sm-3 "> 
                        <label style="margin-left:15px" for="defaultForm-email">Do Date :</label> 28-Jun-18                  
                    </div>
                    <div  class="col-sm-5 ">
                        <label style="margin-left:15px" for="defaultForm-email">DO No. :</label> 4909
                    </div>
                    
                   
                    <div  class="col-sm-12 ">
                        <label style="margin-left:15px" for="defaultForm-email">Remarks :</label> You were responsive to my urgent shipping needs. Thank you.
                    </div>
                    
                <div style="margin-top: 35px" class="col-md-12">        
                    <div class="table-responsive">                
                        <table id="mytable" class="table table-bordred table-striped">                   
                            <thead>                                    
                              <th style="font-weight: bold;color:black">S.No</th>
                              <th style="font-weight: bold;color:black">Product</th>
                              <th style="font-weight: bold;color:black">Capacity</th>
                              <th style="font-weight: bold;color:black">Color</th>                     
                              <th style="font-weight: bold;color:black">Delivery Qty./ pcs</th>
                              <th style="font-weight: bold;color:black">DP</th>
                              <th style="font-weight: bold;color:black;padding-left: 0px;">Offer Qnty/ pcs</th>
                              <th style="font-weight: bold;color:black;padding-left: 100px">Cost Amount</th>
                            </thead>
                            <tbody>    
                                <tr>                    
                                  <td>1</td>
                                  <td>Design Bucket</td>
                                  <td>5L</td>
                                  <td>Blue</td>
                                  <td>36 pcs</td>                    
                                  <td>46 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">1656 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td>2</td>
                                  <td>Design Bowl</td>
                                  <td>5L</td>
                                  <td>Red</td>
                                  <td>60 pcs</td>                    
                                  <td>37 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">2220 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td >3</td>
                                  <td>Design Bowl</td>
                                  <td>5L</td>
                                  <td>Blue</td>
                                  <td>60 pcs</td>                    
                                  <td>37 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">2220 tk</td>                    
                                </tr>    
                
                                <tr>
                                  <td>4</td>
                                  <td>Design Bowl</td>
                                  <td>8L</td>
                                  <td>Red</td>
                                  <td>60 pcs</td>                    
                                  <td>50 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">3000 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td >5</td>
                                  <td>Design Bowl</td>
                                  <td>8L</td>
                                  <td>Blue</td>
                                  <td>60 pcs</td>                    
                                  <td>50 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">3000 tk</td>                    
                                </tr> 

                                <tr>
                                  <td >6</td>
                                  <td>Premium Food Container</td>
                                  <td>4 Pcs Set</td>
                                  <td>Red</td>
                                  <td>30 pcs</td>                    
                                  <td>400 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">0</td>                    
                                  <td align="center" style="padding-left: 10px;">12000 tk</td>                    
                                </tr> 
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="font-weight: bold">Total Offer = 0</td>
                                    <td style="font-weight: bold">Total Amount = 13296 tk</td>
                                </tr>   
                            </tbody>        
                      </table>               
                      </div> 
                       
                      <div align="center" style="margin-top: 50px;margin-bottom: 50px" class="col-sm-12">
                          <div class="col-sm-4">
                              <div class="sin" style="height: 2px;background-color:black;width: 160px;margin-bottom: 5px;"></div>
                              Deler/Customer
                          </div>
                          <div class="col-sm-4">
                              <div class="sin" style="height: 2px;background-color:black;width: 160px;margin-bottom: 5px;"></div>
                              Sales Officer's
                          </div>
                          <div class="col-sm-4">
                              <div class="sin" style="height: 2px;background-color:black;width: 160px;margin-bottom: 5px;"></div>
                              Approval Officer's
                          </div>
                      </div>         
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection