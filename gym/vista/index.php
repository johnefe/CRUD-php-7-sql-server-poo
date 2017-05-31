
<section>
    <div class="container">
        <div class="text-center">
            <h2>GYM SPORTBODY CENTRO</h2>
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
                                    <th class="text-center">sede</th>
                                    <th class="text-center">Dias</th>
                                    <th class="text-center">Valor</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Acción</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($query as $data):?>
                                <tr>

                                    <td class="warning"><?php echo $data['id_mensualidad']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombre']; ?></td>
                                    <td class="text-center warning"><?php echo $data['telefono']; ?></td>
                                    <td class="text-center warning"><?php echo $data['nombreSede']; ?></td>
                                    <td class="text-center warning"><?php echo $data['cantidad_dias']; ?></td>
                                    <td class="text-center warning"><?php echo $data['valor']; ?></td>
                                    <td class="text-center warning">


                                        <?php if( $data['estado']=="1"){ ?>
                                            <a href="" class="btn btn-primary">Al dia</a>
                                        <?php }?>
                                        <?php if( $data['estado']=="0"){ ?>
                                            <a href="" class="btn btn-warning">Debe pagar</a>
                                        <?php }?> 
                                        
                                    </td>
                                    <td class="text-center warning">
                                    <?php if( $data['estado']=="0"){ ?>

                                    <form action="index.php?m=agregardias" name="form2" method="POST">
                                    <input type="hidden" value="<?php echo $data['id_mensualidad']; ?>" name="id" id="id">
                                    <select class="input-sm" id="txt_masdias" name="txt_masdias">
                                        <option value="15">15 dias</option>
                                        <option value="30">30 dias</option>
                                        <option value="45">45 dias</option>
                                        <option value="60">60 dias</option>
                                    </select>
                                    <input type="submit" class="btn btn-primary"  value="Adicionar">
                                    <?php }?>
                                    </form>
                                    <?php if( $data['estado']=="1"){ ?>
                                    <a href="index.php?m=marcar&id=<?php echo $data['id_mensualidad']; ?>&cantidad=<?php echo $data['cantidad_dias']; ?>" class="btn btn-success">Marcar</a>
                                     <?php }?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>    

                            </tbody>
                        </table>
                    </div>
                
                    
                   
                </div>
                <div class="col-md-4">
                    <form method="POST" name="form1" action="index.php?m=regMensualidad">
                       <div class="form-group">
                          <label for="exampleInputEmail1">Cliente</label>
                          <select class="form-control" id="txt_cliente" name="txt_cliente">
                              <?php foreach ($query2 as $data): ?>
                                <option value="<?php echo $data['id_cliente']; ?>"><?php echo $data['nombre']; ?></option>  
                              <?php endforeach ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <select class="form-control" onchange="operar()" id="txt_cantidad" name="txt_cantidad">
                                        <option value="0">Elegir dias</option>
                                        <option value="15">15 dias</option>
                                        <option value="30">30 dias</option>
                                        <option value="45">45 dias</option>
                                        <option value="60">60 dias</option>
                                    </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Valor</label>
                        <input type="text" class="form-control" readonly id="txt_valor" name="txt_valor" placeholder="Valor">
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="txt_sede" name="txt_sede" value="1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Estado</label>
                          <select class="form-control" id="txt_estado" name="txt_estado">
                              
                              <option value="1">Pagado</option>
                          </select>
                      </div>
                      <input type="submit" class="btn btn-success"  value="Guardar" name="">
                    </form>
                    <?php
                    
                    ?>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    
    function operar(){
        var valorU=2000;
        var cantidadDias=parseInt(document.getElementById("txt_cantidad").value);
        document.getElementById("txt_valor").value=valorU*cantidadDias;

        if (document.getElementById("txt_cantidad").value=="") {
            document.getElementById("txt_valor").value=0;
        }
    }

</script>