<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="output.css" rel="stylesheet">
		<title>Login SPPD</title>
	</head>
	<body>
		<section class="bg-gray-50 dark:bg-gray-900">
			<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
				<div class="flex flex-col gap-5 items-center mb-6 text-2xl text-center font-semibold text-gray-900 dark:text-white">
					<img width="100" src="public/bookicon.png" alt="logo">
					<p class="capitalize">sistem informasi surat perintah perjalanan dinas perpustakaan dan kearsipan kota langsa</p>
				</div>
				<div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
					<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
						<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
							Silahkan Login
						</h1>
						<form class="space-y-4 md:space-y-6" action="login.php" method="post">
							<div>
								<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
								<input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bogel" required="">
							</div>
							<div>
								<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
								<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
							</div>
							<button type="submit" class="w-full border-2 border-green-400 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>