document.addEventListener('DOMContentLoaded', function () {

    const phoenixParkCenter = [17.9593149, -76.9357434];
    const map = L.map('map').setView(phoenixParkCenter, 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 }).addTo(map);

    // Draw village boundary
    const boundaryLayer = L.geoJSON(phoenixParkBoundary, {
        style: { color: "#0d6efd", weight: 2, fillOpacity: 0.05 }
    }).addTo(map);
    map.fitBounds(boundaryLayer.getBounds());

    // Generate polygons from house points
    const housesGeoJSON = housesToPolygons(housePoints);

    // Draw houses
    L.geoJSON(housesGeoJSON, {
        style: function(feature) {
            switch(feature.properties.status) {
                case 'available': return { color: 'green', weight: 1, fillOpacity: 0.6 };
                case 'pending': return { color: 'orange', weight: 1, fillOpacity: 0.6 };
                case 'claimed': return { color: 'red', weight: 1, fillOpacity: 0.6 };
            }
        },
        onEachFeature: function(feature, layer) {
            if (feature.properties.status === 'available') {
                layer.on('click', function() {
                    document.getElementById('house_id').value = feature.properties.id;
                    document.getElementById('house_number').value = feature.properties.house_number;
                    document.getElementById('houseModal').style.display = 'block';
                });
                layer.on('mouseover', function() { layer.setStyle({ weight: 3 }); });
                layer.on('mouseout', function() { layer.setStyle({ weight: 1 }); });
            }
        }
    }).addTo(map);

});

// document.addEventListener('DOMContentLoaded', function () {

//     const phoenixParkCenter = [17.9593149, -76.9357434];

//     const map = L.map('map').setView(phoenixParkCenter, 17);

//     // OpenStreetMap tiles
//     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//         maxZoom: 19
//     }).addTo(map);

//     // Draw boundary
//     const boundaryLayer = L.geoJSON(phoenixParkBoundary, {
//         style: { color: "#0d6efd", weight: 2, fillOpacity: 0.05 }
//     }).addTo(map);

//     map.fitBounds(boundaryLayer.getBounds());

//     // Draw house polygons
//     L.geoJSON(sampleHouses, {
//         style: function(feature) {
//             switch(feature.properties.status) {
//                 case 'available': return { color: 'green', weight: 1, fillOpacity: 0.6 };
//                 case 'pending': return { color: 'orange', weight: 1, fillOpacity: 0.6 };
//                 case 'claimed': return { color: 'red', weight: 1, fillOpacity: 0.6 };
//             }
//         },
//         onEachFeature: function(feature, layer) {

//             if (feature.properties.status === 'available') {

//                 // click opens modal
//                 layer.on('click', function() {
//                     document.getElementById('house_id').value = feature.properties.id;
//                     document.getElementById('house_number').value = feature.properties.house_number;
//                     document.getElementById('houseModal').style.display = 'block';
//                 });

//                 // hover effect
//                 layer.on('mouseover', function() { layer.setStyle({ weight: 3 }); });
//                 layer.on('mouseout', function() { layer.setStyle({ weight: 1 }); });
//             }
//         }
//     }).addTo(map);
// });
