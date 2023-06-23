<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 2 PHP</title>
</head>
<body>
    <div>
        <?php
            include "Persona.php";
            $objPersona = new Persona("Pedro Picapiedra", "1000000001", "02-04-0005");
            echo "<br> El nombre del objeto Persona es : ", $objPersona->getNombre(), "<br>";

            include "Estudiante.php";
            $objEstudiante = new Estudiante("Cesar Cuellar", "ADSI");
            $objEstudiante2 = new Estudiante("Marcela Mendez", "Multimedia");
            echo "<br>-------------- ESTUDIANTES INSCRITOS ------------------------<br>";
            echo "<br> Nombre del estudiante : ". $objEstudiante->getNombre();
            echo "<br> Curso en el que se encuentra el estudiante : ". $objEstudiante->getCurso()."<br>";
            echo "<br> Nombre del estudiante : ". $objEstudiante2->getNombre();
            echo "<br> Curso en el que se encuentra el estudiante : ". $objEstudiante2->getCurso()."<br>";
            echo Estudiante::metodo_estatico();
        ?>
    </div>

    
    <div>
        <?php
            include "moneda.php";
            $dolar = new Dolar ;
            $monto = 100;
            echo $monto . " dolares = ".$dolar->convertir_a_pesos($monto, 4500)." pesos <br>";
            $euro = new Euro ;
            echo $monto . " euros = ".$euro->convertir_a_pesos($monto, 4900)." pesos <br>";
        ?>
    </div>

    <div>
        <br>
        <p>-----------------Conexión a BD-----------------------</p>
        <?php
            include "db_connection.php";
            if($resultado = $conn->query("SELECT * FROM pacientes;"))
            {
                while($registro = $resultado->fetch_object())
                {
                    echo "<br><h4>Resultado de consulta:</h4>";
                    var_dump($registro);
                }
            }
            else
            {
               echo $conn->host_info. "\n" ;
            };
        ?>
    </div>


    
</body>
</html>