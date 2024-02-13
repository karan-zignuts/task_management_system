{{-- this is the show page when anyone is clicked on view button than run this page --}}
@extends('tasks.layout')
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-4 bg-light rounded shadow-lg" >
                <div class="card-body p-3">
                    <h5 class="card-title">Title : {{ $tasks->title }}</h5>
                    <p class="card-text">Description : {{ $tasks->description }}</p>
                    <p class="card-text">Date : {{ $tasks->due_date }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

