<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
include("conexion.php");

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la base de datos
$query = "SELECT * FROM slider WHERE estado=1";
$result = $conn->query($query);

if ($result && $result->num_rows > 0): ?>
<div class="slide-one-item home-slider owl-carousel">
    <?php while ($row = $result->fetch_assoc()): ?>
    <div class="site-blocks-cover overlay" 
         style="
            background-image: url('https://somospropiedad.com/admin/img/carousel/<?php echo htmlspecialchars($row['url_image']); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 500px; /* Ajusta la altura según tus necesidades */
         " 
         data-aos="fade" 
         data-stellar-background-ratio="0.5">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <span class="d-inline-block bg-<?php echo htmlspecialchars($row['titulo'] === 'EN ALQUILER' ? 'success' : 'danger'); ?> text-white px-3 mb-3 property-offer-type rounded">
                        <?php echo htmlspecialchars($row['titulo']); ?>
                    </span>
                    <h1 class="mb-2"><?php echo htmlspecialchars($row['descripcion']); ?></h1>
                    <p class="mb-5"><strong class="h2 font-weight-bold">$<?php echo number_format((float)$row['texto_boton'], 2); ?></strong></p>
                    <p><a href="<?php echo htmlspecialchars($row['url_boton']); ?>" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver Detalles</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php else: ?>
<p>No se encontraron propiedades.</p>
<?php endif;
?>
