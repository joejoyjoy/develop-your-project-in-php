// PASSWORD VALIDATION
function Validate() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }

  