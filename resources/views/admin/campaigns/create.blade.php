@extends('admin.layout')

@section('content-header-title')
    Add New Campaign
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(['route' => 'campaigns.store']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('budget', 'Budget', ['class' => 'control-label']) !!}
                        {!! Form::text('budget', old('budget'), ['class' => 'form-control']) !!}
                    </div>

                    @if(! Entrust::hasRole('client'))
                        <div class="form-group">
                            {!! Form::label('budget', 'Budget', ['class' => 'control-label']) !!}
                            {!! Form::select('user_id', App\Models\Users::lists('name', 'id'), old('budget'), ['class' => 'form-control']) !!}
                        </div>
                    @endif

                    {!! Form::submit('Create New Campaign', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection