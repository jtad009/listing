
<body class="<?= BG ?> bg-pic" >
  <div class="container">
  <div class="row text-center  mx-auto">
                <div class="col-md-8 col-xs-12 mx-auto">
                <br>
                  <?= $this->Html->image(LOGO_PATH,['alt'=>ucfirst(APP_NAME),'width'=>'140','height'=>140]);?>
                
                <br>
            </div>
            </div>
  <div class="col-sm-6 mx-auto mt-5">
    <?= $this->Flash->render()?>
    </div>
    <div class="card card-login mx-auto mt-1">
     
      <div class="card-body">
      <h4 class="card-title text-center big">LOGIN<hr class="line"/></h4>
       <?= $this->Form->create() ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="username" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Login"/>
          
       <?= $this->Form->end() ?>
       <div class="text-center">
       
           <?= $this->Html->link('Author Registration',['controller'=>'Users','action'=>'add','plugin'=>'Blog'],['class'=>'pull-right mt-3 small text-danger'])?>
          <?= $this->Html->link('Forgot Password?',['controller'=>'Users','action'=>'forgot'],['class'=>'pull-right small mt-3 mr-3 text-danger']) ?>
          
         
        </div>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->

</body>
