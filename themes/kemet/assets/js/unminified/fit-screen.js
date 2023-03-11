(function () {
    function fitScreen() {
        const fitScreenElements = Array.from(document.querySelectorAll('.is-style-fit-to-screen'));

        if (fitScreenElements.length > 0) {
            const bodyWidth = document.body.clientWidth;
            fitScreenElements.map(element => {
                const { x } = element.parentElement.getBoundingClientRect();
                element.style.width = `${bodyWidth}px`;
                element.style.left = `-${x}px`;

                console.log(x);
            })
        }
    }

    window.addEventListener("resize", fitScreen());
    fitScreen();
})();