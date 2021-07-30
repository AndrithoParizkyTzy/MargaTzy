console.log('Connect');

var harga1 = $('#harga1').html();
var harga2 = $('#harga2').html();
var harga3 = $('#harga3').html();

var jumlah1 = $('#jumlah1').html();
var jumlah2 = $('#jumlah2').html();
var jumlah3 = $('#jumlah3').html();

var status1 = $('#status1').html();
var status2 = $('#status2').html();
var status3 = $('#status3').html();

var total = parseInt(harga1) + parseInt(harga2) + parseInt(harga3)
console.log('total :>> ', total);
var WIBU = parseInt(jumlah1) + parseInt(jumlah2) + parseInt(jumlah3)
console.log('WIBU :>> ', WIBU);
var TotalKeseluruhan = total * WIBU;
console.log('TotalKeseluruhan :>> ', TotalKeseluruhan);

$('#totalHarga').html(total);
$('#totalJumlah').html(WIBU);
$('#TotalKeseluruhan').html(TotalKeseluruhan);

var status;
(status1 = 'Lunas' && status2 == 'Lunas' && status3 == 'Lunas') ? status = 'Lunas' : status = 'Belum Lunas'
$('#status').html(status);
