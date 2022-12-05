@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('permissions.alerts') }}">
                    @csrf
                    <div class="card-header header-elements-inline">
                        <h4 class="card-title"><i class="icon-stack4 mr-2"></i> Email Notifications</h4>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">


                        <div class="row pb-3">
                            <div class="col-md-6">
                                <div class="form-group col-md-12">
                                    <label class="text-bold">Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email"
                                        value="{{ old('email') }}" required />
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-dark">Save Email</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>Email Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emails as $email)
                                    <tr>
                                        <td>{{ $email->email }}</td>
                                        <td>
                                            <form action="{{ route('permissions.alerts.delete') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $email->id }}">
                                                <button class="btn btn-danger btn-sm">Delete</button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
