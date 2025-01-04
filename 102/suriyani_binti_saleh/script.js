function openInNewTab(url) {
    window.open(url, '_blank').focus();
}

document.querySelectorAll('.thumbnail').forEach(thumbnail => {
    thumbnail.addEventListener('mouseover', () => {
        const popup = thumbnail.querySelector('.popup');
        popup.style.display = 'flex';
        setTimeout(() => {
            popup.style.display = 'none';
        }, 2000); // close popup after 2 seconds
    });

    thumbnail.addEventListener('mouseout', () => {
        thumbnail.querySelector('.popup').style.display = 'none';
    });

    thumbnail.querySelector('.close-button').addEventListener('click', () => {
        thumbnail.querySelector('.popup').style.display = 'none';
    });
});
