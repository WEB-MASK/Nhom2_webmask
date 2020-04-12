// var userdrop = document.getElementsByClassName(" usedrop")[0];
// var userpro = document.getElementsByClassName("user")[0];
// userdrop.addEventListener("click", UserPro);

// function UserPro() {
//     if (userpro.style.display == 'none') { alert("h"); }
//     //else { alert("h");}
// }

// Bắt sự kiện zoom ấn F11
var expand = document.getElementsByClassName("expand")[0];
expand.addEventListener("click", Zoom);

function Zoom(ev) {
    ev.which == '122';
}

// btn circle
function frame(x) {
    // if (!x.classList.toggle("lnr-arrow-right-circle")) {
    //     console.log("hi");
    // } else {
    //     console.log("he");
    // }

    var btn = document.getElementsByClassName("btn")[0].firstElementChild.className;
    console.log(btn);
    var elem = document.getElementsByClassName("sidebar")[0];
    var main = document.getElementsByClassName("main")[0];
    if (main.style.width == "100%") {
        main.style.width = "calc(100% - 260px)";
        // elem.style.width = "0" + 'px';
        elem.style.display = 'block';

    } else {
        elem.style.width = "260" + 'px';
        // elem.style.display = "block";
        main.style.width = "100%";
        elem.style.display = "none";
    }


}

function myFunction(x) {
    x.classList.toggle("lnr-arrow-right-circle");
    var main = document.getElementsByClassName("main")[0];
}