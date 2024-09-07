<div class="side-buzzer">
    <div class="notification-icon" onclick="togglePopup()">
        <span class="material-icons">notifications</span>
        <span class="notification-dot"></span>
    </div>
    <div class="notification-popup" id="notificationPopup">
        <h3>Notifications</h3>
        <div class="notification-item">
            <p>New payment received from John Doe.</p>
        </div>
        <div class="notification-item">
            <p>Client payment is due tomorrow.</p>
        </div>
        <!-- Add more notifications as needed -->
    </div>
</div>
<script>
    function togglePopup() {
    const popup = document.getElementById('notificationPopup');
    popup.classList.toggle('show');
}

</script>