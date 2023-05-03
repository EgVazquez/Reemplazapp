let map = L.map('map').setView([-32.954193,-60.635994,], 100)

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution : '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

document.getElementById('select-location').addEventListener('change', function(e){
    let coords = e.target.value.split(",");
    map.flyTo(coords, 18);
})

//agregar marcador
//Colegio Cristo Rey
const cristoRey = L.circleMarker(L.latLng(-32.954193,-60.635994),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Colegio Cristo Rey</h5>
    <p>1 vacante disponible</p>
    <a href="#" class="botonModal">Haga click aqui</a>
    `).openPopup();

//Escuela Superior De Comercio N° 49 "Justo Jose De Urquiza
const urquiza = L.circleMarker(L.latLng(-32.9421547,-60.6531765),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Superior de comercio</h5>
    <p>No hay vacantes disponibles</p>
`);

//Colegio Marista Nuestra Señora del Rosario
const marista = L.circleMarker(L.latLng(-32.9431762,-60.6534907),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Colegio Marista Nuestra Señora del Rosario</h5>
    <p>No hay vacantes disponibles</p>
`);

//Colegio Misericordia Rosario
const misericordia = L.circleMarker(L.latLng(-32.9459982,-60.6542217),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Colegio Misericordia Rosario</h5>
    <p>No hay vacantes disponibles</p>
`);

//Escuela Normal Superior Nº2 Provincial Nº35
const normal2 = L.circleMarker(L.latLng(-32.9438334,-60.6517056),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Escuela Normal Superior Nº2</h5>
    <p>No hay vacantes disponibles</p>
`);

//Colegio Sagrado Corazón de Rosario
const sagradoCorazon = L.circleMarker(L.latLng(-32.9495059,-60.651624),{
    radius: 6,
    fillColor: "red",
    color: "blue",
    weight: 2,
    opacity: 1,
    fillOpacity: 0.6,
}).addTo(map).bindPopup(`
    <h5>Colegio Sagrado Corazón de Rosario</h5>
    <p>No hay vacantes disponibles</p>
`);


// funcionalidad modal
const openModal = document.querySelector('.botonModal');

const modal = document.querySelector('.modal');

const closeModal = document.querySelector('.modal_close')

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modal-show');
});

closeModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal-show');
});




