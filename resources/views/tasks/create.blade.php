@extends('layouts.main')

@section('title','Create Task')

@section('content')
 <div class="row">
     <div class="col-sm-12">
         <h1>Add Task</h1>
         @component('components.taskForm')

         @endcomponent
     </div>
 </div>


@endsection
