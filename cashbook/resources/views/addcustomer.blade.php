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
  <h2>Cashbook form</h2>
  <form method="POST" action="{{ route('add_customers') }}">
  @csrf
    <div class="form-group">
      <label for="full_name">Full Name:</label>
      <input type="full_name" class="form-control" id="full_name" placeholder="Enter full_name" name="full_name">
    </div>
    <div class="form-group">
      <label for="bank_name">Bank_name:</label>
      <input type="bank_name" class="form-control" id="bank_name" placeholder="Enter bank_name" name="bank_name">
    </div>
    <div class="form-group">
      <label for="account_no">Account No:</label>
      <input type="account_no" class="form-control" id="account_no" placeholder="Enter account_no" name="account_no">
    </div>
    <div class="form-group">
      <label for="method_of_payment">Method of Payment:</label>
      <select class="form-control" id="method_of_payment" placeholder="Enter method_of_payment" name="method_of_payment">
        <option value="cash">cash</option>
        <option value="UPI">UPI</option>
        <option value="ETC">ETC</option>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="amount" class="form-control" id="amount" placeholder="Enter amount" name="amount">
    </div>
    <div class="form-group">
      <label for="transaction_type">Transaction Type:</label>
      <select class="form-control" id="transaction_type" placeholder="Enter transaction_type" name="transaction_type">
        <option value="Credit">Credit</option>
        <option value="Debit">Debit</option>
      </select>
    </div>
    <div class="form-group">
      <label for="transaction_status">Transaction Status:</label>
      <select class="form-control" id="transaction_status" placeholder="Enter transaction_status" name="transaction_status">
        <option value="Done">Done</option>
        <option value="Not">Not</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
  
</div>

</body>
</html>
