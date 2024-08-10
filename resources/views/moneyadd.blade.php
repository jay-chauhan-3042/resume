@extends('layout')

@section('activeUpdPayment')
    active
@endsection

@section('pageTitle')
    Upload Payments
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Upload Bank Statement</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/api/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Bank</label>
                            <select class="form-control select2bs4" tabindex="1" name="bank">
                                <option value="" selected disabled>Select Bank Account</option>
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank->bankId }}">{{ $bank->bankName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" tabindex="2" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="bank_statement" tabindex="3">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
