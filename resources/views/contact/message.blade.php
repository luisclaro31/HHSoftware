<h3>Nombre</h3>
@if(Session::has('full_name'))
    <p>{{ Session::get('full_name') }}</p>
@endif
<h3>Correo</h3>
@if(Session::has('email'))
    <p>{{ Session::get('email') }}</p>
@endif
<h3>Mensaje</h3>
@if(Session::has('message'))
    <p>{{ Session::get('message') }}</p>
@endif
