<?php
    
    if( isset($_POST['submit']) && !empty($_POST['submit'])){
        $estudiante = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        
        $nota_final = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        
        echo "<br>El estudiante " .$estudiante. "<br/>";
        echo "<br>La asignatura es: Desarrollo de Sistemas Wed Dinamicos";
        echo "<br>El promedio es: " .$nota_final. "<br/>";

        if($nota_final > 3.9){
            echo "Has APROBADÓ la asignatura!";
        }else{
            echo "Has REPROBADÓ la asignatura";

            if( isset($_GET['submit']) && !empty($_GET['submit'])){
                $estudiante = $_GET["estudiante"];
                }
        }
        
    }
