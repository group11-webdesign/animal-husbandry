<!-- <?php
        include("../Functions/functions.php");
        ?> -->

<!DOCTYPE html>

<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farmer Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
    <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
    <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script src="../portal_files/jquery.min.js.download"></script>
    <script src="../portal_files/popper.min.js.download"></script>
    <script src="../portal_files/bootstrap.min.js.download"></script>


    <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'ABIA') {
        array = ['Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'Umuahia South', 'Umu Nneochi'];
    } else if (a === 'ADAMAWA') {
        array = ['Demsa', 'Fufore', 'Ganye', 'Girei', 'Gombi', 'Guyuk', 'Hong', 'Jada', 'Lamurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];
    } else if (a === 'AKWA IBOM') {
        array = ['Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat Enin', 'Nsit Atai', 'Nsit Ibom', 'Nsit Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung Uko', 'Ukanafun', 'Uruan', 'Urue Offong Oruko', 'Uyo'];
    } else if (a === 'ANAMBRA') {
        array = ['Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];
    } else if (a === 'BAUCHI') {
        array = ['Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Ganjuwa', 'Giade', 'Itas/Gadau', 'Jama\'are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', 'Toro', 'Warji', 'Zaki'];
    } else if (a === 'BAYELSA') {
        array = ['Brass', 'Ekeremor', 'Kolokuma/Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];
    } else if (a === 'BENUE') {
        array = ['Ado', 'Agatu', 'Apa', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];
    } else if (a === 'BORNO') {
        array = ['Abadam', 'Askira/Uba', 'Bama', 'Bayo', 'Biase', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala/Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];
    } else if (a === 'CROSS RIVER') {
        array = ['Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakurr', 'Yala'];
    } else if (a === 'DELTA') {
        array = ['Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];
    } else if (a === 'EBONYI') {
        array = ['Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];
    } else if (a === 'EDO') {
        array = ['Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];
    } else if (a === 'EKITI') {
        array = ['Ado-Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun/Ifelodun', 'Ise/Orun', 'Moba', 'Oye'];
    } else if (a === 'ENUGU') {
        array = ['Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo-Uwani'];
    } else if (a === 'GOMBE') {
        array = ['Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu/Deba'];
    } else if (a === 'IMO') {
        array = ['Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte/Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji/Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];
    } else if (a === 'JIGAWA') {
        array = ['Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kaugama', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];
    } else if (a === 'KADUNA') {
        array = ['Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema\'a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];
    } else if (a === 'KANO') {
        array = ['Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];
    } else if (a === 'KATSINA') {
        array = ['Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai\'Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];
    } else if (a === 'KEBBI') {
        array = ['Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko/Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu/Danko', 'Yauri', 'Zuru'];
    } else if (a === 'KOGI') {
        array = ['Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela-Odolu', 'Ijumu', 'Kabba/Bunu', 'Kogi', 'Lokoja', 'Mopa-Muro', 'Ofu', 'Ogori/Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];
    } else if (a === 'KWARA') {
        array = ['Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];
    } else if (state === 'LAGOS') {
        array = ['Ikeja', 'Badagry', 'Epe', 'Ikorodu', 'Lagos Island', 'Lagos Mainland'];
    } else if (state === 'NASARAWA') {
        array = ['Lafia', 'Keffi', 'Akwanga', 'Nasarawa', 'Wamba', 'Kokona'];
    } else if (state === 'NIGER') {
        array = ['Agaie', 'Agwara', 'Bida', 'Borgu', 'Chanchaga', 'Edati', 'Gbako', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Munya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];
    } else if (state === 'OGUN') {
        array = ['Abeokuta North', 'Abeokuta South', 'Ado-Odo/Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];
    } else if (state === 'ONDO') {
        array = ['Akoko North-East', 'Akoko North-West', 'Akoko South-East', 'Akoko South-West', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji/Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];
    } else if (state === 'OSUN') {
        array = ['Aiyedaade', 'Aiyedire', 'Atakunmosa East', 'Atakunmosa West', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Egbedore', 'Ejigbo', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];
    } else if (state === 'OYO') {
        array = ['Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo East', 'Oyo West', 'Saki East', 'Saki West', 'Surulere'];
    } else if (state === 'PLATEAU') {
        array = ['Barkin Ladi', 'Bassa', 'Bokkos', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang North', 'Langtang South', 'Mangu', 'Mikang', 'Pankshin', 'Qua\'an Pan', 'Riyom', 'Shendam', 'Wase'];
    } else if (state === 'RIVERS') {
        array = ['Abua/Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emohua', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio/Akpor', 'Ogba/Egbema/Ndoni', 'Ogu/Bolo', 'Okrika', 'Omuma', 'Opobo/Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];
    } else if (state === 'SOKOTO') {
        array = ['Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];
    } else if (state === 'TARABA') {
        array = ['Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kurmi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];
    } else if (state === 'YOBE') {
        array = ['Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];
    } else if (state === 'ZAMFARA') {
        array = ['Anka', 'Bakura', 'Birnin Magaji/Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Zurmi'];
    }


            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }


        .header {
            position: sticky;
            z-index: 100;
            top: 0rem;
            height: 69px;
            width: 100%;
            background-color: #00b300;
        }

        .select_element {
            width: 20px;
            background-color: transparent;
            border: none;
            text: none;
        }


        #logo {
            height: 66px;
            width: 100px;
            text-align: left;
            float: left;
        }

        .search_input {
            clear: none;
            float: left;
            margin-left: 20px;
            margin-top: 20px;

        }

        .proicon {
            float: right;
            margin-right: 10px;
            margin-top: 20px;
        }

        #icon {
            background-color: red;
            color: white;
        }

        .dropdown {
            float: right;
            margin-right: 20px;
            margin-top: 20px;


        }

        .options {
            color: yellow;
            margin-left: 5px;
            margin-right: 26px;
        }

        .icon2 {
            float: right;
            margin-right: 10px;
            margin-top: 20px;


        }

        .filter {
            float: right;
            margin-right: 800px;
            margin-top: 15px;
            background-color: transparent;
            color: black;


        }

        .filterbutton {
            background-color: transparent;
            border: none;
            margin-top: 5px;
            color: white;
        }

        .loginz {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
        }

        .headerdown {
            background-color: transparent;
            height: 50px;
            width: 100%;
        }

        #majic {
            height: 70px;
            width: 100%;
            visibility: hidden;


        }

        #states {
            float: left;
            width: 150px;
            margin-left: -400px;
            margin-top: 20px;
            padding: 10px;

            border-radius: 25%;
            border-color: #00b300;
        }

        #district {
            /* height: 200px; */
            border-radius: 25%;
            border-color: #00b300;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 10px;
            margin-left: 150px;
            margin-right: -400px;
        }

        .makeitgreen {
            color: #00b300;
            width: 156px;

        }

        .sel1 {
            color: green;
            float: left;
            margin-top: 3px;
        }

        .sel2 {
            border-color: green;
            color: green;
            float: left;
            margin-left: 600px;
            margin-top: 3px;
        }

        .sel3 {
            font-size: 20px;
            margin-top: 3px;
            float: right;
            margin-right: 5px;
        }

        .slideshow {
            margin-top: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            float: left;
            border-style: solid;
            clear: both;
            /*background-color: black;*/
        }


        #input1 {
            width: 220px;
            border: none;

        }


        #input1:active {
            background-color: tomato;

        }

        #opt {
            height: 50px;
            width: 100%;
            background-color: red;
            padding-top: 0px;
            margin-top: 0px;
        }

        #bas {
            float: left;
            /*margin-top: 15px;*/
            background-color: #22651d;
            height: 50px;
        }



        #abc {
            float: right;
            /*margin-top: 15px;*/
            background-color: #22651d;
            height: 50px;
        }

        #cde {
            float: left;
            margin-left: 680px;
            /*margin-top: 15px;*/
            background-color: #22651d;
            height: 50px;
        }


        .carousel-indicators {
            list-style: none;
            background-color: transparent;
        }


        .carousel-control-prev {
            margin-left: 60px;
            /*color: red;*/
            margin-top: 10px;
        }

        .carousel-control-next {
            margin-right: 60px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 20% 20% 20% 20%;


            grid-column-gap: 20px;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
            grid-row-gap: 10px;
            margin-left: 30px;

        }

        .inputwrapper {
            float: left;
            border-style: double;
            text-align: center;
            margin-left: 80px;
            width: 280px;
            margin-bottom: 20px;
            clear: auto;
        }


        .inputwrapper:last-child {
            margin-right: 30px;
            /*background-color: red;*/
        }

        .carousel-control-next {
            margin-right: 60px;
        }



        .addtocart {
            background-color: #22651d;
        }

        .numberinput {
            width: 35px;

        }

        .tabless {
            border-collapse: separate;
            border-spacing: 20px;
            padding: 20px;
            border-style: solid;
            margin: 10px;
            /*background-color: red;*/
            border-width: 5px;
            border-radius: 16px;
            border-color: black;
            text-align: center;
            align-items: center;
            min-width: 500px;
            margin-left: 100px;
        }

        .inputwrapper {
            float: left;
            border-style: double;
            text-align: center;
            margin-left: 80px;
            width: 280px;
            margin-bottom: 20px;
            clear: auto;
        }

        .picha {
            height: 300px;
            width: 500px;
            background-color: red;
        }

        .images {
            transition: 0.5s;
        }

        .images:hover {
            width: 625px;
            height: 425px;
            box-shadow: 5px 5px 10px grey;
            transition: 0.5s;
        }

        .small_images:hover {
            height: 215px;
            width: 315px;
            box-shadow: 5px 5px 10px grey;
            transition: 0.5s;
        }

        #heading {
            font-size: 20px;
            color: white;
            text-align: center;
            background-color: black;
            justify-content: center;
        }



        .addtocart {
            background-color: #22651d;
        }

        .bestselers {
            background-color: red;
            border-style: solid;
            float: left;
            margin-top: 10px;
            /*margin: 20px;*/
            margin-bottom: 10px;
            margin-right: 40px;
            margin-left: 45px;
        }

        .bestselers:last-child {
            margin-right: 50px;
        }


        #fruits {
            text-align: center;
        }

        .veg {

            float: left;

            margin-left: 30px;
            border-style: solid;
            margin-top: 10px;
        }

        .veg img:hover {
            height: 270px;
            width: 350px;

        }

        #vegs {
            height: 270px;
            width: 1498px;
            /*margin: 20px;*/
            margin-right: 10px;
            margin-left: 10px;
            /*background-color: blue;*/
            margin-top: 20px;

        }

        .veg:first-child {
            margin-left: 80px;
        }

        .veg:last-child {
            margin-right: 20px;
        }

        #crops {
            height: 270px;
            width: 1498px;
            /*margin: 20px;*/
            margin-right: 10px;
            margin-left: 10px;
            /*background-color: blue;*/
            margin-top: 20px;

        }

        .crop:first-child {
            margin-left: 80px;
        }

        .crop:last-child {
            margin-right: 20px;
        }

        .crop {
            /*    height: 210px;
			width: 300px;
		*/
            float: left;
            /*  height: 200px;
			width: 300px;*/
            margin-left: 30px;
            border-style: solid;
            margin-top: 10px;
        }

        .crop img:hover {
            height: 270px;
            width: 350px;

        }

        .content_item {
            text-align: center;
            justify-content: center;

        }

        .etc {
            margin-left: -90px;
            min-width: 90px;
            font-size: 20px;

        }

        .crop_items {
            color: green;
        }

        .footer {
            height: 70px;
            width: 100%;
            /* background-color:red; */
            clear: both;

        }

        .payment {
            float: left;
            /* size:20% 50%;
		 */
            margin-left: 520px;
            font-size: 20px;
            margin-top: 25px;
        }

        .cash {
            float: left;
            margin-top: 0px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .verve {
            float: left;
            /* margin-left:500px; */
        }

        h3 {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: 10px 0 20px;
        }

        h3 span {
            background: #fff;
            padding: 0 10px;
        }

        .morefooter {
            height: 100px;
            width: 100%;
            background-color: white;

        }

        .call {
            float: left;
            font-size: 20px;
            margin-left: 150px;
            margin-top: 25px;
        }

        .gmail {
            margin-top: 10px;
            float: right;
            margin-right: 150px;

        }

        .instagram {
            margin-top: 10px;
            float: left;
            margin-left: 420px;
        }

        .instaid {
            height: 10px;
            width: 100%;

        }

        .text {
            float: left;
            margin-left: 735px;
            margin-top: -50px;
        }

        .gmailid {
            float: right;
            margin-right: 80px;
            margin-top: -60px;
        }

        .copy {
            float: left;
            margin-top: -65px;
            /* background-color:grey; */
        }

        .dric {
            margin-left: -50px;
        }
    </style>

</head>

<body>

    <div class="header">

        <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

        <div class="search_input">
            <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                <input type="text" id="input1" name="search" placeholder="Search...">
            </form>
        </div>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
            <ul class="dropdown-menu etc">
                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransaction.php'><label class='makeitgreen'>Transactions</label></a></li>";

                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Customer Care</label></a></li>";

                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Farmer</label></a></li>";

                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                } else {
                    echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                }
                ?>
        </div>
        <div class="proicon">
            <?php
            if (!isset($_SESSION['phonenumber'])) {
                echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
            } else {
                echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
            }
            ?>
        </div>

        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
            <span id="icon"> <?php echo totalItems(); ?> </span>
        </div>

        <div class="loginz">
            <?php getUsername(); ?>
        </div>

        <div class="filter">
            <button class="filterbutton " onclick="display()">Filter
                <i class="fas fa-filter"></i></button>
        </div>
    </div>
    <div class="headerdown">
        <div id="show">
            <div class="sel1 sel">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
                    <span class="caret"></span></button>
                <ul class="dropdown-menu  ">
                    <?php getCattle(); ?>
                </ul>
            </div>
            <div class="sel2 sel">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu ">
                    <?php getGoat(); ?>
                </ul>
            </div>
            <div class="sel3 sel">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu ">
                    <?php getChicken(); ?>
                </ul>
            </div>
        </div>
        <div id="majic" class="headerdown ">
            <table>
                <select id="states" onchange="state()" tabindex="1">
                    <option value="0">Select State</option>
                    <option value="31">ANDAMAN & NICOBAR ISLANDS</option>
                    <option value="01">ANDHRA PRADESH</option>
                    <option value="32">ARUNACHAL PRADESH</option>
                    <option value="02">ASSAM</option>
                    <option value="03">BIHAR</option>
                    <option value="33">CHANDIGARH</option>
                    <option value="23">CHHATTISGARH</option>
                    <option value="34">DADRA AND NAGAR HAVELI</option>
                    <option value="36">DAMAN AND DIU</option>
                    <option value="35">DELHI</option>
                    <option value="42">GOA</option>
                    <option value="04">GUJARAT</option>
                    <option value="05">HARYANA</option>
                    <option value="06">HIMACHAL PRADESH</option>
                    <option value="07">JAMMU AND KASHMIR</option>
                    <option value="24">JHARKAND</option>
                    <option value="08">KARNATAKA</option>
                    <option value="09">KERALA</option>
                    <option value="37">LAKSHADWEEP</option>
                    <option value="10">MADHYA PRADESH</option>
                    <option value="11">MAHARASHTRA</option>
                    <option value="12">MANIPUR</option>
                    <option value="13">MEGHALAYA</option>
                    <option value="38">MIZORAM</option>
                    <option value="14">NAGALAND</option>
                    <option value="15">ODISHA</option>
                    <option value="39">PUDUCHERRY</option>
                    <option value="16">PUNJAB</option>
                    <option value="17">RAJASTHAN</option>
                    <option value="22">SIKKIM</option>
                    <option value="18">TAMIL NADU</option>
                    <option value="26">TELANGANA</option>
                    <option value="19">TRIPURA</option>
                    <option value="20">UTTAR PRADESH</option>
                    <option value="25">UTTARAKHAND</option>
                    <option value="40">UTTARANCHAL</option>
                    <option value="21">WEST BENGAL</option>

                </select>


                <select name="" id="district">
                    <option>Select District</option>
                </select>






            </table>
        </div>
    </div>





    <div class=content_item><label style="font-size :50px; text-shadow: 1px 1px 1px gray;"><b>Farmers </b></label></div><br>
    <hr>

    <style>
        .firstbox {
            /* box-shadow: 10px 10px black; */
            font-family: 'Oswald', sans-serif;

            list-style: none;
            padding-left: 2%;
            margin: auto;
            text-align: center;

            display: inline;
            font-size: 20px;
        }

        .item1 {

            border-style: solid;
            border-width: 2px;
            border-color: black;
            border-radius: 10%;
            float: left;
            margin-top: 10px;
            margin-bottom: 45px;
            margin-left: 10%;
            clear: bottom;
        }

        .content0 {
            margin-top: -15px;
            margin-bottom: 20px;
            font-size: 60px;


        }

        .vp {
            margin-left: 60px;
            margin-right: 60px;
            margin-top: 10px;
            padding: 5px;
            margin-bottom: 10px;
            background-color: transparent;
            border-color: black;

        }




        .item1:hover {
            color: white;
            border-color: yellow;
            /* width: 350px; */
            /* height:350px; */
            clear: all;
            background-color: #1aff1a;
        }

        .vp {
            border-radius: 25%;
            background-color: #22651d;

        }

        .vp:hover {
            font-weight: bolder;
        }

        .leaf {
            color: green;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body>

        <div class="happy">

            <div class="item1">
                <ul class="firstbox">
                    <li class="content0 content_0"><i class="fas fa-user"></i></li>
                    <li class="content1">Gladina</li>

                    <li class="content2">9819104641</li>

                    <li class="content3">Thane</li>
                    <li class="content4">Marashtra</li>
                    <li class="content5">Thane D</li>

                    <li><button class=" vp vp0">VIEW PRODUCTS <i class="fab fa-canadian-maple-leaf leaf"></i></button> </li>
            </div>
            <div class="item1">
                <ul class="firstbox">
                    <li class="content0 content_1"><i class="fas fa-user"></i></li>

                    <li class="content1">Calista</li>

                    <li class="content2">9819104641</li>

                    <li class="content3">Thane</li>
                    <li class="content4">Marashtra</li>
                    <li class="content5">Thane D</li>

                    <li><button class=" vp vp1">VIEW PRODUCTS <i class="fab fa-canadian-maple-leaf leaf"></i></button> </li>
                </ul>
            </div>
            <div class="item1">
                <ul class="firstbox">
                    <li class="content0 content_2"><i class="fas fa-user"></i></li>

                    <li class="content1">Arpit</li>

                    <li class="content2">9819104641</li>

                    <li class="content3">Thane</li>
                    <li class="content4">Marashtra</li>
                    <li class="content5">Thane D</li>

                    <li><button class=" vp vp2">VIEW PRODUCTS <i class="fab fa-canadian-maple-leaf leaf"></i></button> </li>
                </ul>
            </div>
            <div class="item1">
                <ul class="firstbox">
                    <li class="content0 content_3"><i class="fas fa-user"></i></li>

                    <li class="content1">Omkar</li>

                    <li class="content2">9819104641</li>

                    <li class="content3">Thane</li>
                    <li class="content4">Marashtra</li>
                    <li class="content5">Thane D</li>

                    <li><button class="vp3 vp">VIEW PRODUCTS <i class="fab fa-canadian-maple-leaf leaf"></i></button> </li>
                </ul>
            </div>

            <div class="item1">
                <ul class="firstbox">
                    <li class="content0 content_0"><i class="fas fa-user"></i></li>
                    <li class="content1">Abhishek</li>

                    <li class="content2">9819104641</li>

                    <li class="content3">Thane</li>
                    <li class="content4">Marashtra</li>
                    <li class="content5">Thane D</li>

                    <li><button class=" vp vp0">VIEW PRODUCTS <i class="fab fa-canadian-maple-leaf leaf"></i></button> </li>
            </div>
        </div>















        <div class="footer">
            <hr>
            <label class="payment">Payment Optionss:-</label>
            <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
            <div class="verve"><img src="../Images/Website/verve1.jpg" height="75px" width="125px"></div>
        </div><br><br>
        <h3><span> GET SOCIAL WITH US </span></h3>
        </div>
        <div class="morefooter">

            <div class="call">
                <i class="fas fa-phone-alt call_color"></i>
                <a href="#" style="color:black;">+2348191046421</a>
            </div>

            <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
            </div>

            <div class="gmail">
                <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
            </div>

        </div>
        <div class="instaid">
            <div class="text"><a href="#" style="color:black;">@AgroAllies</a></div>

            <div class="gmailid">
                <a href="#" class="hypher" style="color:black;">AgroAllies6@gmail.com</a>
            </div>

        </div>
        <div class="copy">
            <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroAllies.com</h5>
        </div>

    </body>

</html>