function toggleText() {
    const fullText = document.getElementById('full-text');
    const seeMoreButton = document.getElementById('see-more');

    if (fullText.style.display === 'none') {
        fullText.style.display = 'block';
        seeMoreButton.innerText = 'See Less';
    } else {
        fullText.style.display = 'none';
        seeMoreButton.innerText = 'See More';
    }
}

export { toggleText };



