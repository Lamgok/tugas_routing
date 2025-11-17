<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak</title>
</head>
<body>

    <h1>Kirim Pesan Kontak</h1>

    @if (session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tampilkan Error Validasi Sisi Server --}}
    @if ($errors->any())
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; margin-bottom: 15px;">
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
            <label for="nama_kontak">Nama Kontak:</label><br>
            {{-- Validasi HTML5 (c): required & maxlength="20" --}}
            <input type="text" id="nama_kontak" name="nama_kontak" 
                   value="{{ old('nama_kontak') }}"
                   required maxlength="20" style="width: 300px;">
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label><br>
            {{-- Validasi HTML5 (c): required & type="email" & maxlength="50" --}}
            <input type="email" id="email" name="email" 
                   value="{{ old('email') }}"
                   required maxlength="50" style="width: 300px;">
        </div>
        <br>
        
        <div>
            <label for="pesan">Pesan:</label><br>
            {{-- Validasi HTML5 (c): required & maxlength="255" --}}
            <textarea id="pesan" name="pesan" rows="5"
                      required maxlength="255" style="width: 300px;">{{ old('pesan') }}</textarea>
        </div>
        <br>
        
        <button type="submit">Kirim Pesan</button>
    </form>
    
    <hr>
    
    {{-- Keamanan Anti XSS (f) dan htmlentities (e): --}}
    {{-- Blade secara otomatis meng-escape output (seperti menjalankan htmlentities/htmlspecialchars) --}}
    {{-- Contoh: Jika input dari database (misalnya pesan yang disimpan) mengandung skrip berbahaya --}}
    @php
        $db_output_pesan = "Terima kasih! <script>alert('XSS Test');</script> Aman.";
    @endphp
    
    <h3>Demo Keamanan Anti XSS/HTML Entities</h3>
    <p>Output dari variabel yang mungkin berbahaya:</p>
    <div style="border: 1px dashed gray; padding: 10px;">
        {{ $db_output_pesan }} 
        {{-- Script tidak akan tereksekusi, melainkan dicetak sebagai string yang aman (e, f) --}}
    </div>

</body>
</html>