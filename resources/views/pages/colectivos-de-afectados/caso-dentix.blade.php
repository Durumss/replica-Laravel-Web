@php
$caso = json_decode('{"id": "dentix", "title": "Caso Dentix", "subtitle": "Únete a ADICAE y consigue la paralización de los pagos de las cuotas de los préstamos suscritos hasta que el servicio se reanude.", "hero": "assets/adicae/BANNER-dentix-2021.jpg", "email": "dentix@adicae.net", "info": "La inscripción a la plataforma Caso Dentix le permite recibir información sobre la defensa colectiva frente al cierre de clínicas, tratamientos no prestados y financiación vinculada.", "news": [{"title": "ADICAE mantiene la información a afectados por Dentix", "text": "La asociación continúa asesorando sobre préstamos vinculados y tratamientos no prestados.", "date": "10/10/2025"}, {"title": "Reclamaciones por financiación vinculada", "text": "Los afectados deben conservar contratos de tratamiento, financiación y justificantes de pago.", "date": "18/06/2025"}, {"title": "La plataforma Dentix sigue abierta", "text": "ADICAE agrupa a consumidores afectados por la falta de prestación del servicio.", "date": "02/03/2025"}], "documents": [{"title": "Boletín de inscripción socio titular", "url": "https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf"}, {"title": "Guía de documentación para afectados Dentix", "url": "#"}], "faqs": [{"q": "¿Qué puedo reclamar?", "a": "<p>Puede reclamarse por tratamientos no prestados, importes abonados y financiación vinculada al servicio odontológico.</p>"}, {"q": "¿Debo seguir pagando el préstamo?", "a": "<p>Debe analizarse cada caso y comunicar formalmente la situación a la financiera. ADICAE puede orientar sobre los pasos adecuados.</p>"}, {"q": "¿Qué documentos necesito?", "a": "<ul><li>Contrato de tratamiento.</li><li>Contrato de financiación.</li><li>Facturas y justificantes.</li><li>Comunicaciones con la clínica o financiera.</li></ul>"}]}', true);
@endphp
@extends('layouts.app')

@section('title', $caso['title'] . ' - ADICAE')

@section('content')
    @include('partials.casos.caso-template', ['caso' => $caso])
@endsection
