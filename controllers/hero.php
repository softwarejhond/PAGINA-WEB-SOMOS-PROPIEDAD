<?php
// Conexión a la base de datos
include("conexion.php");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la base de datos
$query = "SELECT * FROM slider WHERE estado=1";
$result = $conn->query($query);

if ($result->num_rows > 0): ?>
<div class="slide-one-item home-slider owl-carousel">
    <?php while ($row = $result->fetch_assoc()): ?>
    <div class="site-blocks-cover overlay" style="background-image: url(https://adminweb.somospropiedad.com/admin/img/carousel/<?php echo htmlspecialchars($row['url_image']); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <span class="d-inline-block bg-<?php echo $row['titulo'] === 'Para Alquilar' ? 'success' : 'danger'; ?> text-white px-3 mb-3 property-offer-type rounded">
                        <?php echo htmlspecialchars($row['titulo']); ?>
                    </span>
                    <h1 class="mb-2"><?php echo htmlspecialchars($row['descripcion']); ?></h1>
                    <p class="mb-5"><strong class="h2 font-weight-bold">$<?php echo number_format($row['texto_boton'], 2); ?></strong></p>
                    <p><a href="<?php echo htmlspecialchars($row['link']); ?>" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Ver Detalles</a></p>
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