<!-- Add Modal -->
<div id="add_modal" class="fixed flex justify-center items-start w-screen h-screen bg-black/40 z-20 hidden">
    <div id="add_backdrop" class="bg-black/40 w-screen h-screen absolute z-20"></div>
    <div class="w-120 bg-white rounded-xl p-5 z-30 fixed mt-10">
        <h1 class="text-xl font-[700]">Add New Candidate</h1>
        <p>Enter the candidate's information and campaign details.</p>
        <form action="addcandidate.php" method="post" enctype="multipart/form-data">
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Name</legend>
                <input type="text" name="add_name" id="add_name" class="input w-full" required />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Manifesto</legend>
                <input type="text" name="add_manifesto" id="add_manifesto" class="input w-full" required />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Position</legend>


                <select name="add_position" id="add_position" class="select w-full max-h-40 overflow-y-hidden">
                    <option value="1">President</option>
                    <option value="2">VP-Internal</option>
                    <option value="3">VP-External</option>
                    <option value="4">Secretary</option>
                    <option value="5">Treasurer</option>
                    <option value="6">Auditor</option>
                    <option value="7">PIO</option>
                    <option value="8">Chief of Creatives</option>
                    <option value="9">Chief of Representatives</option>
                    <option value="10">Chief of Student Development</option>
                    <option value="11">Academic Representative</option>
                    <option value="12">CARES Representative</option>
                </select>
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Position</legend>


                <select name="add_partylists" id="add_partylists" class="select w-full max-h-40 overflow-y-hidden">
                    <?php
                    include "../db_connect.php";
                    $sql = "SELECT party_id ,party_name FROM Parties";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value={$row['party_id']}>{$row['party_name']}</option>";
                    }
                    ?>
                </select>
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Candidate Poster</legend>
                <input type="file" class="file-input file-input-ghost" name="add_candidate_poster" required />
            </fieldset>
            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" id="add_cancel" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Register</button>
            </div>
        </form>
    </div>
</div>

<?php
include "../db_connect.php"; // your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $name       = $_POST['add_name'];
    $manifesto  = $_POST['add_manifesto'];
    $position   = $_POST['add_position'];   // comes as numeric value (1 = President, etc.)
    $partylist  = $_POST['add_partylists']; // comes from DB party_id

    // Handle file upload
    if (isset($_FILES['add_candidate_poster']) && $_FILES['add_candidate_poster']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['add_candidate_poster']['tmp_name'];
        $fileName    = $_FILES['add_candidate_poster']['name'];
        $fileSize    = $_FILES['add_candidate_poster']['size'];
        $fileType    = $_FILES['add_candidate_poster']['type'];
        $fileNameCmps = pathinfo($fileName, PATHINFO_EXTENSION);

        // Generate unique file name
        $newFileName = uniqid() . "." . $fileNameCmps;

        // Directory to save uploaded posters
        $uploadFileDir = __DIR__ . '/../posters/';  // go up one level from /admin to /posters/
        $newFileName = uniqid() . "." . $fileNameCmps;
        $dest_path = $uploadFileDir . $newFileName;

        // Move file
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            // Save relative path (for easy access in HTML <img>)
            $posterPath = "posters/" . $newFileName;

            $sql = "INSERT INTO Candidates (candidate_name, manifesto, position_id, party_id, poster_path) 
            VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssiis", $name, $manifesto, $position, $partylist, $posterPath);

            if ($stmt->execute()) {
                echo "✅ Candidate added successfully!";
            } else {
                echo "❌ Database error: " . $stmt->error;
            }
        } else {
            echo "❌ Error moving uploaded file.";
        }
    }
}
?>