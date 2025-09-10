<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .font-luckiest {
            font-family: "Luckiest Guy", cursive;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>

    <section class="flex items-center justify-center px-10 py-8 bg-white text-black rounded-t-3xl">
        <div class="flex flex-col h-[551px] w-[650px] bg-white">
            <p class="text-[#412039] text-[20px] font-semibold ml-[21px] mt-[35px]">CAST YOUR VOTES NOW</p>
            <h1 class="font-luckiest text-[#412039] text-8xl ml-[21px] font-extrabold mt-2 mb-4">CAST YOUR <br> VOTES NOW</h1>
            <p class="text-[#412039] text-xl ml-[21px] mt-[15px] w-[598px] h-[96px] mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <button class="font-luckiest bg-[#C89900] ml-[21px] mt-[30px] w-[248px] h-[58px] text-white text-4xl flex items-center justify-center rounded-lg shadow hover:bg-yellow-500">
                VOTE NOW
            </button>
        </div>
        <div class="mt-10 md:mt-0">
            <img src="public/bepo_vote.png" alt="B.E.P.O" class="h-[678px] w-[678px]">
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>