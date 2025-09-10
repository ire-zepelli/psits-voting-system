<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partylist</title>
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
    <div class="flex items-center justify-center">
        <h1 class="text-[#412039] text-[96px] font-luckiest ">2025 ELECTION PARTYLIST</h1>
    </div>
    <div class="flex flex-col gap-4 my-12 mb-48">
        <a href="Candidates.php">

            <div class="flex items-center justify-center">
                <div class="flex items-center justify-center w-[160px] h-[160px] bg-gray-300 rounded-full border-8 border-[#412039] z-10">
                    <img src="images/ccslogo.png" alt="Partylist Logo" class="w-full h-full object-cover">
                </div>
                <div class="w-[870px] h-[100px] bg-gray-300 rounded-md flex items-center justify-center -ml-12 mt-8">
                    <span class="text-gray-600">Partylist Name</span>
                </div>
            </div>
        </a>

    </div>
    <?php include("footer.php"); ?>
</body>

</html>