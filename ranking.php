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
            <div class="col-md-5 esp-mb">
               <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione a categoria</option>
                    <option value="sub9">SUB-9</option>
                    <option value="sub10">SUB-11</option>
                    <option value="sub10">SUB-13</option>
                </select>
            </div>
            <div class="col-md-5 esp-mb">
                <select name="genero" id="genero" class="form-control">
                    <option value="">Selecione o fundamento</option>
                    <option value="sub9">Chutes certos</option>
                    <option value="sub10">Desarmes</option>
                    <option value="sub10">Penaltis</option>
                    <option value="sub10">Shout Out</option>
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
               <h6 class="obs-detalhe">Categoria: <span>Sub 11</span> | Fundamento: <span> Desarmes</span> </h6> 
            </div>
          </div>
          <div class="row">

              <div class="col-12">

                <div class="table-responsive">
                  <table class="table align-middle  table-striped">
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
                        <th>João Luccas</th>
                        <th>20</th>
                        
                      </tr>
                        <tr>
                        <th>2</th>
                        <th>Otávio Rennan</th>
                        <th>16</th>
                        
                      </tr>
                       
                         <tr>
                        <th>3</th>
                        <th>F. Mauricio</th>
                        <th>14</th>
                        
                      </tr>
                       
                         <tr>
                        <th>4</th>
                        <th>Fernando Ryan</th>
                        <th>5</th>
                        
                      </tr>
                       
                         <tr>
                        <th>5</th>
                        <th>Davi Lucas</th>
                        <th>3</th>
                        
                      </tr>
                       
                         <tr>
                        <th>6</th>
                        <th>Paulo</th>
                        <th>2</th>
                        
                      </tr>
                       
                       
                       
                       

                      
                      
                    </tbody>
                  </table>
                </div>


              </div>
            
          </div>
         
        

       

        </div>
    </section>


<?php include '_rodape.php' ?>