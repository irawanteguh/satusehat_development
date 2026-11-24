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
    </style>
</head>
<body>
    <main>
        <h1><?= esc($title) ?></h1>
        <p>Selamat datang di SATUSEHAT Development.</p>
    </main>
</body>
</html>
