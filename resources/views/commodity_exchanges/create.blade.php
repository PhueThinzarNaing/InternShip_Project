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
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

       

        <div>
            <label>Address</label>
            <input type="text" class="form-control" name="address">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number1</label>
            <input type="number" class="form-control" name="phno1">
            @error('phno1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone Number2</label>
            <input type="number" class="form-control" name="phno2">
            @error('phno2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

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
       
    </div>
</form>
@endsection