@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">

        <div class="col-8 offset-2">
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label text-md-right">caption</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                           name="caption" value="{{ old('caption') }}" >


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <label for="image" class="form-control-file" id="image" name="image">Post Image</label>
        <input type="file" class="form-control-file" id="image" name="image">

        @error('image')

                                        <strong>{{ $message }}</strong>

        @enderror
    </div>
    <div class="row">
        <button class="btn btn-primary">add post </button>
    </div>
    </form>
</div>
@endsection
