// tagged templates
const nama = "miftahul ulyana hutabarat";
const umur = 21;

function coba(str, ...args) {
  return str.reduce(
    (result, str, i) =>
      `${result}${str}<span class='hl'>${args[i] || ""}</span>`,
    ""
  );
}

// masuk ke dalam fungsi coba
const str = coba`halo nama saya ${nama}, umur saya ${umur}`;
document.body.innerHTML = str;
