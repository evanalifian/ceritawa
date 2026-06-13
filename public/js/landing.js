const quotes = [
  "Dari Cerita Lahir Tawa, dari Tawa Lahir Makna.",
  "Saat rapat dimulai, semua peserta sibuk mencari sinyal daripada mencari solusi.",
  "Judul berita baru dibaca tiga detik, emosinya langsung sidang paripurna.",
  "Sebagian orang tua memang ingin anaknya jadi pesawat… tapi bensinnya disuruh cari sendiri.",
  "Pak, kenapa tugasnya banyak sekali? Supaya kalian sadar hidup tidak semudah rebahan.",
];

const quoteText = document.getElementById("quote-text");
const changeBtn = document.getElementById("change_quote_btn");

changeBtn.addEventListener("click", () => {
  let randomIndex;
  let newQuote;

  do {
    randomIndex = Math.floor(Math.random() * quotes.length);
    newQuote = quotes[randomIndex];
  } while (quoteText.textContent.includes(newQuote));

  quoteText.textContent = `“${newQuote}”`;
});
