<?php
    include "../config/connection.php"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>LPD Boss</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_p.php' ?>
            <div class="p-6 bg-sky-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Laporan Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <p class="mb-2">Edit woi</p>
                    <span class="fixed right-4 cursor-pointer" onclick="window.location = 'lpd.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                    <?php 
                        $id = $_POST['id'] ?? '';     
                        $query = mysqli_query($conn,"SELECT * FROM lpd WHERE no_spt = '$id'");
                        
                        while($row = mysqli_fetch_array($query)){
                            echo $id;
                            ?>
                            <form enctype="multipart/form-data" action="up.php" method="post">
                                <div class="grid grid-cols-2 gap-3 p-2 bg-violet-500">
                                    <input hidden class="rounded-md p-1 mt-1" type="text" name="nospt" value="<?php echo $row['no_spt'];?>">
                                    <div class="flex flex-col mb-2">
                                        <label for="nama">Nama</label>
                                        <input class="rounded-md p-1 mt-1" type="text" name="nama" value="<?php echo $row['petugas'];?>">
                                    </div>
                                    <div class="flex flex-col mb-2">
                                        <label for="lapor">Hasil</label>
                                        <textarea class="rounded-md p-1 mt-1 resize-none" name="lapor"><?php echo $row['hasil'];?></textarea>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="fileup">Upload File</label>
                                        <input class="mt-1" type="file" name="fileup">
                                    </div>
                                </div>
                                <button class="border border-black" type="submit" name="update">Update</button>
                            </form>
                            <?php
                        }
                    ?>

                </div>
            </div>
        </section>
    </body>
</html>