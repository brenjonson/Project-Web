document.addEventListener('DOMContentLoaded', function() {
    const mapImage = document.getElementById('map-image');
    const markersContainer = document.getElementById('markers-container');
    const popup = document.getElementById('popup');
    const mapScrollContainer = document.querySelector('.map-scroll-container');
    const latMin = 16.441250;
    const latMax = 16.482222;
    const lonMin = 102.806139;
    const lonMax = 102.832306;

    function placeMarker() {
        const mapWidth = mapImage.offsetWidth;
        const mapHeight = mapImage.offsetHeight;

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
            marker.addEventListener('mouseover', (event) => {
                showPopup(item, event);
            });

            // Add mouseout event to hide popup
            marker.addEventListener('mouseout', () => {
                hidePopup();
            });

            // Append marker to container
            markersContainer.appendChild(marker);
        } else {
            console.log('No location data available for this item.');
        }
    }

    function showPopup(item, event) {
        const imagePath = item.image_path ? item.image_path : defaultImagePath;
        popup.innerHTML = `
            <img src="${imagePath}" alt="${item.type}">
            <h3 class="font-semibold">${item.item}</h3>
            <p>ผู้แจ้ง: ${item.reporter_name}</p>
            <p>สถานที่: ${item.location}</p>
            <p>ติดต่อที่: ${item.contact || 'ไม่ระบุ'}</p>
        `;

        const rect = mapScrollContainer.getBoundingClientRect();
        const scrollLeft = mapScrollContainer.scrollLeft;
        const scrollTop = mapScrollContainer.scrollTop;

        popup.style.left = `${event.clientX - rect.left + scrollLeft}px`;
        popup.style.top = `${event.clientY - rect.top + scrollTop - popup.offsetHeight - 10}px`;

        popup.style.zIndex = '1000';
        popup.classList.remove('hidden');
    }

    function hidePopup() {
        popup.classList.add('hidden');
    }

    // Ensure the image has loaded before placing the marker
    if (mapImage.complete) {
        placeMarker();
    } else {
        mapImage.onload = placeMarker;
    }

    // Add window resize event listener to reposition marker when the window is resized
    window.addEventListener('resize', function() {
        // Clear existing markers
        markersContainer.innerHTML = '';
        placeMarker();
    });
});
