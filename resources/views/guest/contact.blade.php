@extends('guest.layouts.app')

@section('content')
<div class="single-page-title">
    <div class="page-title-cell" style="background-image: url(img/v3home.png);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <div class="page-title">
                        <h2>CONTACT US NOW</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"><a href="#">Contact Us</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <h4>{{$clinic->clinic_location}}</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>{{ $contact->contact_phone }}</h4>
                        </div>
                    </div>
                    <div class="row single-contact">
                        <div class="col-xs-2">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="col-xs-10">
                            <h4>{{ $contact->contact_email }}</h4>
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