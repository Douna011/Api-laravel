<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2rem;
      max-width: 600px;
    }

    .btn {
      margin-top: 20px;
      padding: 12px 24px;
      background: white;
      color: #2575fc;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #e0e0e0;
    }
  </style>
</head>
<body>
  <h1>Welcome to My Project 🚀</h1>
  <p>This is a simple index page created as the starting point for your project. You can edit this file later to fit your app.</p>
  <button class="btn" onclick="alert('You clicked the button!')">Click Me</button>
</body>
</html>
