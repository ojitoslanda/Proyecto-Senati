    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA DE ASISTENCIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
  </head>
  <body>
      <div class="container py-5">
        <div class="row g-4">
            <!-- FORMULARIO TURNOS -->
            <div class="col-6 col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-clock"></i>
                            Registrdasddsadsasadsda
                        </h5>
                    </div>

                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="nombre_turno" class="form-label">
                                    Nombre del turno
                                </label>
                                <input type="text" class="form-control" id="nombre_turno" name="nombre_turno"
                                    placeholder="Ej. Mañana" required>
                            </div>
                            <div class="mb-3">
                                <label for="hora_entrada" class="form-label">
                                    Hora de entrada
                                </label>
                                <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" required>
                            </div>

                            <div class="mb-3">
                                <label for="hora_salida" class="form-label">
                                    Hora de salida
                                </label>
                                <input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn-outline theme-primary">
                                    Limpiar
                                </button>

                                <button type="submit" class="btn-solid theme-primary">
                                    Guardar turno
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO AULAS -->
            <div class="col-6 col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-building"></i>
                            Registro de Aulas
                        </h5>
                    </div>

                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="codigo_aula" class="form-label">
                                    Código de aula
                                </label>
                                <input type="text" class="form-control" id="codigo_aula" name="codigo_aula"
                                    placeholder="Ej. A-101" required>
                            </div>

                            <div class="mb-3">
                                <label for="pabellon" class="form-label">
                                    Pabellón
                                </label>
                                <input type="text" class="form-control" id="pabellon" name="pabellon"
                                    placeholder="Ej. Pabellón A" required>
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class="form-label">
                                    Tipo de aula
                                </label>
                                <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="" selected disabled>
                                        Seleccione un tipo
                                    </option>
                                    <option value="Teórica">Teórica</option>
                                    <option value="Laboratorio">Laboratorio</option>
                                    <option value="Taller">Taller</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn-outline theme-primary">
                                    Limpiar
                                </button>

                                <button type="submit" class="btn-solid theme-primary">
                                    Guardar aula
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
  </body>
</html>
    
    
  
