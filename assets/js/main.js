const observeHeaderBlockSize = new ResizeObserver(entries => {
    const header = entries[0];

    if (header.contentBoxSize) {
        const { blockSize } = header.contentBoxSize[0];
        const roundedBlockSize = Math.round(blockSize);
        document.documentElement.style.setProperty('--header-block-size', `${roundedBlockSize}px`);
    }
});

// フェードインアニメーション
function observeElements() {
    const elements = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => {
        observer.observe(element);
    });
}

// スムーススクロール
function smoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header');
    if (header) {
        observeHeaderBlockSize.observe(header);
    }
    // Add any additional JavaScript functionality here
    observeElements();
    smoothScroll();
});

