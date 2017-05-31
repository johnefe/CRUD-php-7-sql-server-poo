<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO - PRODUCTOS</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 col-md-offset-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="active">
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Cantidad</th>
                                    <th  colspan="2" class="text-center">Acciòn</th>
                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($query as $data): ?>
                                <tr>
                                
                                    <td class="warning"><?php echo $data["id_producto"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["nombre"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["precio"]; ?></td>
                                    <td class="text-center warning"><?php echo $data["cantidad"]; ?></td>
                                    <td class="text-center warning"><a href="" class="btn btn-primary">Editar</a>
                                    <td class="text-center warning"><a href="" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <form action="index.php?m=regProducto" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>
                        <input type="text" class="form-control" id="txt_precio" name="txt_precio" placeholder="Precio">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Cantidad</label>
                          <select class="form-control" id="txt_cantidad" name="txt_cantidad">
                         
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
                      <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
