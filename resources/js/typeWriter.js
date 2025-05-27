function typeWriter(element, text, speed = 60) { // Speed in ms
    return new Promise((resolve) => {
        let i = 0;

        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else {
                resolve();
            }
        }

        type();
    });
}

window.addEventListener("DOMContentLoaded", async () => {
    for (const [id, text] of Object.entries(textsById)) {
        const el = document.getElementById(id);
        if (!el) continue;
        el.innerHTML = '';
        await typeWriter(el, text);
        await new Promise(r => setTimeout(r, 1000)); // Intermission time
    }
});
