<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form class="form-search col-md-12" style="margin-top: -100px;">
                <div class="row  align-items-end">
                    <div class="col-md-3">
                        <label for="list-types">Tipo de Inmueble</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                                <option value="">Seleccionar</option>
                                <option value="">Casa</option>
                                <option value="">Apartamento</option>
                                <option value="">Oficina</option>
                                <option value="">Bodega</option>
                                <option value="">Local</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="offer-types">Tipo de Negocio</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                                <option value="">Seleccionar</option>
                                <option value="">Para Vender</option>
                                <option value="">Para Alquilar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="select-city">Seleccionar Ciudad</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                                <option value="">Seleccionar</option>
                                <option value="">Sabaneta</option>
                                <option value="">Envgigado</option>
                                <option value="">Itagui</option>
                                <option value="">Medellín</option>
                                <option value="">Bello</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Buscar">
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
                    <div class="mr-auto">
                        <a href="index.php" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                        <a href="index.php" class="icon-view view-list"><span class="icon-view_list"></span></a>

                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <div>
                            <a href="./index.php" class="view-list px-3 border-right active">Todos</a>
                            <a href="./rent.php" class="view-list px-3 border-right">Alquilar</a>
                            <a href="./buy.php" class="view-list px-3">Venta</a>
                        </div>


                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select class="form-control form-control-sm d-block rounded-0">
                                <option value="">Más Económico</option>
                                <option value="">Precio Ascendente</option>
                                <option value="">Precio Descendente</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>