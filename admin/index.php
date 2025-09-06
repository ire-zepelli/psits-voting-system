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
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Nav Bar -->

            <div class="navbar bg-base-100 shadow-sm">
                <div class="flex-none">
                    <label for="my-drawer" class="btn btn-square btn-ghost drawer-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 ml-2">
                        <img src="../public/psits_logo.png" alt="psits_logo" class="h-10">
                        <h1 class="text-xl">PSITS - Voting System</h1>
                    </div>
                </div>
            </div>

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

                        <h1 class="text-6xl font-[700]">1,238</h1>
                        <p class="text-base">Votes Gathered From This PC</p>
                    </div>
                </div>

                <!-- Status -->
                <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5">
                    <div class="card-body">
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl">
                                Active Candidates
                            </h1>
                            <i class="fa-solid fa-person text-4xl"></i>
                        </div>

                        <h1 class="text-6xl font-[700]">24</h1>
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

                        <h1 class="text-6xl font-[700]">2</h1>
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
        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-63 p-4">
                <!-- Drawer Header -->
                <div class="flex justify-center items-center gap-3 mb-5">
                    <img src="../public/psits_logo.png" alt="psits_logo" class="col-span-1 h-15">
                    <div class="flex flex-col">
                        <h1 class="text-xl font-bold">PSITS - UCLM</h1>
                        <p class="text-gray-500">Voting System</p>
                    </div>
                </div>
                <!-- Sidebar content here -->
                <h1 class="text-gray-500">
                    Overview
                </h1>
                <li>
                    <a>
                        <i class="fa-solid fa-chart-simple text-xl"></i>
                        Dashboard
                    </a>
                </li>

                <h1 class="text-gray-500 mt-3">
                    Management
                </h1>
                <li>
                    <a>
                        <i class="fa-solid fa-people-group text-xl"></i>
                        Party Lists
                    </a>
                </li>
                <li>
                    <a>
                        <i class="fa-solid fa-person text-xl"></i>
                        Candidates
                    </a>
                </li>
                <li>
                    <a>
                        <i class="fa-solid fa-check-to-slot text-xl"></i>
                        Voters
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>