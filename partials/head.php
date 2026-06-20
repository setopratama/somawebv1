<?php
// Shared <head> for static pages (no build step; Tailwind via CDN).
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Somatech</title>

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
  rel="stylesheet"
/>

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: { sans: ["Plus Jakarta Sans", "ui-sans-serif", "system-ui"] },
        colors: {
          ink: "#0B0D12",
          paper: "#F6F6F6",
          fog: "#EDEDED",
          lime: "#B7E37A",
          lime2: "#79B640",
        },
        boxShadow: {
          soft: "0 18px 60px rgba(0,0,0,.12)",
        },
      },
    },
  };
</script>

<style>
  .grain {
    background-image:
      radial-gradient(1200px 500px at 10% 0%, rgba(0, 0, 0, 0.06), transparent 60%),
      radial-gradient(1000px 500px at 85% 20%, rgba(0, 0, 0, 0.07), transparent 60%),
      radial-gradient(900px 500px at 30% 90%, rgba(0, 0, 0, 0.06), transparent 60%),
      linear-gradient(#f7f7f7, #f3f3f3);
  }
  .noise:before {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    opacity: 0.055;
    mix-blend-mode: multiply;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='180' height='180'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='180' height='180' filter='url(%23n)' opacity='.55'/%3E%3C/svg%3E");
  }
</style>

