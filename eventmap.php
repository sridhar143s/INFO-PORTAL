<!DOCTYPE html>
<html lang="en">
  <head>
    <title>eventmap - Wizalerts</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.heat@0.2.0/dist/leaflet-heat.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta property="og:title" content="eventmap - Wizalerts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Poppins;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.55;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
      #map {
            width: 100%;
            height: 100%;
        }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <style>
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./eventmap.css" rel="stylesheet" />

      <div class="eventmap-container">
        <nav data-role="Header" class="eventmap-navbar">
          <h1 class="eventmap-logo">Wizalerts</h1>
          <div class="eventmap-right-side">
            <div class="eventmap-links-container">
              <a href="index.html" class="eventmap-navlink">Home</a>
              <span class="eventmap-text">Map</span>
              <a href="hostpre.html" class="eventmap-navlink1">Host</a>
              <span class="eventmap-text1">Message</span>
            </div>
            <img
              alt="image"
              src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/fdb97264-be3f-41e2-be96-6156cf873eac/88b35d2b-28ed-4931-b942-3c337d828482?org_if_sml=12526"
              class="eventmap-image"
            />
          </div>
        </nav>
        <div class="eventmap-container1">
          <div class="eventmap-container2">
            <span class="eventmap-text2">Type</span>
            <span class="eventmap-text3">Location</span>
            <input
              type="text"
              name="Location"
              placeholder="Location"
              class="input eventmap-textinput"
            />
            <span class="eventmap-text4">Date</span>
            <span class="eventmap-text5">Mode</span>
            <span class="eventmap-text6">Team</span>
            <input
              type="date"
              name="date"
              placeholder="Date"
              class="input eventmap-textinput1"
            />
            <button type="button" class="button eventmap-button">
              Apply Filter
            </button>
            <button type="button" class="button eventmap-button1">
              Clear Filter
            </button>
            <select class="eventmap-select">
              <option value="All">All</option>
              <option value="Events">Events</option>
              <option value="Sports">Sports</option>
              <option value="Cultrals">Cultrals</option>
              <option value="Industrial Visit">Industrial Visit</option>
              <option value="Workshop">Workshop</option>
              <option value="Online Course">Online Course</option>
            </select>
            <select class="eventmap-select1">
              <option value="Opened" selected="">Opened</option>
              <option value="Closed">Closed</option>
            </select>
            <select class="eventmap-select2">
              <option value="All">All</option>
              <option value="Online">Online</option>
              <option value="Offline">Offline</option>
            </select>
            <select class="eventmap-select3">
              <option value="All">All</option>
              <option value="Individual">Individual</option>
              <option value="Team">Team</option>
            </select>
            <span class="eventmap-text7">status</span>
          </div>
          <div class="eventmap-container3">
            <div id="map"></div>
            <script>
              var events = [
                  <?php
                  $host = "localhost";
                  $dbusername = "root";
                  $dbpassword = "";
                  $dbname = "evedetail";
      
                  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
      
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }
      
                  $sql = "SELECT latitude, longitude, name, start_date, end_date, event_type, mode, registration_link, type, location, team, status FROM evedetail";
                  $result = $conn->query($sql);
      
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          $latitude = $row["latitude"];
                          $longitude = $row["longitude"];
                          $name = $row["name"];
                          $start_date = $row["start_date"];
                          $end_date = $row["end_date"];
                          $event_type = $row["event_type"];
                          $mode = $row["mode"];
                          $registration_link = $row["registration_link"];
                          $type = $row["type"];
                          $location = $row["location"];
                          $team = $row["team"];
                          $status = $row["status"];
                          echo "[$latitude, $longitude, '$name', '$start_date', '$end_date', '$event_type', '$mode', '$registration_link', '$type', '$location', '$team', '$status'],";
                      }
                  }
      
                  $conn->close();
                  ?>
              ];
      
              var map = L.map('map').setView([20.5937, 78.9629], 5);
      
              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
              }).addTo(map);
      
              var markerLayer = L.layerGroup();
              var appliedFilters = {};
      
              function filterMarkers() {
                  markerLayer.clearLayers();
                  var modeFilter = document.getElementById('modeFilter').value;
                  var dateFilter = document.getElementById('dateFilter').value;
                  var typeFilter = document.getElementById('typeFilter').value;
                  var locationFilter = document.getElementById('locationFilter').value.toLowerCase(); // convert to lowercase for case-insensitive matching
                  var teamFilter = document.getElementById('teamFilter').value.toLowerCase(); // convert to lowercase for case-insensitive matching
                  var statusFilter = document.getElementById('statusFilter').value;
      
                  events.forEach(function(event) {
                      var mode = event[6];
                      var startDate = event[3];
                      var type = event[8];
                      var location = event[9].toLowerCase(); // convert to lowercase for case-insensitive matching
                      var team = event[10].toLowerCase(); // convert to lowercase for case-insensitive matching
                      var status = event[11];
      
                      if (
                          (modeFilter === 'all' || modeFilter === mode) &&
                          (dateFilter === '' || dateFilter === startDate) &&
                          (typeFilter === 'all' || typeFilter === type) &&
                          (locationFilter === '' || location.includes(locationFilter)) &&
                          (teamFilter === '' || team.includes(teamFilter)) &&
                          (statusFilter === 'all' || statusFilter === status)
                      ) {
                          var marker = L.marker([event[0], event[1]]).addTo(markerLayer);
      
                          // Create a popup with event details
                          var popupContent = `
                              <h2>${event[2]}</h2>
                              <p>Start Date: ${event[3]}</p>
                              <p>End Date: ${event[4]}</p>
                              <p>Event Type: ${event[5]}</p>
                              <p>Mode: ${mode}</p>
                              <p><a href="${event[7]}" target="_blank">Registration Link</a></p>
                          `;
      
                          marker.bindPopup(popupContent);
      
                          marker.on('click', function() {
                              // Open the popup when marker is clicked
                              marker.openPopup();
                          });
                      }
                  });
              }
      
              document.getElementById('applyFilters').addEventListener('click', function() {
                  filterMarkers();
              });
      
              document.getElementById('clearFilters').addEventListener('click', function() {
                  document.getElementById('modeFilter').value = 'all';
                  document.getElementById('dateFilter').value = '';
                  document.getElementById('typeFilter').value = 'all';
                  document.getElementById('locationFilter').value = '';
                  document.getElementById('teamFilter').value = '';
                  document.getElementById('statusFilter').value = 'all';
                  filterMarkers();
              });
      
              filterMarkers();
      
              var baseLayers = {
                  "Map": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                  }),
              };
      
              var overlayLayers = {
                  "Markers": markerLayer
              };
      
              L.control.layers(baseLayers, overlayLayers).addTo(map);
      
              markerLayer.addTo(map);
          </script>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
  </body>
</html>
