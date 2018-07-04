<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container-wrap">
        <div class="row">

            

            <div class="">
                <ul class="">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление категориями</li>
                </ul>
            </div>

            <a href="/admin/category/create" class=""><i class="fa fa-plus"></i> Добавить категорию</a>
            
            <h4>Список категорий</h4>

            <br/>

            <table class="table">
                <tr>
                    <th>ID категории</th>
                    <th>Название категории</th>
                    <th>Порядковый номер</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>



