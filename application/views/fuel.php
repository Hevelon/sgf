    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Informações Sobre Combustível
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Painel</a></li>
              <li class="breadcrumb-item active">Informações Sobre Combustível</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="card">
        <div class="card-body p-0">
         <div class="table-responsive">
                    <table id="fueltbl" class="table card-table">
                      <thead>
                        <tr>
                          <th class="w-1">S.No</th>
                           <th>Data de Abastecimento</th>
                          <th>Veículo</th>
                          <th>Quantidade</th>
                          <th>Preço Total</th>
                          <th>Abastecido Por</th>
                           <th>Leitura de Odômetro</th>
                          <th>Comentários</th>
                          <?php if(userpermission('lr_fuel_edit') || userpermission('lr_fuel_del')) { ?>
                          <th>Ação</th>
                          <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if(!empty($fuel)){  $count=1;
                           foreach($fuel as $fuels){
                           ?>
                        <tr>
                           <td> <?php echo output($count); $count++; ?></td>
                            <td> <?php echo output(date(dateformat(), strtotime($fuels['v_fuelfilldate']))); ?></td>
                           <td> <?php echo output($fuels['vech_name']->v_name); ?></td>
                           <td> <?php echo output($fuels['v_fuel_quantity']); ?></td>
                           <td><?php echo sitedata()['s_price_prefix'].output($fuels['v_fuelprice']); ?></td>
                           <td><?php echo output($fuels['filled_by']->d_name); ?></td>
                           <td><?php echo output($fuels['v_odometerreading']); ?></td>
                           <td><?php echo output($fuels['v_fuelcomments']); ?></td>
                           <?php if(userpermission('lr_fuel_edit')) { ?>
                              <td>
                            <a class="icon" href="<?php echo base_url(); ?>fuel/editfuel/<?php echo output($fuels['v_fuel_id']); ?>">
                              <i class="fa fa-edit"></i>
                            </a>
                            <?php  } if(userpermission('lr_booking_del')) { ?> |
                              <a data-toggle="modal" href="" onclick="confirmation('<?php echo base_url(); ?>fuel/deletefuel','<?= output($fuels['v_fuel_id']); ?>')" data-target="#deleteconfirm" class="icon text-danger" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i></a>
                           </a> 
                           <?php } ?>
                          </td>
                          <?php } ?>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    
        </div>         
        </div>
        <!-- /.card-body -->
      </div>
      
             </div>
    </section>
    <!-- /.content -->



