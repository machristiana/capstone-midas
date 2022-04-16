function initMap() {
    var myMapCenter = {
        lat: 43.6516,
        lng: -79.3705
    };

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center: myMapCenter,
        zoom: 12
    });


    function markStore(storeInfo) {

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: storeInfo.location,
            title: storeInfo.name,
            address: storeInfo.address
        });

        // show store info when marker is clicked
        marker.addListener('click', function() {
            showStoreInfo(storeInfo);
        });
    }

    // show store info in text box
    function showStoreInfo(storeInfo) {
        var info_div = document.getElementById('info_div');
        info_div.innerHTML = 'Store Name: ' +
            storeInfo.name + '<br>Address: ' + storeInfo.address + '<br>Hours: ' + storeInfo.hours;
    }

    var stores = [{
        name: 'Hakim Optical Bay & Wellesley',
        location: {
            lat: 43.68170,
            lng: -79.41099,
        },
        Address: '1033 Bay St., Toronto, ON M5S 3A5, Canada',
        hours: 'Monday-Friday: 10AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 43.65212,
            lng: -79.38236
        },
        hours: 'Monday-Friday: 11AM to 7PM'
    }, {
        name: 'Zeiss Vision Centre',
        location: {
            lat: 43.65496,
            lng: -79.38115
        },
        hours: 'Monday-Sunday: 9AM to 7PM'
    }, {
        name: 'Specs & Specs Optical',
        location: {
            lat: 43.645566,
            lng: -79.39296
        },
        hours: 'Monday-Saturday: 12PM to 6PM',
        Address: '292 Queen St W, Toronto, ON M5V 2A1, Canada'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 44.14600,
            lng: -79.67195
        },
        hours: 'Monday-Friday: 9AM to 7PM'
    }];

    stores.forEach(function(store) {
        markStore(store);
    });

}