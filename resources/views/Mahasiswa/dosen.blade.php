Data Dosen

One to Many


<table border="1">
<thead>
    <tr>
        <td>NIDN</td>
        <td>Nama Dosen</td>
        <td>Nama Mahasiswa</td>
    </tr>
</thead>
<tbody>
    @foreach ($dosen as $dosen)

        <tr>
            <td>{{$dosen->nidn}}</td>
            <td>{{$dosen->nama_dosen}}</td>
            <td>
                @foreach ($dosen->mahasiswa as $mhs)
                    {{$mhs->nama}},
                @endforeach
            </td>
        </tr>

    @endforeach
</tbody>
</table>


