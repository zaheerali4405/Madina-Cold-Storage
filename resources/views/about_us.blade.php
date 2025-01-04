@extends('layouts.webpage')

@section('title') About Us @endsection

@section('content')

<div class="container pb-5">
    <div class="fs-1 text-center fw-bold py-5">ABOUT US</div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('/media/introduction.webp') }}" alt="intro" class="img-fluid">
        </div>
        <div class="col-md-6 pt-3">
            <div class="fs-3">INTRODUCTION</div>
            <p class="fs-5 text-muted" style="text-align: justify;">
                At Madina Cold Storage, we take pride in offering cutting-edge storage solutions specifically
                designed for fruits and vegetables. Our state-of-the-art facilities utilize advanced technology to
                ensure your produce stays fresh, retains its nutritional value, and remains market-ready for
                extended periods. Catering primarily to farmers and producers, our services help reduce post-harvest
                losses, increase profitability, and provide a reliable solution for seasonal and perishable goods.
            </p>
        </div>
    </div>
</div>

<div class="container_fluid bg-primary p-5">
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
</div>

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-6">
            <div class="fs-2 fw-bolder py-4 text-black">Why Choose Us?</div>
            <div class="row d-flex flex-column gy-4">
                <div class="col d-flex align-items-center">
                    <i class="fas fa-check-square fs-1 me-5"></i>
                    <div>
                        <div class="fs-5 fw-bold">Modern Technology</div>
                        <div class="text-muted fw-bold">Our facility uses cutting-edge cooling systems to ensure
                            consistent temperature and humidity levels to preserve freshness.</div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <i class="fas fa-check-square fs-1 me-5"></i>
                    <div>
                        <div class="fs-5 fw-bold">Affordable Pricing</div>
                        <div class="text-muted fw-bold">We provide cost-effective solutions, perfectly designed to
                            accommodate the needs of both small and large-scale farming operations.</div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <i class="fas fa-check-square fs-1 me-5"></i>
                    <div>
                        <div class="fs-5 fw-bold">Expert Support</div>
                        <div class="text-muted fw-bold">Our expert team is ready to guide and support you through
                            every step of the storage process efficiently.</div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <i class="fas fa-check-square fs-1 me-5"></i>
                    <div>
                        <div class="fs-5 fw-bold">Sustainability Focus</div>
                        <div class="text-muted fw-bold">By minimizing food waste, we strive to promote
                            sustainability, protect resources, and contribute positively to a greener future.</div>
                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <i class="fas fa-check-square fs-1 me-5"></i>
                    <div>
                        <div class="fs-5 fw-bold">Years of Excellence</div>
                        <div class="text-muted fw-bold">With years of proven excellence, we deliver unmatched
                            expertise, consistent quality, and a legacy of customer satisfaction.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <img src="{{ asset('/media/why_choose.webp') }}" style="max-height: 600px; width: 100%; border-radius: 5px;">
        </div>
    </div>
</div>

@endsection