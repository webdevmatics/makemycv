@extends('layouts.app')

@section('content')

<div class="container">
<h2>Tell us something about you</h2>


<form action="/user-detail" method='POST'>
    @csrf

    <x-form.text name="fullname"></x-form.text>
    <x-form.text name="email" type="email"></x-form.text>
    <x-form.text name="phone"></x-form.text>
    <x-form.text name="address"></x-form.text>

    <x-form.textarea name="summary"></x-form.textarea>

    <input type="submit" value="Submit">

</form>

</div>


@endsection
