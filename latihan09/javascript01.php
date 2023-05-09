<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Javascript</title>
</head>
<body>

    <script> 
        document.write("Belajar Script <strong> Javascript </strong> <br>");
        document.write("Belajar Script <b> Javascript Native </b> <br>"); 
        //variable let bersifat private
        //variable Var bersifat public (bisa digunakan diluar function)
        var bil1 = 5;
        var bil2 = 7;
        var hasil = bil1 + bil2;
        document.write("Hasil Perjumlahan Dari "+bil1+" Dengan "+bil2+" Adalah "+hasil);

        for(let i = 0; i <= 10; i++){
            document.write("<br> perulangan - "+i);
        }

    </script>

</body>
</html>