<!-- Edit Modal -->
<div id="edit_modal" class="fixed flex justify-center items-center w-screen h-screen bg-black/40 z-20 hidden">
    <div id="edit_backdrop" class="bg-black/40 w-screen h-screen absolute z-20"></div>
    <div class="w-120 bg-white rounded-xl p-5 z-30 fixed">
        <h1 class="text-xl font-[700]">Edit Party List</h1>
        <p>Update the political party's information for registration.</p>
        <form action="editpartylist.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="edit_party_id" id="edit_party_id">
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Name</legend>
                <input type="text" name="edit_party_name" id="edit_party_name" class="input w-full" required />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Description</legend>
                <textarea name="edit_description" id="edit_description" class="input w-full h-15" required></textarea>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Image</legend>
                <input type="file" class="file-input file-input-ghost" name="edit_party_img" />
            </fieldset>

            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" id="edit_cancel" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700" value="submit">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
include "../db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['edit_party_id'];
    $party_name = $_POST['edit_party_name'];
    $description = $_POST['edit_description'];

    // default query (no image update)
    $sql = "UPDATE Parties  
            SET party_name='$party_name', description='$description' 
            WHERE party_id=$id";

    // If a new image was uploaded
    if (isset($_FILES['edit_party_img']) && $_FILES['edit_party_img']['error'] == 0) {
        $targetDir = "../public/posters/";
        $fileName = time() . "_" . basename($_FILES["edit_party_img"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $dbFilePath = "posters/" . $fileName;

        if (move_uploaded_file($_FILES["edit_party_img"]["tmp_name"], $targetFilePath)) {
            $sql = "UPDATE Parties 
                    SET party_name='$party_name', description='$description', party_img='$dbFilePath' 
                    WHERE party_id=$id";
        }
    }

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Party updated successfully!'); window.location.href='/psits-voting/admin/partylist.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>