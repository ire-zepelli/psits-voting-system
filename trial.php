<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Layout</title>
  <style>
    body {
      background: #fdfbf7;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: Arial, sans-serif;
    }

    .cards {
      display: flex;
      gap: 1rem;
      align-items: flex-end; /* keeps bottom aligned */
    }

    .card {
      flex: 1;
      text-align: center;
      border-radius: 1rem;
      padding: 1rem;
      color: white;
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .card img {
      width: 100%;
      border-radius: 1rem;
    }

    .card h3 {
      margin-top: 1rem;
      font-weight: bold;
    }

    /* Smaller side cards */
    .small {
      background: #d28ccc;
      transform: scale(0.85);
    }

    /* Medium cards */
    .medium {
      background: #823b87;
      transform: scale(1);
    }

    /* Center (highlighted) card */
    .large {
      background: #4a1c50;
      transform: scale(1.2);
      z-index: 1;
    }
  </style>
</head>
<body>
  <div class="cards">
    <div class="card small">
      <!-- <img src="your-image.png" alt="Treasurer"> -->
      <h3>Treasurer</h3>
    </div>
    <div class="card medium">
      <!-- <img src="your-image.png" alt="VP-External"> -->
      <h3>VP-External</h3>
    </div>
    <div class="card large">
      <!-- <img src="your-image.png" alt="President"> -->
      <h3>President</h3>
    </div>
    <div class="card medium">
      <!-- <img src="your-image.png" alt="VP-Internal"> -->
      <h3>VP-Internal</h3>
    </div>
    <div class="card small">
      <!-- <img src="your-image.png" alt="Secretary"> -->
      <h3>Secretary</h3>
    </div>
  </div>
</body>
</html>
