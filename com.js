document.getElementById('complaintForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;

    document.getElementById('responseMessage').innerText = "Thank you, " + name + "! Your complaint has been submitted.";
    
    document.getElementById('complaintForm').reset();
});