// FIXED - XSS Fix
$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
echo "Hello, " . $name;
