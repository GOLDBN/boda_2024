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
    font-family: DancingScript-VariableFont_wght;
    src: url('{{ asset('assets/img/DancingScript-VariableFont_wght.ttf') }}');
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

  .img_ramita{
        width: 40%;
    }

  .img_acu{
    width: 30%;
  }

 .img_acu2{
    width: 20%;
  }


  .titulo_prinicpal{
    font-family: 'AdoraBouton_Regular';
    font-size: clamp(45px, 14vw, 120px);
    color: #b17f4a;
  }
  .titulos_h2{
    font-family: 'CaviarDreams_Bold';
    font-size: clamp(16px, 2.5vw, 25px);
    color: #b17f4a;
    font-weight: bold;
    text-decoration: none;
  }
  .titulos_h3{
    font-family: 'DancingScript-VariableFont_wght';
    font-size: 50px;
    color: #744C27;
    margin-top: 5rem!important;
  }

  .btn_blanco{
    font-family: 'CaviarDreams_Bold';
    background: #fff;
    color: #b17f4a;
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
    opacity: 0.9;
  }

  /* Contador */
  .contador .box{
    background:#ffffff00;
    border-radius:14px;
    padding: clamp(10px, 2.5vw, 16px) clamp(14px, 3vw, 22px);
    text-align:center;
    min-width: clamp(70px, 16vw, 120px);
    /* box-shadow: 0 6px 20px rgba(0,0,0,.08); */
  }

  .contador .box span{
    display:block;
    font-family:'CaviarDreams_Bold';
    font-size: clamp(22px, 8vw, 22px);
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
          <h3 class="text-center titulos_h2 mb-3">TE ESPERAMOS PARA CELEBRAR NUESTRA BODA</h3>
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
          <h1 class="text-center titulos_h3 mt-5">Lugar</h1>
        </div>

        <div class="col-12">
          <p class="text-center">
            <img class="img_lugar" src="{{ asset('assets/img/Recurso3.png') }}" alt="mapa">
          </p>
          <p class="text-center">
            <a href="https://maps.app.goo.gl/AMTQoSQyLKuYYwaN6?g_st=aw" target="_blank" class="titulos_h2">
              Ex hacienda de Apanquetzalco. C. Apanquetzalco, Vicente Estrada Cajigal, <br>
              62732 Yautepec de Zaragoza, Mor.
            </a>
          </p>
        </div>

        <div class="col-12">
          <p class="text-center mt-4">
            <a class="btn_blanco" href="https://maps.app.goo.gl/AMTQoSQyLKuYYwaN6?g_st=aw" target="_blank" rel="noopener noreferrer">Ubicación</a>
          </p>
        </div>
      </div>
    </section>

    <!-- Orden del día -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3 mt-5">Orden del día</h1>
          <p class="text-center">
            <img src="{{ asset('assets/img/orden.png') }}" alt="decoración" class="img_lugar" style="opacity: 1!important">
          </p>
        </div>
      </div>
    </section>

    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3 mt-5">Código de vestimenta</h1>
        </div>

        <div class="col-12">
          <p class="text-center">
            <img src="{{ asset('assets/img/Vestimenta.png') }}" alt="decoración" class="img_acu">
          </p>
        </div>

        <div class="col-12">
          <p class="text-center titulos_h2">
            FORMAL <br>
            Para garantizar la comodidad de todos nuestros invitados, te pedimos que
            consideres llevar tacones adecuados para caminar sobre pasto y gravilla.
            Evita tacones de aguja ya que pueden hundirse en el suelo. Recuerda que
            habrá toro mecánico y otras amenidades para quien guste aprovecharlas.
            Evitar colores beige, verde oliva y vino
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

        <div class="col-12 mt-5">
          <div class="row g-4">

            <div class="col-6 col-md-6 col-lg-6">
                <a href="https://maps.app.goo.gl/jKh63CfKjdhYq8T28?g_st=aw" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
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
                </a>
            </div>

            <div class="col-6 col-md-6 col-lg-6">
                <a href="https://maps.app.goo.gl/1HSonAsMnC4v3sSc9?g_st=aw" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
                    <div class="card_hospedaje p-3">
                        <h5 class="text-center mb-2">RANCHO MACLOY</h5>
                        <h6 class="mb-2">Tiempo aproximado : 23 minutos</h6>
                        <p class="mb-0">
                        Rancho Macloy, Carr. Federal Cuernavaca -
                        Cuautla KM 31.5, San Carlos, 62737 Yautepec,
                        Mor.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-3"></div>

            <div class="col-6 col-md-6 col-lg-6">
                <a href="https://maps.app.goo.gl/tfqkW9LWxgJurz627?g_st=aw" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
                    <div class="card_hospedaje p-3">
                        <h5 class="text-center mb-2">Hotel San Agustin</h5>
                        <h6 class="mb-2">Tiempo aproximado : 15 minutos</h6>
                        <p class="mb-0">
                            Niños Heroes 43, San Carlos, 62737 Yautepec de Zaragoza, Mor.
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-3"></div>


          </div>
        </div>

      </div>
    </section>

    <!-- Presentes -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3 mt-5">Presentes</h1>

          <p class="text-center">
            <img src="{{ asset('assets/img/acu_9.png') }}" alt="decoración" class="img_acu2">
          </p>

          <p class="text-center titulos_h2">
            Su presencia en nuestra boda es nuestro mejor regalo, pero si
            desean tener un detalle con nosotros, les dejamos estas
            opciones:
          </p>

          <p class="text-center p-3">
            <a class="btn_blanco" href="https://www.amazon.com.mx/wedding/registry/3IBEO4EY4ETYC" target="_blank" rel="noopener noreferrer">AMAZON</a>
          </p>
          <p class="text-center p-3">
            <a class="btn_blanco" href="https://mesaderegalos.liverpool.com.mx/milistaderegalos/51752229" target="_blank" rel="noopener noreferrer">LIVERPOOL</a>
          </p>
          <p class="text-center p-3">

            <a type="button" class="btn btn_blanco" data-bs-toggle="modal" data-bs-target="#exampleModal">
                DATOS BANCARIOS
            </a>

          </p>
        </div>
      </div>
    </section>

    <!-- Dots Memories -->
    <section class="container-lg px-2 px-md-3 px-lg-4 py-0 py-md-3 py-lg-3 position-relative">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center titulos_h3">Dots Memories</h1>

          <p class="text-center">
            <img src="{{ asset('assets/img/acu_10.png') }}" alt="decoración" class="img_acu2">
          </p>

          <p class="text-center titulos_h2">
            No nos queremos perder nada, por favor ayúdanos a guardar
            las mejores fotos y vídeos de momentos de la boda
          </p>
          <p class="text-center titulos_h2">
            <a class="btn_blanco" href="https://web.dotstheapp.com/a?group=2137490&code=IckKdvtm&dlBy=luisg.diazb.arq&utm_source=guest&utm_medium=share&utm_campaign=guest_event_album&force_app=1" target="_blank" rel="noopener noreferrer">APLICACIÓN</a>
          </p>

          <p class="text-center titulos_h2">
            Por favor descarga e instalar la aplicación en tu dispositivo móvil para subir fotos y videos
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

        <div class="col-12">
          <p class="text-center titulos_h2">
            NOS ENCANTARÍA QUE SEAS PARTE DE ESTE DÍA TAN ESPECIAL! <br>
            Ingresa los datos para continuar
          </p>
        </div>

        <div class="col-12">

                    @if ($client->num_invitados_confirm == NULL)
                        <form method="POST" action="{{ route('update.inv', $client->code) }}" enctype="multipart/form-data" role="form">
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label titulos_h2">Nombre completo</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $client->nombre }}"  required>
                                </div>

                                <div class="col-md-6" style="margin-top:2rem;">
                                <label for="inputEmail4" class="form-label titulos_h2">Num de adultos</label>
                                    <select class="form-control" name="num_invitados_confirm" id="num_invitados_confirm" required>
                                        <option value="">Confirma cuántos adultos son</option>
                                        @for ($i = 1; $i <= $maximo_personas; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-6" style="margin-top:2rem;">
                                <label for="inputPassword4" class="form-label titulos_h2">Num de niño</label>
                                    <select class="form-control" name="num_invitados_confirm_n" id="num_invitados_confirm_n" required>
                                        <option value="">¿Cuántos niños irán contigo?</option>
                                        <option value="0">0</option>
                                        @for ($i = 1; $i <= $maximo_niños; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-12" >
                                    <p class="text-center">
                                        <button type="submit" class="btn btn_blanco" style="margin-top:3rem;">Confirmar</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    @else

                    <div class="col-12">
                        <p class="text-center titulos_h2">
                        ¡Esperamos que puedan compartir esta celebración
                        junto a nosotros! <br> <br>
                        ¡MUCHAS GRACIAS!
                        </p>
                    </div>

                    @endif

        </div>

        <div class="col-12">
          <p class="text-center">
            <img src="{{ asset('assets/img/Recurso1.png') }}" alt="decoración" class="img_ramita">
          </p>
        </div>

      </div>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Datos bancarios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <p class="text-center titulos_h2">
                    Mi cuenta BBVA: Laura Hortencia Perez Hernandez  <br> <br>
                    Cuenta: 156 573 8501 <br> <br>
                    Cuenta CLABE: 012 180 01565738501 3 <br> <br>
                    Código SWIFT: BCMRMXMMPYM <br> <br>
                    Tarjeta de débito: 4152 3143 0356 5397 <br> <br>
                </p>
            </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

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
