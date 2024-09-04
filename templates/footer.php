<footer class="text-center py-4">
    <div class="container">
        <p>&copy; 2024 TechSolutions. Todos los derechos reservados.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Política de Privacidad</a></li>
            <li class="list-inline-item"><a href="#">Términos de Servicio</a></li>
            <li class="list-inline-item"><a href="#">Contacto</a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
    
    (function () {
        'use strict'
        
        
        var forms = document.querySelectorAll('.needs-validation')
        
        
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="js/form-validation.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
