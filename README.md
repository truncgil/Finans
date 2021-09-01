Altın ve döviz bilgilerini kullanarak yazılım geliştirme işlemini yapan yazılım geliştiricilerine son derece pratik hazırlanmış kolay kullanımlı Trunçgil Finans JSON API'miz yayındadır. Bildiğimiz üzere TCMB yalnızca kur bilgilerini veriyor altın bilgileri için alternatif kaynaklara yönelmemiz gerekiyordu. Ancak tek bir API üzerinde ayrıntılı altın bilgilerinin yanı sıra Dolar ve Euro cinsi para birimlerinin de alış ve satış fiyatına erişebiliyorsunuz. 

API şu adresten sağlanılabilir.
https://finans.truncgil.com/today.json

API v2
Trunçgil Teknoloji #Finans #RestAPI'ın 2. versiyonu yayınlandı.

2. versiyonunda yenilikler:
- Kurlarda global isimler kullanıldı.
- Türkçe karakterler ve boşluklar kaldırıldı.
3. versiyonda yenilikler
- İsimlendirmeler ve dizi yapısı değiştirildi
- Değişim oranları eklendi. 
4. versiyonda yenilikler
- Altın bilgilerinde isimlendirmeler ve dizi yapısı üç harf kur kuralına göre yeniden belirlendi. 


Kullanım İçin:
- https://finans.truncgil.com/v2/today.json
- https://finans.truncgil.com/v3/today.json
- https://finans.truncgil.com/v4/today.json
- #ReqBin Online Test Aracı : https://lnkd.in/de-fsmb

https://truncgil.com.tr/altin-ve-doviz-kuru-bilgilerini-kullanacak-yazilim-gelistiricilerine-alternatif-ve-hizli-api-truncgil-finans-yayinda

Örnek Kullanım

    $finans = json_decode(file_get_contents("https://finans.truncgil.com/today.json"),true);
    print_r($finans);
