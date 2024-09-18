<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-Do List</title>
  </head>
  <body>
    <h1>To-Do List</h1>
    <form action="tambah_tugas.php" method="post">
      <input
        type="text"
        name="deskripsi"
        placeholder="Deskripsi Tugas"
        required
      />
      <button type="submit">Tambah Tugas</button>
    </form>
    <h2>Daftar Tugas</h2>
    <div id="daftar-tugas">
      <?php  
        require_once 'DaftarTugas.php';
        require_once 'Tugas.php';

        $daftarTugas = new DaftarTugas();
        $daftarTugas->tampilkanSemuaTugas();
      ?>
    </div>
  </body>
</html>
