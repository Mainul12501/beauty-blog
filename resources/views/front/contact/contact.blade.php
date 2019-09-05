@extends('front.master')

@section('title')
    Beauty Blog | Contact
@endsection

@section('ptitle')
    Home
@endsection

@section('atitle')
    Contact Us
@endsection

@section('body')
    <!-- contact -->
    <section class="wthree-row w3-contact" id="contact">
        <div class="container py-sm-5 py-4">
            <!-- contact details -->
            <div class="row contact-form">
                <!-- contact left grid -->
                <div class="col-lg-6 map contact-right">
                    <div class="mx-auto">
                        <h3 class="mb-3 w3f_title my-sm-3">Contact Us</h3>
                        <div class="row fv3-contact pt-lg-5 pt-3">
                            <div class="col-sm-2">
                                <span class="fas fa-envelope-open"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <p>
                                    <a href="mailto:example@email.com" class="text-dark">info@example.com</a>
                                </p>
                                <p>
                                    <a href="mailto:example@email.com" class="text-dark">info@example.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="row fv3-contact my-4">
                            <div class="col-sm-2">
                                <span class="fas fa-phone-volume"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <p>+456 123 7890</p>
                                <p>+456 123 7890</p>
                            </div>
                        </div>
                        <div class="row fv3-contact">
                            <div class="col-sm-2">
                                <span class="fas fa-home"></span>
                            </div>
                            <div class="col-sm-10 mt-sm-0 mt-4">
                                <address>71 Pilgrim Avenue ,44 Shirley Ave,
                                    <br>Broome St, California.</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h3 class="my-3 w3f_title">send us a message</h3>
                        <form action="{{ route('contact-message') }}" method="post" class="f-color pt-3">
                            @csrf
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" id="contactusername" name="name" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" id="contactemail" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" id="contactcomment" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //contact details  -->
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map px-2 pb-lg-0 pb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                allowfullscreen></iframe>
    </div>
    <!--// map-->
@endsection
