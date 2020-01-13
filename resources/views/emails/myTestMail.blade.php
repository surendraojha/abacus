<!DOCTYPE html>
<html>
<head>
    <title>{{ $contact->contact_reason}}</title>
</head>

<body>
	<h3>Dear Abacus Insurance Team,</h3>

    <p>Please find  {{ $contact->contact_reason}} inquiry from below </p>

    <p> First Name: {{$contact->first_name}} </p>

    <p> Last Name: {{$contact->last_name}} </p>

    <p> Email: {{$contact->email}} </p>

    <p> Phone: {{$contact->phone}} </p>

    <p> Phone Type: {{$contact->phone_type}} </p>


    <p>Thank you</p>
</body>
</html>