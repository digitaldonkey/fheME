<?php
/*
 *  This file is part of phynx.

 *  phynx is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.

 *  phynx is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.

 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 *  2007 - 2012, Rainer Furtmeier - Rainer@Furtmeier.de
 */

class ISO3166 {

	public static function getCountries($lang = "de"){
		switch($lang){
			case "de":
				return self::getCountriesDE();
			break;
			
			case "en":
				return self::getCountriesEN();
			break;
		}
	}
	
	public static function getCountriesEN(){
		//FROM https://github.com/lukes/ISO-3166-Countries-with-Regional-Codes
		
		$codes = "Afghanistan,AF,AFG,004,ISO 3166-2:AF,142,034
Åland Islands,AX,ALA,248,ISO 3166-2:AX,150,154
Albania,AL,ALB,008,ISO 3166-2:AL,150,039
Algeria,DZ,DZA,012,ISO 3166-2:DZ,002,015
American Samoa,AS,ASM,016,ISO 3166-2:AS,009,061
Andorra,AD,AND,020,ISO 3166-2:AD,150,039
Angola,AO,AGO,024,ISO 3166-2:AO,002,017
Anguilla,AI,AIA,660,ISO 3166-2:AI,019,029
Antarctica,AQ,ATA,010,ISO 3166-2:AQ
Antigua and Barbuda,AG,ATG,028,ISO 3166-2:AG,019,029
Argentina,AR,ARG,032,ISO 3166-2:AR,019,005
Armenia,AM,ARM,051,ISO 3166-2:AM,142,145
Aruba,AW,ABW,533,ISO 3166-2:AW,019,029
Australia,AU,AUS,036,ISO 3166-2:AU,009,053
Austria,AT,AUT,040,ISO 3166-2:AT,150,155
Azerbaijan,AZ,AZE,031,ISO 3166-2:AZ,142,145
Bahamas,BS,BHS,044,ISO 3166-2:BS,019,029
Bahrain,BH,BHR,048,ISO 3166-2:BH,142,145
Bangladesh,BD,BGD,050,ISO 3166-2:BD,142,034
Barbados,BB,BRB,052,ISO 3166-2:BB,019,029
Belarus,BY,BLR,112,ISO 3166-2:BY,150,151
Belgium,BE,BEL,056,ISO 3166-2:BE,150,155
Belize,BZ,BLZ,084,ISO 3166-2:BZ,019,013
Benin,BJ,BEN,204,ISO 3166-2:BJ,002,011
Bermuda,BM,BMU,060,ISO 3166-2:BM,019,021
Bhutan,BT,BTN,064,ISO 3166-2:BT,142,034
Bolivia\, Plurinational State of,BO,BOL,068,ISO 3166-2:BO,019,005
Bonaire\, Sint Eustatius and Saba,BQ,BES,535,ISO 3166-2:BQ,019,029
Bosnia and Herzegovina,BA,BIH,070,ISO 3166-2:BA,150,039
Botswana,BW,BWA,072,ISO 3166-2:BW,002,018
Bouvet Island,BV,BVT,074,ISO 3166-2:BV
Brazil,BR,BRA,076,ISO 3166-2:BR,019,005
British Indian Ocean Territory,IO,IOT,086,ISO 3166-2:IO
Brunei Darussalam,BN,BRN,096,ISO 3166-2:BN,142,035
Bulgaria,BG,BGR,100,ISO 3166-2:BG,150,151
Burkina Faso,BF,BFA,854,ISO 3166-2:BF,002,011
Burundi,BI,BDI,108,ISO 3166-2:BI,002,014
Cambodia,KH,KHM,116,ISO 3166-2:KH,142,035
Cameroon,CM,CMR,120,ISO 3166-2:CM,002,017
Canada,CA,CAN,124,ISO 3166-2:CA,019,021
Cape Verde,CV,CPV,132,ISO 3166-2:CV,002,011
Cayman Islands,KY,CYM,136,ISO 3166-2:KY,019,029
Central African Republic,CF,CAF,140,ISO 3166-2:CF,002,017
Chad,TD,TCD,148,ISO 3166-2:TD,002,017
Chile,CL,CHL,152,ISO 3166-2:CL,019,005
China,CN,CHN,156,ISO 3166-2:CN,142,030
Christmas Island,CX,CXR,162,ISO 3166-2:CX
Cocos (Keeling) Islands,CC,CCK,166,ISO 3166-2:CC
Colombia,CO,COL,170,ISO 3166-2:CO,019,005
Comoros,KM,COM,174,ISO 3166-2:KM,002,014
Congo,CG,COG,178,ISO 3166-2:CG,002,017
Congo\, the Democratic Republic of the,CD,COD,180,ISO 3166-2:CD,002,017
Cook Islands,CK,COK,184,ISO 3166-2:CK,009,061
Costa Rica,CR,CRI,188,ISO 3166-2:CR,019,013
Côte d'Ivoire,CI,CIV,384,ISO 3166-2:CI,002,011
Croatia,HR,HRV,191,ISO 3166-2:HR,150,039
Cuba,CU,CUB,192,ISO 3166-2:CU,019,029
Curaçao,CW,CUW,531,ISO 3166-2:CW,019,029
Cyprus,CY,CYP,196,ISO 3166-2:CY,142,145
Czech Republic,CZ,CZE,203,ISO 3166-2:CZ,150,151
Denmark,DK,DNK,208,ISO 3166-2:DK,150,154
Djibouti,DJ,DJI,262,ISO 3166-2:DJ,002,014
Dominica,DM,DMA,212,ISO 3166-2:DM,019,029
Dominican Republic,DO,DOM,214,ISO 3166-2:DO,019,029
Ecuador,EC,ECU,218,ISO 3166-2:EC,019,005
Egypt,EG,EGY,818,ISO 3166-2:EG,002,015
El Salvador,SV,SLV,222,ISO 3166-2:SV,019,013
Equatorial Guinea,GQ,GNQ,226,ISO 3166-2:GQ,002,017
Eritrea,ER,ERI,232,ISO 3166-2:ER,002,014
Estonia,EE,EST,233,ISO 3166-2:EE,150,154
Ethiopia,ET,ETH,231,ISO 3166-2:ET,002,014
Falkland Islands (Malvinas),FK,FLK,238,ISO 3166-2:FK,019,005
Faroe Islands,FO,FRO,234,ISO 3166-2:FO,150,154
Fiji,FJ,FJI,242,ISO 3166-2:FJ,009,054
Finland,FI,FIN,246,ISO 3166-2:FI,150,154
France,FR,FRA,250,ISO 3166-2:FR,150,155
French Guiana,GF,GUF,254,ISO 3166-2:GF,019,005
French Polynesia,PF,PYF,258,ISO 3166-2:PF,009,061
French Southern Territories,TF,ATF,260,ISO 3166-2:TF
Gabon,GA,GAB,266,ISO 3166-2:GA,002,017
Gambia,GM,GMB,270,ISO 3166-2:GM,002,011
Georgia,GE,GEO,268,ISO 3166-2:GE,142,145
Germany,DE,DEU,276,ISO 3166-2:DE,150,155
Ghana,GH,GHA,288,ISO 3166-2:GH,002,011
Gibraltar,GI,GIB,292,ISO 3166-2:GI,150,039
Greece,GR,GRC,300,ISO 3166-2:GR,150,039
Greenland,GL,GRL,304,ISO 3166-2:GL,019,021
Grenada,GD,GRD,308,ISO 3166-2:GD,019,029
Guadeloupe,GP,GLP,312,ISO 3166-2:GP,019,029
Guam,GU,GUM,316,ISO 3166-2:GU,009,057
Guatemala,GT,GTM,320,ISO 3166-2:GT,019,013
Guernsey,GG,GGY,831,ISO 3166-2:GG,150,154
Guinea,GN,GIN,324,ISO 3166-2:GN,002,011
Guinea-Bissau,GW,GNB,624,ISO 3166-2:GW,002,011
Guyana,GY,GUY,328,ISO 3166-2:GY,019,005
Haiti,HT,HTI,332,ISO 3166-2:HT,019,029
Heard Island and McDonald Islands,HM,HMD,334,ISO 3166-2:HM
Holy See (Vatican City State),VA,VAT,336,ISO 3166-2:VA,150,039
Honduras,HN,HND,340,ISO 3166-2:HN,019,013
Hong Kong,HK,HKG,344,ISO 3166-2:HK,142,030
Hungary,HU,HUN,348,ISO 3166-2:HU,150,151
Iceland,IS,ISL,352,ISO 3166-2:IS,150,154
India,IN,IND,356,ISO 3166-2:IN,142,034
Indonesia,ID,IDN,360,ISO 3166-2:ID,142,035
Iran\, Islamic Republic of,IR,IRN,364,ISO 3166-2:IR,142,034
Iraq,IQ,IRQ,368,ISO 3166-2:IQ,142,145
Ireland,IE,IRL,372,ISO 3166-2:IE,150,154
Isle of Man,IM,IMN,833,ISO 3166-2:IM,150,154
Israel,IL,ISR,376,ISO 3166-2:IL,142,145
Italy,IT,ITA,380,ISO 3166-2:IT,150,039
Jamaica,JM,JAM,388,ISO 3166-2:JM,019,029
Japan,JP,JPN,392,ISO 3166-2:JP,142,030
Jersey,JE,JEY,832,ISO 3166-2:JE,150,154
Jordan,JO,JOR,400,ISO 3166-2:JO,142,145
Kazakhstan,KZ,KAZ,398,ISO 3166-2:KZ,142,143
Kenya,KE,KEN,404,ISO 3166-2:KE,002,014
Kiribati,KI,KIR,296,ISO 3166-2:KI,009,057
Korea\, Democratic People's Republic of,KP,PRK,408,ISO 3166-2:KP,142,030
Korea\, Republic of,KR,KOR,410,ISO 3166-2:KR,142,030
Kuwait,KW,KWT,414,ISO 3166-2:KW,142,145
Kyrgyzstan,KG,KGZ,417,ISO 3166-2:KG,142,143
Lao People's Democratic Republic,LA,LAO,418,ISO 3166-2:LA,142,035
Latvia,LV,LVA,428,ISO 3166-2:LV,150,154
Lebanon,LB,LBN,422,ISO 3166-2:LB,142,145
Lesotho,LS,LSO,426,ISO 3166-2:LS,002,018
Liberia,LR,LBR,430,ISO 3166-2:LR,002,011
Libya,LY,LBY,434,ISO 3166-2:LY,002,015
Liechtenstein,LI,LIE,438,ISO 3166-2:LI,150,155
Lithuania,LT,LTU,440,ISO 3166-2:LT,150,154
Luxembourg,LU,LUX,442,ISO 3166-2:LU,150,155
Macao,MO,MAC,446,ISO 3166-2:MO,142,030
Macedonia\, the former Yugoslav Republic of,MK,MKD,807,ISO 3166-2:MK,150,039
Madagascar,MG,MDG,450,ISO 3166-2:MG,002,014
Malawi,MW,MWI,454,ISO 3166-2:MW,002,014
Malaysia,MY,MYS,458,ISO 3166-2:MY,142,035
Maldives,MV,MDV,462,ISO 3166-2:MV,142,034
Mali,ML,MLI,466,ISO 3166-2:ML,002,011
Malta,MT,MLT,470,ISO 3166-2:MT,150,039
Marshall Islands,MH,MHL,584,ISO 3166-2:MH,009,057
Martinique,MQ,MTQ,474,ISO 3166-2:MQ,019,029
Mauritania,MR,MRT,478,ISO 3166-2:MR,002,011
Mauritius,MU,MUS,480,ISO 3166-2:MU,002,014
Mayotte,YT,MYT,175,ISO 3166-2:YT,002,014
Mexico,MX,MEX,484,ISO 3166-2:MX,019,013
Micronesia\, Federated States of,FM,FSM,583,ISO 3166-2:FM,009,057
Moldova\, Republic of,MD,MDA,498,ISO 3166-2:MD,150,151
Monaco,MC,MCO,492,ISO 3166-2:MC,150,155
Mongolia,MN,MNG,496,ISO 3166-2:MN,142,030
Montenegro,ME,MNE,499,ISO 3166-2:ME,150,039
Montserrat,MS,MSR,500,ISO 3166-2:MS,019,029
Morocco,MA,MAR,504,ISO 3166-2:MA,002,015
Mozambique,MZ,MOZ,508,ISO 3166-2:MZ,002,014
Myanmar,MM,MMR,104,ISO 3166-2:MM,142,035
Namibia,NA,NAM,516,ISO 3166-2:NA,002,018
Nauru,NR,NRU,520,ISO 3166-2:NR,009,057
Nepal,NP,NPL,524,ISO 3166-2:NP,142,034
Netherlands,NL,NLD,528,ISO 3166-2:NL,150,155
New Caledonia,NC,NCL,540,ISO 3166-2:NC,009,054
New Zealand,NZ,NZL,554,ISO 3166-2:NZ,009,053
Nicaragua,NI,NIC,558,ISO 3166-2:NI,019,013
Niger,NE,NER,562,ISO 3166-2:NE,002,011
Nigeria,NG,NGA,566,ISO 3166-2:NG,002,011
Niue,NU,NIU,570,ISO 3166-2:NU,009,061
Norfolk Island,NF,NFK,574,ISO 3166-2:NF,009,053
Northern Mariana Islands,MP,MNP,580,ISO 3166-2:MP,009,057
Norway,NO,NOR,578,ISO 3166-2:NO,150,154
Oman,OM,OMN,512,ISO 3166-2:OM,142,145
Pakistan,PK,PAK,586,ISO 3166-2:PK,142,034
Palau,PW,PLW,585,ISO 3166-2:PW,009,057
Palestinian Territory\, Occupied,PS,PSE,275,ISO 3166-2:PS,142,145
Panama,PA,PAN,591,ISO 3166-2:PA,019,013
Papua New Guinea,PG,PNG,598,ISO 3166-2:PG,009,054
Paraguay,PY,PRY,600,ISO 3166-2:PY,019,005
Peru,PE,PER,604,ISO 3166-2:PE,019,005
Philippines,PH,PHL,608,ISO 3166-2:PH,142,035
Pitcairn,PN,PCN,612,ISO 3166-2:PN,009,061
Poland,PL,POL,616,ISO 3166-2:PL,150,151
Portugal,PT,PRT,620,ISO 3166-2:PT,150,039
Puerto Rico,PR,PRI,630,ISO 3166-2:PR,019,029
Qatar,QA,QAT,634,ISO 3166-2:QA,142,145
Réunion,RE,REU,638,ISO 3166-2:RE,002,014
Romania,RO,ROU,642,ISO 3166-2:RO,150,151
Russian Federation,RU,RUS,643,ISO 3166-2:RU,150,151
Rwanda,RW,RWA,646,ISO 3166-2:RW,002,014
Saint Barthélemy,BL,BLM,652,ISO 3166-2:BL,019,029
Saint Helena\, Ascension and Tristan da Cunha,SH,SHN,654,ISO 3166-2:SH,002,011
Saint Kitts and Nevis,KN,KNA,659,ISO 3166-2:KN,019,029
Saint Lucia,LC,LCA,662,ISO 3166-2:LC,019,029
Saint Martin (French part),MF,MAF,663,ISO 3166-2:MF,019,029
Saint Pierre and Miquelon,PM,SPM,666,ISO 3166-2:PM,019,021
Saint Vincent and the Grenadines,VC,VCT,670,ISO 3166-2:VC,019,029
Samoa,WS,WSM,882,ISO 3166-2:WS,009,061
San Marino,SM,SMR,674,ISO 3166-2:SM,150,039
Sao Tome and Principe,ST,STP,678,ISO 3166-2:ST,002,017
Saudi Arabia,SA,SAU,682,ISO 3166-2:SA,142,145
Senegal,SN,SEN,686,ISO 3166-2:SN,002,011
Serbia,RS,SRB,688,ISO 3166-2:RS,150,039
Seychelles,SC,SYC,690,ISO 3166-2:SC,002,014
Sierra Leone,SL,SLE,694,ISO 3166-2:SL,002,011
Singapore,SG,SGP,702,ISO 3166-2:SG,142,035
Sint Maarten (Dutch part),SX,SXM,534,ISO 3166-2:SX,019,029
Slovakia,SK,SVK,703,ISO 3166-2:SK,150,151
Slovenia,SI,SVN,705,ISO 3166-2:SI,150,039
Solomon Islands,SB,SLB,090,ISO 3166-2:SB,009,054
Somalia,SO,SOM,706,ISO 3166-2:SO,002,014
South Africa,ZA,ZAF,710,ISO 3166-2:ZA,002,018
South Georgia and the South Sandwich Islands,GS,SGS,239,ISO 3166-2:GS
South Sudan,SS,SSD,728,ISO 3166-2:SS,002,015
Spain,ES,ESP,724,ISO 3166-2:ES,150,039
Sri Lanka,LK,LKA,144,ISO 3166-2:LK,142,034
Sudan,SD,SDN,729,ISO 3166-2:SD,002,015
Suriname,SR,SUR,740,ISO 3166-2:SR,019,005
Svalbard and Jan Mayen,SJ,SJM,744,ISO 3166-2:SJ,150,154
Swaziland,SZ,SWZ,748,ISO 3166-2:SZ,002,018
Sweden,SE,SWE,752,ISO 3166-2:SE,150,154
Switzerland,CH,CHE,756,ISO 3166-2:CH,150,155
Syrian Arab Republic,SY,SYR,760,ISO 3166-2:SY,142,145
Taiwan\, Province of China,TW,TWN,158,ISO 3166-2:TW,142,030
Tajikistan,TJ,TJK,762,ISO 3166-2:TJ,142,143
Tanzania\, United Republic of,TZ,TZA,834,ISO 3166-2:TZ,002,014
Thailand,TH,THA,764,ISO 3166-2:TH,142,035
Timor-Leste,TL,TLS,626,ISO 3166-2:TL,142,035
Togo,TG,TGO,768,ISO 3166-2:TG,002,011
Tokelau,TK,TKL,772,ISO 3166-2:TK,009,061
Tonga,TO,TON,776,ISO 3166-2:TO,009,061
Trinidad and Tobago,TT,TTO,780,ISO 3166-2:TT,019,029
Tunisia,TN,TUN,788,ISO 3166-2:TN,002,015
Turkey,TR,TUR,792,ISO 3166-2:TR,142,145
Turkmenistan,TM,TKM,795,ISO 3166-2:TM,142,143
Turks and Caicos Islands,TC,TCA,796,ISO 3166-2:TC,019,029
Tuvalu,TV,TUV,798,ISO 3166-2:TV,009,061
Uganda,UG,UGA,800,ISO 3166-2:UG,002,014
Ukraine,UA,UKR,804,ISO 3166-2:UA,150,151
United Arab Emirates,AE,ARE,784,ISO 3166-2:AE,142,145
United Kingdom,GB,GBR,826,ISO 3166-2:GB,150,154
United States,US,USA,840,ISO 3166-2:US,019,021
United States Minor Outlying Islands,UM,UMI,581,ISO 3166-2:UM
Uruguay,UY,URY,858,ISO 3166-2:UY,019,005
Uzbekistan,UZ,UZB,860,ISO 3166-2:UZ,142,143
Vanuatu,VU,VUT,548,ISO 3166-2:VU,009,054
Venezuela\, Bolivarian Republic of,VE,VEN,862,ISO 3166-2:VE,019,005
Viet Nam,VN,VNM,704,ISO 3166-2:VN,142,035
Virgin Islands\, British,VG,VGB,092,ISO 3166-2:VG,019,029
Virgin Islands\, U.S.,VI,VIR,850,ISO 3166-2:VI,019,029
Wallis and Futuna,WF,WLF,876,ISO 3166-2:WF,009,061
Western Sahara,EH,ESH,732,ISO 3166-2:EH,002,015
Yemen,YE,YEM,887,ISO 3166-2:YE,142,145
Zambia,ZM,ZMB,894,ISO 3166-2:ZM,002,014
Zimbabwe,ZW,ZWE,716,ISO 3166-2:ZW,002,014";
		
		$lines = explode("\n", $codes);
		$countries = array();

		foreach($lines AS $k => $v){
			if(strpos($v, "\,") === false){
				$values = explode(",", $v);
				$countries[$values[1]] = $values[0];
			} else {
				$values = explode(",", $v);
				$countries[$values[2]] = str_replace("\\", "", $values[0]).",".$values[1];
			}
		}

		asort($countries);

		return $countries;
	}
	
