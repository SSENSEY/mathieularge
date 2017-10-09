<?php
session_start();
?>

<div class="tetiere">
    <h1>Contact</h1>
</div>

<div class="contact">
    <div class="container">
        <h4>Je suis joignable en remplissant ce formulaire ci-dessous.</h4>

        <div class="formulaire">
            <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été transmis !
                </div>
            <?php endif; ?>
            <form action="app/templates/send_form.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-1">
                            <label for="inputname">Nom</label>
                            <input required type="text" name="name" placeholder="" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-2">
                            <label for="inputemail">Email</label>
                            <input required type="email" name="email" class="form-control" id="inputemail" placeholder=""  value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group-3">
                            <label for="inputmessage">Message</label>
                            <textarea required id="inputmessage" name="message"  class="form-control" placeholder="." style="margin: 0px -6px 0px 0px; height: 200px; width: 100%;"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type='submit' class='btn btn-primary'>Envoyer</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
