@extends('layouts.app')

@section('title', 'FWU Life Insurance - ADICAE')

@section('content')

{{-- HERO --}}
<section class="caso-hero">
    <div class="container caso-hero-container">
        <div class="caso-hero-content">
            <h1>FWU Life Insurance</h1>
            <div class="caso-line caso-line-yellow"></div>
            <h2>Únase a la plataforma de afectados.</h2>
        </div>
    </div>
</section>


{{-- BOTONERA --}}
<section class="caso-nav-section">
    <div class="container caso-nav-container">

        <div class="caso-nav-buttons">
            <button type="button" class="caso-nav-btn active" data-caso-tab="reciba-informacion">
                <i class="fa-solid fa-info"></i>
                Reciba información
            </button>

            <button type="button" class="caso-nav-btn" data-caso-tab="ultimas-noticias">
                <i class="fa-solid fa-newspaper"></i>
                Últimas noticias
            </button>

            <button type="button" class="caso-nav-btn" data-caso-tab="convocatorias">
                <i class="fa-solid fa-users"></i>
                Convocatorias
            </button>

            <button type="button" class="caso-nav-btn" data-caso-tab="documentos">
                <i class="fa-solid fa-file-arrow-down"></i>
                Descarga de documentos
            </button>

            <button type="button" class="caso-nav-btn" data-caso-tab="preguntas-frecuentes">
                <i class="fa-solid fa-question"></i>
                Preguntas frecuentes
            </button>
        </div>

    </div>
</section>


