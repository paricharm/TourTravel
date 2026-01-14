<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Travel Payment Receipt</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .box { border: 1px solid #ddd; padding: 20px; }
        h2 { text-align: center; }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="box">
        <h2>Payment Receipt</h2>
        @foreach ($receipt as $r)    
            <p><strong>Booking ID:</strong> {{$r->users->unique_id}}</p>
            <p><strong>Customer Name:</strong> {{$r->users->firstusername}}</p>
            <p><strong>Amount Paid:</strong> {{$r->amount}}</p>
            <p><strong>Payment Method:</strong> {{$r->paymode}}</p>
            <p><strong>Transaction ID:</strong> {{$r->unique_id}}</p>
            <p><strong>Date Issued:</strong> {{$r->pay_date}}</p>
        @endforeach
        <button onclick="window.print()" class="btn btn-info d-print-none">Download</button>
        <hr>
        <p style="text-align:center;">Thank you for choosing our Tours & Travels!</p>
    </div>
</body>
</html>
