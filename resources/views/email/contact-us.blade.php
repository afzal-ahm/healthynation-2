<!DOCTYPE html>
<html>
<head>
    <title>New Contact Us Message</title>
</head>
<body>
    <h1>New Contact Us Message</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Phone Number:</strong> {{ $number }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    @if($message)
        <p><strong>Message:</strong> {{ $message }}</p>
    @endif
</body>
</html>