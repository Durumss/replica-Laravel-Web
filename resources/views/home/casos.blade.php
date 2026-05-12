<section class="cases-section">
    <div class="cases-overlay">
        <div class="container">
            <div class="cases-header">
                <div>
                    <h2>Casos colectivos de afectados. Reclame con ADICAE</h2>
                    <div class="section-line yellow"></div>
                </div>

                <a href="{{ url('colectivos-de-afectados') }}" class="btn-purple">Ver más Casos Colectivos</a>
            </div>

            @php
                $cases = [
                    [
                        'img' => 'BANNER_CASOS_FWU.webp',
                        'title' => 'FWU Life Asegurance',
                        'text' => 'FWU Life Asegurance. Únase a la plataforma de afectados.',
                        'btn' => 'Información FWU Life Asegurance',
                        'url' => url('/colectivos-de-afectados/fwu-life-asegurance'),
                    ],
                    [
                        'img' => 'BANNER_CASOS_CENTRO_EUROPIEL.webp',
                        'title' => 'Estética Europiel',
                        'text' => 'Centro de estética Europiel. Únase a la Plataforma de Afectados.',
                        'btn' => 'Información Estética Europiel',
                        'url' => url('/colectivos-de-afectados/estetica-europiel'),
                    ],
                    [
                        'img' => 'BANNER_CASOS_CENTRO_UNICO.webp',
                        'title' => 'Centro de Estética Único',
                        'text' => 'Centro de estética Único. Únase a la Plataforma de Afectados.',
                        'btn' => 'Información Centro de Estética Único',
                        'url' => url('/colectivos-de-afectados/centro-de-estetica-unico'),
                    ],
                    [
                        'img' => 'EsteticaIdeal.jpg',
                        'title' => 'Centros de Estética Ideal',
                        'text' => 'Únase a la plataforma de afectados. El cierre de Centros Ideal deja a cientos de personas sin tratamientos y miles de euros perdidos en Zaragoza',
                        'btn' => 'Información Centros de Estética Ideal',
                        'url' => url('/colectivos-de-afectados/centro-de-estetica-ideal'),
                    ],
                    [
                        'img' => 'BANNER-dentix-2021.jpg',
                        'title' => 'Caso Dentix',
                        'text' => 'ADICAE agrupa a las personas afectadas por el cierre de clínicas Dentix.',
                        'btn' => 'Información Caso Dentix',
                        'url' => url('/colectivos-de-afectados/caso-dentix'),
                    ],
                    [
                        'img' => 'BANNER-revolving-2021.jpg',
                        'title' => 'Tarjetas revolving',
                        'text' => '¿Sabes lo que pagas por tu tarjeta? Estas tarjetas tienen trampa, las cuotas no llegan a cubrir los intereses y te atrapan en un crédito perpetuo.',
                        'btn' => 'Información Tarjetas Revolving',
                        'url' => url('/colectivos-de-afectados/tarjetas-revolving'),
                    ],
                    [
                        'img' => 'BANNER-popular-2021.jpg',
                        'title' => 'Banco Popular',
                        'text' => 'Únete a la plataforma de ADICAE para recuperar los ahorros perdidos por la venta del Banco Popular al Banco Santander.',
                        'btn' => 'Información Banco Popular',
                        'url' => url('/colectivos-de-afectados/banco-popular'),
                    ],
                    [
                        'img' => 'BANNER-ciberestafas-2021.jpg',
                        'title' => 'Ciberestafas',
                        'text' => 'Defensa colectiva frente a fraudes digitales, phishing y estafas bancarias online.',
                        'btn' => 'Información Ciberestafas',
                        'url' => url('/colectivos-de-afectados/ciberestafas'),
                    ],
                ];
            @endphp

            <div class="cases-carousel-wrap">
                <div class="swiper cases-swiper">
                    <div class="swiper-wrapper">
                        @foreach($cases as $case)
                            <div class="swiper-slide">
                                <article class="case-card">
                                    <img src="{{ asset('assets/adicae/' . $case['img']) }}" alt="{{ $case['title'] }}">

                                    <div class="case-content">
                                        <h3>{{ $case['title'] }}</h3>
                                        <div class="case-line"></div>
                                        <p>{{ $case['text'] }}</p>
                                        <a href="{{ $case['url'] }}" class="case-btn">{{ $case['btn'] }}</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper-button-prev cases-prev"></div>
                <div class="swiper-button-next cases-next"></div>
            </div>
        </div>
    </div>
</section>