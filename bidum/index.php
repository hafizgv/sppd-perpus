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
        <title>Gw Bidum</title>
    </head>
    <body>
        <section class="h-full flex">
            <?php include '../components/sidebar_b.php' ?>
            <div class="p-6 bg-green-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>					
                    <h1 class="text-2xl pl-2 font-semibold">Data Pegawai</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <div>
                        <script>
                            function backName(e){
                                let text = document.getElementById(e);
                                if(text.classList.contains('ace')){
                                    console.log('be')
                                    text.innerHTML = "+ Tambah Pegawai";
                                    text.classList.replace('ace','abe');
                                }else{
                                    console.log('ce')
                                    text.innerHTML = "< Kembali";
                                    text.classList.replace('abe','ace');
                                }
                            }
                        </script>
                        <span onclick="show('input'); backName('kembali'); show('list')" class="cursor-pointer float-right border-2 border-black rounded-md px-2 py-1 mb-2 font-semibold bg-yellow-400 hover:bg-yellow-300">
                            <a id="kembali" class="abe">+ Tambah Pegawai</a>
                        </span>
                    </div>
                    <div class="block" id="input">
                        <table class="table-fixed w-full">
                            <tr class="bg-yellow-300">
                                <th class="p-2">NIP</th>
                                <th>Nama</th>
                                <th>Pangkat</th>
                                <th>Golongan</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
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
                                            <td>
                                                <div class="flex flex-row justify-around">
                                                    <form action="update_p.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $row['id_user'] ?>">
                                                        <label class="block editicon bg-yellow-500 p-1 rounded-md cursor-pointer">
                                                            <input type="submit" name="edit"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>                                                    </label>
                                                    </form>
                                                    <form action="delete_p.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $row['id_user'] ?>">
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
                        <p class="mt-2 font-semibold">Jumlah Data Pegawai : <?php 
                            echo mysqli_num_rows($query);
                        ?></p> 
                    </div>
                    <form id="list" class="hidden" action="acctodb.php" method="post">
                        <div class="grid grid-cols-2 font-semibold p-3 rounded-md border-2 border-black bg-orange-200 gap-3" >
                            <div class="flex flex-col mb-2">
                                <label for="username">Username</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="username" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="password">Password</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="password" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="nip">NIP</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nip" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="nama">Nama</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="nama" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="pangkat">Pangkat</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="pangkat" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="golongan">Golongan</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="golongan" required>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="jabatan">Jabatan</label>
                                <input class="rounded-md border-2 border-black p-1 mt-1" type="text" name="jabatan" required>
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
