<?php include "Views/templates/header.php"; ?>
<button class="btn btn-primary mb-2" type="button" onclick="frmUsuario();"><i class="fas fa-plus"></i></button>
<div class="table-responsive">
    <table class="table table-light display responsive nowrap" id="t_user" style="width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div id="nuevo_usuario" class="modal fade" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="title">Nuevo Usuario</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmUsuario" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="hidden" id="id" name="id">
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del usuario" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input id="correo" class="form-control" type="email" name="correo" placeholder="Correo electrónico" required>
                            </div>
                        </div>
                        <div class="col-md-6 claves">
                            <div class="form-group">
                                <label for="clave">Contraseña</label>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6 confirmar">
                            <div class="form-group">
                                <label for="confirmar">Confirmar Contraseña</label>
                                <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar contraseña">
                                <span id="error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary d-none" type="button" onclick="registrarUser(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="permisos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="permisos-title" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow-lg">
            <!-- Modal Header -->
            <div class="modal-header border-0 shadow-sm" style="background: linear-gradient(90deg, #F58217FF, #FAB78AFF); color: #fff;">
                <h5 class="modal-title d-flex align-items-center" id="permisos-title">
                <i class="fas fa-user-shield me-2" style="font-size: 1.5rem;"></i> 
                <span>Asignar Permisos</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-light">
                <form id="frmPermisos">
                    <div class="mb-3">
                        <label for="userRole" class="form-label">Rol del Usuario:</label>
                        <select id="userRole" class="form-select">
                            <option value="">Seleccione un rol</option>
                            <option value="admin">Administrador</option>
                            <option value="editor">Editor</option>
                            <option value="viewer">Visualizador</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Permisos Disponibles:</label>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-outline-primary rounded-pill">
                                <i class="fas fa-plus-circle"></i> Crear contenido
                            </button>
                            <button type="button" class="btn btn-outline-success rounded-pill">
                                <i class="fas fa-edit"></i> Editar contenido
                            </button>
                            <button type="button" class="btn btn-outline-danger rounded-pill">
                                <i class="fas fa-trash"></i> Eliminar contenido
                            </button>
                            <button type="button" class="btn btn-outline-info rounded-pill">
                                <i class="fas fa-eye"></i> Ver contenido
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
        </div>
    </div>
</div>

<?php include "Views/templates/footer.php"; ?>