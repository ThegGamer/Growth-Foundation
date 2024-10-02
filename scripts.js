function Highlight() {
    let Link = document.getElementById("Contact");
    Link.classList.add("contact-us-highlight");
    setTimeout(() => {
        Link.classList.remove("contact-us-highlight");
    }, 3000);
}

function Opacity() {
    setTimeout(() => {
        document.getElementById("button").style.opacity = "1";
    }, 1200);
}

function Dropdown() {
    const Menu = document.getElementById("menu-icon");
    let Toggle = document.getElementById("menu-toggle");
    let contact = document.getElementById("contact-dropdown");
    let arrow = document.getElementById("Button");
    let text = document.getElementById("contact-text")
    let li = document.getElementById("project-li")

    if (Menu.classList.contains("active")) {
        Menu.classList.remove("active");
    } else {
        Menu.classList.add("active");
    }

    if (Toggle.classList.contains("dropdown")) {
        Toggle.classList.remove("dropdown")
        arrow.classList.remove("dropdown-arrow");
        contact.classList.remove("toggle");
        text.classList.remove("font")
        li.classList.remove("menu-li-1")
    } else {
        Toggle.classList.add("dropdown")
    }
}

function Contact_Dropdown() {
    let contact = document.getElementById("contact-dropdown");
    let arrow = document.getElementById("Button");
    let text = document.getElementById("contact-text")
    let li = document.getElementById("project-li")

    if (contact.classList.contains("toggle")) {
        arrow.classList.remove("dropdown-arrow");
        contact.classList.remove("toggle");
        text.classList.remove("font")
        li.classList.remove("menu-li-1")
    } else {
        arrow.classList.add("dropdown-arrow");
        contact.classList.add("toggle");
        text.classList.add("font")
        li.classList.add("menu-li-1")
    }
}

function scrollL() {
    var left = document.getElementById("image-scroll");
    left.scrollBy(350, 0);
}

function scrollR() {
    var right = document.getElementById("image-scroll");
    console.log("hello");
    right.scrollBy(-350, 0);
}

//lottie player// 
    LottieInteractivity.create({
    player: '#Lottie',
    mode: 'scroll',
    actions: [
        {
            visibility: [0.2, 1],
            type: "play",
            frames: [0, 165],
            speed: 0.5,
        }
    ]
    });

    LottieInteractivity.onComplete = function(){
        console.log('complete');
    }    
//script//
