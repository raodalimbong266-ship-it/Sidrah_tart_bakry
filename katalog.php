
<?php
$products = [];
$catalogError = '';

if (!isset($pdo) || !($pdo instanceof PDO)) {
    $catalogError = 'Koneksi database belum tersedia.';
} else {
    try {
        $sql = "SELECT
                    p.id_produk,
                    p.nama_produk,
                    p.harga,
                    p.nama_file_foto,
                    k.slug
                FROM produk AS p
                LEFT JOIN kategori_produk AS k
                    ON p.id_kategori = k.id_kategori
                WHERE p.status = 'aktif'
                ORDER BY p.id_produk ASC";

        $stmt = $pdo->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($products)) {
            $catalogError = 'Data produk belum ditemukan. Periksa isi tabel produk dan status produk.';
        }

    } catch (PDOException $e) {
        $catalogError = 'Kesalahan membaca produk: ' . $e->getMessage();
    }
}

$categoryFilterMap = [
    'donat' => 'donat',
    'kue-tart' => 'tart',
    'roti' => 'roti',
    'aneka-kue' => 'kue',
    'lainnya' => 'lainnya'
];
?>

<section class="hero hero-inner catalog-hero">
    <div class="hero-copy">
        <p class="script">Katalog Produk</p>
        <h1>Aneka Rasa, Satu Cerita ♡</h1>
        <p>
            Lihat beberapa contoh produk kami.<br>
            Setiap pesanan dibuat sesuai request ya!
        </p>
    </div>

    <img class="inner-hero-image"
         src="assets/images/hero-donat.jpg"
         alt="Aneka donat">
</section>

<section class="section catalog-section">

    <div class="filter-row">
        <button class="filter-btn selected" data-filter="all">Semua</button>
        <button class="filter-btn" data-filter="donat">Donat</button>
        <button class="filter-btn" data-filter="tart">Kue Tart</button>
        <button class="filter-btn" data-filter="roti">Roti &amp; Roti Kecil</button>
        <button class="filter-btn" data-filter="kue">Aneka Kue</button>
        <button class="filter-btn" data-filter="lainnya">Lainnya</button>
    </div>

    <div class="product-grid catalog-grid">

        <?php if (!empty($products)): ?>

            <?php foreach ($products as $product): ?>

                <?php
                $slug = $product['slug'] ?? '';
                $filterCategory = $categoryFilterMap[$slug] ?? 'lainnya';

                $filename = $product['nama_file_foto'] ?? '';
                $image = 'assets/images/' . $filename;
                ?>

                <article class="product-card"
                         data-category="<?= htmlspecialchars($filterCategory) ?>">

                    <img
                        src="<?= htmlspecialchars($image) ?>"
                        alt="<?= htmlspecialchars($product['nama_produk']) ?>"
                        onerror="this.onerror=null;this.src='assets/images/hero-donat.jpg';"
                    >

                    <h3>
                        <?= htmlspecialchars($product['nama_produk']) ?>
                    </h3>

                    <p class="product-price">
                        <?php if ($product['harga'] !== null): ?>
                            Rp <?= number_format((float)$product['harga'], 0, ',', '.') ?>
                        <?php else: ?>
                            Hubungi untuk informasi harga
                        <?php endif; ?>
                    </p>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <p class="catalog-error">
                <?= htmlspecialchars($catalogError) ?>
            </p>

        <?php endif; ?>

    </div>
</section>

<section class="instagram-cta">

    <div class="instagram-icon">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="32" height="32"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="1.8"
             stroke-linecap="round"
             stroke-linejoin="round"
             aria-hidden="true">
            <rect x="3" y="3" width="18" height="18" rx="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="0.8" fill="currentColor"/>
        </svg>
    </div>

    <div>
        <h2>Masih banyak kreasi menarik lainnya!</h2>
        <p>
            Lihat koleksi lengkap kue, roti, donat,
            dan inspirasi pesanan di Instagram kami.
        </p>
    </div>

    <a class="btn btn-primary"
       href="https://www.instagram.com/sidrahtart/"
       target="_blank"
       rel="noopener noreferrer">

        <svg xmlns="http://www.w3.org/2000/svg"
             width="20" height="20"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="1.8"
             stroke-linecap="round"
             stroke-linejoin="round"
             aria-hidden="true">
            <rect x="3" y="3" width="18" height="18" rx="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="0.8" fill="currentColor"/>
        </svg>

        Lihat Produk Lainnya di Instagram →
    </a>

</section>
