<div class="add-creditors">
    <div class="creditor-details">
        <h2>Manage Debitors</h2>
        <p>Perform various actions to manage your debitors efficiently.</p>
        <div class="action-buttons">
            <button class="circular-btn" onclick="openAddCreditorForm()">
                <span class="material-icons">add</span>
                <span class="tooltip-text">Add Debitor</span>
            </button>
            <button class="circular-btn" onclick="viewCreditors()">
                <span class="material-icons">visibility</span>
                <span class="tooltip-text">View Debitor</span>
            </button>
            <button class="circular-btn" onclick="deleteCreditor()">
                <span class="material-icons">delete</span>
                <span class="tooltip-text">Delete Debitor</span>
            </button>
            <button class="circular-btn" onclick="updateCreditor()">
                <span class="material-icons">edit</span>
                <span class="tooltip-text">Update Debitor</span>
            </button>
        </div>
    </div>

    <!-- Popup Form for Add Creditor -->
    <div class="creditor-popup-form" id="creditorPopup">
        <div class="form-container">
            <span class="close-btn" onclick="closeAddCreditorForm()">&times;</span>
            <h3>Add Debitors Details</h3>
            <form>
                <label for="creditorName">Creditor Name:</label>
                <input type="text" id="creditorName" placeholder="Enter creditor name">
                
                <label for="creditorDesignation">Debitor Designation:</label>
                <input type="text" id="creditorDesignation" placeholder="Enter designation">
                
                <label for="openingBalance">Opening Balance:</label>
                <input type="number" id="openingBalance" placeholder="Enter opening balance">
                
                <button type="submit" class="submit-btn">Add Debitor</button>
            </form>
        </div>
    </div>
</div>
<script>
    function openAddCreditorForm() {
    document.getElementById("creditorPopup").classList.add("active");
}

function closeAddCreditorForm() {
    document.getElementById("creditorPopup").classList.remove("active");
}

function viewCreditors() {
    alert("Viewing all creditors.");
}

function deleteCreditor() {
    alert("Deleting creditors.");
}

function updateCreditor() {
    alert("Updating creditor details.");
}

</script>