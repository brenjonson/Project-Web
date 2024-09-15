<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Location</title>
</head>
<body>
    <h1>Get User Location</h1>
    <!-- <button onclick="getLocation()" disable>Get Location</button> -->
    <input type="button" value="Get Location" onclick="getLocation()">

    <p id="latitude"></p>
    <p id="longitude"></p>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;

            document.getElementById("latitude").innerHTML = "Latitude: " + lat;
            document.getElementById("longitude").innerHTML = "Longitude: " + lon;

            fetch('/store-location', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    latitude: lat,
                    longitude: lon
                })
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            });
        }
    </script>
</body>
</html>