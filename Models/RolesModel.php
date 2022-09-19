<?php
class RolesModel extends Mysql{

    public $intIdrol;
    public $strRol;
    public $strDescripcion;
    public $intStatus;
    
    public function __construct()
    {

        parent::__construct();
      
        
    }

    //Funcion extraer todos los registros de la tabla roles
    public function selectRoles(){

        $sql = "SELECT * FROM rol WHERE status !=0";
        $request = $this->select_all($sql);

        return $request;


    }

        //Insertar y Actualizar rol
    public function insertRol(string $rol, string $descripcion, int $status){

        $return = "";
        $this->strRol = $rol;
        $this->strDescripcion = $descripcion;
        $this->intStatus = $status;

        $sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}' ";
        $request = $this->select_all($sql);

        if(empty($request))
        {
            $query_insert  = "INSERT INTO rol(nombrerol,descripcion,status) VALUES(?,?,?)";
            $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "exist";
        }
        return $return;
    }	


}



?>