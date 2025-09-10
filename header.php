<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="flex justify-between items-center px-12 py-4 bg-[#412039]">
        <div class="flex items-center gap-8">
            <img src="public/ccs_logo.png" alt="CCS" class="w-[100px] h-[100px]">
            <img src="public/psits_logo.png" alt="PSITS" class="w-[100px] h-[100px]">
        </div>
        <nav class="flex gap-12 text-white font-semibold">
            <a href="index.php" class="hover:text-yellow-400 text-xl">Home</a>
            <a href="Partylist.php" class="hover:text-yellow-400 text-xl">Candidates</a>
            <a href="Registration.php" class="hover:text-yellow-400 text-xl">Voting</a>
        </nav>
        <button class="bg-[#C89900] w-[155px] h-[44px] flex items-center justify-center text-xl text-white font-bold rounded-lg shadow hover:bg-yellow-500">
            Vote Now
        </button>
    </header>
    <div class="relative top-0 left-0 w-full overflow-hidden leading-[0]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"
            class="relative block w-[calc(100%+1.3px)] h-[15px]">
            <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="fill-[#412039]"></path>
        </svg>
    </div>
</body>

</html>