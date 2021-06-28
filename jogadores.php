<?php include '_topo.php' ?>

    <section id="conteudo">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="center-usuario">
                <img src="img/joan.jpg">
                <h1>Jogadores</h1>
              </div>
            </div>
          </div><!--.row-->
          
          <div class="row">
            <div class="col-md-10 esp-mb">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione a categoria</option>
                    <option value="sub9">SUB-9</option>
                    <option value="sub10">SUB-11</option>
                    <option value="sub10">SUB-13</option>
                </select>
            </div>
          
            <div class="col-md-2 esp-mb">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark btn-lg">Buscar</button>
              </div>
            </div>
           
          </div><!--.row-->

          <div class="row">
            <div class="col-12">
               <h6 class="obs-detalhe">Categoria: <span>Sub 09</span> </h6> 
            </div>
          </div>
          <div class="row">

              <div class="col-12">

                <div class="table-responsive">
                  <table class="table align-middle table-striped">
                    <thead>
                      <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Nascimento</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td><img src="img/atletas/allyson.jpg" width="100"></td>
                        <td><strong>Allyson</strong>  <br> Nº 07</td>
                        <td>11.02.2021</td>
                        <td> Sub-9 </td>
                        <td>
                          <div class="d-grid gap-2">
                           <a class="btn btn-light" href="visualizar-jogador.php"><i class="fas fa-eye"></i></a>
                           
                          </div>
                        </td>
                        <td>
                       
                      </tr>
                      <tr>
                        <td><img src="img/atletas/dyego.jpg" width="100"></td>
                        <td><strong>Dyego</strong>  <br> Nº 4</td>
                        <td>11.02.2021</td>
                        <td> Sub-9 </td>
                        <td>
                          <div class="d-grid gap-2">
                           <a class="btn btn-light" href="visualizar-jogador.php"><i class="fas fa-eye"></i></a>
                           
                          </div>
                        </td>
                        <td>
                       
                      </tr>
                      <tr>
                       <td><img src="img/atletas/joao.jpg" width="100"></td>
                        <td><strong>João Luccas</strong>  <br> Nº 21</td>
                        <td>11.02.2021</td>
                        <td> Sub-9 </td>
                        <td>
                          <div class="d-grid gap-2">
                           <a class="btn btn-light" href="visualizar-jogador.php"><i class="fas fa-eye"></i></a>
                           
                          </div>
                        </td>
                        <td>
                       
                      </tr>
                      <tr>
                        <td><img src="img/atletas/kalleb.jpg" width="100"></td>
                        <td><strong>Kalleb</strong>  <br> Nº 21</td>
                        <td>11.02.2021</td>
                        <td> Sub-9 </td>
                        <td>
                          <div class="d-grid gap-2">
                           <a class="btn btn-light" href="visualizar-jogador.php"><i class="fas fa-eye"></i></a>
                           
                          </div>
                        </td>
                        <td>
                       
                      </tr>
                    
                      

                      
                      
                    </tbody>
                  </table>
                </div>


              </div>
            
          </div>
         
      

          <div class="row">
              <div class="col-12">
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-dark btn-lg">FINALIZAR ATIVIDADE</button>
                  </div>
              </div>
          </div>       

       

        </div>
    </section>


<?php include '_rodape.php' ?>