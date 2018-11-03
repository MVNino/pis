@extends('guest.layouts.app')

@section('content')
    <section class="home-sm">
    </section>
    <section class="section-padding"> 
    <div align= "center">
     <div style="color: #fff; background-color: #F05B57; height: 100%; width: 40%; font-size: 300%; font-weight: 900; margin-bottom: 3%;">
         The Doctor is In!
     </div>
     
        <table class="table table-hover" style="width:60%;" style="font-family: helvetica;">
            <thead style="background-color: #22B4B8; color: #fff;">
                <tr>
                    <th>Location</th>
                    <th>Days</th>
                    <th>Opening</th>
                    <th>Closing</th>        
                </tr>
            </thead>
            <tbody>
                @foreach($clinics as $clinic)
                    @if($clinic->status == 0)
                        <tr data-toggle="modal" data-target="#row{{$clinic->clinic_contact_id}}" class="info" style="cursor: pointer;">
                            <td>{{$clinic->clinic_location}}</td>
                            <td>{{$clinic->clinic_days}}</td>
                            <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$clinic->clinic_open_time)->format('g:i A')}}</td>
                            <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$clinic->clinic_close_time)->format('g:i A')}}</td>
                        </tr>

                        <!-- Modal for Viewing Banner -->
                        <div class="modal fade" id="row{{$clinic->clinic_contact_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="exampleModalLabel">CLINIC</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Clinic Location</label>
                                        <p>{{$clinic->clinic_location}}</p>
                                        <label>Clinic Map</label>
                                        <div>
                                            <a target="_blank" href="/storage/images/map/{{$clinic->clinic_map}}">
                                                <img src="/storage/images/map/{{$clinic->clinic_map}}" style="width: 100%;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                @endforeach
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
                            <h4>dra-joy-gali@pupbsit4-1.tech</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="about-form contact-formv2">
                    {!! Form::open(['action' => 'GuestController@storeContact', 'method' => 'POST', 'class' => 'form-material' ,'autocomplete' => 'off'])!!}
                    <div class="v2-about-input">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="v2-about-input mr0">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="v2-about-textarea">
                        <textarea name="inquiry" id="message" cols="30" rows="10" placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="v2-about-submit">
                        <input type="submit" value="SUBMIT NOW">
                    </div>
                    {!!Form::close()!!}
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

@section('pg-specific-js')
<!-- wysuhtml5 Plugin JavaScript -->
<script src="{{ asset('elite/js/tinymce.min.js') }}"></script>
<script>
$(document).ready(function() {

    if ($("#mymce").length > 0) {
        tinymce.init({
            selector: "textarea#mymce",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        });
    }
});
</script>
@endsection