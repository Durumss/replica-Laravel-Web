@php
$caso = json_decode('{"id": "gastos", "title": "Gastos hipotecarios", "subtitle": "Únase a las acciones colectivas de ADICAE para recuperar lo pagado indebidamente: notaría, registro, gestoría y otros gastos.", "hero": "assets/adicae/BANNER-gastos-2021.jpg", "email": "gastoshipotecarios@adicae.net", "info": "La inscripción a la plataforma Gastos hipotecarios permite recibir información sobre la reclamación de importes pagados indebidamente en la constitución del préstamo hipotecario.", "news": [{"title": "ADICAE mantiene la reclamación de gastos hipotecarios", "text": "Los consumidores pueden reclamar cantidades indebidamente abonadas en su hipoteca.", "date": "24/09/2025"}, {"title": "Documentación necesaria para reclamar", "text": "Conserve escritura, facturas de notaría, registro, gestoría y tasación.", "date": "11/04/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Listado de documentos gastos hipotecarios", "url": "#"}], "faqs": [{"q": "¿Qué gastos se pueden reclamar?", "a": "<p>Debe analizarse cada caso, pero suelen revisarse notaría, registro, gestoría, tasación y otros conceptos vinculados a la constitución del préstamo.</p>"}, {"q": "¿Qué documentos necesito?", "a": "<ul><li>Escritura hipotecaria.</li><li>Facturas de gastos.</li><li>Recibos y justificantes.</li><li>Comunicaciones con el banco.</li></ul>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
