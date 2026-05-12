# Cambios realizados

## Páginas completadas

- `resources/views/pages/colectivos-de-afectados.blade.php`
- Casos colectivos restantes:
  - Banco Popular
  - Caso Dentix
  - Centro de Estética Ideal
  - Centro de Estética Único
  - Ciberestafas
  - Cláusulas suelo
  - Estética Europiel
  - Gastos hipotecarios
  - Tarjetas revolving
- `resources/views/pages/actualidad.blade.php`
- `resources/views/pages/noticias-casos-colectivos.blade.php`
- `resources/views/pages/medios-de-comunicacion.blade.php`
- `resources/views/pages/hagase-socio.blade.php`
- `resources/views/pages/accesibillidad.blade.php`
- `resources/views/pages/aviso-legal.blade.php`
- `resources/views/pages/politica-privacidad.blade.php`
- `resources/views/pages/politica-cookies.blade.php`
- `resources/views/pages/historica-sentencia-del-supremo-clausulas-suelo.blade.php`

## Parciales reutilizables creados

- `resources/views/partials/casos/caso-template.blade.php`
- `resources/views/partials/casos/formulario-plataforma.blade.php`
- `resources/views/partials/casos/claim-adicae.blade.php`
- `resources/views/partials/casos/opciones-contacto.blade.php`

## JS añadido

En `resources/js/app.js` se han añadido:

- `initCasoTabs()` para que cada apartado de los casos colectivos funcione como pestaña interna.
- `initCasoFormSteps()` para formularios multipaso reutilizables.

## Rutas corregidas y añadidas

Se ha actualizado `routes/web.php` para incluir rutas de:

- índice de colectivos
- todos los casos colectivos
- actualidad
- noticias de casos colectivos
- páginas legales
- accesibilidad
- aviso legal
- política de privacidad
- política de cookies

## CSS añadido

Se han añadido bloques genéricos reutilizables al final de `resources/css/app.css` para:

- tarjetas genéricas
- listados de noticias
- índice de colectivos
- páginas legales
- página de socio
- bloques responsive comunes

## Pendiente de validación en entorno local

No se ha podido ejecutar `php artisan route:list` en este entorno porque falta la extensión PHP `mbstring`.
En local conviene ejecutar:

```bash
php artisan view:clear
php artisan cache:clear
php artisan route:clear
npm install
npm run build
```
