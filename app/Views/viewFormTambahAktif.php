h1>Isilah Data Buku Baru</h1>

<form action="/controllerWebsaya/methodRekamTambah/" method="post">
    <label for="fId">ID:</label><br>
    <input type="text" id="fId" name="fId" size="45"><br>

    <label for="fSampul">Sampul:</label><br>
    <input type="text" id="fSampul" name="fSampul" size="45"><br>

    <label for="fJudul">Judul:</label><br>
    <input type="text" id="fJudul" name="fJudul" size="45"><br>

    <label for="fPengarang">Pengarang:</label><br>
    <input type="text" id="fPengarang" name="fPengarang" size="45">

    <br><br>
    <input type="submit" value="REKAM" class="btn btn-danger">
</form>