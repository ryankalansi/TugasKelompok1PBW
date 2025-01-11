<?php
// Data tutorial
$tutorials = [
    [
        'judul' => 'Bagaimana Server Bekerja',
        'konten' => 'Server adalah komputer atau sistem yang menyediakan layanan untuk klien. Ketika klien mengirim permintaan (request), server akan memprosesnya dan memberikan tanggapan (response).',
        'gambar' => 'assets/img/server_diagram.jpg',
    ],
    [
        'judul' => 'Dasar-Dasar Server-Side Scripting',
        'konten' => 'Server-side scripting memungkinkan pembuatan aplikasi web dinamis. Contoh bahasa pemrograman server-side: PHP, Node.js, Python, Ruby.',
        'gambar' => null,
    ],
    [
        'judul' => 'Membangun Server dengan Node.js',
        'konten' => 'Node.js adalah runtime JavaScript yang memungkinkan kita menjalankan JavaScript di sisi server. Berikut adalah contoh server sederhana menggunakan Node.js:',
        'kode' => 'const http = require(\'http\'); 
const server = http.createServer((req, res) => {
    res.writeHead(200, { \'Content-Type\': \'text/plain\' });
    res.end(\'Hello, World!\');
});
server.listen(3000, () => console.log(\'Server berjalan di http://localhost:3000\'));',
        'gambar' => null,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Pemrograman Server</title>
    <link rel="stylesheet" href="../../css/pengenalan.css">
</head>
<body>
    <header>
        <h1>Pengenalan Pemrograman Server</h1>
        <nav>
            <ul>
                <li><a href="#intro">Intro</a></li>
                <li><a href="#concepts">Bagaimana Server Bekerja</a></li>
                <li><a href="#scripting">Server-Side Scripting</a></li>
                <li><a href="#nodejs">Node.js</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php foreach ($tutorials as $tutorial): ?>
            <section>
                <h2><?php echo $tutorial['judul']; ?></h2>
                <p><?php echo $tutorial['konten']; ?></p>
                <?php if (!empty($tutorial['gambar'])): ?>
                    <img src="<?php echo $tutorial['gambar']; ?>" alt="Gambar terkait <?php echo $tutorial['judul']; ?>">
                <?php endif; ?>
                <?php if (!empty($tutorial['kode'])): ?>
                    <pre><?php echo htmlspecialchars($tutorial['kode']); ?></pre>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; 2025 Pengenalan Pemrograman Server. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
