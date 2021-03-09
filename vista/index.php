<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>BUSCADOR</title>
</head>

<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <label for="concepto">BUSCADOR DE CONCEPTOS</label>
                        <select class="js-example-basic-single" name="state" id="concepto" style="width: 100%">
                        </select>
                    </div>                    
                </div>
                <br />
                <a href="#" onclick="concatenaInicio();" id="botonConcatenaInicio" class="btn btn-primary"><-INICIO</a>
                <a href="#" onclick="concatenaFinal();" id="botonConcatenaFinal" class="btn btn-primary">FINAL-></a>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <label for="concepto-res">RESULTADOS</label>
                        <textarea class="form-control" id="concepto-res" style="width: 100%">
                        </textarea>
                    </div>
                </div>
                <br />
                <a href="#" onclick="copy();" id="botonCopiar" class="btn btn-primary">COPIAR</a>
                <a href="#" onclick="limpiarResultado();" id="botonLimpiar" class="btn btn-secondary">LIMPIAR</a>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form id="guarda-concepto" name="guarda-concepto" method="POST">
                    <div class="row">
                        <div class="col-lg-8">
                            <label for="">AGREGAR CONCEPTO</label>
                            <input name="concepto-new" id="concepto-new" style="width: 100%">
                            </input>
                        </div>
                    </div>
                    <br />
                    <input type="button" id="guardar" value="AGREGAR" class="btn btn-success" />
                    <a href="#" onclick="limpiarNuevoConcepto();" id="botonLimpiarNuevoConcepto" class="btn btn-secondary">LIMPIAR</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form id="elimina-concepto" name="elimina-concepto" method="POST">
                    <div class="row">
                        <div class="col-lg-8">
                            <label for="concepto">ELIMINAR CONCEPTO</label>
                            <select class="js-example-basic-single" name="concepto-del" id="concepto-del" style="width: 100%">
                            </select>
                        </div>                    
                    </div>
                    <br />
                    <input type="button" id="eliminar" value="ELIMINAR" class="btn btn-danger" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

<!-- AGREGADOS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="../js/console.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        listarConceptos();
    });    
</script>