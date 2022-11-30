/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      height: theme => ({
        "screen-10vh": "10vh",
        "screen-40vh": "40vh",
        "screen-60vh": "60vh",
        "screen-90vh": "90vh",
        "screen/2": "50vh",
        "screen/30": "30vh",
        "screen/3": "calc(100vh / 3)",
        "screen/4": "calc(100vh / 4)",
        "screen/5": "calc(100vh / 5)",
        "screen/8": "calc(100vh / 8)",
      }),
      width: theme => ({
        "screen-10vw": "10vw",
        "screen-40vw": "40vw",
        "screen-60vw": "60vw",
        "screen-90vw": "90vw",
        "screen/2": "50vw",
        "screen/30": "30vw",
        "screen/3": "calc(100vw / 3)",
        "screen/4": "calc(100vw / 4)",
        "screen/5": "calc(100vw / 5)",
        "screen/8": "calc(100vw / 8)",
      })
    },
  },
  plugins: [],
}