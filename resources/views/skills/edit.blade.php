@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Edit Skill Detail</h2>

    <form action="{{route('skill.update', $skill)}}" method='POST'>
        @csrf
        @method('PUT')

        <input type="text" name='name' placeholder='Skill Name' value="{{$skill->name}}">


        <input type="text" name='rating' placeholder='Rating' value="{{$skill->rating}}">

        <input type="submit" value="Save">

    </form>

</div>


@endsection
