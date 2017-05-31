<?php 
    require_once('modelo/cliente_model.php');

    class cliente_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new cliente_model();
        }

        function index(){
            $query =$this->model_e->get();
            $query2=$this->model_e->listClientes();
            include_once('vista/header.php');
            include_once('vista/index.php');
            include_once('vista/footer.php');
        }
        function cliente(){
            $query =$this->model_e->getClientesSindeuda();
            $query5 =$this->model_e->getClientesCondeuda();
            $query1 =$this->model_e->getCiudad();
            $query3="";
            include_once('vista/header.php');
            include_once('vista/ClienteForm.php');
            include_once('vista/footer.php');
        }
        function readCliente(){
            $date=$_REQUEST['id'];
            $query1 =$this->model_e->getCiudad();
            $query =$this->model_e->getClientesSindeuda();
            $query5 =$this->model_e->getClientesCondeuda();

            $query3=$this->model_e->getInfoCliente($date);
            $id=$query3['id_ciudad'];
            $query4=$this->model_e->getInfoCiudad($id);

            include_once('vista/header.php');
            include_once('vista/ClienteForm.php');
            include_once('vista/footer.php');
        }
        
        function instructor(){
            $query=$this->model_e->getInstructor();
            include_once('vista/header.php');
            include_once('vista/instrucctoresForm.php');
            include_once('vista/footer.php');
        }

        function rutina(){
            $query=$this->model_e->getRutina();
            $query2=$this->model_e->getInstructor();
            include_once('vista/header.php');
            include_once('vista/rutinaForm.php');
            include_once('vista/footer.php');
        }
        function producto(){
            $query=$this->model_e->getProducto();
            include_once('vista/header.php');
            include_once('vista/ProductosForm.php');
            include_once('vista/footer.php');
        }
        function venta(){
            $query=$this->model_e->getVenta();
            $query2=$this->model_e->getClientes();
            $query3=$this->model_e->getProducto();
            include_once('vista/header.php');
            include_once('vista/VentasForm.php');
            include_once('vista/footer.php');
        }
        
        function regCliente(){
            $data['id_ciudad']=$_REQUEST['txt_ciudad'];
            $data['id_sede']=$_REQUEST['txt_sede'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['telefono']=$_REQUEST['txt_telefono'];
            $data['direccion']=$_REQUEST['txt_direccion'];
          
            $this->model_e->createCliente($data);
            header("Location:index.php?m=cliente");
        }
        function regVenta(){
            $data['id_sede']=$_REQUEST['txt_sede'];
            $data['id_cliente']=$_REQUEST['txt_cliente'];
            $data['id_producto']=$_REQUEST['txt_producto'];
            $data['cantidad_producto']=$_REQUEST['txt_cantidad'];
            $data['total']=$_REQUEST['txt_total'];
          
            $this->model_e->createVenta($data);
            header("Location:index.php?m=venta");
        }

        function regInstructor(){
            
            $data['id_sede']=$_REQUEST['txt_sede'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['telefono']=$_REQUEST['txt_telefono'];
                     
            $this->model_e->createInstructor($data);
            header("Location:index.php?m=instructor");
        }
        function regRutina(){
            $data['id_instructor']=$_REQUEST['txt_instructor'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['descripcion']=$_REQUEST['txt_descripcion'];
                     
            $this->model_e->createRutina($data);
            header("Location:index.php?m=rutina");
        }

        function regMensualidad(){

            $data['id_cliente']=$_REQUEST['txt_cliente'];
            $data['cantidad_dias']=$_REQUEST['txt_cantidad'];
            $data['valor']=$_REQUEST['txt_valor'];
            $data['estado']=$_REQUEST['txt_estado'];
          
            $this->model_e->createMensuaidad($data);
            header("Location:index.php");
        }
        function regProducto(){
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['precio']=$_REQUEST['txt_precio'];
            $data['cantidad']=$_REQUEST['txt_cantidad'];
          
            $this->model_e->createProducto($data);
            header("Location:index.php?m=producto");
        }
        /*------------updates-------------*/
        function marcar(){
            $id_mensualidad=$_REQUEST['id'];
            $cantidad_dias=$_REQUEST['cantidad'];

            $this->model_e->updateMensualidad($id_mensualidad,$cantidad_dias);

            header("Location:index.php");
        }
        function updateCliente(){
            $data['id_cliente']=$_REQUEST['txt_idcliente'];
            $data['id_ciudad']=$_REQUEST['txt_ciudad'];
            $data['id_sede']=$_REQUEST['txt_sede'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['telefono']=$_REQUEST['txt_telefono'];
            $data['direccion']=$_REQUEST['txt_direccion'];

            $this->model_e->updateCliente($data);
            header("Location:index.php?m=cliente");

           
        }
        function agregardias(){
            $id_mensualidad=$_REQUEST['id'];
            $cantidad_dias=$_REQUEST['txt_masdias'];

            $this->model_e->updateMensualidadDias($id_mensualidad,$cantidad_dias);

            header("Location:index.php");

        }

        function delete(){

            $date=$_REQUEST['id'];
            $this->model_e->delete($date);
                
            header("Location:index.php?m=cliente");
        }
        

       
    }
?>