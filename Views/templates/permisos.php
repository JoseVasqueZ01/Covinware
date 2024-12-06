<?php include "Views/templates/header.php"; ?>
<div class="row mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-lg border-0">
            <div class="card-header text-center bg-danger">
                <h4 class="text-white">Acceso Denegado</h4>
            </div>
            <div class="card-body text-center">
                <p class="text-muted mb-4">
                    Lo sentimos, no tienes los permisos necesarios para acceder a este módulo. Si crees que esto es un error, por favor contacta al administrador del sistema.
                </p>
                <a href="<?php echo base_url; ?>home" class="btn btn-primary btn-lg">
                    <i class="fas fa-arrow-left"></i> Regresar al Inicio
                </a>
            </div>
        </div>
    </div>
</div>
<?php include "Views/templates/footer.php"; ?>
