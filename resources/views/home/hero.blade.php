<section class="hero-section">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide hero-slide hero-slide-sentencia"
                 style="background-image: url('{{ asset('assets/adicae/TJUE-ADICAE.webp') }}')">

                <div class="hero-alert-box">
                    <h1>
                        ¡ATENCIÓN AFECTADOS!<br>
                        LA SENTENCIA DEL TRIBUNAL SUPREMO<br>
                        SOBRE CLÁUSULAS SUELO FIRME DESDE EL<br>
                        2 DE OCTUBRE
                    </h1>
                </div>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSevKa6lVw63xjCtFccqsYzjmY6BjUfZwHHwr_KYMkAO5pW78g/viewform" class="hero-alert-btn">
                    Rellene el formulario (imprescindible para ejecutar sentencia)
                </a>
            </div>

            <div class="swiper-slide hero-slide hero-slide-victoria"
                 style="background-image: url('{{ asset('assets/adicae/ADICAE-banner-home-1-1.webp') }}')">

                <div class="hero-content hero-content-purple">
                    <h1>Cláusulas suelo ¡Victoria<br>para los consumidores!</h1>
                    <a href="{{ url('/historica-sentencia-del-supremo-clausulas-suelo') }}" class="hero-news-btn">
                        <i class="fa-solid fa-arrow-right"></i> Leer noticia
                    </a>
                </div>

                <div class="hero-buttons">
                    <a href="{{ url('/hagase-socio-de-adicae') }}" class="btn-purple">Ventajas de hacerse socio</a>
                    <a href="{{ url('/la-asociacion/localizacion-de-sedes') }}" class="btn-purple">Consulta nuestras sedes</a>
                </div>
            </div>

            <div class="swiper-slide hero-slide hero-slide-actualidad"
                 style="background-image: url('{{ asset('assets/adicae/HERO-ACTUALIDAD-ADICAE.webp') }}')">

                <div class="hero-box-light">
                    <h1>Bienvenido a<br>La Economía de los Consumidores</h1>
                    <p>
                        El movimiento consumerista necesita un medio que recoja las inquietudes y la problemática
                        con la que se enfrentan a diario. Por eso ADICAE ha creado este medio digital que nace con
                        la identidad de contribución a la transformación social a partir de la aportación de información
                        a los usuarios.
                    </p>
                </div>

                <a href="{{ url('/actualidad') }}" class="hero-floating-btn">Ver actualidad</a>
            </div>

            

        </div>

        <div class="swiper-button-prev hero-arrow"></div>
        <div class="swiper-button-next hero-arrow"></div>
    </div>
</section>