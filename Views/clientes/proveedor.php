<?php include "Views/templates/header.php"; ?>
<button class="btn btn-primary mb-2" type="button" onclick="frmProveedor();"><i class="fas fa-plus"></i></button>
<div class="table-responsive">
    <table class="table table-light display responsive nowrap" id="t_Pr" style="width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Dui</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Contacto</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div>
        <div id="nuevo_proveedor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="title">Nuevo Proveedor</h5>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="frmProveedor" autocomplete="off">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id">
                                <label for="ruc">CC/Nit</label>
                                <input id="ruc" class="form-control" type="text" name="ruc" placeholder="Identidad del proveedor" onkeypress="return soloNumeros(event);" oninput="longitud(event, 9)">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Celular</label>
                                <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Teléfono" onkeypress="return soloNumeros(event);" oninput="longitud(event, 10)">
                            </div>
                            <div class="form-group">
                                <label for="direccion">Contacto</label>
                                <textarea id="direccion" class="form-control" name="direccion" placeholder="WhatsApp o Correo" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary" type="button" onclick="registrarPr(event);" id="btnAccion">Registrar</button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "Views/templates/footer.php"; ?>