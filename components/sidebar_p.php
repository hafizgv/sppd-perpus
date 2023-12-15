<div class="p-3 space-y-2 md:w-60 w-auto bg-gray-50 shadow-lg dark:bg-gray-900 dark:text-gray-100">
	<div class="flex flex-col items-center p-2">
		<img src="https://source.unsplash.com/100x100/?portrait" alt="" class="sm:w-16 w-12 rounded-full dark:bg-gray-500">
		<h2 class="text-lg font-semibold md:block hidden">Pimpinan</h2>
	</div>
	<div class="divide-y divide-gray-400 dark:divide-gray-700">
		<ul class="pt-2 pb-4 space-y-1 text-sm">
			<li class="dark:bg-gray-800 dark:text-gray-50">
				<a rel="noopener noreferrer" href="index.php" class="hover:bg-yellow-300 flex md:flex-row flex-col items-center p-2 space-x-3 rounded-md">
					<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9"/><path d="M9 22V12h6v10M2 10.6L12 2l10 8.6"/></svg>
					<span class="md:block hidden">Dashboard</span>
				</a>
			</li>
			<li>
				<a rel="noopener noreferrer" href="lpd.php" class="hover:bg-yellow-300 flex md:flex-row flex-col items-center p-2 space-x-3 rounded-md">
					<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
					<span class="md:block hidden">Laporan Perjalanan</span>
				</a>
			</li>
			<li>
				<div class="hover:bg-yellow-300 flex md:flex-row flex-col items-center p-2 space-x-3 rounded-md cursor-pointer" onclick="show('A')">
					<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					<span class="md:block hidden">Surat Perintah Tugas</span>
				</div>
				<ul class="pl-8 hidden" id="A">
					<li class="p-2 hover:bg-orange-300 rounded-md"><a href="spt.php">Data SPT</a></li>
					<li class="p-2 hover:bg-orange-300 rounded-md"><a href="spt_v.php">Verifikasi SPT</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pt-4 pb-2 space-y-1 text-sm">
			<li>
				<a rel="noopener noreferrer" href="../logout.php" class="hover:bg-red-600 hover:text-white flex md:flex-row flex-col items-center p-2 space-x-3 rounded-md">
					<svg class="md:scale-100 scale-110" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 17l5-5-5-5M19.8 12H9M10 3H4v18h6"/></svg>
					<span class="md:block hidden">Logout</span>
				</a>
			</li>
		</ul>
	</div>
</div>
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