<?php 
    include_once 'header.php';
    include_once 'src/Dao/cadastro_action.php'
?>

    <!-- DASHBOARD -->

        <div class="content">
            <div class="view">
                <div class="titulo">
                    <i class="uil uil-invoice"></i>
                    <span class="texto">Contrato</span>
                </div>
                
                <div class="boxes">
                    <div class="form-contratos">
                        <form action="contratos.php" method="GET">
                            <div class="contrato-item">
                                <label for="data">Data</label> 
                                <input type="date" id="data" name="data" placeholder="xx/xx/xxx" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="nome">Nome</label> 
                                <input type="text" id="nome" name="nome" placeholder="Nome" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="cnpj">CNPJ</label> 
                                <input type="text" id="cnpj" name="cnpj" placeholder="xx.xxx.xxx/0001-xx" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="telefone">Telefone</label> 
                                <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="contato">Contato</label> 
                                <input type="contato" id="contato" name="contato" placeholder="(xx) xxxxx-xxxx" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="email">E-mail</label> 
                                <input type="email" id="email" name="email" placeholder="E-Mail" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="endereco">Endereço</label> 
                                <input type="text" id="endereco" name="endereco" placeholder="Endereço" required> <br><br>
                            </div>
                            <div class="contrato-item">
                                <label for="cidade">Cidade</label> 
                                <input type="text" id="cidade" name="cidade" placeholder="Cidade" required> <br><br>
                            </div>

                            <input class="btn-salvar" type="submit" name="salvar" value="Salvar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DASHBOARD -->

<?php 
    include_once 'footer.php';
?>