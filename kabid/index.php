<?php
    include "../config/connection.php";
    $query = mysqli_query($conn, 'SELECT * FROM account');
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>Kabid | Pegawai</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_k.php' ?>
            <div class="p-6 bg-green-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>					
                    <h1 class="text-2xl pl-2 font-semibold">Data Pegawai</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <table class="table-fixed w-full">
                        <tr class="bg-yellow-300">
                            <th class="p-2">NIP</th>
                            <th>Nama</th>
                            <th>Pangkat</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                        </tr>
                        <?php 
                            if($query){
                                while($row = mysqli_fetch_array($query)){
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $row['nip'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['pangkat'];?></td>
                                        <td><?php echo $row['golongan'];?></td>
                                        <td><?php echo $row['tier'];?></td>
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
                    <p class="mt-2 font-semibold">Jumlah Data Pegawai : <?php 
                        echo mysqli_num_rows($query);
                    ?></p> 
                </div>
                <div class="h-[50vh]"></div>
            </div>
        </section>
    </body>
</html>
