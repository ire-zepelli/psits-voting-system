// Add Modal
const addModal = document.getElementById("add_modal");
const addBackdrop = document.getElementById("add_backdrop");
const addCancel = document.getElementById("add_cancel");
const addBtn = document.getElementById("add_btn");

addBtn.addEventListener("click", () => addModal.classList.remove("hidden"));
addBackdrop.addEventListener("click", () => addModal.classList.add("hidden"));
addCancel.addEventListener("click", () => addModal.classList.add("hidden"));

// Edit Modal
const editModal = document.getElementById("edit_modal");
const editBackdrop = document.getElementById("edit_backdrop");
const editCancel = document.getElementById("edit_cancel");
const editBtns = document.querySelectorAll(".edit-btn");

// Modal form fields
const editPartyName = document.getElementById("edit_party_name");
const editDescription = document.getElementById("edit_description");
const editPartyId = document.getElementById("edit_party_id");

editBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    showEdit(btn);
  });
});

editBackdrop.addEventListener("click", () => editModal.classList.add("hidden"));
editCancel.addEventListener("click", () => editModal.classList.add("hidden"));

function showEdit(btn) {
  const id = btn.dataset.id;
  const name = btn.dataset.name;
  const description = btn.dataset.description;

  // Fill modal fields
  editPartyName.value = name;
  editDescription.value = description;
  editPartyId.value = id;

  editModal.classList.remove("hidden");
}
