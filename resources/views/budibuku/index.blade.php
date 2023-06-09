<a href="/budibuku/create">Tambah Buku</a>
<table border="1">
    <tr>
        <td> ID Buku</td>
        <td> Judul Buku</td>
        <td> Penulis </td>
        <td> Penerbit </td>
        <td> Tahun Terbit </td>
        <td> Jumlah Stok</td>
        <td> Denda Buku </td>
    </tr>
    @foreach($budibuku as $row)
    <tr> 
        <td>{{ $row->IDBuku }}</td>
        <td>{{ $row->judul }}</td>
        <td>{{ $row->penulis }}</td>
        <td>{{ $row->penerbit }}</td>
        <td>{{ $row->tahunterbit }}</td>
        <td>{{ $row->jumlahstok }}</td>
        <td>{{ $row->dendabuku }}</td>
        <td>
            <a href="/budibuku/{{$row->IDBuku}}/edit">Edit</a>
            <form action="/budibuku/{{$row->IDBuku}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>