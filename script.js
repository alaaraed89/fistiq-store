
    document.querySelectorAll(".nav-link").forEach(link => {
      link.addEventListener("click", () => {
        document.querySelectorAll(".nav-link").forEach(el => el.classList.remove("active"));
        link.classList.add("active");
      });
    });

    document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.getElementById("hamburger");
  const navLinks = document.getElementById("nav-links");

  hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("show");
  });

  // Existing code to activate nav-link highlight
  document.querySelectorAll(".nav-link").forEach(link => {
    link.addEventListener("click", () => {
      document.querySelectorAll(".nav-link").forEach(el => el.classList.remove("active"));
      link.classList.add("active");
    });
  });
});