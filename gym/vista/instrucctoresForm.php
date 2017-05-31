<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO - INSTRUCTORES</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="active">
                                    <th class="text-center">#</th>
                                    <th class="text-center">Sede</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">Acción</th>                                     
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($query as $data): ?>
                                <tr>
                                    <td class="warning"><?php echo $data['id_instructor']; ?></td>
                                    <td class="text-center warning"><?php echo $data['id_sede']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center warning"><?php echo $data['telefono']; ?></td>
                                    <td class="text-center warning"><a href="" class="btn btn-primary">Editar</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <form action="index.php?m=regInstructor" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="txt_nombre" placeholder="Nombre" name="txt_nombre" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="Telefono">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Sede</label>
                          <select class="form-control" id="txt_sede" name="txt_sede">
                              <option value="1">Centro</option>
                              <option value="2002">Norte</option>
                              <option value="2003">Sur</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
