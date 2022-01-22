<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <p class="text-white">Copyright &copy; Your Website 2021</p>
            </div>
            <div id="map" class="col-md map col-md"></div>
            <script>
                var place = [46.95404, 7.47354];

                var map = L.map('map').setView(place, 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
                L.marker(place).addTo(map)
                    .bindPopup('WISS<br>Ostermundigenstrasse 81, 3006 Bern')
                    .openPopup();
            </script>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
