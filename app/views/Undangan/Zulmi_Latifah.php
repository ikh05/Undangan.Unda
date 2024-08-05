<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Poetsen+One&family=Roboto&family=Spectral&display=swap" rel="stylesheet">
<style>	
	::-webkit-scrollbar {
    	display: none;
	}
	html body::-webkit-scrollbar {
    	display: none;
	}
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
	body{
/* 		overflow-x: hidden; */
	}
	section{
		width: 100vw;
		overflow-x: hidden;
	}
	p{
		margin: 0;
	}
	.btn.on{
		background-color: var(--bs-info);
	}
	.rangkaian-acara-bungkus{
		scroll-behavior: smooth;
	}
</style>


<section id="cover position-relative" class="bg-1" style="height: 100vh;">
	<div class="backgrond position-absolute w-100 h-100 overflow-hidden">
		<img class="position-absolute top-0 start-0 translate-middle" src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/kembang 1.png" alt="kembang 1" style="max-width: 50vw;">						
		<img class="position-absolute top-100 start-100 translate-middle" src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/kembang 2.png" alt="kembang 2" style="max-width: 50vw;">						
	</div>

	<div class="container position-relative" style="height: 100%; width: 100%;">
		<div class="position-relative family-pinyon text-end pt-3" style="z-index: 2;">
			<h1 class="text-bold me-5 display-3">Undangan</h1>
			<h1 class="text-bold display-3">Pernikahan</h1>
		</div>
		<div class=" gambar-mempelai position-absolute start-50 translate-middle-x" style="height: 50vh;">
			<img class="position-relative start-50 top-0 translate-middle-x" src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/Cover.png" alt="gambar-mempelai" style="max-height: 100%;">
			<img class="position-absolute top-100 start-50 translate-middle w-100" src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/kembang 3.png" alt="gambar-mempelai">
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
				<img src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/P.JPG" alt="mempelai perempuan" style="max-width: 100%;" class="border border-bottom-0 border-success border-2 rounded-top-4">
			</div>
			<div class="col">
				<div class="row">
					<p class="mb-0 fs-1 family-spectral">Siti Nur Latifah</p>
				</div>
				<div class="row">
					<p>Putri dari </p>
					<p>Bapak Agus Salim, S.Ag & Ibu Isnaniah, S.Ag</p>
				</div>
			</div>
		</div>
		<hr class="border-2 border-success">
		<div class="row"><p class="mb-0 family-pinyon fs-2">dengan</p></div>
		<hr class="col border-2 border-success">
		<div class="row">
			<div class="col-12 col-md-5 order-2">
				<img src="<?= BASE_URL ?>assets/img/<?= $data['dir-assets'] ?>/L.JPG" alt="mempelai laki-laki" style="max-width: 100%;" class="border border-top-0 border-success border-2 rounded-bottom-4 order-2">
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

<section id="rangkaian-acara" class="bg-1 text-center">
	<div class="backgrond"></div>
	<div class="container mt-4 mb-2 px-2 py-3 w-100">
		<div class="row">
			<p class="mb-2">Rangkaian Acara</p>
		</div>
		<div id="rangkaian-acara-menu" class="row border border-start-0 mb-1 border-end-0">
			<p acara="detail-akad" class="col btn border-end rounded-0">Akad Nikah</p>
			<p acara="detail-resepsi" class="col btn border-start rounded-0 on">Resepsi Nikah</p>
		</div>
		<div class="rangkaian-acara-bungkus position-relative w-100 border-bottom pb-2 mb-2" style="overflow: hidden;" >
			<div class="d-flex flex-row position-relative" style="width: 200%;">
				<div id="detail-akad" style="width: 50%;">
					<p>Tanggal</p>
					<p>Kamis, 18 Juli 2024</p>
					<p>Waktu</p>
					<p>09.00 WIB</p>
					<p>Hitung Mundur</p>
					<iframe id="countdown-akad" src="https://embed-countdown.onlinealarmkur.com/id/#2024-07-18T09:00:00@Asia%2FJakarta" width="360" height="80" style="display: block; margin: 0px auto; border: 0px;"></iframe>
					<p>Alamat</p>
					<p>Jl. Trans Kalimantan, Km.18, Kec. Anjir Pasar, Kab.Barito Kuala</p>
				</div>
				<div id="detail-resepsi" style="width: 50%;">
					<p>Tanggal</p>
					<p>Minggu, 08 September 2024</p>
					<p>Waktu</p>
					<p>08.00 WIB - Selesai</p>
					<p>Hitung Mundur</p>
					<iframe id="countdown-resepsi" src="https://embed-countdown.onlinealarmkur.com/id/#2024-09-08T08:00:00@Asia%2FJakarta" width="360" height="80" style="display: block; margin: 0px auto; border: 0px;"></iframe>
					<p>Alamat</p>
					<p>Jl. Trans Kalimantan, Km.18, Kec. Anjir Pasar, Kab.Barito Kuala</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="google-maps" class="text-center mb-2 pb-4" style="background-color: #F8F9FAFF;">
	<p class="text-bold">Lokasi Acara</p>
	<div class="row mb-2">
		<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1335.7446563411888!2d114.50055957738276!3d-3.1478142442717547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zM8KwMDgnNTIuMCJTIDExNMKwMzAnMDQuMiJF!5e0!3m2!1sid!2sid!4v1722773706520!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<a href="https://www.google.com/maps/place/3%C2%B008'52.0%22S+114%C2%B030'04.2%22E/@-3.1478142,114.5005596,19z/data=!4m4!3m3!8m2!3d-3.147778!4d114.501167?entry=ttu" class="btn btn-success">Buka Google Maps</a>
