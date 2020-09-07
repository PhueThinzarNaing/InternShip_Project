

@extends('layouts.dashboard')

@section('content')
<form action="{{ route('commodityexchanges.update',$commodityexchange->id) }}" method="POST" enctype="multipart/form-data">
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Commodity Exchange</h3>
            </div>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('commodityexchanges.index') }}"> Back</a>
            </div>
        </div>

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
    
    @method('PUT')
    
        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Name</label>
            <input type="text" class="form-control" name="cename" value="{{ $commodityexchange->ce_name }}" placeholder="Enter Commodity Exchange Name">
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Address</label>
            <input type="text" class="form-control" name="ceaddress" value="{{ $commodityexchange->ce_address }}" placeholder="Enter Commodity Exchange Address">
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 1</label>
            <input type="text" class="form-control" name="cephone1" value="{{ $commodityexchange->ce_phone1 }}" placeholder="Enter Commodity Exchange Phone 1">
            
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Phone 2</label>
            <input type="text" class="form-control" name="cephone2" value="{{ $commodityexchange->ce_phone2 }}" placeholder="Enter Commodity Exchange Phone 2">
            
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Email</label>
            <input type="text" class="form-control" name="ceemail" value="{{ $commodityexchange->ce_email }}" placeholder="Enter Commodity Exchange Email">
            
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Commodity Exchange Photo</label>
            <input type="file" class="form-control" name="photo" value="{{ $commodityexchange->ce_photopath }}">
            
        </div>
        

        <div class="col-md-12">
            <button class="btn btn-outline-secondary rounded-0 float-right" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Update Commodity Exchange
            </button>
        </div>
    </div>
</form>
@endsection