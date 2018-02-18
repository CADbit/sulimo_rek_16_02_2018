<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('title','Nazwa zadania:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('desc','Opis zadania:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('date_from','Data rozpoczęcia zadania:') !!}
    </div>
    <div class='col-md-6'>
        <div class='input-group date' id='date_from_picker'>
            {{Form::text('date_from', null , array('id' => 'datepicker','class'=>'form-control'))}}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('date_to','Data zakończenia zadania:') !!}
    </div>
    <div class='col-md-6'>
        <div class='input-group date' id='date_to_picker'>
            {{Form::text('date_to', null, array('id' => 'datepicker','class'=>'form-control'))}}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('type_id','Typ zadania:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::select('type_id', $types, null,['class'=>'form-control']); !!}
    </div>
</div>


<div class="form-group">    
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonHeader,['class'=>'btn btn-primary']) !!}
    </div>
</div>



{{ Form::hidden('user_id', Auth::user()->id)}}
{{ Form::hidden('task_id', isset($task_id) ? $task_id : null) }}
{{ Form::hidden('status', true )}}