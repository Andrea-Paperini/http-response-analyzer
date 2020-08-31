<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Tachimetro -->
    <script src="gauge.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Collego jquery SOLO per necessità di Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/app.css">
    <script type="text/javascript" src="public/js/app.js"></script>
</head>

<body>
    <!-- Creo la struttura per Desktop e Lapotop -->
    <div class="header col-lg-12 col-md-12">
        <div class="form-group d-flex justify-content-center">
            <div class="input-group mb-3 mt-3  d-flex justify-content-center">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">GET</button>
                </div>
                <form class="w-75" action="" method="POST">
                    <!-- cookies per controllare se ha già cliccato GET per evitare le troppe richieste -->
                    <script>
                        function doOnce() {
                            if (document.cookie.replace(/(?:(?:^|.*;\s*)CookieShared\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
                                copy();
                                request();
                                enterkey();
                                var date = new Date();
                                date.setTime(date.getTime() + (5000));
                                var expires = "; expires=" + date.toGMTString();
                                document.cookie = "CookieShared=true;" + expires + "";
                            }
                        }
                    </script>
                    <!-- intercetto il tasto enter e lo associo al GET -->
                    <script>
                        function enterkey() {
                            document.getElementById('urlwritten').onkeydown = function(e) {
                                if (e.keyCode == 13) {
                                    doOnce();
                                }
                            }
                        };
                    </script>
                    <input id="urlwritten" onclick="enterkey()" name="s_amount" onclick="copy()" method="post" type="text" class="form-control" placeholder="Inserisci un URL http" aria-label="Example text with button addon"
                        aria-describedby="button-addon1">
                </form>
                <button onclick="doOnce()" class="btn btn-primary" type="button" id="button-addon1">
                    SEND</button>
                <?php
                    // Recupero l'url dal form per misurare in seguito la velocità di risposta
                    $s_amount = $_POST['s_amount'];
                    extract($_POST);
                    ?>
            </div>
        </div>
    </div>
    <!-- Visibile solo da dispositivi che non sono smartphone o tablet -->
    <div class="d-none d-lg-block">
        <div class="container-fluid row d-flex justify-content-center">
            <div class="col-12 col-lg-3 d-flex justify-content-center">
                <div class="row d-flex flex-column">
                    <h3>URl INFO</h3>
                    <h3>DOMAIN</h3>
                    <p id="url">...</p>
                    <h3>SCHEME</h3>
                    <p id="scheme">...</p>
                    <h3>PATH</h3>
                    <p id="urlcutted">...</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-center">
                <div class="row d-flex flex-column">
                    <h3>RESPONSE</h3>
                    <div class="row">
                        <label>Protocol/Status: </label>
                        <p id="status">...</p>
                    </div>
                    <div class="row">
                        <label class="mr-1" for="">Location: </label>
                        <p id="path">...</p>
                    </div>
                    <div class="row">
                        <label class="mr-1" for="">Server: </label>
                        <p id="server">...</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-center">
                <div class="row d-flex flex-column">
                    <h3>RESPONSE</h3>
                    <div class="row">
                        <label>Protocol/Status: </label>
                        <p id="statusR">...</p>
                    </div>
                    <div class="row">
                        <label class="mr-1" for="">Date: </label>
                        <p id="date">...</p>
                    </div>
                    <div class="row">
                        <label class="mr-1" for="">Server: </label>
                        <p id="server0">...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- visibile solo da dispositivi mobile e tablet -->
    <div class="d-none d-lg-none d-md-block d-sm-block d-block">
        <div id="carouselExampleIndicators" class="carousel slide mt-3">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <div class="col-12 col-lg-3 d-flex justify-content-center">
                            <div class="row d-flex flex-column">
                                <h3>URl INFO</h3>
                                <h3>DOMAIN</h3>
                                <p id="urls">...</p>
                                <h3>SCHEME</h3>
                                <p id="schemes">...</p>
                                <h3>PATH</h3>
                                <p id="urlcutteds">...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <div class="row d-flex flex-column">
                            <h3>RESPONSE</h3>
                            <div class="row">
                                <p id="statuss">...</p>
                            </div>
                            <div class="row">
                                <label class="mr-1" for="">Location: </label>
                                <p id="paths">...</p>
                            </div>
                            <div class="row">
                                <labelclass="mr-1" for="">Server: </label>
                                    <p id="servers">...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <div class="row d-flex flex-column">
                            <h3>RESPONSE</h3>
                            <div class="row">
                                <p id="statusRs">...</p>
                            </div>
                            <div class="row">
                                <label class="mr-1" for="">Date: </label>
                                <p id="dates">...</p>
                            </div>
                            <div class="row">
                                <labelclass="mr-1" for="">Server: </label>
                                    <p id="server0s">...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Recupero il valore dell'url dal form per l'analisi della risposta http -->
    <script type="text/javascript">
        function copy() {
            $("#urlwritten").keyup(function() {
                var urlwritten = $(this).val();
                window.urlwritten = urlwritten;
            }).keyup();
        }
        var date = new Date();
        // Funzione per analizzare la risposta http
        function request() {
            fetch(window.urlwritten)
                .then(response => {
                    if (response.ok) {
                        console.log("ricevuto");
                        const url = new URL(window.urlwritten);
                        document.getElementById("url").innerHTML = (url.hostname);
                        document.getElementById("urls").innerHTML = (url.hostname);
                        document.getElementById("scheme").innerHTML = " " + (url.protocol);
                        document.getElementById("schemes").innerHTML = " " + (url.protocol);
                        document.getElementById("path").innerHTML = (url.pathname);
                        document.getElementById("paths").innerHTML = (url.pathname);
                        document.getElementById("server").innerHTML = (navigator.platform);
                        document.getElementById("servers").innerHTML = (navigator.platform);
                        document.getElementById("server0").innerHTML = (navigator.platform);
                        document.getElementById("server0s").innerHTML = (navigator.platform);
                        document.getElementById("date").innerHTML = (date.toUTCString());
                        document.getElementById("dates").innerHTML = (date.toUTCString());
                        document.getElementById("status").innerHTML = (url.protocol) + " " + (response.status);
                        document.getElementById("statuss").innerHTML = " " + (url.protocol) + " " + (response.status);
                        document.getElementById("statusR").innerHTML = " " + (url.protocol) + " " + (response.status);
                        document.getElementById("statusRs").innerHTML = " " + (url.protocol) + " " + (response.status);
                        var test = url.pathname.split('/').slice(0, 2).join('/');
                        document.getElementById("urlcutted").innerHTML = (test);
                        document.getElementById("urlcutteds").innerHTML = (test);
                    }
                    // Verifico i casi in cui la risposta non ha un esito postivo
                    if (response.status >= 100 && response.status < 200) {
                        console.log("Informazioni per il client");
                    }
                    if (response.status >= 300 && response.status < 399) {
                        console.log("Reindirizzamento");
                    }
                    if (response.status >= 400 && response.status < 499) {
                        console.log("Richiesta errata");
                    }
                    if (response.status >= 500 && response.status < 599) {
                        console.log("Errore sul server");
                    }
                })
                .catch(error => console.log("Si è verificato un errore!"))
        }
    </script>
    <?php
    // recupero l'url del form per inserirlo nella funzione per la velocità di risposta
    $domain= ($s_amount);
    // Funzione per testare la velocità di risposta su smartphone tablet, controllo il tempo esatto che passa tra l'invio della richiesta e la risposta completa effettiva in millisecondi
    function pingDomain($domain)
    {
        $starttime = microtime(true);
        // recupero i file contenuti nell'url e configuro il tempo
        $file      = file_get_contents($domain);
        $stoptime  = microtime(true);
        $status    = 0;

        if (!$file) {
            $status = -1;  // caso in cui il sito non è raggiungibile
        } else {
            $status = ($stoptime - $starttime) * 100;
            $status = floor($status);
        }
        return $status;
    }
    ?>
    <!-- Creo un tachimetro visualizzabile solo su smartphone e tablet che utilizza la velocità reale -->
    <div class="d-none d-lg-none d-md-block d-sm-block d-block mt-3">
        <div class="d-flex justify-content-center">
            <canvas id="can" data-type="radial-gauge" data-width="400" data-height="400" data-units="Km/h" data-title="false" data-value="<?php echo pingDomain($domain); ?>" data-min-value="0" data-max-value="220"
                data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220" data-minor-ticks="2" data-stroke-ticks="false" data-highlights='[
                    { "from": 0, "to": 50, "color": "rgba(0,255,0,.15)" },
                    { "from": 50, "to": 100, "color": "rgba(255,255,0,.15)" },
                    { "from": 100, "to": 150, "color": "rgba(255,30,0,.25)" },
                    { "from": 150, "to": 200, "color": "rgba(255,0,225,.25)" },
                    { "from": 200, "to": 220, "color": "rgba(0,0,255,.25)" }
                ]' data-color-plate="#222" data-color-major-ticks="#f5f5f5" data-color-minor-ticks="#ddd" data-color-title="#fff" data-color-units="#ccc" data-color-numbers="#eee" data-color-needle-start="rgba(240, 128, 128, 1)"
                data-color-needle-end="rgba(255, 160, 122, .9)" data-value-box="true" data-animation-rule="bounce" data-animation-duration="500" data-font-value="Led" data-animated-value="true"></canvas>
        </div>
    </div>
</body>

</html>
