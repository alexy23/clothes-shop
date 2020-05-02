{{ Form::open(array('url' => '/products/update')) }}
{{ Form::text('name', $product['name']) }}
{{ Form::text('price', $product['price']) }}
{{ Form::textarea('description', $product['description']) }}
{{ Form::submit('save') }}
{{ Form::close() }}
