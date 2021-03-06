
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
                    <a href='<?= base_url('Regsa001efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Abertura do Bloco A </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='a001_Reg'>Registro</label>
							<input type='text'  name='a001_Reg' id='a001_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['a001_Reg']) ? $response['data'][0]['a001_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a001_Reg']) ? $response['error']['a001_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a001_IndicadorMovimento'>Indicador Movimento</label>
							<select name='a001_IndicadorMovimento' id='a001_IndicadorMovimento' class='custom-select' placeholder='Indicador Movimento' required disabled>
								<option value=''> Selecione </option>
								<option value='0 - Bloco com dados informados' <?= isset($response['data'][0]['a001_IndicadorMovimento']) ? $response['data'][0]['a001_IndicadorMovimento'] == '0 - Bloco com dados informados' ? 'selected' : '' : '' ?>> 0 - Bloco com dados informados </option>
								<option value='1 - Bloco sem dados informados' <?= isset($response['data'][0]['a001_IndicadorMovimento']) ? $response['data'][0]['a001_IndicadorMovimento'] == '1 - Bloco sem dados informados' ? 'selected' : '' : '' ?>> 1 - Bloco sem dados informados </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a001_DtIni'>Data Inicial</label>
							<input type='date'  name='a001_DtIni' id='a001_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['a001_DtIni']) ? $response['data'][0]['a001_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a001_DtIni']) ? $response['error']['a001_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a001_DtFin'>Data Final</label>
							<input type='date'  name='a001_DtFin' id='a001_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['a001_DtFin']) ? $response['data'][0]['a001_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a001_DtFin']) ? $response['error']['a001_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a001_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='a001_PessoaJuridicaId' id='a001_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica'  disabled>
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data'][0]['a001_PessoaJuridicaId']) ? $response['data'][0]['a001_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a001_PessoaJuridicaId']) ? $response['error']['a001_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                      </fieldset><!-- /.fieldset -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->

          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
