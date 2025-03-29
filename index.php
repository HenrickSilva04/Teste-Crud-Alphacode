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
    <form class="form-container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="inputName">Nome completo</label>
                    <input type="text" class="form-control form-control-lg" id="inputName" name="name" placeholder="Ex.: Letícia Pacheco dos Santos" maxlength="200" required>
                </div>

                <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control form-control-lg" id="inputEmail" name="email" placeholder="Ex.: leticia@gmail.com" maxlength="200" required>
                </div>

                <div class="form-group">
                    <label for="inputPhone">Telefone para contato</label>
                    <input type="text" class="form-control form-control-lg" id="inputPhone" name="phone" placeholder="Ex.: (11) 4033-2019">
                </div>

                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="checkboxWhatsapp" name="is_whatsapp" checked />
                    <label class="form-check-label" for="checkboxWhatsapp">Número de celular possui Whatsapp</label>
                </div>

                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="checkboxEmail" name="receive_email" checked />
                    <label class="form-check-label" for="checkboxEmail">Enviar notificações por E-mail</label>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="inputBirthDate">Data de nascimento</label>
                    <input type="text" class="form-control date form-control-lg" id="inputBirthDate" name="birth_date" placeholder="Ex.: 03/10/2003" data-inputmask="'alias': 'date'" required>
                </div>

                <div class="form-group">
                    <label for="inputOccupation">Profissão</label>
                    <input type="text" class="form-control form-control-lg" id="inputOccupation" name="occupation" placeholder="Ex.: Desenvolvedora Web" maxlength="200" required>
                </div>

                <div class="form-group">
                    <label for="inputMobilePhone">Celular para contato</label>
                    <input type="text" class="form-control form-control-lg" id="inputMobilePhone" name="mobile_phone" placeholder="Ex.: (11) 98493-2039" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="checkboxSms" name="receive_sms" checked />
                    <label class="form-check-label" for="checkboxSms">Enviar notificações por SMS</label>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit" name="register">Cadastrar contato</button>
        </div>
    </form>
    <hr>
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