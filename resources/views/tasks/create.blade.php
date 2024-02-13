
{{-- this file is for create the tasks  --}}
@extends('tasks.layout')
@section('content')
 
<div class="card mt-5 pt-5 rounded shadow-lg" style="background-color: #839788; ">
  <div class="text-center mb-2"> 
    <h1>Create Task</h1>
  </div>
  <div class="card-body ms-3">

    {{-- create form for create the the task and description with date --}}
      <form action="{{ url('tasks') }}" method="post">
        @csrf
        <label>Title</label><br>
        <input type="text" name="title" id="title" class="form-control " style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"><br>
        <label>Description</label><br>
        <input type="text" name="description" id="description" class="form-control" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"><br>
        <label>Date</label><br>
        <input type="date" name="due_date" id="due_date" class="form-control" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"><br>
        <input type="submit" value="Save" class="btn btn-success" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem; color:black;"><br>
    </form>
    {{-- complete form here --}}
  </div>
</div>
@endsection
