
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
                    <a href='<?= base_url('Regsa111efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Processo Referenciado </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regsa111efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='a111_Reg'>Registro</label>
							<input type='text'  name='a111_Reg' id='a111_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data']['a111_Reg']) ? $response['data']['a111_Reg'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_Reg']) ? $response['error']['a111_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a111_NumProcesso'>Número do Processo</label>
							<input type='text'  name='a111_NumProcesso' id='a111_NumProcesso' class='form-control' placeholder='Número do Processo' value='<?= isset($response['data']['a111_NumProcesso']) ? $response['data']['a111_NumProcesso'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_NumProcesso']) ? $response['error']['a111_NumProcesso'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a111_IndicadorOrigemProcesso'>Origem do Processo</label>
							<select name='a111_IndicadorOrigemProcesso' id='a111_IndicadorOrigemProcesso' class='custom-select' placeholder='Origem do Processo' required>
								<option value=''> Selecione </option>
								<option value='1 - Justiça Federal' <?= isset($response['data']['a111_IndicadorOrigemProcesso']) ? $response['data']['a111_IndicadorOrigemProcesso'] == '1 - Justiça Federal' ? 'selected' : '' : '' ?>> 1 - Justiça Federal </option>
								<option value='3 – Secretaria da Receita Federal do Brasil' <?= isset($response['data']['a111_IndicadorOrigemProcesso']) ? $response['data']['a111_IndicadorOrigemProcesso'] == '3 – Secretaria da Receita Federal do Brasil' ? 'selected' : '' : '' ?>> 3 – Secretaria da Receita Federal do Brasil </option>
								<option value='9 - Outros' <?= isset($response['data']['a111_IndicadorOrigemProcesso']) ? $response['data']['a111_IndicadorOrigemProcesso'] == '9 - Outros' ? 'selected' : '' : '' ?>> 9 - Outros </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a111_RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
							<select name='a111_RegA100EFDCId' id='a111_RegA100EFDCId' class='custom-select' placeholder='Documento - Nota Fiscal de Serviço' >
								<?= getOptionToSelect('regsa100efdc','a100_Id', '', isset($response['data']['a111_RegA100EFDCId']) ? $response['data']['a111_RegA100EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_RegA100EFDCId']) ? $response['error']['a111_RegA100EFDCId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regsa111efdc') ?>'">Cancelar</button>
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
