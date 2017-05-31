<?php
    
    class cliente_model{
        private $DB;
        private $mensualidad;
        private $clientes;
        private $rutinas;
        private $instructor;
        private $productos;
        private $ventas;
        private $ciudades;


        function __construct(){
            $this->DB=Database::conectar();
        }
         /*---------gets---------------*/
        function getInfoCliente($date){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM Cliente where id_cliente = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($date));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function get(){
            $sql= 'select C.id_cliente, S.nombreSede, S.id_sede, C.id_sede, M.id_mensualidad, nombre, M.estado,M.valor,M.cantidad_dias, telefono
                FROM Mensualidad M
                INNER JOIN Cliente C ON  M.id_cliente =C.id_cliente INNER JOIN Sede S ON C.id_sede = S.id_sede ;';
            $fila=$this->DB->query($sql);
            $this->mensualidad=$fila;
            return  $this->mensualidad;
        }
        function getInstructor(){
            $sql= 'SELECT * FROM Instructor';
            $fila=$this->DB->query($sql);
            $this->instructor=$fila;
            return  $this->instructor;
        }
        function getClientesSindeuda(){
            $sql='select * from Cliente where NOT id_cliente in (select id_cliente from Venta);';
            $fila=$this->DB->query($sql);
            $this->clientes=$fila;
            return  $this->clientes;
        }
        function getClientesCondeuda(){
            $sql='select * from Cliente where id_cliente in (select id_cliente from Venta);';
            $fila=$this->DB->query($sql);
            $this->clientes=$fila;
            return  $this->clientes;
        }
         function getClientes(){
            $sql='select * from Cliente';
            $fila=$this->DB->query($sql);
            $this->clientes=$fila;
            return  $this->clientes;
        }

        function getRutina(){
            $sql= 'SELECT * FROM Rutina';
            $fila=$this->DB->query($sql);
            $this->rutinas=$fila;
            return  $this->rutinas;
        }
        function getProducto(){
            $sql= 'SELECT * FROM Producto';
            $fila=$this->DB->query($sql);
            $this->productos=$fila;
            return  $this->productos;
        }
        function getVenta(){
            $sql= 'SELECT * FROM Venta';
            $fila=$this->DB->query($sql);
            $this->ventas=$fila;
            return  $this->ventas;
        }
        function getInfoCiudad($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM Ciudad where id_ciudad = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        function getCiudad(){
            $sql= 'SELECT * FROM Ciudad';
            $fila=$this->DB->query($sql);
            $this->ciudades=$fila;
            return  $this->ciudades;
        }
        function listClientes(){
            $sql= 'select * from Cliente where NOT id_cliente in (select id_cliente from Mensualidad);';
            $fila=$this->DB->query($sql);
            $this->clientes=$fila;
            return  $this->clientes;
        }
        /*---------creates---------------*/
        function createMensuaidad($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Mensualidad(id_cliente,cantidad_dias,valor,estado)VALUES (?,?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['id_cliente'],
                    $data['cantidad_dias'],
                    $data['valor'],
                    $data['estado']
                    )
                );
        }
        function createInstructor($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Instructor(id_sede,nombre,telefono)VALUES (?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['id_sede'],
                    $data['nombre'],
                    $data['telefono'] 
                    )
                );
        }
        function createRutina($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Rutina(id_instructor,nombre,descripcion)VALUES (?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['id_instructor'],
                    $data['nombre'],
                    $data['descripcion'] 
                    )
                );
        }
        function createCliente($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Cliente(id_ciudad,id_sede,nombre,telefono,direccion)VALUES (?,?,?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['id_ciudad'],
                    $data['id_sede'],
                    $data['nombre'],
                    $data['telefono'],
                    $data['direccion']
                    )
                );
        }

        function createProducto($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Producto( nombre,precio,cantidad)VALUES (?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['nombre'],
                    $data['precio'],
                    $data['cantidad']
                    )
                );
        }
        function createVenta($data){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO Venta(id_sede,id_cliente, id_producto, cantidad_producto, total)VALUES (?,?,?,?,?)";

            $query = $this->DB->prepare($sql);

            $query->execute(
                array(
                    $data['id_sede'],
                    $data['id_cliente'],
                    $data['id_producto'],
                    $data['cantidad_producto'],
                    $data['total']
                    )
                );
        }

        /*------------deletes---------------*/
        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql1="DELETE FROM Mensualidad where id_cliente=?";
            $sql="DELETE FROM Cliente where id_cliente=?";
            $q=$this->DB->prepare($sql1);
            $q->execute(array($date));

            $q2=$this->DB->prepare($sql);
            $q2->execute(array($date));
            
        }
       
        /*function readMensualidad($id_mensualidad){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT cantidad_dias FROM Mensualidad where id_mensualidad = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id_mensualidad));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }*/
        function updateMensualidad($id_mensualidad,$cantidad_dias){

            if((int)$cantidad_dias-1>0){
                $newValor=(int)$cantidad_dias-1;
                $costo=$newValor*2000;
                $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE Mensualidad  set cantidad_dias=?,valor=? WHERE id_mensualidad = ? ";
                $q = $this->DB->prepare($sql);
                $q->execute(array($newValor,$costo,$id_mensualidad));

            }
            if((int)$cantidad_dias-1==0){
                $newValor=(int)$cantidad_dias-1;
                $costo=$newValor*2000;
                $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE Mensualidad  set cantidad_dias=?,valor=?, estado=? WHERE id_mensualidad = ? ";
                $q = $this->DB->prepare($sql);
                $q->execute(array($newValor,0,0,$id_mensualidad));

            }

            
        }

        function updateMensualidadDias($id_mensualidad,$cantidad_dias){
                $newValor=(int)$cantidad_dias;
                $costo=$newValor*2000;
                $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE Mensualidad  set cantidad_dias=?,valor=?, estado=? WHERE id_mensualidad = ? ";
                $q = $this->DB->prepare($sql);
                $q->execute(array($newValor,$costo,1,$id_mensualidad));
        }
        function updateCliente($data){
                $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE Cliente  set  id_ciudad=?, id_sede =?, nombre=?, telefono=?, direccion=? WHERE id_cliente = ? ";
                $q = $this->DB->prepare($sql);
                $q->execute(array($data['id_ciudad'],$data['id_sede'],$data['nombre'],$data['telefono'],$data['direccion'], $data['id_cliente']));
        }
        /* function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO estudiante(id,cedula,nombre,apellidos,promedio,edad,fecha)VALUES (?,?,?,?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['id'],$data['cedula'],$data['nombre'],$data['apellidos'],$data['promedio'],$data['edad'],$data['fecha']));
            Database::disconnect();       

        }*/
         /*function get_id($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM estudiante where id = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }*/

      /*  function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE estudiante  set  cedula=?, nombre =?, apellidos=?,promedio=?, edad=?, fecha=? WHERE id = ? ";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['cedula'],$data['nombre'],$data['apellidos'],$data['promedio'],$data['edad'],$data['fecha'], $date));
            Database::disconnect();

        }*/

       /* */
    }
?>