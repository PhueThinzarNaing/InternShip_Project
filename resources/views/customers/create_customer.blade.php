@extends('layouts.dashboard')

@section('content')
<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-6 mb-2">
            <label>Customer Name</label>
            <input type="text" class="form-control" name="customer_name">
            @error('customer_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

       

        <div class="form-group col-md-6 mb-2">
            <label>Phone Number1</label>
            <input type="number" class="form-control" name="customer_phno1">
            @error('customer_phno1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-2">
            <label>Phone Number2</label>
            <input type="number" class="form-control" name="customer_phno2">
            @error('customer_phno2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-2">
            <label>Email</label>
            <input type="email" class="form-control" name="customer_email">
            @error('customer_email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6 mb-2">
            <label>Address</label>
            <input type="text" class="form-control" name="customer_address">
            @error('customer_address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-2">
            <label>Bank Account</label>
            <input type="text" class="form-control" name="customer_bankacc">
            @error('customer_bankacc')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
      
        <div class="col-md-12">
            <button class="btn btn-outline-secondary rounded-0 float-right" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create
            </button>
        </div>
    </div>
</form>
@endsection