function addNote() {
    var title = document.getElementById('title-left').value;
    var topic = document.getElementById('topic').value;
    var task = document.getElementById('task').value;
    var date = document.getElementById('date').value;
    var subject = document.getElementById('subject').value;
    var notes = document.getElementById('notes').value;
    var link = document.getElementById('link-list').value;

    var note = document.createElement('div');
    note.className = 'note';

    note.innerHTML = `
    <div class="input-field">
        <div class="leftside">
            <div class="title-left">
                <h3>${title}</h3>
            </div>
            <div class="topic">
                <p>${topic}</p>
            </div>
            <div class="topic">
                <p>${task}</p>
            </div>
        </div>
        <div class="rightside">
            <div class="date">
                <p>${date}</p>
            </div>
            <div class="subject">
                <p>${subject}</p>
            </div>
        </div>
        <button class="edit">Edit</button>
        <button class="delete">Hapus</button>
    </div>
`;

    document.getElementById('list-notes').appendChild(note);
}

document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    addNote();
});