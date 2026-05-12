@php
$caso = json_decode('{"id": "clausulas", "title": "Cláusulas suelo", "subtitle": "Únase a la plataforma de afectados. La sentencia de la macrodemanda de ADICAE elimina las cláusulas suelo y establece la devolución íntegra.", "hero": "assets/adicae/BANNER-suelos-2021.jpg", "email": "clausulassuelo@adicae.net", "info": "La inscripción a la plataforma Cláusulas suelo permite recibir información sobre la sentencia, la ejecución y las vías para reclamar la devolución de cantidades.", "news": [{"title": "La sentencia del Tribunal Supremo sobre cláusulas suelo ya es firme", "text": "ADICAE informa a los afectados de los pasos necesarios para incorporarse a la ejecución.", "date": "02/10/2025"}, {"title": "Cláusulas suelo: victoria para los consumidores", "text": "La macrodemanda de ADICAE consolida la devolución íntegra para miles de afectados.", "date": "18/07/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Formulario imprescindible para ejecutar sentencia", "url": "https://docs.google.com/forms/d/e/1FAIpQLSdg3n0v0QJPW9WcS-fUloyY1yd0rxXj9XTFItvaWKTcDbN6ww/viewform"}], "faqs": [{"q": "¿Qué supone la sentencia?", "a": "<p>La sentencia declara la nulidad de cláusulas suelo incluidas en numerosos préstamos y abre la vía para reclamar cantidades indebidamente abonadas.</p>"}, {"q": "¿Qué documentación necesito?", "a": "<ul><li>Escritura de préstamo hipotecario.</li><li>Recibos del préstamo.</li><li>Comunicaciones de la entidad.</li><li>Cálculos o liquidaciones si existen.</li></ul>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
