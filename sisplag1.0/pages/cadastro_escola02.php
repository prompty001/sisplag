<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro | Sisplag</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Sisplag</h1>
    <h2>CADASTRO DE ESCOLA</h2>

    <?php
        
        require_once('../config/painel.php');


        if(isset($_POST['enviar'])){

            $nome_filial = $_POST['nome_filial'];
            $possuiFilial = $_POST['possuiFilial'];
            $fk_instituicao = $_POST['fk_instituicao'];
            $fk_sigla = $_POST['fk_sigla'];
            $fundacao_filial = $_POST['fundacao_filial'];
            $codigo_inepfilial = $_POST['codigo_inepfilial'];
            $cep_filial = $_POST['cep_filial'];
            $complemento = $_POST['complemento'];            
            $telefone_filial = $_POST['telefone_filial'];
            $email_filial = $_POST['email_filial'];
            $resp_filial = $_POST['resp_filial'];
            $email_respLegal = $_POST['email_respLegal'];

            $educacao_infantil = $_POST['educacao_infantil'];
            $fundamental_filial = $_POST['fundamental_filial'];
            $fundamentaleja_filial = $_POST['fundamentaleja_filial'];
            $outrosniveis_filial = $_POST['outrosniveis_filial'];

            $cadastroEscola = Conexao::conectar()->prepare("INSERT INTO FILIAL (nome_filial, possuiFilial, fk_instituicao,fk_sigla, fundacao_filial, codigo_inepfilial, cep_filial, complemento, telefone_filial, email_filial, resp_filial, email_respLegal, educacao_infantil, fundamental_filial, fundamentaleja_filial, outrosniveis_filial) VALUES ('$nome_filial', '$possuiFilial', '$fk_instituicao', '$fk_sigla', '$fundacao_filial', '$codigo_inepfilial', '$cep_filial', '$complemento', '$telefone_filial', '$email_filial', '$resp_filial', '$email_respLegal', '$educacao_infantil', '$fundamental_filial', '$fundamentaleja_filial', '$outrosniveis_filial')");

            $cadastroEscola->execute();
            
            header("Location: painelAdm.php");

        }

    ?>

    <div class=schoolForm>
       

        <div class="formBranchData">
            <hr>
            <h3>Filiais</h3>
            <hr>

 
            
            <form class="formBranchDataInput" method="POST">

                <p>Possui Filiais</p>
                <input type="radio" name="possuiFilial" value="N??o" onclick="handleClickBranch(this)">
                <label for="branch">N??o</label>
                ?? <input type="radio" name="possuiFilial" value="Sim" onclick="handleClickBranch(this)">
                <label for="branch">Sim</label><br>


                <hr>
                <select class="allInput selectInitialsBranch" name="fk_sigla">
                <option>-Sigla-</SIGLA></option>
                    <!-- Consulta no banco - Siglas--->
                    <?php
                        $consultaSigla = Conexao::conectar()->prepare('SELECT * FROM siglainstituicao');
                        $consultaSigla->execute();
                        $consultaSigla = $consultaSigla->fetchAll();
                        foreach ($consultaSigla as $consultaSigla) {
                        ?>
                            <option value="<?php echo $consultaSigla['id_sigla']; ?>">
                                <?php echo $consultaSigla['sigla']; ?>
                            </option>
                        <?php } ?>
                    ?>
                </select>

                <select class="allInput selectInitialsBranch" name="fk_instituicao">
                <option>-Institui????o-</Institui????o></option>
                    <!-- Consulta no banco - Institui????o--->
                    <?php
                        $consultaInst = Conexao::conectar()->prepare('SELECT * FROM instituicao');
                        $consultaInst->execute();
                        $consultaInst = $consultaInst->fetchAll();
                        foreach ($consultaInst as $consultaInst) {
                        ?>
                            <option value="<?php echo $consultaInst['id_instituicao']; ?>">
                                <?php echo $consultaInst['nome_instituicao']; ?>
                            </option>
                        <?php } ?>
                    ?>
                </select><br>

                <input type="text" class="allInput instNameBranch" name="nome_filial" placeholder="Nome Institucional">
                <input type="text" class="allInput foundationBranch" name="fundacao_filial" placeholder="Funda????o">
                <input type="text" class="allInput inepCodeBranch" name="codigo_inepfilial" placeholder="C??digo INEP">
                <input type="text" class="allInput addressBranch" name="complemento" placeholder="Endere??o"><br>
                <input type="text" class="allInput cepBranch" name="cep_filial" placeholder="CEP">
                <input type="text" class="allInput phoneBranch" name="telefone_filial" placeholder="Telefone">
                <input type="text" class="allInput instEmailBranch" name="email_filial" placeholder="Email Institucional">
                <input type="text" class="allInput legalResponsible" name="resp_filial" placeholder="Respons??vel Legal"><br>
                <input type="text" class="allInput emailLegalResponsible" name="email_respLegal" placeholder="Email Respons??vel Legal">

                <hr>

                <p>Etapa(s)/Modalidade(s) da Educa????o B??sica Ofertada</p>
                <p style="font-size: 18px;margin-left: 26px;">Educa????o Infantil</p>
                <div class="childEducation">
                    <input type="checkbox" name="educacao_infantil" value="Creche">
                    <label for="nursery">Creche</label>
                    ?? <input type="checkbox" name="educacao_infantil" value="Pr??-Escola">
                    <label for="preSchool">Pr??-Escola</label>
                </div>

                <p style="font-size: 18px;margin-left: 26px;">Educa????o Fundamental</p>
                <div class="basicEducation">
                    <input type="checkbox" name="fundamental_filial" value="CF I (1??, 2?? e 3?? ano)">
                    <label for="cycleOne">CF I (1??, 2?? e 3?? ano)</label>
                    ?? <input type="checkbox" name="fundamental_filial" value="CF II (4?? e 5?? ano)">
                    <label for="cycleTwo">CF II (4?? e 5?? ano)</label>
                    ?? <input type="checkbox" name="fundamental_filial" value="CF III (6?? e 7?? ano)">
                    <label for="cycleThree">CF III (6?? e 7?? ano)</label>
                    ?? <input type="checkbox" name="fundamental_filial" value="CF IV (8?? e 9?? ano)">
                    <label for="cycleFour">CF IV (8?? e 9?? ano)</label>
                </div>

                <P style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educa????o de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</P>
                <div class="basicEducationTwo">
                    <input type="checkbox" name="fundamentaleja_filial" value="1?? Totalidade - CF I (1??, 2?? e 3?? ano)">
                    <label for="totalityOne">1?? Totalidade - CF I (1??, 2?? e 3?? ano)</label>
                    ?? <input type="checkbox" name="fundamentaleja_filial" value="2?? Totalidade - CF II (4?? e 5?? ano)">
                    <label for="totalityTwo">2?? Totalidade - CF II (4?? e 5?? ano)</label><br>
                    <input type="checkbox" name="fundamentaleja_filial" value="3?? Totalidade - CF III (6?? e 7?? ano)">
                    <label for="totalityThree">3?? Totalidade - CF III (6?? e 7?? ano)</label>
                    ?? <input type="checkbox" name="fundamentaleja_filial" value="4?? Totalidade - CF IV (8?? e 9?? ano)">
                    <label for="totalityFour">4?? Totalidade - CF IV (8?? e 9?? ano)</label><br>
                </div>    
                <div>
                    <input type="checkbox" name="outrosniveis_filial" value="Outros n??veis e/ou Modalidades de Ensino Ofertadas">
                    <label for="othersLevels">Outros n??veis e/ou Modalidades de Ensino Ofertadas</label>
                </div>
                <br>
                <hr>
 
                <button type="submit" class="btn btn-primary" type="button" name="enviar" >Enviar</button>

                <br>
                <hr>
            </form>

        </div>
    </div>

    <script src="../js/cadastro_escola.js"></script>
</body>
</html>