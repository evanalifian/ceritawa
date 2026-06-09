document.getElementById("logout-button").addEventListener("click", () => {
  window.location.href = "/logout";
});

const changeQuoteBtn = document.getElementById("change_quote_btn");

changeQuoteBtn.addEventListener("click", () => {
  location.reload();
});