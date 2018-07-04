<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="row cabinet-row">
        <div class="col cabinet-col">

            <h1>Кабинет пользователя</h1>
            
            <h3>Добро пожаловать, <?php echo $user['name'];?>!</h3>
            <a href="/cabinet/edit"><p>Редактировать данные</p></a>
            <a href="/cabinet/history"><p>Список покупок</p></a>
            
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>