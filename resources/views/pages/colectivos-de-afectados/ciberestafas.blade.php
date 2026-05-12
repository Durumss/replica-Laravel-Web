@php
$caso = json_decode('{"id": "ciberestafas", "title": "Ciberestafas", "subtitle": "Has sido víctima de un SMS fraudulento, falta dinero de tu tarjeta o han entrado en tu banca electrónica… defiéndete con ADICAE.", "hero": "assets/adicae/BANNER-ciberestafas-2021.jpg", "email": "ciberestafas@adicae.net", "info": "La inscripción a la plataforma Ciberestafas permite recibir información para actuar frente a fraudes digitales, phishing, smishing, cargos no autorizados y accesos indebidos a banca electrónica.", "news": [{"title": "ADICAE alerta sobre el aumento de ciberestafas", "text": "La asociación recomienda actuar con rapidez y conservar todas las pruebas digitales.", "date": "29/09/2025"}, {"title": "Fraudes por SMS y banca electrónica", "text": "Los consumidores deben reclamar por escrito a la entidad y recopilar justificantes.", "date": "14/06/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Checklist de pruebas para ciberestafas", "url": "#"}], "faqs": [{"q": "¿Qué hago si me han quitado dinero?", "a": "<ul><li>Bloquee tarjetas y accesos.</li><li>Denuncie los hechos.</li><li>Reclame por escrito a su entidad.</li><li>Conserve SMS, correos y movimientos bancarios.</li></ul>"}, {"q": "¿Puede responder el banco?", "a": "<p>Debe estudiarse cada caso, especialmente las medidas de autenticación, la diligencia de la entidad y la actuación del consumidor.</p>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
