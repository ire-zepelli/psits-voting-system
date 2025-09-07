<!-- Edit Modal -->
<div id="edit_modal" class="fixed flex justify-center items-center w-screen h-screen bg-black/40 z-20 hidden">
    <div id="edit_backdrop" class="bg-black/40 w-screen h-screen absolute z-20"></div>
    <div class="w-120 bg-white rounded-xl p-5 z-30 fixed">
        <h1 class="text-xl font-[700]">Edit Party List</h1>
        <p>Update the political party's information for registration.</p>
        <form action="" method="post">
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend text-sm">Party Name</legend>
                    <input type="text" name="edit_party_name" id="edit_party_name" class="input" required />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend text-sm">Abbreviation</legend>
                    <input type="text" name="edit_abbreviation" id="edit_abbreviation" class="input" required />
                </fieldset>
            </div>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Description</legend>
                <textarea name="edit_description" id="edit_description" class="input w-full h-15" required></textarea>
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Party Image</legend>
                <input type="file" class="file-input file-input-ghost" required />
            </fieldset>

            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" id="edit_cancel" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</div>