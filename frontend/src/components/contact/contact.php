<section class="contact py-6">
    <div class="contact-container">
        <h1 class="contact-title">CONTACT US</h1>
        <p class="contact-subtitle">CONTACT INFORMATION</p>

        <div class="contact-content">
            <div class="left-side">

                <!-- ADDRESS -->
                <div class="contact-details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="detail-topic">
                        Address
                    </div>
                    <div class="detail-info">
                        715 Hilton St. Cefel's Park Subdivision 3, Caloocan, Philippines, 1427
                    </div>
                </div>

                <!-- PHONE -->
                <div class="contact-details">
                    <i class="fas fa-phone"></i>
                    <div class="detail-topic">
                        Phone
                    </div>
                    <div class="detail-info">
                        0915 350 2902
                    </div>
                </div>

                <!-- MAIL -->
                <div class="contact-details">
                    <i class="fas fa-envelope"></i>
                    <div class="detail-topic">
                        Email
                    </div>
                    <div class="detail-info">
                        svit.edu@gmail.com
                    </div>
                </div>

                <!-- FACEBOOK -->
                <div class="contact-details">
                    <i class="fab fa-facebook-f"></i>
                    <div class="detail-topic">
                        Facebook
                    </div>
                    <div class="detail-info">
                        svitcaloocan
                    </div>
                </div>

            </div>

            <div class="right-side">
                <div id="map"></div>

            </div>
        </div>


    </div>
</section>

<!-- GOOGLE MAP API -->
<script>
    (g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })({
        key: "AIzaSyCayTuZibJlMg3xbBcuZTICxsY_-9xhBQg",
        v: "weekly",
        // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
        // Add other bootstrap parameters as needed, using camel case.
    });
</script>

<script>

    let map;

    async function initMap() {

        const position = { lat: 14.768355905508301, lng: 121.08141537282562 };
        // Request needed libraries.
        //@ts-ignore
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

        map = new Map(document.getElementById("map"), {
            zoom: 19,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        const marker = new AdvancedMarkerElement({
            map: map,
            position: position,
            title: "St. Vincent Institute of Technology",
        });
    }

    initMap();

</script>