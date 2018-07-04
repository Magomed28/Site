<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container-wrap">
        <div class="row">

            

            <div class="">
                <ul class="">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/order">Управление заказами</a></li>
                    <li class="active">Удалить заказ</li>
                </ul>
            </div>


            <h4>Удалить заказ #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить этот заказ?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>


