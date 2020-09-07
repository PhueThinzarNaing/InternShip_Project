
@extends('layouts.dashboard')

@section('content')

<form action="{{route('categories.store')}}" method="POST"  enctype="multipart/form-data">
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
            <label>Category Name</label>
            <input type="text" class="form-control" name="ctname" placeholder="Enter Category Name">
            @error('ctname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Category Description</label>
            <input type="text" class="form-control" name="ctdescription" placeholder="Enter Category Description">
            @error('ctdescription')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-md-12 mb-4">
            <label>Select Commodity Exchange</label>
            <select name="commodity_id" class="form-control rounded-0" id="commodity_id">
                <option selected disabled>Choose Commodity Exchange</option>
                @foreach ($commodityexchanges as $commodityexchange)
                <option value="{{ $commodityexchange->id }}">
                    {{ $commodityexchange->ce_name }}
                </option>
                @endforeach
            </select>
        </div>

       
        

        <div class="col-md-12">
            <button class="btn btn-outline-secondary rounded-0 float-right" type="submit">
                <i class="fas fa-pencil-alt"></i>&nbsp;
                Create Category
            </button>
        </div>
    </div>
</form>
@endsection