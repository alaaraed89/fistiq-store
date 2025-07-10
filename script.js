
    document.querySelectorAll(".nav-link").forEach(link => {
      link.addEventListener("click", () => {
        document.querySelectorAll(".nav-link").forEach(el => el.classList.remove("active"));
        link.classList.add("active");
      });
    });
