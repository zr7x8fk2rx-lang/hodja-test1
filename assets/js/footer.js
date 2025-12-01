document.addEventListener("scroll", () => {
  const el = document.querySelector(".hodja-backtotop");
  if (!el) return;
  if (window.scrollY > 400) el.classList.add("is-visible");
  else el.classList.remove("is-visible");
});