{{-- RECIBA INFORMACIÓN --}}
<section id="reciba-informacion" class="caso-info-section caso-tab-panel active" data-caso-panel="reciba-informacion">
    <div class="container caso-info-container">

        <div class="caso-section-heading">
            <h2>Reciba información sin compromiso</h2>
            <div class="caso-line caso-line-purple"></div>
        </div>

        <p class="caso-info-text">
            La inscripción a la plataforma FWU Life Insurance le permite, entre otras cosas,
            recibir información del caso. <br>
            <strong>IMPORTANTE:</strong> si quieres ser representado o defendido por ADICAE deberá hacerse socio.
        </p>

        {{-- FORMULARIO MULTIPASO --}}
        <div class="caso-form-card">

            <h2>Rellene el formulario</h2>
            <div class="caso-line caso-line-purple"></div>

            <form class="caso-form" action="#" method="POST">
                @csrf

                {{-- PASOS --}}
                <div class="caso-steps">
                    <button type="button" class="caso-step active" data-step="1">
                        <span><i class="fa-solid fa-user"></i></span>
                        <strong>Datos<br>personales</strong>
                    </button>

                    <div class="caso-step-line"></div>

                    <button type="button" class="caso-step" data-step="2">
                        <span><i class="fa-solid fa-address-card"></i></span>
                        <strong>Datos de<br>contacto</strong>
                    </button>

                    <div class="caso-step-line"></div>

                    <button type="button" class="caso-step" data-step="3">
                        <span><i class="fa-solid fa-info"></i></span>
                        <strong>Info<br>caso</strong>
                    </button>

                    <div class="caso-step-line"></div>

                    <button type="button" class="caso-step" data-step="4">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <strong>Enviar</strong>
                    </button>
                </div>

                {{-- PASO 1 --}}
                <div class="caso-form-step active" data-step-content="1">
                    <div class="caso-form-grid">
                        <div class="caso-form-group">
                            <label for="nombre">Nombre <span>*</span></label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="apellido1">Apellido 1 <span>*</span></label>
                            <input type="text" id="apellido1" name="apellido1" placeholder="Apellido 1" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="apellido2">Apellido 2 <span>*</span></label>
                            <input type="text" id="apellido2" name="apellido2" placeholder="Apellido 2" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="dni">DNI/NIE o pasaporte <span>*</span></label>
                            <input type="text" id="dni" name="dni" placeholder="DNI/NIE o pasaporte" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="sexo">Sexo <span>*</span></label>
                            <select id="sexo" name="sexo" required>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="caso-form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento <span>*</span></label>
                            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="00-00-0000" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="estado_civil">Estado civil <span>*</span></label>
                            <select id="estado_civil" name="estado_civil" required>
                                <option value="Casado/a">Casado/a</option>
                                <option value="Soltero/a">Soltero/a</option>
                                <option value="Divorciado/a">Divorciado/a</option>
                                <option value="Viudo/a">Viudo/a</option>
                            </select>
                        </div>

                        <div class="caso-form-group">
                            <label for="profesion">Profesión <span>*</span></label>
                            <select id="profesion" name="profesion" required>
                                <option value="Abogados">Abogados</option>
                                <option value="Administrativo/a">Administrativo/a</option>
                                <option value="Autónomo/a">Autónomo/a</option>
                                <option value="Empleado/a">Empleado/a</option>
                                <option value="Jubilado/a">Jubilado/a</option>
                                <option value="Desempleado/a">Desempleado/a</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </div>
                    </div>

                    <div class="caso-form-actions one-button">
                        <button type="button" class="caso-form-btn caso-form-btn-solid" data-next="2">
                            Siguiente ›
                        </button>
                    </div>
                </div>

                {{-- PASO 2 --}}
                <div class="caso-form-step" data-step-content="2">
                    <div class="caso-form-grid">
                        <div class="caso-form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" id="direccion" name="direccion" placeholder="Dirección">
                        </div>

                        <div class="caso-form-group">
                            <label for="localidad">Localidad <span>*</span></label>
                            <input type="text" id="localidad" name="localidad" placeholder="Localidad*" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="codigo_postal">Código Postal <span>*</span></label>
                            <input type="text" id="codigo_postal" name="codigo_postal" placeholder="Código Postal" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="provincia">Provincia <span>*</span></label>
                            <input type="text" id="provincia" name="provincia" placeholder="Provincia" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="pais">País</label>
                            <input type="text" id="pais" name="pais" placeholder="País">
                        </div>

                        <div class="caso-form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="Email*" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="telefono1">Teléfono 1 <span>*</span></label>
                            <input type="text" id="telefono1" name="telefono1" placeholder="Teléfono 1*" required>
                        </div>

                        <div class="caso-form-group">
                            <label for="telefono2">Teléfono 2</label>
                            <input type="text" id="telefono2" name="telefono2" placeholder="Teléfono 2*">
                        </div>
                    </div>

                    <div class="caso-form-actions">
                        <button type="button" class="caso-form-btn caso-form-btn-outline" data-prev="1">
                            ‹ Anterior
                        </button>

                        <button type="button" class="caso-form-btn caso-form-btn-solid" data-next="3">
                            Siguiente ›
                        </button>
                    </div>
                </div>

                {{-- PASO 3 --}}
                <div class="caso-form-step" data-step-content="3">
                    <div class="caso-form-grid">
                        <div class="caso-form-group caso-form-full">
                            <label for="observaciones">Observaciones</label>
                            <textarea id="observaciones" name="observaciones"></textarea>
                        </div>
                    </div>

                    <div class="caso-form-actions">
                        <button type="button" class="caso-form-btn caso-form-btn-outline" data-prev="2">
                            ‹ Anterior
                        </button>

                        <button type="button" class="caso-form-btn caso-form-btn-solid" data-next="4">
                            Siguiente ›
                        </button>
                    </div>
                </div>

                {{-- PASO 4 --}}
                <div class="caso-form-step" data-step-content="4">

                    <div class="caso-checkbox-block">
                        <label>Solicitud <span>*</span></label>

                        <div class="caso-checkbox-row">
                            <input type="checkbox" id="solicitud" name="solicitud" required>
                            <label for="solicitud">
                                Manifiesto expresamente la voluntad de incorporarme o adherirme a la plataforma
                                de FWU Life Insurance y recibir información de este caso.
                            </label>
                        </div>
                    </div>

                    <div class="caso-checkbox-block">
                        <label>Aceptación <span>*</span></label>

                        <div class="caso-checkbox-row">
                            <input type="checkbox" id="privacidad" name="privacidad" required>
                            <label for="privacidad">
                                He leído y acepto la
                               <a href="{{ url('/politica-privacidad') }}" target="_blank">Política de Privacidad</a>
                                <br>
                                <strong>Información básica sobre protección de datos:</strong>
                                Responsable: ADICAE – Finalidades: Gestionar su solicitud de participación en las
                                actividades, comunicación, información y envío de boletines informativos –
                                Legitimación: Consentimiento del interesado – Destinatarios: No se cederán datos
                                a terceros – Derechos: Tiene derecho a acceder, rectificar y suprimir los datos.
                            </label>
                        </div>
                    </div>

                    <div class="caso-form-actions">
                        <button type="button" class="caso-form-btn caso-form-btn-outline" data-prev="3">
                            ‹ Anterior
                        </button>

                        <button type="submit" class="caso-form-btn caso-form-btn-solid">
                            Enviar
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>
</section>


