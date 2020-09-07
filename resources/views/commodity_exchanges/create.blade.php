<<<<<<< HEAD
@extends('layouts.dashboard')

@section('content')
<h2 style="text-align:center">Create Commodity_Exchange</h2>

<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="form-group col-md-3"></div>
        
        <div class="form-group col-md-6 mb-2">
        <div>
            <label>Commodity_Exchange</label>
            <input type="text" class="form-control" name="ce_name">
            @error('ce_name')
=======


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
>>>>>>> master
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

<<<<<<< HEAD
       

        <div>
            <label>Address</label>
            <input type="text" class="form-control" name="address">
            @error('address')
=======
        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Address</label>
            <input type="text" class="form-control" name="ceaddress" placeholder="Enter Commodity Exchange Address">
            @error('ceaddress')
>>>>>>> master
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

<<<<<<< HEAD
        <div>
            <label>Phone Number1</label>
            <input type="number" class="form-control" name="phno1">
            @error('phno1')
=======
        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 1</label>
            <input type="text" class="form-control" name="cephone1" placeholder="Enter Commodity Exchange Phone 1">
            @error('cephone1')
>>>>>>> master
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

<<<<<<< HEAD
        <div>
            <label>Phone Number2</label>
            <input type="number" class="form-control" name="phno2">
            @error('phno2')
=======
        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 2</label>
            <input type="text" class="form-control" name="cephone2" placeholder="Enter Commodity Exchange Phone 2">
            @error('cephone2')
>>>>>>> master
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

<<<<<<< HEAD
        <div>
            <label>Email</label>
            <input type="text" class="form-control" name="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div>
            <label>Image</label>
            <input type="file" class="form-control" name="Image">
            @error('Image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-outline-secondary rounded-0 mt-4" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create
            </button>
        </div>
        </div>
       <div class="col-md-3"></div>
       
=======
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
>>>>>>> master
    </div>
</form>
@endsection