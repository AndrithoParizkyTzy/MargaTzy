<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="table-responsive">
            <table class="table table-dark table-responsive table-bordered">
                <thead>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <th colspan="3">Data Barang</th>
                        <th rowspan="3">Status</th>
                    </tr>
                    <tr class="text-center">
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Laptop</td>
                        <td id="jumlah1">1</td>
                        <td id="harga1" class="hargaclass1">100000</td>
                        <td id="status1">Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Komputer</td>
                        <td id="jumlah2">2</td>
                        <td id="harga2">50000</td>
                        <td  id="status2">Belum Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Keyboard</td>
                        <td id="jumlah3">1</td>
                        <td id="harga3">20000</td>
                        <td id="status3">Lunas</td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Total</td>
                        <td id="totalJumlah"></td>
                        <td id="totalHarga"></td>
                        <td id="status"></td>
                    </tr>
                    <tr style="text-align: center; vertical-align: middle;" class="text-center">
                        <td>Total Keseluruhan</td>
                        <td colspan="3" id="TotalKeseluruhan"></td>
                      
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{url('assets/main.js')}}"></script>

</html>