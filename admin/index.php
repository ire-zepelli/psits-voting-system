<?php
include "../db_connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link / rel="icon" href="../public/psits_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Font Awesome (latest 6.x) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+... (truncated)
    crossorigin=" anonymous"
        referrerpolicy="no-referrer" />
    <title>PSITS - Voting System</title>
</head>

<body>
    <?php
    include "drawer_nav.php"
    ?>

    <!-- Page content here -->

    <!-- Title -->
    <div class="flex items-center w-full p-5 gap-4">
        <i class="fa-solid fa-chart-simple text-5xl text-purple-800"></i>
        <div>
            <h1 class="text-3xl font-[700]">Dashboard</h1>
            <p>Overview of the Voting System Management</p>
        </div>
    </div>

    <!-- Status Cards -->
    <div class="flex justify-around">
        <!-- Status -->
        <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5">
            <div class="card-body">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl">
                        Total Voters
                    </h1>
                    <i class="fa-solid fa-check-to-slot text-4xl"></i>
                </div>

                <h1 class="text-6xl font-[700]">
                    <?php
                    include "countvoters.php";
                    ?>
                </h1>
                <p class="text-base">Votes Gathered From This PC</p>
            </div>
        </div>

        <!-- Status -->
        <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5">
            <div class="card-body">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl">
                        Total Candidates
                    </h1>
                    <i class="fa-solid fa-person text-4xl"></i>
                </div>

                <h1 class="text-6xl font-[700]">
                    <?php
                    include "countcandidates.php";
                    ?>
                </h1>
                <p class="text-base">Running This Elections</p>
            </div>
        </div>

        <!-- Status -->
        <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5">
            <div class="card-body">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl">
                        Party Lists
                    </h1>
                    <i class="fa-solid fa-people-group text-4xl"></i>
                </div>

                <h1 class="text-6xl font-[700]">
                    <?php
                    include "countparties.php";
                    ?>
                </h1>
                <p class="text-base">Registered This Elections</p>
            </div>
        </div>

    </div>

    <!-- Recent Votes -->
    <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5 mx-4 mt-5">
        <div class="card-body">
            <div class="w-full flex justify-between items-center">
                <h1 class="text-2xl">
                    Recent Votes Casts
                </h1>
                <i class="fa-solid fa-people-group text-4xl"></i>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-white rounded-lg border">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Vote ID</th>
                            <th>Voter Name</th>
                            <th>Voter ID</th>
                            <th>Candidate Name</th>
                            <th>Party List</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>V12345</td>
                            <td>Jane Smith</td>
                            <td>E.I Party List</td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>2</td>
                            <td>Mary Johnson</td>
                            <td>V67890</td>
                            <td>Robert Brown</td>
                            <td>E.I Party List</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <td>3</td>
                            <td>Michael Lee</td>
                            <td>V54321</td>
                            <td>Emily Davis</td>
                            <td>Pins Party List</td>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <td>4</td>
                            <td>Benedict Avenido</td>
                            <td>V33613</td>
                            <td>Emily Davis</td>
                            <td>Pins Party List</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

    </div>
    <?php
    include "drawer_side.php";
    ?>
    </div>
</body>

</html>