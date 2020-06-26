<body class="<?= BG ?>">
    <div class="container">
    <div class="row text-center  mx-auto">
                <div class="col-md-8 col-xs-12 mx-auto">
                <br>

                    <?= $this->Html->image('logo.png',['alt'=>ucfirst(APP_NAME),'width'=>'140','height'=>140]);?>
                <br>
            </div>
            </div>
 
    <div class="card card-login mx-auto mt-5">
    <?= $this->Flash->render()?>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <?= $this->Form->create() ?>
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email address" name="email">
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Reset Password">
        <?= $this->Form->end() ?>
        
        <div class="text-center">
           <?= $this->Html->link('Register an Author',['controller'=>'Users','action'=>'add'],['class'=>'pull-right mt-3 small text-danger'])?>
          <?= $this->Html->link('Login',['controller'=>'users','action'=>'login'],['class'=>'pull-right small mt-3 mr-3 text-danger']) ?>
          
         
        </div>
      </div>
    </div>
  </div>
</body>