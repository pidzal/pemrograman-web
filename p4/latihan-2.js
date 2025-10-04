function runExercises() {
    console.clear();

    // soal 1 : const
    const universitas = "universitas muhammadiah kalimantan timur";
    console.log("nama universitas :", universitas);

    // soal 2 : let
    let jumlahmahasiswa = 25;
    jumlahmahasiswa = jumlahmahasiswa + 5;
    console.log("jumlah mahasiswa sekarang :", jumlahmahasiswa);

    // soal 3 : string
    let namalengkap = "hafidzal mufty";
    console.log("nama ku adalah : " + namalengkap);

    // soal 4 : number 
    let angka1 = 10;
    let angka2 = 5;
    console.log("hasil penjumlahan", angka1 + angka2);
    console.log("hasil pengurangan", angka1 - angka2);
    console.log("hasil perkalian", angka1 * angka2);
    console.log("hasil pembagian", angka1 / angka2);

    // soal 5 : boolean
    let nilaiujian = 50;
    let lulus = nilaiujian >= 70;
    console.log("apakah lulus? : ", lulus)
}