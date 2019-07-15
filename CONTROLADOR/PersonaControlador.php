
<?php
require_once "../DAO/PersonaDAO.php";
require_once '../BEAN/PersonaBean.php';
       
$apellido = $_REQUEST['TXTAPELLIDO']; 
       $objpersobean=new PersonaBean();
       $objpersobean->setAPELLIPERSO($apellido);
        $objeto=new PersonaDAO();
  $LISTA=$objeto->BuscarPersonas($objpersobean ); 
         header('Content-type: application/json');
        echo json_encode($LISTA)  ;
    
?>


