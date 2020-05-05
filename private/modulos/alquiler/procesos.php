<?php 
include('../../Config/Config.php');
$alquiler = new alquiler($conexion);

$proceso = '';
if( isset($_GET['proceso']) && strlen($_GET['proceso'])>0 ){
	$proceso = $_GET['proceso'];
}
$alquiler->$proceso( $_GET['alquiler'] );
print_r(json_encode($alquiler->respuesta));

class alquiler{
    private $datos = array(), $db;
    public $respuesta = ['msg'=>'correcto'];
    
    public function __construct($db){
        $this->db=$db;
    }
    public function recibirDatos($alquiler){
        $this->datos = json_decode($alquiler, true);
        $this->validar_datos();
    }
    private function validar_datos(){
        if( empty($this->datos['idPelicula']) ){
            $this->respuesta['msg'] = 'Por favor ingrese ID de la pelicula';
        }
        if( empty($this->datos['idCliente']) ){
            $this->respuesta['msg'] = 'Por favor ingrese ID del cliente';
        }
        if( empty($this->datos['fechaPrestamo']) ){
            $this->respuesta['msg'] = 'Por favor ingrese fecha de Prestamo';
        }
        if( empty($this->datos['fechaDevolucion']) ){
            $this->respuesta['msg'] = 'Por favor ingrese fecha de Devolucion';
        }
        if( empty($this->datos['valor']) ){
            $this->respuesta['msg'] = 'Por favor ingrese el valor del alquiler';
        }
        $this->almacenar_alquiler();
    }
    private function almacenar_alquiler(){
        if( $this->respuesta['msg']==='correcto' ){
            if( $this->datos['accion']==='nuevo' ){
                $this->db->consultas('
                    INSERT INTO alquiler (idCliente,idPelicula,fechaPrestamo,fechaDevolucion,valor) VALUES(
                    "'. $this->datos['idCliente'] .'" ,
                    "'. $this->datos['idPelicula'] .'",
                    "'. $this->datos['fechaPrestamo'] .'" ,
                    "'. $this->datos['fechaDevolucion'] .'" ,
                    "'. $this->datos['valor'] .'" 
                    )
                    ');
                $this->respuesta['msg'] = 'Registro insertado correctamente';
            } else if( $this->datos['accion']==='modificar' ){
                $this->db->consultas('
                    UPDATE alquiler SET
                    idCliente      = "'. $this->datos['idCliente'] .'",
                    idPelicula      = "'. $this->datos['idPelicula'] .'",
                    fechaPrestamo      = "'. $this->datos['fechaPrestamo'] .'",
                    fechaDevolucion      = "'. $this->datos['fechaDevolucion'] .'",
                    valor      = "'. $this->datos['valor'] .'"
                    WHERE idAlquiler = "'. $this->datos['idAlquiler'] .'"
                    ');
                $this->respuesta['msg'] = 'Registro actualizado correctamente';
            }
        }
    }
    public function buscarAlquileres($valor = ''){
        $this->db->consultas('
            select alquiler.idAlquiler, alquiler.idCliente, alquiler.idPelicula, alquiler.fechaPrestamo, alquiler.fechaDevolucion, alquiler.valor
            from alquiler
            where alquiler.valor like "%'. $valor .'%" or alquiler.idCliente like "%'. $valor .'%"
            ');
        return $this->respuesta = $this->db->obtener_data();
    }
    public function eliminarAlquiler($idAlquiler = 0){
        $this->db->consultas('
            DELETE alquiler
            FROM alquiler
            WHERE alquiler.idAlquiler="'.$idAlquiler.'"
            ');
        return $this->respuesta['msg'] = 'Registro eliminado correctamente';;
    }
}
?>