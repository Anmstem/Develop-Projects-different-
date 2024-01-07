smartphone(iphone_11).
smartphone(iphone_12).
smartphone(samsung_s21_ultra).
smartphone(xiaomi_redmi_note_8_pro).
smartphone(huawei_mate_10_pro).

memory(iphone_11, 128).
memory(iphone_12, 256).
memory(samsung_s21_ultra, 512).
memory(xiaomi_redmi_note_8_pro, 64).
memory(huawei_mate_10_pro, 64).

release_date(iphone_11, 2019).
release_date(iphone_12, 2020).
release_date(samsung_s21_ultra, 2021).
release_date(xiaomi_redmi_note_8_pro, 2019).
release_date(huawei_mate_10_pro, 2018).

price(iphone_11, 750).
price(iphone_12, 1100).
price(samsung_s21_ultra, 1600).
price(xiaomi_redmi_note_8_pro, 350).
price(huawei_mate_10_pro, 440).



%Koi telefon e obekt na otstypkata?
%pravilo 1: data na puskane na produkta e pod 2019 
otstypka(Phone):-release_date(Phone, Y), Y < 2019, !.
%pravilo 2: Cena po malka ot 500$
otstypka(Phone):-price(Phone, Y), Y < 500.
%pravilo 3: Pamet da e pod 128GB
otstypka(Phone):-memory(Phone, Y), Y < 128.
?-otstypka(Phone), write("Telefon s otstypka: "), write(Phone), nl, fail.