<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Bienvenido</h1>
        <form action="{{ route('cliente.datos') }}" method="GET">
            @csrf

            <!-- Selección de Anonimato -->
            <div class="mb-3">
                <label class="form-label" for="es_anonima">¿Es Anónima?</label>
                <select class="form-select" id="es_anonima" name="es_anonima">
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
            </div>

            <!-- Selección de Tipo de Persona -->
            <div class="mb-3">
                <label class="form-label" for="tipo_de_persona">Tipo de Persona:</label>
                <select class="form-select" id="tipo_de_persona" name="tipo_de_persona">
                    <option value="normal">Normal</option>
                    <option value="juridica">Jurídica</option>
                    <option value="apoderado">Apoderado</option>
                </select>
            </div>

            <!-- Selección de Tipo de PQRS -->
            <div class="mb-3">
                <label class="form-label" for="tipo_de_pqrsd">Tipo de PQRS:</label>
                <select class="form-select" id="tipo_de_pqrsd" name="tipo_de_pqrsd">
                    <option value="peticion">Petición</option>
                    <option value="queja">Queja</option>
                    <option value="reclamo">Reclamo</option>
                    <option value="solicitud">Solicitud</option>
                    <option value="denuncia">Denuncia</option>
                </select>
            </div>

            <!-- Botón para continuar -->
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>