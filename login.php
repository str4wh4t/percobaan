<?php
session_start();

// Contoh simulasi data login
$_SESSION['username'] = 'unnes';
$_SESSION['login_count'] = 1;
$_SESSION['data'] = [
    [
        'username' => 'unnes',
        'password' => '1234',
        'login_at' => date('Y-m-d H:i:s')
    ]
];

$username = $_SESSION['username'];
$login_count = $_SESSION['login_count'];
$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UNNES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0a192f, #112240);
            font-family: "Poppins", sans-serif;
            color: white;
        }

        .dashboard-card {
            background: #ffffff10;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .dashboard-card img {
            width: 140px;
            margin-bottom: 15px;
        }

        .dashboard-card h2 {
            font-size: 22px;
            font-weight: 600;
            color: #f1f1f1;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .dashboard-card p {
            font-size: 15px;
            margin-bottom: 10px;
            color: #e0e0e0;
        }

        .btn-logout {
            background: #00bfa6;
            border: none;
            border-radius: 10px;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: #1de9b6;
            transform: translateY(-2px);
        }

        .data-box {
            background-color: #ffffff15;
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            text-align: left;
            font-size: 13px;
            color: #cfd8dc;
        }
    </style>
</head>
<body>
    <div class="dashboard-card">
        <img src="https://unnes.ac.id/lppm/wp-content/uploads/sites/16/2023/02/logo-unnes-horizontal-white-yellow.png" alt="Logo UNNES">
        <h2>Selamat Datang</h2>
        <p><strong><?= htmlspecialchars($username) ?></strong>, Anda telah login sebanyak <strong><?= $login_count ?></strong> kali.</p>
        <a href="logout.php" class="btn btn-logout">Logout</a>

        <div class="data-box mt-3">
            <pre><?php print_r($data); ?></pre>
        </div>
    </div>
</body>
</html>