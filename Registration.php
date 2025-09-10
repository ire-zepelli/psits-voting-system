<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .font-luckiest { font-family: "Luckiest Guy", cursive; }
    </style>
</head>
<body>
    <?php include ('header.php'); ?>

    <div class="flex items-center justify-center">
        <form action="" method="POST" class="grid grid-rows-5 grid-cols-3 w-[1200px] h-[530px] bg-gray-300 rounded-3xl my-6">
            <div class=" p-4">
                <h1 class="text-[#412039] text-[20px] font-luckiest">Fill out your information</h1>
                <p class="text-[#412039] text-sm">Please fill out your information below</p>
            </div>
            <div class=" col-start-1 row-start-2 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">First Name</h1>
                <input type="text" name="fName" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-2 row-start-2 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Middle Name</h1>
                <input type="text" name="mName" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-3 row-start-2 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Last Name</h1>
                <input type="text" name="lName" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-1 row-start-3 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Phone Number</h1>
                <input type="text" name="phoneNumber" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-2 row-start-3 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">ID Number</h1>
                <input type="text" name="idNumber" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-3 row-start-3 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Program</h1>
                <select name="program"class="w-[300px] px-4 py-2 border border-gray-300 rounded-lg outline outline-1 outline-black shadow-lg focus:outline focus:outline-2 focus:outline-blue-500" required>
                    <option value="" disabled selected>Select Program</option>
                    <option value="CS">Computer Science</option>
                    <option value="IT">Information Technology</option>
                </select>
            </div>
            <div class=" col-start-1 row-start-4 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Email</h1>
                <input type="text" name="email" class="w-full h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class=" col-start-2 row-start-4 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Year Level</h1>
                <select name="yearLevel"class="w-[300px] px-4 py-2 border border-gray-300 rounded-lg outline outline-1 outline-black shadow-lg focus:outline focus:outline-2 focus:outline-blue-500" required>
                    <option value="" disabled selected>Select Year Level</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>
            <div class=" col-start-3 row-start-4 px-4">
                <h1 class="text-[#412039] text-[15px] font-luckiest">Section</h1>
                <input type="text" name="Section" class="w-[300px] h-10 rounded-md outline outline-1 outline-black shadow-lg" required>
            </div>
            <div class="flex justify-center col-start-2 row-start-5 px-4 pt-4">
                <Button type="submit" class="font-luckiest bg-[#C89900] w-[150px] h-[40px] text-white text-[24px] flex items-center justify-center rounded-[30px] shadow hover:bg-yellow-500">
                    Submit
                </Button>
            </div>
        </form>
    </div>

    <?php include ('footer.php'); ?>
</body>
</html>