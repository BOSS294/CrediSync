<div class="login-page">
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form id="loginForm">
            <div class="input-group">
                <span class="material-icons">email</span>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="input-group">
                <span class="material-icons">lock</span>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="captcha-container">
                <p id="captchaQuestion" class="captcha-text"></p>
                <input type="text" id="captchaAnswer" placeholder="Answer the question" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</div>

<script>
    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10);
        const num2 = Math.floor(Math.random() * 10);
        const question = `What is ${num1} + ${num2}?`;
        document.getElementById('captchaQuestion').innerText = question;
        return num1 + num2;
    }

    let correctCaptchaAnswer = generateCaptcha();

    document.getElementById('loginForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captchaAnswer').value, 10);
        if (userAnswer === correctCaptchaAnswer) {
            alert('Captcha correct, logged in!');
        } else {
            alert('Incorrect captcha, try again.');
            correctCaptchaAnswer = generateCaptcha();
        }
    });
</script>
