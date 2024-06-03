function toggleNav() {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.style.width === "250px") {
        sidebar.style.width = "0";
    } else {
        sidebar.style.width = "250px";
    }
}

function handleTujuanChange(event) {
    const dpdDropdown = document.getElementById('dpd-dropdown');
    const dpwDropdown = document.getElementById('dpw-dropdown');

    if (event.target.value === 'dpd') {
        dpdDropdown.classList.remove('hidden');
        dpwDropdown.classList.add('hidden');
    } else if (event.target.value === 'dpw') {
        dpwDropdown.classList.remove('hidden');
        dpdDropdown.classList.add('hidden');
    } else {
        dpdDropdown.classList.add('hidden');
        dpwDropdown.classList.add('hidden');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('nav button');
    const contents = document.querySelectorAll('.content');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('id').replace('-btn', '');
            contents.forEach(content => {
                content.classList.remove('active');
                if (content.getAttribute('id') === target) {
                    content.classList.add('active');
                }
            });
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});


const highlights = [
    {
        title: "Dokumen Kegiatan 1",
        description: "Deskripsi singkat dokumen kegiatan 1.",
        image: "highlight1.jpg"
    },
    {
        title: "Dokumen Kegiatan 2",
        description: "Deskripsi singkat dokumen kegiatan 2.",
        image: "highlight2.jpg"
    }
    // Tambahkan objek highlight lainnya di sini
];

let currentIndex = 0;

function showHighlight(index) {
    const title = document.getElementById('highlight-title');
    const description = document.getElementById('highlight-description');
    const items = document.querySelectorAll('.highlight-item');

    title.textContent = highlights[index].title;
    description.textContent = highlights[index].description;

    items.forEach((item, i) => {
        item.classList.remove('active');
        if (i === index) {
            item.classList.add('active');
        }
    });
}

function nextHighlight() {
    currentIndex = (currentIndex + 1) % highlights.length;
    showHighlight(currentIndex);
}

function prevHighlight() {
    currentIndex = (currentIndex - 1 + highlights.length) % highlights.length;
    showHighlight(currentIndex);
}

// Initialize the first highlight
document.addEventListener('DOMContentLoaded', () => {
    showHighlight(currentIndex);
});


// JavaScript to handle the popup
function showPopup() {
    document.getElementById('popup').style.display = 'block';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

// Close the popup when clicking outside of it
window.onclick = function(event) {
    var popup = document.getElementById('popup');
    if (event.target == popup) {
        popup.style.display = 'none';
    }
}