@extends('layouts.main')

@section('title', 'Maps')

@section('page-style')
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Leaflet CSS-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('page-script')
    <script>
        // Get Map from Leaflet
        function getMap() {
            var map = L.map('map').setView([-6.2777832, 106.8026676], 10);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            return map;
        }

        // Get Data From Databases
        async function getData() {
            try {
                const geojsonData = await $.ajax("{{ asset('geojson/Adm_Kemang.geojson') }}");
                const umkmData = await $.ajax("/umkm");

                const admKemang = await mapData(geojsonData, umkmData);
                return admKemang;
            } catch (error) {
                console.error(error);
                throw error;
            }
        }

        async function mapData(geojsonData, umkmData) {
            let admKemang = JSON.parse(geojsonData);
            let featureLength = admKemang.features.length;
            let geojsonLayer = L.geoJson(admKemang, {
                style: function(feature) {
                    return {
                        fillColor: feature.properties
                            .Warna, // Gunakan nilai properti 'Warna' sebagai fillColor
                        fillOpacity: 1, // Tentukan opasitas
                        color: 'black', // Warna garis tepi
                        weight: 3 // Ketebalan garis tepi
                    }
                },
                onEachFeature: function(feature, layer) {
                    let namaDaerah = feature.properties
                        .NAMOBJ; // Get the name of the area from the properties

                    // Bind the tooltip with the name of the area
                    layer.bindTooltip(namaDaerah, {
                        permanent: true,
                        direction: 'center'
                    }).openTooltip();
                    layer.on('click', function() {
                        map.fitBounds(layer.getBounds()); // Fit bounds ke daerah yang diklik
                    });
                }
            }).addTo(map);

            // Tambahkan marker UMKM ke layer GeoJSON
            umkmData.forEach(item => {
                let lat = item.latitude;
                let lon = item.longitude;
                let alamat = item.alamat_umkm; // Ubah dengan nama kolom yang sesuai di tabel UMKM
                let namaUmkm = item.nama_umkm; // Ubah dengan nama kolom yang sesuai di tabel UMKM
                console.log(item);
                let marker = L.marker([lat, lon]).bindPopup(`<b>${namaUmkm}</b><br>${alamat}`);
                marker.on('click', function() {
                    map.fitBounds(marker.getLatLng().toBounds(
                        100
                    )); // Fit bounds pada marker yang diklik dengan jarak padding sebesar 100 piksel
                });
                geojsonLayer.addLayer(marker);
            });

            geojsonLayer.addTo(map);
            fitBounds(map, geojsonLayer);

            return admKemang;
        }

        function fitBounds(map, geojsonData) {
            return map.fitBounds(geojsonData.getBounds());
        }
    </script>
    <script>
        let map = getMap();
        getData().then(function(admKemang) {
            console.log(admKemang);
        }).catch(function(error) {
            console.error(error);
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="map" style="height: 700px"></div>
            <div class="row">

            </div>
        </div>
    </div>
@endsection
