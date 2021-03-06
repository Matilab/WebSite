
    <!-- .app-main -->
    <main class='app-main'>
      <!-- .wrapper -->
      <div class='wrapper'>
        <!-- .page -->
        <div class='page'>
          <?php if(isset($response)): ?>
            <?php if($response['method'] !== 'GET'): ?>
              <?php if($response['status'] == 'FALSE'): ?>
              <!-- .page-message -->
              <div class='page-message bg-warning' role='alert'>
                <span class='mr-5'><?= $response['message'] ?></span>
                  <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                    <span aria-hidden='true'><i class='fa fa-times'></i></span>
                  </a>
              </div><!-- /.page-message -->
              <?php else: ?>
              <!-- .page-message -->
              <div class='page-message bg-success' role='alert'>
                <span class='mr-5'><?= $response['message'] ?></span>
                <a href='#' class='btn btn-sm btn-icon btn-success' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                  <span aria-hidden='true'><i class='fa fa-times'></i></span>
                </a>
              </div><!-- /.page-message -->    
              <?php endif; ?>
            <?php else: ?>
              <?php if($response['status'] == 'FALSE'): ?>
              <!-- .page-message -->
              <div class='page-message bg-warning' role='alert'>
                <span class='mr-5'>Falha ao consultar o registro!</span>
                <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                  <span aria-hidden='true'><i class='fa fa-times'></i></span>
                </a>
              </div><!-- /.page-message -->
              <?php endif; ?>
            <?php endif; ?>     
          <?php endif; ?>
          <!-- .page-inner -->
          <div class='page-inner'>
            <!-- .page-title-bar -->
            <header class='page-title-bar'>
              <!-- .breadcrumb -->
              <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                  <li class='breadcrumb-item active'>
                    <a href='<?= base_url('Pessoasfisica') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
                  </li>
                </ol>
              </nav><!-- /.breadcrumb -->
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class='page-section'>
              <!-- .section-block -->
              <div class='section-block'>            
                <!-- .page-title-bar -->
                <header class='page-title-bar'>
                  <!-- page title stuff goes here -->
                  <h1 class='page-title'> Pessoa Fisica </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Pessoasfisica/update/'.$response['data'][0]['pf_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='pf_Nome'>Nome</label>
							<input type='text'  name='pf_Nome' id='pf_Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['pf_Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Nome']) ? $response['error']['pf_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_Sobrenome'>Sobrenome</label>
							<input type='text'  name='pf_Sobrenome' id='pf_Sobrenome' class='form-control' placeholder='Sobrenome' value='<?= $response['data'][0]['pf_Sobrenome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Sobrenome']) ? $response['error']['pf_Sobrenome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_DataNascimento'>Data Nascimento</label>
							<input type='date'  name='pf_DataNascimento' id='pf_DataNascimento' class='form-control' placeholder='Data Nascimento' value='<?= $response['data'][0]['pf_DataNascimento'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_DataNascimento']) ? $response['error']['pf_DataNascimento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_UrlFoto'>Foto Perfil</label>
							<input type='text'  name='pf_UrlFoto' id='pf_UrlFoto' class='form-control' placeholder='Foto Perfil' value='<?= $response['data'][0]['pf_UrlFoto'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_UrlFoto']) ? $response['error']['pf_UrlFoto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_Ativo'>Ativo</label>
							<select name='pf_Ativo' id='pf_Ativo' class='custom-select' placeholder='Ativo' required>
								<option value=''> Selecione </option>
								<option value='True' <?= $response['data'][0]['pf_Ativo'] == 'True' ? 'selected' : '' ?>> True </option>
								<option value='False' <?= $response['data'][0]['pf_Ativo'] == 'False' ? 'selected' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='pf_Criacao'></label>
							<input type='datetime-local'  name='pf_Criacao' id='pf_Criacao' class='form-control' placeholder='' value='<?= (substr($response['data'][0]['pf_Criacao'],10,1) !== 'T' ? date_format(date_create_from_format('Y-m-d H:i:s', $response['data'][0]['pf_Criacao']),'Y-m-d\TH:i') : $response['data'][0]['pf_Criacao']) ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Criacao']) ? $response['error']['pf_Criacao'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-3' type='submit'>Salvar</button>
                          <div class='form-group mt-2'>
														<label class='switcher-control'> 
															<input type='checkbox' name='cbxSaveBack' class='switcher-input' <?= isset($response['data']['cbxSaveBack']) ? 'checked' : '' ?>>
															<span class='switcher-indicator'></span>
															<span class='switcher-label-on'><i class='fas fa-check'></i></span>
															<span class='switcher-label-off'><i class='fas fa-times'></i></span>
														</label>
														<span>Salvar e voltar?</span>
													</div>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Pessoasfisica') ?>'">Cancelar</button>
                        </div>
                      </fieldset><!-- /.fieldset -->
                    <?= form_close(); ?><!-- /.form -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->

      <!-- .page-section -->
      <div class='page-section'>

        <!-- .card -->
        <div class='card card-fluid'>

          <!-- .card-header -->
          <div class='card-header d-md-flex align-items-md-start'>
            <ul class='nav nav-tabs card-header-tabs'>
              <li class='nav-item'>
                <a class='nav-link active show' data-toggle='tab' href='#TabRef0'>Pessoa Juridica</a>
              </li>                
            </ul>
          </div><!-- /.card-header -->

          <!-- .card-body -->
          <div class='card-body'>
            <!-- .tab-content -->
            <div id='myTabContent' class='tab-content'>
          
                  <!-- .tab-pane -->
                  <div class='tab-pane fade active show' id='TabRef0'>
                    <div class='d-flex align-items-center mb-4'>
                      <?php if(isset($response['data'][0]['pf_Id'])): ?>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Pessoasjuridica/create/'.$nameView.'/'. $response['data'][0]['pf_Id']) ?>'">
                      <?php else: ?>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Pessoasjuridica/create/'.$nameView.'/') ?>'" disabled>
                      <?php endif; ?>
                        <span class='fa fa-plus'></span>
                      </button> <!-- /floating action -->
                      <div class='dropdown ml-auto'>
                        <button type='button' class='btn btn-icon btn-light' data-toggle='dropdown'>
                        <i class='fa fa-ellipsis-v'></i></button>
                        <div class='dropdown-menu dropdown-menu-right'>
                          <div class='dropdown-arrow'></div>
                          <a href='#' class='dropdown-item' id='btnFloatedAdd'>Atualizar</a>
                        </div>
                      </div>
                    </div>

                    <!-- .form-group -->
                    <div class='form-group'>
                      <!-- .input-group -->
                      <div class='input-group input-group-alt'>
                        <!-- .input-group-prepend -->
                        <div class='input-group-prepend'>
                          <select id='filterBy' class='custom-select' style='width: 150px'>
                            <option value='' selected> Filtrar por </option>
													<option value='1'> Nome </option>
													<option value='2'> Nome Fantasia </option>
													<option value='3'> Matriz </option>
													<option value='4'> Endereço </option>
													<option value='5'> Numero </option>
													<option value='6'> Complemento </option>
													<option value='7'> Bairro </option>
													<option value='8'> Cep </option>
													<option value='9'> Telefone </option>
													<option value='10'> Celular </option>
													<option value='11'> E-mail </option>
													<option value='12'> Inscrição Estadual </option>
													<option value='13'> CNPJ </option>
													<option value='14'> CNAE </option>
													<option value='15'> Inscrição Municipal </option>
													<option value='16'> Numero Suframa </option>
													<option value='17'> Natureza Juridica </option>
													<option value='18'> Nome do Contato </option>
													<option value='19'> Web Site </option>
													<option value='20'> Contribuinte </option>
													<option value='21'> Municipio </option>
													<option value='22'> Pessoa Fisica </option>
													<option value='23'> Ativo </option>

                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class='input-group has-clearable'>
                          <button id='clear-search' type='button' class='close' aria-label='Close'>
                            <span aria-hidden='true'><i class='fa fa-times-circle'></i></span>
                          </button>
                          <div class='input-group-prepend'>
                            <span class='input-group-text'><span class='oi oi-magnifying-glass'></span></span>
                          </div>
                          <input id='table-search' type='text' class='form-control' placeholder='Search products'>
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table -->
                    <table id='myTablePessoasjuridica' class='table'>
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th>
                            <div class='thead-dd dropdown'>
                              <span class='custom-control custom-control-nolabel custom-checkbox'><input type='checkbox' class='custom-control-input' id='check-handle'> <label class='custom-control-label' for='check-handle'></label></span>
                              <div class='thead-btn' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='fa fa-caret-down'></span>
                              </div>
                              <div class='dropdown-menu'>
                                <div class='dropdown-arrow'></div>
                                <a class='dropdown-item' href='#'>Select all</a> 
                                <a class='dropdown-item' href='#'>Unselect all</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='#'>Bulk remove</a> 
                                <a class='dropdown-item' href='#'>Bulk edit</a> 
                                <a class='dropdown-item' href='#'>Separate actions</a>
                              </div>
                            </div>
                          </th>
												<th style='width:100px; min-width:120px;'> # </th>
												<th> Nome </th>
												<th> Nome Fantasia </th>
												<th> Matriz </th>
												<th> Endereço </th>
												<th> Numero </th>
												<th> Complemento </th>
												<th> Bairro </th>
												<th> Cep </th>
												<th> Telefone </th>
												<th> Celular </th>
												<th> E-mail </th>
												<th> Inscrição Estadual </th>
												<th> CNPJ </th>
												<th> CNAE </th>
												<th> Inscrição Municipal </th>
												<th> Numero Suframa </th>
												<th> Natureza Juridica </th>
												<th> Nome do Contato </th>
												<th> Web Site </th>
												<th> Contribuinte </th>
												<th> Municipio </th>
												<th> Pessoa Fisica </th>
												<th> Ativo </th>

                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>

                        </tr>
                      </tbody><!-- /tbody -->
                    </table><!-- /.table -->

                  </div><!-- /.tab-pane -->
      
      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div><!-- /.page-section -->
    
      <!-- Central modal -->
      <div class='modal fade' id='modalDeleteRegistropessoasjuridica' tabindex='-1' role='dialog' aria-labelledby='ModalDeleteLabel' aria-hidden='true'>
        <!-- .modal-dialog -->
        <div class='modal-dialog modal-dialog-centered' role='document'>
          <!-- .modal-content -->
          <div class='modal-content'>
            <!-- .modal-header -->
            <div class='modal-header'>
              <h5 id='ModalDeleteLabel' class='modal-title'> Deseja Deletar este Registro? </h5>
            </div><!-- /.modal-header -->
          <?php if(isset($response['data'][0]['pf_Id'])): ?>
            <?= form_open('pessoasjuridica/delete/'.$nameView.'/'.$response['data'][0]['pf_Id']) ?>
          <?php else: ?>
            <?= form_open('pessoasjuridica/delete/'.$nameView.'/') ?>
          <?php endif; ?>
              <!-- .modal-body -->
              <div class='modal-body'>
                <input type='hidden' id='DeleteBypj_id' name='Id' value=''>
              </div><!-- /.modal-body -->
              <!-- .modal-footer -->
              <div class='modal-footer'>
                <button type='submit' class='btn btn-primary'>Deletar</button>
                <button type='button' class='btn btn-light' data-dismiss='modal'>Cancelar</button>
              </div><!-- /.modal-footer -->
            <?= form_close() ?>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

<?php if(isset($response['data'][0]['pf_Id'])): ?>
  <script>
  var url_get_pessoasjuridica = '<?= base_url('pessoasjuridica/get/'.$response['data'][0]['pf_Id']); ?>';
  var url_upd_pessoasjuridica = '<?= base_url('pessoasjuridica/edit/'.$nameView.'/'. $response['data'][0]['pf_Id']); ?>';
  var url_view_pessoasjuridica = '<?= base_url('pessoasjuridica/view/'.$nameView.'/'. $response['data'][0]['pf_Id']); ?>';
</script>
<?php endif; ?>
      
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->

