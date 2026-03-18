@extends('layouts.app')

@section('title', 'Change Tax Service Office')
@section('header', 'Change Tax Service Office')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="mandatoryNotice">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>
</div>

<div class="form-container-red">
    <div class="header-wizard-container" style="margin-top: 0;">
        <div class="tabs-nav-row">
            <div class="tab-item active" id="tab_a" onclick="showSectionA()">Section A</div>
            <div class="tab-item" id="tab_b" onclick="showSectionB()">Section B</div>
        </div>
        <div class="form-header-banner-wizard">
            Change Of TSO Application Form
        </div>
    </div>

    <div class="form-body">

        <div class="tab-content-wrapper" style="min-height: auto;">
            
            <!-- Section A -->
            <div id="section_a">
                <div class="section-field">
                    <div class="section-title-legend">Taxpayer Details</div>
                    <table class="inner-profile-table" style="margin-bottom: 20px;">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25%;">Applicant Type<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <select class="form-select-custom" required>
                                        <option>Taxpayer</option>
                                        <option>Agent</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25%;">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <input type="text" class="form-input-custom" value="A000000000X" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">TAXPAYER NAME</td>
                                <td class="input-cell" colspan="3">
                                    <input type="text" class="form-input-custom" value="TAXPAYER NAME" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-field">
                    <div class="section-title-legend">Current Station Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25%;">L.R. Number</td>
                                <td class="input-cell" style="width: 25%;"><input type="text" class="form-input-custom" readonly></td>
                                <td class="label-cell" style="width: 25%;">Building</td>
                                <td class="input-cell" style="width: 25%;"><input type="text" class="form-input-custom" value="DUMMY BUILDING" readonly></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Street/Road</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY STREET" readonly></td>
                                <td class="label-cell">City/Town</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY CITY" readonly></td>
                            </tr>
                            <tr>
                                <td class="label-cell">County</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY COUNTY" readonly></td>
                                <td class="label-cell">District/Sub-county</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY DISTRICT" readonly></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Area/Locality</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY AREA" readonly></td>
                                <td class="label-cell">Tax Service Office</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" value="DUMMY TSO" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1; border-top: 1px solid #ddd; margin-top: 20px;">
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    <button type="button" class="btn-custom btn-next-blue" onclick="showSectionB()">Next</button>
                </div>
            </div>

            <!-- Section B -->
            <div id="section_b" style="display: none;">
                <div class="section-field">
                    <div class="section-title-legend">New Station Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25%;">County<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <select class="form-select-custom" id="newCounty" onchange="updateSubCounties()" required>
                                        <option value="">--Select County--</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kwale">Kwale</option>
                                        <option value="Kilifi">Kilifi</option>
                                        <option value="Tana River">Tana River</option>
                                        <option value="Lamu">Lamu</option>
                                        <option value="Taita Taveta">Taita Taveta</option>
                                        <option value="Garissa">Garissa</option>
                                        <option value="Wajir">Wajir</option>
                                        <option value="Mandera">Mandera</option>
                                        <option value="Marsabit">Marsabit</option>
                                        <option value="Isiolo">Isiolo</option>
                                        <option value="Meru">Meru</option>
                                        <option value="Tharaka Nithi">Tharaka Nithi</option>
                                        <option value="Embu">Embu</option>
                                        <option value="Kitui">Kitui</option>
                                        <option value="Machakos">Machakos</option>
                                        <option value="Makueni">Makueni</option>
                                        <option value="Nyandarua">Nyandarua</option>
                                        <option value="Nyeri">Nyeri</option>
                                        <option value="Kirinyaga">Kirinyaga</option>
                                        <option value="Murang'a">Murang'a</option>
                                        <option value="Kiambu">Kiambu</option>
                                        <option value="Turkana">Turkana</option>
                                        <option value="West Pokot">West Pokot</option>
                                        <option value="Samburu">Samburu</option>
                                        <option value="Trans Nzoia">Trans Nzoia</option>
                                        <option value="Uasin Gishu">Uasin Gishu</option>
                                        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                                        <option value="Nandi">Nandi</option>
                                        <option value="Baringo">Baringo</option>
                                        <option value="Laikipia">Laikipia</option>
                                        <option value="Nakuru">Nakuru</option>
                                        <option value="Narok">Narok</option>
                                        <option value="Kajiado">Kajiado</option>
                                        <option value="Kericho">Kericho</option>
                                        <option value="Bomet">Bomet</option>
                                        <option value="Kakamega">Kakamega</option>
                                        <option value="Vihiga">Vihiga</option>
                                        <option value="Bungoma">Bungoma</option>
                                        <option value="Busia">Busia</option>
                                        <option value="Siaya">Siaya</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Homa Bay">Homa Bay</option>
                                        <option value="Migori">Migori</option>
                                        <option value="Kisii">Kisii</option>
                                        <option value="Nyamira">Nyamira</option>
                                        <option value="Nairobi City">Nairobi City</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25%;">District/Sub-county<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <select class="form-select-custom" id="newSubCounty" onchange="updateLocalities()" disabled required>
                                        <option value="">--Select Sub-county--</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">New Tax Service Office(TSO)<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="DUMMY NEW TSO" readonly>
                                </td>
                                <td class="label-cell">Tax Area/Locality<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom" id="newLocality" disabled required>
                                        <option value="">--Select Locality--</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell" style="vertical-align: top; padding-top: 15px;">Remarks<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="3">
                                    <textarea class="form-input-custom" rows="4" style="width: 100%; max-width: 100%;" onkeyup="document.getElementById('remarkCharCount').value = 500 - this.value.length;" required></textarea>
                                    <div style="font-size: 0.75rem; color: #666; margin-top: 5px;">
                                        (Maximum characters: 500)<br>
                                        You have<input type="text" id="remarkCharCount" value="500" readonly style="width: 35px; border: none; background: transparent; text-align: right; font-weight: bold; color: #DA3832;"> characters left.
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="font-weight: bold; margin: 15px 0 10px; color: #DA3832; border-bottom: 1px solid #eee; padding-bottom: 5px;">Supporting Documents</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 40%;">Upload Supporting Document for TSO Change<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <div style="display: flex; align-items: center; background: white; height: 26px;">
                                            <button type="button" style="background: #eef; border: none; border-right: 1px solid #7f9db9; padding: 0 10px; font-size: 12px; height: 100%; cursor: pointer;" onclick="document.getElementById('tsoDocFixed').click();">Choose File</button>
                                            <span id="tsoDocNameFixed" style="padding: 0 10px; font-size: 12px; color: #000;">No file chosen</span>
                                            <input type="file" id="tsoDocFixed" style="display: none;" onchange="document.getElementById('tsoDocNameFixed').textContent = this.files.length  required> 0 ? this.files[0].name : 'No file chosen';">
                                        </div>
                                    </div>
                                    <div style="color: #666; font-size: 0.75rem; margin-top: 5px;">Allowed types: .pdf, .doc, .docx, .jpeg, .png (Max: 5MB)</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1; border-top: 1px solid #ddd; margin-top: 20px;">
                    <button type="button" class="btn-custom btn-next-blue" onclick="showSectionA()">Previous</button>
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    <button type="button" class="btn-custom btn-submit-green" onclick="alert('Form submitted successfully!');">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showSectionA() {
        document.getElementById('tab_a').className = 'tab-item active';
        document.getElementById('tab_b').className = 'tab-item';
        document.getElementById('section_a').style.display = 'block';
        document.getElementById('section_b').style.display = 'none';
    }

    function showSectionB() {
        document.getElementById('tab_a').className = 'tab-item';
        document.getElementById('tab_b').className = 'tab-item active';
        document.getElementById('section_a').style.display = 'none';
        document.getElementById('section_b').style.display = 'block';
    }

    // Comprehensive Kenyan Geography Data
    const geoData = {
        "Mombasa": {
            "Changamwe": ["Airport", "Chaani", "Kipevu", "Magongo", "Port Reitz"],
            "Jomvu": ["Jomvu Kuu", "Mikindani", "Miritini"],
            "Kisauni": ["Bamburi", "Junda", "Magogoni", "Mjambere", "Mtopanga", "Mwakirunge", "Shanzu"],
            "Nyali": ["Frere Town", "Kadzandani", "Kongowea", "Mkomani", "Ziwa La Ng'ombe"],
            "Likoni": ["Bofu", "Likoni", "Mtongwe", "Shika Adabu", "Timbwani"],
            "Mvita": ["Majengo", "Mji wa Kale/Makadara", "Railway", "Shimanzi/Ganjoni", "Tononoka"]
        },
        "Kwale": {
            "Msambweni": ["Gombato Bongwe", "Kinondo", "Ramisi", "Ukunda"],
            "Lunga Lunga": ["Dzombo", "Kasemeni", "Mwereni", "Vanga"],
            "Kwale": ["Kubo South", "Mwavumbo", "Ndavaya", "Puma", "Samburu-Chengoni"]
        },
        "Kilifi": {
            "Kilifi North": ["Matsangoni", "Mnarani", "Sokoni", "Tezo", "Watamu"],
            "Kilifi South": ["Chasimba", "Mntwapa", "Mtepeni", "Shariani"],
            "Malindi": ["Ganda", "Jilore", "Malindi Town", "Shella"]
        },
        "Tana River": {
            "Garsen": ["Garsen Central", "Kipini East", "Kipini West"],
            "Galole": ["Kinakomba", "Mikinduni", "Wayu"],
            "Bura": ["Bangale", "Chewele", "Hirimani"]
        },
        "Lamu": {
            "Lamu East": ["Basuba", "Faza", "Kiunga"],
            "Lamu West": ["Hindi", "Mkomani", "Shella", "Witu"]
        },
        "Taita Taveta": {
            "Voi": ["Kaloleni", "Mbololo", "Ngolia", "Sagalla"],
            "Taveta": ["Chala", "Mahuoo", "Mata", "Mboghoni"]
        },
        "Garissa": {
            "Garissa Township": ["Galbet", "Iftin", "Waberi"],
            "Dadaab": ["Abakaile", "Dadaab", "Damajale", "Labasigale"]
        },
        "Wajir": {
            "Wajir East": ["Barwaqo", "Khorof/Harar", "Township"],
            "Wajir North": ["Bute", "Gurar", "Malkagufu"]
        },
        "Mandera": {
            "Mandera East": ["Bulla Mpya", "Khalalio", "Township"],
            "Mandera West": ["Gither", "Lagsure", "Takaba"]
        },
        "Marsabit": {
            "Saku": ["Karare", "Marsabit Central", "Sagante"],
            "North Horr": ["Dukana", "Illeret", "Maikona"]
        },
        "Isiolo": {
            "Isiolo": ["Burat", "Ngaremara", "Wabera"],
            "Garbatulla": ["Garbatulla", "Kinna", "Sericho"]
        },
        "Meru": {
            "Imenti North": ["Municipality", "Ntima East", "Ntima West", "Nyaki East", "Nyaki West"],
            "Imenti South": ["Abogeta East", "Abogeta West", "Igoji East", "Igoji West", "Mitunguu"]
        },
        "Tharaka Nithi": {
            "Chuka": ["Chuka", "Mugwe", "Mwimbi"],
            "Tharaka": ["Chiakariga", "Gatunga", "Marimanti"]
        },
        "Embu": {
            "Manyatta": ["Kirimari", "Mbeti North", "Nginda"],
            "Runyenjes": ["Gaturi North", "Kagaari South", "Kyeni North"]
        },
        "Kitui": {
            "Kitui Central": ["Kyangwithya East", "Kyangwithya West", "Township"],
            "Mwingi Central": ["Kivou", "Mwingi", "Waita"]
        },
        "Machakos": {
            "Machakos Town": ["Kalama", "Machakos Central", "Mumbuni", "Muvuti/Kiima-Kimwe"],
            "Mavoko": ["Athi River", "Kinanie", "Muthwani", "Syokimau/Mulolongo"]
        },
        "Makueni": {
            "Makueni": ["Kuvukoni", "Muvau", "Wote"],
            "Kibwezi East": ["Ivingoni", "Mtito Andei", "Thange"]
        },
        "Nyandarua": {
            "Ol Kalou": ["Kaimbaga", "Kanjuiri Ridge", "Ol Kalou"],
            "Kipipiri": ["Geta", "Githabai", "Kipipiri"]
        },
        "Nyeri": {
            "Nyeri Town": ["Gatitu/Muruguru", "Kiganjo/Mathari", "Rware"],
            "Mathira East": ["Iriaini", "Kirimukuyu", "Magutu"]
        },
        "Kirinyaga": {
            "Kirinyaga Central": ["Kanyekini", "Kerugoya", "Mutira"],
            "Mwea East": ["Nyangati", "Tebere", "Wamumu"]
        },
        "Murang'a": {
            "Kiharu": ["Gaturi", "Mugoiri", "Township"],
            "Kandara": ["Gaichanjiru", "Ithiru", "Muruka"]
        },
        "Kiambu": {
            "Thika Town": ["Gatuanyaga", "Hospital", "Kamenu", "Municipality", "Ngoliba"],
            "Ruiru": ["Biashara", "Gatongora", "Kahawa Sukari", "Kahawa Wendani", "Mwihoko"],
            "Limuru": ["Limuru Central", "Limuru East", "Ndeiya", "Tigoni/Igegania"],
            "Kikuyu": ["Karai", "Kikuyu", "Nachu", "Sigona"]
        },
        "Turkana": {
            "Turkana Central": ["Kanamkemer", "Lodwar Township", "Turkwel"],
            "Turkana West": ["Kakuma", "Lapur", "Lokichogio"]
        },
        "West Pokot": {
            "Kapenguria": ["Kapenguria", "Mnagei", "Riwo"],
            "Sigor": ["Lomut", "Masol", "Wei Wei"]
        },
        "Samburu": {
            "Samburu West": ["Lodokejek", "Maralal", "Suguta Marmar"],
            "Samburu East": ["Wasaso", "Wamba East", "Wamba West"]
        },
        "Trans Nzoia": {
            "Kiminini": ["Hospital", "Kiminini", "Naitiri"],
            "Saboti": ["Kinyoro", "Matisi", "Saboti"]
        },
        "Uasin Gishu": {
            "Ainabkoi": ["Ainabkoi/Olare", "Kapsoya", "Kaptagat"],
            "Kapseret": ["Kapseret", "Kipkenyo", "Langas", "Megun", "Simat/Kapseret"]
        },
        "Elgeyo Marakwet": {
            "Keiyo North": ["Emsoo", "Kamariny", "Kapchemutwa"],
            "Marakwet East": ["Embobut", "Endo", "Kapyego"]
        },
        "Nandi": {
            "Emgwen": ["Kapkangani", "Kapsabet", "Kilibwoni"],
            "Chesumei": ["Chemundu", "Kaptel", "Kipkaren"]
        },
        "Baringo": {
            "Baringo Central": ["Ewalel/Chapchap", "Kabarnet", "Sacho"],
            "Baringo North": ["Kabartonjo", "Saimo Soi", "Saimo Kipsaraman"]
        },
        "Laikipia": {
            "Laikipia East": ["Nanyuki", "Ngbit", "Tigithi"],
            "Laikipia West": ["Githiga", "Marmanet", "Ol-Moran"]
        },
        "Nakuru": {
            "Nakuru Town East": ["Biashara", "Flamingo", "Kivumbini", "Menengai", "Nakuru East"],
            "Nakuru Town West": ["Barut", "Kaptembwa", "London", "Rhoda", "Shaabab"],
            "Naivasha": ["Hell's Gate", "Lake View", "Mai Mahiu", "Naivasha East", "Viwandani"]
        },
        "Narok": {
            "Narok North": ["Musiara", "Nkareta", "Olokurto"],
            "Narok South": ["Loita", "Majimoto", "Naroosura"]
        },
        "Kajiado": {
            "Kajiado Central": ["Dalalekutuk", "Ildamat", "Purko"],
            "Kajiado North": ["Ngong", "Nkaimurunya", "Oongata Rongai"]
        },
        "Kericho": {
            "Ainamoi": ["Ainamoi", "Kapkugerwet", "Kipchebor"],
            "Bureti": ["Cheboin", "Chemosot", "Litein"]
        },
        "Bomet": {
            "Bomet Central": ["Chesoen", "Mutarakwa", "Silibwet"],
            "Sotik": ["Kipsonoi", "Ndanai", "Sotik"]
        },
        "Kakamega": {
            "Lurambi": ["Butsotso East", "Butsotso South", "Sheywe"],
            "Malava": ["Chemuche", "Manda", "Shirugu"]
        },
        "Vihiga": {
            "Vihiga": ["Lugaga-Wamuluma", "Mungoma", "Wemilabi"],
            "Sabatia": ["Chavakali", "Lyaduywa", "Wodanga"]
        },
        "Bungoma": {
            "Kanduyi": ["Bukembe West", "Khalaba", "Musikari"],
            "Webuye East": ["Maraka", "Misikhu", "Sitikho"]
        },
        "Busia": {
            "Matayos": ["Busibwabo", "Matayos South", "Burumba"],
            "Teso North": ["Ang'urai", "Malaba Central", "Malaba North"]
        },
        "Siaya": {
            "Alego Usonga": ["Boro", "Central Alego", "Siaya Township"],
            "Bondo": ["Central Sakwa", "North Sakwa", "Yimbo West"]
        },
        "Kisumu": {
            "Kisumu Central": ["Kondele", "Market Milimani", "Nyala", "Railways", "Shauri Moyo Kaloleni"],
            "Kisumu East": ["Kajulu", "Kolwa Central", "Kolwa East", "Manyatta B", "Nyalenda A"],
            "Kisumu West": ["Central Kisumu", "Kisumu North", "North West Kisumu", "South West Kisumu"]
        },
        "Homa Bay": {
            "Homa Bay Town": ["Homa Bay Central", "Homa Bay West", "Kanyabala"],
            "Ndhiwa": ["Kabuoch", "Kanyamwa", "Ndhiwa"]
        },
        "Migori": {
            "Suna West": ["Oruba/Ragana", "Wasimbete", "Wiga"],
            "Kuria West": ["Bukira East", "Isibania", "Mabera"]
        },
        "Kisii": {
            "Kitutu Chache South": ["Bogeka", "Nyatieko", "Township"],
            "Nyaribari Chache": ["Ibeno", "Keumbu", "Kiogoro"]
        },
        "Nyamira": {
            "Nyamira Town": ["Bonyamatuta", "Bosamaro", "Township"],
            "West Mugirango": ["Bogichora", "Bosamaro", "Nyamaiya"]
        },
        "Nairobi City": {
            "Westlands": ["Highridge", "Kangemi", "Kitisuru", "Mountain View", "Parklands"],
            "Dagoretti North": ["Gatina", "Kawangware", "Kileleshwa", "Kilimani", "Lavington"],
            "Kasarani": ["Clay City", "Kasarani", "Mwiki", "Njiru", "Ruai"],
            "Lang'ata": ["Karen", "Mugumo-ini", "Nairobi West", "Nyayo Highrise", "South C"],
            "Starehe": ["Central Ward", "Landi Mawe", "Nairobi South", "Pangani", "Ziwani/Kariokor"],
            "Embakasi East": ["Lower Savanna", "Mihango", "Upper Savanna", "Utawala"]
        }
    };

    function updateSubCounties() {
        const countySelect = document.getElementById('newCounty');
        const subCountySelect = document.getElementById('newSubCounty');
        const localitySelect = document.getElementById('newLocality');
        const county = countySelect.value;

        // Reset sub-county and locality
        subCountySelect.innerHTML = '<option value="">--Select Sub-county--</option>';
        subCountySelect.disabled = true;
        localitySelect.innerHTML = '<option value="">--Select Locality--</option>';
        localitySelect.disabled = true;

        if (county && geoData[county]) {
            const subCounties = Object.keys(geoData[county]);
            subCounties.forEach(sc => {
                const opt = document.createElement('option');
                opt.value = sc;
                opt.textContent = sc;
                subCountySelect.appendChild(opt);
            });
            subCountySelect.disabled = false;
        }
    }

    function updateLocalities() {
        const countySelect = document.getElementById('newCounty');
        const subCountySelect = document.getElementById('newSubCounty');
        const localitySelect = document.getElementById('newLocality');
        const county = countySelect.value;
        const subCounty = subCountySelect.value;

        // Reset locality
        localitySelect.innerHTML = '<option value="">--Select Locality--</option>';
        localitySelect.disabled = true;

        if (county && subCounty && geoData[county][subCounty]) {
            const localities = geoData[county][subCounty];
            localities.forEach(loc => {
                const opt = document.createElement('option');
                opt.value = loc;
                opt.textContent = loc;
                localitySelect.appendChild(opt);
            });
            localitySelect.disabled = false;
        }
    }
</script>
@endpush
@endsection


