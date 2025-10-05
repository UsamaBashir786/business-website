// Function to toggle FAQ answers
function toggleFAQ(button) {
    // Toggle the active class on the FAQ question and answer
    const answer = button.nextElementSibling;
    const icon = button.querySelector('i');

    // Toggle the active class on the answer to show or hide it
    answer.classList.toggle('active');

    // Toggle the icon rotation to indicate open/close state
    icon.classList.toggle('active');
}
