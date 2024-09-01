// register_user.js
document.addEventListener('DOMContentLoaded', () => {
    const userIDInput = document.getElementById('userID');
    const lastNameInput = document.getElementById('last_name');
    const birthDateInput = document.getElementById('birth_date');

    function generateCredentials() {
        const userID = userIDInput.value;
        const lastName = lastNameInput.value.toLowerCase();
        const birthDate = new Date(birthDateInput.value);

        console.log('UserID:', userID);
        console.log('Last Name:', lastName);
        console.log('Birth Date:', birthDate);

        const birthMonth = ('0' + (birthDate.getMonth() + 1)).slice(-2);
        const birthDay = ('0' + birthDate.getDate()).slice(-2);
        const birthYear = birthDate.getFullYear();

        if (userID && lastName && birthDateInput.value) {
            // Generate username
            const username = `${lastName}${userID}`;
            console.log('Generated Username:', username);
            document.getElementById('username').value = username;

            // Generate password
            const password = `${lastName}${birthMonth}${birthDay}${birthYear}`;
            console.log('Generated Password:', password);
            document.getElementById('password').value = password;
        }
    }

    // Attach event listeners to the inputs
    userIDInput.addEventListener('input', generateCredentials);
    lastNameInput.addEventListener('input', generateCredentials);
    birthDateInput.addEventListener('change', generateCredentials);
});
