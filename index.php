<!doctype html>
<html lang="id">
  <head>
    <?php require __DIR__ . "/partials/head.php"; ?>
  </head>

  <body class="font-sans text-ink">
    <div class="relative min-h-screen overflow-hidden grain noise">
      <?php require __DIR__ . "/partials/site-header.php"; ?>

      <main class="mx-auto max-w-6xl px-6 pb-14 pt-10 md:pb-24 md:pt-14">
        <?php
        // Keep page sections inline for now; later we can split each section into partials as it grows.
        ?>
        <!-- HERO + SECTIONS (copied from index.html) -->
        <?php
        // NOTE: index.html remains as a static reference.
        ?>
        <?php require __DIR__ . "/partials/page-index-sections.php"; ?>

        <?php require __DIR__ . "/partials/site-footer.php"; ?>
      </main>
    </div>
  </body>
</html>