{{-- ÚLTIMAS NOTICIAS --}}
<section id="ultimas-noticias" class="caso-news-section caso-tab-panel" data-caso-panel="ultimas-noticias">
    <div class="container caso-news-container">

        <div class="caso-section-heading">
            <h2>Últimas noticias del caso FWU Life Insurance</h2>
            <div class="caso-line caso-line-purple"></div>
        </div>

        <p class="caso-section-intro">
            Aquí encontrarás toda la información referente al caso FWU Life Insurance.
        </p>

        <div class="caso-news-grid">

            <article class="caso-news-card">
                <div class="caso-news-content">
                    <h3>ATENCIÓN AFECTADOS DE LA QUIEBRA DE FWU LIFE Y SU COMERCIALIZADORA OVB</h3>
                    <p>
                        En ADICAE convocamos una reunión informativa nacional de socios y afectados este miércoles
                        5 de noviembre a las 17:30. Para más información contactar con vuestra sede ADICAE más cercana.
                    </p>
                    <a href="https://www.adicae.es/atencion-afectados-de-la-quiebra-de-fwu-life-y-su-comercializadora-ovb/" target="_blank">
    Leer noticia
</a>
                </div>
                <div class="caso-news-date">04/11/2025</div>
            </article>

            <article class="caso-news-card">
                <div class="caso-news-content">
                    <h3>
                        ADICAE ACONSEJA A LOS AFECTADOS POR LA QUIEBRA DE FWU NO PRECIPITARSE TRAS HABER
                        RECIBIDO ÉSTOS LA PROPUESTA DE PAGO POR PARTE DE LA LIQUIDADORA LUXEMBURGUESA,
                        MUY POR DEBAJO DE LA CANTIDAD INVERTIDA
                    </h3>
                    <p>
                        La asociación de consumidores, además, instará a los participantes de su plataforma de
                        afectados a preguntar por escrito a la Dirección General de Seguros si la liquidación
                        ofrecida es lo suficientemente clara y concisa para el usuario.
                    </p>
                   <a href="https://www.adicae.es/adicae-aconseja-a-los-afectados-por-la-quiebra-de-fwu-no-precipitarse-tras-haber-recibido-estos-la-propuesta-de-pago-por-parte-de-la-liquidadora-luxemburguesa-muy-por-debajo-de-la-cantidad-invertida/" target="_blank">
    Leer noticia
</a>
                </div>
                <div class="caso-news-date">09/09/2025</div>
            </article>

            <article class="caso-news-card">
                <div class="caso-news-content">
                    <h3>RESUMEN DEL ÚLTIMO COMUNICADO DEL LIQUIDADOR SOBRE FWU LIFE INSURANCE LUX S.A.</h3>
                    <p>
                        Como ya habréis leído en el comunicado oficial, la aseguradora FWU Life Insurance Lux S.A.
                        y su empresa matriz FWU AG están en situación de insolvencia.
                    </p>
                    <a href="https://www.adicae.es/resumen-del-ultimo-comunicado-del-liquidador-sobre-fwu-life-insurance-lux-s-a/" target="_blank">
    Leer noticia