	public static function getCountriesDE(){
		$codes = "ABW    AW    Aruba
AFG    AF    Afghanistan
AGO    AO    Angola
AIA    AI    Anguilla
ALA    AX    Åland Inseln
ALB    AL    Albanien
AND    AD    Andorra
ANT    AN    Niederländische Antillen
ARE    AE    Vereinigte Arabische Emirate
ARG    AR    Argentinien
ARM    AM    Armenien
ASM    AS    Amerikanisch Samoa
ATA    AQ    Antarktis
ATF    TF    Französische Südgebiete
ATG    AG    Antigua und Barbuda
AUS    AU    Australien
AUT    AT    Österreich
AZE    AZ    Aserbaidschan
BDI    BI    Burundi
BEL    BE    Belgien
BEN    BJ    Benin
BFA    BF    Burkina Faso
BGD    BD    Bangladesch
BGR    BG    Bulgarien
BHR    BH    Bahrain
BHS    BS    Bahamas
BIH    BA    Bosnien und Herzegowin
BLM    BL    St. Barthélemy
BLR    BY    Weißrussland
BLZ    BZ    Belize
BMU    BM    Bermuda
BOL    BO    Bolivien
BRA    BR    Brasilien
BRB    BB    Barbados
BRN    BN    Brunei Darussalam
BTN    BT    Bhutan
BVT    BV    Bouvetinsel
BWA    BW    Botsuana
CAF    CF    Zentralafrikanische Republik
CAN    CA    Kanada
CCK    CC    Kokosinseln
CHE    CH    Schweiz
CHL    CL    Chile
CHN    CN    China
CIV    CI    Côte d´Ivoire
CMR    CM    Kamerun
COD    CD    Kongo, Dem. Rep.
COG    CG    Kongo
COK    CK    Cookinseln
COL    CO    Kolumbien
COM    KM    Komoren
CPV    CV    Kap Verde
CRI    CR    Costa Rica
CUB    CU    Kuba
CXR    CX    Weihnachtsinsel
CYM    KY    Kaimaninseln
CYP    CY    Zypern
CZE    CZ    Tschechische Republik
DEU    DE    Deutschland
DJI    DJ    Republik Dschibuti
DMA    DM    Dominica
DNK    DK    Dänemark
DOM    DO    Dominikanische Republik
DZA    DZ    Algerien
ECU    EC    Ecuador
EGY    EG    Ägypten
ERI    ER    Eritrea
ESH    EH    Westsahara
ESP    ES    Spanien
EST    EE    Estland
ETH    ET    Äthiopien
FIN    FI    Finnland
FJI    FJ    Fidschi
FLK    FK    Falklandinseln
FRA    FR    Frankreich
FRO    FO    Färöer
FSM    FM    Mikronesien, Föderierte Staaten von
GAB    GA    Gabun
GBR    GB    Vereinigtes Königreich
GEO    GE    Georgien
GGY    GG    Guernsey
GHA    GH    Ghana
GIB    GI    Gibraltar
GIN    GN    Guinea
GLP    GP    Guadeloupe
GMB    GM    Gambia
GNB    GW    Guinea-Bissau
GNQ    GQ    Äquatorialguinea
GRC    GR    Griechenland
GRD    GD    Grenada
GRL    GL    Grönland
GTM    GT    Guatemala
GUF    GF    Französisch Guiana
GUM    GU    Guam
GUY    GY    Guyana
HKG    HK    Hong Kong
HMD    HM    Heard Insel und McDonald Inseln
HND    HN    Honduras
HRV    HR    Kroatien
HTI    HT    Haiti
HUN    HU    Ungarn
IDN    ID    Indonesien
IMN    IM    Isle of Man
IND    IN    Indien
IOT    IO    Britische Territorien im Indischen Ozean
IRL    IE    Irland
IRN    IR    Iran, Islam. Rep.
IRQ    IQ    Irak
ISL    IS    Island
ISR    IL    Israel
ITA    IT    Italien
JAM    JM    Jamaika
JEY    JE    Jersey
JOR    JO    Jordanien
JPN    JP    Japan
KAZ    KZ    Kasachstan
KEN    KE    Kenia
KGZ    KG    Kirgisistan
KHM    KH    Kambodscha
KIR    KI    Kiribati
KNA    KN    St. Kitts und Nevis
KOR    KR    Korea, Rep.
KWT    KW    Kuwait
LAO    LA    Laos, Dem. Volksrep.
LBN    LB    Libanon
LBR    LR    Liberia
LBY    LY    Libysch-Arabische Dschamahirija
LCA    LC    St. Lucia
LIE    LI    Liechtenstein
LKA    LK    Sri Lanka
LSO    LS    Lesotho
LTU    LT    Litauen
LUX    LU    Luxemburg
LVA    LV    Lettland
MAC    MO    Macao
MAF    MF    St. Martin
MAR    MA    Marokko
MCO    MC    Monaco
MDA    MD    Moldau, Rep.
MDG    MG    Madagaskar
MDV    MV    Malediven
MEX    MX    Mexiko
MHL    MH    Marshallinseln
MKD    MK    Mazedonien, ehemalige jugoslawische Republik
MLI    ML    Mali
MLT    MT    Malta
MMR    MM    Myanmar
MNE    ME    Montenegro
MNG    MN    Mongolei
MNP    MP    Nördliche Marianen
MOZ    MZ    Mosambik
MRT    MR    Mauretanien
MSR    MS    Montserrat
MTQ    MQ    Martinique
MUS    MU    Mauritius
MWI    MW    Malawi
MYS    MY    Malaysia
MYT    YT    Mayotte
NAM    NA    Namibia
NCL    NC    Neukaledonien
NER    NE    Niger
NFK    NF    Norfolk Insel
NGA    NG    Nigeria
NIC    NI    Nicaragua
NIU    NU    Niue
NLD    NL    Niederlande
NOR    NO    Norwegen
NPL    NP    Nepal
NRU    NR    Nauru
NZL    NZ    Neuseeland
OMN    OM    Oman
PAK    PK    Pakistan
PAN    PA    Panama
PCN    PN    Pitcairn
PER    PE    Peru
PHL    PH    Philippinen
PLW    PW    Palau
PNG    PG    Papua-Neuguinea
POL    PL    Polen
PRI    PR    Puerto Rico
PRK    KP    Korea, Dem. Volksrep.
PRT    PT    Portugal
PRY    PY    Paraguay
PSE    PS    Palästinische Gebiete
PYF    PF    Französisch Polynesien
QAT    QA    Katar
REU    RE    Réunion
ROU    RO    Rumänien
RUS    RU    Russische Föderation
RWA    RW    Ruanda
SAU    SA    Saudi-Arabien
SDN    SD    Sudan
SEN    SN    Senegal
SGP    SG    Singapur
SGS    GS    Südgeorgien und die Südlichen Sandwichinseln
SHN    SH    Saint Helena
SJM    SJ    Svalbard und Jan Mayen
SLB    SB    Salomonen
SLE    SL    Sierra Leone
SLV    SV    El Salvador
SMR    SM    San Marino
SOM    SO    Somalia
SPM    PM    Saint Pierre und Miquelon
SRB    RS    Serbien
STP    ST    São Tomé und Príncipe
SUR    SR    Suriname
SVK    SK    Slowakei
SVN    SI    Slowenien
SWE    SE    Schweden
SWZ    SZ    Swasiland
SYC    SC    Seychellen
SYR    SY    Syrien, Arab. Rep.
TCA    TC    Turks- und Caicosinseln
TCD    TD    Tschad
TGO    TG    Togo
THA    TH    Thailand
TJK    TJ    Tadschikistan
TKL    TK    Tokelau
TKM    TM    Turkmenistan
TLS    TL    Timor-Leste
TON    TO    Tonga
TTO    TT    Trinidad und Tobago
TUN    TN    Tunesien
TUR    TR    Türkei
TUV    TV    Tuvalu
TWN    TW    Taiwan
TZA    TZ    Tansania, Vereinigte Rep.
UGA    UG    Uganda
UKR    UA    Ukraine
UMI    UM    United States Minor Outlying Islands
URY    UY    Uruguay
USA    US    Vereinigte Staaten von Amerika
UZB    UZ    Usbekistan
VAT    VA    Heiliger Stuhl
VCT    VC    St. Vincent und die Grenadinen
VEN    VE    Venezuela
VGB    VG    Britische Jungferninseln
VIR    VI    Amerikanische Jungferninseln
VNM    VN    Vietnam
VUT    VU    Vanuatu
WLF    WF    Wallis und Futuna
WSM    WS    Samoa
YEM    YE    Jemen
ZAF    ZA    Südafrika
ZMB    ZM    Sambia
ZWE    ZW    Simbabwe";

		$lines = explode("\n", $codes);
		$countries = array();

		foreach($lines AS $k => $v){
			$values = explode("    ", $v);
			$countries[$values[1]] = $values[2];
		}

		asort($countries);

		return $countries;
	}

