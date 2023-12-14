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
                            <td class="text-center">
                                <a class="mr-2" href="">A</a>
                                <a href="">B</a>
                            </td>
                        </tr>
                    </table>
                    <div class="flex flex-row justify-between p-1 mt-2">
                        <p>entries</p>
                        <div><p>Navigation</p></div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
