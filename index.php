<?php    
    # index:
    # En el mostraremos a salida de las visitas al usuario y tambien a travez
    # enviaremos las distintas acciones que el susario envie al controlador
    # require(). Estable que el codigo del archivo invocado es requerido
    # es decir, obligatoriamente para el funcionameino del program, por  ello si
    # el archivo especificado en la funcio require() no de encuentra
    # saldra un error "PHO Fatal error" y el programa PHP se detiene.
    # require_once, funciona de la misma manera que su respectivo, salvo que al 
    # utilizar la veercion ONCE, se inpide la carga de un msimo archivo
    # mas de uan vez
    #



    require_once("controladores/plantilla.controldor.php");
    require_once("controladores/formularios.controlador.php");
    require_once "modelos/formularios.modelo.php";

    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();

?>