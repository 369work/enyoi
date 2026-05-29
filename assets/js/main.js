const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
).matches;

const observeHeaderBlockSize = new ResizeObserver((entries) => {
    const header = entries[0];

    if (header.contentBoxSize) {
        const { blockSize } = header.contentBoxSize[0];
        const roundedBlockSize = Math.round(blockSize);
        document.documentElement.style.setProperty(
            "--header-block-size",
            `${roundedBlockSize}px`,
        );
    }
});

// フェードインアニメーション
function observeElements() {
    const elements = document.querySelectorAll(".fade-in");

    if (prefersReducedMotion) {
        // アニメーション無効設定の場合は即座に表示
        elements.forEach((element) => {
            element.classList.add("visible");
        });
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1 },
    );

    elements.forEach((element) => {
        observer.observe(element);
    });
}

// スムーススクロール
function smoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach((link) => {
        const href = link.getAttribute("href");
        if (!href || href === "#") {
            return;
        }
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: prefersReducedMotion ? "auto" : "smooth",
                    block: "start",
                });
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector("header");
    if (header) {
        observeHeaderBlockSize.observe(header);
    }
    observeElements();
    smoothScroll();
});
