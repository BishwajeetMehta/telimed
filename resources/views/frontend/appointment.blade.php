<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title> HealthCare & TeliMedicine </title>

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



<section class="section appoinment" id="appointment">
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
                        @foreach ($errors->all() as $error)
        
                        @endforeach
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
                                    <input name="date" id="date" type="text" class="form-control"  placeholder="YYYY-MM-DD">
                                           @if($errors->first('date'))
                                 <span style='color:red;'>{{$errors->first('date')}}</span>
                                 @endif
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                                    @if($errors->first('time'))
                                 <span style='color:red;'>{{$errors->first('time')}}</span>
                                 @endif
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
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                            @if($errors->first('message'))
                                 <span style='color:red;'>{{$errors->first('message')}}</span>
                                 @endif
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
   