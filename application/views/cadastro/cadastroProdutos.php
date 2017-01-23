<div class="container">
    <div class="divPanel page-content">
        <div class="row-fluid">
            <div class="span12" id="divMain">
                <h1>Cadastro de produtos</h1>
                <p>Cadastre seus produtos aqui, preencha todos os campos.</p>
                
                    <form class="form-inline" name="dados" onSubmit="return enviardados();" action="<?php echo base_url();?>cadastro/cadastrar" method="POST" />
                        <fieldset><!--Formulário para o cadastro de produtos.-->
                        <label for="nome">Código do Produto:</label>
                        <input type="number" name="codigo" placeholder="Ex: 123" pattern="[0-9]+" /></br></br>
                        <label for="nome">Nome do Produto:</label>
                        <input type="text" name="nome" placeholder="Ex: Produto" /></br></br>
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" name="quantidade" placeholder="Ex: 10" pattern="[0-9]+"/></br></br>
                        <label for="preco">Preço:</label>
                        <input type="text" name="preco" placeholder="Ex: 3,99" /></br></br>
                        <label for="tipo_negocio">Tipo de Ação:</label>
                            <select name="tipo_negocio">
                                <option value="compra">Compra</option>
                                <option value="venda">Venda</option>
                            </select></br></br>
                        <label for="categoria_id">Categoria do Produto:</label>
                            <select name="categoria_id">
                                <option value="selecione">Selecione...</option>
                                <?php
                                for($i=0; !empty($categoria[$i]) ;$i++){ //repetição para os dados vindos do controler enquanto existir dados
                                    ?><option value="<?php echo $categoria[$i]->id;?>"><?php echo $categoria[$i]->nome;?></opition>
                                <?php    
                                }
                                ?>
                            </select></br></br>
                        <input type="submit" name="cadastro" value="Cadastrar">
                        </fieldset>
                    </form>
                </br></br></br></br>
            </div>
        </div>
    </div>
</div>

