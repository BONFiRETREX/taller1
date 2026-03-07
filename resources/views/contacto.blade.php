@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<h2 class="text-center mb-5">Contáctanos</h2>

<p class="text-center mb-5">
Estamos disponibles para atender tus dudas, solicitudes o información sobre nuestros vehículos y servicios.
Puedes comunicarte a través de los siguientes medios:
</p>

<div class="row text-center mb-5">

<div class="col-md-4">
<div class="card shadow p-4">
<h5>📞 Teléfono</h5>
<p>+57 300 123 4567</p>
<p>+57 320 987 6543</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow p-4">
<h5>📧 Correo electrónico</h5>
<p>ventas@concesionario.com</p>
<p>servicio@concesionario.com</p>
</div>
</div>

<div class="col-md-4">
<div class="card shadow p-4">
<h5>📍 Dirección</h5>
<p>Calle 20 #15-30</p>
<p>Pasto, Nariño</p>
</div>
</div>

</div>

<hr class="my-5">

<h3 class="text-center mb-4">Nuestra ubicación</h3>

<div class="ratio ratio-16x9">
<iframe 
src="https://www.google.com/maps?q=Pasto+Nari%C3%B1o&output=embed"
width="600" 
height="450" 
style="border:0;" 
allowfullscreen="" 
loading="lazy">
</iframe>
</div>

<hr class="my-5">

<h3 class="text-center mb-4">Redes Sociales</h3>

<div class="text-center">

<p>📘 Facebook: Concesionario AutoPlus</p>

<p>📷 Instagram: @autoplus_oficial</p>

<p>🐦 Twitter/X: @autoplus</p>

<p>💬 WhatsApp: +57 300 123 4567</p>

</div>

@endsection
