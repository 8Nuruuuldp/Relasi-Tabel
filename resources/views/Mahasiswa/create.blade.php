<form  action="{{url('/mahasiswa/store')}}" method="POST">
    {{csrf_field()}}
<table >
    <tr>
        <th colspan="2">Masukkan Data Anda dibawah ini :</th>
    </tr>

    <tr>
        <td>Nama </td>
        <td>:<input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Kelas </td>
        <td>:<input type="text" name="kelas"></td>
    </tr>
    <tr>
        <td>Jurusan </td>
        <td>:<input type="text" name="jurusan"></td>
    </tr>
    <tr>
        <td>Alamat </td>
        <td>:<input type="text" name="alamat"></td>

    </tr>
</table>
<button type="submit">Submit</button>
</form>
