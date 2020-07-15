@extends('layouts.app')

<div class="container">

    @section('content')

        @include('layouts.navigation')

        <form action="/home" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add Students</h1>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-form-label">Name</label>
                        <input id="name"
                               type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name"
                               autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
                        <button class="btn btn-primary">Add Students</button>
                    </div>
                </div>
            </div>
        </form>
    @endsection
</div>
