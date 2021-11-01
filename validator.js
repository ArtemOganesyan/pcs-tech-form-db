function applicationSubmit() {
    document.getElementById('application').addEventListener('submit', function(event) {

        var fname = document.getElementById('user_firstname');
        if (fname.value == '') {
            showError("Provide firstname", "fname_div");
            event.preventDefault();
        }
        
    });
}

function showError(message, div_id) {
    var error = document.createElement('div');
    error.style = "color:red;font-size:12px;margin-bottom:10px";
    error.innerHTML = message;
    document.getElementById(div_id).appendChild(error);
}