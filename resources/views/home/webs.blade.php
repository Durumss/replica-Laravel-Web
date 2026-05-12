<section class="section webs-section">
    <div class="container">
        <h2>Acceda a las webs de ADICAE que mejor defienden sus derechos</h2>
        <div class="section-line"></div>

        <p class="section-intro">
            Defienda sus derechos como consumidor. Acceda a herramientas, recursos y asesoramiento experto que lo guiarán
            en un consumo informado y seguro. Desde guías detalladas sobre cómo defender sus derechos, hasta actualizaciones
            sobre las últimas regulaciones y cómo estas le afectan, nuestras webs están dedicadas a ofrecerle el apoyo que
            necesita para tomar decisiones conscientes y justas.
        </p>

        @php
            $websTop = [
                ['img' => 'economia-consumidores-1.webp', 'url' => 'https://www.laeconomiadelosconsumidores.es/'],
                ['img' => 'serjur-adicae-1.webp', 'url' => 'https://www.adicae.legal/'],
                ['img' => 'observatorio-hipotecario-adicae.webp', 'url' => 'https://observatoriohipotecario.adicae.net/'],
                ['img' => 'comercio-online-adicae.webp', 'url' => 'https://www.consumidordigital.org/'],
            ];

            $websBottom = [
                ['img' => 'medios-de-pago-adicae.webp', 'url' => 'https://www.e-consumer.es/'],
                ['img' => 'ahorro-inversion-adicae.webp', 'url' => 'https://ahorro-inversion.adicae.net/'],
                ['img' => 'economia-circular-adicae.webp', 'url' => 'https://www.otroconsumoposible.es/'],
                ['img' => 'seguros-adicae.webp', 'url' => 'https://www.consumidoresatodoriesgo.com/'],
                ['img' => 'sobreendeudamiento-adicae.webp', 'url' => 'https://sobreendeudamiento.adicae.net/#introduccion'],
                ['img' => 'vivienda-adicae.webp', 'url' => 'https://vivienda.adicae.net/'],
                ['img' => 'hipotecaria-adicae.webp', 'url' => 'https://www.hipotecaconderechos.es/'],
            ];
        @endphp

        <div class="webs-top-grid">
            @foreach($websTop as $web)
                <a href="{{ $web['url'] }}" class="web-card" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/adicae/' . $web['img']) }}" alt="">
                </a>
            @endforeach
        </div>

        <div class="webs-bottom-carousel-wrap">
            <div class="swiper webs-bottom-swiper">
                <div class="swiper-wrapper">
                    @foreach($websBottom as $web)
                        <div class="swiper-slide">
                            <a href="{{ $web['url'] }}" class="web-card" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('assets/adicae/' . $web['img']) }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-button-prev webs-bottom-prev"></div>
            <div class="swiper-button-next webs-bottom-next"></div>
        </div>
    </div>
</section>