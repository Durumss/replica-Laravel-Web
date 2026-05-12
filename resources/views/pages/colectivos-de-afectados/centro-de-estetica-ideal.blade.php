@php
$caso = json_decode('{"id": "ideal", "title": "Centros de Estética Ideal", "subtitle": "Únase a la plataforma de afectados. El cierre de Centros Ideal deja a cientos de personas sin tratamientos y miles de euros perdidos.", "hero": "assets/adicae/EsteticaIdeal.jpg", "email": "esteticaideal@adicae.net", "info": "La inscripción a la plataforma Centros de Estética Ideal le permite recibir información sobre tratamientos no prestados, financiación vinculada y vías de reclamación.", "news": [{"title": "ADICAE agrupa a los afectados por Centros Ideal", "text": "La asociación recopila casos para estudiar las vías de reclamación frente a tratamientos no prestados.", "date": "20/09/2025"}, {"title": "Financiación vinculada a tratamientos estéticos", "text": "Los afectados deben revisar si sus préstamos están vinculados al servicio contratado.", "date": "22/05/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Documentación básica Centros Ideal", "url": "#"}], "faqs": [{"q": "¿Qué documentación debo aportar?", "a": "<ul><li>Contrato de tratamiento.</li><li>Contrato de financiación, si existe.</li><li>Justificantes de pago.</li><li>Bonos o sesiones pendientes.</li></ul>"}, {"q": "¿Puedo reclamar a la financiera?", "a": "<p>Cuando la financiación está vinculada al servicio, pueden existir vías de reclamación frente a la financiera.</p>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
