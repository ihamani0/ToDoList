@extends('Layout.app')
@section('contnet')

<div class="container mt-5  ">
            
    <a href="{{route('Emploie.create')}}" class="btn btn-success mb-3">Add Emploie</a> 

    <table class="table table-striped">
        <thead>
            <tr >
                <th scope="col">#</th>
                <th scope="col">Full-Name</th>
                <th scope="col">Department</th>
                <th scope="col">Salary</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Deleted_at</th>
                <th scope="col">Action</th>
                <th scope="col">Method</th>

            </tr>
            </thead>
        <tbody>
            
            @foreach ($Emp as $emp)
                
            
            <tr>
                <th scope="row">{{$emp->id}}</th>
                <td scope="row" >{{$emp->Name}}</td>
                <td scope="row" >{{$emp->Department}}</td>
                <td scope="row" >{{$emp->Salary}}</td>
                <td scope="row" >{{$emp->created_at->format('Y-m-d')}}</td>
                <td scope="row" >{{$emp->updated_at->format('Y-m-d')}}</td>
                <td scope="row" >{{$emp->deleted_at}}</td>
                
                
                <td>
                    <a href='' class="btn btn-secondary">View</a>
                    <a href='{{route('Emploie.edit' , ['emploie'=> $emp->id])}}' class="btn btn-success">Edit</a>
                    
                    <form style="display: inline" action="{{route('Emploie.destroy' , ['emploie' => $emp->id])}}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>

                </td>
                <td>
                    <form style="display: inline" action="{{route('Emploie.force' , ['emploie' => $emp->id])}}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="btn btn-danger">FORCE DELETE</button>
                    </form>

                    <form style="display: inline" action="{{route('Emploie.restore' , ['emploie' => $emp->id])}}" method="post">
                        @csrf
                        <button type="submit"  class="btn btn-secondary" > RESTORE </button>
                    </form>
                </td>
            </tr> 
            @endforeach 
        </tbody>
    </table>

</div>




@endsection