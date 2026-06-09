<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Google Profile')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
:root {
    --google-blue: #4285F4;
    --google-red: #EA4335;
    --google-yellow: #FBBC05;
    --google-green: #34A853;
    --google-gray: #5F6368;
    --google-light-bg: #f8f9fa;
    --google-card: #ffffff;
  }
    body {
      background-color: var(--google-light-bg);
      font-family: 'Roboto', -apple-system, BlinkMacSystemFont, sans-serif;
      color: #202124;
    }
    .google-container {
      max-width: 480px;
      margin: 0 auto;
    }
    .google-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 0;
      margin-bottom: 1rem;
    }
    .google-header .back-link {
      color: var(--google-gray);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.9rem;
    }
    .google-header .back-link:hover {
      color: var(--google-blue);
    }
    .google-header .page-title {
      font-size: 1.4rem;
      font-weight: 500;
      color: #202124;
      margin: 0;
    }
    .google-card {
      background: var(--google-card);
      border-radius: 16px;
      box-shadow: 0 1px 3px rgba(60,64,67,0.12), 0 1px 2px rgba(60,64,67,0.08);
      padding: 1.5rem;
      margin-bottom: 1rem;
      border: 1px solid #e8eaed;
    }
    .google-avatar {
      width: 88px;
      height: 88px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #e8eaed;
    }
    .google-btn {
      background-color: #fff;
      color: var(--google-gray);
      border: 1px solid #dadce0;
      padding: 0.6rem 1.5rem;
      border-radius: 24px;
      font-weight: 500;
      font-size: 0.9rem;
      transition: 0.2s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
    }
    .google-btn:hover {
      background-color: #f8f9fa;
      border-color: #c4c7cc;
      color: #202124;
    }
    .google-btn-danger {
      background-color: #fff;
      color: var(--google-red);
      border: 1px solid #dadce0;
    }
    .google-btn-danger:hover {
      background-color: #fce8e6;
      border-color: var(--google-red);
    }
    .google-divider {
      border-top: 1px solid #e8eaed;
      margin: 1rem 0;
    }
    .info-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.6rem 0;
    }
    .info-label {
      color: var(--google-gray);
      font-size: 0.85rem;
      font-weight: 500;
    }
    .info-value {
      color: #202124;
      font-weight: 400;
      text-align: right;
      word-break: break-all;
    }
    .dot-google {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: var(--google-green);
      display: inline-block;
      margin-right: 0.4rem;
    }
  </style>
</head>
<body>
  <div class="google-container px-3 py-4">
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>