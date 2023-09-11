@extends('Layout.app')
@section('contnet')



<div class="container ">
    <form method="POST" action="{{route('Emploie.store')}}">
        @csrf
    <div class="mb-3 w-50 ">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id='exampleInputName' name='Name' >
    </div>

    @error('Name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3 w-50">
        <label  class="form-label">Department </label>
        <select class="form-select" aria-label="Default select example" name="Department">
            <option selected>Open this select menu</option>
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
        <input type="text" class="form-control" id='exampleInputBirthDay' name="Salary"  >
    </div>

    @error('Salary')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
    
    <button type="submit" class="btn btn-danger">Submit</button>
</form>    
</div>


@endsection