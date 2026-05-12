@php
$caso = json_decode('{"id": "europiel", "title": "Estética Europiel", "subtitle": "Centro de estética Europiel. Únase a la Plataforma de Afectados.", 
"hero": "assets/adicae/BANNER_CASOS_CENTRO_EUROPIEL.webp", "email": "europiel@adicae.net", "info": "La inscripción a la plataforma Estética Europiel 
permite recibir información y orientación sobre tratamientos contratados, financiación y reclamaciones.", "news": [{"title": "ADICAE agrupa a afectados por Estética Europiel", 
"text": "La asociación informa de las posibilidades de reclamación.", "date": "04/09/2025"}, {"title": "Recomendaciones para afectados", 
"text": "Conserve contratos, presupuestos, justificantes de pago y comunicaciones.", "date": "15/05/2025"}], "documents": 
[{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"},
 {"title": "Documentación básica Europiel", "url": "#"}], "faqs": [{"q": "¿Qué debo hacer primero?", "a":
  "<p>Reunir la documentación y dejar constancia escrita de la reclamación.</p>"}, {"q": "¿Puede ayudarme ADICAE?", "a": 
  "<p>ADICAE puede informar, asesorar y valorar la estrategia de reclamación.</p>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
