<!-- Footer ou rodapé, temos a parte final da aplicação com algumas informações e o carregamento de algumas bibliotecas 
javascript para animações, que podem ser carregadas também no inicio da aplicação porem caso exista algum erro a pagina 
não e construida caso esteja sendo carregadas as animações no inicio da aplicação-->
<div id="footerInnerSeparator"></div>
</div>
</div>
<div id="divFooter" class="footerArea">
    <div class="container">
        <div class="divPanel">
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright© 2017 Jonas Ayres. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>public/css/scripts/jquery.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url();?>public/css/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/css/scripts/default.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/css/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>
</body>
</html>