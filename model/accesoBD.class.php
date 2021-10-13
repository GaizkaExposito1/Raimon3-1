<?php
//require

//AcessoBD
class AccesoBd{
    const RUTA="localhost";
    const NOMBRE_BD="kalpataru";
    const USER="R3+1";
    const PASS="Raimon3+2";
    public $conexion;

    function __construct(){
        $this->establecerConexion();
    }

    function establecerConexion(){
        $this->conexion=mysqli_connect(self::RUTA, self::USER,self::PASS,self::NOMBRE_BD) or 
                        die("bd no conectada puto, mirate el codigo");
        echo "la conexion chuclo congrats </br>";
    }

    function cerrarConexion(){
        mysqli_close($this->conexion);
    }

    function lanzarSQL($sql){
        $tipoSql=substr($sql,0,6);
        $result=mysqli_query($this->conexion,$sql);
        var_dump($result);
        if(strtoupper($tipoSql)=="SELECT"){
            return $result;
        }
    }

    
}
?>