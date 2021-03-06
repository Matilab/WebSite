
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
                    <a href='<?= base_url('Ref311/'.$parentView.'/'.$IdParent) ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Abertura do Arquivo Digital e Identificação da Pessoa Jurídica </h1>
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
								<label for='0000_Reg'>Registro</label>
							<input type='text'  name='0000_Reg' id='0000_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['0000_Reg']) ? $response['data'][0]['0000_Reg'] : '0000' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Reg']) ? $response['error']['0000_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Ref311Id'>Código Versão Leiaute</label>
							<select name='0000_Ref311Id' id='0000_Ref311Id' class='custom-select' placeholder='Código Versão Leiaute' required disabled>
								<?= getOptionToSelect('ref311','311_Id', '', isset($response['data'][0]['0000_Ref311Id']) ? $response['data'][0]['0000_Ref311Id'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Ref311Id']) ? $response['error']['0000_Ref311Id'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_TipoEscrit'>Tipo Escrituração</label>
							<select name='0000_TipoEscrit' id='0000_TipoEscrit' class='custom-select' placeholder='Tipo Escrituração' required disabled>
								<option value=''> Selecione </option>
								<option value='Original' <?= isset($response['data'][0]['0000_TipoEscrit']) ? $response['data'][0]['0000_TipoEscrit'] == 'Original' ? 'selected' : '' : '' ?>> Original </option>
								<option value='Retificadora' <?= isset($response['data'][0]['0000_TipoEscrit']) ? $response['data'][0]['0000_TipoEscrit'] == 'Retificadora' ? 'selected' : '' : '' ?>> Retificadora </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_IndSitEsp'>Indicador Situação Especial</label>
							<select name='0000_IndSitEsp' id='0000_IndSitEsp' class='custom-select' placeholder='Indicador Situação Especial' required disabled>
								<option value=''> Selecione </option>
								<option value='Abertura' <?= isset($response['data'][0]['0000_IndSitEsp']) ? $response['data'][0]['0000_IndSitEsp'] == 'Abertura' ? 'selected' : '' : '' ?>> Abertura </option>
								<option value='Cisão' <?= isset($response['data'][0]['0000_IndSitEsp']) ? $response['data'][0]['0000_IndSitEsp'] == 'Cisão' ? 'selected' : '' : '' ?>> Cisão </option>
								<option value='Fusão' <?= isset($response['data'][0]['0000_IndSitEsp']) ? $response['data'][0]['0000_IndSitEsp'] == 'Fusão' ? 'selected' : '' : '' ?>> Fusão </option>
								<option value='Incorporação' <?= isset($response['data'][0]['0000_IndSitEsp']) ? $response['data'][0]['0000_IndSitEsp'] == 'Incorporação' ? 'selected' : '' : '' ?>> Incorporação </option>
								<option value='Encerramento' <?= isset($response['data'][0]['0000_IndSitEsp']) ? $response['data'][0]['0000_IndSitEsp'] == 'Encerramento' ? 'selected' : '' : '' ?>> Encerramento </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_NumRecAnterior'>Número Recibo Escrituração Anterior</label>
							<input type='text'  name='0000_NumRecAnterior' id='0000_NumRecAnterior' class='form-control' placeholder='Número Recibo Escrituração Anterior' value='<?= isset($response['data'][0]['0000_NumRecAnterior']) ? $response['data'][0]['0000_NumRecAnterior'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_NumRecAnterior']) ? $response['error']['0000_NumRecAnterior'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_DtIni'>Data Inicial</label>
							<input type='date'  name='0000_DtIni' id='0000_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['0000_DtIni']) ? $response['data'][0]['0000_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_DtIni']) ? $response['error']['0000_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_DtFin'>Data Final</label>
							<input type='date'  name='0000_DtFin' id='0000_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['0000_DtFin']) ? $response['data'][0]['0000_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_DtFin']) ? $response['error']['0000_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_IndNatPj'>Indicador da Natureza</label>
							<select name='0000_IndNatPj' id='0000_IndNatPj' class='custom-select' placeholder='Indicador da Natureza' required disabled>
								<option value=''> Selecione </option>
								<option value='00 – Pessoa jurídica em geral' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '00 – Pessoa jurídica em geral' ? 'selected' : '' : '' ?>> 00 – Pessoa jurídica em geral </option>
								<option value='01 – Sociedade cooperativa' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '01 – Sociedade cooperativa' ? 'selected' : '' : '' ?>> 01 – Sociedade cooperativa </option>
								<option value='02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários' ? 'selected' : '' : '' ?>> 02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários </option>
								<option value='03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva' ? 'selected' : '' : '' ?>> 03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva </option>
								<option value='04 – Sociedade cooperativa participante de SCP como sócia ostensiva' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '04 – Sociedade cooperativa participante de SCP como sócia ostensiva' ? 'selected' : '' : '' ?>> 04 – Sociedade cooperativa participante de SCP como sócia ostensiva </option>
								<option value='05 – Sociedade em Conta de Participação - SCP' <?= isset($response['data'][0]['0000_IndNatPj']) ? $response['data'][0]['0000_IndNatPj'] == '05 – Sociedade em Conta de Participação - SCP' ? 'selected' : '' : '' ?>> 05 – Sociedade em Conta de Participação - SCP </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_IndAtiv'>Indicador Tipo Atividade Preponderante</label>
							<select name='0000_IndAtiv' id='0000_IndAtiv' class='custom-select' placeholder='Indicador Tipo Atividade Preponderante' required disabled>
								<option value=''> Selecione </option>
								<option value='0 – Industrial ou equiparado a industrial' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '0 – Industrial ou equiparado a industrial' ? 'selected' : '' : '' ?>> 0 – Industrial ou equiparado a industrial </option>
								<option value='1 – Prestador de serviços' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '1 – Prestador de serviços' ? 'selected' : '' : '' ?>> 1 – Prestador de serviços </option>
								<option value='2 - Atividade de comércio' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '2 - Atividade de comércio' ? 'selected' : '' : '' ?>> 2 - Atividade de comércio </option>
								<option value='3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998' ? 'selected' : '' : '' ?>> 3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998 </option>
								<option value='4 – Atividade imobiliária' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '4 – Atividade imobiliária' ? 'selected' : '' : '' ?>> 4 – Atividade imobiliária </option>
								<option value='9 – Outros' <?= isset($response['data'][0]['0000_IndAtiv']) ? $response['data'][0]['0000_IndAtiv'] == '9 – Outros' ? 'selected' : '' : '' ?>> 9 – Outros </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0000_PessoaJuridicaId' id='0000_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica'  disabled>
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data'][0]['0000_PessoaJuridicaId']) ? $response['data'][0]['0000_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_PessoaJuridicaId']) ? $response['error']['0000_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Reg0001EFDCId'>Abertura Bloco 0</label>
							<select name='0000_Reg0001EFDCId' id='0000_Reg0001EFDCId' class='custom-select' placeholder='Abertura Bloco 0'  disabled>
								<?= getOptionToSelect('regs0001efdc','0001_Id', '', isset($response['data'][0]['0000_Reg0001EFDCId']) ? $response['data'][0]['0000_Reg0001EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Reg0001EFDCId']) ? $response['error']['0000_Reg0001EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Regs0110EFDCId'>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</label>
							<select name='0000_Regs0110EFDCId' id='0000_Regs0110EFDCId' class='custom-select' placeholder='Regimes de Apuração da Contribuição Social e de Apropriação de Crédito'  disabled>
								<?= getOptionToSelect('regs0110efdc','0110_Id', '', isset($response['data'][0]['0000_Regs0110EFDCId']) ? $response['data'][0]['0000_Regs0110EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Regs0110EFDCId']) ? $response['error']['0000_Regs0110EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref311/'.$parentView.'/'.$IdParent) ?>'">Cancelar</button>
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

