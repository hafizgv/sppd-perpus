<div class="h-screen p-3 space-y-2 w-60 bg-gray-50 shadow-lg dark:bg-gray-900 dark:text-gray-100">
	<div class="flex items-center p-2 space-x-4">
		<img src="https://source.unsplash.com/100x100/?portrait" alt="" class="w-12 h-12 rounded-full dark:bg-gray-500">
		<div>
			<h2 class="text-lg font-semibold">Pimpinan</h2>
		</div>
	</div>
	<div class="divide-y divide-gray-400 dark:divide-gray-700">
		<ul class="pt-2 pb-4 space-y-1 text-sm">
			<li class="dark:bg-gray-800 dark:text-gray-50">
				<a rel="noopener noreferrer" href="index.php" class="flex items-center p-2 space-x-3 rounded-md">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-400">
						<path d="M68.983,382.642l171.35,98.928a32.082,32.082,0,0,0,32,0l171.352-98.929a32.093,32.093,0,0,0,16-27.713V157.071a32.092,32.092,0,0,0-16-27.713L272.334,30.429a32.086,32.086,0,0,0-32,0L68.983,129.358a32.09,32.09,0,0,0-16,27.713V354.929A32.09,32.09,0,0,0,68.983,382.642ZM272.333,67.38l155.351,89.691V334.449L272.333,246.642ZM256.282,274.327l157.155,88.828-157.1,90.7L99.179,363.125ZM84.983,157.071,240.333,67.38v179.2L84.983,334.39Z"></path>
					</svg>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a rel="noopener noreferrer" href="lpd.php" class="flex items-center p-2 space-x-3 rounded-md">
				<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/></svg>
					<span>Laporan Perjalanan</span>
				</a>
			</li>
			<li>
				<div class="flex items-center p-2 space-x-3 rounded-md cursor-pointer" onclick="show('A')">
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					<span>Surat Perintah Tugas</span>
				</div>
				<ul class="pl-8 hidden" id="A">
					<li class="p-2 hover:bg-slate-300"><a href="spt.php">Data SPT</a></li>
					<li class="p-2 hover:bg-slate-300"><a href="spt_v.php">Verifikasi SPT</a></li>
				</ul>
			</li>
		</ul>
		<ul class="pt-4 pb-2 space-y-1 text-sm">
			<li>
				<a rel="noopener noreferrer" href="../logout.php" class="flex items-center p-2 space-x-3 rounded-md">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current dark:text-gray-400">
						<path d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z"></path>
						<rect width="32" height="64" x="256" y="232"></rect>
					</svg>
					<span>Logout</span>
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