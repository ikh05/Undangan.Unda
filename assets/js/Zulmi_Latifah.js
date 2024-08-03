let bukaUndangan = document.querySelector('[name=buka-undangan]');
let body = document.getElementById('body-main');
bukaUndangan.addEventListener('click', ()=>{
	body.classList.remove('not-scroll')
})