function addNote() {
    // Ambil data dari form
    var title = document.getElementById('title-left').value;
    var topic = document.getElementById('topic').value;
    var task = document.getElementById('task').value;
    var date = document.getElementById('date').value;
    var subject = document.getElementById('subject').value;
    var notes = document.getElementById('notes').value;
    var link = document.getElementById('link-list').value;

    // Buat elemen baru untuk catatan
    var note = document.createElement('div');
    note.className = 'note';

    // Tambahkan konten ke elemen catatan
    note.innerHTML = `
        <h3>${title}</h3>
        <p>${topic}</p>
        <p>${subject}</p>
        <p>${date}</p>
        <button class="edit">Edit</button>
        <button class="delete">Hapus</button>
    `;

    // Tambahkan elemen catatan ke daftar catatan
    document.getElementById('list-notes').appendChild(note);
}

document.getElementById('form').addEventListener('submit', function(event) {
    // Mencegah form dari submit secara default
    event.preventDefault();

    // Panggil fungsi addNote
    addNote();
});

// Tambahkan event listener ke daftar catatan
document.getElementById('list-notes').addEventListener('click', function(e) {
    // Jika yang diklik adalah tombol edit
    if (e.target.className == 'edit') {
        // Lakukan sesuatu untuk mengedit catatan
    }

    // Jika yang diklik adalah tombol hapus
    if (e.target.className == 'delete') {
        // Hapus catatan
        e.target.parentElement.remove();
    }
});
