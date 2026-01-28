<?php
// auth.php — include this at the top of every protected page
declare(strict_types=1);

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['preview_logged_in'])) {
  $next = $_SERVER['REQUEST_URI'] ?? '/';
  header('Location: /login.php?next=' . urlencode($next));
  exit;
}
