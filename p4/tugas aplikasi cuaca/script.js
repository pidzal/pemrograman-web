// Simulasi data cuaca
const weatherData = {
  "Jakarta": {
    temperature: 30,
    condition: "Cerah"
  },
  "Bandung": {
    temperature: 25,
    condition: "Hujan Ringan"
  },
  "Surabaya": {
    temperature: 33,
    condition: "Panas Terik"
  },
  "Samarinda": {
    temperature: 28,
    condition: "Mendung"
  }
};

const input = document.getElementById("cityInput");
const button = document.getElementById("btn");

button.addEventListener("click", function() {
  const city = input.value; 
  const data = weatherData[city]; 

  if (data) {
    console.log(`Cuaca di ${city}:`);
    console.log(`Suhu: ${data.temperature}°C`);
    console.log(`Kondisi: ${data.condition}`);
  } else {
    console.log(`Data cuaca untuk kota ${city} tidak tersedia.`);
  }
});
