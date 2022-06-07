@extends('layouts.layout')

@section('title','Blood Bank | Blood Donation')

@section('content')

<h4 class="text-center mb-4">Blood Bank</h4>
<div class="row">

    <div class=" col m-2">
        <div class="card-body">
        <h4 class="text-center mb-4">Donor Lists</h4>
            @if($donors)
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Group</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($donors as $donor)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $donor->name??null }}</td>
                        <td>{{ $donor->blood_group??null }}</td>
                        <td>{{ $donor->phone_number??null }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#ViewDonorModal_{{ $donor->id }}"> View
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="ViewDonorModal_{{ $donor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Person Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">

                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Name : <span class="">{{ $donor->name }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Age : <span class="">{{ $donor->age }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Phone Number : <span class="">{{ $donor->phone_number }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Blood Group: <span class="">{{ $donor->blood_group }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Email: <span class="">{{ $donor->email }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Address: <span class="">{{ $donor->address }}</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                    @else
                        <p>No Donator Information.</p>
                    @endif
                  </table>
        </div>
    </div>

    <div class=" col m-2">
        <div class="card-body">
        <h4 class="text-center mb-4">Available Blood Groups</h4>


        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A+
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A-
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              B+
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              B-
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              AB+
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              AB-
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              O+
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              O-
              <span class="badge badge-primary badge-pill">1</span>
            </li>
        </ul>

        <a href="" class="btn btn-sm btn-primary mt-3">Request for blood</a>

        </div>
    </div>

</div>
{{-- {{ $donors }} --}}
@endsection
