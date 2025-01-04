@extends('layouts.webpage')

@section('title') Contact Us @endsection

@section('content')

<div class="container pb-5">
    <div class="fs-1 fw-bold text-center py-5">GET IN TOUCH WITH US</div>
    <div class="row gx-5">
        <div class="col-md-6">
            <div class="card shadow p-3 bg-white">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" placeholder="Please Enter Your Name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number:</label>
                        <input type="phone" class="form-control" placeholder="Please Enter Your Phone"
                            aria-label="Last name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="Please Enter Your Email"
                            aria-label="Last name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Subject:</label>
                        <input type="text" class="form-control" placeholder="Please Enter Subject"
                            aria-label="Last name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Message:</label>
                        <textarea name="" class="form-control" placeholder="Please Enter Your Message" cols="65"
                            rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-4">SUBMIT</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 d-flex p-3 align-items-center">
                    <i class="fas fa-phone fs-2 me-4 text-primary"></i>
                    <div>
                        <div class="fs-5 fw-bold">Phone</div>
                        <div class="text-muted fw-bold">Hafiz Muhammad Ishaq</div>
                        <div class="text-muted fw-bold">0300 9448265</div>
                    </div>
                </div>
                <div class="col-md-6 d-flex p-3 align-items-center">
                    <i class="fas fa-phone fs-2 me-4 text-primary"></i>
                    <div>
                        <div class="fs-5 fw-bold">Phone</div>
                        <div class="text-muted fw-bold">Wajih Ul Hassan Khan</div>
                        <div class="text-muted fw-bold">0323 4328790</div>
                    </div>
                </div>
                <div class="col-md-6 d-flex p-3 align-items-center">
                    <i class="fas fa-phone fs-2 me-4 text-primary"></i>
                    <div>
                        <div class="fs-5 fw-bold">Phone</div>
                        <div class="text-muted fw-bold">Mian Muhammad Usman</div>
                        <div class="text-muted fw-bold">0320 0486117</div>
                    </div>
                </div>
                <div class="col-md-6 d-flex p-3 align-items-center">
                    <i class="fas fa-envelope fs-2 me-4 text-primary"></i>
                    <div>
                        <div class="fs-5 fw-bold">Email</div>
                        <div class="text-muted fw-bold">admin@madinacoldstorage.com</div>
                        <div class="text-muted fw-bold">info@madinacoldstorage.com</div>
                    </div>
                </div>
                <div class="col-md-6 d-flex p-3 align-items-center">
                    <i class="fas fa-location-arrow fs-2 me-4 text-primary"></i>
                    <div>
                        <div class="fs-5 fw-bold">Office Address</div>
                        <div class="text-muted fw-bold">1.5 KM Ganda Singh Wala Road, Kasur Pakistan</div>
                    </div>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.68496837673!2d74.47753201059331!3d31.090688874306853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919b920eb6dc7bd%3A0x7e906a94aa355689!2sShiraz%20Cold%20Storage!5e0!3m2!1sen!2s!4v1733922108075!5m2!1sen!2s"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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