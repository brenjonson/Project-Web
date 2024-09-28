function getLocation() {
    if (navigator.geolocation) {
        if(confirm("Do you want to share your current location?")) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Location access denied by user.");
        }
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    // Update the location input field
    var locationInput = document.getElementById("base-input2");
    if (locationInput) {
        locationInput.value = "Latitude: " + lat + ", Longitude: " + lon;
    } else {
        console.error("Location input field not found");
    }

    // Update hidden input fields for latitude and longitude
    var latitudeInput = document.getElementById("latitude");
    var longitudeInput = document.getElementById("longitude");
    if (latitudeInput && longitudeInput) {
        latitudeInput.value = lat;
        longitudeInput.value = lon;
    } else {
        console.error("Latitude or longitude input fields not found");
    }
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
}
