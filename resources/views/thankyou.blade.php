<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Payment Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Add your styling here */
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="help float-start mt-3">
                        <a href="{{ url('/') }}" class="btn btn-success">Go to Home</a>
                    </div>
                <div class="report-details my-5 py-5">
                     <h1>Thank You for Your Payment!</h1>
        <p>Your payment details are as follows:</p>
        <div class="table-responsive">
        <table class="table table-success table-striped">
            <tr>
                <th>Name</th>
                <td>{{ $paymentData['name'] }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $paymentData['number'] }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $paymentData['address'] }}</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ $paymentData['payment_method'] }}</td>
            </tr>
            <tr>
                <th>Selected Price</th>
                <td>{{ $paymentData['selectedPrices'] }}</td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td>{{ $paymentData['totalAmount'] / 100 }}</td> <!-- Dividing by 100 to display the actual amount -->
            </tr>
            <tr>
                <th>Print Report</th>
                <td>{{ $paymentData['print_report'] }}</td>
            </tr>
        </table>
</div>
        <!-- Print Button -->
        <button class="btn btn-success" onclick="window.print()">Print Details</button>

        <!-- Download Button (Download as PDF) -->
        <a href="{{ route('downloadPDF') }}">
            <button class="btn btn-success">Download PDF</button>
        </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
