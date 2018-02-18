@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dodaj zadanie</h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                <!-- Formularz -->
                    @include('items.form_errors')
                    {!! Form::open(['url'=>'user/my-tasks', 'class'=>'form-horizontal']) !!}
                    
                        @include('items.form',['buttonHeader'=>'Dodaj zadanie'])


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
