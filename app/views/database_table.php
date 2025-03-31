<table class="table table-hover mt-5">
    <thead id="data_section_top">
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>E-mail</th>
            <th>Celular para contato</th>
            <th>Ações</th>
        </tr>
    </thead>
    <?php

    $query = 'SELECT * FROM contact';

    $result = mysqli_query($connection, $query);



    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <tr class="table_data mt-5 mb-5 p-5">
                <td class="text-center align-middle"><?php echo $row['full_Name'] ?></td>
                <td class="text-center align-middle"><?php echo date('d/m/Y', strtotime($row['birth_Date'])) ?></td>
                <td class="text-center align-middle"><?php echo $row['email'] ?></td>
                <td class="text-center align-middle"><?php echo $row['mobile_Phone'] ?></td>
                <td class="text-center align-middle">
                    <button class="btn"><a href="/TesteCrudAlphacode/app/views/edit_page.php?id=<?php echo $row['id']; ?>"><img src="/TesteCrudAlphacode/public/assets/editar.png" alt="edit_ast"></a></button>
                    <button class="btn"><a href="/TesteCrudAlphacode/app/controllers/delete.php?id=<?php echo $row['id']; ?>"><img src="/TesteCrudAlphacode/public/assets/excluir.png" alt="delete.asset"></a></button>
                </td>
            </tr>

    <?php
        }
    }
    ?>
    </tbody>
</table>