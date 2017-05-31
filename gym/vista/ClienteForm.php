
<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO - CLIENTES</h2>
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
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">Ciudad</th>
                                    <th class="text-center">Sede</th>
                                    <th class="text-center">Direcciòn</th>
                                    <th class="text-center">Deuda</th>
                                    <th class="text-center">Acciòn</th>
                                    
                  
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($query as $data): ?>
                                <tr>
                                    <td class="warning"><?php echo $data['id_cliente']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center warning"><?php echo $data['telefono']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_ciudad']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_sede']; ?></td>
                                    <td class="text-center warning"><?php echo $data['direccion']; ?></td>
                                    <td class="text-center info">Sin deuda</td>
                                    <td class="text-center warning"><a href="index.php?m=readCliente&id=<?php echo $data['id_cliente']; ?>" class="btn btn-primary">Editar</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                                <?php foreach($query5 as $data): ?>
                                <tr>
                                    <td class="warning"><?php echo $data['id_cliente']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center warning"><?php echo $data['telefono']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_ciudad']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_sede']; ?></td>
                                    <td class="text-center warning"><?php echo $data['direccion']; ?></td>
                                    <td class="text-center danger" style="color: red; font-weight: bold;">Con deuda</td>
                                    <td class="text-center warning"><a href="index.php?m=readCliente&id=<?php echo $data['id_cliente']; ?>" class="btn btn-primary">Editar</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <?php if($query3==""){ ?>
                    <form action="index.php?m=regCliente" method="POST">
                   
                    <?php } ?>
                    <?php if($query3!=""){ ?>
                    
                    <form action="index.php?m=updateCliente" method="post">
                    <?php } ?>


                    
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <?php if($query3==""){ ?>
                        
                        <input type="text" class="form-control" id="txt_nombre" placeholder="Nombre" name="txt_nombre" value="">
                        <?php } ?>
                        <?php if($query3!=""){ ?>
                        <input type="hidden" value="<?php echo $query3['id_cliente']; ?>" name="txt_idcliente" id="txt_idcliente">

                        <input type="text" class="form-control" id="txt_nombre" placeholder="Nombre" name="txt_nombre" value="<?php echo $query3['nombre']; ?>">
                        <?php } ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <?php if($query3==""){ ?>
                        <input type="text" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="Telefono">
                        <?php } ?>
                        <?php if($query3!=""){ ?>
                        <input type="text" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="Telefono" value="<?php echo $query3['telefono']; ?>">
                        <?php } ?>
                      </div>
                      <div class="form-group">

                        <label for="exampleInputEmail1">Direcciòn</label>
                        <?php if($query3==""){ ?>
                        <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Direcciòn">
                         <?php } ?>
                        <?php if($query3!=""){ ?>
                         <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Direcciòn" value="<?php echo $query3['direccion']; ?>">
                         <?php } ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1" >Ciudad</label>
                        
                        <select class="form-control" id="txt_ciudad" name="txt_ciudad">
                            <?php if($query3==""){ ?>
                              <?php foreach($query1 as $data2): ?>
                              <option value="<?php echo $data2['id_ciudad'];?>"><?php echo $data2['nombre'];?></option>
                              <?php endforeach;?>
                            <?php } ?>
                            <?php if($query3!=""){ ?>
                                <option value="<?php echo $query4['id_ciudad']; ?>"><?php echo $query4['nombre']; ?></option>
                                <?php foreach($query1 as $data2): ?>
                                <option value="<?php echo $data2['id_ciudad'];?>"><?php echo $data2['nombre'];?></option>
                                <?php endforeach;?>
                            <?php } ?>

                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Sede</label>
                          <select class="form-control" id="txt_sede" name="txt_sede">
                              <option value="2002">Centro</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