</a>
                </div>
                <div class="caso-news-date">18/07/2025</div>
            </article>

            <article class="caso-news-card">
                <div class="caso-news-content">
                    <h3>
                        INFORMACIÓN PARA LOS CLIENTES DE LOS SEGUROS DE VIDA-AHORRO DE LA ASEGURADORA
                        DE LUXEMBURGO FWU LIFE INSURANCE LUX, S.A. COMERCIALIZADOS EN ESPAÑA A TRAVÉS
                        DE LA CORREDURÍA DE SEGUROS OVB ALLFINANZ
                    </h3>
                    <p>
                        Ante la imposibilidad de cumplir con los requisitos de solvencia, la autoridad de Luxemburgo
                        declara la Liquidación de FWU Insurance Lux, S.A.
                    </p>
                    <a href="https://www.adicae.es/informacion-para-los-clientes-de-los-seguros-de-vida-ahorro-de-la-aseguradora-de-luxemburgo-fwu-life-insurance-lux-s-a-comercializados-en-espana-a-traves-de-la-correduria-de-seguros-ovb-allfinanz/" target="_blank">
    Leer noticia
</a>
                </div>
                <div class="caso-news-date">31/03/2025</div>
            </article>

        </div>

    </div>
</section>

{{-- ¿QUIERE RECLAMAR CON ADICAE? --}}
<div class="caso-claim-section">
    <div class="container caso-claim-container">

        <div class="caso-claim-block">

            <div class="caso-claim-img">
                <img src="{{ asset('assets/adicae/Reclame-con-ADICAE.jpg') }}"
                     alt="Reclamar con ADICAE">
            </div>

            <div class="caso-claim-text">
                <h2>¿Quiere reclamar con ADICAE?</h2>
                <div class="caso-line caso-line-purple"></div>

                <p>
                    Obtenga con ADICAE la representación y asesoramiento legal que necesita,
                    información exclusiva de los casos y únase a una asociación comprometida
                    en la lucha contra las injusticias y los abusos.
                </p>

                <p>Únase y reclame lo que es suyo.</p>

                <a href="{{ url('/hagase-socio-de-adicae') }}" class="caso-small-btn">Hágase socio</a>
            </div>

        </div>

    </div>
</div>


{{-- O SI LO PREFIERE --}}
<section class="caso-opciones-section caso-tab-panel-extra">
    <div class="container caso-opciones-container">

        <div class="caso-opciones-heading">
            <h2>O si lo prefiere</h2>
            <div class="caso-line caso-line-yellow"></div>
            <p>
                Si no ha recibido su número de inscripción y contraseña, quiere darse de baja de la plataforma
                o modificar sus datos personales, póngase en contacto con nosotros enviado sus datos personales
                y DNI a través de las siguientes opciones:
            </p>
        </div>

        <div class="caso-opciones-grid">

            <article class="caso-opcion-card">
                <h3>Alta presencial</h3>
                <div class="caso-line caso-line-purple"></div>
                <p>En cualquiera de nuestros sedes.</p>
                <a href="{{ url('/la-asociacion/localizacion-de-sedes') }}" class="caso-small-btn">Ver sedes</a>
            </article>

            <article class="caso-opcion-card">
                <h3>Alta por email</h3>
                <div class="caso-line caso-line-purple"></div>
                <p>Envie un email con sus datos personales y DNI a:</p>
                <p class="caso-email">fwulife@adicae.net</p>
            </article>

            <article class="caso-opcion-card">
                <h3>Baja o modificación de datos</h3>
                <div class="caso-line caso-line-purple"></div>
                <p>Envie un email con sus datos personales y DNI a:</p>
                <p class="caso-email">socios@colectivos.adicae.net</p>
            </article>

        </div>

    </div>
</section>


