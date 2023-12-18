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
        <title>Kabid | SPD</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_k.php' ?>
            <div class="p-6 bg-red-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Surat Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <table class="table-fixed w-full">
                        <tr class="bg-yellow-300">
                            <th class="p-2">No. SPD</th>
                            <th>Nama</th>
                            <th>Tugas</th>
                            <th>Tujuan</th>
                            <th class="w-16">Status</th>
                            <th class="w-16">Aksi</th>
                        </tr>
                        <?php 
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
                <div class="h-[50vh]"></div>
            </div>
        </section>
    </body>
</html>
