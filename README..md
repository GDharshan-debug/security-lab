# Security Lab - SQL Injection & XSS

Live Website: https://gdharshan-debug.github.io/security-lab/
By: Dharshan

## What I Did

This project shows 2 common web attacks in a safe lab made by me.

### 1. SQL Injection (Login Bypass)

- I made a vulnerable login page.
- Normal login needs username + password.
- I used this attack payload in username field:
  `' OR '1'='1`
- Result: It bypassed login and logged me in as Admin without knowing the password.
- This happens because the app puts user input directly into SQL query.

### 2. Cross-Site Scripting - XSS (Reflected)

- I made a vulnerable search page.
- I typed this payload in search box:
  `<script>alert('XSS')</script>`
- Result: A popup alert appeared - proving attacker JavaScript can run in victim's browser.
- This happens because the app shows user input with innerHTML without cleaning it.

## Screenshots Proof

All proof screenshots are in `1-screenshots` folder:

- SQLi-Attack-Before.jpeg
- SQLi-Success-Logged-in-as-Admin.jpeg
- XSS-Attack-Popup.jpeg
- XSS-Success-Alert-1.jpeg

## How To Fix (Prevention)

- SQLi: Use Prepared Statements / Parameterized Queries, never build SQL with `+ input`.
- XSS: Use textContent instead of innerHTML, and escape user input.

## Disclaimer

This lab is for learning only, on my own website. Never try these attacks on real websites without permission.

## Remediation - Fixed

1. SQL Injection - Fixed with Prepared Statements
2. XSS - Fixed with htmlspecialchars()
3. Broken Login - Fixed with password_hash() + password_verify()
All 3 vulnerabilities tested and remediated.
