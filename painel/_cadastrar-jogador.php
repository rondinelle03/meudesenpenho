<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Jogador</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
         
            <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Informações </h2>
              
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="nomecompleto">Nome <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nomecompleto" required="required" class="form-control ">
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Data de Nascimento: 
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input id="publicacao" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"  type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="categoria">Categoria <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="genero" id="genero" class="form-control">
                            <option value="">Selecione</option>
                            <option value="sub9">SUB-9</option>
                            <option value="sub10">SUB-11</option>
                            <option value="sub10">SUB-13</option>
                        </select>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto">Foto <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                         <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Número Camisa <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="numero" required="required" class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="altura">Altura 
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="altura"  class="form-control ">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="peso">Peso 
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="peso" class="form-control ">
                      </div>
                    </div>
                   
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="posicao">Posição <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="posicao" id="posicao" class="form-control">
                            <option value="">Selecione</option>
                            <option value="goleiro">Goleiro</option>
                            <option value="zagueiro">Zagueiro</option>
                            <option value="lateral">lateral</option>
                            <option value="meio">Meio</option>
                            <option value="atacante">Atacante</option>
                        </select>
                      </div>
                    </div>


                   

                    

                     <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                       
                        <button type="submit" class="btn btn-success">Salvar</button>
                      </div>
                    </div>
                    

                  
                  </form>
                </div>
              </div>
            </div>
          </div> <!--.row-->
        

          


          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>