@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><img align="center" src="{{URL::asset('icon/cash.png')}}"> Bill Report</div> 
                <div class="card-body">
                    <div class="row">
                        <div style="margin-bottom: 40px" align="right" class="col-sm-4">
                            <img  src="{{URL::asset('logo2.png')}}" height="50px" >
                        </div>
                        <div class="col-sm-6">
                            <img  src="{{URL::asset('logo3.png')}}" height="50px" >
                        </div>
                    </div>
                    <h3 align="center" style="background-color: #e11d2e;color: white; font-family: -webkit-body;">Bill Details statement</h3>
                    <hr style="margin-bottom: 30px">
                    
                <div style="margin-top: 35px" class="col-md-12">        
                    <div class="table-responsive">                
                        <table id="mytable" class="table table-bordred table-striped">                   
                            <thead>                                    
                              <th style="font-weight: bold;color:black">Sales Zone</th>
                              <th style="font-weight: bold;color:black">Line Manager</th>
                              <th style="font-weight: bold;color:black">18-Jan</th>
                              <th style="font-weight: bold;color:black">18-Feb</th>                     
                              <th style="font-weight: bold;color:black">18-Mar</th>
                              <th style="font-weight: bold;color:black">18-Apr</th>
                              <th style="font-weight: bold;color:black">18-May</th>
                              <th style="font-weight: bold;color:black">18-Jun</th>
                              <th style="font-weight: bold;color:black">18-Jul</th>
                              <th style="font-weight: bold;color:black">18-Aug</th>
                              <th style="font-weight: bold;color:black">18-Sep</th>
                              <th style="font-weight: bold;color:black">18-Oct</th>
                              <th style="font-weight: bold;color:black">Grand Total</th>
                            </thead>
                            <tbody>    
                                <tr>                    
                                  <td>Diamond Zone</td>
                                  <td>Md. Abu Akkas</td>
                                  <td>1,134,990</td>
                                  <td>532,609</td>
                                  <td>734,680</td>                    
                                  <td>765,720</td>                    
                                  <td>597,002</td>                    
                                  <td>714,245</td>                    
                                  <td>1,302,947</td>                    
                                  <td>1,629,938</td>                    
                                  <td>2,007,679</td>                    
                                  <td>280,660</td>                    
                                  <td style="font-weight: bold;     color: steelblue;">9,700,470</td>                    
                                </tr>
                
                                <tr>
                                  <td></td>
                                  <td>Md. Rahmatullah</td>
                                  <td>278,154</td>
                                  <td>125,479</td>
                                  <td>473,135</td>                    
                                  <td>290,383</td>     
                                  <td>379,907</td>                    
                                  <td>190,240</td>                    
                                  <td>335,455</td>                    
                                  <td>382,076</td>                    
                                  <td>278,154</td>                    
                                  <td>15,023</td>
                                  <td style="font-weight: bold;     color: steelblue;">2,570,874</td>                    
                                </tr>
                
                                <tr>
                                  <td ></td>
                                  <td>Mominul Islam</td>
                                  <td>3,495,139 </td>
                                  <td>382,791 </td>
                                  <td>2,043,263</td>                    
                                  <td>1,402,452</td>                    
                                  <td>1,162,913</td>                    
                                  <td>2,648,260</td>                    
                                  <td>1,981,070</td>                    
                                  <td>1,435,382</td>                    
                                  <td>2,184,324</td>                    
                                  <td>1,114,974</td>                    
                                  <td style="font-weight: bold;     color: steelblue;">17,850,568</td>                    
                                </tr>    
                
                                <tr>
                                  <td ></td>
                                  <td>Mominul Islam</td>
                                  <td>3,495,139 </td>
                                  <td>382,791 </td>
                                  <td>2,043,263</td>                    
                                  <td>1,402,452</td>                    
                                  <td>1,162,913</td>                    
                                  <td>2,648,260</td>                    
                                  <td>1,981,070</td>                    
                                  <td>1,435,382</td>                    
                                  <td>2,184,324</td>                    
                                  <td>1,114,974</td>                    
                                  <td style="font-weight: bold;     color: steelblue;">17,850,568</td>                    
                                </tr>
                
                                <tr>
                                  <td></td>
                                  <td>Md. Rahmatullah</td>
                                  <td>278,154</td>
                                  <td>125,479</td>
                                  <td>473,135</td>                    
                                  <td>290,383</td>     
                                  <td>379,907</td>                    
                                  <td>190,240</td>                    
                                  <td>335,455</td>                    
                                  <td>382,076</td>                    
                                  <td>278,154</td>                    
                                  <td>15,023</td>
                                  <td style="font-weight: bold;     color: steelblue;">2,570,874</td>                    
                                </tr>
                
                                <tr>
                                  <td ></td>
                                  <td>Mominul Islam</td>
                                  <td>3,495,139 </td>
                                  <td>382,791 </td>
                                  <td>2,043,263</td>                    
                                  <td>1,402,452</td>                    
                                  <td>1,162,913</td>                    
                                  <td>2,648,260</td>                    
                                  <td>1,981,070</td>                    
                                  <td>1,435,382</td>                    
                                  <td>2,184,324</td>                    
                                  <td>1,114,974</td>                    
                                  <td style="font-weight: bold;     color: steelblue;">17,850,568</td>                    
                                </tr> 
                                <tr>
                                    <td><b>Diamond Zone Total</b></td>
                                    <td></td>
                                    <td style="font-weight: bold;     color: steelblue;">8,111,891</td>
                                    <td style="font-weight: bold;     color: steelblue;">1,270,608</td>
                                    <td style="font-weight: bold;     color: steelblue;">4,473,333</td>
                                    <td style="font-weight: bold;     color: steelblue;">3,649,472</td>
                                    <td style="font-weight: bold;     color: steelblue;">3,574,366</td>
                                    <td style="font-weight: bold;     color: steelblue;">6,222,527</td>
                                    <td style="font-weight: bold;     color: steelblue;">4,602,374</td>
                                    <td style="font-weight: bold;     color: steelblue;">3,996,030</td>
                                    <td style="font-weight: bold;     color: steelblue;">6,062,527</td>
                                    <td style="font-weight: bold;     color: steelblue;">3,037,433</td>
                                    <td style="font-weight: bold;     color: #de3232;">45,000,561</td>
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