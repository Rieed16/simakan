/** @type {import('tailwindcss').Config} */
module.exports = {
  // Tentukan path ke semua file HTML atau JS kamu agar Tailwind bisa mendeteksi kelas yang digunakan
  content: ["./*.html", "./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        brand: {
          snow: '#FEFDFF',     // Sangat terang (Latar belakang utama / Input)
          light: '#DEF2FF',    // Biru es muda (Aksen halus / Border / Hover lembut)
          primary: '#008DE1',  // Biru terang (Tombol utama / Link aktif)
          accent: '#727BDE',   // Ungu-biru (Gradasi / Aksen sekunder)
          dark: '#31363F',     // Abu-abu sangat gelap (Text utama / Background herringbone)
          gray: '#757575',     // Abu-abu sedang (Text pendukung / Placeholder)
          slate: '#475569',    // Slate (Garis herringbone / Border sekunder)
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}