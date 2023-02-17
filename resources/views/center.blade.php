<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <title>{{ $data->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $data->meta_description }}">
    <meta name="keywords" content="{{ $data->meta_keywords }}">


    <meta name="robots" content="index, follow" />
    <meta name="coverage" content="Worldwide" />
    <meta name="country" content="India" />

    <meta name="DC.title" content="Ducat India" />
    <meta name="geo.region" content="IN-UP" />
    <meta name="geo.placename" content="Noida" />
    <meta name="geo.position" content="28.577861;77.315091" />
    <meta name="ICBM" content="28.577861, 77.315091" />

    <meta name="Revisit-after" content="1 Days" />
    <meta name="Language" content="English" />
    <meta name="Publisher" content="Ducat India" />
    <meta name="Robots" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="allow-search" content="yes" />
    <meta name="Rating" content="General" />
    <meta name="robots" content="noodp" />
    <meta name="googlebot" content="noodp" />
    <meta name="slurp" content="noydir" />
    <meta name="msnbot" content="noodp" />
    <meta name="robots" content="noodp,noydir" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    {!! $data->meta_section !!}
    {!! $data->head_css !!}
    {!! $data->head_js !!}
</head>

<body>

    <header>

        <div class="container">

            <div class="row">

                <div class="col-xl-12">

                    <div id="innerHeader">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-md-2">
                                <img src="{{ asset('images/logo.png') }}" alt="Ducat" class="img-fluid"
                                    width="150">
                            </div> <!-- End of COL XL 2 -->

                            <div class="col-xl-10 col-md-10 text-md-end">
                                <h6 class="mb-0">Get Best Placements in Big IT firms</h6>
                            </div> <!-- End of COL XL 10 -->
                        </div>
                    </div>

                </div> <!-- End of COL XL 2 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </header> <!-- End of HEADER -->

    <section id="hero">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-10">
                    <h1 class="text-center">Don't Just Choose a Course Hand-Pick a Career Call : <a
                            href="tel:+917070905090">70-70-90-50-90</a></h1>
                    <div class="formWrapper mt-lg-5">

                        <h2 class="text-center">Now is The Time</h2>
                        <p class="text-center">Our Experts Team of career specialist will Guide you, fill your details
                            below.</p>
                        <form action="{{ route('center.query') }}" method="post">
                            @csrf
                            <input name="custom" type="hidden" value="ducat" />
                            <input type="text" name="name" placeholder="Your Name">

                            <input type="tel" name="contactNumber" placeholder="Contact Number" required
                                pattern="\d{10}">
                            <input type="email" name="email" placeholder="Email" required>
                            <select name="course" required>
                                <option value="">Course Looking for!</option>
                                @include('api-course')
                            </select>
                            <select name="branch" id="branch_data">
                                <option value="">Select Branch!</option>
                                @include('branch')
                            </select>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <button type="submit">Request a Callback</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-4 col-md-5">

                    <div class="row align-items-center">
                        <div class="col-xl-3 col-3">
                            <img src="{{ asset('images/training.png') }}" alt="training" class="img-fluid">
                        </div>
                        <div class="col-xl-9 col-9">
                            <h5 class="text-white">Enjoy a one-on-one personalized Training</h5>
                            <p class="mb-4 mb-md-0 text-white">Choose from 180+ dedicated placement oriented courses.
                                Learn from the best in the IT training industry.</p>
                        </div>
                    </div>

                </div> <!-- End of COL XL 4 -->

                <div class="col-xl-4 col-md-5">

                    <div class="row align-items-center">
                        <div class="col-xl-3 col-3">
                            <img src="{{ asset('images/career.png') }}" alt="career" class="img-fluid">
                        </div>
                        <div class="col-xl-9 col-9">
                            <h5 class="text-white">Designed for your Career and Placements</h5>
                            <p class="mb-0 text-white">You Choose your placement company, more than 800+ recruiters and
                                180+ faculties to train you for placements.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="options" class="sectionPadding">

        <div class="container">

            <div class="row justify-content-between text-center">

                <div class="col-xl-4 col-md-4">

                    <img src="{{ asset('images/workshops.jpg') }}" alt="Workshops @colleges"
                        class="img-fluid rounded-circle mb-3 border border-5">

                    <h4>Workshops @Colleges</h4>
                    <p class="mb-4 mb-md-0">These face-to-face workshops bring student the latest developments, tools
                        and resources.</p>

                </div> <!-- End of COL XL 4 -->

                <div class="col-xl-4 col-md-4">

                    <img src="{{ asset('images/placement-cell.jpg') }}" alt="Our Placements Cell"
                        class="img-fluid rounded-circle mb-3 border border-5">

                    <h4>Our Placements Cell</h4>
                    <p class="mb-4 mb-md-0">Ducat is a very big training institute which has multiple training centers
                        all around India.</p>

                </div> <!-- End of COL XL 4 -->

                <div class="col-xl-4 col-md-4">

                    <img src="{{ asset('images/workshops-at-ducat.jpg') }}" alt="Workshop @Ducat"
                        class="img-fluid rounded-circle mb-3 border border-5">

                    <h4>Workshop @Ducat</h4>
                    <p class="mb-0">Ducat brings you the latest development technology, tools and resources to help
                        you to achive your Goal!</p>

                </div> <!-- End of COL XL 4 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of OPTIONS -->

    <section id="stats" class="sectionPadding bg-light bgPattern">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-5 col-md-6">

                    <div class="row align-items-center">
                        <div class="col-xl-3 col-3">
                            <img src="{{ asset('images/placed.png') }}" alt="placed" class="img-fluid">
                        </div>
                        <div class="col-xl-9 col-9">
                            <h5>Over 3,00,000+ Students Placed</h5>
                            <p class="mb-4 mb-md-0">More than 3L+ Students placed till date. we have 800+ recruiters on
                                Ducat placement cell, with average package of more than 8LPA. Learn more about our
                                placements call today and talk to our career specialist.</p>
                        </div>
                    </div>

                </div> <!-- End of COL XL 5 -->

                <div class="col-xl-5 col-md-6">

                    <div class="row align-items-center">
                        <div class="col-xl-3 col-3">
                            <img src="{{ asset('images/record.png') }}" alt="record" class="img-fluid">
                        </div>
                        <div class="col-xl-9 col-9">
                            <h5>A Proven Track Record</h5>
                            <p class="mb-0">Learn from the best in industry trainers, more than 150+ trainers waiting
                                to shape your career path as per your dream company. let get started with your career
                                journey call now and talk to our career expert.</p>
                        </div>
                    </div>

                </div> <!-- End of COL XL 5 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of STATS -->

    <section id="testimonials" class="sectionPadding">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-5 col-md-6">

                    <blockquote class="blockquoteDucat">
                        <p>Best training institute with good faculty members. best for digital marketing courses.</p>
                        <div class="row align-items-center">
                            <div class="col-xl-2">
                                <img src="{{ asset('images/vinita.png') }}" alt="vinita"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="col-xl-10">
                                <h6 class="mb-0">Vinita Rawat</h6>
                            </div>
                        </div>
                    </blockquote>

                </div> <!-- End of COL XL 5 -->

                <div class="col-xl-5 col-md-6">

                    <blockquote class="blockquoteDucat">
                        <p>Ducat is one of the best training institute. With highly experienced faculty. Best Learning
                            resources And friendly learning environment.</p>
                        <div class="row align-items-center">
                            <div class="col-xl-2">
                                <img src="{{ asset('images/harshit.png') }}" alt="Harshit"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="col-xl-10">
                                <h6 class="mb-0">Harshit Srivastava</h6>
                            </div>
                        </div>
                    </blockquote>

                </div> <!-- End of COL XL 5 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of TESTIMONIALS -->

    <footer class="text-center py-3 bg-light">
        <p class="mb-0">Copyright &copy; 2022 DucatIndia.com. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $("#branch_data").html("<option value='{{ $data->branch }}'>{{ $data->branch }}</option>");
    </script>
    {!! $data->footer_css !!}

    {!! $data->footer_js !!}
</body>

</html>
