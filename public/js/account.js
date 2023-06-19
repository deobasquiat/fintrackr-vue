const deleteButtons = document.querySelectorAll(".delete-button");

deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
        const parentDiv = button.parentElement;
        const passwordInput = parentDiv.querySelector(".password-input");
        passwordInput.classList.toggle("hidden");
    });
});

const textarea = document.getElementById("input_text");
const charCount = document.getElementById("char_count");

textarea.addEventListener("input", function () {
    const text = textarea.value;
    const remainingChars = 50 - text.length;

    charCount.textContent = `${text.length}/50 Characters`;

    if (remainingChars <= 25) {
        charCount.style.color = "red";
    } else {
        charCount.style.color = "black";
    }
});

// Trigger the input event on page load to update the character count
textarea.dispatchEvent(new Event("input"));
