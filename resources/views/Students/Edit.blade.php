@extends('Layout.app')
@section('contnet')
<div class="container">
    <div class="container mt-3">
        <form method="POST" action="{{ route('Student.update' , ['Student' => $Student->id] ) }}">
            @csrf
            @method('PUT')
        <div class="mb-3 w-50 ">
        <label for="exampleInputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id='exampleInputName' name='Full_Name' value="{{$Student->Full_Name}}" >
        </div>

        <div class="mb-3 w-50">
            <label  class="form-label">Department  :  {{$Student->Department}} </label>
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
            <label for="exampleInputBirthDay" class="form-label">Birthe-Day</label>
            <input type="text" class="form-control" id='exampleInputBirthDay' name="Birthe_Day" value="{{$Student->Birthday}}" >
        </div>

        <div class="mb-3 w-50 ">
            
            @if ($Student->Gender == 'Male')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1" value="Male" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault2" checked value="Female">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            @else
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1" value="Male" >
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault2" checked value="Female" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
            @endif
            

        </div>
        
        <button type="submit" class="btn btn-success ">Update</button>
    </form>    
</div>
</div>
@endsection