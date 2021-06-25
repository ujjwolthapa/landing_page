@extends('layouts.app')
@section('form')
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                <form action="{{route('send.mails')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><input type="submit" value="send message" /></div>
                </form>
                </div>
    
            </div>
    </div>
@endsection