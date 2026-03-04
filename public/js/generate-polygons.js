function generateHousePolygon(lat, lng, widthMeters = 10, heightMeters = 10) {
    const earthRadius = 6378137; // meters

    const dLat = (heightMeters / earthRadius) * (180 / Math.PI);
    const dLng = (widthMeters / (earthRadius * Math.cos(Math.PI * lat / 180))) * (180 / Math.PI);

    return [
        [lng - dLng/2, lat - dLat/2], // SW
        [lng + dLng/2, lat - dLat/2], // SE
        [lng + dLng/2, lat + dLat/2], // NE
        [lng - dLng/2, lat + dLat/2], // NW
        [lng - dLng/2, lat - dLat/2]  // close polygon
    ];
}

function housesToPolygons(housePoints) {
    return {
        "type": "FeatureCollection",
        "features": housePoints.map(house => ({
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [generateHousePolygon(house.lat, house.lng)]
            },
            "properties": {
                id: house.id,
                house_number: house.house_number,
                status: house.status
            }
        }))
    };
}
