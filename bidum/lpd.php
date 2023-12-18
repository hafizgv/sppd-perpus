<?php
    include "../config/connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM lpd');
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>LPD Bidum</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_b.php' ?>
            <div class="p-6 bg-sky-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Laporan Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <div>
                        <script>
                            function backName(e){
                                let text = document.getElementById(e);
                                if(text.classList.contains('ace')){
                                    console.log('be')
                                    text.innerHTML = "+ Tambah Laporan Perjalanan Dinas";
                                    text.classList.replace('ace','abe');
                                }else{
                                    console.log('ce')
                                    text.innerHTML = "< Kembali";
                                    text.classList.replace('abe','ace');
                                }
                            }
                        </script>
                        <span onclick="show('input'); backName('kembali'); show('list')" class="cursor-pointer float-right border-2 border-black rounded-md px-2 py-1 mb-2 font-semibold bg-yellow-400 hover:bg-yellow-300">
                            <a id="kembali" class="abe">+ Tambah Laporan Perjalanan Dinas</a>
                        </span>
                    </div>
                    <div class="block" id="input">
                        <table class="table-fixed w-full">
                            <tr class="bg-yellow-300">
                                <th class="p-2">No. SPD</th>
                                <th>Nama</th>
                                <th>Hasil</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            <?php 
                                $query = mysqli_query($conn, 'SELECT * FROM lpd');
                                if($query){
                                    while($row = mysqli_fetch_array($query)){
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['no_spd'];?></td>
                                            <td><?php echo $row['petugas'];?></td>
                                            <td class="break-words"><?php echo $row['hasil'];?></td>
                                            <td><?php echo $row['tgl_upload'];?></td>
                                            <td>
                                                <div class="flex flex-row justify-around">
                                                    <a href="download.php?path=../files/<?php echo $row['filename'] ?>" class="block downloadicon bg-blue-500 p-1 rounded-md cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/></svg>
                                                    </a>
                                                    <form action="update_l.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $row['no_spd'] ?>">
                                                        <label class="block editicon bg-yellow-500 p-1 rounded-md cursor-pointer">
                                                            <input type="submit" name="edit"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>                                                    </label>
                                                    </form>
                                                    <form action="delete_l.php" method="post">
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
                        <p class="mt-2 font-semibold">Jumlah Data Laporan : <?php 
                            echo mysqli_num_rows($query);
                        ?></p>  
                    </div>
                    <form id="list" class="hidden" enctype="multipart/form-data" action="lpdtodb.php" method="post">
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
                                <label for="lapor">Hasil</label>
                                <textarea class="rounded-md border-2 border-black p-1 mt-1 resize-none" name="lapor" required></textarea>
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
