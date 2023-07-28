// Function to fetch data from JSONPlaceholder API for users
function getUsers() {
  fetch('https://jsonplaceholder.typicode.com/users')
      .then(response => response.json())
      .then(users => {
          displayUsers(users);
      })
      .catch(error => {
          console.error('Error fetching data:', error);
      });
}

// Function to handle the follow action
function followUser(userId) {
  // Perform the follow action here (you can add your logic)
  // For the sake of this example, we'll just show a message
  alert(`You followed Author Number: ${userId}`);
}

// Function to save a new user (called when the "Save User" button is clicked in the modal)
function saveUser() {
  // Get the new user information from the form
  const name = document.getElementById('name').value;
  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;

  // Perform the save user action here (you can add your logic)
  // For the sake of this example, we'll just show a message
  alert(`New user saved:\nName: ${name}\nUsername: ${username}\nEmail: ${email}`);

  // Clear the form fields and close the modal
  document.getElementById('addUserForm').reset();
  const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
  addUserModal.hide();
}

// Function to display users as Bootstrap cards
function displayUsers(users) {
  const userList = document.getElementById('userList');

  users.forEach(user => {
      const cardDiv = document.createElement('div');
      cardDiv.classList.add('col-lg-4', 'mb-4');

      const cardHTML = `
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">${user.name}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">${user.username}</h6>
                  <p class="card-text">
                      <strong>Email:</strong> ${user.email}<br>
                      <strong>Address:</strong> ${user.address.street}, ${user.address.suite}, ${user.address.city}, ${user.address.zipcode}<br>
                      <strong>Geo:</strong> Lat: ${user.address.geo.lat}, Lng: ${user.address.geo.lng}<br>
                      <strong>Phone:</strong> ${user.phone}<br>
                      <strong>Website:</strong> ${user.website}<br>
                      <strong>Company:</strong> ${user.company.name} - ${user.company.catchPhrase}
                  </p>
                  <button class="btn btn-primary" onclick="followUser(${user.id})">Follow</button>
              </div>
          </div>
      `;
      cardDiv.innerHTML = cardHTML;
      userList.appendChild(cardDiv);
  });
}

// Function to open the "Add User" modal
function openAddUserModal() {
  const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
  addUserModal.show();
}

// Call the getUsers function when the page loads
document.addEventListener('DOMContentLoaded', getUsers);


