@extends('layouts.webpage')

@section('title') Our Services @endsection

@section('content')
<div class="container pb-5">
    <div class="fs-1 fw-bold text-center py-5">OUR SERVICES</div>
    <div class="row g-5">
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body text-center">
                    <i class="fas fa-clock fs-1"></i>
                    <div class="fs-3 text-center my-2">Long-Term Storage</div>
                    <div class="fs-5" style="text-align: justify;">Ensure the freshness and quality of your fruits
                        and vegetables for months with our advanced temperature-controlled storage. Designed
                        to maintain the ideal environment, our services help reduce spoilage, extend shelf life, and
                        preserve the natural flavor of your produce.</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body text-center">
                    <i class="fas fa-shield-alt fs-1"></i>
                    <div class="fs-3 text-center my-2">Secure Facility</div>
                    <div class="fs-5" style="text-align: justify;">Our storage units are designed with advanced
                        security systems, including 24/7 surveillance and controlled access protocols, to ensure the
                        complete
                        safety of your harvest. From arrival to departure, we prioritize protecting your valuable
                        produce
                        at all the times.</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fs-1"></i>
                    <div class="fs-3 text-center my-2">Flexible Plans</div>
                    <div class="fs-5" style="text-align: justify;">Choose from a range of flexible storage durations
                        and packages tailored to your needs. Whether you require a short-term solution for seasonal
                        produce or a long-term arrangement for extended preservation, we offer customized options to
                        suit your
                        requirements perfectly.</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-3">
                <div class="card-body text-center">
                    <i class="fas fa-truck fs-1"></i>
                    <div class="fs-3 text-center my-2">Transportation Assistance</div>
                    <div class="fs-5" style="text-align: justify;">We provide seamless transportation assistance,
                        offering convenient pick-up and delivery services to ensure your produce reaches our
                        facility
                        efficiently. Our reliable logistics solutions simplify the process, saving you time and
                        effort while maintaining the quality of your goods.</div>
                </div>
            </div>
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