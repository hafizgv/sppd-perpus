<div class="bg-blue-500 flex justify-center py-5">
	<div class="flex justify-center text-white px-5">
		<img class="w-auto h-32" src="../public/dinaslangsa.png" alt="dinaslangsa">
		<div class="flex flex-col ml-3 text-center pb-3">
			<span class="text-7xl font-bold">E-SPPD</span>
			<span class="uppercase">sistem informasi surat perintah perjalanan dinas perpustakaan dan kearsipan kota langsa</span>
		</div>
	</div>
</div>
<div class="flex w-auto justify-center pl-5 divide-x divide-gray-400 bg-gray-50 shadow-lg dark:bg-gray-900 dark:text-gray-100">
	<ul class="flex items-center text-sm">
		<li class="">
			<a rel="noopener noreferrer" href="index.php" class="hover:bg-yellow-300 flex flex-col items-center p-2">
				<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>					
				<span class="md:block hidden">Data Pegawai</span>
			</a>
		</li>
		<li>
			<a rel="noopener noreferrer" href="lpd.php" class="hover:bg-yellow-300 flex flex-col items-center p-2">
				<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
				<span class="md:block hidden">Laporan Perjalanan Dinas</span>
			</a>
		</li>
		<li>
			<a rel="noopener noreferrer" href="spd.php"class="hover:bg-yellow-300 flex flex-col items-center p-2 cursor-pointer">
				<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
				<span class="md:block hidden">Surat Perintah Dinas</span>
			</a>
		</li>
	</ul>
	<ul class="flex text-sm items-center">
		<div class="flex flex-col items-center p-2">
			<img src="../public/pic.jpg" alt="" class="w-5 rounded-full dark:bg-gray-500">
			<h2 class="md:block hidden">Bidang Umum</h2>
		</div>
		<li>
			<a rel="noopener noreferrer" href="../logout.php" class="hover:bg-red-600/50 hover:text-white flex flex-col items-center p-2">
				<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 17l5-5-5-5M19.8 12H9M10 3H4v18h6"/></svg>
				<span class="md:block hidden">Logout</span>
			</a>
		</li>
	</ul>
</div>
<!-- JS Function Start -->
<script>
	function show(e){
		let boy = document.getElementById(e);
		if(boy.classList.contains('hidden') == true){
			boy.classList.replace('hidden','block')
		}
		else{
			boy.classList.replace('block','hidden')
		}
	}
</script>
<!-- JS Function End -->