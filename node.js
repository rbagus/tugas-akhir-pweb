function cari() {
var kata = document.formcari.keyword.value;//untuk menginputkan data yang ingin di cari
var hasil = "https://www.google.com/search?q=" + kata ;//menggabungkan google dengan kata yang di inputkan
var config='height=500, width=750, scrollbars=yes location=yes';//mengatur ukuran kotak pencarian
window.open(hasil, 'google', config)//google akan menampilkan hasil dari pencarian yang telah di inputkan
}