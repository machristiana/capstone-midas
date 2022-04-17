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
        address: '1033 Bay St., Toronto, ON M5S 3A5, Canada',
        hours: 'Monday-Friday: 10AM to 7PM'
    }, {
        name: 'Hakim Optical Bay & Queen',
        location: {
            lat: 43.65212,
            lng: -79.38236
        },
        address: '65 Queen St W, Toronto, ON M5H 2M5, Canada',
        hours: 'Monday-Friday: 9AM to 6PM'
    }, {
        name: 'Optical Thirty 8',
        location: {
            lat: 43.647210,
            lng: -79.402930
        },
        address: '623 Queen St W, Toronto, ON M5V 2B7, Canada',
        hours: 'Monday-Sunday: 11AM to 7PM'
    }, {
        name: 'Specs & Specs Optical',
        location: {
            lat: 43.649750,
            lng: -79.393110
        },
        address: '292 Queen St W, Toronto, ON M5V 2A1, Canada',
        hours: 'Monday-Saturday: 12PM to 6PM',
    }, {
        name: '312 Optical Studio',
        location: {
            lat: 43.657760,
            lng: -79.402310
        },
        address: '312 College St, Toronto, ON M5T 1S3, Canada',
        hours: 'Sunday-Thursday: 11AM to 5PM'
    }, {
        name: 'Economy Optical',
        location: {
            lat: 43.661420,
            lng: -79.383610
        },
        address: '4 College St, Toronto, ON M5G 1K2, Canada',
        hours: 'Monday-Friday: 9AM to 6PM'
    }, {
        name: 'Optical Outlook Ltd',
        location: {
            lat: 43.670970,
            lng: -79.392820
        },
        address: '110 Yorkville Ave, Toronto, ON M5R 1B9, Canada',
        hours: 'Monday-Saturday: 11AM to 5PM'
    }, {
        name: 'Bright Eyes Optical',
        location: {
            lat: 43.653470,
            lng: -79.397110
        },
        address: '480 Dundas St W, Toronto, ON M5T 1G9, Canada',
        hours: 'Monday-Saturday: 10:30AM to 6PM'
    }, {
        name: "Wally's Optical",
        location: {
            lat: 43.656170,
            lng: -79.454640
        },
        address: '1586 Bloor St W, Toronto, ON M6P 1A7, Canada',
        hours: 'Monday-Saturday: 11AM to 6PM'
    }, {
        name: 'Warby Parker',
        location: {
            lat: 43.646640,
            lng: -79.407600
        },
        address: '684 Queen St W, Toronto, ON M6J 1E5, Canada',
        hours: 'Monday-Sunday: 11AM to 7PM'
    }];

    stores.forEach(function(store) {
        markStore(store);
    });

}