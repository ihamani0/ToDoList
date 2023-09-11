@extends('Layout.app')
@section('contnet')
<div class="container ">
    <form method="POST" action="{{route('Emploie.update', ['emploie' => $emp->id])}}">
        <!-- Hadi input ta3 token and method -->
        {{-- @csrf  --}} <input type="hidden" name="_token" value="{{csrf_token()}}">
        {{-- @method('PUT') --}}
        <input type="hidden" name="_method" value="PUT">
    <div class="mb-3 w-50 ">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id='exampleInputName' name='Name' value="{{$emp->Name}}" >
    </div>

    <div class="mb-3 w-50">
        <label  class="form-label">Department </label>
        <select class="form-select" aria-label="Default select example" name="Department">
            <option selected>{{$emp->Department}}</option>
            <option value="Inormatique">Inormatique</option>
            <option value="Mathematique">Mathematique</option>
            <option value="Chimee">Chimee</option>
            <option value="Phesique">Phesique</option>
            <option value="Mi">MI</option>
            <option value="SM">SM</option>

        </select>

    </div>

    <div class="mb-3 w-50 ">
        <label for="exampleInputBirthDay" class="form-label">Salary</label>
        <input type="text" class="form-control" id='exampleInputBirthDay' name="Salary" value="{{$emp->Salary}}" >
    </div>

    
    
    <button type="submit" class="btn btn-danger">Submit</button>
</form>    
</div>
@endsection