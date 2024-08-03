<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Poetsen+One&family=Roboto&family=Spectral&display=swap" rel="stylesheet">
<style>	
	:root{
		--bg-1 : #fffaf6;
		--text-coklat: #3B3633;
	}

	.family-pinyon{
		font-family: 'Pinyon Script', sans-serif;
	}
	.family-roboto{
		font-family: 'Roboto', sans-serif;
	}
	.family-spectral{
		font-family: 'Spectral', sans-serif;
	}
	.bold{
		font-weight: bold;
	}


	.not-scroll{
		overflow: hidden;
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
		height: 100vh;
		overflow-y: auto;
		overflow-x: hidden;
	}

</style>


<section id="cover position-relative" class="bg-1">
	<div class="backgrond position-absolute w-100 h-100 overflow-hidden">
		<img class="position-absolute top-0 start-0 translate-middle" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/kembang 1.png" alt="kembang 1" style="max-width: 50vw;">						
		<img class="position-absolute top-100 start-100 translate-middle" src="<?= BASE_URL ?>assets/img/Zulmi_Latifah/kembang 2.png" alt="kembang 2" style="max-width: 50vw;">						
	</div>
	
	<div class="container position-relative" style="height: 100%; width: 100%;">
		<div class="position-relative family-pinyon text-end pt-3" style="z-index: 2;">
			<h1 class="bold me-5 display-3">Undangan</h1>
			<h1 class="bold display-3">Pernikahan</h1>
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
		<div class="container position-absolute bottom-0 start-50 translate-middle-x mb-5 text-center">
			<h3 class="">Kepada Yth.</h3>
			<h3 class=""><?= $data['to'] ?></h3>
			<p class="">Mohon maaf, apabila ada kesalahan dalam penulisan nama dan gelar</p>
			<a href="#undangan-main" name="buka-undangan" class="btn btn-info">Buka Undangan</a>
		</div>
	</div>
</section>
<section class="bg-2" id="undangan-main">
	Tes
</section>





<script type="text/javascript">
	let bukaUndangan = document.querySelector('[name=buka-undangan]');
	let body = document.getElementById('body-main');
	bukaUndangan.addEventListener('click', ()=>{
		body.classList.remove('not-scroll')
	})
</script>
