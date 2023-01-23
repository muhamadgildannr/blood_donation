@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create</h2>
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
     
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 mt-3 col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-6">
            <div class="form-group">
                <input type="text" name="nik" class="form-control" placeholder="Nik">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group m-1">
                
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 col-md-12">
            <div class="form-group">
                <input type="text" name="total" class="form-control" placeholder="Total cc">
            </div>
        </div>
        
        
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bloodtype:</strong>
                <input type="radio" name="bloodtype" value="A"> A
                <input type="radio" name="bloodtype" value="B"> B
                <input type="radio" name="bloodtype" value="AB"> AB
                <input type="radio" name="bloodtype" value="O"> O
            </div>
        </div> -->
        <div class="pull-right m-2">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </div>
     
</form>
@endsection