</section>

<section id="buku-tamu" class="mt-3 bg-1 pt-4">
	<p class="text-bold text-center mb-2">Buku Tamu</p>
	<div class="container px-4">
		<div class="chat border rounded p-3 bg-2 my-3" style="max-height: 50vh; overflow-y: auto;">
			<div class="card mb-2">
				<div class="card-body py-1">
					<h5 class="card-title border-bottom">~ ST. Humaira</h5>
					<div class="d-flex justify-content-between flex-wrap">
						<p class="card-text">Semoga langgeng</p>
						<p class="card-text"><small class="text-body-secondary">5/7/2024 08.00</small></p>
					</div>
				</div>
			</div>
			<div class="card mb-2">
				<div class="card-body py-1">
					<h5 class="card-title border-bottom">~ Muhammad Ikhsan</h5>
					<div class="d-flex justify-content-between flex-wrap">
						<p class="card-text">Selamat menempuh kehidupan baru, semoga dimudahkan dalam mengarung kehidupan rumah tangga.</p>
						<p class="card-text"><small class="text-body-secondary">Kemarin 20.00</small></p>
					</div>
				</div>
			</div>
			<div class="card mb-2 text-end">
				<div class="card-body py-1">
					<h5 class="card-title border-bottom">Saya ~</h5>
					<div class="d-flex justify-content-between flex-wrap flex-row-reverse">
						<p class="card-text">Selamat</p>
						<p class="card-text "><small class="text-body-secondary">06.35</small></p>
					</div>
				</div>
			</div>
			<div class="card mb-2 text-end">
				<div class="card-body py-1">
					<h5 class="card-title border-bottom">Saya ~</h5>
					<div class="d-flex justify-content-between flex-wrap flex-row-reverse">
						<p class="card-text">Tes scroll</p>
						<p class="card-text "><small class="text-body-secondary">06.35</small></p>
					</div>
				</div>
			</div>
		</div>
		<form id="buku-tamu-form" class="border rounded bg-2 card">
			<div class="card-body pb-0">
				<div class="inputHidden">
					<input type="hidden" name="nama-tabel" value="<?= $data['nama-tabel'] ?>">
					<input type="hidden" name="idOrang" value="-1">
				</div>
				<div class="inputGruop">
					<div class="form-floating mb-3">
						<input placeholder="Nama" id="nama" class="form-control" type="text" name="nama" required value="<?= ($data['to'] != 'Bapak/Ibu/Saudara(i)') ? $data['to'] : ''?>">
						<label for="nama">Nama</label>
					</div>
					<div class="form-floating mb-3">
						<textarea placeholder="Pesan dan Doa" id="isi" class="form-control" name="isi" required style="height: 7rem;"></textarea>
						<label for="isi">Doa dan Ucapan</label>
					</div>
					<div class="form-floating mb-3">
						<select class="form-select" id="hadir" name="hadir">
							<option value="1">Akan Hadir</option>
							<option value="0">Belum Tahu</option>
							<option value="-1">Berhalangan Hadir</option>
						</select>
						<label for="hadir">Apakah kamu berhadir</label>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-success" type="submit">Kirim</button>
			</div>
		</form>
	</div>

	<!-- DB pengunjung    -> id, nama
		 DB bukuTamu (1/1)-> id, idOrang, isiUcapan, kapan 
		 
		 idOrang akan disimpan kedalam localstorage saat pertama kali ngirim, seterusnya akan menggunakan itu
		 -->
