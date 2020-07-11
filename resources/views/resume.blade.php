<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>

    <style>
        body {
            font-size: 17px;
        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>

</head>

<body>
    <div class="container">

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

        <section class="education">

            <h2>Education</h2>

            @foreach($user->education as $e)

            <h4> Degree: {{$e->degree}}</h4>

            <p>School: {{$e->school_name}} </p>
            <p>Start Date: {{$e->graduation_start_date}} </p>
            <p>Graduation Date: {{$e->graduation_end_date}} </p>
            @endforeach
        </section>


        <section class="work">

            <h2>Work History</h2>

            @foreach($user->experiences as $work)
            <h3>
                Job Title: {{$work->job_title}}
            </h3>
            <p>Employer: {{$work->employer}} </p>
            <p>Start Date: {{$work->start_date}} </p>
            <p>End Date: {{$work->end_date}} </p>
            @endforeach
        </section>


        <section class="skills">

            <h2>Skills</h2>

            @foreach($user->skills as $skill)
            <h4> {{$skill->name}} ({{$skill->rating}} out of 5)</h4>
            @endforeach

        </section>
    </div>


</body>

</html>
