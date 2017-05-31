<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO - RUTINA</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="active">
                                    <th class="text-center">#</th>
                                    <th class="text-center">Instructor</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Acción</th>                                     
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($query as $data): ?>
                                <tr>
                                    <td class="warning"><?php echo $data['id_rutina']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_instructor']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center warning"><?php echo $data['descripcion']; ?></td>
                                    <td class="text-center warning"><a href="" class="btn btn-primary">Editar</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <form action="index.php?m=regRutina" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre" placeholder="Nombre" name="txt_nombre" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Telefono">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Instructor</label>
                          <select class="form-control" id="txt_instructor" name="txt_instructor">
                          <?php foreach($query2 as $data2): ?>
                              <option value="<?php echo $data2['id_instructor']; ?>"><?php echo $data2['nombre']; ?></option>
                              
                           
                          <?php endforeach; ?>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
