<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form Submission</title>
</head>
<body>
    <h1>New Payment Form Submitted</h1>

    <p><strong>Patient Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Phone Number:</strong> {{ $formData['number'] }}</p>
    <p><strong>Address:</strong> {{ $formData['address'] }}</p>
    <p><strong>Payment Method:</strong> {{ $formData['payment_method'] }}</p>
    <p><strong>Selected Price:</strong> ₹{{ $formData['selectedPrices'] }}</p>

    @if(isset($formData['print_report']) && $formData['print_report'] == 'print_report')
        <p><strong>Print Report:</strong> Yes (₹99)</p>
    @else
        <p><strong>Print Report:</strong> No</p>
    @endif
</body>
</html>
