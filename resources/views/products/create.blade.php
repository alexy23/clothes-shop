<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Продукты</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<div class="card">
    <div class="card-title"><h3>Create Item</h3></div>
    <div class="row">
        {{ Form::open(array('action' => 'ItemController@store', 'files' => true)) }}
        <div class="col">
            <div class="card-subtitle">{{ Form::label('name', 'Name') }}</div>
            {{ Form::text('name') }}
        </div>
        <div class="col">
            {{ Form::label('price', 'Price') }}
            {{ Form::text('price') }}
        </div>
        <div class="col">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, ['class'=>'form-control', 'rows' => 4, 'cols' => 40]) }}
        </div>
        <div class="col">
            {{ Form::label('images', 'Images') }}
            {{ Form::file('images[]', $attributes = array('multiple')) }}
        </div>
        {{ Form::submit('save', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    </div>
</div>
