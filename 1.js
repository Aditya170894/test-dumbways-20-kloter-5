function hitungGaji(nama,gaji,bulan,dapatTunjangan){

var tunjangan = 500000;

    bpjs = gaji * 0.03;
    pajak = gaji * 0.05;
  if (dapatTunjangan){
    gaji+=tunjangan;
  }
  gajiBersih = gaji - bpjs - pajak;
console.log('=====================');
console.log('Nama karyawan: '+nama);
console.log('Gaji Pokok: '+gaji);
console.log('Tunjangan: '+tunjangan);
console.log('BPJS: '+bpjs);
console.log('Pajak: '+pajak);
console.log('=====================');
console.log('Gaji Bersih: '+gajiBersih);
console.log('=====================');
console.log('Total Gaji: '+(gajiBersih*bulan));
}
hitungGaji('Andi',1500000,2,true)