
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?> | Sidrah Tart &amp; Bakery</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">

    <!-- LOGO SIDRAH -->
    <a class="brand" href="index.php?page=beranda">
        <img
            src="assets/images/logo.png"
            alt="Logo Sidrah Tart & Bakery"
            onerror="this.style.display='none'"
        >

        <span>
            <b>Sidrah</b>
            <small>Tart &amp; Bakery</small>
        </span>
    </a>

    <!-- MENU MOBILE -->
    <button
        class="menu-toggle"
        aria-label="Buka menu"
        onclick="document.querySelector('.main-nav').classList.toggle('open')"
    >
        ☰
    </button>

    <!-- NAVIGASI -->
    <nav class="main-nav">

        <a class="<?= $page === 'beranda' ? 'active' : '' ?>"
           href="index.php?page=beranda">
            Beranda
        </a>

        <a class="<?= $page === 'profil' ? 'active' : '' ?>"
           href="index.php?page=profil">
            Profil
        </a>

        <a class="<?= $page === 'katalog' ? 'active' : '' ?>"
           href="index.php?page=katalog">
            Katalog
        </a>

        <a class="<?= $page === 'kontak' ? 'active' : '' ?>"
           href="index.php?page=kontak">
            Kontak
        </a>

    </nav>

    <!-- TOMBOL WHATSAPP -->
    <a
        class="btn btn-primary header-cta"
        href="https://wa.me/6281355436331"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Pesan melalui WhatsApp"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="currentColor"
            aria-hidden="true"
        >
            <path d="M20.52 3.48A11.87 11.87 0 0 0 12.06 0C5.5 0 .16 5.34.16 11.9c0 2.1.55 4.15 1.6 5.96L0 24l6.3-1.65a11.9 11.9 0 0 0 5.76 1.47h.01c6.56 0 11.9-5.34 11.9-11.9 0-3.18-1.24-6.17-3.45-8.44ZM12.06 21.8a9.88 9.88 0 0 1-5.03-1.37l-.36-.21-3.74.98 1-3.65-.23-.38a9.85 9.85 0 0 1-1.51-5.27c0-5.46 4.45-9.9 9.91-9.9a9.84 9.84 0 0 1 7.01 2.9 9.84 9.84 0 0 1 2.9 7c0 5.46-4.45 9.9-9.91 9.9Zm5.43-7.42c-.3-.15-1.77-.87-2.04-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.96 1.17-.18.2-.35.22-.65.07-.3-.15-1.26-.47-2.4-1.49-.89-.79-1.49-1.77-1.67-2.07-.18-.3-.02-.46.13-.61.14-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.37-.03-.52-.08-.15-.68-1.63-.93-2.23-.24-.58-.49-.5-.68-.51h-.58c-.2 0-.52.08-.8.37-.28.3-1.05 1.02-1.05 2.49s1.08 2.89 1.23 3.09c.15.2 2.12 3.24 5.14 4.54.72.31 1.28.5 1.72.64.72.23 1.38.2 1.9.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.18-1.42-.08-.12-.28-.2-.58-.35Z"/>
        </svg>

        <span>Pesan Sekarang</span>

    </a>

</header>

<main>
