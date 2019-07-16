@extends('layouts.title', ['title' => 'Kontakt'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
    <style>
        body{ margin:0}
    </style>
<section class="bg-kontakt text-center">
    <div class="container">
        <!--Section: Contact v.2-->
        <section class="mb-4 text-white">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">{{ __('Contact us') }}</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">{{ __('Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.') }}</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">{{ __('Your name') }}</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">{{ __('Your email') }}</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">{{ __('Subject') }}</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">{{ __('Your message') }}</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">{{ __('Send') }}</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="glyphicon glyphicon-map-marker gi-2x"></i>
                            <p>Włocławek, Polska</p>
                        </li>

                        <li><i class="glyphicon glyphicon-phone gi-2x"></i>
                            <p>693065426</p>
                        </li>

                        <li><i class="glyphicon glyphicon-envelope gi-2x"></i>
                            <p>marcin9201@o2.pl</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
</section>
@endsection