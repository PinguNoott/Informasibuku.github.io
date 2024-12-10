<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kawaii Book Display</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Fredoka+One&display=swap">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            background-color: #E3F2FD; /* Pastel blue background */
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .content {
            padding: 20px;
            overflow-y: auto;
            max-height: 100vh;
            position: relative;
        }
        .card-header {
            text-align: center;
            font-family: 'Fredoka One', cursive;
            font-size: 2.5rem;
            font-weight: bold;
            color: #FF89BB; /* Pastel pink */
            margin-bottom: 20px;
            position: relative;
            animation: bounceIn 1.5s ease-in-out;
        }
        .card-header::after {
            font-size: 1.5rem;
            color: #FFD700; /* Sparkle emoji */
            animation: sparkle 2s infinite;
            position: absolute;
            right: -25px;
            top: 10px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* More spacious grid */
            gap: 30px;
            padding: 10px;
        }
        .card {
            background: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 25px;
            position: relative;
            animation: float 3s ease-in-out infinite;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px) scale(1.05);
        }
        .card img {
            width: 90%;
            height: auto;
            border-radius: 10px;
            border: 3px solid #FFB6C1; /* Soft pink border */
            transition: transform 0.3s ease;
        }
        .card img:hover {
            transform: scale(1.1) rotate(5deg);
        }
        .card-info {
            font-size: 1.1rem;
            color: #FF89BB;
            margin-top: 15px;
        }
        .btn {
            background-color: #FF89BB;
            color: white;
            border-radius: 30px;
            padding: 12px 25px;
            font-weight: bold;
            text-transform: capitalize;
            margin-top: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #FF6FAE;
            box-shadow: 0px 8px 15px rgba(255, 137, 187, 0.4);
            transform: translateY(-3px);
        }

        /* Animations */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes bounceIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.5;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    
    </style>
</head>
<body>
    <div class="content">
        <div class="card-header">
            Informasi buku
        </div>

        <div class="grid-container">
            <?php foreach ($bukuData as $buku): ?>
                <div class="card">
                    <div class="card-img">
                        <?php if ($buku->foto): ?>
                            <img src="<?= base_url('images/' . $buku->foto) ?>" alt="Foto Buku">
                        <?php else: ?>
                            <span>No image available</span>
                        <?php endif; ?>
                    </div>
                    <div class="card-info">
                        <p><?= $buku->judul ?></p>
                    </div>
                    <div class="card-actions">
                        <a href="<?= base_url('home/detail/' . $buku->id_buku) ?>">
                            <button class="btn">Lihat Detail</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
