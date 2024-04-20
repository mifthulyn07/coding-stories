selesai = () => console.log("selesai mengerjakan tugas");

// higher Order Function -> parameter mengandung function
function kerjakanTugas(matakuliah, selesai) {
  console.log(`Mulai mengerjakan tugas ${matakuliah}`);
  selesai();
}
kerjakanTugas("matematika", selesai);
