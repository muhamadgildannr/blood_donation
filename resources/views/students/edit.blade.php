@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PATCH')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 mt-3 col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$student->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-6">
            <div class="form-group">
                <input type="text" name="nik" class="form-control" placeholder="Nik" value="{{$student->nik}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{$student->age}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$student->address}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <input type="text" name="total" class="form-control" placeholder="Total cc" value="{{$student->total}}">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <strong>Bloodtype:</strong>
                <input type="radio" name="bloodtype" value="A" {{$student->bloodtype == 'A'? 'checked' : ''}}> A
                <input type="radio" name="bloodtype" value="B" {{$student->bloodtype == 'B'? 'checked' : ''}}> B
                <input type="radio" name="bloodtype" value="AB" {{$student->bloodtype == 'AB'? 'checked' : ''}}> AB
                <input type="radio" name="bloodtype" value="O" {{$student->bloodtype == 'O'? 'checked' : ''}}> O
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection