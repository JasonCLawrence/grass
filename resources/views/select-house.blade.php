<!DOCTYPE html>
<html>
<head>
    <title>Select Your House</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <style>
        #map { height: 100vh; width: 100%; }

        .modal {
            display:none;
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:#fff;
            padding:20px;
            box-shadow:0 0 20px rgba(0,0,0,.3);
            z-index:1000;
            width:300px;
            border-radius:8px;
        }

        .modal input { width:100%; padding:8px; margin-bottom:10px; }
    </style>
</head>
<body>
<div id="map"></div>

<div class="modal" id="houseModal">
    <h3>Confirm Your House</h3>
    <form id="houseForm">
        <input type="hidden" id="house_id">
        <input type="hidden" id="house_number">

        <input type="text" id="name" placeholder="Full Name" required>
        <input type="email" id="email" placeholder="Email" required>

        <button type="submit">Submit</button>
        <button type="button" onclick="closeModal()">Cancel</button>
    </form>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="{{ asset('js/boundary.js') }}"></script>
<script src="{{ asset('js/house-points.js') }}"></script>
<script src="{{ asset('js/generate-polygons.js') }}"></script>
<script src="{{ asset('js/house-map.js') }}"></script>

<script>
function closeModal() { document.getElementById('houseModal').style.display = 'none'; }
</script>


</body>
</html>
