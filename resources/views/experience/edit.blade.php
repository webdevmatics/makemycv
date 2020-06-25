@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Work Detail</h2>

    <form action="{{route('experience.update', $experience)}}" method='POST'>
        @csrf
        @method('PUT')

    <input type="text" name='job_title' placeholder='Job Title' value="{{$experience->job_title}}">

        <input type="text" name='employer' placeholder='Employer' value="{{$experience->employer}}">

        <input type="text" name='city' placeholder='City' value="{{$experience->city}}">

        <input type="text" name='state' placeholder='State' value="{{$experience->state}}">

        <input type="date" name='start_date' value="{{$experience->start_date}}">
        <input type="date" name='end_date' value="{{$experience->end_date}}">

        <input type="submit" value="Save">

    </form>

</div>


@endsection
