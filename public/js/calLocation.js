const mapImage = document.getElementById('map-image');
const markersContainer = document.getElementById('markers-container');
const popup = document.getElementById('popup');
const latMin = 16.441250;
const latMax = 16.482222;
const lonMin = 102.806139;
const lonMax = 102.832306;

function placeMarkers() {
    const mapWidth = mapImage.offsetWidth;
    const mapHeight = mapImage.offsetHeight;

    items.forEach(item => {
        if (item.latitude && item.longitude) {
            const lat = parseFloat(item.latitude);
            const lon = parseFloat(item.longitude);

            // Map latitude and longitude to x and y
            const x = ((lon - lonMin) / (lonMax - lonMin)) * mapWidth;
            const y = ((latMax - lat) / (latMax - latMin)) * mapHeight;

            // Create marker element
            const marker = document.createElement('div');
            marker.classList.add('map-marker');
            marker.style.left = `${x}px`;
            marker.style.top = `${y}px`;

            // Add mouseover event to show popup
            marker.addEventListener('mouseover', () => {
                showPopup(item, marker);
            });

            // Add mouseout event to hide popup
            marker.addEventListener('mouseout', () => {
                hidePopup();
            });

            // Add click event to redirect to item detail page
            marker.addEventListener('click', () => {
                window.location.href = `/item/${item.id}`;
            });

            // Append marker to container
            markersContainer.appendChild(marker);
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    // Ensure the image has loaded before placing markers
    if (mapImage.complete) {
        placeMarkers();
    } else {
        mapImage.onload = placeMarkers;
    }

    // Add window resize event listener to reposition markers when the window is resized
    window.addEventListener('resize', placeMarkers);
});
