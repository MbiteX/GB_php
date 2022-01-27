<?php
include_once '../config/config.php';
$title = 'ADMIN';
include_once '../public/templates/head.php';



if ($_SESSION['role'] == 1) {
?>
    <link rel="stylesheet" href="../public/css/style.css">
    <style>
        table {
            border: 1px solid #b3adad;
            border-collapse: collapse;
            padding: 5px;
        }

        table th {
            border: 1px solid #b3adad;
            padding: 5px;
            background: #f0f0f0;
            color: #313030;
        }

        table td {
            border: 1px solid #b3adad;
            text-align: center;
            padding: 5px;
            background: #ffffff;
            color: #313030;
        }
    </style>

    <div class="container" style="display: flex; margin-top: 10px; margin-bottom: 40px">

        <div>
            <a href="add_product.php?click=add"><button style="margin-bottom: 20px;">Добавить товар</button></a>
            <table>
                <tr>
                    <th>id</th>
                    <th>img</th>
                    <th>name</th>
                    <th>price</th>
                    <th>color</th>
                    <th>size</th>
                    <th>date</th>
                    <th>description</th>
                    <th>действие</th>
                </tr>


                <?php
                $sql_id = "SELECT * FROM goods";
                $res_id = mysqli_query($connect, $sql_id);
                while ($data_id = mysqli_fetch_assoc($res_id)) {
                ?>


                    <tr>
                        <td><?= $data_id['id'] ?></td>
                        <td><img src="../public/img/<?= $data_id['img'] ?>" width="80px"></td>
                        <td><?= $data_id['name'] ?></td>
                        <td><?= $data_id['price'] ?></td>
                        <td><?= $data_id['color'] ?></td>
                        <td><?= $data_id['size'] ?></td>
                        <td><?= $data_id['data_create'] ?></td>
                        <td><?= $data_id['description'] ?></td>
                        <td>
                            <a href="add_product.php?click=up&id=<?= $data_id['id'] ?>"><button>Редактировать</button></a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>




    </div>

<?php

} else {
    header("Location: ../public");
}
?>