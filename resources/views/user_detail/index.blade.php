@extends('layouts.app')

@section('content')

<h2>USer Detail</h2>


<div class="card">
    <div class="card-body">
    <h4 class="card-title"> {{$details->fullname}}  {{$details->email}}  {{$details->phone}}</h4>


        <a class="btn btn-sm btn-primary" href=" {{route('user-detail.edit', $details)}} " role="button">Edit</a>

        <form action="{{route('user-detail.destroy', $details)}}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>

    </div>
</div>

<div class="text-right mt-3">
    <a class="btn btn-primary " href=" {{route('education.index')}} " role="button">Next Section</a>
</div>

@endsection
