<!-- resources/views/clientes/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Crear Cliente</h1>
        <form action="{{ route('cliente.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="primernombre" class="form-label">Primer Nombre:</label>
                        <input type="text" class="form-control" id="primernombre" name="primernombre">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="segundonombre" class="form-label">Segundo Nombre:</label>
                        <input type="text" class="form-control" id="segundonombre" name="segundonombre">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="primerapellido" class="form-label">Primer Apellido:</label>
                        <input type="text" class="form-control" id="primerapellido" name="primerapellido">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="segundoapellido" class="form-label">Segundo Apellido:</label>
                        <input type="text" class="form-control" id="segundoapellido" name="segundoapellido">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="Tipodedocumento" class="form-label">Tipo de Documento:</label>
                <select class="form-select" id="Tipodedocumento" name="Tipodedocumento">
                    <option value="Cedula de ciudadania">Cédula de Ciudadanía</option>
                    <option value="Registro civil">Registro Civil</option>
                    <option value="Cedula extranjera">Cédula Extranjera</option>
                    <option value="Tarjeta de identidad">Tarjeta de Identidad</option>
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Fechadenacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="Fechadenacimiento" name="Fechadenacimiento">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="NumeroIdentificacion" class="form-label">Número de Identificación:</label>
                        <input type="text" class="form-control" id="NumeroIdentificacion" name="NumeroIdentificacion">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="Genero" class="form-label">Género:</label>
                <select class="form-select" id="Genero" name="Genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="Direccion" name="Direccion">
            </div>



            <!-- Campos para la PQRS -->
            <h2 class="mb-4">Crear PQRS</h2>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
            </div>
            {{-- <div class="mb-3">
                <label for="es_anonima" class="form-label">¿Es Anónima?</label>
                <select class="form-select" id="es_anonima" name="es_anonima">
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
            </div> --}}
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
            {{-- <div class="mb-3">
                <label for="tipo_de_persona" class="form-label">Tipo de Persona:</label>
                <select class="form-select" id="tipo_de_persona" name="tipo_de_persona">
                    <option value="normal">Normal</option>
                    <option value="juridica">Jurídica</option>
                    <option value="apoderado">Apoderado</option>
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="url_pdf" class="form-label">URL del PDF:</label>
                <input type="text" class="form-control" id="url_pdf" name="url_pdf">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="enviado">Enviado</option>
                    <option value="enproceso">En Proceso</option>
                    <option value="resuelto">Resuelto</option>
                </select>
            </div>
            <!-- Fin campos para la PQRS -->

            <button type="submit" class="btn btn-primary">Guardar Cliente y PQRS</button>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Aquí va tu código HTML existente -->

<!-- Agregar el script JavaScript -->
<script>
    // Obtener el elemento select para "¿Es Anónima?"
    var esAnonimaSelect = document.getElementById('es_anonima');

    // Obtener la sección del formulario para la PQRS
    var pqrsSection = document.getElementById('pqrs-section');

    // Función para mostrar u ocultar la sección de la PQRS según la selección del usuario
    function mostrarOcultarPqrsSection() {
        if (esAnonimaSelect.value === 'true') {
            // Si la PQRS es anónima, mostrar la sección de la PQRS
            pqrsSection.style.display = 'block';
        } else {
            // Si la PQRS no es anónima, ocultar la sección de la PQRS
            pqrsSection.style.display = 'none';
        }
    }

    // Llamar a la función al cargar la página para establecer el estado inicial
    mostrarOcultarPqrsSection();

    // Agregar un listener al cambio en el select para "¿Es Anónima?"
    esAnonimaSelect.addEventListener('change', function () {
        mostrarOcultarPqrsSection();
    });
</script>

<!-- Aquí va el resto de tu código HTML -->

</body>
</html>