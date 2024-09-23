document.addEventListener('DOMContentLoaded', () => {
    const mapImage = document.querySelector('.map-container img');
    const markersContainer = document.getElementById('markers-container');
    const latMin = 16.441250;
    const latMax = 16.482222;
    const lonMin = 102.806139;
    const lonMax = 102.832306;

    function placeMarkers() {
        const mapWidth = mapImage.offsetWidth;
        const mapHeight = mapImage.offsetHeight;

        // Check if we're dealing with a single item or multiple items
        const itemsToProcess = Array.isArray(items) ? items : [item];

        itemsToProcess.forEach(item => {
            if (item.latitude && item.longitude) {
                const lat = parseFloat(item.latitude);
                const lon = parseFloat(item.longitude);

                // Map latitude and longitude to x and y
                const x = ((lon - lonMin) / (lonMax - lonMin)) * mapWidth;
                const y = ((latMax - lat) / (latMax - latMin)) * mapHeight;

                // Create marker element
                const marker = document.createElement('div');
                marker.classList.add('map-marker');
                marker.style.left = x + 'px';
                marker.style.top = y + 'px';

                // Add tooltip or click event
                marker.title = `${item.type} reported by ${item.reporter_name}`;
                marker.addEventListener('click', () => {
                    if (Array.isArray(items)) {
                        // For search page: Redirect to item detail page
                        window.location.href = `/item/${item.id}`;
                    } else {
                        // For detail page: Show alert with item info
                        alert(`Item: ${item.item}\nLocation: ${item.location}`);
                    }
                });

                // Append marker to container
                markersContainer.appendChild(marker);
            }
        });
    }

    // Ensure the image has loaded before placing markers
    if (mapImage.complete) {
        placeMarkers();
    } else {
        mapImage.onload = placeMarkers;
    }

    window.placeMarkers = placeMarkers;
});
