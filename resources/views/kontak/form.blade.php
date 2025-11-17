
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], 
        input[type="email"], 
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Penting agar padding tidak melebarkan elemen */
            font-size: 16px;
        }
        textarea {
            resize: vertical;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .message-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .message-error ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Form Kontak</h1>

        {{-- Menampilkan Pesan Sukses (Ketentuan b) --}}
        @if (session('success'))
            <div class="message-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Menampilkan Pesan Error Validasi Server (Ketentuan b) --}}
        @if ($errors->any())
            <div class="message-error">
                <p>Mohon koreksi kesalahan berikut:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('kontak.process') }}">
            @csrf {{-- Keamanan CSRF --}}

            <div>
                <label for="nama_kontak">Nama Kontak (Max 20):</label>
                {{-- Validasi HTML5 (c): required & maxlength="20" --}}
                <input type="text" id="nama_kontak" name="nama_kontak" 
                       value="{{ old('nama_kontak') }}"
                       required maxlength="20">
            </div>
            
            <div>
                <label for="email">Email (Max 50):</label>
                {{-- Validasi HTML5 (c): required & type="email" & maxlength="50" --}}
                <input type="email" id="email" name="email" 
                       value="{{ old('email') }}"
                       required maxlength="50">
            </div>
            
            <div>
                <label for="pesan">Pesan (Max 255):</label>
                <textarea id="pesan" name="pesan" rows="5"
                          required maxlength="255">{{ old('pesan') }}</textarea>
            </div>
            
            <button type="submit">Kirim Pesan</button>
        </form>
        
        {{-- Keamanan Anti XSS (f) dan htmlentities (e): --}}
        {{-- Output escaping otomatis oleh Blade tetap bekerja di latar belakang. --}}
    </div>

</body>
</html>