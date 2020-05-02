<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Продукты</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div id="app">
        <el-container>
            @include('layout.header')
            <el-main>

            </el-main>
        </el-container>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
