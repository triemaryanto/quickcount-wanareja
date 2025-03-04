<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComRegion;

class RegionSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $data = [
         ["region_cd" => "3301", "region_nm" => "Kab. Cilacap", "region_root" => "33", "region_level" => "2"],
         ["region_cd" => "3301010", "region_nm" => "Dayeuhluhur", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301010001", "region_nm" => "Panulisan Barat", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010002", "region_nm" => "Panulisan", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010003", "region_nm" => "Panulisan Timur", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010004", "region_nm" => "Matenggeng", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010005", "region_nm" => "Ciwalen", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010006", "region_nm" => "Dayeuhluhur", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010007", "region_nm" => "Hanum", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010008", "region_nm" => "Datar", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010009", "region_nm" => "Bingkeng", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010010", "region_nm" => "Bolang", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010011", "region_nm" => "Kutaagung", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010012", "region_nm" => "Cijeruk", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010013", "region_nm" => "Cilumping", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301010014", "region_nm" => "Sumpinghayu", "region_root" => "3301010", "region_level" => "4"],
         ["region_cd" => "3301020", "region_nm" => "Wanareja", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301020001", "region_nm" => "Purwasari", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020002", "region_nm" => "Cilongkrang", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020003", "region_nm" => "Tarisi", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020004", "region_nm" => "Bantar", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020005", "region_nm" => "Sidamulya", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020006", "region_nm" => "Adimulya", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020007", "region_nm" => "Wanareja", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020008", "region_nm" => "Madura", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020009", "region_nm" => "Madusari", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020010", "region_nm" => "Tambaksari", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020011", "region_nm" => "Majingklak", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020012", "region_nm" => "Malabar", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020013", "region_nm" => "Limbangan", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020014", "region_nm" => "Cigintung", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020015", "region_nm" => "Palugon", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301020016", "region_nm" => "Jambu", "region_root" => "3301020", "region_level" => "4"],
         ["region_cd" => "3301030001", "region_nm" => "Pahonjean", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030002", "region_nm" => "Mulyadadi", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030003", "region_nm" => "Mulyasari", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030004", "region_nm" => "Padangsari", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030005", "region_nm" => "Cilopadang", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030006", "region_nm" => "Padangjaya", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030007", "region_nm" => "Sindangsari", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030008", "region_nm" => "Jenang", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030009", "region_nm" => "Salebu", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030010", "region_nm" => "Cibeunying", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030011", "region_nm" => "Sepatnunggal", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030012", "region_nm" => "Bener", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030013", "region_nm" => "Boja", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030014", "region_nm" => "Ujungbarang", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030015", "region_nm" => "Pengadegan", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030016", "region_nm" => "Sadabumi", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301030017", "region_nm" => "Sadahayu", "region_root" => "3301030", "region_level" => "4"],
         ["region_cd" => "3301040", "region_nm" => "Cimanggu", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301040001", "region_nm" => "Karangreja", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040002", "region_nm" => "Cimanggu", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040003", "region_nm" => "Bantarpanjang", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040004", "region_nm" => "Panimbang", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040005", "region_nm" => "Mandala", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040006", "region_nm" => "Bantarmangu", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040007", "region_nm" => "Cilempuyang", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040008", "region_nm" => "Rejodadi", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040009", "region_nm" => "Negarajati", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040010", "region_nm" => "Cisalak", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040011", "region_nm" => "Cibalung", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040012", "region_nm" => "Karangsari", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040013", "region_nm" => "Kutabima", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040014", "region_nm" => "Pesahangan", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301040015", "region_nm" => "Cijati", "region_root" => "3301040", "region_level" => "4"],
         ["region_cd" => "3301050", "region_nm" => "Karangpucung", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301050001", "region_nm" => "Cidadap", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050002", "region_nm" => "Pengawaren", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050003", "region_nm" => "Gunungtelu", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050004", "region_nm" => "Sindangbarang", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050005", "region_nm" => "Karangpucung", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050006", "region_nm" => "Tayemtimur", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050007", "region_nm" => "Tayem", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050008", "region_nm" => "Ciporos", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050009", "region_nm" => "Surusunda", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050010", "region_nm" => "Bengbulang", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050011", "region_nm" => "Sidamulya", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050012", "region_nm" => "Ciruyung", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050013", "region_nm" => "Pamulihan", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301050014", "region_nm" => "Babakan", "region_root" => "3301050", "region_level" => "4"],
         ["region_cd" => "3301060", "region_nm" => "Cipari", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301060001", "region_nm" => "Serang", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060002", "region_nm" => "Mulyadadi", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060003", "region_nm" => "Cipari", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060004", "region_nm" => "Segaralangu", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060005", "region_nm" => "Karangreja", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060006", "region_nm" => "Kutasari", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060007", "region_nm" => "Pegadingan", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060008", "region_nm" => "Cisuru", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060009", "region_nm" => "Mekarsari", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060010", "region_nm" => "Sidasari", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301060011", "region_nm" => "Caruy", "region_root" => "3301060", "region_level" => "4"],
         ["region_cd" => "3301070", "region_nm" => "Sidareja", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301070001", "region_nm" => "Tegalsari", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070002", "region_nm" => "Margasari", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070003", "region_nm" => "Tinggarjaya", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070004", "region_nm" => "Gunungreja", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070005", "region_nm" => "Sidareja", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070006", "region_nm" => "Sidamulya", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070007", "region_nm" => "Sudagaran", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070008", "region_nm" => "Kunci", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070009", "region_nm" => "Karanggedang", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301070010", "region_nm" => "Penyarang", "region_root" => "3301070", "region_level" => "4"],
         ["region_cd" => "3301080", "region_nm" => "Kedungreja", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301080001", "region_nm" => "Sidanegara", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080002", "region_nm" => "Tambakreja", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080003", "region_nm" => "Kaliwungu", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080004", "region_nm" => "Bumireja", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080005", "region_nm" => "Jatisari", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080006", "region_nm" => "Ciklapa", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080007", "region_nm" => "Bangunreja", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080008", "region_nm" => "Kedungreja", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080009", "region_nm" => "Tambaksari", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080010", "region_nm" => "Rejamulya", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301080011", "region_nm" => "Bojongsari", "region_root" => "3301080", "region_level" => "4"],
         ["region_cd" => "3301090", "region_nm" => "Patimuan", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301090001", "region_nm" => "Rawaapu", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090002", "region_nm" => "Sidamukti", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090003", "region_nm" => "Purwodadi", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090004", "region_nm" => "Cimrutu", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090005", "region_nm" => "Patimuan", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090006", "region_nm" => "Cinyawang", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301090007", "region_nm" => "Bulupayung", "region_root" => "3301090", "region_level" => "4"],
         ["region_cd" => "3301100", "region_nm" => "Gandrungmangu", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301100001", "region_nm" => "Cisumur", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100002", "region_nm" => "Sidaurip", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100003", "region_nm" => "Gintungreja", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100004", "region_nm" => "Layansari", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100005", "region_nm" => "Gandrungmanis", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100006", "region_nm" => "Bulusari", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100007", "region_nm" => "Gandrungmangu", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100008", "region_nm" => "Wringinharjo", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100009", "region_nm" => "Karanganyar", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100010", "region_nm" => "Muktisari", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100011", "region_nm" => "Kertajaya", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100012", "region_nm" => "Cinangsi", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100013", "region_nm" => "Karanggintung", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301100014", "region_nm" => "Rungkang", "region_root" => "3301100", "region_level" => "4"],
         ["region_cd" => "3301110", "region_nm" => "Bantarsari", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301110001", "region_nm" => "Bantarsari", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110002", "region_nm" => "Rawajaya", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110003", "region_nm" => "Binangun", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110004", "region_nm" => "Bulaksari", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110005", "region_nm" => "Kamulyan", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110006", "region_nm" => "Cikedondong", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110007", "region_nm" => "Kedungwadas", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301110008", "region_nm" => "Citembong", "region_root" => "3301110", "region_level" => "4"],
         ["region_cd" => "3301120", "region_nm" => "Kawunganten", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301120004", "region_nm" => "Grugu", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120005", "region_nm" => "Bringkeng", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120006", "region_nm" => "Ujungmanik", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120007", "region_nm" => "Kubangkangkung", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120008", "region_nm" => "Bojong", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120009", "region_nm" => "Kawunganten", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120010", "region_nm" => "Kawunganten Lor", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120011", "region_nm" => "Sarwadadi", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120012", "region_nm" => "Kalijeruk", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120013", "region_nm" => "Mentasan", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120015", "region_nm" => "Sidaurip", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301120016", "region_nm" => "Babakan", "region_root" => "3301120", "region_level" => "4"],
         ["region_cd" => "3301121", "region_nm" => "Kampung Laut", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301121001", "region_nm" => "Ujunggagak", "region_root" => "3301121", "region_level" => "4"],
         ["region_cd" => "3301121002", "region_nm" => "Klaces", "region_root" => "3301121", "region_level" => "4"],
         ["region_cd" => "3301121003", "region_nm" => "Ujungalang", "region_root" => "3301121", "region_level" => "4"],
         ["region_cd" => "3301121004", "region_nm" => "Panikel", "region_root" => "3301121", "region_level" => "4"],
         ["region_cd" => "3301130", "region_nm" => "Jeruklegi", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301130001", "region_nm" => "Brebeg", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130002", "region_nm" => "Tritih Wetan", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130003", "region_nm" => "Tritih Lor", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130004", "region_nm" => "Sumingkir", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130005", "region_nm" => "Jeruklegi Wetan", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130006", "region_nm" => "Jeruklegi Kulon", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130007", "region_nm" => "Sawangan", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130008", "region_nm" => "Cilibang", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130009", "region_nm" => "Mendala", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130010", "region_nm" => "Karangkemiri", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130011", "region_nm" => "Jambusari", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130012", "region_nm" => "Prapagan", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301130013", "region_nm" => "Citepus", "region_root" => "3301130", "region_level" => "4"],
         ["region_cd" => "3301140", "region_nm" => "Kesugihan", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301140001", "region_nm" => "Menganti", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140002", "region_nm" => "Karangkandri", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140003", "region_nm" => "Slarang", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140004", "region_nm" => "Kesugihan Kidul", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140005", "region_nm" => "Kesugihan", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140006", "region_nm" => "Kalisabuk", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140007", "region_nm" => "Kuripan Kidul", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140008", "region_nm" => "Kuripan", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140009", "region_nm" => "Jangrana", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140010", "region_nm" => "Planjan", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140011", "region_nm" => "Dondong", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140012", "region_nm" => "Ciwuni", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140013", "region_nm" => "Karangjengkol", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140014", "region_nm" => "Keleng", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140015", "region_nm" => "Pesanggrahan", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301140016", "region_nm" => "Bulupayung", "region_root" => "3301140", "region_level" => "4"],
         ["region_cd" => "3301150", "region_nm" => "Adipala", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301150001", "region_nm" => "Gombolharjo", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150002", "region_nm" => "Wlahar", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150003", "region_nm" => "Bunton", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150004", "region_nm" => "Karanganyar", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150005", "region_nm" => "Karangbenda", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150006", "region_nm" => "Pedasong", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150007", "region_nm" => "Glempangpasir", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150008", "region_nm" => "Welahan Wetan", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150009", "region_nm" => "Adiraja", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150010", "region_nm" => "Adireja Wetan", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150011", "region_nm" => "Adireja Kulon", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150012", "region_nm" => "Adipala", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150013", "region_nm" => "Penggalang", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150014", "region_nm" => "Karangsari", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150015", "region_nm" => "Kalikudi", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301150016", "region_nm" => "Doplang", "region_root" => "3301150", "region_level" => "4"],
         ["region_cd" => "3301160", "region_nm" => "Maos", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301160001", "region_nm" => "Karangkemiri", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160002", "region_nm" => "Karangreja", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160003", "region_nm" => "Klapagada", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160004", "region_nm" => "Karangrena", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160005", "region_nm" => "Maos Kidul", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160006", "region_nm" => "Maos Lor", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3302190006", "region_nm" => "Keniten", "region_root" => "3302190", "region_level" => "4"],
         ["region_cd" => "3301160007", "region_nm" => "Kalijaran", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160008", "region_nm" => "Mernek", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160009", "region_nm" => "Penisihan", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301160010", "region_nm" => "Glempang", "region_root" => "3301160", "region_level" => "4"],
         ["region_cd" => "3301170", "region_nm" => "Sampang", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301170001", "region_nm" => "Paketingan", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170002", "region_nm" => "Ketanggung", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170003", "region_nm" => "Nusajati", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170004", "region_nm" => "Paberasan", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170005", "region_nm" => "Karangjati", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170006", "region_nm" => "Sidasari", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170007", "region_nm" => "Karangasem", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170008", "region_nm" => "Sampang", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170009", "region_nm" => "Karangtengah", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301170010", "region_nm" => "B R A N I", "region_root" => "3301170", "region_level" => "4"],
         ["region_cd" => "3301180", "region_nm" => "Kroya", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301180001", "region_nm" => "Sikampuh", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180002", "region_nm" => "Karangturi", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180003", "region_nm" => "Ayamalas", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180004", "region_nm" => "Karangmangu", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180005", "region_nm" => "Pucung Kidul", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180006", "region_nm" => "Mergawati", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180007", "region_nm" => "Pucung Lor", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180008", "region_nm" => "Bajing", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180009", "region_nm" => "Kroya", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180010", "region_nm" => "Pesanggrahan", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180011", "region_nm" => "Pekuncen", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180012", "region_nm" => "Bajing Kulon", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180013", "region_nm" => "Kedawung", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180014", "region_nm" => "Mujur", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180015", "region_nm" => "Gentasari", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180016", "region_nm" => "Mujur Lor", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301180017", "region_nm" => "Buntu", "region_root" => "3301180", "region_level" => "4"],
         ["region_cd" => "3301190", "region_nm" => "Binangun", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301190001", "region_nm" => "Widarapayung Kulon", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190002", "region_nm" => "Sidayu", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190003", "region_nm" => "Widarapayung Wetan", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190004", "region_nm" => "Sidaurip", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190005", "region_nm" => "Pagubugan Kulon", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190006", "region_nm" => "Pagubugan", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190007", "region_nm" => "Karangnangka", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190008", "region_nm" => "Kemojing", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190009", "region_nm" => "Pesawahan", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190010", "region_nm" => "Pasuruhan", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190011", "region_nm" => "Alangamba", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190012", "region_nm" => "Binangun", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190013", "region_nm" => "Bangkal", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190014", "region_nm" => "Jepara Wetan", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190015", "region_nm" => "Jepara Kulon", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190016", "region_nm" => "Kepudang", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301190017", "region_nm" => "Jati", "region_root" => "3301190", "region_level" => "4"],
         ["region_cd" => "3301200", "region_nm" => "Nusawungu", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301200001", "region_nm" => "Karangtawang", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200002", "region_nm" => "Karangpakis", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200003", "region_nm" => "Banjarsari", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200004", "region_nm" => "Jetis", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200005", "region_nm" => "Banjareja", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200006", "region_nm" => "Kedungbenda", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200007", "region_nm" => "Klumprit", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200008", "region_nm" => "Karangsembung", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200009", "region_nm" => "Purwadadi", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200010", "region_nm" => "Nusawangkal", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200011", "region_nm" => "Karangputat", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200012", "region_nm" => "Banjarwaru", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200013", "region_nm" => "Danasri", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200014", "region_nm" => "Danasri Kidul", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200015", "region_nm" => "Nusawungu", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200016", "region_nm" => "Danasri Lor", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301200017", "region_nm" => "Sikanco", "region_root" => "3301200", "region_level" => "4"],
         ["region_cd" => "3301710", "region_nm" => "Cilacap Selatan", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301710001", "region_nm" => "Tambakreja", "region_root" => "3301710", "region_level" => "4"],
         ["region_cd" => "3301710002", "region_nm" => "Tegalrejo", "region_root" => "3301710", "region_level" => "4"],
         ["region_cd" => "3301710003", "region_nm" => "Sidakaya", "region_root" => "3301710", "region_level" => "4"],
         ["region_cd" => "3301710004", "region_nm" => "Cilacap", "region_root" => "3301710", "region_level" => "4"],
         ["region_cd" => "3301710005", "region_nm" => "Tegalkamulyan", "region_root" => "3301710", "region_level" => "4"],
         ["region_cd" => "3301720", "region_nm" => "Cilacap Tengah", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301720001", "region_nm" => "Kutawaru", "region_root" => "3301720", "region_level" => "4"],
         ["region_cd" => "3301720002", "region_nm" => "Lomanis", "region_root" => "3301720", "region_level" => "4"],
         ["region_cd" => "3301720003", "region_nm" => "Donan", "region_root" => "3301720", "region_level" => "4"],
         ["region_cd" => "3301720004", "region_nm" => "Sidanegara", "region_root" => "3301720", "region_level" => "4"],
         ["region_cd" => "3301720005", "region_nm" => "Gunungsimping", "region_root" => "3301720", "region_level" => "4"],
         ["region_cd" => "3301730", "region_nm" => "Cilacap Utara", "region_root" => "3301", "region_level" => "3"],
         ["region_cd" => "3301730001", "region_nm" => "Kebonmanis", "region_root" => "3301730", "region_level" => "4"],
         ["region_cd" => "3301730002", "region_nm" => "Gumilir", "region_root" => "3301730", "region_level" => "4"],
         ["region_cd" => "3301730003", "region_nm" => "Mertasinga", "region_root" => "3301730", "region_level" => "4"],
         ["region_cd" => "3301730004", "region_nm" => "Tritih Kulon", "region_root" => "3301730", "region_level" => "4"],
         ["region_cd" => "3301730005", "region_nm" => "Karangtalun", "region_root" => "3301730", "region_level" => "4"],
      ];

      foreach ($data as $item) {
         ComRegion::create($item);
      }
   }
}
