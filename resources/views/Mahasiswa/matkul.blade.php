Data Mata Kuliah

Many to Many


<table border="1">
<thead>
    <tr>
        <td>Nama Mahasiswa</td>
        <td>Mata Kuliah</td>
        <td>Dosen</td>
        <td>Semester</td>
        <td>Nilai</td>
    </tr>
</thead>
<tbody>
    @foreach ($mahasiswa as $mahasiswa)

        <tr>
            <td>{{$mahasiswa->nama}}</td>
            <td>
                <ul type="none">
                    @foreach ($mahasiswa->matkul as $mk)
                    <li>{{$mk->nama_matkul}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul type="none">
                    @foreach ($mahasiswa->matkul as $mk)
                    <li>{{$mk->dosen}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul type="none">
                    @foreach ($mahasiswa->matkul as $mk)
                    <li>{{$mk->semester}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul type="none">
                    @foreach ($mahasiswa->matkul as $mk)
                    <li>{{$mk->pivot->nilai}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>

    @endforeach
</tbody>
</table>


