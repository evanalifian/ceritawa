// Data Soal Berdasarkan Dokumen
const quizData = [
  {
    q: "Teks yang berisi cerita singkat lucu dan mengandung kritik sosial disebut ...",
    opts: [
      "Teks prosedur",
      "Teks eksplanasi",
      "Teks anekdot",
      "Teks laporan hasil observasi",
    ],
    ans: 2, // C
    reason:
      "Teks anekdot merupakan cerita singkat yang lucu serta mengandung sindiran atau kritik terhadap suatu keadaan sosial.",
  },
  {
    q: "Tujuan utama teks anekdot adalah ...",
    opts: [
      "Menjelaskan proses terjadinya fenomena",
      "Memberikan petunjuk kerja",
      "Menghibur sekaligus menyampaikan kritik",
      "Melaporkan hasil penelitian",
    ],
    ans: 2, // C
    reason:
      "Teks anekdot tidak hanya bertujuan menghibur pembaca, tetapi juga menyampaikan kritik sosial secara halus melalui humor.",
  },
  {
    q: "Bagian teks anekdot yang berisi munculnya masalah atau peristiwa lucu disebut ...",
    opts: ["Abstrak", "Orientasi", "Krisis", "Koda"],
    ans: 2, // C
    reason:
      "Krisis merupakan bagian inti dalam teks anekdot karena berisi masalah atau kejadian lucu yang menjadi pusat cerita.",
  },
  {
    q: "“Pak, kenapa jalan di depan sekolah rusak sekali?”\n“Supaya siswa lebih semangat belajar melompati rintangan hidup.”\n\nKutipan tersebut menunjukkan ciri teks anekdot berupa ...",
    opts: [
      "Cerita fantasi",
      "Kritik sosial",
      "Penjelasan ilmiah",
      "Langkah kerja",
    ],
    ans: 1, // B
    reason:
      "Kutipan tersebut menyindir kondisi jalan rusak melalui humor sehingga termasuk bentuk kritik sosial dalam teks anekdot.",
  },
  {
    q: "Berikut yang termasuk ciri teks anekdot adalah ...",
    opts: [
      "Mengandung data statistik",
      "Bersifat imajinatif penuh",
      "Mengandung humor dan sindiran",
      "Menjelaskan langkah-langkah kerja",
    ],
    ans: 2, // C
    reason:
      "Ciri utama teks anekdot adalah adanya unsur humor yang dipadukan dengan sindiran terhadap suatu fenomena.",
  },
  {
    q: "Bagian penutup dalam teks anekdot yang berisi kesimpulan atau amanat disebut ...",
    opts: ["Reaksi", "Orientasi", "Abstrak", "Koda"],
    ans: 3, // D
    reason:
      "Koda merupakan bagian akhir teks anekdot yang biasanya berisi pesan moral atau penutup cerita.",
  },
  {
    q: "Perbedaan utama teks anekdot dan teks humor adalah ...",
    opts: [
      "Teks humor selalu lebih panjang",
      "Teks anekdot mengandung kritik sosial",
      "Teks humor memiliki struktur lengkap",
      "Teks anekdot tidak mengandung kelucuan",
    ],
    ans: 1, // B
    reason:
      "Teks anekdot memiliki unsur sindiran atau kritik sosial, sedangkan teks humor umumnya hanya bertujuan menghibur.",
  },
  {
    q: "Langkah pertama dalam membuat teks anekdot adalah ...",
    opts: [
      "Menentukan tema",
      "Menulis koda",
      "Membuat dialog lucu",
      "Menentukan amanat di akhir",
    ],
    ans: 0, // A
    reason:
      "Penulis harus menentukan tema terlebih dahulu agar isi cerita dan kritik yang disampaikan lebih terarah.",
  },
  {
    q: "“Saat rapat dimulai, semua peserta sibuk mencari sinyal daripada mencari solusi.”\n\nIsi kutipan tersebut menyindir tentang ...",
    opts: [
      "Kemajuan teknologi",
      "Kebiasaan membaca",
      "Gangguan jaringan internet",
      "Semangat bekerja",
    ],
    ans: 2, // C
    reason:
      "Kutipan tersebut menyindir kondisi rapat daring yang terganggu oleh sinyal internet sehingga peserta lebih fokus pada jaringan daripada isi rapat.",
  },
  {
    q: "Jenis anekdot yang membahas pelayanan masyarakat disebut ...",
    opts: [
      "Anekdot pendidikan",
      "Anekdot politik",
      "Anekdot layanan publik",
      "Anekdot budaya",
    ],
    ans: 2, // C
    reason:
      "Anekdot layanan publik biasanya berisi kritik atau sindiran terhadap pelayanan masyarakat yang kurang efektif atau lucu.",
  },
];

