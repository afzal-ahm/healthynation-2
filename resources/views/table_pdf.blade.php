<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
         <tr>
            <th colspan="2" style="text-align:center;font-size:26px; padding:5px;">Healthynationlab Test Report</th>
        </tr>
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
            <th>Items</th>
            <td style="white-space: pre-line;">{{ $paymentData['selected_items'] ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Slot Date</th>
            <td>{{ $paymentData['slot_date'] ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Slot Time</th>
            <td>{{ $paymentData['slot_time'] ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Slot Price</th>
            <td>{{ $paymentData['slot_price'] ?? 'N/A' }}</td>
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
         <tr>
            <th colspan="2" style="text-align:center;font-size:20px; padding:5px;">S 45 C block Shalimar garden ext 2 near union bank of India sahibabad Ghaziabad 201005 Uttar Pradesh India<br>+91-9958957496, 9958957497</th>
        </tr>
    </table>
</body>
</html>
