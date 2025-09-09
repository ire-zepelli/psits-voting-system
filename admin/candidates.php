<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/psits_logo.png">
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Manifesto</th>
                                    <th>Poster</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../db_connect.php";

                                // Adjust column names to match your actual DB schema
                                $sql = "
SELECT 
    c.candidate_id,
    c.name as candidate_name,
    pos.title AS position_name,
    pa.party_name,
    c.manifesto,
    c.poster
FROM Candidates c
JOIN Positions pos ON c.position_id = pos.position_id
JOIN Parties pa ON c.party_id = pa.party_id
";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>{$row['candidate_id']}</td>";
                                        echo "<td>{$row['candidate_name']}</td>";
                                        echo "<td>{$row['position_name']}</td>"; // from Positions
                                        echo "<td class='max-w-xs truncate'>{$row['manifesto']}</td>";
                                        echo "<td><img src='../public/{$row['poster']}' alt='Poster' class='w-16 h-16 object-cover rounded-md border'></td>";
                                        echo "<td class='flex gap-2'>
               <button 
    class='btn btn-primary btn-sm edit-btn' 
    data-id='{$row['candidate_id']}' 
    data-name='{$row['candidate_name']}' 
    data-position='{$row['position_name']}' 
    data-manifesto='{$row['manifesto']}'
>
    Edit
</button> 
                <button class='btn btn-secondary btn-sm delete-btn' data-id='{$row['candidate_id']}'>Delete</button>
              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center'>No candidates registered yet.</td></tr>";
                                }

                                $conn->close();
                                ?>
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
    <script type="module" src="js/candidate_actions.js"></script>
</body>

</html>