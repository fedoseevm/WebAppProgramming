var zdjecia = Array(
    Array('images/portugal-4828134_640.jpg', 'images/portugal-4828134_640.jpg', 'Portugalia, Lizbona', 'Architektura. Do wykorzystania za darmo'),
    Array('images/city-4864747_640.jpg', 'images/city-4864747_640.jpg', 'Bangkok, Noc', 'Miasto. Do wykorzystania za darmo'),
    Array('images/new-york-4811023_640.jpg', 'images/new-york-4811023_640.jpg', 'Nowy jork, Usa', 'Most. Do wykorzystania za darmo'),
    Array('images/hulett-1633507_640.jpg', 'images/hulett-1633507_640.jpg', 'Hulett, Wyoming, Usa', 'Countryside. Do wykorzystania za darmo'),
    Array('images/architecture-4766460_640.jpg', 'images/architecture-4766460_640.jpg', 'Toronto, Wieżowiec', 'Architektura, Miasto. Do wykorzystania za darmo'),
);

var max_width = 600;

function Load() {
    for (var i = 0; i < zdjecia.length; i++) {
        document.getElementById('miniaturki').innerHTML += '<img src="' + zdjecia[i][1] + '" onClick="Change(' + i + ')" />';
    }
    Change(0);
}

function Change(id) {
    document.getElementById('zdjecie').innerHTML = '<div id="ladowanie"></div>'; // 1
    var custom = '';
    var preload = new Image(); // 2
    preload.onload = function() {
        if (preload.width > max_width) // 3
            custom = ' style="height: '+(Math.floor(max_width / (preload.width / preload.height)))+'px;width: ' + max_width + 'px;"';

        document.getElementById('informacje').innerHTML = '<b>' + zdjecia[id][2] + '</b><br /><i>' + zdjecia[id][3] + '</i>';
        document.getElementById('zdjecie').innerHTML = '<img src="' + zdjecia[id][0] + '"' + custom + ' />'; // 4
    }
    preload.src = zdjecia[id][0]; // 5
}

window.onload = Load();