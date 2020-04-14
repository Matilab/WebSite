
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
                    <a href='<?= base_url('Regs0140efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Tabela de Cadastro de Estabelecimentos </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0140efdc/update/'.$response['data'][0]['0140_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0140_Reg'>Registro</label>
							<input type='text' name='0140_Reg' id='0140_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0140_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Reg']) ? $response['error']['0140_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_CodEstab'>Código</label>
							<input type='text' name='0140_CodEstab' id='0140_CodEstab' class='form-control' placeholder='Código' value='<?= $response['data'][0]['0140_CodEstab'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_CodEstab']) ? $response['error']['0140_CodEstab'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Nome'>Nome</label>
							<input type='text' name='0140_Nome' id='0140_Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['0140_Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Nome']) ? $response['error']['0140_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_CNPJ'>CNPJ</label>
							<input type='number' name='0140_CNPJ' id='0140_CNPJ' class='form-control' placeholder='CNPJ' value='<?= $response['data'][0]['0140_CNPJ'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_CNPJ']) ? $response['error']['0140_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_UF'>UF</label>
							<input type='text' name='0140_UF' id='0140_UF' class='form-control' placeholder='UF' value='<?= $response['data'][0]['0140_UF'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_UF']) ? $response['error']['0140_UF'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_IE'>Inscrição Estadual</label>
							<input type='text' name='0140_IE' id='0140_IE' class='form-control' placeholder='Inscrição Estadual' value='<?= $response['data'][0]['0140_IE'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_IE']) ? $response['error']['0140_IE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_MunicipioId'>Municipio</label>
							<input type='number' name='0140_MunicipioId' id='0140_MunicipioId' class='form-control' placeholder='Municipio' value='<?= $response['data'][0]['0140_MunicipioId'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_MunicipioId']) ? $response['error']['0140_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_IM'>Inscrição Municipal</label>
							<input type='text' name='0140_IM' id='0140_IM' class='form-control' placeholder='Inscrição Municipal' value='<?= $response['data'][0]['0140_IM'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_IM']) ? $response['error']['0140_IM'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Suframa'>Suframa</label>
							<input type='text' name='0140_Suframa' id='0140_Suframa' class='form-control' placeholder='Suframa' value='<?= $response['data'][0]['0140_Suframa'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Suframa']) ? $response['error']['0140_Suframa'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_DtIni'>Data Inicial</label>
							<input type='date' name='0140_DtIni' id='0140_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['0140_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_DtIni']) ? $response['error']['0140_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_DtFin'>Data Final</label>
							<input type='date' name='0140_DtFin' id='0140_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['0140_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_DtFin']) ? $response['error']['0140_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0140_PessoaJuridicaId' id='0140_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='<?= $response['data'][0]['0140_PessoaJuridicaId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_PessoaJuridicaId']) ? $response['error']['0140_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Reg0145EFDCId'>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</label>
							<input type='number' name='0140_Reg0145EFDCId' id='0140_Reg0145EFDCId' class='form-control' placeholder='Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta' value='<?= $response['data'][0]['0140_Reg0145EFDCId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Reg0145EFDCId']) ? $response['error']['0140_Reg0145EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0140efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0140efdc/get'); ?>';
  var url_upd = '<?= base_url('regs0140efdc/edit'); ?>';
</script>
