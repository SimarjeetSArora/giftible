<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Panel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .donation-panel {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="donation-panel bg-light">
    <h4 class="text-center">Make a Donation</h4>
    <form id="donationForm">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="amount">Donation Amount</label>
        <input type="number" class="form-control" id="amount" placeholder="Enter amount" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Donate</button>
    </form>
    <div id="result" class="mt-3 text-center"></div>
  </div>
</div>

<script>
  document.getElementById('donationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const amount = document.getElementById('amount').value;

    if (name && amount) {
      document.getElementById('result').innerHTML = `<p class="text-success">Thank you, ${name}, for your donation of ₹${amount}!</p>`;
    } else {
      document.getElementById('result').innerHTML = '<p class="text-danger">Please fill out all fields.</p>';
    }
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
