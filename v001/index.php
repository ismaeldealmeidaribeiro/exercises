<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
  <header>
  </header>
  <main>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
      <?php for ($i = 0; $i < 3; $i++): ?>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide <?php echo $i + 1; ?>" <?php echo !$i ? ' class=\'active\' aria-current=\'true\'' : ''; ?>>
        </button>
      <?php endfor; ?>
      </div>
      <div class="carousel-inner">
        <?php for ($i = 0; $i < 3; $i++): ?>
          <div class="carousel-item <?php echo !$i ? ' active' : ''; ?>">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>
  <footer>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</html>