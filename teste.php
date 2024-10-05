<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="box"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script>
    gsap.to(".box", {
        x: 300,
        duration: 2
    });
    </script>

    <style>
    .box {
        width: 100px;
        height: 100px;
        background-color: red;
        position: relative;
    }
    </style>

</body>

</html>