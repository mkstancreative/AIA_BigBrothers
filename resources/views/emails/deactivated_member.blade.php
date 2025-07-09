<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Membership Deactivated</title>
</head>

<body>
    <h2>Hello {{ $member->firstname }},</h2>
    <p>We're sorry to let you know your membership account has been Deactivated!</p>

    <p><strong>Status:</strong> {{ $member->status }}</p>

    <p>Please Contact the Executives for further enquires!</p>

    <p>Regards,<br>The A.I.A Team</p>
</body>

</html>
