
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
$data = json_decode(file_get_contents("data.json"), true);
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>لوحة تحكم Fistiq</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #fefae0;
      color: #4b3621;
      direction: rtl;
      padding: 0;
    }

    header {
      background-color: #7a9e5f;
      color: white;
      padding: 1.5rem;
      text-align: center;
      font-size: 1.8rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    main {
      max-width: 600px;
      margin: 3rem auto;
      background: #fffef5;
      padding: 2rem;
      border-radius: 12px;
      border: 1px dashed #d8c690;
      box-shadow: 0 6px 16px rgba(0,0,0,0.05);
    }

    .stat {
      font-size: 1.3rem;
      margin-bottom: 1rem;
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #eee;
      padding-bottom: 0.5rem;
    }

    .stat strong {
      color: #7a9e5f;
    }

    a.button {
      display: inline-block;
      background-color: #7a9e5f;
      color: white;
      text-decoration: none;
      padding: 0.8rem 1.5rem;
      border-radius: 8px;
      font-weight: bold;
      margin-top: 2rem;
      transition: background-color 0.3s ease;
    }

    a.button:hover {
      background-color: #4b3621;
    }

    @media (max-width: 500px) {
      main {
        margin: 1rem;
        padding: 1.5rem;
      }

      .stat {
        font-size: 1.1rem;
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>
  <header>
    لوحة تحكم Fistiq
  </header>

  <main>
    <div class="stat">
      <span>📩 عدد الرسائل:</span> 
      <strong><?php echo count($data["messages"]); ?></strong>
    </div>

    <div class="stat">
      <span>🛍️ عدد الطلبات:</span> 
      <strong><?php echo count($data["requests"]); ?></strong>
    </div>

    <div class="stat">
      <span>👆 عدد النقرات:</span> 
      <strong><?php echo $data["clicks"]; ?></strong>
    </div>

    <a class="button" href="index.html">العودة إلى الموقع</a>
  </main>
</body>
</html>