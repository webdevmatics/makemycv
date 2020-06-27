<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>
<body>


    <h2>Resume</h2>

    <section class="heading">
        <h2>
            {{$user->details->fullname}}
        </h2>

        <p>Email: {{$user->details->email}}</p>
        <p>Phone: {{$user->details->phone}}</p>
        <p>Address: {{$user->details->address}}</p>

    </section>

    <section class="summary">

        <h2>Summary</h2>

        <p>
            <strong>
                {{$user->details->summary}}
            </strong>
        </p>

    </section>


    <section class="education"></section>

    <section class="work"></section>

    <section class="skills"></section>


</body>
</html>
