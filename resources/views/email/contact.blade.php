<!DOCTYPE html>
<html>
<head>
    <title>New Enquiry</title>
</head>
<body>
    <h1>New Enquiry</h1>
    <p><strong>Name:</strong> {{ $fname }}</p>
    <p><strong>Phone Number:</strong> {{ $number }}</p>
    <p><strong>Time Schedule:</strong> {{ $stime }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    @if($filePath)
        <p><strong>File Uploaded:</strong> <a href="{{ asset('storage/' . $filePath) }}">Download</a></p>
    @endif
</body>
</html>