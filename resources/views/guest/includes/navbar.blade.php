<nav class="navbar navbar-area">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-sm-3 col-md-4">
                <div class="site-logo" style="padding-top: 8px; padding-bottom: 5px;">
                <img src="/public/images/logo/{{ Auth::user()->company_clinic_logo }}" style=" width: 300px; height: 50px;">
            </div>
        </div>
            <ul class="nav menu navbar-right navbar-nav">
                <li id ="navlink-index"><a href="/"> Home </a></li>
                <li id ="navlink-about"><a href="/about"> About </a></li>
                <li id ="navlink-services"><a href="/services"> Services </a></li>
                <li id ="navlink-news"><a href="/news"> News </a></li>
                <li id ="navlink-contact"><a href="/contact"> Contact </a></li>
                <li id ="navlink-faqs"><a href="/faqs" title="FAQs"><i class="fa fa-question-circle" style="font-size: 20px;"> </i> </a></li>
            </ul>
        </div>
    </div>
</nav>