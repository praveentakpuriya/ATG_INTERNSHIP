{!! Form::open(['route'=>'task.store', 'method'=>'POST']) !!}

{{ Form::label('task', 'Task description', ['class' => 'control-label mt-3'])}}
{{ Form::textArea('task', null, ['class'=>'form-control', 'placeholder'=>'Task Description'])
}}

<div class="row justify content center col-sm-6 mt-4"><button class="btn btn-block btn-success" type="submit">Create Task</button></div>
{!! Form::close() !!}
