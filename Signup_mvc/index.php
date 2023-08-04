<?php
//Global setting
require_once 'config/global.php';
//We load the controller and execute the action
if(isset($_GET["controller"])){
    // We load the instance of the corresponding controller
    $controllerObj=cargarControlador($_GET["controller"]);
    //We launch the action
    launchAction($controllerObj);
}else{
    // We load the default controller instance
    $controllerObj=cargarControlador(CONTROLLER_DEFECTO);
    // We launch the action
    launchAction($controllerObj);
}
function cargarControlador($controller){
    switch ($controller) {
        case 'employees':
            $strFileController='Controllers/Employees.Controllers.php';
            require_once $strFileController;
            $controllerObj=new employeesController();
            break;
        default:
            $strFileController='Controllers/Employees.Controllers.php';
            require_once $strFileController;
            $controllerObj=new EmployeesController();
            break;
    }
    return $controllerObj;
}
function launchAction($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $controllerObj->run(DEFECT_ACTION);
    }
}

?>