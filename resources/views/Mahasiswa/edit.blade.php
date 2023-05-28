<form  action="{{url('/mahasiswa/{id}/update')}}" method="POST">
    {{csrf_field()}}
<table >
    <tr>
        <th colspan="2">Edit Data Anda dibawah ini :</th>
    </tr>

    <tr>
        <td>Nama </td>
        <td>:<input type="text" name="nama" value="{{$mahasiswa->nama}}"></td>
    </tr>
    <tr>
        <td>Kelas </td>
        <td>:<input type="text" name="kelas" value="{{$mahasiswa->kelas}}"></td>
    </tr>
    <tr>
        <td>Jurusan </td>
        <td>:<input type="text" name="jurusan" value="{{$mahasiswa->jurusan}}"></td>
    </tr>
    <tr>
        <td>Alamat </td>
        <td>:<input type="text" name="alamat" value="{{$mahasiswa->alamat}}"></td>

    </tr>
</table>
<button type="submit">Submit</button>
</form>