</section>


<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', ()=>{
		// bersihkan #a dalam URL
		if (window.location.hash !== '') {
	        // Menghilangkan fragment dari URL tanpa memuat ulang halaman
	        history.replaceState(null, null, window.location.pathname + window.location.search);
	    }

		// buka undangan
		const bukaUndangan = document.querySelector('[name=buka-undangan]');
		const body = document.getElementById('body-main');
		bukaUndangan.addEventListener('click', ()=>{
			body.classList.remove('not-scroll')
		});

		// mekanisme agenda acara
		const linksRangkaianAcara = document.querySelectorAll("#rangkaian-acara-menu p");
		scrollRangkaianAcara(linksRangkaianAcara);
		linksRangkaianAcara.forEach( link => {
			link.addEventListener('click', event => {
				// mengubah label aktif
				linksRangkaianAcara.forEach(link => link.classList.remove('on'));
				link.classList.add('on');
				// scroll tampilan detail
				scrollRangkaianAcara(linksRangkaianAcara);
			})
		});

		// MENJAGA UKURAN COUNTDOWN
		const cdAkad = document.getElementById('countdown-akad')
		const cdResepsi = document.getElementById('countdown-resepsi');
		const w = document.querySelector('.rangkaian-acara-bungkus').offsetWidth;
		cdAkad.setAttribute('width', w)
		cdResepsi.setAttribute('width', w);

		// ID-ORANG
		const idOrang = document.querySelector('[name=idOrang]');
		if(localStorage.getItem('<?= BASE_ID_ORANG ?>') !== null){
			idOrang.value = localStorage.getItem('<?= BASE_ID_ORANG ?>');
		}

		// MENGIRIM UCAPAN
		const bukuTamu = document.getElementById('buku-tamu-form');
		bukuTamu.addEventListener('submit', event =>{
			event.preventDefault();
			ajaxSet(bukuTamu, res => {
				localStorage.setItem('<?= BASE_ID_ORANG ?>', res['idOrang']);
				document.querySelector('#buku-tamu #isi').value = '';
				let count = document.querySelector('#buku-tamu .chat').children.length;
				ajaxGet({count, namaTabel:'<?= $data['nama-tabel'] ?>'}, res=>updateBukuTamu(res));
			});
		})
		

		// MENAMPILKAN CHAT BARU
		let count = document.querySelector('#buku-tamu .chat').children.length;
		ajaxGet({count, namaTabel:'<?= $data['nama-tabel'] ?>'}, res=>updateBukuTamu(res))
		setInterval(()=>{
			count = document.querySelector('#buku-tamu .chat').children.length;
			ajaxGet({count, namaTabel:'<?= $data['nama-tabel'] ?>'}, res=>updateBukuTamu(res))
		}, 10000);
	})


	function scrollRangkaianAcara (links) {
		links.forEach(link=>{
			if(link.classList.contains('on')){
				const targetElemet = document.getElementById(link.getAttribute('acara'));
				document.querySelector('.rangkaian-acara-bungkus').scrollTo({
					left: targetElemet.offsetLeft,
					behavior: 'smooth'
				});
			}
		})
	}

	function ajaxSet (form, callback=''){
		let data = new FormData(form);
		let ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				let response = JSON.parse(ajax.responseText);
				console.log(ajax.responseText)
				// console.log(response)
				if(typeof(callback) === 'function') callback(response);
			}else{
				console.log(ajax.statusText);
			}
		};
		ajax.open('POST', '<?= BASE_URL ?>public/kirimAjax', true);
		ajax.setRequestHeader('Accept', 'application/json');
		ajax.send(data);
	}
	function ajaxGet (data={}, callback='') {
		let ajax = new XMLHttpRequest();
		const urlEncodedData = new URLSearchParams(data).toString();
		ajax.onreadystatechange = function() {
			if (ajax.readyState == 4 && ajax.status == 200) {
				let response = JSON.parse(ajax.responseText);
				console.log(ajax.responseText);
				if(typeof(callback) === 'function') callback(response);
			}else{
				console.log(ajax.statusText);
			}
		};
		ajax.open('POST', '<?= BASE_URL ?>public/ambilAjax', true);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(urlEncodedData);
	}
	function updateBukuTamu (res) {
		// akan menerima berapa banyak data yang beda antara UI dan DB
		if(res.length){
			console.log(res)
		}
	}


</script>
