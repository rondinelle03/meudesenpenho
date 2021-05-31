<?php include '_topo.php' ?>

    <section id="conteudo">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="center-usuario">
                <img src="img/joan.jpg">
                <h1>Analise de Desempenho<span>Ranking</span></h1>
              </div>
            </div>
          </div><!--.row-->
          
          <div class="row">
            <div class="col-5">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione a categoria</option>
                    <option value="sub9">SUB-9</option>
                    <option value="sub10">SUB-11</option>
                    <option value="sub10">SUB-13</option>
                </select>
            </div>
            <div class="col-5">
                <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione o fundamento</option>
                    <option value="sub9">Chutes certos</option>
                    <option value="sub10">Desarmes</option>
                    <option value="sub10">Penaltis</option>
                    <option value="sub10">Shout Out</option>
                </select>
            </div>
            <div class="col-2">
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark btn-lg">Buscar</button>
              </div>
            </div>
           
          </div><!--.row-->

          <div class="row">
            <div class="col-12">
               <h6 class="obs-detalhe">Categoria: <span>Sub 09</span>Fundamento: <span> Desarmes</span> </h6> 
            </div>
          </div>
          <div class="row">

              <div class="col-12">

                <div class="table-responsive">
                  <table class="table align-middle">
                    <thead>
                      <tr>
                        <th>Ranking</th>
                        <th>Nome</th>
                        
                        <th>Desarmes</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                        <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                       
                         <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                       
                         <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                       
                         <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                       
                         <tr>
                        <th>1</th>
                        <th>Lucas</th>
                        <th>20</th>
                        
                      </tr>
                       
                       
                       
                       

                      
                      
                    </tbody>
                  </table>
                </div>


              </div>
            
          </div>
         
          <div class="row">
            <div class="col-12">
                <h4>Analise atual da equipe na partida</h4>
                <ul>
                  <li><strong>Chutes certos em gol:</strong> 0</li>
                  <li><strong>Chutes errados sem direção ao gol:</strong> 0</li>
                  <li><strong>Desarmes:</strong> 0</li>
                  <li><strong>Passes certos no campo adversario:</strong> 0</li>
                  <li><strong>Passes errados:</strong> 0</li>
                </ul>
            </div>
          </div>   

          <div class="row">
              <div class="col-12">
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-info btn-lg">FINALIZAR ATIVIDADE</button>
                  </div>
              </div>
          </div>       

       

        </div>
    </section>


<?php include '_rodape.php' ?>