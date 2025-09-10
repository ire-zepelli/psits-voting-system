<?php
// summary.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting Summary</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f9f7f5]">

<?php include 'header.php'; ?>

<!-- Main Section -->
<section class="mt-12 px-6 md:px-24 mb-20">
  
  <!-- Title -->
  <h1 class="text-4xl md:text-5xl font-extrabold text-[#3c1e3a] mb-8 text-center">
    SUMMARY OF VOTER'S SELECTIONS
  </h1>

  <!-- Summary List -->
  <div id="officers" class="space-y-6"></div>

  <script>
    const officers = [
      { position: "President", name: "DANIEL KANE ISIDORE MAPANO", party: "E.I Partylist" },
      { position: "Vice President", name: "MARIA DELA CRUZ", party: "E.I Partylist" },
      { position: "Secretary", name: "JUAN SANTOS", party: "E.I Partylist" },
      { position: "Treasurer", name: "ANA REYES", party: "E.I Partylist" },
      { position: "Auditor", name: "ANA REYES", party: "E.I Partylist" },
      { position: "PIO", name: "ANA REYES", party: "E.I Partylist" },
      { position: "Chief of Developer", name: "ANA REYES", party: "E.I Partylist" },
      { position: "Chief of (etc.)", name: "ANA REYES", party: "E.I Partylist" },
      { position: "Academic Representative", name: "ANA REYES", party: "E.I Partylist" },
      { position: "Cares Representative", name: "ANA REYES", party: "E.I Partylist" }
    ];

    const container = document.getElementById("officers");

    officers.forEach((o, i) => {
      const isLast = i === officers.length - 1; // add spacing only to last officer
      container.innerHTML += `
        <div class="flex flex-col items-center ${isLast ? 'mb-16' : ''}">
          <div class="w-full max-w-3xl"> 
            <h2 class="font-extrabold text-[#3c1e3a] uppercase text-left text-2xl md:text-3xl">
              ${o.position}
            </h2>
            <div class="bg-gray-200 rounded-md w-full px-8 py-6 mt-3 flex flex-col items-center">
              <p class="font-bold text-[#3c1e3a] text-center text-xl md:text-2xl">
                ${o.name}
              </p>
              <p class="italic text-[#3c1e3a] text-center text-lg md:text-xl">
                ${o.party}
              </p>
            </div>
          </div>
        </div>
      `;
    });
  </script>

  <!-- Buttons -->
  <div class="flex justify-center gap-6 mt-20">
    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-10 py-4 rounded-lg">
      Back
    </button> 
    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-10 py-4 rounded-lg">
      Submit
    </button>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
