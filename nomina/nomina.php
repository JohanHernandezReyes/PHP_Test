<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nómina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script type="text/php" src="calculo_salario.php"></script>
</head>
<body>
    <div class="container">
        <div class="row">  
            <div class="col-3"></div>
            <div class="col-6">
                <h3 style="color: blue; text-align: center">---------- CÁLCULO DE SALARIOS ----------</h3>
                <form action="calculo_salario.php" method="get">
                    <div class="form-group">
                        Nombre: <input type="text" class="form-control" name="nombre"><br>
                        Identificación: <input type="text" class="form-control" name="identificacion"><br>
                        Cargo: <input type="text" class="form-control" name="cargo"><br>
                        Tipo de empleado: <select id="Tipo" name="tipo" class="form-control">
                                            <option value="0">Seleccionar tipo de empleado</option>
                                            <option value="1">Contratista</option>
                                            <option value="2">De planta</option>
                                        </select><br>
                                        <script>
                                            document.getElementById('Tipo').addEventListener('change', function(e) {
                                                if(this.value == 1) {
                                                    document.getElementById('form-contratista').removeAttribute("hidden");
                                                    document.getElementById('form-planta').setAttribute("hidden", "true");
                                                } else if(this.value == 2) {
                                                    document.getElementById('form-planta').removeAttribute("hidden");
                                                    document.getElementById('form-contratista').setAttribute("hidden", "true");
                                                } 
                                                else {
                                                    document.getElementById('form-planta').setAttribute("hidden", "true");
                                                    document.getElementById('form-contratista').setAttribute("hidden", "true");
                                                }
                                            });
                                        </script>
                    </div>
                    <div class="form-group" id="form-contratista" hidden="true">
                        Total Horas: <input type="number" class="form-control" name="totalHoras" value=0><br>
                        Valor Hora: <input type="number" class="form-control" name="valorHora" value=0><br>
                    </div>
                    <div class="form-group" id="form-planta" hidden="true">
                        Sueldo Basico: <input type="number" class="form-control" name="sueldoBasico" value=0><br>
                        Valor Extras: <input type="number" class="form-control" name="valorExtras" value=0><br>
                        Deducciones: <input type="number" class="form-control" name="deducciones" value=0><br>
                    </div>

                    <input type="submit" value="Calcular"> &nbsp&nbsp&nbsp&nbsp&nbsp 
                </form>
                <button onclick="location.href='nomina.php';">Nuevo Cálculo</button>
               
            </div>
            <div class="col"></div>
        <div>
    </div>
    
    
</body>
</html>