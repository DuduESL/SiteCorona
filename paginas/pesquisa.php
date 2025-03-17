<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Pesquisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stilo.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.ico">
    <link rel="stylesheet" type="text/css" href="css/corpo.css">
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
  </head>
  
<body>
      <header>
        <video id="background" autoplay muted loop src="videos/4080f50d6833b7a99279c7aa14fd3148.720.mp4"></video>
      </header>
  <div id="cabecalho">
          <h1>Pesquisa de monitoramento dos profissionais de saúde</h1>
          <br>
          <p><h4>Prezado profissional de saúde, ajude a traçar o mapa da Covid-19 e monitorar os casos em nosso Estado. Preencha esse formulário informando se você <br>já teve sintomas ou foi diagnosticado com a doença.</h4></p> 
          <section>
               <article>
                    <form action="recebePesquisa.php" method="post">
                        <fieldset>
                            <fieldset class="bloco">
				                        <div class="dados">
					                        <label>Sexo:</label>
				                          <input type="radio" name="sexo" value="M">Masculino
						                      <input type="radio" name="sexo" value="F">Feminino
				                        </div>
				                    </fieldset>                          
                            <fieldset class="bloco">
				                        <div class="dados">
					                        <label>Faixa etária:</label>
                                  <input type="radio" name="idade" value="20-29">20 a 29 anos<br>
                                  <input type="radio" name="idade" value="30-39">30 a 39 anos<br>
                                  <input type="radio" name="idade" value="40-49">40 a 49 anos<br>
                                  <input type="radio" name="idade" value="50-60">50 a 59 anos<br>
                                  <input type="radio" name="idade" value="61-100">acima de 60 anos                                  
				                        </div>
                            </fieldset>
                            <fieldset class="bloco">
				                        <div class="dados">
					                        <label>Bairro:</label>
				                          <input type="text" name="bairro" required>
				                        </div>
				                    </fieldset>
                            <fieldset class="bloco">
				                        <div class="dados">
					                        <label>Grau de instrução</label>
                                  <input type="radio" name="instrucao" value="Medio">Médio<br>
                                  <input type="radio" name="instrucao" value="Superior">Superior<br>
                                  <input type="radio" name="instrucao" value="PosGraduacao">Pós graduado<br>
                                  <input type="radio" name="instrucao" value="Mestrado">Mestrado<br>
                                  <input type="radio" name="instrucao" value="Doutorado">Doutorado
				                        </div>
                            </fieldset>
                            <fieldset class="bloco">
                              <div class="dados">
                                <label>Tipo de profissional</label>
                                <input type="radio" name="profissao" value="Farmaceutico">Farmacêutico(a)<br>
                                <input type="radio" name="profissao" value="Enfermagem">Enfermeiro(a)<br>
                                <input type="radio" name="profissao" value="PosGraduacao">Médico(a)
                              </div>
                           </fieldset>
                           <fieldset class="bloco">
                              <div class="dados">
                                <label>Possui doença crônica</label>    
                                <input type="radio" name="doenca" value="sim">Sim<br>
                                <input type="radio" name="doenca" value="não">Não
                              </div>
                            </fieldset>
                            <fieldset class="bloco">
                              <div class="dados">
                                <label>Se você respondeu SIM, à pergunta anterior, escolha qual a doença</label>
                                <input type="checkbox" name="tipodoenca1" value="diabetes">Diabetes<br>
                                <input type="checkbox" name="tipodoenca2"value="hipertenção">Hipertenção<br>
                                <input type="checkbox" name="tipodoenca3" value="asma">Asma<br>
                                <input type="checkbox" name="tipodoenca4" value="outros">Outros
                              </div>
                          </fieldset>
                          <fieldset class="bloco">
                            <div class="dados">
                              <label>Executa atividades em estabelecimento</label>    
                              <input type="radio" name="estabelecimento" value="publico">Público<br>
                              <input type="radio" name="estabelecimento" value="privado">Privado
                            </div>
                          </fieldset>
                          <fieldset class="bloco">
                            <div class="dados">
                              <label>Tipo de estabelecimento onde exerce suas atividades</label>
                              <input type="radio" name="tipoest" value="farmacias">Farmácias<br>
                              <input type="radio" name="tipoest" value="clinicas">Clínicas<br>
                              <input type="radio" name="tipoest" value="hospitais">Hospitais
                            </div>
                         </fieldset>
                         <fieldset class="bloco">
                          <div class="dados">
                            <label>O estabelecimento forneceu EPIs adequados?</label>    
                            <input type="radio" name="epis" value="sim">Sim<br>
                            <input type="radio" name="epis" value="não">Não
                          </div>
                        </fieldset>
                        <fieldset class="bloco">
                          <div class="dados">
                            <label>Você já apresentou sintomas da Covid-19? (Os mais comuns: TOSSE; FEBRE;<br> CORIZA; DOR DE GARGANTA; DIFICULDADE PARA RESPIRAR)</label>    
                            <input type="radio" name="sintomas" value="sim">Sim<br>
                            <input type="radio" name="sintomas" value="não">Não
                          </div>
                        </fieldset>
                        <fieldset class="bloco">
                          <div class="dados">
                            <label>Se você respondeu SIM, à pergunta anterior, informe a data do início dos<br> sintomas:</label>  
                            <input type="date" name="data1">
                          </div>
                        </fieldset>
                        <fieldset class="bloco">
                          <div class="dados">
                            <label>Você já realizou o teste para a Covid-19? </label>    
                            <input type="radio" name="teste" value="sim">Sim<br>
                            <input type="radio" name="teste" value="não">Não
                          </div>
                        </fieldset>
                        <fieldset class="bloco">
                          <div class="dados">
                            <label>Se você respondeu SIM, à pergunta anterior, informe a data da realização:</label>  
                            <input type="date" name="data2">
                          </div>
                        </fieldset>
                        <fieldset class="bloco">
                          <div class="dados">
                            <label>Qual tipo de teste realizado?</label>
                            <input type="radio" name="tipotest" value="rapido">Teste Rápido (Imunocromatografia - IgM e IgG)<br>
                            <input type="radio" name="tipotest" value="sorologia">Sorologia (Quimioluminescência - IgM e IgG)<br>
                            <input type="radio" name="tipotest" value="molecular">Teste RT-PCR (Teste Molecular)<br>
                            <input type="radio" name="tipotest" value="naoseaplica">Não se aplica
                          </div>
                      </fieldset>
                      <fieldset class="bloco">
                        <div class="dados">
                          <label>Resultado do teste</label>
                          <input type="radio" name="resultado" value="positivo">Positivo<br>
                          <input type="radio" name="resultado" value="negativo">Negativo<br>
                          <input type="radio" name="resultado" value="naoseaplica">Não se aplica
                        </div>
                     </fieldset>
                            <fieldset>
				                          <button type="submit" name="finalizar" class="botao">Finalizar pesquisa</button>
				                    </fieldset>
                        </fieldset>
                    </form>
              </article>
         </section>
  </div> 
</body>
</html>