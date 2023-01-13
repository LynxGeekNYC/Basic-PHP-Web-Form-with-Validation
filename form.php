<form method="post" action="submit.php" onsubmit="return validateForm()">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="email">E-Mail:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="subject">Subject:</label>
  <input type="text" id="subject" name="subject" required><br>

  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea><br>

  <input type="submit" value="Submit">
</form>

<script>
  function validateForm() {
    // Get form elements
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    // Check for empty fields
    if (name == "" || email == "" || subject == "" || message == "") {
      alert("Please fill out all fields.");
      return false;
    }
    return true;
  }
</script>
