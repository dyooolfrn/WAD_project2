<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Penjumlahan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Mari Berhitung!</h1>
        <form>
            <div class="form-group">
                <label for="angka1">Angka ke-1</label>
                <input type="text" class="form-control" id="angka1" placeholder="Masukkan Angka 1">
            </div>
            
            <div class="form-group">
                <label for="angka2">Angka ke-2</label>
                <select class="form-control" id="angka2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                </select>
            </div>
            
            <button type="button" class="btn btn-primary" id="hitung">Hitung</button>
        </form>
        
        <div id="hasil" class="mt-3">
            Hasil: <span id="hasil-text"></span>
        </div>
    </div>

    <script>
        document.getElementById("hitung").addEventListener("click", function() {

            var angka1 = document.getElementById("angka1").value;
            var angka2 = parseFloat(document.getElementById("angka2").value);

            angka1 = parseFloat(angka1);

            if (!isNaN(angka1)) {
                var hasil = angka1 + angka2;
                document.getElementById("hasil-text").textContent = hasil;

            } else {
                document.getElementById("hasil-text").textContent = "Angka ke-1 tidak valid.";
            }
        });
    </script>
</body>
</html>
