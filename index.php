<br/>
<hr>
<br/>
		<div>
			 <form id="step_1" class="form-step" method="post">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title" >
                                    Preencha seus dados para receber contato
                                </div>
                            </div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Nome Completo</label>
                                            <input class="form-control" type="text" name="cliente[nome]">
                                        </div>


                                    <div>
                                        <button type="submit" class="btn btn-lg btn-info next-step">Próximo Passo</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>
		</div>






<?php 

require_once("config.php");

$sql = new Sql(); 

$pesquisa = [filter_input_array(INPUT_POST)];

$produtos = $sql -> select("SELECT desc_produto, cod_produto FROM cad_produto WHERE id_produto = $pesquisa");

echo json_encode($pesquisa);

?>