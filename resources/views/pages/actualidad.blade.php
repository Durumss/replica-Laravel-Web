@extends('layouts.app')

@section('title', 'Actualidad - ADICAE')

@section('content')

{{-- HERO --}}
<section class="inner-hero inner-hero-actualidad">
    <div class="inner-hero-overlay">
        <div class="container">
            <div class="inner-hero-content">
                <h1>Actualidad</h1>
                <div class="section-line yellow"></div>
                <p>La Economía de los Consumidores: información, análisis y noticias para defender sus derechos.</p>
            </div>
        </div>
    </div>
</section>


{{-- INTRO ACTUALIDAD --}}
<section class="actualidad-intro-section">
    <div class="container actualidad-container">

        <div class="actualidad-intro-grid">

            <div class="actualidad-intro-text">
                <h2>Noticias destacadas</h2>
                <div class="section-line"></div>

                <p>
                    Explore la actualidad de ADICAE, donde encontrará información confiable y actualizada sobre
                    consumo, banca, seguros, vivienda, servicios financieros, fraudes, reclamaciones colectivas
                    y derechos de los consumidores.
                </p>

                <p>
                    Nuestro compromiso es proporcionar herramientas útiles para que los consumidores puedan tomar
                    decisiones informadas, defender sus intereses y conocer las últimas novedades que afectan a sus derechos.
                </p>
            </div>

            <div class="actualidad-intro-box">
                <h3>La Economía de los Consumidores</h3>
                <p>
                    El movimiento consumerista necesita un medio que recoja las inquietudes y la problemática
                    con la que se enfrentan a diario los consumidores.
                </p>
                <a href="https://www.adicae.es/actualidad/" target="_blank" rel="noopener">
                    Ver actualidad original
                </a>
            </div>

        </div>

    </div>
</section>


{{-- FILTROS VISUALES --}}
<section class="actualidad-filter-section">
    <div class="container actualidad-container">

        <div class="actualidad-filter-row">
            <a href="https://www.adicae.es/actualidad/" target="_blank" rel="noopener" class="actualidad-filter active">
                Todas las noticias
            </a>

            <a href="https://www.adicae.es/category/noticias-casos-colectivos/" target="_blank" rel="noopener" class="actualidad-filter">
                Casos colectivos
            </a>

            <a href="https://www.adicae.es/medios-de-comunicacion/" target="_blank" rel="noopener" class="actualidad-filter">
                Medios de comunicación
            </a>

            <a href="{{ url('/colectivos-de-afectados') }}" class="actualidad-filter">
                Plataformas de afectados
            </a>
        </div>

    </div>
</section>


