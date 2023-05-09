<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Javascript</title>
</head>
<body style="background-color:#913175">

<div id="artikel1">

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo pariatur, a nihil quisquam culpa maiores libero deleniti nostrum debitis error. At dolorum eos fuga, sunt impedit temporibus magnam eaque repudiandae!

</div>

<br>

<div class="artikel2">

Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius perferendis magnam tenetur commodi, natus maiores praesentium quisquam quo accusantium explicabo ullam nam voluptates dicta ad repellat, sint qui dolore laudantium!

</div>

    <script>
        document.getElementById('artikel1').style.color = "#E3DFFD";
        const obj = document.getElementsByClassName('artikel2');
        obj[0].style.color = "#E5BEEC";
        //perbedaan ada di elements karena class bersifat jamak dan mendeklarasikan const
    </script>
    
</body>
</html>