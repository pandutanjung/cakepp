<script>
    // Fungsi untuk mengatur tema berdasarkan preferensi pengguna
    function setTheme(theme) {
        document.body.className = theme;
        localStorage.setItem('theme', theme); // Simpan tema di localStorage
    }

    // Fungsi untuk beralih antara tema gelap dan terang
    function toggleTheme() {
        const currentTheme = document.body.className;
        const newTheme = currentTheme === 'light-mode' ? 'dark-mode' : 'light-mode';
        setTheme(newTheme);
    }

    // Fungsi untuk mendapatkan tema dari localStorage atau menggunakan tema standar
    function getSavedTheme() {
        return localStorage.getItem('theme') || 'light-mode';
    }

    // Jalankan fungsi untuk mengatur tema saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        setTheme(getSavedTheme());
    });

    // Tambahkan event listener untuk tombol toggle theme
    document.getElementById('toggleTheme').addEventListener('click', toggleTheme);
</script>
