@extends('layouts.app')

@section('content')
    @include('layouts.navigation')
    <div class="container">
        <h1>Test Overview</h1>

        <table id="customers">
            <tr>
                <th>Test ID</th>
                <th>Student ID</th>
                <th>English</th>
                <th>Math</th>
                <th>Science</th>
            </tr>

            @foreach($grades as $grade)
                <tr>
                    <td> {{ $grade->test_id }}</td>
                    <td> {{ $grade->student_id }}</td>
                    <td> {{ $grade->english }}</td>
                    <td> {{ $grade->math }}</td>
                    <td> {{ $grade->science }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
