<?php
include_once '../config/config.php';


?>
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

<div class="container">


    <div style="display: flex; flex-direction: row; flex-wrap: wrap; margin-top: 40px; margin-bottom: 40px">
        <?php
        $sql = "SELECT DISTINCT user_id, tel_user, email_user from basket where status = 2";
        $res = mysqli_query($connect, $sql);
        while ($data = mysqli_fetch_assoc($res)) {
        ?>


        <div style="margin-bottom: 16px; width:100%">
            <h2><?= $data['user_id'] ?>: <?= $data['tel_user'] ?> <?= $data['email_user'] ?></h2>

            <div>
                <table>
                    <tr>
                        <th>id</th>
                        <th>img</th>
                        <th>name</th>
                        <th>price</th>
                        <th>color</th>
                        <th>size</th>
                        <th>count</th>
                        <th>date</th>
                        <th>status</th>
                    </tr>


                    <?php
                        $sql_id = "SELECT * FROM basket WHERE user_id={$data['user_id']} and status = 2";
                        $res_id = mysqli_query($connect, $sql_id);
                        while ($data_id = mysqli_fetch_assoc($res_id)) {
                        ?>


                    <tr>
                        <td><?= $data_id['good_id'] ?></td>
                        <td><img src="img/<?= $data_id['img'] ?>" width="80px"></td>
                        <td><?= $data_id['name'] ?></td>
                        <td><?= $data_id['price'] ?></td>
                        <td><?= $data_id['color'] ?></td>
                        <td><?= $data_id['size'] ?></td>
                        <td><?= $data_id['count'] ?></td>
                        <td><?= $data_id['data_create'] ?></td>
                        <td><a
                                href="../models/basket.php?active=sale&user=<?= $data['user_id'] ?>&id=<?= $data_id['good_id'] ?>"><button>Продать</button></a>
                        </td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
        </div>


        <?php
        }
        ?>
    </div>




</div>