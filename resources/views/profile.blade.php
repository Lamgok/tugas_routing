<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        /* CSS yang Anda berikan (dihilangkan untuk meringkas) */
        /* Pastikan CSS ini tetap ada di file Anda */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #333;
            --background-color: #f4f7f6;
            --card-bg: #ffffff;
            --shadow-light: 0 10px 30px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.1);
            --footer-color: #666;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 16px;
            box-shadow: var(--shadow-light);
            width: 100%;
            max-width: 450px;
            padding: 30px;
            text-align: left;
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: var(--shadow-hover);
        }

        .card-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .card-header h1 {
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-size: 1.8em;
        }

        .card-header h2 {
            color: var(--primary-color);
            margin-top: 0;
            font-size: 1.2em;
            font-weight: 500;
            border-bottom: 2px solid var(--primary-color);
            display: inline-block;
            padding-bottom: 5px;
        }

        .profile-details ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .profile-details li {
            padding: 10px 0;
            border-bottom: 1px dashed #eee;
            display: flex;
            line-height: 1.6;
            color: #555;
        }

        .profile-details li:last-child {
            border-bottom: none;
        }

        .profile-details strong {
            color: var(--secondary-color);
            margin-right: 8px;
            min-width: 120px;
            font-weight: 600;
        }

        .profile-details span {
            flex-grow: 1;
        }

        .star {
            font-size: 1.1em;
            vertical-align: middle;
        }

        .card-footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            text-align: center;
        }

        .card-footer p {
            margin: 0;
            font-size: 0.85em;
            color: var(--footer-color);
        }

        @media (max-width: 500px) {
            .card {
                margin: 0;
                border-radius: 0;
            }

            body {
                padding: 0;
            }

            .profile-details li {
                flex-direction: column;
            }

            .profile-details strong {
                margin-right: 0;
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <header class="card-header">
            <h1>Profil Mahasiswa</h1>
            <h2>{{ $data['nama'] }}</h2>
        </header>

        <section class="profile-details">
            <ul>
                <li>
                    <strong>NIM:</strong> <span>{{ $data['nim'] }}</span>
                </li>
                <li>
                    <strong>Program Studi:</strong> <span>{{ $data['prodi'] }}</span>
                </li>
                <li>
                    <strong>Hobi:</strong> 
                    <span>
                        {{ implode(', ', $data['hobi']) }}
                    </span>
                </li>
                <li>
                    <strong>Cita-cita:</strong> 
                    <span>
                        {{ $data['cita'] }} <span class="star">⭐</span>
                    </span>
                </li>
            </ul>
        </section>

        <footer class="card-footer">
            <p>&copy; {{ date('Y') }} - Profil Laravel Pertamaku</p>
        </footer>
    </div>
</body>
</html>