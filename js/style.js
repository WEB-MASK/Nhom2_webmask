// Bắt sự kiện zoom ấn F11
window.addEventListener('load', function() {
    document.querySelector(".expand").addEventListener('click', function() {
        var elem = document.documentElement;
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox */
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE/Edge */
            elem.msRequestFullscreen();
        }
    })
});

// btn circle
function frame(x) {


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


// Click user
window.addEventListener('load', function() {
    var usedrop = document.querySelector(".usedrop");
    usedrop.addEventListener('click', function() {
        var user = document.getElementsByClassName("user")[0];
        if (user.style.display == 'none') {
            user.style.display = 'grid';
            usedrop.style.padding = "0px 20px";
            usedrop.style.background = "#fafafa";
            // padding: 0 px 20 px;
            // background - color:
            usedrop.style.height = "fit-content";
            // height: fit - content;
        } else {
            user.style.display = 'none';
            usedrop.style.background = "none";
        }
        return false;
    });
    document.getElementById("bodymain").addEventListener('click', e => {
        var user = document.getElementsByClassName("user")[0];
        var usedrop = document.querySelector(".usedrop");
        if (!user.contains(e.target) && (!usedrop.contains(e.target))) {
            user.style.display = 'none';
            usedrop.style.background = "none";
        }
        return false;
    });

})


// sidebar
const element = document.getElementsByClassName("nav")[0];
element.addEventListener('click', onTabClick, false);

function onTabClick(event) {
    let activeTabs = document.querySelectorAll('.active');

    // deactivate existing active tab and panel
    // for( let i = 0; i < activeTabs.length; i++) {
    //   activeTabs[i].className = activeTabs[i].className.replace('active', '');
    // }
    activeTabs.forEach(function(tab) {
        tab.className = tab.className.replace('active', '');
    });

    // activate new tab and panel
    event.target.parentElement.className += ' active';
    // event.target.firstElementChild.className += ' active';



}
// childPages

// pages
window.addEventListener('load', function() {
        const page = document.getElementById("page");
        page.addEventListener('click', function() {
            var navpage = document.getElementsByClassName("nav1")[0];
            var apages = document.getElementById("apages").lastElementChild.className = "lnr lnr-chevron-down";
            var subpage = document.getElementById("subPages");
            // if ((navpage.style.display == 'none')) {
            console.log(apages);
            subpage.style.display = 'block';
            navpage.style.display = 'block';
            subpage.style.background = '#252c35';


            // }
        });
        document.getElementById("sidebar-nav").addEventListener('click', e => {
            const page = document.getElementById("page");
            var navpage = document.getElementsByClassName("nav1")[0];
            if (!page.contains(e.target) && (!navpage.contains(e.target))) {
                navpage.style.display = 'none';
                page.style.height = "58" + "px";
                var apages = document.getElementById("apages").lastElementChild.className = "lnr lnr-chevron-left";
            }
        });

    })
    // h