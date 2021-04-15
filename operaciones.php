<?php
function sumar($op1,$op2){
    $resultado = $op1 + $op2;

   echo($resultado);

}

function restar($op1,$op2){
    $resultado = $op1 - $op2;

    echo($resultado);

}
function multiplicar($op1,$op2){
    $resultado = $op1 * $op2;

    echo($resultado);

}
function dividir($op1,$op2){
    if($op2 !=0){

    $resultado = $op1 / $op2;

    echo($resultado);
}else{
    echo('ERROR: No se puede dividir por 0');
    die();
}
    echo("kaka");

}
function showPi(){
    include_once('header.php');
    $pi=pi();
    echo($pi);
}
function aboutUs(){
    include_once('header.php');
     echo('<body>
    
     <h1>About us</h1>
     <p> echo por losotro </p>
     <p> y el guty</p>
     </body>');
    

}
function home(){
    include_once('header.php');
    echo('<body>
    <script>

        function enviar(){

            operacion = document.findbyId("ope").value;
            valor1 = document.findbyId("valor1").value;
            valor2 = document.findbyId("valor2").value;

            formulario = document.findbyId("formulario");
            formulario.action = "'.BASE_URL.'" + operacion + "/" + valor1 + "/" + valor2 ;
            formulario.submit;
            
            return false;

    </script>
    
    
        <h1>Calculadora</h1>
    
        <form id="formulario" action="route.php" method="GET" onsubmit="enviar()">
            <input type="number" id="valor1">
            <input type="number" id="valor2">
            <select name="operacion" id="ope">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="dividir">Dividir</option>
                <option value="multiplicar">Multiplicar</option>
            </select>

            <input type="submit">
    
        </form>
        
    </body>
    </html>');

}
    
// asdasasd
// probando cositas nuevas
//holagusty sale dota
?>