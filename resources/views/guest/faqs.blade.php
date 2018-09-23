@extends('guest.layouts.app')

@section('content')
<section class="aboutUs-area v2 v3 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="section-title">
                    <div class="page-title">
                        <h2>Frequently Asked Questions</h2>
                        <h3>got questions on your mind?</h3>   
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="department-nav">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-justified nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#surgery" aria-controls="surgery" role="tab" data-toggle="tab">
                                    <h4>SURGERY</h4>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#dentalcare" aria-controls="dentalcare" role="tab" data-toggle="tab">
                                    <h4>SERVICE</h4></a>
                            </li>
                            <li role="presentation">
                                <a href="#diseases" aria-controls="diseases" role="tab" data-toggle="tab">
                                    <h4>RECOVERY</h4></a>
                            </li>
                            <li role="presentation">
                                <a href="#eaycare" aria-controls="eaycare" role="tab" data-toggle="tab">
                                    <h4>APPOINTMENTS</h4></a>
                            </li>
                            <li role="presentation">
                                <a href="#cancer" aria-controls="cancer" role="tab" data-toggle="tab">
                                    <h4>PAYMENT</h4></a>
                            </li>
                            <li role="presentation">
                                <a href="#nurology" aria-controls="nurology" role="tab" data-toggle="tab">
                                    <h4>OTHERS</h4></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="surgery">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>ALL ABOUT <span>VASCULAR SURGERY</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <section class="mediacare-whychoose-us ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-left">
                                                <div class="best-features-accoudion">
                                                    @foreach($faqs as $faq)
                                                        @if($faq->faq_category == 'surgery')
                                                    <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                      {{ $faq->faq_question }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}" >
                                                                <div class="panel-body" style="font-size: 130%">
                                                                    <p>{{ $faq->faq_answer }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="dentalcare">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>ALL ABOUT <span>OUR SERVICE</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <section class="mediacare-whychoose-us ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-left">
                                                <div class="best-features-accoudion">
                                                    @foreach($faqs as $faq)
                                                        @if($faq->faq_category == 'service')
                                                    <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                      {{ $faq->faq_question }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}">
                                                                <div class="panel-body" style="font-size: 130%">
                                                                    <p>{{ $faq->faq_answer }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="diseases">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>ALL ABOUT <span>PATIENT RECOVERY</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <section class="mediacare-whychoose-us ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-left">
                                                <div class="best-features-accoudion">
                                                    @foreach($faqs as $faq)
                                                        @if($faq->faq_category == 'recovery')
                                                    <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                      {{ $faq->faq_question }}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}">
                                                                <div class="panel-body" style="font-size: 130%">
                                                                    <p>{{ $faq->faq_answer }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="eaycare">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>ALL ABOUT <span>SCHEDULES & APPOINTMENTS</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                   <section class="mediacare-whychoose-us ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-left">
                                                    <div class="best-features-accoudion">
                                                        @foreach($faqs as $faq)
                                                            @if($faq->faq_category == 'appointment')
                                                        <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                          {{ $faq->faq_question }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <div class="panel-body" style="font-size: 130%">
                                                                        <p>{{ $faq->faq_answer }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cancer">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>ALL ABOUT <span>PAYMENT METHODS</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                     <section class="mediacare-whychoose-us ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-left">
                                                    <div class="best-features-accoudion">
                                                        <div class="panel-group" id="Abaccordion" role="tablist" aria-multiselectable="true">
                                                            @foreach($faqs as $faq)
                                                            @if($faq->faq_category == 'payment')
                                                            <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                          {{ $faq->faq_question }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <div class="panel-body" style="font-size: 130%">
                                                                        <p>{{ $faq->faq_answer }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="nurology">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-title">
                                            <h2>OTHER CONCERNS</h2>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                               <section class="mediacare-whychoose-us ">
                                    <div class="container">
                                        <div class="row">
                                            
                                            <div class="col-md-12 text-left">
                                                <div class="best-features-accoudion">
                                                    <div class="panel-group" id="Abaccordion" role="tablist" aria-multiselectable="true">
                                                        @foreach($faqs as $faq)
                                                            @if($faq->faq_category == 'others')
                                                        <div class="panel-group" id="Abaccordion{{ $faq->faq_id }}" role="tablist" aria-multiselectable="true">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#Abaccordion{{ $faq->faq_id }}" href="#AbcollapseOne4{{ $faq->faq_id }}" aria-expanded="true" aria-controls="AbcollapseOne" style="font-size: 130%">
                                                                          {{ $faq->faq_question }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="AbcollapseOne4{{ $faq->faq_id }}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="AbheadingOne1{{ $faq->faq_id }}">
                                                                    <div class="panel-body" style="font-size: 130%">
                                                                        <p>{{ $faq->faq_answer }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              </section>
                                <!-- end of department section -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
$("#navlink-faqs").addClass("current-menu-item");
</script>
@endsection