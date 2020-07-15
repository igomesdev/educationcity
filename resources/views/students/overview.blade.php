@extends('layouts.app')

@section('content')
    @include('layouts.navigation')
    <div class="container">
            <h1>Student Overview</h1>

       <table id="customers">
                <tr>
                    <th>Name</th>
                    <th>English</th>
                    <th>Science</th>
                    <th>Math</th>
                    <th>Average</th>
                </tr>

            @foreach($students as $student)
                <tr>
                    <td> {{ $student->name }}</td>
                    <td> {{ $student->english }}</td>
                    <td> {{ $student->science }}</td>
                    <td> {{ $student->math }}</td>
                    <td> {{ $student->average }}</td>
                </tr>
            @endforeach
       </table>
    </div>
@endsection
