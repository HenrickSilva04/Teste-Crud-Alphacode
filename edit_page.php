<?php
include(__DIR__ . '/app/views/partials/edit_header.php');
include(__DIR__ . '/config/database_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM contact WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<form class="row mb-5" id="form" action="update.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group col-md-6">
        <label for="inputName">Nome completo</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputName" name="u_name" placeholder="Ex.: Letícia Pacheco dos Santos" maxlength="200" required value="<?php echo $row['full_Name'] ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputBirthDate">Data de nascimento</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5 date" id="inputBirthDate" name="u_birthDate" placeholder="Ex.: 03/10/2003" data-inputmask="'alias': 'date'" required value="<?php echo date('d/m/Y', strtotime($row['birth_Date'])) ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail">E-mail</label>
        <input type="email" class="form-control rounded-0 p-0 mb-5" id="inputEmail" name="u_email" placeholder="Ex.: leticia@gmail.com" maxlength="200" required value="<?php echo $row['email'] ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputOccupation">Profissão</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputOccupation" name="u_occupation" placeholder="Ex.: Desenvolvedora Web" maxlength="200" required value="<?php echo $row['occupation'] ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputPhone">Telefone para contato</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputPhone" name="u_phone" placeholder="Ex.: (11) 4033-2019" maxlength="14" value="<?php echo $row['phone'] ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="inputMobilePhone">Celular para contato</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputMobilePhone" name="u_mobilePhone" placeholder="Ex.: (11) 98493-2039" maxlength="15" required value="<?php echo $row['mobile_Phone'] ?>">
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxWhatsapp" name="u_IsWhatsapp" value="1" <?php echo ($row['mobile_Is_Whatsapp'] == 1) ? 'checked' : ''; ?> />
        <label class="form-check-label mb-4" for="checkboxWhatsapp">Número de celular possui Whatsapp</label>
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxEmail" name="u_receiveEmail" value="1" <?php echo ($row['receive_Email'] == 1) ? 'checked' : ''; ?> />
        <label class="form-check-label mb-4" for="checkboxEmail">Enviar notificações por E-mail</label>
    </div>

    <div class="form-group col-md-6">
        <input type="checkbox" class="form-check-input" id="checkboxSms" name="u_receiveSms" value="1" <?php echo ($row['receive_Sms'] == 1) ? 'checked' : ''; ?> />
        <label class="form-check-label mb-4" for="checkboxSms">Enviar notificações por SMS</label>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" type="submit" name="update" id="update_btn">Atualizar Cadastro</button>
        <a class="btn btn-primary" href="/TesteCrudAlphacode/index.php" role="cancel" id="cancel_btn">Cancelar</a>
    </div>
</form>

<script>
    $('#inputBirthDate').mask('00/00/0000');
    $('#inputPhone').mask('(00) 0000-0000');
    $('#inputMobilePhone').mask('(00) 00000-0000');
</script>


<?php include(__DIR__ . '/app/views/partials/footer.php') ?>