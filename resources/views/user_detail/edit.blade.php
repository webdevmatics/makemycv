@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Tell us something about you</h2>


    <form action=" {{route('user-detail.update', $userDetail)}} " method='POST'>
        @csrf
        @method('PUT')
    <input type="text" name='fullname' placeholder='fullname' value="{{$userDetail->fullname}}">

        <input type="text" name='email' placeholder='email' value="{{$userDetail->email}}">

        <input type="text" name='phone' placeholder='phone' value="{{$userDetail->phone}}">

        <input type="text" name='address' placeholder='address' value="{{$userDetail->address}}">

        <input type="submit" value="Submit">

    </form>

</div>


@endsection
