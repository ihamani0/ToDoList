
    
@extends('Layout.app')
    @section('contnet')
        
    
        <div class="container mt-5  ">
            
            <a href="{{route('Student.create')}}" class="btn btn-success mb-3">Add Student</a> 

            <table class="table table-striped">
                <thead>
                    <tr >
                        <th scope="col">#</th>
                        <th scope="col">Full-Name</th>
                        <th scope="col">Birth-Day</th>
                        <th scope="col">Department</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                <tbody>
                    @foreach ($AllStd as $std)
                    
                    <tr>
                        <th scope="row">{{ $std->id}} </th>
                        <td scope="row" >{{ $std->Full_Name }}</td>
                        <td scope="row" >{{ $std->Birthday }}</td>
                        <td scope="row" >{{ $std->Department }}</td>
                        <td scope="row" >{{ $std->created_at->format('Y-m-d') }}</td>
                        <td scope="row" >{{ $std->updated_at }}</td>
                        
                        
                        <td>
                            <a href="{{ route('Student.show',['Student'=>$std->id]) }}" class="btn btn-secondary">View</a>
                            <a href="{{ route('Student.edit' , ['Student'=>$std->id]) }}" class="btn btn-success"> Edit</a>
                            <form  style="display: inline" action="{{ route('Student.destroy' , ['Student'=> $std->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>

                        </td>
                    </tr>  
                    @endforeach
                    
                    
                </tbody>
            </table>

        </div>
    @endsection

    















