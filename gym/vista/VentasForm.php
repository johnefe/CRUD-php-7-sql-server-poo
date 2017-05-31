<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO - VENTAS</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="active">
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Producto</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-center">Valor</th>
                                    <th class="text-center">Sede</th>
                                                      
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($query as $data): ?>
                                <tr>
                                    <td class="warning"><?php echo $data["id_venta"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["id_cliente"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["id_producto"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["cantidad_producto"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["total"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["id_sede"]; ?></td>
                                  
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <form action="index.php?m=regVenta" method="POST">
                      
                        <input type="hidden"  id="txt_sede" name="txt_sede" value="1">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Cliente</label>
                        <select class="form-control" id="txt_cliente" name="txt_cliente">
                          <?php foreach($query2 as $data): ?>
                            <option value="<?php echo $data["id_cliente"]; ?>" ><?php echo $data["nombre"]  ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Producto</label>
                          <select class="form-control" id="txt_producto" name="txt_producto">
                            <?php foreach($query3 as $data): ?>
                            <option value="<?php echo $data["id_producto"] ?>" ><?php echo $data["nombre"] ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Cantidad</label>
                          <select onchange="operar()" class="form-control" id="txt_cantidad" name="txt_cantidad">
                         
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="text" class="form-control" id="txt_total" name="txt_total" placeholder="total" readonly="">
                      </div>
                      <button type="submit" class="btn btn-default">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    
    function operar(){
        var valorU=2000;
        var cantidadDias=parseInt(document.getElementById("txt_cantidad").value);
        document.getElementById("txt_total").value=valorU*cantidadDias;

        if (document.getElementById("txt_cantidad").value=="") {
            document.getElementById("txt_total").value=0;
        }
    }

</script>