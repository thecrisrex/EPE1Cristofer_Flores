<?php include('templates/header.php'); ?>

<div class="container">
    <h2 class="text-center my-5">Contacto</h2>
    <form action="php/save_contact.php" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="invalid-feedback">
                Por favor ingresa tu nombre.
            </div>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
            <div class="invalid-feedback">
                Por favor ingresa un correo electrónico válido.
            </div>
        </div>
        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="asunto" name="asunto" required>
            <div class="invalid-feedback">
                Por favor ingresa el asunto.
            </div>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
            <div class="invalid-feedback">
                Por favor ingresa tu mensaje.
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</div>

<?php include('templates/footer.php'); ?>


