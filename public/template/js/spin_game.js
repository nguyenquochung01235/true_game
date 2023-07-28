let inputBackground = document.getElementById('input_background');
let setBackgroundButton = document.getElementById('set_background');
let container = document.getElementById('container');
let url;

function getImagebackGround(event) { 
    const fileBackground = event.target.files[0];
    url = window.URL.createObjectURL(fileBackground);
}
inputBackground.addEventListener('change', getImagebackGround);

setBackgroundButton.addEventListener('click', ()=>{
    console.log(url);
    container.style.backgroundImage = `url('${url}')`;
});