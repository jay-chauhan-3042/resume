@extends('layout')

@section('activeComp')
    active
@endsection

@section('pageTitle')
    Mail
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Compose Message</strong></h3>
                </div>
                <form action="/api/reply" method="post">
                    @csrf
                    @method('POST')
                    <div class="card-body table-responsive">
                        <div class="form-group">
                            <input class="form-control" placeholder="To:"  type="text" name="email" value="{{ (isset($email) ? $email : "") }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Full name" type="text" name="name" value="{{ (isset($name) ? $name : "") }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Subject:" type="text" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea id="compose-textarea" class="form-control" style="height: 300px" name="message">
                        </textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
