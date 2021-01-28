<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
            <div class="header_top_left">
                <ul class="top_nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
                </ul>
            </div>
            <div class="header_top_right">
                <p> Hora Local  {{date('H:i:s:A')}}</p>
                <p>  {{date('D,  d-m-Y')}}</p>

            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
            <div class="logo_area"><a href="index.html" class="logo"><img src="{{ asset('images/logo1.jpg') }}"
                        alt=""></a></div>
            <div class="add_banner"><a href="#"><img src="{{ asset('images/addbanner_728x90_V2.jpg') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
