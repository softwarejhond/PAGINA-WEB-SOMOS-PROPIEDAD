<?php
require('conexion.php');

$buscar = isset($_GET['buscar']) ? $conn->real_escape_string($_GET['buscar']) : '';

define('NUM_ITEMS_BY_PAGE', 12);

$sql_count = "SELECT COUNT(*) as total_products 
FROM proprieter
INNER JOIN municipios ON proprieter.Municipio = municipios.id_municipio
WHERE codigo LIKE '%$buscar%' AND nombre_inquilino = '' AND estadoPropietario = 'ACTIVO'";

$result_count = $conn->query($sql_count);

if ($result_count) {
    $row_count = $result_count->fetch_assoc();
    $num_total_rows = $row_count['total_products'];
} else {
    $num_total_rows = 0;
}
?>

<!-- ──────────────────────────────────────────────
     SECCIÓN PRINCIPAL CON PARTÍCULAS DE FONDO
────────────────────────────────────────────── -->
<div class="cardfilter-wrapper">
<div id="particles-js"></div>

<!-- Formulario de filtros -->
<div class="site-section site-section-sm pb-0">
    <div class="container">
        <div class="row">
            <form id="filterForm" class="form-search form-search--glass col-md-12" style="margin-top: -100px; border-radius: 14px;">
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
                                <?php
                                for ($i = 0; $i <= 50; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
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
                                <?php
                                for ($i = 0; $i <= 10; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
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
<nav aria-label="Paginación de propiedades">
    <ul id="paginationContainer" class="pagination justify-content-center pagination--glass">
    </ul>
    <div class="paginationControls mb-3 float-right d-none">
        <span id="pageInfo"></span>
        <span id="totalResults"></span>
    </div>
</nav>
<br><br>
</div><!-- /.cardfilter-wrapper -->

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
            resultsContainer.innerHTML = '<p class="text-center py-5">No se encontraron resultados.</p>';
            return;
        }

        const cardContainer = document.createElement('div');
        cardContainer.classList.add('row', 'justify-content-center');

        data.forEach((item) => {
            const cardCol = document.createElement('div');
            cardCol.classList.add('col-md-6', 'col-lg-4', 'col-sm-12', 'mb-4');

            const valorCanonFormatted = new Intl.NumberFormat('es-CO').format(item.valor_canon);
            const isRent = item.condicion && item.condicion.toUpperCase().includes('ALQUILER');

            const fotos = Array.isArray(item.fotos) && item.fotos.length > 0
                ? item.fotos
                : ['placeholder.jpg'];

            const carouselItems = fotos.map((foto, idx) => {
                const src = `https://somospropiedad.com/admin/fotos/${item.codigo}/${foto}`;
                return `<div class="carousel-item ${idx === 0 ? 'active' : ''}">
                    <img src="${src}" class="prop-card-img d-block w-100"
                         alt="Foto propiedad ${item.codigo}"
                         onerror="this.onerror=null;this.src='https://somospropiedad.com/admin/images/no-image.png'">
                  </div>`;
            }).join('');

            cardCol.innerHTML = `
              <div class="prop-card-glass h-100 d-flex flex-column">
                <div id="carousel${item.codigo}" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner prop-carousel-inner">
                    ${carouselItems}
                  </div>
                  <button class="carousel-control-prev" type="button"
                          data-bs-target="#carousel${item.codigo}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                  </button>
                  <button class="carousel-control-next" type="button"
                          data-bs-target="#carousel${item.codigo}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                  </button>
                </div>
                <div class="prop-card-body flex-grow-1 d-flex flex-column p-3">
                  <span class="prop-badge prop-badge--${isRent ? 'rent' : 'sale'} mb-2">
                    <i class="fas fa-${isRent ? 'key' : 'tag'} me-1"></i>${item.condicion}
                  </span>
                  <h6 class="prop-card-title mb-1">
                    ${item.tipoInmueble}
                    <span class="prop-card-code">${item.codigo}</span>
                  </h6>
                  <ul class="prop-card-info flex-grow-1 mt-1 mb-2">
                    <li><i class="bi bi-geo-alt-fill"></i> ${item.direccion}</li>
                    <li>
                      <i class="bi bi-bar-chart-steps"></i> Nivel ${item.nivel_piso}
                      &nbsp;&nbsp;<i class="bi bi-bounding-box"></i> ${item.area} m²
                    </li>
                  </ul>
                  <div class="prop-card-price">$ ${valorCanonFormatted}</div>
                  <a href="https://somospropiedad.com/admin/detalle_inmueble.php?codigo=${item.codigo}"
                     target="_blank" rel="noopener" class="prop-card-cta mt-2">
                    Ver Propiedad&nbsp;<i class="fas fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            `;

            cardContainer.appendChild(cardCol);
        });

        resultsContainer.appendChild(cardContainer);

        // Inicializar carruseles Bootstrap creados dinámicamente
        if (typeof bootstrap !== 'undefined' && bootstrap.Carousel) {
            cardContainer.querySelectorAll('.carousel').forEach(function(el) {
                new bootstrap.Carousel(el, { interval: 3500, ride: true, touch: true });
            });
        }

        // Reinicializar particles para que el canvas se redimensione al nuevo alto del wrapper
        reinitParticles();
    }

    function updatePaginationInfo() {
        const totalResultsSpan = document.getElementById('totalResults');
        if (totalResultsSpan) {
            totalResultsSpan.textContent = '';
        }
    }
</script>

<!-- Particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
const PARTICLES_CONFIG = {
    "particles": {
        "number": { "value": 250, "density": { "enable": true, "value_area": 900 } },
        "color": { "value": "#ec008c" },
        "shape": { "type": "circle" },
        "opacity": {
            "value": 0.4,
            "random": true,
            "anim": { "enable": true, "speed": 1.2, "opacity_min": 0.05, "sync": false }
        },
        "size": { "value": 3, "random": true },
        "line_linked": { "enable": false },
        "move": {
            "enable": true, "speed": 1.4, "direction": "none",
            "random": true, "straight": false, "out_mode": "out"
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": { "enable": true, "mode": "repulse" },
            "onclick": { "enable": false },
            "resize": true
        }
    },
    "retina_detect": true
};

function reinitParticles() {
    // Destruir instancia anterior si existe para evitar canvas apilados
    if (window.pJSDom && window.pJSDom.length > 0) {
        window.pJSDom[0].pJS.fn.vendors.destroypJS();
        window.pJSDom = [];
    }
    particlesJS("particles-js", PARTICLES_CONFIG);
}

// Inicialización primera carga
reinitParticles();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>