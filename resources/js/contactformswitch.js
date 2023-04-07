function setContactForm(n){
    let forms = document.querySelector(".contactFormBox").childNodes;

    forms.forEach((value, key, parent)=>{
        if (key == n-1) {
            value.classList.remove("hidden");
        }
        else
            value.classList.add("hidden");
    })
    return;
}
function toggle_search() {
    document.getElementById('seach-box').classList.contains('hidden')?
    document.getElementById('seach-box').classList.remove('hidden'):
    document.getElementById('seach-box').classList.add('hidden');
}

// Toggler for navigation

function toggle_nav() {
    document.getElementById('nav-box').classList.contains('hidden')?
    document.getElementById("nav-box").classList.remove("hidden"):
    document.getElementById("nav-box").classList.add("hidden");
}