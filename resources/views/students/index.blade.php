@extends('students.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>BLOOD DONATION</h2>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('students.create') }}"> New Decoration</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="card">
        <div class="card-header">
            <span>Blood Type</span>
        </div>
        <div class="d-flex justify-content-evenly py-3">
            <blockquote class="blockquote mb-0">
            <img src="/assets/img/goldar a.png" alt="icon"><p>{{ !is_null($students) ? $students->where('bloodtype','A')->count() : '-' }} Donation</p>
            </blockquote>

            <blockquote class="blockquote mb-0">
            <img src="/assets/img/goldar b.png" alt="icon"><p>{{ !is_null($students) ? $students->where('bloodtype','B')->count() : '-' }} Donation</p>
            </blockquote>

            <blockquote class="blockquote mb-0">
            <img src="/assets/img/goldar ab.png" alt="icon"><p>{{ !is_null($students) ? $students->where('bloodtype','AB')->count() : '-' }} Donation</p>
            </blockquote>

            <blockquote class="blockquote mb-0">
            <img src="/assets/img/goldar o.png" alt="icon"><p>{{ !is_null($students) ? $students->where('bloodtype','O')->count() : '-' }} Donation</p>
            </blockquote>
        </div>
    <table class="table table-striped table-secondary">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Nik</th>
            <th>Age</th>
            <th>Address</th>
            <th>Blood Type</th>
            <th>Total cc</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nik }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->bloodtype}}</td>
            <td>{{ $student->total }} ml</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    
    {!! $students->links() !!}
        
@endsection