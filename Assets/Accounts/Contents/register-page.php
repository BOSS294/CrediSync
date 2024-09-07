<div class="register-page">
    <div class="register-container">
        <h2>Create Your Account</h2>
        <form id="registerForm">
            <div class="input-group">
                <span class="material-icons">person</span>
                <input type="text" id="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <span class="material-icons">email</span>
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="material-icons">phone</span>
                <input type="tel" id="phone" placeholder="Phone Number" required>
            </div>
            <div class="input-group checkbox-group">
                <input type="checkbox" id="sameAsPhone" onclick="toggleWhatsappNumber()">
                <label for="sameAsPhone">Use same number for WhatsApp</label>
            </div>
            <div class="input-group">
                <span class="material-icons">message</span>
                <input type="tel" id="whatsapp" placeholder="WhatsApp Number">
            </div>
            <div class="input-group">
                <span class="material-icons">lock</span>
                <input type="password" id="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <span class="material-icons">lock</span>
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="input-group">
                <span class="material-icons">home</span>
                <textarea id="address" placeholder="Complete Address" required></textarea>
            </div>
            <div class="input-group checkbox-group">
                <input type="checkbox" id="acceptTerms" required>
                <label for="acceptTerms">I accept the <a href="/terms" class="link">Terms & Conditions</a></label>
            </div>
            <div class="input-group checkbox-group">
                <input type="checkbox" id="acceptPrivacy" required>
                <label for="acceptPrivacy">I accept the <a href="/privacy-policy" class="link">Privacy Policy</a></label>
            </div>
            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</div>

<script>
    function toggleWhatsappNumber() {
        const phoneInput = document.getElementById('phone');
        const whatsappInput = document.getElementById('whatsapp');
        if (document.getElementById('sameAsPhone').checked) {
            whatsappInput.value = phoneInput.value;
            whatsappInput.disabled = true;
        } else {
            whatsappInput.disabled = false;
        }
    }
</script>
