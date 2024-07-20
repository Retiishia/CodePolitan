<?php
//total array yang disiapkan untuk disimpan
$todos    = [];
//melakukan pengecekan apakah file todo.txt ditemukan
if (file_exists('todo.txt')) {
    //membaca file todo.txt
    $file    =    file_get_contents('todo.txt');
    //mengubah format serialize menjadi array
    $todos    =    unserialize($file);
}
//Jika ditemukan todo yang dikirim melalui methode POST
if (isset($_POST['todo'])) {
    $data    = $_POST['todo']; // data yang dipilih pada form
    $todos[] = [
        'todo'    => $data,
        'status' => 0
    ];
    $daftar_belanja = serialize($todos);
    file_put_contents('todo.txt', $daftar_belanja);
    //redirect halaman
    header('location:index.php');
}
?>
<h1>Todo App</h1>
<form action="" method="POST">
    <label>Daftar Belanja Hari ini<label><br>
            <input type="text" name="todo">
            <button type="submit">Simpan</button>
</form>
<ul>
    <ul>
        <?php foreach ($todos as $key => $value) : ?>
            <li>
                <input type="checkbox" name="todo">
                <label><?php echo $value['todo']; ?></label>
                <a href='#'>hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>