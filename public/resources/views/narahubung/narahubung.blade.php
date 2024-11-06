@extends('template')

@section('title')
    Contact Me
@endsection

@section('konten')
    <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Contact me</h1>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 justify-content-md-between">
                <div class="col-md-6">
                    <h2>I am here to answer any questions you may have</h2>
                    <p style="max-width: 450px;">Tell me everything about your problem, I'll be glad to help. Fill
                        out the form, or if you prefer send us an email.</p>
                    <address class="contact-info">
                        <p class="h4">P:&nbsp;<a class="link-default" href="tel:#">+1 (256) 1087 000</a></p><a
                            class="link-default mt-0 text-decoration-underline" href="mailto:#">mail@demolink.org</a>
                        <p class="offset-top-5">3828 Fincham Road<br>
                            Los Angeles, CA<br>
                            California 90017
                        </p>
                    </address>
                    <div class="unit unit-spacing-sm text-secondary align-items-center">
                        <div class="unit-left"><span class="icon icon-sm icomoon-marker"></span></div>
                        <div class="unit-right"><a class="small" href="#" data-bs-toggle="modal"
                                data-bs-target="#map">Show on a map</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Get in touch</h2>
                    <form class="rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <label class="form-label-outside" for="feedback-2-first-name">Name*</label>
                        <div class="form-wrap">
                            <input class="form-input" id="feedback-2-first-name" type="text" name="first-name"
                                data-constraints="">
                            <label class="form-label" for="feedback-2-first-name">Write your name here</label>
                        </div>
                        <label class="form-label-outside" for="feedback-2-first-name">Email*</label>
                        <div class="form-wrap">
                            <input class="form-input" id="feedback-2-email" type="email" name="email"
                                data-constraints="">
                            <label class="form-label" for="feedback-2-email">Let me know how to contact you</label>
                        </div>
                        <label class="form-label-outside" for="feedback-2-first-name">Comment*</label>
                        <div class="form-wrap">
                            <textarea class="form-input" id="feedback-2-message" name="message" data-constraints=""></textarea>
                            <label class="form-label" for="feedback-2-message">What would you like to tell?</label>
                        </div>
                        <div class="form-wrap">
                            <label class="checkbox-inline small">
                                <input class="checkbox-custom" type="checkbox"> I agree to the <a
                                    class="link-secondary text-decoration-underline" href="privacy-policy.html">Privacy
                                    Policy</a> and <a class="link-secondary text-decoration-underline"
                                    href="privacy-policy.html">Terms of Use</a>, and want to receive news
                            </label>
                        </div>
                        <button class="btn btn-nero" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
