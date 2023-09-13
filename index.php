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

<script src="script.js"></script>
</body>
</html>