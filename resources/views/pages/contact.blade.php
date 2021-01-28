@extends('layouts/themes/index')
@section('content')

<div class="col-lg-12 col-md-8 col-sm-8">
    <div class="left_content">
        <div class="contact_area">
            <h2>Contactar con nosotros</h2>
            <p>Envíenos su mensaje para contactar con nosotros,
                 le responderemos  con la mayor rapidez posible,
                 gracias por escribirnos, recuerde seguir nuestra pagina .</p>
            <form action="#" class="contact_form">
                <input class="form-control" type="text" placeholder="Name*">
                <input class="form-control" type="email" placeholder="Email*">
                <textarea class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>
@endsection
