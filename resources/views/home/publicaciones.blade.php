<section class="section publications-section">
    <div class="container">
        <div class="section-title-row">
            <div>
                <h2>Publicaciones</h2>
                <div class="section-line"></div>
            </div>

            <a href="https://www.calameo.com/adicae"
               class="btn-outline"
               target="_blank"
               rel="noopener">
                Ver más Publicaciones
            </a>
        </div>

        <p>
            En ADICAE llevamos más de 30 años trabajando para la defensa de los derechos del consumidor de servicios
            financieros. Nuestras publicaciones, especializadas en el ámbito del consumo financiero, son una herramienta
            fundamental y cuentan con un reconocido prestigio.
        </p>

        <p>
            Nuestro objetivo no es otro que el de ayudar al consumidor a defenderse de los abusos de las entidades
            financieras, aseguradoras y otras empresas.
        </p>

        <div class="publications-grid">
            @php
                $publicaciones = [
                    [
                        'img' => 'ADICAE_SERJUR.webp',
                        'title' => 'ADICAE SERJUR',
                        'url' => 'https://www.calameo.com/subscriptions/7043089',
                    ],
                    [
                        'img' => 'ADICAE_ESTUDIOS.webp',
                        'title' => 'Estudios y libros',
                        'url' => 'https://www.calameo.com/subscriptions/7043090',
                    ],
                    [
                        'img' => 'ADICAE_GUIAS.webp',
                        'title' => 'Guías prácticas',
                        'url' => 'https://www.calameo.com/subscriptions/7042429',
                    ],
                    [
                        'img' => 'ADICAE_BOLETINES.webp',
                        'title' => 'Boletines especiales',
                        'url' => 'https://www.calameo.com/subscriptions/7062447',
                    ],
                    [
                        'img' => 'ADICAE_PERIODICOS.webp',
                        'title' => 'Periódicos',
                        'url' => 'http://www.calameo.com/subscriptions/7044362',
                    ],
                    [
                        'img' => 'ADICAE_REVISTAS.webp',
                        'title' => 'Revistas',
                        'url' => 'https://www.calameo.com/subscriptions/7049446',
                    ],
                ];
            @endphp

            @foreach($publicaciones as $pub)
                <a href="{{ $pub['url'] }}"
                   class="publication-card"
                   target="_blank"
                   rel="noopener">
                    <img src="{{ asset('assets/adicae/' . $pub['img']) }}" alt="{{ $pub['title'] }}">
                    <h3>{{ $pub['title'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
</section>