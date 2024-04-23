<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRS Anónima</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">PQRS Anónima</h1>

        <!-- Formulario para la PQRS anónima -->
        <form action="{{ route('cliente.store') }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="cliente_id" value=""> --}}

            {{-- <!-- Correo electrónico -->
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
            </div> --}}

            <!-- Tipo de PQRS -->
            {{-- <div class="mb-3">
                <label for="tipo_de_pqrsd" class="form-label">Tipo de PQRS:</label>
                <select class="form-select" id="tipo_de_pqrsd" name="tipo_de_pqrsd">
                    <option value="peticion">Petición</option>
                    <option value="queja">Queja</option>
                    <option value="reclamo">Reclamo</option>
                    <option value="solicitud">Solicitud</option>
                    <option value="denuncia">Denuncia</option>
                </select>
            </div> --}}

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
            </div>

            <!-- URL del PDF (opcional) -->
            <div class="mb-3">
                <label for="url_pdf" class="form-label">URL del PDF (opcional):</label>
                <input type="text" class="form-control" id="url_pdf" name="url_pdf">
            </div>

            <!-- Estado -->
            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="enviado">Enviado</option>
                    <option value="enproceso">En Proceso</option>
                    <option value="resuelto">Resuelto</option>
                </select>
            </div>

            <!-- Botón para guardar la PQRS -->
            <button type="submit" class="btn btn-primary">Guardar PQRS</button>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>