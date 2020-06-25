@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Education details</h2>


    <form action="/education" method='POST'>
        @csrf

        <input type="text" name='school_name' placeholder='school name'>

        <input type="text" name='school_location' placeholder='location'>

        <input type="text" name='degree' placeholder='degree'>

        <input type="text" name='field_of_study' placeholder='faculty'>

        <input type="date" name='graduation_start_date'>
        <input type="date" name='graduation_end_date'>

        <input type="submit" class="btn btn-success" value="Save Education">

    </form>

</div>


@endsection
