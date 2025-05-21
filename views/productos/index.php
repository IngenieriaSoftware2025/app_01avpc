<div class="container py-5">
    <!-- Header con gradiente actualizado -->
    <div class="row mb-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body" style="background: linear-gradient(135deg, #f8fafc 40%, #c6e1f7 100%);">
                    <div class="mb-4 text-center">
                        <h5 class="fw-bold text-secondary mb-2">¡registra tu lista de productos que quieres comprar!</h5>
                        <h3 class="fw-bold mb-0" style="color: #1e5f8a;">ADMINISTRACION DE LISTA DE PRODUCTOS A COMPRAR</h3>
                    </div>
                    <form id="FormUsuarios" class="p-4 bg-white rounded-4 shadow-sm border">
                        <input type="hidden" id="producto_id" name="producto_id">
                        <div class="row g-4 mb-3">

                            <div class="col-md-6">
                                <label for="producto_nombre" class="form-label fw-semibold">NOMBRE DEL RPODUCTO</label>
                                <input type="text" class="form-control form-control-lg rounded-3" id="producto_nombre" name="producto_nombre" placeholder="Ingrese sus nombres" >
                            </div>

                            <div class="col-md-6">
                                <label for="producto_cantidad" class="form-label fw-semibold"> CANTIDAD</label>
                                <input type="number" class="form-control form-control-lg rounded-3" id="producto_cantidad" name="producto_cantidad">
                            </div>
                        </div>

                         <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label for="producto_categoria" class="form-label fw-semibold">CATEGORIA</label>
                                <select name="usuario_estado" class="form-select form-select-lg rounded-3" id="usuario_estado" >
                                    <option value="">seleccione la prioridad</option>
                                    <option value="A">ALTA</option>
                                    <option value="M">MEDIANA</option>
                                    <option value="B">BAJA</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label for="producto_categoria" class="form-label fw-semibold">CATEGORIA</label>
                                <select name="usuario_estado" class="form-select form-select-lg rounded-3" id="usuario_estado" >
                                    <option value="">seleccione la categoria</option>
                                    <option value="A">ALIMENTOS</option>
                                    <option value="H">HIGIENE</option>
                                    <option value="C">HOGAR</option>
                                </select>
                            </div>
                        </div>

                       

                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <button class="btn btn-lg px-4 shadow-sm rounded-pill" type="submit" id="BtnGuardar" style="background-color: #1e5f8a; color: white;">
                                <i class="bi bi-save me-2"></i>Guardar
                            </button>
                            <button class="btn btn-warning btn-lg px-4 shadow-sm rounded-pill d-none" type="button" id="BtnModificar">
                                <i class="bi bi-pencil-square me-2"></i>Modificar
                            </button>
                            <button class="btn btn-secondary btn-lg px-4 shadow-sm rounded-pill" type="reset" id="BtnLimpiar">
                                <i class="bi bi-eraser me-2"></i>Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-5">
        <div class="col-lg-11">
            <div class="card shadow-lg border-0 rounded-3" style="border-left: 5px solid #1e5f8a !important;">
                <div class="card-body">
                    <h3 class="text-center mb-4">Lista de productos Registrados</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle rounded-3 overflow-hidden" id="TableProductos">
                            <!-- Aquí se cargan los usuarios -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap Icons CDN (opcional, para los íconos de los botones) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="<?= asset('build/js/productos/index.js') ?>"></script>