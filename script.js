function changeFontSize(action) {
    const textContent = document.getElementById('text-content');
    
    if (action === 'increase') {
        textContent.classList.remove('small-text');
        textContent.classList.add('large-text');
    } else {
        textContent.classList.remove('large-text');
        textContent.classList.add('small-text');
    }
}