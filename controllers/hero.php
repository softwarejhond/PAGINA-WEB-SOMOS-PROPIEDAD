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
    <?php while ($row = $result->fetch_assoc()):
        $isRent   = strtoupper(trim($row['titulo'])) === 'EN ALQUILER';
        $badgeMod = $isRent ? 'rent' : 'sale';
        $badgeIcon = $isRent ? 'fa-key' : 'fa-home';
    ?>
    <div class="hero-slide"
         style="background-image: url('https://somospropiedad.com/admin/img/carousel/<?php echo htmlspecialchars($row['url_image']); ?>');"
         data-stellar-background-ratio="0.5">
        <div class="hero-slide__gradient"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-8 col-lg-6 hero-slide__content">
                    <span class="hero-badge hero-badge--<?php echo $badgeMod; ?>">
                        <i class="fas <?php echo $badgeIcon; ?>"></i>
                        <?php echo htmlspecialchars($row['titulo']); ?>
                    </span>
                    <h1 class="hero-slide__title"><?php echo htmlspecialchars($row['descripcion']); ?></h1>
                    <div class="hero-slide__price">
                        <span class="hero-slide__price-label">Precio</span>
                        <span class="hero-slide__price-value">
                            $<?php echo number_format((float)$row['texto_boton'], 0, ',', '.'); ?>
                        </span>
                    </div>
                    <a href="<?php echo htmlspecialchars($row['url_boton']); ?>" class="hero-slide__cta">
                        Ver Propiedad &nbsp;<i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php else: ?>
<p class="text-center py-5">No se encontraron propiedades activas.</p>
<?php endif;
?>
