document.querySelector('.create-btn button').addEventListener('click', function() {
    // Buat elemen baru untuk form
    var form = document.createElement('div');
    form.className = 'form-assignment';
    form.innerHTML = `
    <div class="input-field">
        <div class="form-assignment">
            <form action="#">
                <div class="title">
                    <input type="text" id="title"placeholder="Masukan Judul" required >
                </div>
                <div class="deadline">
                    <input type="date" id="deadline" placeholder="Deadline" required>
                <div class="task-link">
                    <input type="text" id="task-link" placeholder="Masukan Link Tugas">
                </div>
                <div class="desc">
                    <textarea name="desc" id="" cols="30" rows="10" placeholder="Deskripsi Tugas"></textarea>
                </div>
                <div class="button-task">
                    <button type="submit">Save</button>
                    <button type="submit">Edit</button>
                    <button type="submit">Hapus</button>
                </div>
                
            </form>
            
        </div>
    </div> 
`;

    // Tambahkan form ke halaman
    document.querySelector('.new-assignment').appendChild(form);
});
