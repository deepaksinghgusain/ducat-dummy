@extends('layouts.master')

@section('title', 'Welcome to Ducat')

@section('end-head-tag')
    <!-- Event snippet for conversion 1920 conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-1015237940/WVZyCOS6p7QBELSajeQD'
        });
    </script>

    <script>
        var clickmagick_cmc = {
            uid: '159394',
            hid: '164906598',
            cmc_goal: 'a',
        }
    </script>
    <script src='//cdn.clkmc.com/cmc.js'></script>

@stop
@section('start-body-tag')
    <script>
        fbq('track', 'Lead');
    </script>
@stop
@section('main-container')

    <section id="breadCrumb">

        <div class="container">

            <div class="row">

                <div class="col-xl-12">

                    <a href="https://www.ducatindia.com/">Home</a> <i class="fas fa-angle-right mx-2"></i> <span>Thank you</span>

                </div> <!-- End of COl XL 12 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of Bread Crumb -->

    <section class="section-padding-small innerPageStyle">

        <div class="container">

            <div class="row">

                <div class="col-xl-8 mb-4">

                    <h1>Thank you</h1>

                </div> <!-- End of COL XL 8 -->

            </div> <!-- End of ROW -->

            <div class="row">

                <div class="col-xl-12">

                    <div class="testimonialsBox text-center p-5">

                        <h4>Thanks for the information</h4>
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('danger'))
                            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                        @endif
                        <h5 class="mb-3">We'll get back to you soon!</h5>

                        <a href="https://www.ducatindia.com/" class="buttonStyleOrange text-uppercase">Go Back to our homepage</a>

                    </div>

                </div> <!-- End of COL XL 12 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of Section -->
    <br><br><br>

@stop