{{-- CONVOCATORIAS --}}
<section id="convocatorias" class="caso-convocatorias-section caso-tab-panel" data-caso-panel="convocatorias">
    <div class="container caso-convocatorias-container">

        <div class="caso-section-heading">
            <h2>Convocatorias y eventos de FWU Life Insurance</h2>
            <div class="caso-line caso-line-purple"></div>
        </div>

        <p class="caso-section-intro">
            Aquí encontrarás toda la información referente a asambleas, convocatorias y eventos del caso FWU Life Insurance.
        </p>

        <div class="caso-claim-block">
            <div class="caso-claim-img">
                <img src="{{ asset('assets/adicae/Reclame-con-ADICAE.jpg') }}" alt="Reclamar con ADICAE">
            </div>

            <div class="caso-claim-text">
                <h2>¿Quiere reclamar con ADICAE?</h2>
                <div class="caso-line caso-line-purple"></div>

                <p>
                    Obtenga con ADICAE la representación y asesoramiento legal que necesita, información exclusiva
                    de los casos y únase a una asociación comprometida en la lucha contra las injusticias y los abusos.
                </p>

                <p>Únase y reclame lo que es suyo.</p>

                <a href="{{ url('/hagase-socio-de-adicae') }}" class="caso-small-btn">Hágase socio</a>
            </div>
        </div>

    </div>
</section>


{{-- DOCUMENTOS --}}
<section id="documentos" class="caso-documentos-section caso-tab-panel" data-caso-panel="documentos">
    <div class="container caso-documentos-container">

        <div class="caso-section-heading">
            <h2>Descarga de documentos</h2>
            <div class="caso-line caso-line-purple"></div>
        </div>

        <div class="caso-documentos-list">

            <a href="https://www.adicae.es/wp-content/uploads/2025/09/INSCRIPCION-FWU.pdf" target="_blank" rel="nofollow">
                <i class="fa-solid fa-file-arrow-down"></i>
                Boletín de inscripción socio titular
            </a>

            <a href="https://www.adicae.es/wp-content/uploads/2025/03/Informacion-para-Usuarios-FWU-life-asurance.pdf" target="_blank" rel="nofollow">
                <i class="fa-solid fa-file-arrow-down"></i>
                Información para Usuarios FWU life Insurance
            </a>

            <a href="https://www.adicae.es/wp-content/uploads/2025/03/Informacion-Comisiariado-seguros-luxemburgo.pdf" target="_blank" rel="nofollow">
                <i class="fa-solid fa-file-arrow-down"></i>
                Información Comisiariado seguros luxemburgo
            </a>

            <a href="https://www.adicae.es/wp-content/uploads/2025/03/Comunicacion-DGS-situacion-financiera-grupo-FWU_-27-febrero-2025.pdf" target="_blank" rel="nofollow">
                <i class="fa-solid fa-file-arrow-down"></i>
                Comunicación DGS situación financiera grupo FWU_ 27 febrero 2025
            </a>

            <a href="https://www.adicae.es/wp-content/uploads/2025/07/FWU-Seguro-de-Vida-Lux-S.A_.pdf" target="_blank" rel="nofollow">
                <i class="fa-solid fa-file-arrow-down"></i>
                Documento explicativo FWU Seguro de Vida Lux S.A
            </a>

        </div>

    </div>
</section>


