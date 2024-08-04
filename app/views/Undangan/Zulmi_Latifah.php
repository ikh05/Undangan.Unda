<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Poetsen+One&family=Roboto&family=Spectral&display=swap" rel="stylesheet">
<style>	
	:root{
		--bg-1: #fffaf6;
		--bg-2: #F9FBF8;
		--text-coklat: #3B3633;
	}

	.family-pinyon{ /* tulis indah */
		font-family: 'Pinyon Script', sans-serif;
	}
	.family-roboto{ /* biasa */
		font-family: 'Roboto', sans-serif;
	}
	.family-spectral{ /* tegas */
		font-family: 'Spectral', sans-serif;
	}
	.text-bold{
		font-weight: bold;
	}


	.not-scroll{
/* 		overflow: hidden; */
	}


	.bg-1{
		background-color: var(--bg-1);
	}
	.bg-2{
		background-color: var(--bg-2);
	}
	.text-coklat{
		color: var(--text-coklat);
	}
	

	section{
		width: 100vw;
		min-height: 100vh;
/* 		overflow-y: auto; */
		overflow-x: hidden;
	}
	p{
		margin: 0;
	}

</style>


<section id="cover position-relative" class="bg-1" style="height: 100vh;">
	<div class="backgrond position-absolute w-100 h-100 overflow-hidden">
		<img class="position-absolute top-0 start-0 translate-middle" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/kembang 1.png" alt="kembang 1" style="max-width: 50vw;">						
		<img class="position-absolute top-100 start-100 translate-middle" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/kembang 2.png" alt="kembang 2" style="max-width: 50vw;">						
	</div>

	<div class="container position-relative" style="height: 100%; width: 100%;">
		<div class="position-relative family-pinyon text-end pt-3" style="z-index: 2;">
			<h1 class="text-bold me-5 display-3">Undangan</h1>
			<h1 class="text-bold display-3">Pernikahan</h1>
		</div>
		<div class=" gambar-mempelai position-absolute start-50 translate-middle-x" style="height: 50vh;">
			<img class="position-relative start-50 top-0 translate-middle-x" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/Cover.png" alt="gambar-mempelai" style="max-height: 100%;">
			<img class="position-absolute top-100 start-50 translate-middle w-100" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/kembang 3.png" alt="gambar-mempelai">
		</div>
		<!-- <div class="row nama-mempelai">
			<div class="col-5">Latifah</div>
			<div class="col">&</div>
			<div class="col-5">Zulmi</div>
		</div> -->
		<div class="container position-absolute bottom-0 start-50 translate-middle-x mb-5 text-center pb-md-0 pb-5">
			<h3 class="">Kepada Yth.</h3>
			<h3 class=""><?= $data['to'] ?></h3>
			<p class="">Mohon maaf, apabila ada kesalahan dalam penulisan nama dan gelar</p>
			<a href="#undangan-main" name="buka-undangan" class="btn btn-info text-bold bold family-roboto">Buka Undangan</a>
		</div>
	</div>
</section>



<section class="bg-2 text-center" id="undangan-main">
	<div class="backgrond">
		
	</div>
	<div class="container mt-4 mb-2 px-4 py-3 w-100">
		<div class="row w-100 position-relative">
			<img src="<?= BASE_URL ?>assets/img/bismillah-green.png" alt="bismillah" style="max-width: 60%;" class="position-relative start-50 translate-middle-x">
		</div>
		<div class="row">
			<p>Assalamu'alaikum Warohmatullahi Waborakatuh</p>
		</div>
		<div class="row">Dengan memohon rahmat & ridho Allah SWT, kami megundang <?= $data['to']; ?> untuk hadir pada pernikahan:</div>

		<div class="row">
			<div class="col-12 col-md-5">
				<img src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/P.JPG" alt="mempelai perempuan" style="max-width: 100%;" class="border border-bottom-0 border-success border-2 rounded-top-4">
			</div>
			<div class="col">
				<div class="row">
					<p class="mb-0 fs-1 family-spectral">Siti Nur Latifah</p>
				</div>
			</div>
			<div class="row">
				<p>Putri dari </p>
				<p>Bapak Agus Salim, S.Ag & Ibu Isnaniah, S.Ag</p>
			</div>
		</div>
		<hr class="border-2 border-success">
		<div class="row"><p class="mb-0 family-pinyon fs-2">dengan</p></div>
		<hr class="col border-2 border-success">
		<div class="row">
			<div class="col-12 col-md-5 order-2">
				<img src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/L.JPG" alt="mempelai laki-laki" style="max-width: 100%;" class="border border-top-0 border-success border-2 rounded-bottom-4 order-2">
			</div>
			<div class="col order-1">
				<div class="row">
					<p class="mb-0 fs-1 family-spectral">Zulmi Almadina</p>
				</div>
				<div class="row">
					<p>Putra dari </p><p>Bapak Arahman Saidi & Ibu Norjanah</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="rangkaian-acara" class="bg-1">
	<div class="backgrond"></div>
	<div class="container mt-4 mb-2 px-4 py-3 w-100">
		<div class="row">
			<p>Rangkaian Acara</p>
		</div>
		<div class="row">
			<div class="col"><p>Akad Nikah</p></div>
			<div class="col"><p>Resepsi Nikah</p></div>
		</div>
		<div>
			<div class="akad">
				<div class="tanggal"><p></p></div>
			</div>
		</div>


	</div>
</section>





<script type="text/javascript">
	let bukaUndangan = document.querySelector('[name=buka-undangan]');
	let body = document.getElementById('body-main');
	bukaUndangan.addEventListener('click', ()=>{
		body.classList.remove('not-scroll')
	})
</script>
