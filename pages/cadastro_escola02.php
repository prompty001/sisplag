<?php
var_dump($_GET);
?>

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
        require_once('../config/conexao.php');

        if(isset($_POST['enviar'])){

            $id_inst = $_POST['id_inst'];
            $id_sigla = $_POST['id_sigla'];
            $id_distrito = $_POST['id_distrito'];
            $nome_escola = $_POST['nome_escola'];
            $fundacao = $_POST['fundacao'];
            $codigo_inep = $_POST['codigo_inep'];
            $cnpj_escola = $_POST['cnpj_escola'];
            $entidade_mantenedora = $_POST['entidade_mantenedora'];
            $cnpj_conselho = $_POST['cnpj_conselho'];
            $vigencia_ce = $_POST['vigencia_ce'];
            $vigencia_ce = $_POST['vigencia_ce'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $complemento = $_POST['complemento'];
            $bairro = $_POST['bairro'];
            $cep_escola = $_POST['cep_escola'];
            $telefone_inst = $_POST['telefone_inst'];
            $email_inst = $_POST['email_inst'];
            $nome_gestor = $_POST['nome_gestor'];
            $whats_gestor = $_POST['whats_gestor'];
            $email_secretario = $_POST['email_secretario'];
            $nome_coordenador = $_POST['nome_coordenador'];
            $whats_coordenador = $_POST['whats_coordenador'];
            $email_coordenador = $_POST['email_coordenador'];
        }

    ?>


<div class="formTechnicalData">
            <hr>
            <h3>Dados Técnicos</h3>
            <hr>

            <form class="formTechnicalDataInput" action="../index.php" method="get">
                
                <p>Celebra Convênio com a Semec</p>
                <input type="radio" name="radioPact" value="Não" onclick="handleClickPact(this)">
                <label for="Não">Não</label>
                <input type="radio" name="radioPact" value="Sim" onclick="handleClickPact(this)">
                <label for="Sim">Sim</label><br>
                
                <div class="areaPact" style="display: none;">
                    <input type="text" class="allInput noPact" value="convenio_semec" name="noPact" placeholder="Nº do Convênio">
                    <input type="text" class="allInput objPact" value="objeto" name="objPact" placeholder="Objeto"><br>
                    <input type="text" class="allInput validityPact" value="vigencia" name="validityPact" placeholder="Vigência">
                </div>  

                <p>Etapa(s)/Modalidade(s) da Educação Básica Ofertada</p>
                <p style="font-size: 18px;margin-left: 26px;">Educação Infantil</p>
                <div class="childEducation">
                    <input type="checkbox" name="nursery" value="nursery">
                    <label for="nursery">Creche</label>
                      <input type="checkbox" name="preSchool" value="preSchool">
                    <label for="preSchool">Pré-Escola</label>
                </div>

                <p style="font-size: 18px;margin-left: 26px;">Educação Fundamental</p>
                <div class="basicEducation">
                    <input type="checkbox" name="cycleOne" value="cycleOne">
                    <label for="cycleOne">CF I (1º, 2º e 3º ano)</label>
                      <input type="checkbox" name="cycleTwo" value="cycleTwp">
                    <label for="cycleTwo">CF II (4º e 5º ano)</label>
                      <input type="checkbox" name="cycleThree" value="cycleThree">
                    <label for="cycleThree">CF III (6º e 7º ano)</label>
                      <input type="checkbox" name="cycleFour" value="cycleFour">
                    <label for="cycleFour">CF IV (8º e 9º ano)</label>
                </div>

                <P style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educação de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</P>
                <div class="basicEducationTwo">
                    <input type="checkbox" name="totalityOne" value="totalityOne">
                    <label for="totalityOne">1ª Totalidade - CF I (1º, 2º e 3º ano)</label>
                      <input type="checkbox" name="totalityTwo" value="totalityTwo">
                    <label for="totalityTwo">2ª Totalidade - CF II (4º e 5º ano)</label><br>
                    <input type="checkbox" name="totalityThree" value="totalityThree">
                    <label for="totalityThree">3ª Totalidade - CF III (6º e 7º ano)</label>
                      <input type="checkbox" name="totalityFour" value="totalityFour">
                    <label for="totalityFour">4ª Totalidade - CF IV (8º e 9º ano)</label><br>
                    <input type="checkbox" name="othersLevels" value="othersLevels">
                    <label for="othersLevels">Outros níveis e/ou Modalidades de Ensino Ofertadas</label>
                </div>

            </form>
        </div>

        <div class="formBranchData">
            <hr>
            <h3>Filiais</h3>
            <hr>

            <p>Possui Filiais</p>
            <input type="radio" name="radioBranch" value="no" onclick="handleClickBranch(this)">
            <label for="branch">Não</label>
              <input type="radio" name="radioBranch" value="yes" onclick="handleClickBranch(this)">
            <label for="branch">Sim</label><br>
            
            <form class="formBranchDataInput" action="../index.php" method="get">

                <div class="allBranches" style="display: none">
                    <div class="branchOne">
                        <hr>
                        <p style="text-align: center; text-transform: uppercase;">Filial 01</p>

                        <select class="allInput selectInitialsBranch" name="initials">
                            <option value="sigla">&ltSIGLA/TIPO&gt</SIGLA></option>
                            <option value="emeif">EMEIF</option>
                            <option value="emef">EMEF</option>
                            <option value="emei">EMEI</option>
                            <option value="uei">UEI</option>
                            <option value="private">PRIVADA</option>
                        </select><br>

                        <input type="text" class="allInput instNameBranch" name="instName" placeholder="Nome Institucional">
                        <input type="text" class="allInput foundationBranch" name="fundacao" placeholder="Fundação">
                        <input type="text" class="allInput inepCodeBranch" name="inepCodeBranch" placeholder="Código INEP">
                        <input type="text" class="allInput addressBranch" name="addressBranch" placeholder="Endereço"><br>
                        <input type="text" class="allInput cepBranch" name="cepBranch" placeholder="CEP">
                        <input type="text" class="allInput phoneBranch" name="phoneBranch" placeholder="Telefone">
                        <input type="text" class="allInput instEmailBranch" name="instEmailBranch" placeholder="Email Institucional">
                        <input type="text" class="allInput legalResponsible" name="legalResponsible" placeholder="Responsável Legal"><br>
                        <input type="text" class="allInput emailLegalResponsible" name="emailLegalResponsible" placeholder="Email Responsável Legal">

                        <p>Etapa(s)/Modalidade(s) da Educação Básica Ofertada</p>
                        <p style="font-size: 18px;margin-left: 26px;">Educação Infantil</p>
                        <div class="childEducationBranch">
                            <input type="checkbox" name="nurseryBranch" value="nurseryBranch">
                            <label for="nurseryBranch">Creche</label>
                              <input type="checkbox" name="preSchoolBranch" value="preSchoolBranch">
                            <label for="preSchoolBranch">Pré-Escola</label>
                        </div>

                        <p style="font-size: 18px;margin-left: 26px;">Educação Fundamental</p>
                        <div class="basicEducationBranch">
                            <input type="checkbox" name="cycleOneBranch" value="cycleOneBranch">
                            <label for="cycleOneBranch">CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="cycleTwoBranch" value="cycleTwpBranch">
                            <label for="cycleTwoBranch">CF II (4º e 5º ano)</label>
                              <input type="checkbox" name="cycleThreeBranch" value="cycleThreeBranch">
                            <label for="cycleThreeBranch">CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="cycleFourBranch" value="cycleFourBranch">
                            <label for="cycleFourBranch">CF IV (8º e 9º ano)</label>
                        </div>

                        <p style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educação de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</p  >
                        <div class="basicEducationBranchTwo">
                            <input type="checkbox" name="totalityOneBranch" value="totalityOneBranch">
                            <label for="totalityOneBranch">1ª Totalidade - CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="totalityTwoBranch" value="totalityTwoBranch">
                            <label for="totalityTwoBranch">2ª Totalidade - CF II (4º e 5º ano)</label><br>
                            <input type="checkbox" name="totalityThreeBranch" value="totalityThreeBranch">
                            <label for="totalityThreeBranch">3ª Totalidade - CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="totalityFourBranch" value="totalityFourBranch">
                            <label for="totalityFourBranch">4ª Totalidade - CF IV (8º e 9º ano)</label><br>
                            <input type="checkbox" name="othersLevelsBranch" value="othersLevelsBranch">
                            <label for="othersLevelsBranch">Outros níveis e/ou Modalidades de Ensino Ofertadas</label>
                        </div>
                    </div>

                    <div class="branchTwo">
                        <hr>
                        <p style="text-align: center; text-transform: uppercase;">Filial 02</p>

                        <select class="allInput selectInitialsBranchTwo" name="initialsTwo">
                            <option value="siglaTwo">&ltSIGLA/TIPO&gt</SIGLA></option>
                            <option value="emeifTwo">EMEIF</option>
                            <option value="emefTwo">EMEF</option>
                            <option value="emeiTwo">EMEI</option>
                            <option value="ueiTwo">UEI</option>
                            <option value="privateTwo">PRIVADA</option>
                        </select><br>

                        <input type="text" class="allInput instNameBranchTwo" name="instNameTwo" placeholder="Nome Institucional">
                        <input type="text" class="allInput foundationBranchTwo" name="fundacaoTwo" placeholder="Fundação">
                        <input type="text" class="allInput inepCodeBranchTwo" name="inepCodeBranchTwo" placeholder="Código INEP">
                        <input type="text" class="allInput addressBranchTwo" name="addressBranchTwo" placeholder="Endereço"><br>
                        <input type="text" class="allInput cepBranchTwo" name="cepBranchTwo" placeholder="CEP">
                        <input type="text" class="allInput phoneBranchTwo" name="phoneBranchTwo" placeholder="Telefone">
                        <input type="text" class="allInput instEmailBranchTwo" name="instEmailBranchTwo" placeholder="Email Institucional">
                        <input type="text" class="allInput legalResponsibleTwo" name="legalResponsibleTwo" placeholder="Responsável Legal"><br>
                        <input type="text" class="allInput emailLegalResponsibleTwo" name="emailLegalResponsibleTwo" placeholder="Email Responsável Legal">

                        <p>Etapa(s)/Modalidade(s) da Educação Básica Ofertada</p>
                        <p style="font-size: 18px;margin-left: 26px;">Educação Infantil</p>
                        <div class="childEducationBranchTwo">
                            <input type="checkbox" name="nurseryBranchTwo" value="nurseryBranchTwo">
                            <label for="nurseryBranchTwo">Creche</label>
                              <input type="checkbox" name="preSchoolBranchTwo" value="preSchoolBranchTwo">
                            <label for="preSchoolBranchTwo">Pré-Escola</label>
                        </div>

                        <p style="font-size: 18px;margin-left: 26px;">Educação Fundamental</p>
                        <div class="basicEducationBranchTwo">
                            <input type="checkbox" name="cycleOneBranchTwo" value="cycleOneBranchTwo">
                            <label for="cycleOneBranch">CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="cycleTwoBranchTwo" value="cycleTwpBranchTwo">
                            <label for="cycleTwoBranchTwo">CF II (4º e 5º ano)</label>
                              <input type="checkbox" name="cycleThreeBranchTwo" value="cycleThreeBranchTwo">
                            <label for="cycleThreeBranchTwo">CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="cycleFourBranchTwo" value="cycleFourBranchTwo">
                            <label for="cycleFourBranchTwo">CF IV (8º e 9º ano)</label>
                        </div>

                        <p style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educação de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</p  >
                        <div class="basicEducationTwo">
                            <input type="checkbox" name="totalityOneBranchTwo" value="totalityOneBranchTwo">
                            <label for="totalityOneBranchTwo">1ª Totalidade - CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="totalityTwoBranchTwo" value="totalityTwoBranchTwo">
                            <label for="totalityTwoBranchTwo">2ª Totalidade - CF II (4º e 5º ano)</label><br>
                            <input type="checkbox" name="totalityThreeBranchTwo" value="totalityThreeBranchTwo">
                            <label for="totalityThreeBranchTwo">3ª Totalidade - CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="totalityFourBranchTwo" value="totalityFourBranchTwo">
                            <label for="totalityFourBranchTwo">4ª Totalidade - CF IV (8º e 9º ano)</label><br>
                            <input type="checkbox" name="othersLevelsBranchTwo" value="othersLevelsBranchTwo">
                            <label for="othersLevelsBranchTwo">Outros níveis e/ou Modalidades de Ensino Ofertadas</label>
                        </div>
                    </div>


                    <div class="branchThree">
                        <hr>
                        <p style="text-align: center; text-transform: uppercase;">Filial 03</p>

                        <select class="allInput selectInitialsBranchThree" name="initialsThree">
                            <option value="siglaThree">&ltSIGLA/TIPO&gt</SIGLA></option>
                            <option value="emeifThree">EMEIF</option>
                            <option value="emefThree">EMEF</option>
                            <option value="emeiThree">EMEI</option>
                            <option value="ueiThree">UEI</option>
                            <option value="privateThree">PRIVADA</option>
                        </select><br>

                        <input type="text" class="allInput instNameBranchThree" name="instNameThree" placeholder="Nome Institucional">
                        <input type="text" class="allInput foundationBranchThree" name="fundacaoThree" placeholder="Fundação">
                        <input type="text" class="allInput inepCodeBranchThree" name="inepCodeBranchThree" placeholder="Código INEP">
                        <input type="text" class="allInput addressBranchThree" name="addressBranchThree" placeholder="Endereço"><br>
                        <input type="text" class="allInput cepBranchThree" name="cepBranchThree" placeholder="CEP">
                        <input type="text" class="allInput phoneBranchThree" name="phoneBranchThree" placeholder="Telefone">
                        <input type="text" class="allInput instEmailBranchThree" name="instEmailBranchThree" placeholder="Email Institucional">
                        <input type="text" class="allInput legalResponsibleThree" name="legalResponsibleThree" placeholder="Responsável Legal"><br>
                        <input type="text" class="allInput emailLegalResponsibleThree" name="emailLegalResponsibleThree" placeholder="Email Responsável Legal">

                        <p>Etapa(s)/Modalidade(s) da Educação Básica Ofertada</p>
                        <p style="font-size: 18px;margin-left: 26px;">Educação Infantil</p>
                        <div class="childEducationBranchThree">
                            <input type="checkbox" name="nurseryBranchThree" value="nurseryBranchThree">
                            <label for="nurseryBranchThree">Creche</label>
                              <input type="checkbox" name="preSchoolBranchThree" value="preSchoolBranchThree">
                            <label for="preSchoolBranchThree">Pré-Escola</label>
                        </div>

                        <p style="font-size: 18px;margin-left: 26px;">Educação Fundamental</p>
                        <div class="basicEducationBranchThree">
                            <input type="checkbox" name="cycleOneBranchThree" value="cycleOneBranchThree">
                            <label for="cycleOneBranchThree">CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="cycleTwoBranchThree" value="cycleTwpBranchThree">
                            <label for="cycleTwoBranchThree">CF II (4º e 5º ano)</label>
                              <input type="checkbox" name="cycleThreeBranchThree" value="cycleThreeBranchThree">
                            <label for="cycleThreeBranchThree">CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="cycleFourBranchThree" value="cycleFourBranchThree">
                            <label for="cycleFourBranchThree">CF IV (8º e 9º ano)</label>
                        </div>

                        <p style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educação de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</p  >
                        <div class="basicEducationBranchTwo">
                            <input type="checkbox" name="totalityOneBranchThree" value="totalityOneBranchThree">
                            <label for="totalityOneBranchThree">1ª Totalidade - CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="totalityTwoBranchThree" value="totalityTwoBranchThree">
                            <label for="totalityTwoBranchThree">2ª Totalidade - CF II (4º e 5º ano)</label><br>
                            <input type="checkbox" name="totalityThreeBranchThree" value="totalityThreeBranchThree">
                            <label for="totalityThreeBranchThree">3ª Totalidade - CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="totalityFourBranchThree" value="totalityFourBranchThree">
                            <label for="totalityFourBranchThree">4ª Totalidade - CF IV (8º e 9º ano)</label><br>
                            <input type="checkbox" name="othersLevelsBranchThree" value="othersLevelsBranchThree">
                            <label for="othersLevelsBranchThree">Outros níveis e/ou Modalidades de Ensino Ofertadas</label>
                        </div>
                    </div>

                    <div class="branchFour">
                        <hr>
                        <p style="text-align: center; text-transform: uppercase;">Filial 04</p>

                        <select class="allInput selectInitialsBranchFour" name="initialsFour">
                            <option value="siglaFour">&ltSIGLA/TIPO&gt</SIGLA></option>
                            <option value="emeifFour">EMEIF</option>
                            <option value="emefFour">EMEF</option>
                            <option value="emeiFour">EMEI</option>
                            <option value="ueiFour">UEI</option>
                            <option value="privateFour">PRIVADA</option>
                        </select><br>

                        <input type="text" class="allInput instNameBranchFour" name="instNameFour" placeholder="Nome Institucional">
                        <input type="text" class="allInput foundationBranchFour" name="fundacaoFour" placeholder="Fundação">
                        <input type="text" class="allInput inepCodeBranchFour" name="inepCodeBranchFour" placeholder="Código INEP">
                        <input type="text" class="allInput addressBranchFour" name="addressBranchFour" placeholder="Endereço"><br>
                        <input type="text" class="allInput cepBranchFour" name="cepBranchFour" placeholder="CEP">
                        <input type="text" class="allInput phoneBranchFour" name="phoneBranchFour" placeholder="Telefone">
                        <input type="text" class="allInput instEmailBranchFour" name="instEmailBranchFour" placeholder="Email Institucional">
                        <input type="text" class="allInput legalResponsibleFour" name="legalResponsibleFour" placeholder="Responsável Legal"><br>
                        <input type="text" class="allInput emailLegalResponsibleFour" name="emailLegalResponsibleFour" placeholder="Email Responsável Legal">

                        <p>Etapa(s)/Modalidade(s) da Educação Básica Ofertada</p>
                        <p style="font-size: 18px;margin-left: 26px;">Educação Infantil</p>
                        <div class="childEducationBranchFour">
                            <input type="checkbox" name="nurseryBranchFour" value="nurseryBranchFour">
                            <label for="nurseryBranchFour">Creche</label>
                              <input type="checkbox" name="preSchoolBranchFour" value="preSchoolBranchFour">
                            <label for="preSchoolBranchFour">Pré-Escola</label>
                        </div>

                        <p style="font-size: 18px;margin-left: 26px;">Educação Fundamental</p>
                        <div class="basicEducationBranchFour">
                            <input type="checkbox" name="cycleOneBranchFour" value="cycleOneBranchFour">
                            <label for="cycleOneBranchFour">CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="cycleTwoBranchFour" value="cycleTwpBranchFour">
                            <label for="cycleTwoBranchFour">CF II (4º e 5º ano)</label>
                              <input type="checkbox" name="cycleThreeBranchFour" value="cycleThreeBranchFour">
                            <label for="cycleThreeBranchFour">CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="cycleFourBranchFour" value="cycleFourBranchFour">
                            <label for="cycleFourBranchFour">CF IV (8º e 9º ano)</label>
                        </div>

                        <p style="font-size: 18px; margin-left: 26px;">Ensino Fundamental - Educação de Jovens, Adultos e Idosos (Totalidades do Conhecimento) - Anos Iniciais e Finais</p  >
                        <div class="basicEducationBranchTwo">
                            <input type="checkbox" name="totalityOneBranchFour" value="totalityOneBranchFour">
                            <label for="totalityOneBranchFour">1ª Totalidade - CF I (1º, 2º e 3º ano)</label>
                              <input type="checkbox" name="totalityTwoBranchFour" value="totalityTwoBranchFour">
                            <label for="totalityTwoBranchFour">2ª Totalidade - CF II (4º e 5º ano)</label><br>
                            <input type="checkbox" name="totalityThreeBranchFour" value="totalityThreeBranchFour">
                            <label for="totalityThreeBranchFour">3ª Totalidade - CF III (6º e 7º ano)</label>
                              <input type="checkbox" name="totalityFourBranchFour" value="totalityFourBranchFour">
                            <label for="totalityFourBranchFour">4ª Totalidade - CF IV (8º e 9º ano)</label><br>
                            <input type="checkbox" name="othersLevelsBranchFour" value="othersLevelsBranchFour">
                            <label for="othersLevelsBranchFour">Outros níveis e/ou Modalidades de Ensino Ofertadas</label>
                        </div>
                    </div>

                </div>

                <br>
                <button class="sendData" type="submit">Enviar</button>

            </form>

        </div>
    </div>

    </body>

    </html>
