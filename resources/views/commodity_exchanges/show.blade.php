@extends('layouts.dashboard')

@section('content')
    <div class="row" style="margin-top:20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Commodity Exchange</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('commodityexchanges.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange ID:</strong>
                {{ $commodityexchange->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Name:</strong>
                {{ $commodityexchange->ce_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Address:</strong>
                {{ $commodityexchange->ce_address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Phone 1:</strong>
                {{ $commodityexchange->ce_phone1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Phone 2:</strong>
                {{ $commodityexchange->ce_phone2 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Email:</strong>
                {{ $commodityexchange->ce_email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Commodity Exchange Photo:</strong>
                <img src="{{asset('/uploads/'.$commodityexchange->ce_photopath)}}" width="80" height="80"/>
            </div>
        </div>
       
    </div>
    @endsection