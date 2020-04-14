
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
                    <a href='<?= base_url('Regs0035efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Identificação de Sociedade em Conta de Participação – SCP </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0035efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0035_Reg'>Registro</label>
							<input type='text' name='0035_Reg' id='0035_Reg' class='form-control' placeholder='Registro' value='0035' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_Reg']) ? $response['error']['0035_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_CodSCP'>Identificação da SCP</label>
							<input type='number' name='0035_CodSCP' id='0035_CodSCP' class='form-control' placeholder='Identificação da SCP' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_CodSCP']) ? $response['error']['0035_CodSCP'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_DescSCP'>Descrição da SCP</label>
							<input type='text' name='0035_DescSCP' id='0035_DescSCP' class='form-control' placeholder='Descrição da SCP' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_DescSCP']) ? $response['error']['0035_DescSCP'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_InfoCompl'>Informação Complementar</label>
							<input type='text' name='0035_InfoCompl' id='0035_InfoCompl' class='form-control' placeholder='Informação Complementar' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_InfoCompl']) ? $response['error']['0035_InfoCompl'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_DtIni'>Data Inicial</label>
							<input type='date' name='0035_DtIni' id='0035_DtIni' class='form-control' placeholder='Data Inicial' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_DtIni']) ? $response['error']['0035_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_DtFin'>Data Final</label>
							<input type='date' name='0035_DtFin' id='0035_DtFin' class='form-control' placeholder='Data Final' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_DtFin']) ? $response['error']['0035_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0035_PessoaJuridicaId' id='0035_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_PessoaJuridicaId']) ? $response['error']['0035_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0035_UsersId'>Usuário</label>
							<input type='number' name='0035_UsersId' id='0035_UsersId' class='form-control' placeholder='Usuário' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0035_UsersId']) ? $response['error']['0035_UsersId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0035efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0035efdc/create'); ?>';
  var url_upd = '<?= base_url('regs0035efdc/edit'); ?>';
</script>
