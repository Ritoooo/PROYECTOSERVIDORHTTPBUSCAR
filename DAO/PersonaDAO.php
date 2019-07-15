<?php
require_once "../CONEXION/ConexionBD.php";
require_once '../BEAN/PersonaBean.php';
class    PersonaDAO
{    
    public    function   BuscarPersonas(PersonaBean       $objpb )
   {  try {
           $sql="select *  from persona  where   APELLIPERSO   like '%$objpb->APELLIPERSO%'   ; ";
           $objc = new ConexionBD();
           $cn=$objc->getConexionBD();   
           $rs= $cn->query($sql);
           $LISTA['PERSONA']= array();
           $cursor=  mysqli_fetch_all($rs,MYSQLI_ASSOC);
           foreach ($cursor as $cur) {
              array_push($LISTA['PERSONA'], array('CODPERSO'=>$cur["CODPERSO"],'NOMBPERSO'=>$cur["NOMBPERSO"],'APELLIPERSO'=>$cur["APELLIPERSO"]));
           }
       } catch (Exception $e) {                 
       }     
     return  $LISTA;       
   }  
   
   
   
   
   
}
?>
