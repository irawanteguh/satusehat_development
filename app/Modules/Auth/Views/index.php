<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: #f0fdfa;
            color: #134e4a;
            font-family: system-ui, sans-serif;
        }
        main { padding: 2rem; max-width: 48rem; }
        h1 { font-size: clamp(2rem, 6vw, 3.5rem); margin: 0 0 1rem; }
        p { color: #475569; line-height: 1.6; }
        a { color: #0f766e; }
    </style>
</head>
<body>
    <main>
        <h1>Autentikasi</h1>
        <p>Modul autentikasi SATUSEHAT Development sedang disiapkan.</p>
        <a href="<?= esc(base_url(), 'attr') ?>">Kembali ke beranda</a>
    </main>
</body>
</html>
