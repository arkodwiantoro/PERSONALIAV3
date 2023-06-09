<h1> EDIT Buku</h1>
<form action="/budibuku/{{$budibuku->IDBuku}}/update" method="POST">
@method('put')   
@csrf
    <input type="number" name="IDBuku" placeholder="ID Buku" value="{{$budibuku->IDBuku}}"><br>
    <input type="text" name="judul" placeholder="Judul" value="{{$budibuku->judul}}"><br>
    <input type="text" name="penulis" placeholder="Penulis" value="{{$budibuku->penulis}}"><br>
    <input type="text" name="penerbit" placeholder="Penerbit" value="{{$budibuku->penerbit}}"><br>
    <input type="date" name="tahunterbit" placeholder="Tahun Terbit" value="{{$budibuku->tahunterbit}}"><br>
    <input type="number" name="jumlahstok" placeholder="Jumlah Stok"value="{{$budibuku->jumlahstok}}" ><br>
    <input type="number" name="dendabuku" placeholder="Denda Buku" value="{{$budibuku->dendabuku}}" ><br>
    <input type="submit" value="Submit">

</form>