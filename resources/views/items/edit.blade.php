@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edytuj zadanie</h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                <!-- Formularz -->
                    @include('items.form_errors')
                    {!! Form::model($result,['method' => 'PATCH', 'class'=>'form-horizontal', 'action' => ['ItemsController@update',$result->id]]) !!}
                    
                        @include('items.form',['buttonHeader'=>'Aktualizuj'])


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