let currentQ = 0;
let score = 0;
let userAnswers = [];

// Fungsi Memulai Kuis
function startQuiz() {
  document.getElementById("quiz-start-screen").classList.add("d-none");
  document.getElementById("quiz-container").classList.remove("d-none");
  currentQ = 0;
  score = 0;
  userAnswers = [];
  showQuestion();
}

// Fungsi Memuat dan Menampilkan Soal beserta Opsi Jawaban
function showQuestion() {
  // Sembunyikan container feedback dari soal sebelumnya
  document.getElementById("feedback-container").classList.add("d-none");

  const data = quizData[currentQ];
  document.getElementById("current-question-num").innerText = currentQ + 1;

  // Konversi karakter pindah baris (\n) menjadi tag <br> agar teks rapi
  document.getElementById("question-text").innerHTML = data.q.replace(
    /\n/g,
    "<br>",
  );

  const optionsBox = document.getElementById("options-container");
  optionsBox.innerHTML = ""; // Kosongkan opsi sebelumnya

  // Loop data opsi
  data.opts.forEach((opt, index) => {
    const btn = document.createElement("button");
    btn.className =
      "btn btn-outline-dark bg-white py-3 px-4 text-start fw-semibold rounded-4 border-2 shadow-sm transition-all option-btn";
    btn.innerHTML = `<span class="badge bg-dark-subtle text-dark me-2 font-monospace px-2 py-1">${String.fromCharCode(65 + index)}</span> ${opt}`;
    btn.onclick = () => checkAnswer(index, btn);
    optionsBox.appendChild(btn);
  });

  // Update Progress Bar & Persentase Teknis kemajuan kuis
  let progress = (currentQ / quizData.length) * 100;
  document.getElementById("quiz-progress-bar").style.width = progress + "%";
  document.getElementById("progress-percent").innerText = Math.round(progress);
}

// Fungsi Mengecek Jawaban dan Menampilkan Feedback Langsung
function checkAnswer(choice, clickedBtn) {
  const data = quizData[currentQ];
  const isCorrect = choice === data.ans;

  // Catat riwayat jawaban user
  userAnswers.push({
    question: data.q,
    userChoice: choice,
    correctIdx: data.ans,
    isCorrect: isCorrect,
    reason: data.reason,
    opts: data.opts,
  });

  if (isCorrect) {
    score += 10;
  }

  // Kunci semua tombol agar user tidak bisa klik ulang setelah memilih
  const allBtns = document.querySelectorAll(".option-btn");
  allBtns.forEach((btn) => btn.classList.add("pe-none"));

  // Beri warna visual penanda pada tombol pilihan
  if (isCorrect) {
    clickedBtn.classList.remove("btn-outline-dark", "bg-white");
    clickedBtn.classList.add("btn-success", "text-white", "border-dark");
  } else {
    clickedBtn.classList.remove("btn-outline-dark", "bg-white");
    clickedBtn.classList.add("btn-danger", "text-white", "border-dark");

    // Beri penanda visual hijau pada pilihan yang seharusnya benar
    allBtns[data.ans].classList.remove("btn-outline-dark", "bg-white");
    allBtns[data.ans].classList.add("btn-success", "text-white", "border-dark");
  }

  // Tampilkan Feedback Card Terintegrasi
  const feedbackContainer = document.getElementById("feedback-container");
  const feedbackCard = document.getElementById("feedback-card");
  const feedbackIcon = document.getElementById("feedback-icon");

  feedbackContainer.classList.remove("d-none");

  if (isCorrect) {
    feedbackCard.className =
      "p-4 border border-2 border-dark rounded-4 shadow-sm bg-success-subtle text-success-emphasis";
    document.getElementById("feedback-title").innerHTML =
      "<i class='bi bi-check-circle-fill me-1'></i> Benar Sekali!";
    feedbackIcon.innerHTML = "<i class='bi bi-emoji-laughing'></i>";
  } else {
    feedbackCard.className =
      "p-4 border border-2 border-dark rounded-4 shadow-sm bg-danger-subtle text-danger-emphasis";
    document.getElementById("feedback-title").innerHTML =
      "<i class='bi bi-x-circle-fill me-1'></i> Yah, Pilihanmu Kurang Tepat!";
    feedbackIcon.innerHTML = "<i class='bi bi-emoji-frown'></i>";
  }
  document.getElementById("feedback-text").innerHTML =
    `<strong>Penjelasan:</strong> ${data.reason}`;

  // Scroll otomatis ke tombol lanjut pada layar perangkat mobile
  feedbackContainer.scrollIntoView({ behavior: "smooth", block: "nearest" });
}

