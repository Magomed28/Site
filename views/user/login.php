<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    
        <div class="row user-login">

            <div class="col login">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                            <li> Возможно Вы не зарегистрированы?</li> 
                            <a href="/user/register"><li>Регистрация</li></a>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                    <div>
                    <h2>Вход на сайт</h2>
                    </div>
                    <div class="signup-form">
                    <form  action="#" method="post">
                        <input  type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input  type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>
                    </div>


                <br/>
                <br/>
            </div>
        </div>
    
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>