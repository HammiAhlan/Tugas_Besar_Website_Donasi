<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Untuk Bersama</title>
</head>
<body>
    <header>
        <h3>Form Donasi | Donasi Yuk!</h3>
    </header>

    <form action="proses-pendaftaran.php"method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <textarea name="Nama"></textarea>
            </p>
            <p>
                <label for="telepon">Telepon/HP :</label>
                <input type="int" name="Telepon/HP" placeholder="" />

            </p>
            <p>
                <label for="Email">E-mail :</label>
                <input type="text" name="e-mail" placeholder="" />
            </p>
            <p>
                <label for="Jenis Donasi">Jenis Donasi :</label>
                <select name="Jenis Donasi">
                    <option>Zakat</option>
                    <option>Sedekah</option>
                    <option>Wakaf</option>
                    <option>Kemanusiaan</option>
                </select>
            </p>
            <p>
                <label for="Pengkhususan Donasi">Pengkhususan Donasi:</label>
                <select name="Pengkhususan Donasi">
                    <option>Sedekah Shubuh</option>
                    <option>Sedekah Jum'at</option>
                    <option>Infak Bencana</option>
                    <option>Sedekah Menolak Bala</option>
                    <option>Program Kesehatan</option>
                    <option>Program Pendidikan</option>
                    <option>Program Lingkungan</option>
                    <option>Program Sosial</option>
                    <option>Program Ekonomi</option>
                </select>
            </p>
            <p>
                <label for="Metode Pembayaran">Metode Pembayaran :</label>
                <select name="Metode Pembayaran">
                    <option>gopay</option>
                    <option>ovo</option>
                    <option>Dana</option>
                    <option>Shopee Pay</option>
                    <option>Transfer Bank</option>
                    <option>Octo clicks By CIMBNIAGA</option>
                    <option>Visa Mastercard</option>
                    <option>IB Muamalat</option>
                    <option>BCA virtual account</option>
                    <option>BNI virtual account</option>
                    <option>BRIVA</option>
                    <option>Permata Bank virtual account</option>
                    <option>BCA</option>
                    <option>Mandiri</option>
                    <option>BNI</option>
                    <option>Bank BRI</option>
                    <option>BSI (Bank Syariah Indonesia)</option>
                    <option>Bank Muamalat</option>
                    <option>Maybank Syariah</option>
                </select>
            </p>
            <p>
                    <label for="Jumlah (Rp.)">Jumlah (Rp.) :</label>
                    <input type="text" name="Jumlah" placeholder=""/>
            </p>
                <p>
                    <input type="submit" value="Donasi Sekarang" name="Donasi" >
                </p>
        </fieldset>
    </form>
</body>
</html>