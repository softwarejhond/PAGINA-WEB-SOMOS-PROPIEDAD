<?php
require('conexion.php');

// Definir un valor predeterminado para la variable $buscar
$buscar = isset($_GET['buscar']) ? $conn->real_escape_string($_GET['buscar']) : '';

// Definir el número de ítems por página
define('NUM_ITEMS_BY_PAGE', 4);

// Consulta para contar el total de productos
$sql_count = "SELECT COUNT(*) as total_products 
FROM proprieter
INNER JOIN municipios ON proprieter.Municipio = municipios.id_municipio
WHERE codigo LIKE '%$buscar%' AND nombre_inquilino = '' AND estadoPropietario = 'ACTIVO'";

// Ejecutar la consulta
$result_count = $conn->query($sql_count);

if ($result_count) {
    $row_count = $result_count->fetch_assoc();
    $num_total_rows = $row_count['total_products'];
} else {
    // Manejar el error si la consulta falla
    echo "Error al realizar la consulta: " . $conn->error;
    $num_total_rows = 0;
}

// Formatear un valor ejemplo (reemplazar $row['valor_canon'] con un dato válido)
$row = ['valor_canon' => 1500000]; // Esto es solo un ejemplo para evitar errores
$canonFormateado = number_format($row['valor_canon'], 0, ',', '.');

?>

<!-- Formulario de filtros -->
<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form id="filterForm" class="form-search col-md-12" style="margin-top: -100px; border-radius: 10px;">
                <div class="row align-items-end">
                    <!-- Tipo de Inmueble -->
                    <div class="col-md-3">
                        <label for="tipoInmueble">Tipo de Inmueble</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select class="form-control d-block rounded-2" id="tipoInmueble" name="tipoInmueble">
                                <option value="0">Seleccionar</option>
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Local">Local</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Penthouse">Penthouse</option>
                                <option value="Finca">Finca</option>
                                <option value="Casa con local">Casa con local</option>
                                <option value="LOTE">Lote</option>
                            </select>
                        </div>
                    </div>

                    <!-- Estado -->
                    <div class="col-md-3">
                        <label for="estado">Estado</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select class="form-control d-block rounded-2" id="estado" name="estado">
                                <option value="">Seleccionar</option>
                                <option value="EN ALQUILER">EN ALQUILER</option>
                                <option value="EN VENTA">EN VENTA</option>
                                <option value="ALQUILER O VENTA">ALQUILER O VENTA</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nivel -->
                    <div class="col-md-3">
                        <label for="piso">Nivel</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select id="piso" class="form-control d-block rounded-2">
                                <option value="">Seleccionar</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <!-- Habitaciones -->
                    <div class="col-md-3">
                        <label for="habitaciones">Habitaciones</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select id="habitaciones" name="habitaciones" class="form-control d-block rounded-2">
                                <option value="">Seleccionar</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <!-- Departamento -->
                    <div class="col-md-3">
                        <label for="lista_departamento">Departamento</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select id="lista_departamento" name="departamento" class="form-control d-block rounded-2" data-live-search="true">
                                <!-- Opciones dinámicas -->
                            </select>
                        </div>
                    </div>

                    <!-- Municipio -->
                    <div class="col-md-3">
                        <label for="municipios">Municipio</label>
                        <div class="select-wrap">
                            <span class="icon icon-arrow_drop_down"></span>
                            <select id="municipios" name="municipio" class="form-control d-block rounded-2" data-live-search="true">
                                <!-- Opciones dinámicas -->
                            </select>
                        </div>
                    </div>

                    <!-- Código -->
                    <div class="col-md-3">
                        <label for="codigo">Código de Propiedad</label>
                        <input type="text" id="codigo" name="codigo" class="form-control d-block rounded-2" placeholder="Código de propiedad">
                    </div>

                    <!-- Botón Buscar -->
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success text-white btn-block rounded-2" id="buscar" value="Buscar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<div class="site-section site-section-sm ">
    <div class="container">

        <!-- Contenedor para mostrar resultados -->
        <div id="resultsContainer"></div>
    </div>
</div>
<!-- Controles de paginación -->
<br>
<nav aria-label="Page navigation example">
    <ul id="paginationContainer" class="pagination justify-content-center">
        <!-- Aquí se llenarán dinámicamente los botones de paginación -->
    </ul>
    <div class="paginationControls mb-3 float-right">
        <span id="pageInfo"></span>
        <span id="totalResults"></span>
    </div>
</nav>


<!-- Agrega esta línea para mostrar el total de resultados -->
<br>

<br>
</div>

<!-- Modal -->
<!-- Modal -->

