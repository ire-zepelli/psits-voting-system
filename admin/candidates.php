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
    include "addcandidate.php";
    include "editcandidate.php";
    ?>
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
                <i class="fa-solid fa-flag text-5xl text-purple-800"></i>
                <div class="flex-1">
                    <h1 class="text-3xl font-[700]">Candidates Management</h1>
                    <p>Manage candidate applications</p>
                </div>
                <div class="flex gap-4">
                    <button id="add_btn" class="btn btn-outline btn-neutral text-lg px-5">
                        <i class="fa-solid fa-plus mr-3"></i>
                        <h1>Add Candidate</h1>
                    </button>

                </div>
            </div>


            <!-- Recently Registered Candidates -->
            <div class="card min-w-120 bg-[#F1FBFB] card-xs shadow-sm p-5 mx-4 mt-5">
                <div class="card-body">
                    <div class="w-full flex justify-between items-center">
                        <h1 class="text-2xl">
                            Candidates Registry
                        </h1>
                        <i class="fa-solid fa-people-group text-4xl"></i>
                    </div>

                    <!-- Candidate Table -->
                    <div class="overflow-x-auto bg-white rounded-lg border">
                        <table class="table w-full">
                            <!-- head -->
                            <thead class="bg-gray-100">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Position</th>
                                    <th>Manifesto</th>
                                    <th>Poster</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>Juan</td>
                                    <td>Dela Cruz</td>
                                    <td>President</td>
                                    <td class="max-w-xs truncate">
                                        My vision is to improve student engagement through...
                                    </td>
                                    <td>
                                        <img src="poster1.jpg" alt="Candidate Poster" class="w-16 h-16 object-cover rounded-md border" />
                                    </td>
                                    <td class="flex gap-2">
                                        <button id="edit_btn" class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-secondary btn-sm">Delete</button>
                                    </td>
                                </tr>

                                <!-- Example row 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>Maria</td>
                                    <td>Santos</td>
                                    <td>Secretary</td>
                                    <td class="max-w-xs truncate">
                                        Transparency and accountability are my priorities...
                                    </td>
                                    <td>
                                        <img src="poster2.jpg" alt="Candidate Poster" class="w-16 h-16 object-cover rounded-md border" />
                                    </td>
                                    <td class="flex gap-2">
                                        <button id="edit_btn" class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-secondary btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>


        </div>
        <?php
        include "drawer_side.php"
        ?>
    </div>
    <script type="module" src="js/actions.js"></script>
</body>

</html>