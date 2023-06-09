<h1> BUAT Buku</h1>
<form action="/budibuku/store" method="POST">
    @csrf
    <input type="number" name="IDBuku" placeholder="ID Buku"><br>
    <input type="text" name="judul" placeholder="Judul"><br>
    <input type="text" name="penulis" placeholder="Penulis"><br>
    <input type="text" name="penerbit" placeholder="Penerbit"><br>
    <input type="date" name="tahunterbit" placeholder="Tahun Terbit"><br>
    <input type="number" name="jumlahstok" placeholder="Jumlah Stok"><br>
    <input type="number" name="dendabuku" placeholder="Denda Buku"><br>
    <input type="submit" value="Submit">

</form>