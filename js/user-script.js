function show_form() {
	var x = document.getElementById("regStd");
	if (x.style.display === "none") {
		x.style.display = "block";
	}
}

// GET API WILAYAH INDONESIA
fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
	.then((response) => response.json())
	.then((provinces) => {
		var data = provinces;
		var temp_data = `<option>Pilih</option>`;
		data.forEach((element) => {
			temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
		});
		document.getElementById("provinsi").innerHTML = temp_data;
	});

const selectProvinsi = document.getElementById('provinsi');
const selectKota = document.getElementById('kota');
const selectKecamatan = document.getElementById('kecamatan');
const selectKelurahan = document.getElementById('kelurahan');

selectProvinsi.addEventListener('change', (e) => {
	var provinsi = e.target.options[e.target.selectedIndex].dataset.prov;
	fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
		.then((response) => response.json())
		.then((regencies) => {
			var data = regencies;
            var temp_data = `<option>Pilih</option>`;
            document.getElementById('kota').innerHTML = '<option>Pilih</option>';
            document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
            document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
            data.forEach((element) => {
            	temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById("kota").innerHTML = temp_data;
        });
});
selectKota.addEventListener('change', (e) => {
    var kota = e.target.options[e.target.selectedIndex].dataset.prov;
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
        .then((response) => response.json())
        .then((districts) => {
            var data = districts;
            var temp_data = `<option>Pilih</option>`;
            document.getElementById('kecamatan').innerHTML = '<option>Pilih</option>';
            document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
            data.forEach((element) => {
                temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById("kecamatan").innerHTML = temp_data;
        });
});
selectKecamatan.addEventListener('change', (e) => {
    var kecamatan = e.target.options[e.target.selectedIndex].dataset.prov;
    fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
        .then((response) => response.json())
        .then((villages) => {
            var data = villages;
            var temp_data = `<option>Pilih</option>`;
            document.getElementById('kelurahan').innerHTML = '<option>Pilih</option>';
            data.forEach((element) => {
                temp_data += `<option data-prov="${element.id}" value="${element.name}">${element.name}</option>`;
            });
            document.getElementById("kelurahan").innerHTML = temp_data;
        });
});