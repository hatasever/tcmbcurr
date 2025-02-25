<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hatasever\TcmbCurr\Models\currencyType;
class CurrencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currency = '[
            {"id":"1","name":"Afgan Afganisi","symbol":"؋","currency_code":"AFA","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"2","name":"Arnavut Leki","symbol":"Lek","currency_code":"ALL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"3","name":"Cezayir Dinarı","symbol":"دج","currency_code":"DZD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"4","name":"Angola Kvanzası","symbol":"Kz","currency_code":"AOA","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"5","name":"Arjantin Pesosu","symbol":"$","currency_code":"ARS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"6","name":"Ermeni Dramı","symbol":"֏","currency_code":"AMD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"7","name":"Aruba Florini","symbol":"ƒ","currency_code":"AWG","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"8","name":"Avustralya Doları","symbol":"$","currency_code":"AUD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"9","name":"Azerbaycan Manatı","symbol":"m","currency_code":"AZN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"10","name":"Bahamalar Doları","symbol":"B$","currency_code":"BSD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"11","name":"Bahreyn Dinarı","symbol":".د.ب","currency_code":"BHD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"12","name":"Bangladeş Takası","symbol":"৳","currency_code":"BDT","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"13","name":"Barbados Doları","symbol":"Bds$","currency_code":"BBD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"14","name":"Beyaz Rusya Rublesi","symbol":"Br","currency_code":"BYR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"15","name":"Belçika Frangı","symbol":"fr","currency_code":"BEF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"16","name":"Belize Doları","symbol":"$","currency_code":"BZD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"17","name":"Bermuda Doları","symbol":"$","currency_code":"BMD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"18","name":"Butan Ngultrumu","symbol":"Nu.","currency_code":"BTN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"19","name":"Bitcoin","symbol":"฿","currency_code":"BTC","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"20","name":"Bolivya Bolivyanosu","symbol":"Bs.","currency_code":"BOB","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"21","name":"Bosna-Hersek Dönüştürülebilir Markı","symbol":"KM","currency_code":"BAM","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"22","name":"Botsvana Pulası","symbol":"P","currency_code":"BWP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"23","name":"Brezilya Reali","symbol":"R$","currency_code":"BRL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"24","name":"İngiliz Sterlini","symbol":"£","currency_code":"GBP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"25","name":"Brunei Doları","symbol":"B$","currency_code":"BND","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"26","name":"Bulgar Levası","symbol":"Лв.","currency_code":"BGN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"27","name":"Burundi Frangı","symbol":"FBu","currency_code":"BIF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"28","name":"Kamboçya Rieli","symbol":"KHR","currency_code":"KHR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"29","name":"Kanada Doları","symbol":"$","currency_code":"CAD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"30","name":"Cape Verde Esküdosu","symbol":"$","currency_code":"CVE","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"31","name":"Cayman Adaları Doları","symbol":"$","currency_code":"KYD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"32","name":"CFA Frangı BCEAO","symbol":"CFA","currency_code":"XOF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"33","name":"CFA Frangı BEAC","symbol":"FCFA","currency_code":"XAF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"34","name":"CFP Frangı","symbol":"₣","currency_code":"XPF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"35","name":"Şili Pesosu","symbol":"$","currency_code":"CLP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"36","name":"Şili Hesap Birimi","symbol":"CLF","currency_code":"CLF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"37","name":"Çin Yuanı","symbol":"¥","currency_code":"CNY","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"38","name":"Kolombiya Pesosu","symbol":"$","currency_code":"COP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"39","name":"Komor Frangı","symbol":"CF","currency_code":"KMF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"40","name":"Kongo Frangı","symbol":"FC","currency_code":"CDF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"41","name":"Kosta Rika Colónu","symbol":"₡","currency_code":"CRC","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"42","name":"Hırvat Kunası","symbol":"kn","currency_code":"HRK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"43","name":"Küba Çevirilebilir Pesosu","symbol":"$, CUC","currency_code":"CUC","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"44","name":"Çek Korunası","symbol":"Kč","currency_code":"CZK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"45","name":"Danimarka Kronu","symbol":"Kr.","currency_code":"DKK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"46","name":"Cibuti Frangı","symbol":"Fdj","currency_code":"DJF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"47","name":"Dominik Pesosu","symbol":"$","currency_code":"DOP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"48","name":"Doğu Karayip Doları","symbol":"$","currency_code":"XCD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"49","name":"Mısır Lirası","symbol":"ج.م","currency_code":"EGP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"50","name":"Eritre Nakfası","symbol":"Nfk","currency_code":"ERN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"51","name":"Estonya Kronu","symbol":"kr","currency_code":"EEK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"52","name":"Etiyopya Birri","symbol":"Nkf","currency_code":"ETB","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"53","name":"Euro","symbol":"€","currency_code":"EUR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"54","name":"Falkland Adaları Lirası","symbol":"£","currency_code":"FKP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"55","name":"Fiji Doları","symbol":"FJ$","currency_code":"FJD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"56","name":"Gambiya Dalasisi","symbol":"D","currency_code":"GMD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"57","name":"Gürcistan Larisi","symbol":"ლ","currency_code":"GEL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"58","name":"Alman Markı","symbol":"DM","currency_code":"DEM","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"59","name":"Gana Cedisi","symbol":"GH₵","currency_code":"GHS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"60","name":"Cebelitarık Lirası","symbol":"£","currency_code":"GIP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"61","name":"Yunan Drahmisi","symbol":"₯, Δρχ, Δρ","currency_code":"GRD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"62","name":"Guatemala Quetzalı","symbol":"Q","currency_code":"GTQ","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"63","name":"Gine Frangı","symbol":"FG","currency_code":"GNF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"64","name":"Guyana Doları","symbol":"$","currency_code":"GYD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"65","name":"Haiti Gurdu","symbol":"G","currency_code":"HTG","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"66","name":"Honduras Lempirası","symbol":"L","currency_code":"HNL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"67","name":"Hong Kong Doları","symbol":"$","currency_code":"HKD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"68","name":"Macar Forinti","symbol":"Ft","currency_code":"HUF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"69","name":"İzlanda Kronası","symbol":"kr","currency_code":"ISK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"70","name":"Hindistan Rupisi","symbol":"₹","currency_code":"INR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"71","name":"Endonezya Rupisi","symbol":"Rp","currency_code":"IDR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"72","name":"İran Riyali","symbol":"﷼","currency_code":"IRR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"73","name":"Irak Dinarı","symbol":"د.ع","currency_code":"IQD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"74","name":"İsrail Yeni Şekeli","symbol":"₪","currency_code":"ILS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"75","name":"İtalyan Lirası","symbol":"L,£","currency_code":"ITL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"76","name":"Jamaika Doları","symbol":"J$","currency_code":"JMD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"77","name":"Japon Yeni","symbol":"¥","currency_code":"JPY","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"78","name":"Ürdün Dinarı","symbol":"ا.د","currency_code":"JOD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"79","name":"Kazakistan Tengesi","symbol":"лв","currency_code":"KZT","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"80","name":"Kenya Şilini","symbol":"KSh","currency_code":"KES","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"81","name":"Kuveyt Dinarı","symbol":"ك.د","currency_code":"KWD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"82","name":"Kırgızistan Somu","symbol":"лв","currency_code":"KGS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"83","name":"Laos Kipi","symbol":"₭","currency_code":"LAK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"84","name":"Letonya Latı","symbol":"Ls","currency_code":"LVL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"85","name":"Lübnan Lirası","symbol":"£","currency_code":"LBP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"86","name":"Lesotho Lotisi","symbol":"L","currency_code":"LSL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"87","name":"Liberya Doları","symbol":"$","currency_code":"LRD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"88","name":"Libya Dinarı","symbol":"د.ل","currency_code":"LYD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"89","name":"Litecoin","symbol":"Ł","currency_code":"LTC","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"90","name":"Litvanya Litası","symbol":"Lt","currency_code":"LTL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"91","name":"Makao Patakası","symbol":"$","currency_code":"MOP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"92","name":"Makedon Dinarı","symbol":"ден","currency_code":"MKD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"93","name":"Madagaskar Ariarysi","symbol":"Ar","currency_code":"MGA","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"94","name":"Malavi Kvaçası","symbol":"MK","currency_code":"MWK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"95","name":"Malezya Ringgiti","symbol":"RM","currency_code":"MYR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"96","name":"Maldiv Rufiyası","symbol":"Rf","currency_code":"MVR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"97","name":"Moritanya Ouguiyası","symbol":"MRU","currency_code":"MRO","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"98","name":"Mauritius Rupisi","symbol":"₨","currency_code":"MUR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"99","name":"Meksika Pesosu","symbol":"$","currency_code":"MXN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"100","name":"Moldova Leyi","symbol":"L","currency_code":"MDL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"101","name":"Moğol Tugriki","symbol":"₮","currency_code":"MNT","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"102","name":"Fas Dirhemi","symbol":"MAD","currency_code":"MAD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"103","name":"Mozambik Metikali","symbol":"MT","currency_code":"MZM","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"104","name":"Myanmar Kyatı","symbol":"K","currency_code":"MMK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"105","name":"Namibya Doları","symbol":"$","currency_code":"NAD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"106","name":"Nepal Rupisi","symbol":"₨","currency_code":"NPR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"107","name":"Hollanda Antilleri Guldeni","symbol":"ƒ","currency_code":"ANG","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"108","name":"Yeni Tayvan Doları","symbol":"$","currency_code":"TWD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"109","name":"Yeni Zelanda Doları","symbol":"$","currency_code":"NZD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"110","name":"Nikaragua Kordobası","symbol":"C$","currency_code":"NIO","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"111","name":"Nijerya Nairası","symbol":"₦","currency_code":"NGN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"112","name":"Kuzey Kore Wonu","symbol":"₩","currency_code":"KPW","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"113","name":"Norveç Kronu","symbol":"kr","currency_code":"NOK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"114","name":"Umman Riyali","symbol":"﷼","currency_code":"OMR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"115","name":"Pakistan Rupisi","symbol":"₨","currency_code":"PKR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"116","name":"Panama Balboası","symbol":"B\/.","currency_code":"PAB","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"117","name":"Papua Yeni Gine Kinası","symbol":"K","currency_code":"PGK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"118","name":"Paraguay Guaranisi","symbol":"₲","currency_code":"PYG","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"119","name":"Peru Nuevo Solu","symbol":"S\/.","currency_code":"PEN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"120","name":"Filipin Pesosu","symbol":"₱","currency_code":"PHP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"121","name":"Polonya Zlotisi","symbol":"zł","currency_code":"PLN","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"122","name":"Katar Riyali","symbol":"﷼","currency_code":"QAR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"123","name":"Romanya Leyi","symbol":"lei","currency_code":"RON","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"124","name":"Rus Rublesi","symbol":"₽","currency_code":"RUB","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"125","name":"Ruanda Frangı","symbol":"FRw","currency_code":"RWF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"126","name":"El Salvador Kolonu","symbol":"$","currency_code":"SVC","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"127","name":"Samoa Talası","symbol":"T","currency_code":"WST","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"128","name":"Suudi Arabistan Riyali","symbol":"﷼","currency_code":"SAR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"129","name":"Sırp Dinarı","symbol":"Дин.","currency_code":"RSD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"130","name":"Seyşel Rupisi","symbol":"₨","currency_code":"SCR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"131","name":"Sierra Leone Leonesi","symbol":"Le","currency_code":"SLL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"132","name":"Singapur Doları","symbol":"$","currency_code":"SGD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"133","name":"Slovak Korunası","symbol":"Sk","currency_code":"SKK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"134","name":"Solomon Adaları Doları","symbol":"$","currency_code":"SBD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"135","name":"Somali Şilini","symbol":"S","currency_code":"SOS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"136","name":"Güney Afrika Randı","symbol":"R","currency_code":"ZAR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"137","name":"Güney Kore Wonu","symbol":"₩","currency_code":"KRW","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"138","name":"Güney Sudan Lirası","symbol":"£","currency_code":"SSP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"139","name":"Özel Çekme Hakları","symbol":"SDR","currency_code":"XDR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"140","name":"Sri Lanka Rupisi","symbol":"₨","currency_code":"LKR","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"141","name":"Saint Helena Lirası","symbol":"£","currency_code":"SHP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"142","name":"Sudan Lirası","symbol":".س.ج","currency_code":"SDG","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"143","name":"Surinam Doları","symbol":"$","currency_code":"SRD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"144","name":"Svaziland Lilangenisi","symbol":"L","currency_code":"SZL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"145","name":"İsveç Kronu","symbol":"kr","currency_code":"SEK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"146","name":"İsviçre Frangı","symbol":"Fr.","currency_code":"CHF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"147","name":"Suriye Lirası","symbol":"£","currency_code":"SYP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"148","name":"São Tomé ve Príncipe Dobrası","symbol":"Db","currency_code":"STD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"149","name":"Tacikistan Somonisi","symbol":"ЅМ","currency_code":"TJS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"150","name":"Tanzanya Şilini","symbol":"TSh","currency_code":"TZS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"151","name":"Tayland Bahtı","symbol":"฿","currency_code":"THB","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"152","name":"Tonga Paʻangası","symbol":"T$","currency_code":"TOP","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"153","name":"Trinidad ve Tobago Doları","symbol":"TT$","currency_code":"TTD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"154","name":"Tunus Dinarı","symbol":"د.ت","currency_code":"TND","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"155","name":"Türk Lirası","symbol":"₺","currency_code":"TRY","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"156","name":"Türkmenistan Manatı","symbol":"m","currency_code":"TMT","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"157","name":"Uganda Şilini","symbol":"USh","currency_code":"UGX","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"158","name":"Ukrayna Grivnası","symbol":"₴","currency_code":"UAH","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"159","name":"Birleşik Arap Emirlikleri Dirhemi","symbol":"إ.د","currency_code":"AED","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"160","name":"Uruguay Pesosu","symbol":"$U","currency_code":"UYU","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"161","name":"ABD Doları","symbol":"$","currency_code":"USD","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"162","name":"Özbekistan Somu","symbol":"лв","currency_code":"UZS","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"163","name":"Vanuatu Vatusu","symbol":"VT","currency_code":"VUV","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"164","name":"Venezüella Bolivarı","symbol":"Bs","currency_code":"VEF","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"165","name":"Vietnam Dongu","symbol":"₫","currency_code":"VND","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"166","name":"Yemen Riyali","symbol":"﷼","currency_code":"YER","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"167","name":"Zambiya Kvaçası","symbol":"ZK","currency_code":"ZMK","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null},
            {"id":"168","name":"Zimbabve Doları","symbol":"Z$","currency_code":"ZWL","description":null,"TL_Exchange":null,"created_at":null,"updated_at":null}
        ]';

        foreach (json_decode($currency,1) as $key => $value) {
            currencyType::firstOrCreate([
                'id' => $value['id'],
                'name' => $value['name'],
                'symbol' => $value['symbol'],
                'currency_code' => $value['currency_code'],
                'description' => $value['description'],
                'TL_Exchange' => $value['TL_Exchange'],
            ]);
        }
    }
}