	public static function getCountryToCode($code, $lang = "de"){
		$countries = self::getCountries($lang);

		return $countries[$code];
	}

	public static function getCodeToCountry($country, $lang = "de"){
		$countries = self::getCountries($lang);

		return array_search($country, $countries);
	}

	public static function getZones($code){
		$zones = array();
		$zones["DE"] = array(
			"1" => "Baden-Württemberg",
			"2" => "Bayern",
			"3" => "Berlin",
			"4" => "Brandenburg",
			"5" => "Bremen",
			"6" => "Hamburg",
			"7" => "Hessen",
			"8" => "Mecklenburg-Vorpommern",
			"9" => "Niedersachsen",
			"10" => "Nordrhein-Westfalen",
			"11" => "Rheinland-Pfalz",
			"12" => "Saarland",
			"13" => "Sachsen",
			"14" => "Sachsen-Anhalt",
			"15" => "Schleswig-Holstein",
			"16" => "Thüringen");
		
		$zones["AT"] = array(
			"1" => "Burgenland",
			"2" => "Kärnten",
			"3" => "Niederösterreich",
			"4" => "Oberösterreich",
			"5" => "Salzburg",
			"6" => "Steiermark",
			"7" => "Tirol",
			"8" => "Vorarlberg",
			"9" => "Wien");
		
		return $zones[$code];
	}
	
