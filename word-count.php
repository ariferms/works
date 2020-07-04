<?php

$text1 = 'Merhaba, Karabük Üniversitesi Endüstri Mühendisliği 2019 mezunuyum. Eğitim öğretim hayatım boyunca etkili iletişim, vücut dili ve diksiyon seminerlerine katılıp bunlarla alakalı sertifikalar edindim. Bunların dışında  Liderlik Kampı (TOBB), TÜMKAF gibi etkinliklere de katılım göstermeye özen gösterdim. Üniversitede endüstri mühendisliği kulübü denetim kurulunda görev aldım. Burada sene sonu mühendislik fakültemizde düzenlenecek olan etkinliklerle ilgili projelerin denetiminde yer aldım. Bunların dışında ben ve 2 grup arkadaşım bulunduğumuz şehirdeki bir firmada iki proje geliştirdik. Birisi Excel üzerinde TOPSIS yöntemi ile çok kriterli bir karar verme modülü oluşturduk ve bir çok şirketin kurumun ya da seçimi yapılacak şey o an ne ise, bu kurumlarla alakalı kriterlere 1 ve 5 arası bir puanlama sistemi ile puan vererek bu puanlama sonucunda istatistiksel olarak hangi kurumu seçmenin daha doğru olacağını, modülün bize sıralı olarak vermesini sağladık. Bir diğer proje ise bir şirketi ARENA adındaki istatistik programında simüle etmek. Bu projemizde de şirketin belirli bil bölümü için zaman etütleri yaptık. Elde ettiğimiz verileri programa girdik. Programda şirkette ele aldığımız bölümün kuş bakışı dizaynını oluşturduk. Bu dizayn ve veri girişi yapımından sonra programı çalıştırdığımızda bize bölümdeki doluluk oranlarını, kuyrukta bekleme sürelerini, çalışanların her birinin meşguliyet durumları gibi bilgilere ulaşabilme imkanı oluşturmuş oldu. Bu sayede şirketin bölümleri arasında çalışan almak yada çıkarmak durumunda oluşabilecek durumları simülasyon yardımıyla öngörme olanağı sağlamış olduk. Mezun olduktan sonra 3 aylık tekstil sektöründe depo yöneticiliği yaptım. Şirkette daha çok ERP sisteminin depo, stok, malzeme, sipariş modülündeki hareketlerin sisteme işlenmesinde görev alıyordum. Bunun yanında gerektiğinde diğer birimlerle de irtibat halindeydim. Çalışırken yapmak istediğim işin bu olmadığını fark ettim. Yazılıma olan yönelimim bu dönemde ağırlık gösterdi ve işi bırakıp kendimi yazılım alanında geliştirmeye başladım. Bana gerçekten heyecan veriyordu. Başarma hissini net olarak hissettiğim ve beni tatmin edecek olan işin yazılım olduğuna karar verdim. Bu sektörü araştırmaya başladım işin içindeki insanlarla görüştüm ve Udemy\'den edindiğim kurslarla HTML, SQL ve PHP dillerini öğrendim. Ağırlıklı olarak PHP yazıyorum fakat JavaScript ve CSS de öğrenmeyi düşünüyorum. Şuanda bu saydığım dillerde kendimi geliştirmeye devam etmekteyim. Kişisel yönlerimden söz etmem gerekirse aile ve arkadaş kavramlarına özen gösteren biriyimdir. İnsan ilişkilerimde duyarlı olmaya önem veririm. Girdiğim ortama kısa sürede adapte olurum. Kendimi keşfetmek ve sınırlarımı zorlamak bana her zaman heyecan vermiştir. Enstrüman çalmaktan çok hoşlanırım(saz). Film seyretmek, kitap okumak, doğa kampları yapmak ve seyahat etmekten hoşlanırım. Aktif olarak spor yapmaktayım ve sporu her zaman hayatımda bulundururum. ';

// türkçe karakterli ingilizceye çevirdim str_word_count bunları iki olarak sayıyor çünkü
function replace_($text)
{
    $search = array('ç', 'Ç', 'ü', 'Ü', 'ö', 'Ö', 'ğ', 'Ğ', 'ş', 'Ş', 'İ', 'ı');
    $replace = array('c', 'C', 'u', 'U', 'o', 'O', 'g', 'G', 's', 'S', 'I', 'i');
    $new_text = str_replace($search, $replace, $text);
    return $new_text;
}

echo 'Word Count in Text= ';
echo str_word_count(replace_($text1));