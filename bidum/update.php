<?php
    include "../config/connection.php"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>Bidum | Update SPD</title>
    </head>
    <body>
        <section class="h-full">
            <?php include '../components/sidebar_b.php' ?>
            <div class="p-6 bg-sky-300">
                <div class="flex items-center mb-7">
                    <svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Surat Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <div>
                        <span onclick="window.location='spd.php'" class="cursor-pointer float-right border-2 border-black rounded-md px-2 py-1 mb-2 font-semibold bg-yellow-400 hover:bg-yellow-300">
                            < Kembali
                        </span>
                    </div>
                    <?php 
                        $id = $_POST['id'] ?? '';     
                        $query = mysqli_query($conn,"SELECT * FROM spd WHERE no_spd = '$id'");
                        
                        while($row = mysqli_fetch_array($query)){
                            ?>
                            <form enctype="multipart/form-data" action="up.php" method="post">
                                <div class="grid grid-cols-2 font-semibold p-3 rounded-md border-2 border-black bg-violet-300 gap-3" >
                                    <input hidden class="rounded-md p-1 mt-1" type="text" name="nospd" value="<?php echo $row['no_spd'];?>">
                                    <div class="flex flex-col mb-2">
                                        <label for="nama">Nama</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nama" value="<?php echo $row['petugas'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <label for="tugas">Perihal</label>
                                        <textarea class="rounded-md border-2 border-black p-1 mt-1 resize-none" name="perihal"><?php echo $row['perihal'];?></textarea>
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <label for="nama">Lokasi Tujuan</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="lokasi" value="<?php echo $row['lokasi'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <label for="nama">Tujuan Bidang</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="tujuan" value="<?php echo $row['tujuan'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <label for="nama">Asal Instansi Surat</label>
                                        <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="asal" value="<?php echo $row['asal'];?>">
                                    </div>
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <label for="nama">Tanggal Mulai</label>
                                            <input class="rounded-md border-2 border-black p-1 mt-1" type="date" name="dateIn" value="<?php echo $row['dateIn'];?>">
                                        </div>
                                        <div>
                                            <label>Tanggal Selesai</label>
                                            <input class="rounded-md border-2 border-black p-1 mt-1" type="date" name="dateOut" value="<?php echo $row['dateOut'];?>">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="fileup">Upload File</label>
                                        <input class="mt-1" type="file" name="fileup">
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