 @extends('layout')

 @section('content')

<div class="row">
      <div class="col-md-12">

        <form action="{{ route('todos.save', ['id' => $todo->id]) }}" method="post">
      {{ csrf_field() }}
        
          <input type="text" class="form-control input-md" name="todo" value="{{ $todo->todo}}" placeholder="Create a to do">
          
        </form>
      </div>
  </div>
	<hr>

 @stop