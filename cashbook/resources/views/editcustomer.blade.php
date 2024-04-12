<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cashbook Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
  <h2>Edit Cashbook form</h2>
  <form method="POST" action="/update">
  @csrf
    <div class="form-group">
      <label for="full_name">Full Name:</label>
      <input type="full_name" class="form-control" id="full_name" value="{{$data->full_name}}" placeholder="Enter full_name" name="full_name">
    </div>
    <div class="form-group">
      <label for="bank_name">Bank_name:</label>
      <input type="bank_name" class="form-control" id="bank_name" value="{{$data->bank_name}}" placeholder="Enter bank_name" name="bank_name">
    </div>
    <div class="form-group">
      <label for="account_no">Account No:</label>
      <input type="account_no" class="form-control" id="account_no" value="{{$data->account_number}}" placeholder="Enter account_no" name="account_no">
    </div>
    <div class="form-group">
      <label for="method_of_payment">Method of Payment:</label>
      <select class="form-control" id="method_of_payment" placeholder="Enter method_of_payment" name="method_of_payment">
        <option <?php if ($data->method_of_pay=='CASH') { echo "selected";} ?> value="CASH">CASH</option>
        <option <?php if ($data->method_of_pay=='UPI') { echo "selected";} ?> value="UPI">UPI</option>
        <option <?php if ($data->method_of_pay=='ETC') { echo "selected";} ?> value="ETC">ETC</option>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="amount" class="form-control" id="amount" value="{{$data->amount}}" placeholder="Enter amount" name="amount">
    </div>
    <div class="form-group">
      <label for="transaction_type">Transaction Type:</label>
      <select class="form-control" id="transaction_type" placeholder="Enter transaction_type" name="transaction_type">
        <option <?php if ($data->transaction_type=='Credit') { echo "selected";} ?> value="Credit">Credit</option>
        <option <?php if ($data->transaction_type=='Debit') { echo "selected";} ?> value="Debit">Debit</option>
      </select>
    </div>
    <div class="form-group">
      <label for="transaction_status">Transaction Status:</label>
      <select class="form-control" id="transaction_status" placeholder="Enter transaction_status" name="transaction_status">
        <option <?php if ($data->status=='Done') { echo "selected";} ?> value="Done">Done</option>
        <option <?php if ($data->status=='Not') { echo "selected";} ?> value="Not">Not</option>
      </select>
    </div>

    <input type="hidden" name="fid" value="{{$data->id}}">
    
    <button type="submit" class="btn btn-warning">Update</button>
  </form>
  
</div>

</body>
</html>
