    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo (isset($fueldetails))?'Edit Fuel':'Add Fuel' ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Combustível</a></li>
              <li class="breadcrumb-item active"><?php echo (isset($fueldetails))?'Edit Fuel':'Add Fuel' ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       	      <form method="post" id="fuel" class="card" action="<?php echo base_url();?>fuel/<?php echo (isset($fueldetails))?'updatefuel':'insertfuel'; ?>">
          <div class="card-body">

                  <div class="row">
                    <?php if(isset($fueldetails)) { ?>
                   <input type="hidden" name="v_fuel_id" id="v_fuel_id" value="<?php echo (isset($fueldetails)) ? $fueldetails[0]['v_fuel_id']:'' ?>" >
                 <?php  } ?>
                    <div class="col-sm-6 col-md-3">
                          <label class="form-label">Veículo<span class="form-required">*</span></label>
                      <div class="form-group">
                         <select id="v_id"  class="form-control selectized"  name="v_id" required="true">
                        <option value="">Selecione o Veículo</option>
                        <?php  foreach ($vechiclelist as $key => $vechiclelists) { ?>
                        <option <?php if((isset($fueldetails)) && $fueldetails[0]['v_id'] == $vechiclelists['v_id']){ echo 'selected';} ?> value="<?php echo output($vechiclelists['v_id']) ?>"><?php echo output($vechiclelists['v_name']).' - '. output($vechiclelists['v_registration_no']); ?></option>
                        <?php  } ?>
                     </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                     <label class="form-label">Motorista Adicionado<span class="form-required">*</span></label>
                     <select id="v_fueladdedby" required="true" class="form-control selectized"  name="v_fueladdedby">
                       <option value="">Selecione o Motorista</option>
                        <?php  foreach ($driverlist as $key => $driverlists) { ?>
                        <option <?php if((isset($fueldetails)) && $fueldetails[0]['v_fueladdedby'] == $driverlists['d_id']){ echo 'selected';} ?> value="<?php echo output($driverlists['d_id']) ?>"><?php echo output($driverlists['d_name']); ?></option>
                        <?php  } ?>
                     </select>
                  </div>
               </div>
                   <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label class="form-label">Data de Preenchimento<span class="form-required">*</span></label>
                         <input type="text" required="true" class="form-control datepicker" id="v_fuelfilldate" name="v_fuelfilldate" value="<?php echo (isset($fueldetails)) ? date(dateformat(), strtotime($fueldetails[0]['v_fuelfilldate'])):'' ?>" placeholder="Fuel Fill Date">

                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label class="form-label">Quantidade<span class="form-required">*</span></label>
                         <input type="text" class="form-control" id="v_fuel_quantity" name="v_fuel_quantity" value="<?php echo (isset($fueldetails)) ? $fueldetails[0]['v_fuel_quantity']:'' ?>" placeholder="Quantity">

                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                          <label class="form-label">Leitura de odômetro<span class="form-required">*</span></label>
                         <input type="text" class="form-control" id="v_odometerreading" name="v_odometerreading" value="<?php echo (isset($fueldetails)) ? $fueldetails[0]['v_odometerreading']:'' ?>" placeholder="Odometer Reading">

                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                         <label class="form-label">Quantia<span class="form-required">*</span></label>
                          <input type="text" class="form-control" id="v_fuelprice" value="<?php echo (isset($fueldetails)) ? $fueldetails[0]['v_fuelprice']:'' ?>" name="v_fuelprice" placeholder="Amount">
                      </div>
                    </div>
                     <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                       <label class="form-label">Comentário</label>
                          <input type="text" class="form-control" id="v_fuelcomments" value="<?php echo (isset($fueldetails)) ? $fueldetails[0]['v_fuelcomments']:'' ?>" name="v_fuelcomments" placeholder="Fuel Comments">
                      </div>
                    </div>
                    <?php if(!isset($fueldetails)) {  ?>
                    	<br>
                     <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                       <label class="form-label">Precisa Adicionar Despesas?</label>
                           <input class="form-control form-check-input" id="exp" name="exp" type="checkbox">
                      </div>
                    </div>
                	<?php } ?>
                  </div>
      
                </div>
                 <input type="hidden" id="v_created_date" name="v_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
  
      <div class="modal-footer">

                  <button type="submit" class="btn btn-primary"> <?php echo (isset($fueldetails))?'Update Fuel':'Add Fuel' ?></button>
      </div>
    </form>
             </div>
    </section>
    <!-- /.content -->



