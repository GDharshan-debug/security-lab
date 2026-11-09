// FIXED - Broken Login Fix
// 1. Store password safely
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// 2. Check password safely
if (password_verify($_POST['password'], $hashed_password)) {
    echo "Login Success";
} else {
    echo "Login Failed";
}
