<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Ahmad",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Saepulloh",
            "MataKuliah" => [
            ["MataKuliah" => "RPL"],
            ["MataKuliah" => "Database"],
            ["MataKuliah" => "Biologi"]],
            
            "Hobi" => [
            ["Hobi" => "Memancing"],
            ["Hobi" => "Membaca"]]],

            [ "nama" => "Jamaludin",
            "MataKuliah" => [
            ["MataKuliah" => "Produktif"],
            ["MataKuliah" => "Fisika"],
            ["MataKuliah" => "Hukum"]],

            "Hobi" => [
            ["Hobi" => "Menulis"],
            ["Hobi" => "Membaca"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Arif",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Membaca Buku"],
            ["Hobi" => "Menonton Film"]]],

            [ "nama" =>
             "Nadin",
            "MataKuliah" => [
            ["MataKuliah" => "Sejarah"],
            ["MataKuliah" => "Kimia"],
            ["MataKuliah" => "Biologi"]],
            
            "Hobi" => [
            ["Hobi" => "SepakBola"],
            ["Hobi" => "Atletik"]]],

            [ "nama" => "Zahra",
            "MataKuliah" => [
            ["MataKuliah" => "Bahasa"],
            ["MataKuliah" => "Konseling"],
            ["MataKuliah" => "Sejarah"]],

            "Hobi" => [
            ["Hobi" => "Membaca"],
            ["Hobi" => "Menulis"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
         
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo"<br>";
    }
    echo "</ul>";
    echo"<br>";
    }
?>