<script>
    const NUM_ITEMS_BY_PAGE = <?php echo NUM_ITEMS_BY_PAGE; ?>;
    let currentPage = 1;
    let totalPages = Math.ceil(<?php echo $num_total_rows; ?> / NUM_ITEMS_BY_PAGE);


    document.addEventListener('DOMContentLoaded', function() {

        const filterForm = document.getElementById('filterForm');
        const resultsContainer = document.getElementById('resultsContainer');
        const paginationContainer = document.getElementById('paginationContainer');
        let totalPages = Math.ceil(<?php echo $num_total_rows; ?> / NUM_ITEMS_BY_PAGE);

        let currentPage = 1;

        const filters = document.querySelectorAll('.filter');
        // Función para generar los botones de paginación
        function generatePaginationButtons() {
            paginationContainer.innerHTML = ''; // Vaciar el contenedor antes de agregar botones

            // Botón "Anterior"
            const prevPageBtn = document.createElement('li');
            prevPageBtn.classList.add('page-item');
            if (currentPage === 1) {
                prevPageBtn.classList.add('disabled');
            }
            const prevPageLink = document.createElement('a');
            prevPageLink.classList.add('page-link');
            prevPageLink.href = '#';
            prevPageLink.setAttribute('aria-label', 'Previous');
            prevPageLink.innerHTML = '<span aria-hidden="true">&laquo;</span>';
            prevPageBtn.appendChild(prevPageLink);
            paginationContainer.appendChild(prevPageBtn);

            // Mostrar un rango de páginas basado en la página actual
            const range = 5; // Número de botones visibles a cada lado de la página actual
            const startPage = Math.max(1, currentPage - Math.floor(range / 2));
            const endPage = Math.min(totalPages, startPage + range - 1);

            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('li');
                pageBtn.classList.add('page-item');
                if (i === currentPage) {
                    pageBtn.classList.add('active');
                }
                const pageLink = document.createElement('a');
                pageLink.classList.add('page-link');
                pageLink.href = '#';
                pageLink.textContent = i;
                pageBtn.appendChild(pageLink);
                paginationContainer.appendChild(pageBtn);
            }

            // Botón "Siguiente"
            const nextPageBtn = document.createElement('li');
            nextPageBtn.classList.add('page-item');
            if (currentPage === totalPages) {
                nextPageBtn.classList.add('disabled');
            }
            const nextPageLink = document.createElement('a');
            nextPageLink.classList.add('page-link');
            nextPageLink.href = '#';
            nextPageLink.setAttribute('aria-label', 'Next');
            nextPageLink.innerHTML = '<span aria-hidden="true">&raquo;</span>';
            nextPageBtn.appendChild(nextPageLink);
            paginationContainer.appendChild(nextPageBtn);
        }

        filters.forEach(filter => {
            filter.addEventListener('change', function() {
                currentPage = 1; // Reiniciar a la primera página al aplicar filtros
                fetchResults(); // Realizar una nueva consulta con los filtros aplicados
                generatePaginationButtons(); // Actualizar el paginador
            });
        });


        // Agregar evento click a los botones de paginación
        paginationContainer.addEventListener('click', function(event) {
            event.preventDefault();
            const target = event.target;

            if (target.classList.contains('page-link')) {
                const pageNumber = parseInt(target.textContent);
                if (!isNaN(pageNumber)) {
                    currentPage = pageNumber;
                    fetchResults();
                    generatePaginationButtons();
                } else if (target.getAttribute('aria-label') === 'Previous' && currentPage > 1) {
                    currentPage--;
                    fetchResults();
                    generatePaginationButtons();
                } else if (target.getAttribute('aria-label') === 'Next' && currentPage < totalPages) {
                    currentPage++;
                    fetchResults();
                    generatePaginationButtons();
                }
            }
        });

        filterForm.addEventListener('submit', function(event) {
            event.preventDefault();
            currentPage = 1; // Reiniciar la página a 1 al enviar el formulario
            fetchResults();
            generatePaginationButtons();
        });

        fetchResults(); // Llamada inicial al cargar la página
        generatePaginationButtons(); // Generar los botones de paginación inicialmente
    })

    function fetchResults() {
        const tipoInmueble = document.getElementById('tipoInmueble').value;
        const estado = document.getElementById('estado').value;
        const habitaciones = document.getElementById('habitaciones').value;
        const piso = document.getElementById('piso').value;
        const codigo = document.getElementById('codigo').value;
        const municipios = document.getElementById('municipios').value;
        const limit = NUM_ITEMS_BY_PAGE;
        const offset = (currentPage - 1) * limit;

        const url =
            `https://somospropiedad.com/admin/APIS/get_properties.php?limit=${limit}&offset=${offset}&tipoInmueble=${tipoInmueble}&estado=${estado}&habitaciones=${habitaciones}&piso=${piso}&codigo=${codigo}&municipios=${encodeURIComponent(municipios)}`;
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Obtener la cantidad real de resultados después de aplicar los filtros
                const numResults = data.length;

                // Calcular el número total de páginas
                totalPages = Math.ceil(numResults / NUM_ITEMS_BY_PAGE);

                // Renderizar los resultados, generar los botones de paginación y actualizar la información del paginador
                renderResults(data);
                generatePaginationButtons();
                updatePaginationInfo();
            })
            .catch(error => console.error('Error fetching data:', error));
    }


    function renderResults(data) {
        resultsContainer.innerHTML = '';

        if (data.length === 0) {
            resultsContainer.innerHTML = '<p>No se encontraron resultados.</p>';
            return;
        }

        const cardContainer = document.createElement('div');
        cardContainer.classList.add('row', 'justify-content-center');

        data.forEach(item => {
            const cardCol = document.createElement('div');
            cardCol.classList.add('col-md-12', 'col-lg-12', 'col-sm-12', 'mb-1');

            const card = document.createElement('div');

            // Aplicar formato al valor del canon
            const valorCanonFormatted = new Intl.NumberFormat('es-CO').format(item.valor_canon);

            const cardContent = `
            <div class="row mb-4">
            <div class="col-md-12">
            <div class="property-entry horizontal d-lg-flex">

              <a href="#" class="property-thumbnail h-50">
                <div class="offer-type-wrap">
                  <h6 class="bg-danger text-white rounded p-2"> ${item.condicion}</h6>
                </div>
                <img src="https://somospropiedad.com/admin/fotos/${item.url_foto_principal}" alt="Image" class="img-fluid">
              </a>

              <div class="p-4 property-body">
                <h2 class="property-title"><a href="#">${item.tipoInmueble} - ${item.codigo}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> ${item.direccion}</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$ ${valorCanonFormatted}</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Habitaciones</span>
                    <span class="property-specs-number">${item.alcobas}</span>

                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number">${item.servicios}</span>

                  </li>
                  <li>
                    <span class="property-specs">&nbsp;m&sup2;</span>
                    <span class="property-specs-number">${item.area}</span>

                  </li>
                <li>
                    <span class="property-specs">Parqueadero</span>
                    <span class="property-specs-number">${item.parqueadero}</span>

                  </li>
                    <li>
                    <span class="property-specs">Cocina</span>
                    <span class="property-specs-number">${item.cocina}</span>

                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

<div class="modal fade" id="modalInfo${item.codigo}" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel"><i class="bi bi-ticket-detailed-fill"></i> Detalles de la Propiedad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="propertyDetails${item.codigo}">
              <div class="row">
                      <div class="col col-lg-4 col-md-4 col-sm-12">
                            <p class="prop-text">
                                <img src="img/icons/bed.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Alcobas</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.alcobas}</b></p>

                            <p class="prop-text">
                                <img src="img/icons/signage.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Parqueadero</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.parqueadero}</b></p>

                            <p class="prop-text">
                                <img src="img/icons/patio.png" width="30px" />
                            </p>
                            <p class="prop-text-modalt">Patio</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.patio}</b></p>
                        </div>
                        <div class="col col-md-4">
                            <p class="prop-text">
                                <img src="img/icons/toilet.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Baños</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.servicios}</b></p>
                            <p class="prop-text">
                                <img src="img/icons/area.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Área</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.area} m²</b></p>
                            <p class="prop-text">
                                <img src="img/icons/elevator.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Ascensor</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.ascensor}</b></p>
                        </div>
                        <div class="col col-md-4">
                            <p class="prop-text">
                                <img src="img/icons/kitchen.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Cocina</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.cocina}</b></p>
                            <p class="prop-text">
                                <img src="img/icons/level.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Nivel</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.nivel_piso}</b></p>
                            <p class="prop-text">
                                <img src="img/icons/closet.png" width="30px" />
                            </p>
                            <p class="prop-text-modal">Closets</p>
                            <p class="prop-numb-modal text-magenta-dark "><b>${item.closet}</b></p>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-magenta-dark text-white" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
`;


            function openPropertyModal(propertyId) {
                $(`#modalInfo${propertyId}`).modal('show'); // Abre el modal una vez se ha cargado la información
            }


            card.innerHTML = cardContent;
            cardCol.appendChild(card);
            cardContainer.appendChild(cardCol);

        });

        resultsContainer.appendChild(cardContainer);
        resultsContainer.appendChild(cardContainer);
        // Asignar evento click al botón "Ver más" de cada elemento
        const viewDetailsBtns = document.querySelectorAll('.view-details-btn');
        viewDetailsBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const propertyId = this.getAttribute('data-id');
                openPropertyModal(propertyId);
            });
        });
    }



    function updatePaginationInfo() {
        const currentPageSpan = document.getElementById('currentPage');
        const totalPagesSpan = document.getElementById('totalPages');
        const totalResultsSpan = document.getElementById(
            'totalResults'); // Nuevo elemento para mostrar el total de resultados

        if (currentPageSpan && totalPagesSpan && totalResultsSpan) {
            currentPageSpan.textContent = currentPage;
            totalPagesSpan.textContent = totalPages;
            totalResultsSpan.textContent =
                `Total: ${num_total_rows} resultados`; // Actualiza el texto con el total de resultados
        } else {
            console.error('Error: Elements not found.');
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>