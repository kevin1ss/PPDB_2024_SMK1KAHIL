function validateForm() {
    let x = document.forms["qq"]["Namasiswa"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }