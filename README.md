Altın ve döviz bilgilerini kullanarak yazılım geliştirme işlemini yapan yazılım geliştiricilerine son derece pratik hazırlanmış kolay kullanımlı Trunçgil Finans JSON API'miz yayındadır. Bildiğimiz üzere TCMB yalnızca kur bilgilerini veriyor altın bilgileri için alternatif kaynaklara yönelmemiz gerekiyordu. Ancak tek bir API üzerinde ayrıntılı altın bilgilerinin yanı sıra Dolar ve Euro cinsi para birimlerinin de alış ve satış fiyatına erişebiliyorsunuz. 

API şu adresten sağlanılabilir.
https://finans.truncgil.com/today.json

Örnek Kullanım

    $finans = json_decode(file_get_contents("https://finans.truncgil.com/today.json"),true);
    print_r($finans);


Çıktı


Array
(
    [Güncelleme Tarihi] => 2018-11-17 07:30:03
    [Çeyrek Altın] => Array
        (
            [Alış] => 336,1900
            [Satış] => 343,8500
        )

    [Yarım Altın] => Array
        (
            [Alış] => 670,2800
            [Satış] => 687,6900
        )

    [Tam Altın] => Array
        (
            [Alış] => 1.344,7600
            [Satış] => 1.371,1800
        )

    [Cumhuriyet Altını] => Array
        (
            [Alış] => 1.391,0000
            [Satış] => 1.413,0000
        )

    [Ons] => Array
        (
            [Alış] => 1.221,1360
            [Satış] => 1.221,7650
        )

    [Gram Altın] => Array
        (
            [Alış] => 209,3680
            [Satış] => 209,5152
        )

    [Ata Altın] => Array
        (
            [Alış] => 1.386,7800
            [Satış] => 1.421,6600
        )

    [14 Ayar Altın] => Array
        (
            [Alış] => 119,7700
            [Satış] => 119,8700
        )

    [18 Ayar Altın] => Array
        (
            [Alış] => 153,3900
            [Satış] => 153,5200
        )

    [22 Ayar Bilezik] => Array
        (
            [Alış] => 191,6300
            [Satış] => 191,8000
        )

    [İkibuçuk Altın] => Array
        (
            [Alış] => 3.361,8900
            [Satış] => 3.415,3400
        )

    [Beşli Altın] => Array
        (
            [Alış] => 6.702,7600
            [Satış] => 6.834,8800
        )

    [Gremse Altın] => Array
        (
            [Alış] => 3.361,8900
            [Satış] => 3.438,4700
        )

    [Gümüş] => Array
        (
            [Alış] => 2,4691
            [Satış] => 2,4777
        )

    [Dolar] => Array
        (
            [Alış] => 5.3375
            [Satış] => 5.3589
        )

    [Euro] => Array
        (
            [Alış] => 6.0523
            [Satış] => 6.0765
        )

)
