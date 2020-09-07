

@extends('layouts.dashboard')

@section('content')

<form action="{{route('commodityexchanges.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Name</label>
            <input type="text" class="form-control" name="cename" placeholder="Enter Commodity Exchange Name">
            @error('cename')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Address</label>
            <input type="text" class="form-control" name="ceaddress" placeholder="Enter Commodity Exchange Address">
            @error('ceaddress')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 1</label>
            <input type="text" class="form-control" name="cephone1" placeholder="Enter Commodity Exchange Phone 1">
            @error('cephone1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 2</label>
            <input type="text" class="form-control" name="cephone2" placeholder="Enter Commodity Exchange Phone 2">
            @error('cephone2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Email</label>
            <input type="text" class="form-control" name="ceemail" placeholder="Enter Commodity Exchange Email">
            @error('ceemail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Photo</label>
            <input type="file" class="form-control" name="photo" >
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div class="col-md-12">
            <button class="btn btn-outline-secondary rounded-0 float-right" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create Commodity Exchange
            </button>
        </div>
    </div>
</form>
@endsection