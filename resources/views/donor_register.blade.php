@extends('layouts.layout')

@section('title','Donor Registration')

@section('content')

<div class="row">
    <div class="mx-auto col-lg-6">
        <div class="card card-body">
            <h4 class="text-center mb-4">Blood Donor Registration</h4>
            <form action="{{ route('donor_register_store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <input name="name" class="col form-control" type="text" placeholder="Name">
                    </div>
                    <div class="col">
                        <input name="age" class="col form-control" type="text" placeholder="Age">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input name="phone_number" class="col form-control" type="text" placeholder="Phone Number">
                    </div>
                    <div class="col">
                        <select name="blood_group"  class="col form-control">
                            <option>Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col">
                        <input name="email" class="col form-control" type="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <input name="address" class="col form-control" type="text" placeholder="Address">
                    </div>
                </div>


                <button class="btn btn-primary " type="submit">Register</button>

            </form>
        </div>
    </div>
</div>

@endsection
