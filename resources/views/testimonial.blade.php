@extends('layout')

@section('activeTestimonial')
    active
@endsection

@section('pageTitle')
    Add Testimonial
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New Testimonial</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/api/addTestimonial" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name"
                                tabindex="1" name="name">
                        </div>
                        <div class="form-group">
                            <label>Descreption</label>
                            <textarea name="descreption" class="form-control" placeholder="Enter Descreption" rows="5" tabindex="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Select Image</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="radio" name="image" id="image1" tabindex="3" value="/assets/images/avatar-1.png">
                                    <label for="image1">
                                        <img src="/assets/images/avatar-1.png" alt="image1-male">
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="image" id="image2" tabindex="4" value="/assets/images/avatar-2.png">
                                    <label for="image2">
                                        <img src="/assets/images/avatar-2.png" alt="image2-female">
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="image" id="image3" tabindex="5" value="/assets/images/avatar-3.png">
                                    <label for="image3">
                                        <img src="/assets/images/avatar-3.png" alt="image3-female">
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="image" id="image4" tabindex="6" value="/assets/images/avatar-4.png">
                                    <label for="image4">
                                        <img src="/assets/images/avatar-4.png" alt="image4-male">
                                    </label>
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
