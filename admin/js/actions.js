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
const editBtn = document.getElementById("edit_btn");

editBtn.addEventListener("click", () => editModal.classList.remove("hidden"));
editBackdrop.addEventListener("click", () => editModal.classList.add("hidden"));
editCancel.addEventListener("click", () => editModal.classList.add("hidden"));
