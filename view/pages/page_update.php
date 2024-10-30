<?php
        include_once("header.php");
        include_once("../../model/Conexao.class.php");
        include_once("../../model/Entity.class.php");
        $empEntity = new Entity();
        $id = $_POST["id"];
?>

<div class="container espacoTop"><!-- Corpo do sistema -->
    <h2 class="text-center">Alterar dados: </h2>

    <form method="post" action="../../controler/RegisterCrud/update.php">
        <div class="container">
            <class="form">
                  <?php  foreach($empEntity->getInfo("users",$id) as $emp){ ?>

                    <input type="hidden" name="id" value="<?=$emp['id']?>"/>

                    <!-- Id / nome / Perfil / Senha / Data -->


                    <div class="form-group">
                        <label>Alterar nome:</label>
                        <input type="text" 
                        class="form-control" 
                        name="name" 
                        value="<?=$emp['name']?>"
                        required autofocus/>
                    </div>

                    <div class="form-group">
                        <label>Alterar senha:</label>
                        <input type="text" 
                        class="form-control" 
                        name="password" 
                        value="<?=$emp['password']?>"
                        required autofocus/>
                    </div>

                    <div class="form-group">
                        <label>Alterar perfil:</label>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Digite o novo perfil" 
                        name="profile" 
                        value="<?=$emp['profile']?>"
                        required/>
                    </div>

                    
                    <div class="form-group">
                        <label>Alterar bio:</label>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Digite sua nova bio" 
                        name="bio" 
                        value="<?=$emp['bio']?>"
                        required/>
                    </div>
                  
                  
                    <div class="form-group">
                        <label>Alterar data de cadastro:</label>
                        <input type="date" 
                        class="form-control" 
                        placeholder="Digite a nova data" 
                        name="register_date" 
                        style="width:40% ;"
                        value='<?php 
                            $date = date_create($emp['register_date']);
                            echo date_format($date,'Y-m-d');
                        ?>' 
                        required />
                    </div>

                    <div class="form-group">
                        <label>Alterar balanço:</label>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Digite o novo valor" 
                        name="balance" 
                        value="<?=$emp['balance']?>"
                        required/>
                    </div>


                    <?php } ?>

                    <div class="form-group">
                        <button class="btn btn-outline-primary btn-lg">
                        <i class='fas fa-cloud-upload-alt' style='font-size:24px'></i> Inserir</button>
                        <a href="listagem.php" class="btn btn-outline-primary btn-lg">
                        <i class='fas fa-reply-all' style='font-size:24px'></i> Voltar</a>
                </div>
            </div>
        </div>
    </form>

</div>
<?php
    include_once("footer.php");
?>