{{-- FAQ --}}
<section id="preguntas-frecuentes" class="caso-faq-section caso-tab-panel" data-caso-panel="preguntas-frecuentes">
    <div class="container caso-faq-container">

        <div class="caso-faq-title">
            <span>
                <i class="fa-solid fa-question"></i>
                Preguntas frecuentes
            </span>
        </div>

        <div class="caso-line caso-line-purple"></div>

        <div class="caso-faq-list">

            <details class="caso-faq-item">
                <summary>¿Cuál es la situación actual de FWU?</summary>
                <div class="caso-faq-content">
                    <p>
                        La FWU AG, matriz con sede en Grünwald, Alemania, se declaró insolvente el 19 de julio de 2024,
                        lo que detonó dificultades en su filial aseguradora luxemburguesa.
                    </p>
                    <ul>
                        <li>El 31 de enero de 2025, el tribunal de distrito de Luxemburgo declaró formalmente la disolución y liquidación de FWU Life Insurance Lux S.A.</li>
                        <li>Desde esa fecha se impidió el cobro de primas y se bloqueó el acceso al sistema informático de la aseguradora.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>Impacto local en España</summary>
                <div class="caso-faq-content">
                    <ul>
                        <li>Se estima que más de 40.000 contratantes españoles se han visto afectados por la liquidación de FWU Life Insurance Lux S.A.</li>
                        <li>La DGSFP informó el 27 de febrero de 2025 que, desde el 23 de enero de 2025, el cobro de primas está suspendido, la empresa cesó actividad y los contratos en marcha quedaron bloqueados.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>Proceso de liquidación</summary>
                <div class="caso-faq-content">
                    <ul>
                        <li>El tribunal luxemburgués declaró la liquidación el 31 de enero de 2025, designando a Yann Baden como liquidador.</li>
                        <li>El proceso estableció un plazo para recibir la notificación individual a cada asegurado, con opción de presentar reclamaciones hasta el 31 de enero de 2028.</li>
                        <li>El reembolso se hará conforme al valor liquidativo de los activos subyacentes, sin intereses por el tiempo transcurrido.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>¿Qué recuperaré?</summary>
                <div class="caso-faq-content">
                    <ul>
                        <li>El proceso luxemburgués prioriza los derechos de los tomadores sobre otros acreedores, pero no garantiza recuperación total del capital.</li>
                        <li>En productos PIAS, debido a menor carga de comisiones y buena evolución de los mercados, las pérdidas podrían ser menores.</li>
                        <li>En los unit-linked, especialmente a corto plazo, los resultados podrían ser muy insatisfactorios.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>¿Qué documentación debo recopilar?</summary>
                <div class="caso-faq-content">
                    <div class="caso-table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Contrato de seguro / póliza</td>
                                    <td>El documento original firmado con FWU, generalmente un PIAS o unit-linked.</td>
                                </tr>
                                <tr>
                                    <td>Condiciones generales y particulares</td>
                                    <td>Donde se describen las garantías, riesgos, comisiones, duración, etc.</td>
                                </tr>
                                <tr>
                                    <td>Boletín de suscripción / solicitud</td>
                                    <td>El formulario que rellenaste al contratar, con firma y fecha.</td>
                                </tr>
                                <tr>
                                    <td>Resúmenes anuales / extractos periódicos</td>
                                    <td>Documentos que muestren la evolución del valor de tu inversión.</td>
                                </tr>
                                <tr>
                                    <td>Carta o notificación del liquidador</td>
                                    <td>Será esencial para el procedimiento luxemburgués.</td>
                                </tr>
                                <tr>
                                    <td>Documento de identidad</td>
                                    <td>DNI o pasaporte en vigor.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>Documentación respecto el mediador</summary>
                <div class="caso-faq-content">
                    <div class="caso-table-wrap">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Publicidad o folletos comerciales</td>
                                    <td>Materiales donde se prometía rentabilidad garantizada, ausencia de riesgos, etc.</td>
                                </tr>
                                <tr>
                                    <td>Simulaciones financieras</td>
                                    <td>Cálculos o gráficas entregadas por el comercial para convencerte.</td>
                                </tr>
                                <tr>
                                    <td>Prueba de asesoramiento / visitas</td>
                                    <td>Correos, WhatsApps, informes de perfil de cliente, si existen.</td>
                                </tr>
                                <tr>
                                    <td>Datos del agente o mediador</td>
                                    <td>Nombre del asesor de OVB que vendió el producto, si se recuerda.</td>
                                </tr>
                                <tr>
                                    <td>Quejas o reclamaciones anteriores</td>
                                    <td>Escritas a FWU, OVB o la DGSFP antes de la quiebra.</td>
                                </tr>
                                <tr>
                                    <td>Prueba de pago de primas</td>
                                    <td>Recibos bancarios, cargos domiciliados, justificantes, etc.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>¿Qué hacer con estos documentos?</summary>
                <div class="caso-faq-content">
                    <h3>Para Luxemburgo, recuperar inversión:</h3>
                    <ul>
                        <li>Espera la carta del liquidador.</li>
                        <li>Después, rellena y devuelve el formulario de reclamación con copia de la póliza, documento de identidad y extractos que demuestren tu crédito.</li>
                    </ul>

                    <h3>Para España, acción judicial o DGSFP:</h3>
                    <ul>
                        <li>Reúne todos los elementos posibles para demostrar que el producto era inadecuado para tu perfil.</li>
                        <li>Acude a ADICAE como asociación especializada en banca y seguros para evaluar posibles vías de reclamación.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>¿Hay posibilidad de efectuar reclamación contra OVB?</summary>
                <div class="caso-faq-content">
                    <ul>
                        <li>Existen acciones legales en España contra OVB Allfinanz por posible venta inadecuada, falta de información sobre riesgos, adecuación y comisiones.</li>
                        <li>También pueden analizarse casos de posible publicidad engañosa o asesoramiento deficiente.</li>
                    </ul>
                </div>
            </details>

            <details class="caso-faq-item">
                <summary>Recomendaciones para afectados</summary>
                <div class="caso-faq-content">
                    <ul>
                        <li>Prepara tu documentación: contrato, folletos, extractos, comunicaciones de OVB y FWU.</li>
                        <li>Incorpórate al procedimiento luxemburgués antes del 31 de enero de 2028 para recibir tu crédito.</li>
                        <li>Paralelamente, puedes reclamar contra OVB mediante reclamación a la entidad, reclamación administrativa ante DGSFP o demanda civil.</li>
                        <li>Contacta con ADICAE para maximizar posibilidades de recuperar tu inversión.</li>
                    </ul>
                </div>
            </details>

        </div>

    </div>
