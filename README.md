# README.md

````md
# 🛡️ CI4 Anti-Hacker Lab

A modern cybersecurity demonstration project built using PHP and CodeIgniter 4 that showcases protection against:

- CSRF (Cross-Site Request Forgery)
- XSS (Cross-Site Scripting)

This project includes a modern glassmorphism UI, hacker-themed attack simulation, and secure form handling using CodeIgniter 4 security features.

---

# 📌 Features

✅ CSRF Protection using `csrf_field()`  
✅ XSS Protection using `esc()`  
✅ Modern Cybersecurity UI Design  
✅ Hacker Attack Visual Simulation  
✅ Secure Form Submission  
✅ Responsive Layout  
✅ Glassmorphism Design  
✅ Animated Security Alert Effects

---

# 🧪 Technologies Used

- PHP
- CodeIgniter 4
- HTML5
- CSS3
- VS Code

---

# 📂 Project Structure

```bash
app/
├── Controllers/
│   └── FormController.php
│
├── Views/
│   ├── form_view.php
│   └── result_view.php
│
├── Config/
│   └── Filters.php
│
└── Config/
    └── Routes.php
````

---

# ⚙️ Installation

## 1. Clone Repository

```bash
git clone https://github.com/yourusername/ci4-anti-hacker-lab.git
```

---

## 2. Open Project

Move the project folder inside:

```bash
htdocs/
```

Example:

```bash
C:\xampp\htdocs\ci4-anti-hacker-lab
```

---

## 3. Start XAMPP

Start:

* Apache

---

## 4. Install Dependencies

Open terminal inside project folder:

```bash
composer install
```

---

## 5. Run CodeIgniter 4

```bash
php spark serve
```

---

## 6. Open Browser

```bash
http://localhost:8080/form
```

---

# 🔒 Security Features

## CSRF Protection

Enabled globally inside:

```php
app/Config/Filters.php
```

```php
'before' => [
    'csrf'
]
```

Forms use:

```php
<?= csrf_field() ?>
```

If the CSRF token is missing, the request automatically fails with:

```text
403 Forbidden
```

---

## XSS Protection

User input is escaped using:

```php
<?= esc($user_input) ?>
```

This converts dangerous characters such as:

```html
<script>
```

into:

```html
&lt;script&gt;
```

preventing the browser from executing malicious scripts.

---

# 💀 XSS Attack Demo

Try entering:

```html
<script>document.title='Hacked'</script>
```

### Result:

* The script DOES NOT execute
* Browser title remains safe
* The UI switches into a hacker alert mode
* Suspicious script is detected and neutralized

---

# ❓ Discussion Questions

## Q1. Can CSRF attacks happen with GET requests?

Yes, CSRF attacks can happen with GET requests if the request performs sensitive actions like deleting or updating data. Although GET is mainly intended for retrieving information, insecure applications may still use it for critical operations that attackers can exploit.

---

## Q2. What if an attacker guesses the CSRF token?

If an attacker successfully guesses the CSRF token, they may bypass the CSRF protection and perform unauthorized actions on behalf of the user. However, modern frameworks like CodeIgniter 4 generate long and random tokens that are extremely difficult to predict.

---

## Q3. Why isn't validating input enough to stop XSS?

Validating input alone is not enough because malicious scripts can still pass through if they match the allowed format. Output escaping using `esc()` is still necessary because it prevents the browser from interpreting harmful code as executable JavaScript or HTML.

---

# 👨‍💻 Author

Developed by Kurt Russel B. Zarate
BSIT Student
Advance Web Development

---

# 📜 License

This project is for educational purposes only.

```
```
