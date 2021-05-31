<?php include '_topo.php' ?>

    <section id="conteudo">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="center-usuario">
                <img src="img/joan.jpg">
                <h1>Analise de Desempenho<span>Observações</span></h1>
              </div>
            </div>
          </div><!--.row-->
          
          <div class="row">
            <form>
            <div class="col-12">
              <div class="mb-3">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione a categoria</option>
                    <option value="sub9">SUB-9</option>
                    <option value="sub10">SUB-11</option>
                    <option value="sub10">SUB-13</option>
                </select>
              </div>
            <div class="mb-3">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione a atividade</option>
                    <option value="sub9">Treino 20.10.2021</option>
                    <option value="sub10">Jogo 20.01.2021</option>
                    <option value="sub10">Jogo 21.01.2021</option>
                </select>
            </div>
            <div class="mb-3">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione o atleta</option>
                    <option value="sub9">Ryan Herllon</option>
                    <option value="sub10">Otavio Renan</option>
                    <option value="sub10">Lucas Freire</option>
                </select>
            </div>

            <div class="mb-3">
               <label for="validationTextarea" class="form-label">Observação</label>
    <textarea class="form-control " id="validationTextarea" rows="5" placeholder="Digite a observação" ></textarea>
            </div>
            
            <div class="mb-3">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark btn-lg">ENVIAR</button>
              </div>
            </div>
          </div>
           </form>
          </div><!--.row-->

          
    

       

        </div>
    </section>


<?php include '_rodape.php' ?>