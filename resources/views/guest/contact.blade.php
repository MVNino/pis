@extends('guest.layouts.app')

@section('content')
    <section class="home-sm">
        <!-- start slider section -->
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="/storage/images/about/{{$about->about_image}}" alt="banner" style="object-fit: cover; height: 700px; width: 100%;">
                    <div class="info">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 slider-content-area text-left">
                                    <div class="v3 welcome-text">
                                        <h1>The Doctor is In!</h1>
                                        <h2>Clinic Schedule</h2>
                                        <h4>We're open from {{$clinic->clinic_days}} during {{$clinic->clinic_open_time}} to {{$clinic->clinic_close_time}}.<br/> You can visit us at {{$clinic->clinic_location}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
        <!-- end of slider section -->
    </section>
    <section class="section-padding">
    The Doctor is In!
    <div class="col-md-4">
    <table class="table" style="width:80%">
    <thead>
        <tr>
            <th></th>
            <th>Clinic Hours</th>
         
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>Credit Card</td>
            <td>04/07/2014</td>
            <td>Call in to confirm</td>
        </tr>
        <tr class="success">
            <td>2</td>
            <td>Water</td>
            <td>01/07/2014</td>
            <td>Paid</td>
        </tr>
        <tr class="info">
            <td>3</td>
            <td>Internet</td>
            <td>05/07/2014</td>
            <td>Change plan</td>
        </tr>
        <tr class="warning">
            <td>4</td>
            <td>Electricity</td>
            <td>03/07/2014</td>
            <td>Pending</td>
        </tr>
        <tr class="danger">
            <td>5</td>
            <td>Telephone</td>
            <td>06/07/2014</td>
            <td>Due</td>
        </tr>
    </tbody>
    </table>
    </div>
    </section>
    <section class="section-padding v3-contact v2contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h1><span>get in touch</span>  with us</h1>
                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                        <p>specimen book unchanged.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contactv2address">
                    <div class="row single-contact">
                        <div class="col-xs-2">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>{{ $clinic->clinic_location }}</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>{{ $clinic->clinic_contact }}</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>{{ $clinic->clinic_email }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="about-form contact-formv2">
                    <div class="v2-about-input">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="v2-about-input mr0">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="v2-about-input">
                        <input type="text" placeholder="Phone">
                    </div>
                    <div class="v2-about-input mr0">
                        <div class="v2-about-select">
                            <select>
                                <option value="Preferred Date & Time">Preferred Date & Time</option>
                                <option value="Preferred Date & Time">Preferred Date & Time</option>
                                <option value="Preferred Date & Time">Preferred Date & Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="v2-about-textarea">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="v2-about-submit">
                        <input type="submit" value="SUBMIT NOW">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pg-specific-js')
<script>
$("#navlink-contact").addClass("current-menu-item");
</script>
@endsection