function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const checkin = document.getElementById("checkin").value;
  const checkout = document.getElementById("checkout").value;
  const rooms = document.getElementById("rooms").value;

  // Basic validation
  if (name === "") {
    alert("Please enter your name.");
    return false;
  }

  if (email === "") {
    alert("Please enter your email address.");
    return false;
  }

  if (!isValidEmail(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (phone === "") {
    alert("Please enter your phone number.");
    return false;
  }

  if (checkin === "") {
    alert("Please select a check-in date.");
    return false;
  }

  if (checkout === "") {
    alert("Please select a check-out date.");
    return false;
  }

  if (rooms === "") {
    alert("Please enter the number of rooms.");
    return false;
  }

  // Additional validation (e.g., date range, room availability) can be added here

  return true;
}

function isValidEmail(email) {
  // Regular expression for email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}