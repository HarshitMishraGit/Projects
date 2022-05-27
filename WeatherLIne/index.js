ClickHandeler = () => {
    cityName = document.getElementById('cityName').value
    input = document.getElementById('cityName')
    
     city = document.getElementById('Place');
     Temp = document.getElementById('Temp');
    Humidity = document.getElementById('Humidity');
    wind=document.getElementById('Wind_speed')
    // var Wind_speed = document.getElementById('Wind_speed').innerHTML;
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + cityName + '&appid=5789f3dc3d6552fd605e4074817c3b2b')
        .then(response=>response.json())
        .then(data => {
            console.log(data)
            var tempValue = data['main']['temp'];
            var humidityValue = data['main']['humidity'];
            var windSpeedValue = data['wind']['speed'];
            var nameValue = data['name'];
            var descValue = data['weather'][0]['description'];
          
            city.innerHTML = nameValue;
            Humidity.innerHTML = humidityValue+'%';
            Temp.innerHTML = (tempValue - 273.15).toFixed(2);
            wind.innerHTML = windSpeedValue+'km/h';
            input.value ="";
            console.log(city)

            console.log(tempValue)
            console.log(nameValue)
            console.log(descValue)
            document.getElementById('hideStatus').classList.remove('casper');
            document.getElementById('initial_status').classList.add('casper');
        
          
          })
        
        .catch(err => alert(err))
  
}
onSubmitHandeler=(obj)=> {
    console.log(obj)
}