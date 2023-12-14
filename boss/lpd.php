<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../output.css" rel="stylesheet">
        <title>LPD Boss</title>
    </head>
    <body>
        <section class="h-screen flex">
            <?php include '../components/sidebar_p.php' ?>
            <div class="p-6 bg-sky-300 w-screen">
                <div class="flex items-center mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
                    <h1 class="text-2xl pl-2 font-semibold">Data Laporan Perjalanan Dinas</h1>
                </div>
                <div class="flex flex-col shadow rounded-lg border bg-white p-3">
                    <p class="mb-2">Apa coba</p>
                    <table>
                        <tr class="bg-yellow-300">
                            <th class="p-2">No</th>
                            <th>Nama</th>
                            <th>No. SPT</th>
                            <th>Hasil</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>
                                <div class="flex flex-row justify-around">
                                    <a class="bg-blue-500 p-1 rounded-md" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/></svg>
                                    </a>
                                    <a class="bg-red-500 p-1 rounded-md" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="flex flex-row justify-between p-1 mt-2">
                        <p>entries</p>
                        <div><p>Navigation</p></div>
                    </div>
                    <a href="#" class="mb-2 font-semibold text-yellow-400 bg-blue-200 w-auto">+ Tambah Laporan Perjalanan Dinas</a>
                    <form action="lpdtodb.php" method="post">
                        <div class="grid grid-cols-2 p-3 bg-orange-200 gap-3" >
                            <div class="flex flex-col mb-2">
                                <label for="nospt">No Surat</label>
                                <input class="rounded-md p-1 mt-1" type="text" name="nospt">
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="nama">Nama</label>
                                <input class="rounded-md p-1 mt-1" type="text" name="nama">
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="lapor">Hasil</label>
                                <textarea class="rounded-md p-1 mt-1 resize-none" name="lapor"></textarea>
                            </div>
                            <div class="flex flex-col mb-2">
                                <label for="datelap">Tanggal</label>
                                <input class="rounded-md p-1 mt-1" type="date" name="datelap">
                            </div>
                            <div class="flex flex-col">
                                <label for="fileup">Upload File</label>
                                <input class="mt-1" type="file" name="fileup">
                            </div>
                        </div>
                        <input class="bg-green-600 text-white mt-3 float-right rounded-md p-1" type="submit" value="submit">
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