</section>


{{-- SCRIPT FORMULARIO MULTIPASO --}}
{{-- SCRIPT PESTAÑAS + FORMULARIO MULTIPASO --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       PESTAÑAS PRINCIPALES DEL CASO
    ===================================================== */

    const tabButtons = document.querySelectorAll('[data-caso-tab]');
    const tabPanels = document.querySelectorAll('[data-caso-panel]');

    function showCasoTab(tabName) {
        tabButtons.forEach(button => {
            button.classList.toggle('active', button.dataset.casoTab === tabName);
        });

        tabPanels.forEach(panel => {
            panel.classList.toggle('active', panel.dataset.casoPanel === tabName);
        });

        const nav = document.querySelector('.caso-nav-section');

        if (nav) {
            window.scrollTo({
                top: nav.offsetTop,
                behavior: 'smooth'
            });
        }
    }

    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            showCasoTab(this.dataset.casoTab);
        });
    });


    /* =====================================================
       FORMULARIO MULTIPASO
    ===================================================== */

    const stepButtons = document.querySelectorAll('.caso-step');
    const stepContents = document.querySelectorAll('.caso-form-step');
    const nextButtons = document.querySelectorAll('[data-next]');
    const prevButtons = document.querySelectorAll('[data-prev]');

    function showStep(step) {
        stepButtons.forEach(button => {
            const buttonStep = parseInt(button.dataset.step);
            button.classList.toggle('active', buttonStep <= step);
        });

        stepContents.forEach(content => {
            content.classList.toggle('active', parseInt(content.dataset.stepContent) === step);
        });
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', function () {
            showStep(parseInt(this.dataset.next));
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', function () {
            showStep(parseInt(this.dataset.prev));
        });
    });

    stepButtons.forEach(button => {
        button.addEventListener('click', function () {
            showStep(parseInt(this.dataset.step));
        });
    });

});
</script>

@endsection