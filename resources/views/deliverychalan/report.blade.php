@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/demand.png')}}"> Demand Report</div> 
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

                    	<div class="col-sm-8">
                    		<h6><b>CORPORATE OFFICE :</b></h6>
                    		
                    	</div>
                    	<div class="col-sm-4">
                    		
                    	</div>
                    </div>
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
                        <label style="margin-left:15px" for="defaultForm-email">Fayment Type :</label> Cash
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
                              <th style="font-weight: bold;color:black;padding-left: 95px;">Discount</th>
                              <th style="font-weight: bold;color:black;padding-left: 100px">Cost Amount</th>
                            </thead>
                            <tbody>    
                                <tr>                    
                                  <td>1</td>
                                  <td>Product Code 1</td>
                                  <td>Red</td>
                                  <td>100 pieces</td>
                                  <td>100 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">25 tk</td>                    
                                  <td align="center" style="padding-left: 10px;">975 tk</td>                    
                                </tr>
                
                                <tr>
                                  <td>2</td>
                                  <td>Product Code 2</td>
                                  <td>Blue</td>
                                  <td>200 pieces</td>
                                  <td>100 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">20 tk</td>                    
                                  <td align="center" style="padding-left: 10px;">1980 tk</td>       
                                </tr>
                
                                <tr>
                                  <td >3</td>
                                  <td >Product Code 3</td>
                                  <td >Yellow</td>
                                  <td>300 pieces</td>
                                  <td>100 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">15 tk</td>                    
                                  <td align="center" style="padding-left: 10px;">2985 tk</td>
                                </tr>    
                
                                <tr>
                                  <td>4</td>
                                  <td>Product Code 4</td>
                                  <td>Green</td>
                                  <td>400 pieces</td>
                                  <td>100 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">18 tk</td>                    
                                  <td align="center" style="padding-left: 10px;">3982 tk</td>
                                </tr>
                
                                <tr>
                                  <td >5</td>
                                  <td >Product Code 5</td>
                                  <td >Black</td>
                                  <td>500 pieces</td>
                                  <td>100 tk</td>                    
                                  <td align="center" style="padding-left: 25px;">25 tk</td>                    
                                  <td align="center" style="padding-left: 10px;">4975 tk</td>
                                </tr> 

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="font-weight: bold">Total Discount = 103 tk</td>
                                    <td style="font-weight: bold">Total Amount = 14897 tk</td>
                                </tr>   
                            </tbody>        
                      </table>               
                      </div> 
                      <p style="margin-top: 50px"><b>Note : </b>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>  
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