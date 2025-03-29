<?php include('header.php') ?>
<?php include('database_connection.php') ?>

<table class="table table-hover">
    <thead id="data_section_top">
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>E-mail</th>
            <th>Celular para contato</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody id="data_section_bottom">

        <?php

        $query = 'SELECT * FROM contact';

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['full_Name'] ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['birth_Date'])) ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['mobile_Phone'] ?></td>
                    <td><img src="public/assets/editar.png" alt="edit_ast"></s><img src="public/assets/excluir.png" alt="delete.asset"></td>
                </tr>

        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php include('footer.php') ?>