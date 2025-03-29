<?php include('header.php') ?>
<?php include('database_connection.php') ?>


<form class="row mb-5" id="form">
    <div class="form-group col-md-6">
        <label for="inputName">Nome completo</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputName" name="name" placeholder="Ex.: Letícia Pacheco dos Santos" maxlength="200" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputBirthDate">Data de nascimento</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5 date" id="inputBirthDate" name="birth_date" placeholder="Ex.: 03/10/2003" data-inputmask="'alias': 'date'" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail">E-mail</label>
        <input type="email" class="form-control rounded-0 p-0 mb-5" id="inputEmail" name="email" placeholder="Ex.: leticia@gmail.com" maxlength="200" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputOccupation">Profissão</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputOccupation" name="occupation" placeholder="Ex.: Desenvolvedora Web" maxlength="200" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputPhone">Telefone para contato</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputPhone" name="phone" placeholder="Ex.: (11) 4033-2019">
    </div>

    <div class="form-group col-md-6">
        <label for="inputMobilePhone">Celular para contato</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputMobilePhone" name="mobile_phone" placeholder="Ex.: (11) 98493-2039" required>
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxWhatsapp" name="is_whatsapp" checked />
        <label class="form-check-label mb-4" for="checkboxWhatsapp">Número de celular possui Whatsapp</label>
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxEmail" name="receive_email" checked />
        <label class="form-check-label mb-4" for="checkboxEmail">Enviar notificações por E-mail</label>
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxSms" name="receive_sms" checked />
        <label class="form-check-label mb-4" for="checkboxSms">Enviar notificações por SMS</label>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" type="submit" name="register">Cadastrar contato</button>
    </div>
</form>


<hr><br>

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
                <td class="text-center"><?php echo $row['full_Name'] ?></td>
                <td class="text-center"><?php echo date('d/m/Y', strtotime($row['birth_Date'])) ?></td>
                <td class="text-center"><?php echo $row['email'] ?></td>
                <td class="text-center"><?php echo $row['mobile_Phone'] ?></td>
                <td class="text-center">
                    <img src="public/assets/editar.png" alt="edit_ast" class="icon">
                    <img src="public/assets/excluir.png" alt="delete.asset">
                </td>
            </tr>

    <?php
        }
    }
    ?>
    </tbody>
</table>
</div>

<?php include('footer.php') ?>