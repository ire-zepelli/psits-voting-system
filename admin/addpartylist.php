<!-- Add Modal -->
<div id="add_modal" class="fixed flex justify-center items-center w-screen h-screen bg-black/40 z-20 hidden">
    <div id="add_backdrop" class="bg-black/40 w-screen h-screen absolute z-20"></div>
    <div class="w-120 bg-white rounded-xl p-5 z-30 fixed">
        <h1 class="text-xl font-[700]">Register New Party</h1>
        <p>Enter the political party's information for registration.</p>
        <form action="addpartylist.php" method="post" enctype="multipart/form-data">
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Name</legend>
                <input type="text" name="add_party_name" id="add_party_name" class="input w-full" required />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Description</legend>
                <textarea name="add_description" id="add_description" class="input w-full h-15" required></textarea>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Image</legend>
                <input type="file" name="add_party_img" class="file-input file-input-ghost" required />
            </fieldset>

            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" id="add_cancel" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700" value="submit">Register</button>
            </div>
        </form>
    </div>
</div>

<?php
include "../db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $party_name = $_POST['add_party_name'];
    $description = $_POST['add_description'];

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // Handle file upload
    if (isset($_FILES['add_party_img']) && $_FILES['add_party_img']['error'] == 0) {
        $targetDir = "../public/posters/";
        $fileName = time() . "_" . basename($_FILES["add_party_img"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        // Path stored in DB (relative for use in <img>)
        $dbFilePath = "posters/" . $fileName;

        if (move_uploaded_file($_FILES["add_party_img"]["tmp_name"], $targetFilePath)) {
            // Insert into DB
            $sql = "INSERT INTO Parties (party_name, description, party_img) 
                    VALUES ('$party_name', '$description', '$dbFilePath')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Party registered successfully!'); window.location.href=window.location.href;</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No image selected or upload error.";
    }
}
$conn->close();
?>