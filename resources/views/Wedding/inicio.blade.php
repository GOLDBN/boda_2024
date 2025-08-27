<!doctype html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laura y Luis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>

<style>
  @font-face {
    font-family: CaviarDreams_Bold;
    src: url('{{ asset('assets/img/CaviarDreams_Bold.ttf') }}');
  }
  @font-face {
    font-family: AdoraBouton_Regular;
    src: url('{{ asset('assets/img/AdoraBouton_Regular.ttf') }}');
  }
  @font-face {
    font-family: Savoye_LET_Plain;
    src: url('{{ asset('assets/img/Savoye_LET_Plain.ttf') }}');
  }

  html, body { min-height: 100%; }

  body{
    background-image: url('{{ asset('assets/img/bg.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
  }
  body::before{
    content:"";
    position: fixed;
    inset: 0;
    background: rgba(255,255,255,.5);
    pointer-events: none;
    z-index: 0;
  }

  .img_ramita{ width: 50%; }

  .titulo_prinicpal{
    font-family: 'AdoraBouton_Regular';
    font-size: clamp(40px, 10vw, 90px);
    color: #C5A88C;
  }
  .titulos_h2{
    font-family: 'CaviarDreams_Bold';
    font-size: clamp(16px, 2.5vw, 25px);
    color: #C5A88C;
    font-weight: bold;
    text-decoration: none;
  }
  .titulos_h3{
    font-family: 'CaviarDreams_Bold';
    font-size: clamp(18px, 3vw, 25px);
    color: #744C27;
    font-weight: bold;
  }

  .btn_blanco{
    background: #fff;
    color: #C5A88C;
    border-radius: 50px;
    padding: clamp(8px, 2vw, 10px) clamp(28px, 6vw, 90px);
    font-size: clamp(16px, 3.2vw, 30px);
    text-decoration: none;
    display: inline-block;
  }

  .card_hospedaje {
    background: #fff;
    border-radius: 20px;
    color: #744C27;
    box-shadow: 0 6px 20px rgba(0,0,0,.08);
    height: 100%;
  }

  .img_lugar,
  .img_portada{
    width: min(90%, 900px);
    opacity: 0.6;
  }

  /* Contador */
  .contador .box{
    background:#fff;
    border-radius:14px;
    padding: clamp(10px, 2.5vw, 16px) clamp(14px, 3vw, 22px);
    text-align:center;
    min-width: clamp(70px, 16vw, 120px);
    box-shadow: 0 6px 20px rgba(0,0,0,.08);
  }
  .contador .box span{
    display:block;
    font-family:'CaviarDreams_Bold';
    font-size: clamp(22px, 8vw, 42px);
    line-height:1;
    color:#744C27;
  }
  .contador .box small{
    display:block;
    margin-top:6px;
    font-size: clamp(10px, 2.8vw, 14px);
    letter-spacing:.5px;
    color:#744C27;
    opacity:.9;
  }

  @media (max-width: 480px){
    .img_ramita{ width:70%; }
  }
</style>

    <!-- Hero / Portada -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <p class="text-center">
            <img src="{{ asset('assets/img/Recurso1.png') }}" alt="decoración" class="img_ramita">
          </p>
        </div>

        <div class="col-12">
          <h1 class="text-center titulo_prinicpal">Laura y Luis</h1>
          <h3 class="text-center titulos_h2 mt-5">22. NOVIEMBRE. 2025</h3>
        </div>

        <div class="col-12">
          <p class="text-center">
            <img src="{{ asset('assets/img/Recurso4.png') }}" alt="portada" class="img_portada">
          </p>
        </div>

        <div class="col-12">
          <h3 class="text-center titulos_h2">TE ESPERAMOS PARA CELEBRAR NUESTRA BODA</h3>
          <p class="text-center titulos_h2">FALTAN</p>

          <!-- Contador -->
          <div id="countdown" class="contador d-flex justify-content-center gap-3 flex-wrap">
            <div class="box">
              <span id="d">0</span>
              <small>días</small>
            </div>
            <div class="box">
              <span id="h">00</span>
              <small>horas</small>
            </div>
            <div class="box">
              <span id="m">00</span>
              <small>min</small>
            </div>
            <div class="box">
              <span id="s">00</span>
              <small>seg</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lugar -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Lugar</h1>
        </div>

        <div class="col-12">
          <p class="text-center">
            <img class="img_lugar" src="{{ asset('assets/img/Recurso3.png') }}" alt="mapa">
          </p>
          <p class="text-center">
            <a href="https://maps.app.goo.gl/jKh63CfKjdhYq8T28?g_st=aw" target="_blank" class="titulos_h2">
              Ex hacienda de Apanquetzalco. C. Apanquetzalco, Vicente Estrada Cajigal, <br>
              62732 Yautepec de Zaragoza, Mor.
            </a>
          </p>
        </div>

        <div class="col-12">
          <p class="text-center mt-4">
            <a class="btn_blanco" href="https://maps.app.goo.gl/jKh63CfKjdhYq8T28?g_st=aw" target="_blank" rel="noopener noreferrer">Ubicación</a>
          </p>
        </div>
      </div>
    </section>

    <!-- Orden del día -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Orden del día</h1>
          <p class="text-center">
            <img src="{{ asset('assets/img/Recurso3.png') }}" alt="decoración" class="img_lugar">
          </p>
        </div>
      </div>
    </section>

    <!-- Hospedaje -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Recomendaciones de hospedaje</h1>
        </div>

        <div class="col-12 mt-3">
          <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card_hospedaje p-3">
                <h5 class="text-center mb-2">HOTEL AQUETZALLI</h5>
                <h6 class="mb-2">Tiempo aproximado : 15 minutos</h6>
                <p class="mb-0">
                  Hotel Aquetzalli Cocoyoc, Carretera Federal
                  Cuautla Cuernavaca Km 34.25 Municipio
                  Yautepec de Zaragoza Cocoyoc, 62736
                  Yautepec de Zaragoza, Mor.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card_hospedaje p-3">
                <h5 class="text-center mb-2">RANCHO MACLOY</h5>
                <h6 class="mb-2">Tiempo aproximado : 23 minutos</h6>
                <p class="mb-0">
                  Rancho Macloy, Carr. Federal Cuernavaca -
                  Cuautla KM 31.5, San Carlos, 62737 Yautepec,
                  Mor.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card_hospedaje p-3">
                <h5 class="text-center mb-2">OTRA OPCIÓN</h5>
                <h6 class="mb-2">Tiempo aproximado : 20 minutos</h6>
                <p class="mb-0">
                  Dirección / referencia de hospedaje adicional
                  cerca del lugar del evento.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Presentes -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Presentes</h1>
          <p class="text-center titulos_h2">
            Su presencia en nuestra boda es nuestro mejor regalo, pero si
            desean tener un detalle con nosotros, les dejamos estas
            opciones:
          </p>

          <p class="text-center p-3">
            <a class="btn_blanco" href="https://amazon.com" target="_blank" rel="noopener noreferrer">AMAZON</a>
          </p>
          <p class="text-center p-3">
            <a class="btn_blanco" href="https://liverpool.com.mx" target="_blank" rel="noopener noreferrer">LIVERPOOL</a>
          </p>
          <p class="text-center p-3">
            <a class="btn_blanco" href="#" target="_blank" rel="noopener noreferrer">DATOS BANCARIOS</a>
          </p>
        </div>
      </div>
    </section>

    <!-- Dots Memories -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Dots Memories</h1>
          <p class="text-center titulos_h2">
            No nos queremos perder nada, por favor ayúdanos a guardar
            las mejores fotos y vídeos de momentos de la boda
          </p>
          <p class="text-center titulos_h2">
            <a class="btn_blanco" href="#" target="_blank" rel="noopener noreferrer">APLICACIÓN</a>
          </p>
        </div>
      </div>
    </section>

    <!-- Confirmar asistencia -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Confirmar asistencia</h1>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


<!-- Countdown JS (22 nov 2025) -->
<script>
(function () {
  const target = new Date(2025, 10, 22, 0, 0, 0); // 22-Nov-2025 00:00 local

  const dEl = document.getElementById('d');
  const hEl = document.getElementById('h');
  const mEl = document.getElementById('m');
  const sEl = document.getElementById('s');

  function pad(n){ return n.toString().padStart(2,'0'); }

  let timer = null;

  function tick(){
    const now  = new Date();
    let diff   = target - now;

    if (diff <= 0) {
      dEl.textContent = '0';
      hEl.textContent = '00';
      mEl.textContent = '00';
      sEl.textContent = '00';
      if (timer) clearInterval(timer);
      return;
    }

    const dayMs = 24*60*60*1000;
    const hrMs  = 60*60*1000;
    const minMs = 60*1000;

    const d = Math.floor(diff / dayMs);   diff -= d*dayMs;
    const h = Math.floor(diff / hrMs);    diff -= h*hrMs;
    const m = Math.floor(diff / minMs);   diff -= m*minMs;
    const s = Math.floor(diff / 1000);

    dEl.textContent = d.toString();
    hEl.textContent = pad(h);
    mEl.textContent = pad(m);
    sEl.textContent = pad(s);
  }

  tick();
  timer = setInterval(tick, 1000);
})();
</script>


  </body>
</html>
