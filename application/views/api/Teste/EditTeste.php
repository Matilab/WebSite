
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
              <div class='page-message bg-success' role='alert>
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
                    <a href='<?= base_url('Teste') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Tabela de Teste </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Teste/update/'.$response['data'][0]['Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='Nome'>Nome</label>
							<input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Nome']) ? $response['error']['Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Valor'></label>
							<input type='number' name='Valor' id='Valor' class='form-control' placeholder='' value='<?= $response['data'][0]['Valor'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Valor']) ? $response['error']['Valor'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Desconto'></label>
							<input type='' name='Desconto' id='Desconto' class='form-control' placeholder='' value='<?= $response['data'][0]['Desconto'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Desconto']) ? $response['error']['Desconto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Total'></label>
							<input type='' name='Total' id='Total' class='form-control' placeholder='' value='<?= $response['data'][0]['Total'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Total']) ? $response['error']['Total'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='VlIcms'></label>
							<input type='' name='VlIcms' id='VlIcms' class='form-control' placeholder='' value='<?= $response['data'][0]['VlIcms'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['VlIcms']) ? $response['error']['VlIcms'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Periodo'></label>
							<input type='datetime-local' name='Periodo' id='Periodo' class='form-control' placeholder='' value='<?= $response['data'][0]['Periodo'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Periodo']) ? $response['error']['Periodo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Tipo'></label>
							<select name='Tipo' id='Tipo' class='custom-select' placeholder='' >
								<option value=''> Selecione </option>
								<option value='masculino' <?= $response['data'][0]['Tipo'] == 'masculino' ? 'selected' : '' ?>> masculino </option>
								<option value='feminino' <?= $response['data'][0]['Tipo'] == 'feminino' ? 'selected' : '' ?>> feminino </option>
								<option value='trans' <?= $response['data'][0]['Tipo'] == 'trans' ? 'selected' : '' ?>> trans </option>
								<option value='gay' <?= $response['data'][0]['Tipo'] == 'gay' ? 'selected' : '' ?>> gay </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='Ativo'>Ativo</label>
							<input type='' name='Ativo' id='Ativo' class='form-control' placeholder='Ativo' value='<?= $response['data'][0]['Ativo'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Ativo']) ? $response['error']['Ativo'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Teste') ?>'">Cancelar</button>
                        </div>
                      </fieldset><!-- /.fieldset -->
                    <?= form_close(); ?><!-- /.form -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('teste/get'); ?>';
  var url_upd = '<?= base_url('teste/edit'); ?>';
  var url_view = '<?= base_url('teste/view'); ?>';
</script>
