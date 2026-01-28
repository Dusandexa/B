<?php
declare(strict_types=1);

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ====== CONFIG: set your users here ======
$USERS = [
  'dusan'  => 'bnblawsajtdusan2026',
  'client' => 'bnblawsajtbojanbojana2026',
];
// =========================================

$next = $_GET['next'] ?? '/';
if (!is_string($next) || $next === '') $next = '/';
if (str_starts_with($next, 'http')) $next = '/'; // safety

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = trim((string)($_POST['username'] ?? ''));
  $p = (string)($_POST['password'] ?? '');
  $nextPost = (string)($_POST['next'] ?? '/');

  if (isset($USERS[$u]) && hash_equals($USERS[$u], $p)) {
    session_regenerate_id(true);
    $_SESSION['preview_logged_in'] = true;
    $_SESSION['preview_user'] = $u;

    if ($nextPost === '' || str_starts_with($nextPost, 'http')) $nextPost = '/';
    header('Location: ' . $nextPost);
    exit;
  }

  $error = 'Wrong username or password.';
  $next = $nextPost;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow,noarchive">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Private Preview Login</title>
  <style>
    body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;background:#000;color:#fff;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial}
    .card{width:min(360px,92vw);padding:24px;border:1px solid #222;border-radius:14px;background:#0b0b0b}
    h1{font-size:20px;margin:0 0 14px}
    .muted{color:#aaa;font-size:13px;margin:0 0 18px;line-height:1.35}
    input{width:100%;padding:11px 12px;margin:0 0 10px;border-radius:10px;border:1px solid #222;background:#111;color:#fff;outline:none}
    input:focus{border-color:#444}
    button{width:100%;padding:11px 12px;border-radius:10px;border:0;background:#6c5ce7;color:#fff;font-weight:700;cursor:pointer}
    .err{margin:0 0 12px;color:#ff6b6b;font-size:13px}
  </style>
</head>
<body>
  <form class="card" method="post" action="/login.php">
    <h1>Private Preview</h1>
    <p class="muted">Login to view the in-progress site.</p>

    <?php if ($error): ?>
      <div class="err"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>

    <input name="username" autocomplete="username" placeholder="Username" required>
    <input name="password" type="password" autocomplete="current-password" placeholder="Password" required>
    <input type="hidden" name="next" value="<?= htmlspecialchars($next, ENT_QUOTES, 'UTF-8') ?>">

    <button type="submit">Sign in</button>
  </form>
</body>
</html>