	public static function getDistricts($code, $zone){
		$csv = array("AT" => '1;"Burgenland";101;"Eisenstadt(Stadt)"
1;"Burgenland";102;"Rust(Stadt)"
1;"Burgenland";103;"Eisenstadt-Umgebung"
1;"Burgenland";104;"Güssing"
1;"Burgenland";105;"Jennersdorf"
1;"Burgenland";106;"Mattersburg"
1;"Burgenland";107;"Neusiedl am See"
1;"Burgenland";108;"Oberpullendorf"
1;"Burgenland";109;"Oberwart"
2;"Kärnten";201;"Klagenfurt(Stadt)"
2;"Kärnten";202;"Villach(Stadt)"
2;"Kärnten";203;"Hermagor"
2;"Kärnten";204;"Klagenfurt Land"
2;"Kärnten";205;"Sankt Veit an der Glan"
2;"Kärnten";206;"Spittal an der Drau"
2;"Kärnten";207;"Villach Land"
2;"Kärnten";208;"Völkermarkt"
2;"Kärnten";209;"Wolfsberg"
2;"Kärnten";210;"Feldkirchen"
3;"Niederösterreich";301;"Krems an der Donau(Stadt)"
3;"Niederösterreich";302;"Sankt Pölten(Stadt)"
3;"Niederösterreich";303;"Waidhofen an der Ybbs(Stadt)"
3;"Niederösterreich";304;"Wiener Neustadt(Stadt)"
3;"Niederösterreich";305;"Amstetten"
3;"Niederösterreich";306;"Baden"
3;"Niederösterreich";307;"Bruck an der Leitha"
3;"Niederösterreich";308;"Gänserndorf"
3;"Niederösterreich";309;"Gmünd"
3;"Niederösterreich";310;"Hollabrunn"
3;"Niederösterreich";311;"Horn"
3;"Niederösterreich";312;"Korneuburg"
3;"Niederösterreich";313;"Krems(Land)"
3;"Niederösterreich";314;"Lilienfeld"
3;"Niederösterreich";315;"Melk"
3;"Niederösterreich";316;"Mistelbach"
3;"Niederösterreich";317;"Mödling"
3;"Niederösterreich";318;"Neunkirchen"
3;"Niederösterreich";319;"Sankt Pölten(Land)"
3;"Niederösterreich";320;"Scheibbs"
3;"Niederösterreich";321;"Tulln"
3;"Niederösterreich";322;"Waidhofen an der Thaya"
3;"Niederösterreich";323;"Wiener Neustadt(Land)"
3;"Niederösterreich";324;"Wien-Umgebung"
3;"Niederösterreich";325;"Zwettl"
4;"Oberösterreich";401;"Linz(Stadt)"
4;"Oberösterreich";402;"Steyr(Stadt)"
4;"Oberösterreich";403;"Wels(Stadt)"
4;"Oberösterreich";404;"Braunau am Inn"
4;"Oberösterreich";405;"Eferding"
4;"Oberösterreich";406;"Freistadt"
4;"Oberösterreich";407;"Gmunden"
4;"Oberösterreich";408;"Grieskirchen"
4;"Oberösterreich";409;"Kirchdorf an der Krems"
4;"Oberösterreich";410;"Linz-Land"
4;"Oberösterreich";411;"Perg"
4;"Oberösterreich";412;"Ried im Innkreis"
4;"Oberösterreich";413;"Rohrbach"
4;"Oberösterreich";414;"Schärding"
4;"Oberösterreich";415;"Steyr-Land"
4;"Oberösterreich";416;"Urfahr-Umgebung"
4;"Oberösterreich";417;"Vöcklabruck"
4;"Oberösterreich";418;"Wels-Land"
5;"Salzburg";501;"Salzburg(Stadt)"
5;"Salzburg";502;"Hallein"
5;"Salzburg";503;"Salzburg-Umgebung"
5;"Salzburg";504;"Sankt Johann im Pongau"
5;"Salzburg";505;"Tamsweg"
5;"Salzburg";506;"Zell am See"
6;"Steiermark";601;"Graz(Stadt)"
6;"Steiermark";602;"Bruck an der Mur"
6;"Steiermark";603;"Deutschlandsberg"
6;"Steiermark";604;"Feldbach"
6;"Steiermark";605;"Fürstenfeld"
6;"Steiermark";606;"Graz-Umgebung"
6;"Steiermark";607;"Hartberg"
6;"Steiermark";610;"Leibnitz"
6;"Steiermark";611;"Leoben"
6;"Steiermark";612;"Liezen"
6;"Steiermark";613;"Mürzzuschlag"
6;"Steiermark";614;"Murau"
6;"Steiermark";615;"Radkersburg"
6;"Steiermark";616;"Voitsberg"
6;"Steiermark";617;"Weiz"
6;"Steiermark";620;"Murtal"
7;"Tirol";701;"Innsbruck-Stadt"
7;"Tirol";702;"Imst"
7;"Tirol";703;"Innsbruck-Land"
7;"Tirol";704;"Kitzbühel"
7;"Tirol";705;"Kufstein"
7;"Tirol";706;"Landeck"
7;"Tirol";707;"Lienz"
7;"Tirol";708;"Reutte"
7;"Tirol";709;"Schwaz"
8;"Vorarlberg";801;"Bludenz"
8;"Vorarlberg";802;"Bregenz"
8;"Vorarlberg";803;"Dornbirn"
8;"Vorarlberg";804;"Feldkirch"
9;"Wien";900;"Wien(Stadt)"
9;"Wien";901;"Wien  1.,Innere Stadt"
9;"Wien";902;"Wien  2.,Leopoldstadt"
9;"Wien";903;"Wien  3.,Landstraße"
9;"Wien";904;"Wien  4.,Wieden"
9;"Wien";905;"Wien  5.,Margareten"
9;"Wien";906;"Wien  6.,Mariahilf"
9;"Wien";907;"Wien  7.,Neubau"
9;"Wien";908;"Wien  8.,Josefstadt"
9;"Wien";909;"Wien  9.,Alsergrund"
9;"Wien";910;"Wien 10.,Favoriten"
9;"Wien";911;"Wien 11.,Simmering"
9;"Wien";912;"Wien 12.,Meidling"
9;"Wien";913;"Wien 13.,Hietzing"
9;"Wien";914;"Wien 14.,Penzing"
9;"Wien";915;"Wien 15.,Rudolfsheim-Fünfhaus"
9;"Wien";916;"Wien 16.,Ottakring"
9;"Wien";917;"Wien 17.,Hernals"
9;"Wien";918;"Wien 18.,Währing"
9;"Wien";919;"Wien 19.,Döbling"
9;"Wien";920;"Wien 20.,Brigittenau"
9;"Wien";921;"Wien 21.,Floridsdorf"
9;"Wien";922;"Wien 22.,Donaustadt"
9;"Wien";923;"Wien 23.,Liesing"');

		$zones = array();
		$ex = explode("\n", $csv[$code]);
		foreach($ex AS $line){
			$cells = explode(";", $line);
			
			if($cells[0] != $zone)
				continue;
			
			$zones[$cells[2]] = trim($cells[3], "\"");
		}
		
		return $zones;
	}
}
?>