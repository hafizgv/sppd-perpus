<?php
    include "../config/connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM spd');
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>Bidum | SPD</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_b.php' ?>
            <div class="p-6 bg-red-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Surat Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <div>
                        <script>
                            function backName(e){
                                let text = document.getElementById(e);
                                if(text.classList.contains('ace')){
                                    console.log('be')
                                    text.innerHTML = "+ Tambah Surat Perjalanan Dinas";
                                    text.classList.replace('ace','abe');
                                }else{
                                    console.log('ce')
                                    text.innerHTML = "< Kembali";
                                    text.classList.replace('abe','ace');
                                }
                            }
                        </script>
                        <span onclick="show('input'); backName('kembali'); show('list')" class="cursor-pointer float-right border-2 border-black rounded-md px-2 py-1 mb-2 font-semibold bg-yellow-400 hover:bg-yellow-300">
                            <a id="kembali" class="abe">+ Tambah Surat Perjalanan Dinas</a>
                        </span>
                    </div>
                    <div class="block" id="input">
                        <table class="table-fixed w-full">
                            <tr class="bg-yellow-300">
                                <th class="p-2">No. SPD</th>
                                <th>Nama</th>
                                <th>Tugas</th>
                                <th>Tujuan</th>
                                <th class="w-16">Status</th>
                                <th>Aksi</th>
                            </tr>
                            <?php 
                                $query = mysqli_query($conn, 'SELECT * FROM spd');
                                if($query){
                                    while($row = mysqli_fetch_array($query)){
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['no_spd'];?></td>
                                            <td><?php echo $row['petugas'];?></td>
                                            <td class="break-words"><?php echo $row['tugas'];?></td>
                                            <td><?php echo $row['tujuan'];?></td>
                                            <td>
                                                <div class="flex justify-center">
                                                    <?php
                                                    if($row['verify'] == 1){
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#ed5217" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>';
                                                    }else if($row['verify'] == 2){
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#ed1717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>';
                                                    }else{
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#03c30d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="flex flex-row justify-around">
                                                    <a href="download.php?path=../files/<?php echo $row['filename'] ?>" class="block downloadicon bg-blue-500 p-1 rounded-md cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/></svg>
                                                    </a>
                                                    <form action="update.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $row['no_spd'] ?>">
                                                        <label class="block editicon bg-yellow-500 p-1 rounded-md cursor-pointer">
                                                            <input type="submit" name="edit"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>                                                    </label>
                                                    </form>
                                                    <form action="delete.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $row['no_spd'] ?>">
                                                        <label class="block deleteicon bg-red-500 p-1 rounded-md cursor-pointer">
                                                            <input type="submit" name="delete"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </label>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="6">Ga ada apa-apa disana!</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <p class="mt-2 font-semibold">Jumlah Data Surat : <?php 
                            echo mysqli_num_rows($query);
                        ?></p>
                    </div>
                    <form id="list" class="hidden" enctype="multipart/form-data" action="spdtodb.php" method="post">
                        <div class="grid grid-cols-2 font-semibold p-3 rounded-md border-2 border-black bg-orange-200 gap-3" >
                            <div class="flex flex-col mb-2">
                                <label for="nospd">No Surat</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nospd" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="nama">Nama</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nama" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="lapor">Tugas</label>
                                <textarea class="rounded-md border-2 border-black p-1 mt-1 resize-none" name="tugas" required></textarea>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="nama">Tujuan</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="tujuan" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="fileup">Upload File</label>
                                <input class="mt-1" type="file" name="fileup" required>
                            </div>
                        </div>
                        <input class="bg-green-500 mt-3 font-bold float-right border-2 border-black rounded-md px-2 py-1 cursor-pointer" type="submit" value="Submit">
                    </form>
                </div>
                <div class="h-[50vh]"></div>
            </div>
        </section>
    </body>
</html>
