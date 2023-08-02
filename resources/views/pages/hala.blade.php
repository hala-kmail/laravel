{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>age:{{$age}}   name:{{$name}}</div> 
</body>
</html> --}}
@extends('layout.master')
@section('name','hala-page')
@section('content')
    <div class="container">
        my name is hala page
    </div>
    <div>age:{{$age}}   name:{{$name}}</div> 
@endsection
@section('sidebar')
@parent
    hay from hala page
@endsection
    
