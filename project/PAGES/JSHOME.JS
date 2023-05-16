
        const toggle = document.querySelector(".toggle");
        const ball = document.querySelector(".toggle-ball");
        const b = document.querySelectorAll(".movie-watch-btn");
        // const contact=document.querySelector(".container");
        const items = document.querySelectorAll(
            ".navbar,.navbar-container,.user-name,.profile,.toggle,.sidebar,.sidebar-icon,.container,.movie-title,.movie-desc,.arrow"
            );
        ball.addEventListener("click", () => {
            console.log("run");
            items.forEach(item => {
                (item).classList.toggle("active")
            })
            b.forEach(bt => {
                (bt).classList.toggle("active-btn")
            })
            toggle.classList.toggle("active-toggle");
        });
        