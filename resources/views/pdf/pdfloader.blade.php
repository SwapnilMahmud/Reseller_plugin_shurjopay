
<!DOCTYPE html>
<html>
    <head>
     <style>
        table.blueTable {
  font-family: Arial, Helvetica, sans-serif;
  border: 2px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 8px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable thead {
    border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  text-align: center;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
     </style>
    </head>
    <body>
    <table class="blueTable">
<thead>
<tr>
<th >Name</th>
<th>Transaction Id</th>
<th>Bank Status</th>
<th>Bank Transaction Id</th>
<th>Payment Method</th>
<th>Invoice No</th>
<th>Sp Message</th>
</tr>
</thead>
<tbody>
@foreach($data as $data)
<tr>
  <td>{{$data->customer_name}}</td>
  <td>{{$data->tx_id}}</td>
  <td>{{$data->sp_bank_status}}</td>
  <td>{{$data->sp_bank_trx_id}}</td> 
  <td>{{$data->sp_payment_method}}</td>
  <td>{{$data->sp_invoice_no}}</td>
  <td>{{$data->sp_message}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>





