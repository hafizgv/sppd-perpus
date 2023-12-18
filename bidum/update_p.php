<?php
    include "../config/connection.php"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>Bidum</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_b.php' ?>
            <div class="p-6 bg-sky-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>					
                    <h1 class="text-2xl pl-2 font-semibold">Data Pegawai</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <div>
                        <span onclick="window.location='index.php'" class="cursor-pointer float-right border-2 border-black rounded-md px-2 py-1 mb-2 font-semibold bg-yellow-400 hover:bg-yellow-300">
                            < Kembali
                        </span>
                    </div>
                    <?php 
                        $id = $_POST['id'] ?? '';     
                        $query = mysqli_query($conn,"SELECT * FROM account WHERE id_user = '$id'");
                        
                        while($row = mysqli_fetch_array($query)){
                            ?>
                            <form action="up_p.php" method="post">
                                <div class="grid grid-cols-2 font-semibold p-3 rounded-md border-2 border-black bg-violet-300 gap-3" >
                                    <input hidden class="rounded-md p-1 mt-1" type="text" name="id" value="<?php echo $row['id_user'];?>">
                                    <div class="flex flex-col mb-2">
                                        <label for="nip">NIP</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nip" value="<?php echo $row['nip'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                    <label for="nama">Nama</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nama" value="<?php echo $row['nama'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                    <label for="pangkat">Pangkat</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="pangkat" value="<?php echo $row['pangkat'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                    <label for="golongan">Golongan</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="golongan" value="<?php echo $row['golongan'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                    <label for="jabatan">Jabatan</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="jabatan" value="<?php echo $row['tier'];?>">
                                    </div>
                                </div>
                                <button class="bg-green-500 mt-3 font-bold float-right border-2 border-black rounded-md px-2 py-1 cursor-pointer" type="submit" name="update">Update</button>
                            </form>
                            <?php
                        }
                    ?>
                </div>
                <div class="h-[50vh]"></div>
            </div>
        </section>
    </body>
</html>