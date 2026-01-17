// const PI = 3.14;
// var nama = "John Doe";
// let sudahMenikah = 25;

// let umur = 21; //benar
// let tinggi badan = 170; //salah karena ada spasi
// let 0nama = "Jane Doe"; //salah karena ada angka di depan
// let class = "Matematika"; //salah karena menggunakan kata kunci

// let tinggiBadan = 170;
// let namaDepan = "Jane";
// let DBName = "Database Name";

// const PI = 3.14;
// var nama = "John Doe";
// let sudahMenikah = 25;

// const PI = 3.14;
// PI = 3.1415; // akan menghasilkan error
// karena konstanta tidak bisa diubah nilainya

// console.log(umur) //undefined
// //(tidak error karena hoisting)
// var umur = 21;
// umur = 20;

// const sipon = {
// 	nama: "Sipon",
// 	umur: 5,
// 	warna: "Ireng",
// };

// //ini sama dengan

// const sipon2 = new (class {
// 	constructor() {
// 		this.nama = "Sipon";
// 		this.umur = 5;
// 		this.warna = "Ireng";
// 	}
// })();

// console.log(2+2); //4
// console.log(2-2); //0
// console.log(2*2); //4
// console.log(2/2); //1

// console.log(5 % 2);
// //2*2 = 4
// //5-4 = 1
// //hasilnya 1

// console.log(4 > 5); //false
// console.log(4 < 5); //true
// console.log(4 >= 4); //true
// console.log(5 <= 4); //false
// console.log(4 == 4); //true
// console.log(4 != 5); //true
// console.log(4 === "4"); //false
// console.log(4 !== "4"); //true

// console.log(true && false); //false
// console.log(true || false); //true
// console.log(!true); //false

// IF STATEMENT
if (5 > 3) {
	console.log("5 lebih besar dari 3");
}

// IF ELSE
let nilai = 75;
if (nilai >= 80) {
	console.log("Grade: A");
} else {
	console.log("Grade: B");
}

// IF ELSE IF ELSE
let umur = 15;
if (umur < 13) {
	console.log("Anak-anak");
} else if (umur < 18) {
	console.log("Remaja");
} else {
	console.log("Dewasa");
}

// SWITCH CASE
let hari = "Senin";
switch (hari) {
	case "Senin":
		console.log("Hari kerja");
		break;
	case "Sabtu":
	case "Minggu":
		console.log("Akhir pekan");
		break;
	default:
		console.log("Hari tidak dikenal");
}
