<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUpload(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'berkas' => 'required|file|image|max:10000', 
        ]);

        // Ambil ekstensi file asli
        $extFile = $request->berkas->getClientOriginalExtension();
        // Buat nama file baru dengan timestamp
        $namaFile = 'web-' . time() . '.' . $extFile;
        // Simpan file di direktori 'public'
        $path = $request->berkas->storeAs('public', $namaFile);

        // Buat URL publik untuk file
        $pathBaru = asset('storage/' . $namaFile);

        // Tampilkan hasil
        echo "Proses upload berhasil, file berada di: $path";
        echo "<br>";
        echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
    }
}