// Fungsi Tombol Navigasi Lanjut
function nextQuestion() {
  currentQ++;
  if (currentQ < quizData.length) {
    showQuestion();
  } else {
    // Selesaikan progres bar menjadi 100% saat kuis selesai
    document.getElementById("quiz-progress-bar").style.width = "100%";
    document.getElementById("progress-percent").innerText = "100";
    showResult();
  }
}

// Fungsi Menampilkan Halaman Nilai Akhir
function showResult() {
  document.getElementById("quiz-container").classList.add("d-none");
  document.getElementById("result-screen").classList.remove("d-none");
  document.getElementById("final-score").innerText = score;

  const statusLabel = document.getElementById("score-status");
  if (score >= 80) {
    statusLabel.innerText = "Luar Biasa! Maestro Anekdot! 🌟";
    statusLabel.className = "fw-bold mb-4 text-success";
  } else if (score >= 60) {
    statusLabel.innerText = "Bagus! Kamu Sudah Cukup Paham! 👍";
    statusLabel.className = "fw-bold mb-4 text-primary";
  } else {
    statusLabel.innerText = "Jangan Menyerah, Belajar Lagi Yuk! 💪";
    statusLabel.className = "fw-bold mb-4 text-danger";
  }
}

// Fungsi Mengulangi Kuis Dari Awal
function restartQuiz() {
  document.getElementById("result-screen").classList.add("d-none");
  document.getElementById("summary-screen").classList.add("d-none");
  startQuiz();
}

// Fungsi Menampilkan Rangkuman Jawaban
function showSummary() {
  document.getElementById("result-screen").classList.add("d-none");
  document.getElementById("summary-screen").classList.remove("d-none");

  const list = document.getElementById("summary-list");
  list.innerHTML = ""; // Bersihkan list

  userAnswers.forEach((item, index) => {
    const card = document.createElement("div");
    card.className = `card border border-2 border-dark p-4 rounded-4 bg-white shadow-sm ${item.isCorrect ? "border-success" : "border-danger"}`;

    // Ambil string label teks opsi jawaban
    const userText = item.opts[item.userChoice];
    const correctText = item.opts[item.correctIdx];

    card.innerHTML = `
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge bg-dark px-3 py-1.5 rounded-3 font-monospace">SOAL MADING #${index + 1}</span>
                        <span class="badge ${item.isCorrect ? "bg-success" : "bg-danger"} py-1.5 px-3 rounded-3 fw-bold">
                            <i class="bi ${item.isCorrect ? "bi-check-circle-fill" : "bi-x-circle-fill"} me-1"></i> ${item.isCorrect ? "BENAR" : "SALAH"}
                        </span>
                    </div>
                    <h5 class="fw-bold text-dark lh-base mb-3">${item.question.replace(/\n/g, "<br>")}</h5>
                    <div class="small font-monospace mb-2">
                        <div class="text-secondary mb-1">Jawaban Kamu: <span class="${item.isCorrect ? "text-success fw-bold" : "text-danger fw-bold"}">${String.fromCharCode(65 + item.userChoice)}. ${userText}</span></div>
                        ${!item.isCorrect ? `<div class="text-success mb-1 fw-bold">Jawaban Benar: ${String.fromCharCode(65 + item.item.correctIdx)}. ${correctText}</div>` : ""}
                    </div>
                    <div class="p-3 bg-light border border-1 border-dark rounded-3 mt-2">
                        <p class="small mb-0 text-muted lh-lg"><strong>Pembahasan Teori:</strong> ${item.reason}</p>
                    </div>
                `;
    list.appendChild(card);
  });
}
