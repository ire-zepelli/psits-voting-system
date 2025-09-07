<!-- Add Modal -->
<div id="add_modal" class="fixed flex justify-center items-start w-screen h-screen bg-black/40 z-20 hidden">
    <div id="add_backdrop" class="bg-black/40 w-screen h-screen absolute z-20"></div>
    <div class="w-120 bg-white rounded-xl p-5 z-30 fixed mt-10">
        <h1 class="text-xl font-[700]">Add New Candidate</h1>
        <p>Enter the candidate's information and campaign details.</p>
        <form method="post">
            <div class="grid grid-cols-2 gap-4">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend text-sm">First Name</legend>
                    <input type="text" name="add_fname" id="add_fname" class="input" required />
                </fieldset>
                <fieldset class="fieldset">
                    <legend class="fieldset-legend text-sm">Last Name</legend>
                    <input type="text" name="add_lname" id="add_lname" class="input" required />
                </fieldset>
            </div>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Manifesto</legend>
                <input type="text" name="add_manifesto" id="add_manifesto" class="input w-full" required />
            </fieldset>
            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Position</legend>


                <select name="position" id="position" class="select w-full max-h-40 overflow-y-hidden">
                    <option>President</option>
                    <option>VP-Internal</option>
                    <option>VP-External</option>
                    <option>Secretary</option>
                    <option>Treasurer</option>
                    <option>Auditor</option>
                    <option>PIO</option>
                    <option>Chief of Creatives</option>
                    <option>Chief of Representatives</option>
                    <option>Chief of Student Development</option>
                    <option>Academic Representative</option>
                    <option>CARES Representative</option>
                </select>
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend text-sm">Candidate Poster</legend>
                <input type="file" class="file-input file-input-ghost" required />
            </fieldset>
            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">
                <button type="button" id="add_cancel" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Register</button>
            </div>
        </form>
    </div>
</div>