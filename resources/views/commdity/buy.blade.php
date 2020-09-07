@extends('layouts.dashboard')

@section('title', 'Commdity | Buy table')



@section('content')
<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-9 mb-4">
            <label>Select Your Commodity Exchange</label>
            <select name="question_id" class="form-control rounded-0" id="quiz_id">
                <option selected disabled>Choose Your Commodity Exchange</option>
               
            </select>
        </div>

        <div class="form-group col-md-9 mb-4">
            <label>Customer Name</label>
           
                
                <input type="text" class="form-control" name="opt_a">
            
        </div>

        <div class="form-group col-md-9 mb-4">
            <label>Item Name</label>
            
                <input type="text" class="form-control" name="opt_b">
            
        </div>

        <div class="form-group col-md-9 mb-4">
            <label>Weight</label>
            
                <input type="text" class="form-control" name="opt_c">
            
        </div>

        <div class="form-group col-md-9 mb-4">
            <label>Price</label>
            
                <input type="text" class="form-control" name="opt_d">
            
        </div>
        <div class="form-group col-md-9 mb-4">
            <label>Date</label>
            
                <input type="date" class="form-control" name="opt_c">
            
        </div>

        

        <div class="col-md-12">
            <button class="btn btn-outline-secondary rounded-0 float-left" type="submit">
<!--<i class="fas fa-pencil-alt"></i>&nbsp;-->
                Create
            </button>
        </div>
    </div>
</form>
@endsection