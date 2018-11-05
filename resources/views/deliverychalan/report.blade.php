@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/delivery.png')}}"> Delivery Chalan Report</div> 
                <div class="card-body">
                    <div class="row" style="margin-bottom: 40px">
                        <div  align="right" class="col-sm-4">
                            <img  src="{{URL::asset('logo2.png')}}" height="50px" >
                        </div>
                        <div class="col-sm-6">
                            <img  src="{{URL::asset('logo3.png')}}" height="50px" >
                        </div>
                    </div>
                    <h3 align="center" style="background-color: #e11d2e;color: white; font-family: -webkit-body;">DELIVERY CHALAN</h3>
                    <hr style="margin-bottom: 30px">

                    <div style="height: 200px;margin-bottom: 30px" class="col-sm-12">

                    	<div class="col-sm-8">
                    		<h6 ><b>CORPORATE OFFICE :</b></h6>
                    		<p style="margin-bottom: 0px">Ideal Tread Center, 102, Shaheed Tajuddin Ahmed Sarani</p>
                    		<p style="margin-bottom: 0px">Tejgaon I/A, Dhaka-1208, Bangladesh.</p>
                    		<p style="margin-bottom: 0px"><b>Tel :</b> 096 02 333888, Fax: 88-02-8122181</p>
                    		<p style="margin-bottom: 0px"><b>E-mail :</b> ekcl@esquirebd.com</p>
                    		<p style="margin-bottom: 0px"><b>FACTORY :</b> Plot B-36, BSCIC Indestrial Estate</p>
                    		<p style="margin-bottom: 0px">Kanchpur, Sonargaon, narangonj.</p>
                    	</div>
                    	<div class="col-sm-4">
                    		<p style="margin-bottom: 0px;    margin-top: 155px;"><b>No : </b> 14788</p>
                    		<p style="margin-bottom: 0px"><b>Date : </b>October 29, 2018</p>
                    	</div>
                    </div>

                    <div style="height: 200px;border: 1px solid black; margin-bottom: 30px" class="col-sm-12">

                    	<div class="col-sm-5">
                    		<h6 style="margin-bottom: 0px"><b>CONSIGNEE :</b></h6>
                        <p style="margin-bottom: 0px">M/S Chowdhury Traders</p>
                        <p style="margin-bottom: 0px"> Jogot Bazar, Brahmanbaria-3400, Bangladesh </p>
                    	</div>
                      <div align="right" class="col-sm-1">
                        <div  class="line" style="height: 199px;width: 2px;background-color: black;">
                        </div>
                      </div>
                    	<div class="col-sm-5">
                        <h6 style="margin-bottom: 0px;"><b>CONSIGNOR :</b></h6>
                        <h6 style="margin-bottom: 0px;margin-top: 0px;font-family: none;"><b>ESQUIRE PLASTICS LTD </b></h6>
                    		<h6 style="margin-bottom: 0px;margin-top: 0px;">Jamaldi, Gazaria, Munshigonj.</h6>
                        <b><hr></b>
                        <p style="margin-bottom: 0px"><b>Truck No : </b>113815</p>
                        <p style="margin-bottom: 0px"><b>Product  : </b>House Hold</p>
                    	</div>
                    </div>
                    <div  class="col-sm-12" style="margin-bottom: 30px;">
                        <label style="margin-left:15px" for="defaultForm-email">Purchase Order # </label> Md. PO No: 14283-84. Bill No:4958 (id)
                    </div>
                    <div  class="col-sm-12">
                        <label style="margin-left:5px" for="defaultForm-email"><u>Shipping Details : </label>
                    </div>

                <div style="margin-top: 5px" class="col-md-12">        
                    <div class="table-responsive">                
                        <table id="mytable" class="table table-bordred table-striped">                   
                            <thead>                                    
                              <th style="font-weight: bold;color:black">S.No</th>
                              <th style="font-weight: bold;color:black">Description</th>
                              <th style="font-weight: bold;color:black">Product Code</th>                     
                              <th style="font-weight: bold;color:black">Box QTY</th>
                              <th style="font-weight: bold;color:black">QTY/BOX</th>
                              <th style="font-weight: bold;color:black;padding-left: 100px">Quantity</th>
                            </thead>
                            <tbody>    
                                <tr>                    
                                  <td>1</td>
                                  <td>Descripotion 1</td>
                                  <td>Product Code 1</td>
                                  <td>23</td>
                                  <td>100 pieces</td>
                                  <td  style="padding-left: 100px;">100 </td>                    
                                </tr>
                
                                <tr>
                                  <td>2</td>
                                  <td>Descripotion 2</td>
                                  <td>Product Code 2</td>
                                  <td>54</td>
                                  <td>200 pieces</td>
                                  <td  style="padding-left: 100px;">100 </td>                          
                                </tr>
                
                                <tr>
                                  <td >3</td>
                                  <td >Descripotion 3</td>
                                  <td >Product Code 3</td>
                                  <td >69</td>
                                  <td>300 pieces</td>
                                  <td  style="padding-left: 100px;">100 </td>                    
                                </tr>    
                
                                <tr>
                                  <td>4</td>
                                  <td>Descripotion 4</td>
                                  <td>Product Code 4</td>
                                  <td>14</td>
                                  <td>400 pieces</td>
                                  <td  style="padding-left: 100px;">100 </td>                    
                                </tr>
                
                                <tr>
                                  <td >5</td>
                                  <td >Descripotion 5</td>
                                  <td >Product Code 5</td>
                                  <td >22</td>
                                  <td>500 pieces</td>
                                  <td  style="padding-left: 100px;">100 </td>                    
                                </tr> 

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="font-weight: bold">Total Quantity = 500 </td>
                                </tr>   
                            </tbody>        
                      </table>               
                      </div>
                      <div class="col-sm-4">
                              <b>Gate Pass No: </b>154642 
                      </div>
                      <div align="center" class="col-sm-4">
                              <b>Delivery By: </b>Abc 
                      </div>
                      <div align="right" class="col-sm-4">
                             For :<b>ESQUIRE PLASTICS LTD</b> 
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