
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
                    <a href='<?= base_url('Regs0145efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta </h1>
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
								<label for='0145_Reg'>Registro</label>
							<input type='text'  name='0145_Reg' id='0145_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['0145_Reg']) ? $response['data'][0]['0145_Reg'] : '0145' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_Reg']) ? $response['error']['0145_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0145_CodIncTrib'>Código Incidência Tributária</label>
							<input type='number' step='1' name='0145_CodIncTrib' id='0145_CodIncTrib' class='form-control' placeholder='Código Incidência Tributária' value='<?= isset($response['data'][0]['0145_CodIncTrib']) ? $response['data'][0]['0145_CodIncTrib'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_CodIncTrib']) ? $response['error']['0145_CodIncTrib'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0145_VlRecTot'>Valor da Receita Bruta Total</label>
							<input type='number' step='0.01' name='0145_VlRecTot' id='0145_VlRecTot' class='form-control' placeholder='Valor da Receita Bruta Total' value='<?= isset($response['data'][0]['0145_VlRecTot']) ? $response['data'][0]['0145_VlRecTot'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_VlRecTot']) ? $response['error']['0145_VlRecTot'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0145_VlRecAtiv'>Valor da Receita Bruta da Atividade</label>
							<input type='number' step='0.01' name='0145_VlRecAtiv' id='0145_VlRecAtiv' class='form-control' placeholder='Valor da Receita Bruta da Atividade' value='<?= isset($response['data'][0]['0145_VlRecAtiv']) ? $response['data'][0]['0145_VlRecAtiv'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_VlRecAtiv']) ? $response['error']['0145_VlRecAtiv'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0145_VlRecDemaisAtiv'>Valor da Receita Bruta das demais Atividade</label>
							<input type='number' step='0.01' name='0145_VlRecDemaisAtiv' id='0145_VlRecDemaisAtiv' class='form-control' placeholder='Valor da Receita Bruta das demais Atividade' value='<?= isset($response['data'][0]['0145_VlRecDemaisAtiv']) ? $response['data'][0]['0145_VlRecDemaisAtiv'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_VlRecDemaisAtiv']) ? $response['error']['0145_VlRecDemaisAtiv'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0145_InfoCompl'>Informação complementar</label>
							<input type='text'  name='0145_InfoCompl' id='0145_InfoCompl' class='form-control' placeholder='Informação complementar' value='<?= isset($response['data'][0]['0145_InfoCompl']) ? $response['data'][0]['0145_InfoCompl'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0145_InfoCompl']) ? $response['error']['0145_InfoCompl'] : ''; ?></div>
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
