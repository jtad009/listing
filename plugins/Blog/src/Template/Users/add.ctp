<?php

/**
 * @var \App\View\AppView $this
 */
?>
<body class="<?= BG ?> bg-pic">
<div class="container-fluid mb-5">

    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            <div class="col-lg-12 mt-3">

                <?php $this->Html->addCrumb('Dashboard', ['controller' => 'articles', 'action' => 'index', 'prefix' => false, 'plugin' => 'Blog']); ?>
                <?php $this->Html->addCrumb('Author ', null); ?>
                <?php $this->Html->addCrumb('Add', null); ?>

                <?= $this->Html->getCrumbList(); ?>
                <?= $this->Flash->render() ?>


                <div class="users card">
                    <?= $this->Form->create($user, ['type' => 'file','id'=>'contact']) ?>
                    <fieldset class="card-body">
                        <h4 class="card-title text-center"><?= __('Add User') ?>
                            <hr />
                        </h4>
                        <?php

                        echo $this->Form->input('first_name', ['class' => 'form-control']);
                        echo $this->Form->input('last_name', ['class' => 'form-control']);
                        //    echo $this->Form->input('last_name',['class'=>'form-control']);
                        echo $this->Form->input('email', ['class' => 'form-control']);
                        echo $this->Form->input('image', ['type' => 'file', 'class' => 'form-control']);
                        echo $this->Form->input('username', ['class' => 'form-control']);
                        echo $this->Form->input('password', ['class' => 'form-control']);
                        echo $this->Form->input('bio', ['class' => 'form-control']);

                        ?>
                        <br />
                        <div class="capbox">

                            <div id="CaptchaDiv"></div>

                            <div class="capbox-inner">
                                Type the above number:<br>

                                <input type="hidden" id="txtCaptcha">
                                <input type="text" name="CaptchaInput" id="CaptchaInput" size="15" onblur="return checkform(document.getElementById('contact'));"><br>

                            </div>
                        </div>
                        <br /><br/>
                        <?= $this->Form->button(__('SAVE USER'), ['class' => 'btn btn-block btn-primary','id' => 'submit', 'style' => 'display:none']) ?>
                    </fieldset>

                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Captcha Script

    function checkform(theform) {
        var why = "";

        if (theform.CaptchaInput.value == "") {
            why += "- Please Enter CAPTCHA Code.\n";
        }
        if (theform.CaptchaInput.value != "") {
            if (ValidCaptcha(theform.CaptchaInput.value) == false) {
                why += "- The CAPTCHA Code Does Not Match.\n";
            }
        }
        if (why != "") {
            alert(why);
            return false;
        }
    }

    var a = Math.ceil(Math.random() * 9) + '';
    var b = Math.ceil(Math.random() * 9) + '';
    var c = Math.ceil(Math.random() * 9) + '';
    var d = Math.ceil(Math.random() * 9) + '';
    var e = Math.ceil(Math.random() * 9) + '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    // Validate input against the generated number
    function ValidCaptcha() {
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
        if (str1 == str2) {
            document.getElementById('submit').style.display = 'block';
            return true;
        } else {
            return false;
        }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string) {
        return string.split(' ').join('');
    }
</script>
</body>