    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo (isset($vehicledetails))?'Edit Vehicle':'Add Vehicle' ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Veículo</a></li>
              <li class="breadcrumb-item active"><?php echo (isset($vehicledetails))?'Edit vehicle':'Add Vehicle' ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form method="post" id="vehicle_add" class="card" action="<?php echo base_url();?>vehicle/<?php echo (isset($vehicledetails))?'updatevehicle':'insertvehicle'; ?>" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="row">
                    <?php if(isset($vehicledetails)) { ?>
                   <input type="hidden" name="v_id" id="v_id" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_id']:'' ?>" >
                    <?php } ?>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label">Número de Registro</label>
                      <div class="form-group">
                        <input type="text" name="v_registration_no" id="v_registration_no" class="form-control" placeholder="Número de Registro" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_registration_no']:'' ?>">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <label class="form-label">Nome do Veículo</label>
                      <div class="form-group">
                        <input type="text" name="v_name" id="v_name" class="form-control" placeholder="Nome do Veículo" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_name']:'' ?>">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Modelo</label>
                        <input type="text" name="v_model" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_model']:'' ?>" class="form-control" placeholder="Modelo">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Número do Chassi</label>
                        <input type="text" name="v_chassis_no" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_chassis_no']:'' ?>" class="form-control" placeholder="Número do Chassi">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Número do Motor</label>
                        <input type="text" name="v_engine_no" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_engine_no']:'' ?>" class="form-control" placeholder="Número do Motor">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Fabricado por</label>
                        <input type="text" name="v_manufactured_by" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_manufactured_by']:'' ?>" class="form-control" placeholder="Fabricado por">
                      </div>
                    </div>
                     <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Tipo de Veículo</label>
                        <select id="v_type" name="v_type" class="form-control " required="">
                         <option value="">Select Tipo de Veículo</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='CAR') ? 'selected':'' ?> value="CAR">CARRO</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='MOTORCYCLE') ? 'selected':'' ?> value="MOTORCYCLE">MOTOCICLETA</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='TRUCK') ? 'selected':'' ?> value="TRUCK">CAMINHÃO</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='BUS') ? 'selected':'' ?> value="BUS">ÔNIBUS</option> 
                           <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='TAXI') ? 'selected':'' ?> value="TAXI">TÁXI</option> 
                           <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_type']=='BICYCLE') ? 'selected':'' ?> value="BICYCLE">BICICLETA</option> 
                        </select>

                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="v_color" class="form-label">Cor do Veículo<small> (To show in Map)</small></label>
                        <input id="add-device-color" name="v_color" class="jscolor {valueElement:'add-device-color', styleElement:'add-device-color', hash:true, mode:'HSV'} form-control"  value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_color']:'#D6E1F3' ?>" required>
                      </div>
                    </div>
                    <?php if(isset($vehicledetails[0]['v_is_active'])) { ?>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="v_is_active" class="form-label">Status do veículo</label>
                        <select id="v_is_active" name="v_is_active" class="form-control " required="">
                          <option value="">Status</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_is_active']==1) ? 'selected':'' ?> value="1">Active</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_is_active']==0) ? 'selected':'' ?> value="0">Inactive</option> 
                        </select>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Data de Expiração do Registro</label>
                        <input type="text" required="" name="v_reg_exp_date" value="<?php echo (isset($vehicledetails)) ? date(dateformat(), strtotime($vehicledetails[0]['v_reg_exp_date'])):'' ?>" class="form-control datepicker" placeholder="Data de expiração do registro">
                      </div>
                  </div>
                   <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label for="v_group" class="form-label">Grupo de Veículos</label>
                        <select id="v_group" name="v_group" class="form-control " required="">
                          <option value="">Selecione Grupo de Veículos</option> 
                          <?php if(!empty($v_group)) { foreach($v_group as $v_groupdata) { ?>
                          <option <?= (isset($vehicledetails[0]['v_group']) && $vehicledetails[0]['v_group'] == $v_groupdata['gr_id'])?'selected':''?> value="<?= $v_groupdata['gr_id'] ?>"><?= $v_groupdata['gr_name'] ?></option> 
                          <?php } } ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Imagem do Veículo</label>
                      <input type="file" id="file" name="file" class="form-control"/>
                    </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Documento do Veículo</label>
                      <input type="file" id="file1" name="file1" class="form-control"/>
                    </div>
                    </div>
                    <?php $settings=sitedata(); if(isset($settings['s_traccar_enabled']) && $settings['s_traccar_enabled']==1) { ?>  

                    <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Traccar Device ID <span title="3 New Messages" class="badge ">(Data sycn based on this value)</span></label>
                      <select id="v_traccar_id" name="v_traccar_id" class="form-control">
                         <option value="">Selecione o ID do dispositivo Traccar</option> 
                         <?php if(!empty($traccar_list)) { foreach($traccar_list as $traccar) { ?>
                          <option <?= (isset($vehicledetails[0]['v_traccar_id']) && $vehicledetails[0]['v_traccar_id'] == $traccar['id'])?'selected':''?> value="<?= $traccar['id'] ?>"><?= $traccar['name'] ?></option> 
                          <?php } } ?>
                        </select> 
                    </div>
                    </div>


                   


                    <?php } ?>

                    </div>
                    
                    


                    <hr>
                    <div class="form-label"><b>Detalhes da API GPS (alimentar dados GPS)</b></div>
                     <div class="row">
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">API URL</label>
                        <input type="text" name="v_api_url" class="form-control" placeholder="API URL" value="<?php echo base_url();?>api" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Nome de usuário da API</label>
                        <input type="text" id="v_api_username" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_api_username']:'' ?>" name="v_api_username" class="form-control" placeholder="API Username" readonly>
                      </div>
                    </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Senha da API</label>
                        <input type="text" name="v_api_password" class="form-control" placeholder="API Password" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_api_password']:random_string('nozero', 6) ?>"  readonly>
                      </div>
                    </div>
                  </div>
                </div>
                  <input type="hidden" id="v_created_by" name="v_created_by" value="<?php echo output($this->session->userdata['session_data']['u_id']); ?>">
                                    <input type="hidden" id="v_mileageperlitre" name="v_mileageperlitre" value="0">

                   <input type="hidden" id="v_created_date" name="v_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary"> <?php echo (isset($vehicledetails))?'Update Vehicle':'Add Vehicle' ?></button>
                </div>
              </form>
             </div>
    </section>
    <!-- /.content -->



