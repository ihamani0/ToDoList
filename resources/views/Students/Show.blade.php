@extends('Layout.app')
@section('contnet')


        <div class="container mt-5  ">
            <div class="card" style="width: 30rem;">
                <div class="card-header fw-bold fs-5 p-3 mb-2 bg-success text-white">
                Student : 
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Full-Name : {{$student->Full_Name}} </li>
                <li class="list-group-item">Birth-Day : {{$student->Birthday}}</li>
                <li class="list-group-item">Department : {{$student->Department}}</li>
                <li class="list-group-item">Created : {{$student->created_at->format('Y-m-d')}}</li>
                </ul>
            </div>
        </div>

@endsection

