<div class="c content ">
<h2>Token Request Form</h2>

<form id="sampleForm">
    <label for="dataInput">Enter an approved email address:</label>
    <input type="text" id="dataInput" name="dataInput"><br><br>
    <button type="submit">Submit</button>
</form>

<script>
document.getElementById("sampleForm").addEventListener("submit", function(event){
    event.preventDefault(); // Prevent the default form submission

    var dataInput = document.getElementById("dataInput").value;

    // Prepare the data to be sent
    var data = {
        email: dataInput
    };

    // Send the POST request
    fetch("https://jc1yuy5yri.execute-api.us-east-1.amazonaws.com/prod", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data) // Convert the JavaScript object to a JSON string
    })
    .then(response => response.json()) // Parse the JSON response
    .then(data => {
        console.log("Success:", data);
    })
    .catch((error) => {
        console.error("Error:", error);
    });
});
</script>
</div>