{{-- LISTADO DE NOTICIAS --}}
<section class="actualidad-news-section">
    <div class="container actualidad-container">

        @php
            $noticias = [
                [
                    'categoria' => 'Cláusulas suelo',
                    'titulo' => 'ADICAE destaca ante los medios las claves de la histórica sentencia del Supremo: la banca deberá devolver lo cobrado por cláusulas suelo a cientos de miles de consumidores',
                    'extracto' => 'Para ADICAE el fallo tiene eficacia general, no prescribe y marca un antes y un después en la justicia colectiva en España.',
                    'fecha' => '20/06/2025',
                    'url' => 'https://www.adicae.es/historica-sentencia-del-supremo-clausulas-suelo/',
                    'imagen' => asset('assets/adicae/clausulas-suelo.jpg'),
                ],
                [
                    'categoria' => 'FWU Life Insurance',
                    'titulo' => 'Atención afectados de la quiebra de FWU Life y su comercializadora OVB',
                    'extracto' => 'ADICAE convoca e informa a socios y afectados por la quiebra de FWU Life Insurance y su comercializadora OVB.',
                    'fecha' => '04/11/2025',
                    'url' => 'https://www.adicae.es/category/noticias-casos-colectivos/fwu-life-asegurance/',
                    'imagen' => asset('assets/adicae/FWU-Life-Insurance.jpg'),
                ],
                [
                    'categoria' => 'FWU Life Insurance',
                    'titulo' => 'ADICAE aconseja a los afectados por la quiebra de FWU no precipitarse tras recibir la propuesta de pago de la liquidadora luxemburguesa',
                    'extracto' => 'La asociación recomienda analizar cuidadosamente la propuesta recibida y pedir información clara antes de tomar decisiones.',
                    'fecha' => '09/09/2025',
                    'url' => 'https://www.adicae.es/category/noticias-casos-colectivos/fwu-life-asegurance/',
                    'imagen' => asset('assets/adicae/FWU-Life-Insurance.jpg'),
                ],
                [
                    'categoria' => 'Dentix',
                    'titulo' => 'Comunicado para afectados por el cierre de las clínicas DENTIX',
                    'extracto' => 'ADICAE mantiene la información y orientación para los afectados por el cierre de las clínicas Dentix.',
                    'fecha' => '15/05/2025',
                    'url' => 'https://www.adicae.es/category/noticias-casos-colectivos/caso-dentix/',
                    'imagen' => asset('assets/adicae/dentix.jpg'),
                ],
                [
                    'categoria' => 'Europiel',
                    'titulo' => 'Comunicado a afectados por el cierre de Europiel',
                    'extracto' => 'Información para las personas consumidoras afectadas por el cese de actividad de centros de estética Europiel.',
                    'fecha' => '11/07/2025',
                    'url' => 'https://www.adicae.es/colectivos-de-afectados/estetica-europiel/',
                    'imagen' => asset('assets/adicae/europiel.jpg'),
                ],
                [
                    'categoria' => 'Banco Popular',
                    'titulo' => 'Resumen de la situación del proceso contra el Banco Popular',
                    'extracto' => 'ADICAE continúa informando sobre la evolución del procedimiento y la defensa de los afectados por Banco Popular.',
                    'fecha' => '06/02/2025',
                    'url' => 'https://www.adicae.es/colectivos-de-afectados/banco-popular/',
                    'imagen' => asset('assets/adicae/banco-popular.jpg'),
                ],
                [
                    'categoria' => 'Tarjetas revolving',
                    'titulo' => 'El Tribunal Supremo sienta un precedente clave sobre intereses excesivos y transparencia en tarjetas revolving',
                    'extracto' => 'La sentencia refuerza la necesidad de transparencia en la contratación de crédito revolving.',
                    'fecha' => '06/02/2025',
                    'url' => 'https://www.adicae.es/colectivos-de-afectados/tarjetas-revolving/',
                    'imagen' => asset('assets/adicae/tarjetas-revolving.jpg'),
                ],
                [
                    'categoria' => 'IRPH',
                    'titulo' => 'El IRPH es nulo por falta de transparencia y abusividad',
                    'extracto' => 'ADICAE informa sobre las novedades judiciales que afectan a consumidores con hipotecas referenciadas al IRPH.',
                    'fecha' => '12/02/2025',
                    'url' => 'https://www.adicae.es/colectivos-de-afectados/irph-hipotecas/',
                    'imagen' => asset('assets/adicae/irph.jpg'),
                ],
                [
                    'categoria' => 'Gastos hipotecarios',
                    'titulo' => 'La justicia mantiene viva la discusión sobre el pago del IAJD en los gastos hipotecarios',
                    'extracto' => 'ADICAE sigue impulsando la defensa de los consumidores afectados por gastos hipotecarios indebidamente cobrados.',
                    'fecha' => '04/10/2023',
                    'url' => 'https://www.adicae.es/colectivos-de-afectados/gastos-hipotecarios/',
                    'imagen' => asset('assets/adicae/gastos-hipotecarios.jpg'),
                ],
            ];
        @endphp

        <div class="actualidad-news-grid">
            @foreach($noticias as $noticia)
                <article class="actualidad-card">

                    <a href="{{ $noticia['url'] }}" target="_blank" rel="noopener" class="actualidad-card-img">
                        <img src="{{ $noticia['imagen'] }}" alt="{{ $noticia['titulo'] }}">
                    </a>

                    <div class="actualidad-card-content">
                        <span class="actualidad-card-category">{{ $noticia['categoria'] }}</span>

                        <h3>
                            <a href="{{ $noticia['url'] }}" target="_blank" rel="noopener">
                                {{ $noticia['titulo'] }}
                            </a>
                        </h3>

                        <p>{{ $noticia['extracto'] }}</p>

                        <a href="{{ $noticia['url'] }}" target="_blank" rel="noopener" class="actualidad-read-more">
                            Leer noticia
                        </a>
                    </div>

                    <div class="actualidad-card-date">
                        {{ $noticia['fecha'] }}
                    </div>

                </article>
            @endforeach
        </div>

    </div>
</section>


{{-- BLOQUE FINAL --}}
<section class="actualidad-cta-section">
    <div class="container actualidad-container">

        <div class="actualidad-cta-box">
            <div>
                <h2>Defienda sus derechos con ADICAE</h2>
                <div class="section-line"></div>
                <p>
                    Si está afectado por un fraude, abuso bancario, problema hipotecario, cierre de empresa,
                    ciberestafa o conflicto de consumo, puede unirse a las plataformas de afectados de ADICAE.
                </p>
            </div>

            <a href="{{ url('/colectivos-de-afectados') }}" class="btn-purple">
                Ver casos colectivos
            </a>
        </div>

    </div>
</section>

@endsection