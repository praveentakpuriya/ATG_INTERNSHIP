{{ Form::label('task', 'Task description', ['class' => 'control-label mt-3']) }}
{{ Form::textArea('task', null, ['class' => 'form-control', 'placeholder' => 'Task Description']) }}

<div class="row justify-content-center mt-3">
	<div class="col-sm-4">
		<a href="{{ route('task.index') }}" class="btn btn-block btn-secondary">Go Back</a>
	</div>
	<div class="col-sm-4">
		<button class="btn btn-block btn-primary" type="submit">Save Task</button>
	</div>
</div>
