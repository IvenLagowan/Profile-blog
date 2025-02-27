@extends('homepage.layouts.main')

@section('container')
{{-- Hero --}}
@include('homepage.hero.contact')

<section class="container">
    <div class="row justify-content-center">
        <div class="contact">
            <div class="work-box">
                <div class="row text-align-enter">
                    <h1 data-aos="fade-up" data-aos-delay="100" class="text-center"
                        style="font-size: 28px; font-family: 'Arial Narrow bold'; text-transform: uppercase;">
                        Contact Us
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="row gy-4">
                            <div class="col-lg-10">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-map" style="color: red;"></i>
                                    <p style="font-size: 16px; font-family: 'Arial Narrow bold'; text-transform: uppercase;">
                                        <strong>Our Address</strong>
                                    </p>
                                    <p>Jl. 45 Taktakan Serang Banten, Indonesia</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-lg-10">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-envelope" style="color: red;"></i>
                                    <p style="font-size: 16px; font-family: 'Arial Narrow bold'; text-transform: uppercase;">
                                        <strong>Email Us</strong>
                                    </p>
                                    <p>andromind@example.com</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-lg-10">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-telephone" style="color: red;"></i>
                                    <p style="font-size: 16px; font-family: 'Arial Narrow bold'; text-transform: uppercase;">
                                        <strong>Call Us</strong>
                                    </p>
                                    <p>+62 123 4567 890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31735.42430264896!2d106.08497686002822!3d-6.1403694251279095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418a15267810ad%3A0x1ad3954deed6e1c!2sTPSA%20Cilowong!5e0!3m2!1sid!2sid!4v1663550190239!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
