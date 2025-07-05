<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Membership Form Submitted</title>
</head>

<body>
    <h2>Hello {{ $member->firstname }},</h2>
    <p>
        Thank you for registering with AIA Big Brothers. We are reviewing your application and will notify you once it
        is approved.
    </p>

    <p><strong>Membership ID:</strong> {{ $member->member_id }}</p>
    <p><strong>Status:</strong> {{ $member->status }}</p>

    <p>Regards,<br>The A.I.A Team</p>
</body>

</html>
