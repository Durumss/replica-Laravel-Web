@php
$caso = json_decode('{"id": "unico", "title": "Centro de Estética Único", "subtitle": "Centro de estética Único. Únase a la Plataforma de Afectados.", "hero": "assets/adicae/BANNER_CASOS_CENTRO_UNICO.webp", "email": "esteticaunico@adicae.net", "info": "La inscripción a la plataforma Centro de Estética Único permite recibir información sobre tratamientos no prestados y reclamaciones frente a empresas o financieras.", "news": [{"title": "ADICAE informa a los afectados por Centro de Estética Único", "text": "La asociación estudia la situación de los consumidores afectados.", "date": "08/09/2025"}, {"title": "Tratamientos estéticos y financiación", "text": "Conserve contratos, bonos y justificantes de pago.", "date": "19/04/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Documentación básica Centro Único", "url": "#"}], "faqs": [{"q": "¿Qué puedo hacer si no me han prestado el tratamiento?", "a": "<p>Debe reunir toda la documentación y presentar reclamación. ADICAE puede estudiar su caso.</p>"}, {"q": "¿Qué documentos son importantes?", "a": "<ul><li>Contrato.</li><li>Factura.</li><li>Financiación vinculada.</li><li>Pruebas de sesiones pendientes.</li></ul>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
