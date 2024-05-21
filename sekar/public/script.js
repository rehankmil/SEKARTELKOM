function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar.style.width === '250px') {
        sidebar.style.width = '0';
    } else {
        sidebar.style.width = '250px';
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
