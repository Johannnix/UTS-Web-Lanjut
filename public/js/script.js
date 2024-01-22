const fileInput = document.getElementById("gambar");
const fileNameSpan = document.getElementById("fileName");

fileInput.addEventListener("change", (event) => {
    const selectedFile = event.target.files[0];
    if (selectedFile) {
        const fileName = selectedFile.name;
        fileNameSpan.textContent = fileName;
    }
});
function toggleDropdown() {
    var profileContent = document.getElementById("profileContent");
    if (profileContent.style.display === "none") {
        profileContent.style.display = "block";
    } else {
        profileContent.style.display = "none";
    }
}
