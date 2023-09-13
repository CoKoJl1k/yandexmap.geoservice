<!DOCTYPE html>
<html>
<head>
    <title>Координаты плитки Яндекс карты</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Координаты плитки Яндекс карты</h1>

<form id="coordinatesForm">
    <label for="latitude">Широта:</label>
    <input type="text" id="latitude" name="latitude" value="55.575" required>
    <label for="longitude">Долгота:</label>
    <input type="text" id="longitude" name="longitude" value="37.59" required>
    <label for="zoom">Зум:</label>
    <input type="text" id="zoom" name="zoom" value="16" required>
    <button type="submit">Рассчитать</button>
</form>

<img id="image"/>
<img id="imageCarPark"/>
<div id="result"></div>
<div id="errorMessage"></div>
<div id="container"></div>


<script>
    /*
    let form = document.getElementById('coordinatesForm');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let errorMessage = document.getElementById('errorMessage');
        errorMessage.innerHTML = '';

        let latitude = parseFloat(document.getElementById('latitude').value);
        let longitude = parseFloat(document.getElementById('longitude').value);
        let zoom = parseInt(document.getElementById('zoom').value);

        if (isNaN(latitude) || isNaN(longitude) || isNaN(zoom)) {
            errorMessage.innerHTML = '<div class="error">Пожалуйста, введите корректные значения</div>';
            return;
        }

        let tileX = Math.floor((longitude + 180) / 360 * Math.pow(2, zoom));
        let tileY = Math.floor((1 - Math.log(Math.tan(latitude * Math.PI / 180) + 1 / Math.cos(latitude * Math.PI / 180)) / Math.PI) / 2 * Math.pow(2, zoom));

        let tileUrl = `https://core-renderer-tiles.maps.yandex.net/tiles?l=map&v=20.07.06-0&x=${tileX}&y=${tileY}&z=${zoom}&scale=1&lang=ru_RU`;
        let tileUrlCarPark = `https://core-carparks-renderer-lots.maps.yandex.net/maps-rdr-carparks/tiles?l=carparks&x=${tileX}&y=${tileY}&z=${zoom}&scale=1&lang=ru_RU`;

        result.innerHTML = `<p>X: ${tileX}, Y: ${tileY}</p>`;
        let image = document.getElementById('image');
        image.src = tileUrl;
        let imageCarPark = document.getElementById('imageCarPark');
        imageCarPark.src = tileUrlCarPark;
    });

    const imageCarPark = document.getElementById('imageCarPark');

    const observer = new MutationObserver(function (mutationsList) {
        for (let mutation of mutationsList) {
            if (mutation.attributeName === 'src') {

                let newSource = imageCarPark.getAttribute('src');
                let tempImage = new Image();
                tempImage.src = newSource;

                tempImage.addEventListener('error', function () {
                    fetch(newSource)
                        .then(function (response) {
                            if (response.status === 204) {
                                let errorMessage = document.getElementById('errorMessage');
                                errorMessage.innerHTML = '<div class="error">Парковки не найдены в данной области</div>'
                            }
                        })
                        .catch(function () {
                            let errorMessage = document.getElementById('errorMessage');
                            errorMessage.innerHTML = '<div  class="error">Произошла ошибка при выполнении запроса</div>';
                            console.log('Произошла ошибка при выполнении запроса');
                        });
                });
            }
        }
    });
    observer.observe(imageCarPark, {attributes: true});*/
</script>
<script src="script.js"></script>
</body>
</html>