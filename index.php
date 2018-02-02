<br/>
<hr>
<br/>
		<div>
			 <form id="step_1" class="form-step" method="post">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title" >
                                    Preencha seus dados para cadastrar um usuário
                                </div>
                            </div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Nome do Usuário</label>
                                            <input class="form-control" type="text" name="usuario[name]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Endereço</label>
                                            <input class="form-control" type="text" name="usuario[adress]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Numero</label>
                                            <input class="form-control" type="text" name="usuario[number]">
                                        </div>


                                        <div class="col-lg-6">
                                            <label>cep</label>
                                            <input class="form-control" type="text" name="usuario[cep]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Telefone</label>
                                            <input class="form-control" type="text" name="usuario[tel]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Celular</label>
                                            <input class="form-control" type="text" name="usuario[cel]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>email</label>
                                            <input class="form-control" type="email" name="usuario[email]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>login</label>
                                            <input class="form-control" type="text" name="usuario[login]">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Senha</label>
                                            <input class="form-control" type="password" name="usuario[password]">
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

$codigo = '';

$codigo = $_POST['codigo'];
/*
$usuario = $sql -> insert("INSERT INTO cad_usuario(name_usuario, adress_usuario, num_usuario, cep_usuario, tel_usuario, cel_usuario, email_usuario, login_usuario, password_usuario) VALUES (:name, :adress, :num ,:cep, :tel, :cel, :email, :login, :senha)" );

*/
echo json_encode($usuario);

?>