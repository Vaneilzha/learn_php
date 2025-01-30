<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM SISWA SMKN 1 BANYUWANGI</h1>
    <form action="data.php" method="post">
        <p>Silahkan isi biodata berikut!</p>
        NISN : <input type="number" name="nisn"> <br>
        Nama Lengkap : <input type="text" name="nama lengkap"> <br>
        Tempat Lahir : <input type="text" name="tempat lahir"> <br>
        
        <p>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal">
        </p>

        <p>
            <p>Alamat :</p>
            <textarea name="alamat" cols= "40" rows="10"></textarea>
        </p>

        Asal Sekolah : <input type="text" name="asal sekolah"> <br>

        <p>
            <label>Gender :</label>
            <input type="radio" name="gender" value="L">Laki-Laki
            <input type="radio" name="gender" value="P">Perempuan
        </p>

        <p>
            <label>Agama :</label>
            <select name="Agama" id="">
                <option value="0">Silahkan pilih agama anda</option>
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Khatolik</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Konghucu</option>
            </select>
        </p>

        <p>
            <label>Pilihan Jurusan Pertama :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="AKEUL">Akutansi Keuangan Lembaga</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
                <option value="PM">Pemasaran</option>
                <option value="PH">Perhotelan</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</optional>
                <option value="BCF">BoardCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="Kl">Kuliner</option>
            </select>
        </p>

        <p>
            <label>Pilihan Jurusan Kedua :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="AKEUL">Akutansi Keuangan Lembaga</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
                <option value="PM">Pemasaran</option>
                <option value="PH">Perhotelan</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</optional>
                <option value="BCF">BoardCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="Kl">Kuliner</option>
            </select>
        </p>

        <p>
            <label>Pilihan Jurusan Ketiga :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="AKEUL">Akutansi Keuangan Lembaga</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
                <option value="PM">Pemasaran</option>
                <option value="PH">Perhotelan</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</optional>
                <option value="BCF">BoardCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="Kl">Kuliner</option>
            </select>
        </p>

        <p>
            <label>Organisasi / Ekstrakulikuler :</label>
            <input type="checkbox" name="OSIS">Organisasi Siswa Intra Sekolah
            <input type="checkbox" name="GDS">Gerakan Disiplin Sekolah
            <input type="checkbox" name="DA">Dewan Ambalan <br>
            <input type="checkbox" name="PMR">Palang Merah Remaja
            <input type="checkbox" name="REMAS">Remaja Masjid
            <input type="checkbox" name="PA">Pecinta Alam <br>
            <input type="checkbox" name="LH">Laskar Hijau
            <input type="checkbox" name="TEATER">Teater Kusuma
            <input type="checkbox" name="PASKIB">Paskibra <br>
            <input type="checkbox" name="ENCASA">English Club Esemkasa
            <input type="checkbox" name="FUTSAL">Futsal
            <input type="checkbox" name="BASKET">Basket <br>
            <input type="checkbox" name="VOLLY">Volly
            <input type="checkbox" name="TARI">Tari
        </p>

        <p>
            <input type="submit" name="submit" value="Masuk">
        </p>

    </form>
</body>
</html>