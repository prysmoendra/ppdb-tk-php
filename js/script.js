// ================ GENERAL ================
var navLinks = document.getElementById("navLinks");
function showMenu() {
    navLinks.style.right = "0";
}
function hideMenu() {
    navLinks.style.right = "-200px";
}



// ================ PPDB ================
var leftContent = document.getElementById('left-content');
var centerContent = document.getElementById('center-content');
var rightContent = document.getElementById('right-content');
var leftLink = document.querySelector('.links a:nth-child(1)');
var centerLink = document.querySelector('.links a:nth-child(2)');
var rightLink = document.querySelector('.links a:nth-child(3)');
var createAccountForm = document.querySelector('.create-account-form');
var signupForm = document.querySelector('.signup-form');

function showContent(linkType) {
    // Menyembunyikan semua konten
    var allContent = document.querySelectorAll('.content > div');
    for (var i = 0; i < allContent.length; i++) {
        allContent[i].classList.add('hidden');
    }

    // Menampilkan konten yang sesuai dengan link yang diklik
    var selectedContent = document.getElementById(linkType + '-content');
    selectedContent.classList.remove('hidden');

    // Reset style untuk semua link
    leftLink.style.backgroundColor = "#315377";
    leftLink.style.color = "#fff";
    centerLink.style.backgroundColor = "#315377";
    centerLink.style.color = "#fff";
    rightLink.style.backgroundColor = "#315377";
    rightLink.style.color = "#fff";

    // Ubah style untuk link yang sedang ditekan
    if (linkType === 'left') {
        leftLink.style.backgroundColor = "#fff";
        leftLink.style.color = "#315377";
    } else if (linkType === 'center') {
        centerLink.style.backgroundColor = "#fff";
        centerLink.style.color = "#315377";
    } else if (linkType === 'right') {
        rightLink.style.backgroundColor = "#fff";
        rightLink.style.color = "#315377";
    }

    // Sembunyikan form login dan signup pada konten selain right-content
    if (linkType !== 'right') {
        createAccountForm.classList.add('hidden');
        signupForm.classList.add('hidden');
    } else {
        // Tampilkan form create account pada right-content
        createAccountForm.classList.remove('hidden');
    }
}

// Menampilkan konten utama
showContent('right');

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var contentParam = getParameterByName('content');
if (contentParam === 'left') {
    showContent('left');
}

leftLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent('left');
});

centerLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent('center');
});

rightLink.addEventListener('click', function (event) {
    event.preventDefault();
    showContent('right');
});

// Fungsi untuk menampilkan form create account
function showSignupForm() {
    signupForm.classList.remove('hidden');
    createAccountForm.classList.add('hidden');
}

// untuk redirect langsung ke konten kanan
// function signup() {
//     signupForm.classList.remove('hidden');
//     createAccountForm.classList.add('hidden');
//     showContent('right');
// }

// Fungsi untuk menampilkan form login
function showCreateAccountForm() {
    createAccountForm.classList.remove('hidden');
    signupForm.classList.add('hidden');
}