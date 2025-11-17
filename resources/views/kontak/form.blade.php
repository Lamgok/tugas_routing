// resources/views/kontak/form.blade.php (Pastikan nama file ini)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak</title>
</head>
<body>

    <h1>Form Kontak</h1>

    @if (session('success'))
        <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Menampilkan pesan error validasi server --}}
    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
            <p>Mohon koreksi kesalahan berikut:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('kontak.process') }}">
        @csrf

        <div>
            <label for="nama_kontak">Nama Kontak (Max 20):</label><br>
            {{-- Validasi HTML5 (c): required & maxlength --}}
            <input type="text" id="nama_kontak" name="nama_kontak" 
                   value="{{ old('nama_kontak') }}"
                   required maxlength="20">
        </div>
        <br>
        
        <div>
            <label for="email">Email (Max 50):</label><br>
            {{-- Validasi HTML5 (c): required & type="email" & maxlength --}}
            <input type="email" id="email" name="email" 
                   value="{{ old('email') }}"
                   required maxlength="50">
        </div>
        <br>
        
        <div>
            <label for="pesan">Pesan (Max 255):</label><br>
            <textarea id="pesan" name="pesan" rows="5"
                      required maxlength="255">{{ old('pesan') }}</textarea>
        </div>
        <br>
        
        <button type="submit">Kirim Pesan</button>
    </form>
    
    {{-- Keamanan Anti XSS (f) dan htmlentities (e):
         Blade secara otomatis meng-escape (membersihkan) output yang dicetak dengan {{ ... }}. --}}

</body>
</html>