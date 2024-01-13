<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Novena- Health & Care Medical template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('plugins/icofont/icofont.min.css')}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body id="top">

<header>

    @include('frontend.common.navbar')
</header>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                    <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                    <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                        aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                    <div class="btn-container ">
                        <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make
                            appoinment <i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family
                            medicine.</p>
                        <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emegency Cases</span>
                        <h4 class="mb-3">1-800-700-6200</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get
                            Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="images/about/img-1.jpg" alt="" class="img-fluid">
                    <img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="images/about/img-3.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Personal care <br>& healthy living</h2>
                    <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum
                        officia dolores repellat laudantium obcaecati neque.</p>

                    <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our services</span>
                    <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section service-2">
    <h2></h2>
    <div class="container">


            <div class="row">
				@forelse($specifications as $spec)

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-block mb-5">
                        <img src="images/service/service-1.jpg" alt="" class="img-fluid">
                        <div class="content">
							<h2>{{$spec->specification}}    </h2>
                            <h4 class="mt-4 mb-2 title-color">Child care</h4>
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
				@empty

				@endforelse
            </div>



    </div>
</section>

<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-laboratory text-lg"></i>
                        <h4 class="mt-3 mb-3">Laboratory services</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-heart-beat-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Heart Disease</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-tooth text-lg"></i>
                        <h4 class="mt-3 mb-3">Dental Care</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-crutch text-lg"></i>
                        <h4 class="mt-3 mb-3">Body Surgery</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-brain-alt text-lg"></i>
                        <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-dna-alt-1 text-lg"></i>
                        <h4 class="mt-3 mb-3">Gynecology</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section appoinment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ">
                <div class="appoinment-content">
                    <img src="images/about/img-3.jpg" alt="" class="img-fluid">
                    <div class="emergency">
                        <h2 class="text-lg"><i
                                    class="icofont-phone-circle text-lg"></i>{{ $_SESSION['setting']->phone ? $_SESSION['setting']->phone :'' }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 ">
                <div class="appoinment-wrap mt-5 mt-lg-0">
                    <h2 class="mb-2 title-color">Book appoinment</h2>
                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit
                        . Iste dolorum atque similique praesentium soluta.</p>
                    <form id="#" class="appoinment-form" method="post" action="{{ route('appointment.save') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="specificationList" name="specification">

                                        @forelse($specifications as $specification)
                                            <option value="{{ $specification->id }}">{{ $specification->specification }}</option>
                                        @empty
                                        @endforelse

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="doctorsList" name="doctor_id">
                                        <option>--Select--</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="text" class="form-control"
                                           placeholder="YYYY-MM-DD">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="specificationList" name="userid">
                                        <option value="{{ auth()->user()->id }}">{{Illuminate\Support\Facades\Auth::check() ? Illuminate\Support\Facades\Auth::user()->name: 'Please Login first'}}</option>


                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6"
                                      placeholder="Your Message"></textarea>
                        </div>

                        <button type=submit btn-primary>Make Appoinment</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- footer Start -->
@include('frontend.common.footer')



<!--
    Essential Scripts
    =====================================-->


<!-- Main jQuery -->
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4.3.2 -->
<script src="{{asset('plugins/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.easing.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('plugins/counterup/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>
<script src="{[asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
<!-- Google Map -->
<script src="{{asset('plugins/google-map/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#specificationList").change(function () {

            $.ajax({
                url: "{{ route('doctors.list') }}",
                data: {'id': $('#specificationList').val()},
                success: function (result) {
                    $('#doctorsList').empty().html(result.doctors)
                }
            });
        });
    });
</script>

</body>
</html>
   