
<div class="col-lg-8 col-md-12">
    <div class="card">
       <div class="card-header d-flex justify-content-between">
          <div class="header-title">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Payroll</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center">                  
                   <a href="/printPayroll"> <button class="btn btn-primary">Print</button></a>
                </div>
             </div>
          </div>
       </div>
       <div class="card-body p-0">
          <div class="table-responsive">
           <table class="table">
               <thead>
                  <tr>
                     <th scope="col">Employee ID</th>
                     <th scope="col">Name</th>
                     <th scope="col">Hours worked</th>
                     <th scope="col">Rate</th>
                     <th scope="col">Over Time</th>
                     <th scope="col">Gross</th>
                     <th scope="col">Taxes</th>
                     <th scope="col">Deductions</th>
                     <th scope="col">Netpay</th>
                  </tr>
               </thead>
             
                <tbody class="adminProjectlist">
                   @foreach( $payroll as $item)
                     <tr>
                        <td>{{$item->employee_id}}</td>
                        <td>{{$item->employee->name}}</td>
                        <td>{{ number_format($item->hours_worked, 2) }}</td>
                        <td>{{ number_format($item->Rate, 2) }}</td>
                        <td>{{ $item->Overtime}}</td>
                        <td>{{ number_format($item->Gross, 2) }}</td>
                        <td>{{ number_format($item->Taxes, 2) }}</td>
                        <td>{{ number_format($item->Deductions, 2) }}</td>
                        <br><td>{{ number_format($item->Netpay, 2) }}</td></br>
                     </tr>
                     @endforeach

                     <tr>
                        <td><strong>TOTAL</strong></td>
                        <td> </td>
                        <td><strong>{{ number_format($payroll->sum('hours_worked'),2 )}}</strong></td>
                        <td> </td>
                        <td><strong> </strong></td>
                        <td><strong>{{ number_format($payroll->sum('Gross'), 2) }}</strong></td>
                        <td><strong>{{ number_format($payroll->sum('Taxes'), 2) }}</strong></td>
                        <td><strong>{{ number_format($payroll->sum('Deductions'), 2) }}</strong></td>
                        <td><strong>{{ number_format($payroll->sum('Netpay'), 2) }}</strong></td>
                     </tr>
                   </tbody>
                 
               </table>
               <div class="d-flex justify-content-end align-items-center border-top-table p-3">
               
            
               </div>
                       
          </div>
       </div>
    </div>
 </div>