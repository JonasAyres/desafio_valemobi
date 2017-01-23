<div class="container">
    <div class="divPanel page-content">
        <div class="row-fluid">
            <div class="span12" id="divMain">
                <h1>Cadastro de produtos</h1>
                <p>Cadastre seus produtos aqui, preencha todos os campos.</p>
                    <form class="form-inline" name="dados" onSubmit="return dadosCat();" action="<?php echo base_url();?>cadastro/cadastroCat" method="POST" />
                        <fieldset><!--Formulário para o cadastro de nova categoria-->
                        <label for="nome">Nome da nova Categoria:</label>
                        <input type="text" name="nome" placeholder="Ex: Sucos" /></br></br>
                        <input type="submit" value="Cadastrar">
                        </fieldset>
                    </form>
                </br></br></br></br>
            </div>
        </div>
    </div>
</div>

