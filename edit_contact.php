<?php include(__DIR__ . '/app/views/partials/edit_header.php') ?>
<?php include(__DIR__ . '/config/database_connection.php') ?>

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
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputPhone" name="phone" placeholder="Ex.: (11) 4033-2019" maxlength="14">
    </div>

    <div class="form-group col-md-6">
        <label for="inputMobilePhone">Celular para contato</label>
        <input type="text" class="form-control rounded-0 p-0 mb-5" id="inputMobilePhone" name="mobile_phone" placeholder="Ex.: (11) 98493-2039" maxlength="15" required>
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