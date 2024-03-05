<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
    <h2 class="text-center">Form Nilai Siswa</h2>
    <hr>


    <form class="mr-5 ml-5" action="prosesnilai.php" method="get">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Statistika">Statistika</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="UTS" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-8">
                <input id="UTS" name="UTS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="UAS" class="col-4 col-form-label">NIlai UAS</label>
            <div class="col-8">
                <input id="UAS" name="UAS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="Tugas" class="col-4 col-form-label">Nilai Tugas</label>
            <div class="col-8">
                <input id="tugas" name="tugas" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>