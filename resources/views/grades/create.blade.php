@extends('layouts.app')

<div class="container">

    @section('content')

        @include('layouts.navigation')

        <form action="/grade/testoverview" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add Grades </h1>
                    </div>

                    <div class="form-group row">
                        <label for="test_id" class="col-form-label">Test ID</label>
                        <input id="test_id"
                               type="text"
                               class="form-control @error('test_id') is-invalid @enderror"
                               name="test_id"
                               autocomplete="test_id" autofocus>
                        @error('test_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="student_id" class="col-form-label row">Student ID</label>
                    <select id="student_id"
                            name="student_id"
                            class="form-group row">
                        @foreach ($students as $studentId)
                            <option>{{ $studentId->id }}</option>
                        @endforeach
                    </select>

                    <div class="form-group row">
                        <label for="english" class="col-form-label">English</label>
                        <input id="english"
                               class="form-control"
                               name="english"
                               autocomplete="english" autofocus>
                        @error('english')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="science" class="col-form-label">Science</label>
                        <input id="science"
                               class="form-control"
                               name="science"
                               autocomplete="science" autofocus>
                        @error('science')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="math" class="col-form-label">Math</label>
                        <input id="math"
                               class="form-control @error('maths') is-invalid @enderror"
                               name="math"
                               autocomplete="math" autofocus>
                        @error('math')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Add Grades</button>
                    </div>
                </div>
            </div>
        </form>
    @endsection
</div>
