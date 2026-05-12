<section class="section videos-section">
    <div class="container">
        <div class="section-title-row">
            <div>
                <h2>Vídeos</h2>
                <div class="section-line"></div>
            </div>
            <a href="https://www.youtube.com/@ADICAE1" class="btn-outline">Ver más Vídeos</a>
        </div>

        @php
            $videos = [
                [
                    'id' => 'omq0utE2SDU',
                    'url' => 'https://www.youtube.com/watch?v=omq0utE2SDU',
                    'title' => 'Campaña formativa ADICAE por un uso seguro de la IA en el comercio electrónico',
                ],
                [
                    'id' => 'hXzidL_HIrk',
                    'url' => 'https://www.youtube.com/watch?v=hXzidL_HIrk',
                    'title' => 'Entrevista a D. Manuel Pardos en Radio 5-RNE sobre la sentencia del TSJ sobre las cláusulas suelos.',
                ],
                [
                    'id' => 'VNdeOlq7q9k',
                    'url' => 'https://www.youtube.com/watch?v=VNdeOlq7q9k',
                    'title' => 'Rueda de prensa ADICAE: el Tribunal Supremo declara NULAS las cláusulas suelo en las hipotecas.',
                ],
            ];
        @endphp

        <div class="video-grid">
            @foreach($videos as $video)
                <a href="{{ $video['url'] }}" target="_blank" rel="noopener" class="video-card">
                    <div class="video-thumb">
                        <img src="https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg" alt="{{ $video['title'] }}">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <h3>{{ $video['title'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
</section>