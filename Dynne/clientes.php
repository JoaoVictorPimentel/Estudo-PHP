<?php 
    include_once 'header.php';
    include_once 'src/Dao/clientes_action.php'
?>
<!-- DASHBOARD -->
    
        <div class="content">
            <div class="view">
                <div class="titulo">
                    <i class="uil uil-user-plus"></i>
                    <span class="texto">Clientes</span>
                </div>
                
                <div class="boxes">
                    <table>
                        <tr class="title">
                            <td>Id</td>
                            <td>Data</td>
                            <td>Nome</td>
                            <td>CNPJ</td>
                            <td>Telefone</td>
                            <td>Contato</td>
                            <td>Email</td>
                            <td>Endereço</td>
                            <td>Cidade</td>
                            <td>*</td>
                        </tr>
                        <?=$grid?>                       
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DASHBOARD -->

<?php 
    include_once 'footer.php';
?>