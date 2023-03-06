const placeholder = "https://picsum.photos/seed/picsum/536/354";
const thumb = document.getElementById('thumb');
const preview = document.getElementById('preview');

logo.addEventListener('input', () => {
    preview.src = thumb.value || placeholder;
})
