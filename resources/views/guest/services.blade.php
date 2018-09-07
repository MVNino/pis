@extends('guest.layouts.app')

@section('content')

    <section class="features-area singlepageservice section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                <div class="section-title">
                <h1><span> Medical</span> Services </h1>
            </div>
        </div>
            </div>
                <div class="col-sm-4 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/service-1.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Qualified Doctors</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                        <a href="#" class="service-link">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/service-2.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Operation Theater</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                        <a href="#" class="service-link">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="{{ asset('medicre/img/service-3.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Emergency Services</h4>
                        <p>If you need a doctor for to consectetuer Lorem </p>
                        <p>ipsum dolor, consectetur adipiscing elit Lorem </p>
                        <p>ipsum dolor, consectetur Ut volutpat eros.</p>
                        <a href="#" class="service-link">READ MORE +</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of features area -->
    <!-- start speacial services area -->
    <section class="speacial-services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h1> <span>special</span> Services</h1>
                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                        <p>specimen book unchanged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-2.png') }}" alt="jigsawlab">
                        </div>
                        <h4>George QUICK</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-3.png') }}" alt="jigsawlab">
                        </div>
                        <h4>SAMANTHA FOX</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-1.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Jeremy hendixson</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-1.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Jeremy hendixson</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-2.png') }}" alt="jigsawlab">
                        </div>
                        <h4>George QUICK</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="speacila-single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('medicre/img/news-3.png') }}" alt="jigsawlab">
                        </div>
                        <h4>Jeremy hendixson</h4>
                        <p>Our construction management professio nals organize, lead, and manage the people, materials, and processes of construction utilizing the latest techno logies.</p>
                        <a href="single.html">READ MORE +</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

@section('pg-specific-js')
<script>
$("#navlink-services").addClass("current-menu-item");
</script>
@endsection
