<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Application Submitted Successfully</h1>
    <p><strong>Name:</strong> {{ $applicationData['name'] }}</p>
    <p><strong>Job Title:</strong> {{ $applicationData['job_title'] }}</p>
    <p><strong>Email:</strong> {{ $applicationData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $applicationData['phone'] }}</p>
    <p><strong>Message:</strong> {{ $applicationData['message'] }}</p>
    <p><strong>File:</strong> <a href="{{ asset('storage/'.$applicationData['file_path']) }}">Download</a></p>
</body>
</html>

