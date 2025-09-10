<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Lustria&display=swap" rel="stylesheet">

</head>
<style>
    .font-luckiest {
        font-family: "Luckiest Guy", cursive;
        font-weight: 400;
        font-style: normal;
    }

    .lustria-regular {
        font-family: "Lustria", serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

<body>
    <div class="flex flex-col items-center m-15">
        <h1 class="font-luckiest text-6xl text-[#412039]">Daniel Kane Isidore Mapano</h1>
        <div class="flex flex-row mt-10 w-230">
            <img src="imgs/member_img.png" alt="asdkjf">
            <div class="m-5 ml-10 w-150">
                <p class="text-2xl font-lustria-regular font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eaque soluta nulla accusantium doloremque architecto dolor possimus iste dignissimos, voluptas placeat maxime perferendis sapiente beatae quisquam, dolore minima mollitia totam.</p>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include 'footer.php'
?>