<?php /*View default é responsavel por montar a exibição padrão do site*/
require_once("includes/header.php"); /*Requer a view header que é a mesma para toda a aplicação*/
require_once("includes/nav.php"); //Requer a view nav(menus de navegação) que é a mesma para toda a aplicação
require_once("".$pagina.".php"); //Requer a view pagina que de acordo com a navegação sera mudada e também sua apresentação
require_once("includes/footer.php"); //Requer a view footer(rodapé) que é a mesma para toda a aplicação;

