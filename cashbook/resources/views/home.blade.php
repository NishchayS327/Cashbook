@extends('layouts.app')
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


@section('content')
    
      
    <div class="container">

        <div class="pull-right" style="text-align: right;">
            <a href="/customers" class="btn btn-Success"> New</a>            
        </div>
        

        <div class="row">
            <div class="col-lg-12 margin-tb" style="padding-left: 0;">
                <div class="pull-left">
                    <h2> Cashbook data</h2> <br>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="pull-left" style="text-align: left;padding-bottom: 30px;">           
            <a href="/dataa/Book1.csv" class="btn btn-success"> Excel</a>            
            <a href="/dataa/Book1c.csv" class="btn btn-success"> CSV</a>            
            <a href="/dataa/table.pdf" class="btn btn-success"> PDF</a>            
        </div>
    
        <br>

        <table class="table table-bordered table-striped myblte" id="example">
            <thead>
            <tr>
                <th>Full Name</th>   
                <th>Bank Name</th>  
                <th>A/c No.</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Payment Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>   
                <td>{{ $product->full_name }}</td>   
                <td>{{ $product->bank_name }}</td>      
                <td>{{ $product->account_number }}</td>      
                <td>{{ $product->method_of_pay }}</td>
                <td>{{ $product->amount}}</td>      
                <td>{{ $product->transaction_type }}</td>      
                <td>{{ $product->status }}</td>      
                <td>
                    <a style="color:#fff;" class="btn btn-info" href="/edit/{{ $product->id }}"><i class="fa fa-pencil"></i></a>
                    <form action="/destroy" method="POST">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        @csrf
                        @method('DELETE')   
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure!');"><i class="fa fa-trash-o"></i></button>
                    </form> 
                </td>   
            </tr>
            
            @endforeach
            </tbody>
        </table>
    </div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

@endsection
