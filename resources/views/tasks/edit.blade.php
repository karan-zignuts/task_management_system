{{-- this is edit page for edit the task and update those task and show on the screen --}}
@extends('tasks.layout')
@section('content')
 
<div class="card mt-5 pt-5 rounded shadow-lg" style="background-color: #839788; " >

  <div class="card-body">

    <div class="text-center mb-2">
      <h1>Edit Task</h1>
    </div>
      {{-- create form for edit task --}}
      <form action="{{ url('tasks/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Title</label><br>
        <input type="text" name="title" id="title" value="{{$tasks->title}}" class="form-control" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"><br>
        
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$tasks->description}}" class="form-control" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"></br>
        <label>Date</label></br>
        <input type="date" name="due_date" id="due_date" value="{{$tasks->due_date}}" class="form-control" style="background-color:  #cce1f2; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;"></br>
        <input type="submit" value="Update" class="btn btn-success" style="background-color:  #cce1f2; border: 1px solid #cce1f2; border-radius: 0.25rem; padding: 0.375rem 0.75rem; color:black;"></br>

        
    </form>

    {{-- complete edit form here --}}
   
  </div>
</div>
 
@endsection





