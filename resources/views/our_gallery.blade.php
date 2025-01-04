@extends('layouts.webpage')

@section('title') Our Gallery @endsection

@section('content')
<div class="fs-1 fw-bold text-center py-5">OUR GALLERY</div>

<div class="container">
    <img class="border" src="{{ asset('/media/picture-1.jpg') }}" width="100%" height="600px" alt="Ad">
</div>
<div class="container pt-4">
    <div class="row">
        <div class="col-md-6"><img src="{{ asset('/media/picture-2.jpg') }}" width="100%" height="100%" alt=""></div>
        <div class="col-md-6"><img src="{{ asset('/media/picture-4.jpg') }}" width="100%" height="100%" alt=""></div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="row gy-5">

        <div class="col-md-12 d-flex justify-content-center">
            <video width="100%" height="500px" controls>
                <source src="{{ asset('media/video-2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-3.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-4.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-5.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-6.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-7.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-8.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <video height="500px" controls>
                <source src="{{ asset('media/video-9.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

<!-- <div class="container_fluid bg-primary p-5">
    <div class="row">
        <div class="col-md-6 text-light">
            <div class="fs-1 fw-bolder">INTRESTED IN FINDING OUT MORE?</div>
            <div class="fs-4 fw-bold">Speak to One of Our Expert Team Members</div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3 d-flex align-items-center">
            <a href="{{ route('contact_us') }}" class="btn bg-light fw-bold fs-5 px-5 py-3">Contact Us</a>
        </div>
    </div>
</div> -->


@endsection