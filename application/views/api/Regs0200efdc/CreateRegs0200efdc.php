
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
                    <a href='<?= base_url('Regs0200efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Identificação do Item (Produtos e Serviços) </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0200efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0200_Reg'>Registro</label>
							<input type='text' name='0200_Reg' id='0200_Reg' class='form-control' placeholder='Registro' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg']) ? $response['error']['0200_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodItem'>Código do Item</label>
							<input type='text' name='0200_CodItem' id='0200_CodItem' class='form-control' placeholder='Código do Item' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodItem']) ? $response['error']['0200_CodItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DescricaoItem'>Descrição</label>
							<input type='text' name='0200_DescricaoItem' id='0200_DescricaoItem' class='form-control' placeholder='Descrição' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DescricaoItem']) ? $response['error']['0200_DescricaoItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodBarra'>Código de Barra</label>
							<input type='text' name='0200_CodBarra' id='0200_CodBarra' class='form-control' placeholder='Código de Barra' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodBarra']) ? $response['error']['0200_CodBarra'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodAntItem'>Código Anterior do Item</label>
							<input type='text' name='0200_CodAntItem' id='0200_CodAntItem' class='form-control' placeholder='Código Anterior do Item' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodAntItem']) ? $response['error']['0200_CodAntItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0190EFDCId'>Unidades de Medida</label>
							<input type='number' name='0200_Reg0190EFDCId' id='0200_Reg0190EFDCId' class='form-control' placeholder='Unidades de Medida' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0190EFDCId']) ? $response['error']['0200_Reg0190EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_TipoItem'>Tipo do item</label>
							<select name='0200_TipoItem' id='0200_TipoItem' class='custom-select' placeholder='Tipo do item' required>
								<option value=''> Selecione </option>
								<option value='00 – Mercadoria para Revenda'> 00 – Mercadoria para Revenda </option>
								<option value='01 – Matéria-Prima'> 01 – Matéria-Prima </option>
								<option value='02 – Embalagem'> 02 – Embalagem </option>
								<option value='03 – Produto em Processo'> 03 – Produto em Processo </option>
								<option value='04 – Produto Acabado'> 04 – Produto Acabado </option>
								<option value='05 – Subproduto'> 05 – Subproduto </option>
								<option value='06 – Produto Intermediário'> 06 – Produto Intermediário </option>
								<option value='07 – Material de Uso e Consumo'> 07 – Material de Uso e Consumo </option>
								<option value='08 – Ativo Imobilizado'> 08 – Ativo Imobilizado </option>
								<option value='09 – Serviços'> 09 – Serviços </option>
								<option value='10 – Outros insumos'> 10 – Outros insumos </option>
								<option value='99 – Outras'> 99 – Outras </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0200_CodNcm'>NCM</label>
							<input type='text' name='0200_CodNcm' id='0200_CodNcm' class='form-control' placeholder='NCM' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodNcm']) ? $response['error']['0200_CodNcm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_ExIpi'>Código EX TIPI</label>
							<input type='text' name='0200_ExIpi' id='0200_ExIpi' class='form-control' placeholder='Código EX TIPI' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_ExIpi']) ? $response['error']['0200_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodGen'>Código Gênero Item</label>
							<input type='number' name='0200_CodGen' id='0200_CodGen' class='form-control' placeholder='Código Gênero Item' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodGen']) ? $response['error']['0200_CodGen'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodLst'>Código do Serviço</label>
							<input type='number' name='0200_CodLst' id='0200_CodLst' class='form-control' placeholder='Código do Serviço' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodLst']) ? $response['error']['0200_CodLst'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_AliqIcms'>Alíquota de ICMS</label>
							<input type='' name='0200_AliqIcms' id='0200_AliqIcms' class='form-control' placeholder='Alíquota de ICMS' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_AliqIcms']) ? $response['error']['0200_AliqIcms'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DtIni'>Data Inicial</label>
							<input type='date' name='0200_DtIni' id='0200_DtIni' class='form-control' placeholder='Data Inicial' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DtIni']) ? $response['error']['0200_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DtFin'>Data Final</label>
							<input type='date' name='0200_DtFin' id='0200_DtFin' class='form-control' placeholder='Data Final' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DtFin']) ? $response['error']['0200_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0200_PessoaJuridicaId' id='0200_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_PessoaJuridicaId']) ? $response['error']['0200_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_UsersId'>Usuário</label>
							<input type='number' name='0200_UsersId' id='0200_UsersId' class='form-control' placeholder='Usuário' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_UsersId']) ? $response['error']['0200_UsersId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0205EFDCId'>Alteração do Item</label>
							<input type='number' name='0200_Reg0205EFDCId' id='0200_Reg0205EFDCId' class='form-control' placeholder='Alteração do Item' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0205EFDCId']) ? $response['error']['0200_Reg0205EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0206EFDCId'>Código de Produto Conforme Tabela ANP</label>
							<input type='number' name='0200_Reg0206EFDCId' id='0200_Reg0206EFDCId' class='form-control' placeholder='Código de Produto Conforme Tabela ANP' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0206EFDCId']) ? $response['error']['0200_Reg0206EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg020EFDCId'>Código de Grupos por Marca Comercial</label>
							<input type='number' name='0200_Reg020EFDCId' id='0200_Reg020EFDCId' class='form-control' placeholder='Código de Grupos por Marca Comercial' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg020EFDCId']) ? $response['error']['0200_Reg020EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0200efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0200efdc/create'); ?>';
  var url_upd = '<?= base_url('regs0200efdc/edit'); ?>';
</script>
