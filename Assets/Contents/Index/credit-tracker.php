<div class="credit-score-tracker">
    <div class="score-container">
        <div class="score-circle">
            <div class="score-value">750</div>
        </div>
        <div class="score-details">
            <h3>Credit Score</h3>
            <p>Your credit score is a measure of your creditworthiness. It is calculated based on various factors including payment history, credit utilization, length of credit history, and types of credit accounts.</p>
            <button class="tips-btn" onclick="showTips()">Show Tips to Improve</button>
        </div>
    </div>
</div>

<!-- Custom Popup Modal -->
<div class="modal" id="tipsModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeTips()">&times;</span>
        <h3>Tips to Improve Your Credit Score</h3>
        <ul>
            <li>Pay your bills on time.</li>
            <li>Reduce your credit card balances.</li>
            <li>Avoid opening too many new credit accounts.</li>
            <li>Regularly check your credit report for errors.</li>
            <li>Maintain a healthy credit mix.</li>
        </ul>
    </div>
</div>
<script>
    function showTips() {
    document.getElementById('tipsModal').style.display = 'flex';
}

function closeTips() {
    document.getElementById('tipsModal').style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('tipsModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}

</script>