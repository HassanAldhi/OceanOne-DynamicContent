function edit(){
    var align = document.getElementById('align-content');
    var kickstart = document.getElementById('kickstart');
    var textarea = document.createElement('textarea');
    var button = document.createElement('button');
    textarea.id = 'edit-text';
    textarea.rows = 5;
    textarea.cols = 30;
    textarea.appendChild(document.createTextNode(kickstart.innerText));
    button.innerHTML = "Replace";
    button.className = "btn btn-outline-light";
    align.innerText = '';
    align.appendChild(textarea);
    align.appendChild(button);
    button.addEventListener("click", function(){replace()});
}

function replace(){
    var textarea = document.getElementById("edit-text");
    var align = document.getElementById("align-content");
    align.innerHTML = textarea.value;
    textarea.remove();
}

function info() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    document.getElementById("info").innerHTML = `
        <p>Hello ${name},<br> Thank you for submitting the message form. 
        Here is a summary of the data you have provided:<br><br>
        Email : ${email} <br>
        Name : ${name} <br>
        Message : ${message} <br><br>
        We will review your message promptly and provide a response as soon as possible.
        <br><br>
        Thank you,
        Support Team</p>
    `;
}
