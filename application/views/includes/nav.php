<div id="decorative2">
    <div class="container">
        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">
                    <div id="divLogo" class="pull-left"><!--Apresentação com o nome da aplicação-->
                        <a href="<?php echo base_url();?>" id="divSiteTitle">Valemobi Produtos</a><br />
                        <a href="<?php echo base_url();?>" id="divTagLine">Encontre aqui seus Produtos</a>
                    </div>
                    <div id="divMenuRight" class="pull-right">
                        <div class="navbar">
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                                Menu <span class="icon-chevron-down icon-white"></span>
                            </button><!--Botão para seleção do menu-->
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu"><!--Menu da aplicação-->
                                <li class="dropdown"><a href="<?php echo base_url();?>">Inicio</a></li>
                                <li class="dropdown">
                                    <a href="<?php echo base_url();?>cadastro" class="dropdown-toggle">Cadastro de Produtos &nbsp;&raquo;</a>
                                    <ul class="dropdown-menu sub-menu"><!--Menu em DropDown-->
                                    <li><a href="<?php echo base_url();?>cadastro">Cadastro de Produtos</a></li>
                                    <li><a href="<?php echo base_url();?>cadastro/categoria">Cadastro de Categoria</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="<?php echo base_url();?>lista">Lista de Produtos</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>