<?php
/**
* @version    $Id$ 
* @package    JoomlaTracks
* @copyright  Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license    GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class TracksCountries 
{
	function getCountries()
	{
		$country["AFG"]= Array( "iso2" => "AF", "name" => "Afghanistan, Islamic Republic ");
		$country["ALA"]= Array( "iso2" => "AX", "name" => "Åland Islands");
		$country["ALB"]= Array( "iso2" => "AL", "name" => "Albania, Republic of");
		$country["DZA"]= Array( "iso2" => "DZ", "name" => "Algeria, People's Democratic R");
		$country["ASM"]= Array( "iso2" => "AS", "name" => "American Samoa");
		$country["AND"]= Array( "iso2" => "AD", "name" => "Andorra, Principality of");
		$country["AGO"]= Array( "iso2" => "AO", "name" => "Angola, Republic of");
		$country["AIA"]= Array( "iso2" => "AI", "name" => "Anguilla");
		$country["ATA"]= Array( "iso2" => "AQ", "name" => "Antarctica (the territory Sout");
		$country["ATG"]= Array( "iso2" => "AG", "name" => "Antigua and Barbuda");
		$country["ARG"]= Array( "iso2" => "AR", "name" => "Argentina, Argentine Republic");
		$country["ARM"]= Array( "iso2" => "AM", "name" => "Armenia, Republic of");
		$country["ABW"]= Array( "iso2" => "AW", "name" => "Aruba");
		$country["AUS"]= Array( "iso2" => "AU", "name" => "Australia, Commonwealth of");
		$country["AUT"]= Array( "iso2" => "AT", "name" => "Austria, Republic of");
		$country["AZE"]= Array( "iso2" => "AZ", "name" => "Azerbaijan, Republic of");
		$country["BHS"]= Array( "iso2" => "BS", "name" => "Bahamas, Commonwealth of the");
		$country["BHR"]= Array( "iso2" => "BH", "name" => "Bahrain, Kingdom of");
		$country["BGD"]= Array( "iso2" => "BD", "name" => "Bangladesh, People's Republic ");
		$country["BRB"]= Array( "iso2" => "BB", "name" => "Barbados");
		$country["BLR"]= Array( "iso2" => "BY", "name" => "Belarus, Republic of");
		$country["BEL"]= Array( "iso2" => "BE", "name" => "Belgium, Kingdom of");
		$country["BLZ"]= Array( "iso2" => "BZ", "name" => "Belize");
		$country["BEN"]= Array( "iso2" => "BJ", "name" => "Benin, Republic of");
		$country["BMU"]= Array( "iso2" => "BM", "name" => "Bermuda");
		$country["BTN"]= Array( "iso2" => "BT", "name" => "Bhutan, Kingdom of");
		$country["BOL"]= Array( "iso2" => "BO", "name" => "Bolivia, Republic of");
		$country["BIH"]= Array( "iso2" => "BA", "name" => "Bosnia and Herzegovina");
		$country["BWA"]= Array( "iso2" => "BW", "name" => "Botswana, Republic of");
		$country["BVT"]= Array( "iso2" => "BV", "name" => "Bouvet Island (Bouvetoya)");
		$country["BRA"]= Array( "iso2" => "BR", "name" => "Brazil, Federative Republic of");
		$country["IOT"]= Array( "iso2" => "IO", "name" => "British Indian Ocean Territory");
		$country["VGB"]= Array( "iso2" => "VG", "name" => "British Virgin Islands");
		$country["BRN"]= Array( "iso2" => "BN", "name" => "Brunei Darussalam");
		$country["BGR"]= Array( "iso2" => "BG", "name" => "Bulgaria, Republic of");
		$country["BFA"]= Array( "iso2" => "BF", "name" => "Burkina Faso");
		$country["BDI"]= Array( "iso2" => "BI", "name" => "Burundi, Republic of");
		$country["KHM"]= Array( "iso2" => "KH", "name" => "Cambodia, Kingdom of");
		$country["CMR"]= Array( "iso2" => "CM", "name" => "Cameroon, Republic of");
		$country["CAN"]= Array( "iso2" => "CA", "name" => "Canada");
		$country["CPV"]= Array( "iso2" => "CV", "name" => "Cape Verde, Republic of");
		$country["CYM"]= Array( "iso2" => "KY", "name" => "Cayman Islands");
		$country["CAF"]= Array( "iso2" => "CF", "name" => "Central African Republic");
		$country["TCD"]= Array( "iso2" => "TD", "name" => "Chad, Republic of");
		$country["CHL"]= Array( "iso2" => "CL", "name" => "Chile, Republic of");
		$country["CHN"]= Array( "iso2" => "CN", "name" => "China, People's Republic of");
		$country["CXR"]= Array( "iso2" => "CX", "name" => "Christmas Island");
		$country["CCK"]= Array( "iso2" => "CC", "name" => "Cocos (Keeling) Islands");
		$country["COL"]= Array( "iso2" => "CO", "name" => "Colombia, Republic of");
		$country["COM"]= Array( "iso2" => "KM", "name" => "Comoros, Union of the");
		$country["COD"]= Array( "iso2" => "CD", "name" => "Congo, Democratic Republic of ");
		$country["COG"]= Array( "iso2" => "CG", "name" => "Congo, Republic of the");
		$country["COK"]= Array( "iso2" => "CK", "name" => "Cook Islands");
		$country["CRI"]= Array( "iso2" => "CR", "name" => "Costa Rica, Republic of");
		$country["CIV"]= Array( "iso2" => "CI", "name" => "Cote d'Ivoire, Republic of");
		$country["HRV"]= Array( "iso2" => "HR", "name" => "Croatia, Republic of");
		$country["CUB"]= Array( "iso2" => "CU", "name" => "Cuba, Republic of");
		$country["CYP"]= Array( "iso2" => "CY", "name" => "Cyprus, Republic of");
		$country["CZE"]= Array( "iso2" => "CZ", "name" => "Czech Republic");
		$country["DNK"]= Array( "iso2" => "DK", "name" => "Denmark, Kingdom of");
		$country["DJI"]= Array( "iso2" => "DJ", "name" => "Djibouti, Republic of");
		$country["DMA"]= Array( "iso2" => "DM", "name" => "Dominica, Commonwealth of");
		$country["DOM"]= Array( "iso2" => "DO", "name" => "Dominican Republic");
		$country["ECU"]= Array( "iso2" => "EC", "name" => "Ecuador, Republic of");
		$country["EGY"]= Array( "iso2" => "EG", "name" => "Egypt, Arab Republic of");
		$country["SLV"]= Array( "iso2" => "SV", "name" => "El Salvador, Republic of");
		$country["GNQ"]= Array( "iso2" => "GQ", "name" => "Equatorial Guinea, Republic of");
		$country["ERI"]= Array( "iso2" => "ER", "name" => "Eritrea, State of");
		$country["EST"]= Array( "iso2" => "EE", "name" => "Estonia, Republic of");
		$country["ETH"]= Array( "iso2" => "ET", "name" => "Ethiopia, Federal Democratic R");
		$country["FRO"]= Array( "iso2" => "FO", "name" => "Faroe Islands");
		$country["FLK"]= Array( "iso2" => "FK", "name" => "Falkland Islands (Malvinas)");
		$country["FJI"]= Array( "iso2" => "FJ", "name" => "Fiji, Republic of the Fiji Isl");
		$country["FIN"]= Array( "iso2" => "FI", "name" => "Finland, Republic of");
		$country["FRA"]= Array( "iso2" => "FR", "name" => "France, French Republic");
		$country["GUF"]= Array( "iso2" => "GF", "name" => "French Guiana");
		$country["PYF"]= Array( "iso2" => "PF", "name" => "French Polynesia");
		$country["ATF"]= Array( "iso2" => "TF", "name" => "French Southern Territories");
		$country["GAB"]= Array( "iso2" => "GA", "name" => "Gabon, Gabonese Republic");
		$country["GMB"]= Array( "iso2" => "GM", "name" => "Gambia, Republic of the");
		$country["GEO"]= Array( "iso2" => "GE", "name" => "Georgia");
		$country["DEU"]= Array( "iso2" => "DE", "name" => "Germany, Federal Republic of");
		$country["GHA"]= Array( "iso2" => "GH", "name" => "Ghana, Republic of");
		$country["GIB"]= Array( "iso2" => "GI", "name" => "Gibraltar");
		$country["GRC"]= Array( "iso2" => "GR", "name" => "Greece, Hellenic Republic");
		$country["GRL"]= Array( "iso2" => "GL", "name" => "Greenland");
		$country["GRD"]= Array( "iso2" => "GD", "name" => "Grenada");
		$country["GLP"]= Array( "iso2" => "GP", "name" => "Guadeloupe");
		$country["GUM"]= Array( "iso2" => "GU", "name" => "Guam");
		$country["GTM"]= Array( "iso2" => "GT", "name" => "Guatemala, Republic of");
		$country["GGY"]= Array( "iso2" => "GG", "name" => "Guernsey, Bailiwick of");
		$country["GIN"]= Array( "iso2" => "GN", "name" => "Guinea, Republic of");
		$country["GNB"]= Array( "iso2" => "GW", "name" => "Guinea-Bissau, Republic of");
		$country["GUY"]= Array( "iso2" => "GY", "name" => "Guyana, Co-operative Republic ");
		$country["HTI"]= Array( "iso2" => "HT", "name" => "Haiti, Republic of");
		$country["HMD"]= Array( "iso2" => "HM", "name" => "Heard Island and McDonald Isla");
		$country["VAT"]= Array( "iso2" => "VA", "name" => "Holy See (Vatican City State)");
		$country["HND"]= Array( "iso2" => "HN", "name" => "Honduras, Republic of");
		$country["HKG"]= Array( "iso2" => "HK", "name" => "Hong Kong, Special Administrat");
		$country["HUN"]= Array( "iso2" => "HU", "name" => "Hungary, Republic of");
		$country["ISL"]= Array( "iso2" => "IS", "name" => "Iceland, Republic of");
		$country["IND"]= Array( "iso2" => "IN", "name" => "India, Republic of");
		$country["IDN"]= Array( "iso2" => "ID", "name" => "Indonesia, Republic of");
		$country["IRN"]= Array( "iso2" => "IR", "name" => "Iran, Islamic Republic of");
		$country["IRQ"]= Array( "iso2" => "IQ", "name" => "Iraq, Republic of");
		$country["IRL"]= Array( "iso2" => "IE", "name" => "Ireland");
		$country["IMN"]= Array( "iso2" => "IM", "name" => "Isle of Man");
		$country["ISR"]= Array( "iso2" => "IL", "name" => "Israel, State of");
		$country["ITA"]= Array( "iso2" => "IT", "name" => "Italy, Italian Republic");
		$country["JAM"]= Array( "iso2" => "JM", "name" => "Jamaica");
		$country["JPN"]= Array( "iso2" => "JP", "name" => "Japan");
		$country["JEY"]= Array( "iso2" => "JE", "name" => "Jersey, Bailiwick of");
		$country["JOR"]= Array( "iso2" => "JO", "name" => "Jordan, Hashemite Kingdom of");
		$country["KAZ"]= Array( "iso2" => "KZ", "name" => "Kazakhstan, Republic of");
		$country["KEN"]= Array( "iso2" => "KE", "name" => "Kenya, Republic of");
		$country["KIR"]= Array( "iso2" => "KI", "name" => "Kiribati, Republic of");
		$country["PRK"]= Array( "iso2" => "KP", "name" => "Korea, Democratic People's Rep");
		$country["KOR"]= Array( "iso2" => "KR", "name" => "Korea, Republic of");
		$country["KWT"]= Array( "iso2" => "KW", "name" => "Kuwait, State of");
		$country["KGZ"]= Array( "iso2" => "KG", "name" => "Kyrgyz Republic");
		$country["LAO"]= Array( "iso2" => "LA", "name" => "Lao People's Democratic Republ");
		$country["LVA"]= Array( "iso2" => "LV", "name" => "Latvia, Republic of");
		$country["LBN"]= Array( "iso2" => "LB", "name" => "Lebanon, Lebanese Republic");
		$country["LSO"]= Array( "iso2" => "LS", "name" => "Lesotho, Kingdom of");
		$country["LBR"]= Array( "iso2" => "LR", "name" => "Liberia, Republic of");
		$country["LBY"]= Array( "iso2" => "LY", "name" => "Libyan Arab Jamahiriya");
		$country["LIE"]= Array( "iso2" => "LI", "name" => "Liechtenstein, Principality of");
		$country["LTU"]= Array( "iso2" => "LT", "name" => "Lithuania, Republic of");
		$country["LUX"]= Array( "iso2" => "LU", "name" => "Luxembourg, Grand Duchy of");
		$country["MAC"]= Array( "iso2" => "MO", "name" => "Macao, Special Administrative ");
		$country["MKD"]= Array( "iso2" => "MK", "name" => "Macedonia, the former Yugoslav");
		$country["MDG"]= Array( "iso2" => "MG", "name" => "Madagascar, Republic of");
		$country["MWI"]= Array( "iso2" => "MW", "name" => "Malawi, Republic of");
		$country["MYS"]= Array( "iso2" => "MY", "name" => "Malaysia");
		$country["MDV"]= Array( "iso2" => "MV", "name" => "Maldives, Republic of");
		$country["MLI"]= Array( "iso2" => "ML", "name" => "Mali, Republic of");
		$country["MLT"]= Array( "iso2" => "MT", "name" => "Malta, Republic of");
		$country["MHL"]= Array( "iso2" => "MH", "name" => "Marshall Islands, Republic of ");
		$country["MTQ"]= Array( "iso2" => "MQ", "name" => "Martinique");
		$country["MRT"]= Array( "iso2" => "MR", "name" => "Mauritania, Islamic Republic o");
		$country["MUS"]= Array( "iso2" => "MU", "name" => "Mauritius, Republic of");
		$country["MYT"]= Array( "iso2" => "YT", "name" => "Mayotte");
		$country["MEX"]= Array( "iso2" => "MX", "name" => "Mexico, United Mexican States");
		$country["FSM"]= Array( "iso2" => "FM", "name" => "Micronesia, Federated States o");
		$country["MDA"]= Array( "iso2" => "MD", "name" => "Moldova, Republic of");
		$country["MCO"]= Array( "iso2" => "MC", "name" => "Monaco, Principality of");
		$country["MNG"]= Array( "iso2" => "MN", "name" => "Mongolia");
		$country["MNE"]= Array( "iso2" => "ME", "name" => "Montenegro, Republic of");
		$country["MSR"]= Array( "iso2" => "MS", "name" => "Montserrat");
		$country["MAR"]= Array( "iso2" => "MA", "name" => "Morocco, Kingdom of");
		$country["MOZ"]= Array( "iso2" => "MZ", "name" => "Mozambique, Republic of");
		$country["MMR"]= Array( "iso2" => "MM", "name" => "Myanmar, Union of");
		$country["NAM"]= Array( "iso2" => "NA", "name" => "Namibia, Republic of");
		$country["NRU"]= Array( "iso2" => "NR", "name" => "Nauru, Republic of");
		$country["NPL"]= Array( "iso2" => "NP", "name" => "Nepal, State of");
		$country["ANT"]= Array( "iso2" => "AN", "name" => "Netherlands Antilles");
		$country["NLD"]= Array( "iso2" => "NL", "name" => "Netherlands, Kingdom of the");
		$country["NCL"]= Array( "iso2" => "NC", "name" => "New Caledonia");
		$country["NZL"]= Array( "iso2" => "NZ", "name" => "New Zealand");
		$country["NIC"]= Array( "iso2" => "NI", "name" => "Nicaragua, Republic of");
		$country["NER"]= Array( "iso2" => "NE", "name" => "Niger, Republic of");
		$country["NGA"]= Array( "iso2" => "NG", "name" => "Nigeria, Federal Republic of");
		$country["NIU"]= Array( "iso2" => "NU", "name" => "Niue");
		$country["NFK"]= Array( "iso2" => "NF", "name" => "Norfolk Island");
		$country["MNP"]= Array( "iso2" => "MP", "name" => "Northern Mariana Islands, Comm");
		$country["NOR"]= Array( "iso2" => "NO", "name" => "Norway, Kingdom of");
		$country["OMN"]= Array( "iso2" => "OM", "name" => "Oman, Sultanate of");
		$country["PAK"]= Array( "iso2" => "PK", "name" => "Pakistan, Islamic Republic of");
		$country["PLW"]= Array( "iso2" => "PW", "name" => "Palau, Republic of");
		$country["PSE"]= Array( "iso2" => "PS", "name" => "Palestinian Territory, Occupie");
		$country["PAN"]= Array( "iso2" => "PA", "name" => "Panama, Republic of");
		$country["PNG"]= Array( "iso2" => "PG", "name" => "Papua New Guinea, Independent ");
		$country["PRY"]= Array( "iso2" => "PY", "name" => "Paraguay, Republic of");
		$country["PER"]= Array( "iso2" => "PE", "name" => "Peru, Republic of");
		$country["PHL"]= Array( "iso2" => "PH", "name" => "Philippines, Republic of the");
		$country["PCN"]= Array( "iso2" => "PN", "name" => "Pitcairn Islands");
		$country["POL"]= Array( "iso2" => "PL", "name" => "Poland, Republic of");
		$country["PRT"]= Array( "iso2" => "PT", "name" => "Portugal, Portuguese Republic");
		$country["PRI"]= Array( "iso2" => "PR", "name" => "Puerto Rico, Commonwealth of");
		$country["QAT"]= Array( "iso2" => "QA", "name" => "Qatar, State of");
		$country["REU"]= Array( "iso2" => "RE", "name" => "Reunion");
		$country["ROU"]= Array( "iso2" => "RO", "name" => "Romania");
		$country["RUS"]= Array( "iso2" => "RU", "name" => "Russian Federation");
		$country["RWA"]= Array( "iso2" => "RW", "name" => "Rwanda, Republic of");
		$country["BLM"]= Array( "iso2" => "BL", "name" => "Saint Barthelemy");
		$country["SHN"]= Array( "iso2" => "SH", "name" => "Saint Helena");
		$country["KNA"]= Array( "iso2" => "KN", "name" => "Saint Kitts and Nevis, Federat");
		$country["LCA"]= Array( "iso2" => "LC", "name" => "Saint Lucia");
		$country["MAF"]= Array( "iso2" => "MF", "name" => "Saint Martin");
		$country["SPM"]= Array( "iso2" => "PM", "name" => "Saint Pierre and Miquelon");
		$country["VCT"]= Array( "iso2" => "VC", "name" => "Saint Vincent and the Grenadin");
		$country["WSM"]= Array( "iso2" => "WS", "name" => "Samoa, Independent State of");
		$country["SMR"]= Array( "iso2" => "SM", "name" => "San Marino, Republic of");
		$country["STP"]= Array( "iso2" => "ST", "name" => "Sao Tome and Principe, Democra");
		$country["SAU"]= Array( "iso2" => "SA", "name" => "Saudi Arabia, Kingdom of");
		$country["SEN"]= Array( "iso2" => "SN", "name" => "Senegal, Republic of");
		$country["SRB"]= Array( "iso2" => "RS", "name" => "Serbia, Republic of");
		$country["SYC"]= Array( "iso2" => "SC", "name" => "Seychelles, Republic of");
		$country["SLE"]= Array( "iso2" => "SL", "name" => "Sierra Leone, Republic of");
		$country["SGP"]= Array( "iso2" => "SG", "name" => "Singapore, Republic of");
		$country["SVK"]= Array( "iso2" => "SK", "name" => "Slovakia (Slovak Republic)");
		$country["SVN"]= Array( "iso2" => "SI", "name" => "Slovenia, Republic of");
		$country["SLB"]= Array( "iso2" => "SB", "name" => "Solomon Islands");
		$country["SOM"]= Array( "iso2" => "SO", "name" => "Somalia, Somali Republic");
		$country["ZAF"]= Array( "iso2" => "ZA", "name" => "South Africa, Republic of");
		$country["SGS"]= Array( "iso2" => "GS", "name" => "South Georgia and the South Sa");
		$country["ESP"]= Array( "iso2" => "ES", "name" => "Spain, Kingdom of");
		$country["LKA"]= Array( "iso2" => "LK", "name" => "Sri Lanka, Democratic Socialis");
		$country["SDN"]= Array( "iso2" => "SD", "name" => "Sudan, Republic of");
		$country["SUR"]= Array( "iso2" => "SR", "name" => "Suriname, Republic of");
		$country["SJM"]= Array( "iso2" => "SJ", "name" => "Svalbard & Jan Mayen Islands");
		$country["SWZ"]= Array( "iso2" => "SZ", "name" => "Swaziland, Kingdom of");
		$country["SWE"]= Array( "iso2" => "SE", "name" => "Sweden, Kingdom of");
		$country["CHE"]= Array( "iso2" => "CH", "name" => "Switzerland, Swiss Confederati");
		$country["SYR"]= Array( "iso2" => "SY", "name" => "Syrian Arab Republic");
		$country["TWN"]= Array( "iso2" => "TW", "name" => "Taiwan");
		$country["TJK"]= Array( "iso2" => "TJ", "name" => "Tajikistan, Republic of");
		$country["TZA"]= Array( "iso2" => "TZ", "name" => "Tanzania, United Republic of");
		$country["THA"]= Array( "iso2" => "TH", "name" => "Thailand, Kingdom of");
		$country["TLS"]= Array( "iso2" => "TL", "name" => "Timor-Leste, Democratic Republ");
		$country["TGO"]= Array( "iso2" => "TG", "name" => "Togo, Togolese Republic");
		$country["TKL"]= Array( "iso2" => "TK", "name" => "Tokelau");
		$country["TON"]= Array( "iso2" => "TO", "name" => "Tonga, Kingdom of");
		$country["TTO"]= Array( "iso2" => "TT", "name" => "Trinidad and Tobago, Republic ");
		$country["TUN"]= Array( "iso2" => "TN", "name" => "Tunisia, Tunisian Republic");
		$country["TUR"]= Array( "iso2" => "TR", "name" => "Turkey, Republic of");
		$country["TKM"]= Array( "iso2" => "TM", "name" => "Turkmenistan");
		$country["TCA"]= Array( "iso2" => "TC", "name" => "Turks and Caicos Islands");
		$country["TUV"]= Array( "iso2" => "TV", "name" => "Tuvalu");
		$country["UGA"]= Array( "iso2" => "UG", "name" => "Uganda, Republic of");
		$country["UKR"]= Array( "iso2" => "UA", "name" => "Ukraine");
		$country["ARE"]= Array( "iso2" => "AE", "name" => "United Arab Emirates");
		$country["GBR"]= Array( "iso2" => "GB", "name" => "United Kingdom of Great Britai");
		$country["USA"]= Array( "iso2" => "US", "name" => "United States of America");
		$country["UMI"]= Array( "iso2" => "UM", "name" => "United States Minor Outlying I");
		$country["VIR"]= Array( "iso2" => "VI", "name" => "United States Virgin Islands");
		$country["URY"]= Array( "iso2" => "UY", "name" => "Uruguay, Eastern Republic of");
		$country["UZB"]= Array( "iso2" => "UZ", "name" => "Uzbekistan, Republic of");
		$country["VUT"]= Array( "iso2" => "VU", "name" => "Vanuatu, Republic of");
		$country["VEN"]= Array( "iso2" => "VE", "name" => "Venezuela, Bolivarian Republic");
		$country["VNM"]= Array( "iso2" => "VN", "name" => "Vietnam, Socialist Republic of");
		$country["WLF"]= Array( "iso2" => "WF", "name" => "Wallis and Futuna");
		$country["ESH"]= Array( "iso2" => "EH", "name" => "Western Sahara");
		$country["YEM"]= Array( "iso2" => "YE", "name" => "Yemen");
		$country["ZMB"]= Array( "iso2" => "ZM", "name" => "Zambia, Republic of");
		$country["ZWE"]= Array( "iso2" => "ZW", "name" => "Zimbabwe, Republic of");
    return $country;
	}
	
	function getCountryOptions($value_tag = 'value', $text_tag = 'text')
	{
		$countries = self::getCountries();
		$options = array();
		foreach ($countries AS $k => $c)
		{
			$options[] = JHTML::_('select.option', $k, $c['name'], $value_tag, $text_tag);
		}
		return $options;
	}
	
  function convertIso2to3($iso_code_2)
	{
		$convert2to3["AF"]="AFG";
		$convert2to3["AX"]="ALA";
		$convert2to3["AL"]="ALB";
		$convert2to3["DZ"]="DZA";
		$convert2to3["AS"]="ASM";
		$convert2to3["AD"]="AND";
		$convert2to3["AO"]="AGO";
		$convert2to3["AI"]="AIA";
		$convert2to3["AQ"]="ATA";
		$convert2to3["AG"]="ATG";
		$convert2to3["AR"]="ARG";
		$convert2to3["AM"]="ARM";
		$convert2to3["AW"]="ABW";
		$convert2to3["AU"]="AUS";
		$convert2to3["AT"]="AUT";
		$convert2to3["AZ"]="AZE";
		$convert2to3["BS"]="BHS";
		$convert2to3["BH"]="BHR";
		$convert2to3["BD"]="BGD";
		$convert2to3["BB"]="BRB";
		$convert2to3["BY"]="BLR";
		$convert2to3["BE"]="BEL";
		$convert2to3["BZ"]="BLZ";
		$convert2to3["BJ"]="BEN";
		$convert2to3["BM"]="BMU";
		$convert2to3["BT"]="BTN";
		$convert2to3["BO"]="BOL";
		$convert2to3["BA"]="BIH";
		$convert2to3["BW"]="BWA";
		$convert2to3["BV"]="BVT";
		$convert2to3["BR"]="BRA";
		$convert2to3["IO"]="IOT";
		$convert2to3["BN"]="BRN";
		$convert2to3["BG"]="BGR";
		$convert2to3["BF"]="BFA";
		$convert2to3["BI"]="BDI";
		$convert2to3["KH"]="KHM";
		$convert2to3["CM"]="CMR";
		$convert2to3["CA"]="CAN";
		$convert2to3["CV"]="CPV";
		$convert2to3["KY"]="CYM";
		$convert2to3["CF"]="CAF";
		$convert2to3["TD"]="TCD";
		$convert2to3["CL"]="CHL";
		$convert2to3["CN"]="CHN";
		$convert2to3["CX"]="CXR";
		$convert2to3["CC"]="CCK";
		$convert2to3["CO"]="COL";
		$convert2to3["KM"]="COM";
		$convert2to3["CG"]="COG";
		$convert2to3["CD"]="COD";
		$convert2to3["CK"]="COK";
		$convert2to3["CR"]="CRI";
		$convert2to3["CI"]="CIV";
		$convert2to3["HR"]="HRV";
		$convert2to3["CU"]="CUB";
		$convert2to3["CY"]="CYP";
		$convert2to3["CZ"]="CZE";
		$convert2to3["DK"]="DNK";
		$convert2to3["DJ"]="DJI";
		$convert2to3["DM"]="DMA";
		$convert2to3["DO"]="DOM";
		$convert2to3["EC"]="ECU";
		$convert2to3["EG"]="EGY";
		$convert2to3["SV"]="SLV";
		$convert2to3["GQ"]="GNQ";
		$convert2to3["ER"]="ERI";
		$convert2to3["EE"]="EST";
		$convert2to3["ET"]="ETH";
		$convert2to3["FK"]="FLK";
		$convert2to3["FO"]="FRO";
		$convert2to3["FJ"]="FJI";
		$convert2to3["FI"]="FIN";
		$convert2to3["FR"]="FRA";
		$convert2to3["GF"]="GUF";
		$convert2to3["PF"]="PYF";
		$convert2to3["TF"]="ATF";
		$convert2to3["GA"]="GAB";
		$convert2to3["GM"]="GMB";
		$convert2to3["GE"]="GEO";
		$convert2to3["DE"]="DEU";
		$convert2to3["GH"]="GHA";
		$convert2to3["GI"]="GIB";
		$convert2to3["GR"]="GRC";
		$convert2to3["GL"]="GRL";
		$convert2to3["GD"]="GRD";
		$convert2to3["GP"]="GLP";
		$convert2to3["GU"]="GUM";
		$convert2to3["GT"]="GTM";
		$convert2to3["GG"]="GGY";
		$convert2to3["GN"]="GIN";
		$convert2to3["GW"]="GNB";
		$convert2to3["GY"]="GUY";
		$convert2to3["HT"]="HTI";
		$convert2to3["HM"]="HMD";
		$convert2to3["VA"]="VAT";
		$convert2to3["HN"]="HND";
		$convert2to3["HK"]="HKG";
		$convert2to3["HU"]="HUN";
		$convert2to3["IS"]="ISL";
		$convert2to3["IN"]="IND";
		$convert2to3["ID"]="IDN";
		$convert2to3["IR"]="IRN";
		$convert2to3["IQ"]="IRQ";
		$convert2to3["IE"]="IRL";
		$convert2to3["IM"]="IMM";
		$convert2to3["IL"]="ISR";
		$convert2to3["IT"]="ITA";
		$convert2to3["JM"]="JAM";
		$convert2to3["JP"]="JPN";
		$convert2to3["JE"]="JEY";
		$convert2to3["JO"]="JOR";
		$convert2to3["KZ"]="KAZ";
		$convert2to3["KE"]="KEN";
		$convert2to3["KI"]="KIR";
		$convert2to3["KP"]="PRK";
		$convert2to3["KR"]="KOR";
		$convert2to3["KW"]="KWT";
		$convert2to3["KG"]="KGZ";
		$convert2to3["LA"]="LAO";
		$convert2to3["LV"]="LVA";
		$convert2to3["LB"]="LBN";
		$convert2to3["LS"]="LSO";
		$convert2to3["LR"]="LBR";
		$convert2to3["LY"]="LBY";
		$convert2to3["LI"]="LIE";
		$convert2to3["LT"]="LTU";
		$convert2to3["LU"]="LUX";
		$convert2to3["MO"]="MAC";
		$convert2to3["MK"]="MKD";
		$convert2to3["MG"]="MDG";
		$convert2to3["MW"]="MWI";
		$convert2to3["MY"]="MYS";
		$convert2to3["MV"]="MDV";
		$convert2to3["ML"]="MLI";
		$convert2to3["MT"]="MLT";
		$convert2to3["MH"]="MHL";
		$convert2to3["MQ"]="MTQ";
		$convert2to3["MR"]="MRT";
		$convert2to3["MU"]="MUS";
		$convert2to3["YT"]="MYT";
		$convert2to3["MX"]="MEX";
		$convert2to3["FM"]="FSM";
		$convert2to3["MD"]="MDA";
		$convert2to3["MC"]="MCO";
		$convert2to3["MN"]="MNG";
		$convert2to3["ME"]="MNE";
		$convert2to3["MS"]="MSR";
		$convert2to3["MA"]="MAR";
		$convert2to3["MZ"]="MOZ";
		$convert2to3["MM"]="MMR";
		$convert2to3["NA"]="NAM";
		$convert2to3["NR"]="NRU";
		$convert2to3["NP"]="NPL";
		$convert2to3["NL"]="NLD";
		$convert2to3["AN"]="ANT";
		$convert2to3["NC"]="NCL";
		$convert2to3["NZ"]="NZL";
		$convert2to3["NI"]="NIC";
		$convert2to3["NE"]="NER";
		$convert2to3["NG"]="NGA";
		$convert2to3["NU"]="NIU";
		$convert2to3["NF"]="NFK";
		$convert2to3["MP"]="MNP";
		$convert2to3["NO"]="NOR";
		$convert2to3["OM"]="OMN";
		$convert2to3["PK"]="PAK";
		$convert2to3["PW"]="PLW";
		$convert2to3["PS"]="PSE";
		$convert2to3["PA"]="PAN";
		$convert2to3["PG"]="PNG";
		$convert2to3["PY"]="PRY";
		$convert2to3["PE"]="PER";
		$convert2to3["PH"]="PHL";
		$convert2to3["PN"]="PCN";
		$convert2to3["PL"]="POL";
		$convert2to3["PT"]="PRT";
		$convert2to3["PR"]="PRI";
		$convert2to3["QA"]="QAT";
		$convert2to3["RE"]="REU";
		$convert2to3["RO"]="ROU";
		$convert2to3["RU"]="RUS";
		$convert2to3["RW"]="RWA";
		$convert2to3["BL"]="BLM";
		$convert2to3["SH"]="SHN";
		$convert2to3["KN"]="KNA";
		$convert2to3["LC"]="LCA";
		$convert2to3["MT"]="MAF";
		$convert2to3["PM"]="SPM";
		$convert2to3["VC"]="VCT";
		$convert2to3["WS"]="WSM";
		$convert2to3["SM"]="SMR";
		$convert2to3["ST"]="STP";
		$convert2to3["SA"]="SAU";
		$convert2to3["SN"]="SEN";
		$convert2to3["RS"]="SRB";
		$convert2to3["SC"]="SYC";
		$convert2to3["SL"]="SLE";
		$convert2to3["SG"]="SGP";
		$convert2to3["SK"]="SVK";
		$convert2to3["SI"]="SVN";
		$convert2to3["SB"]="SLB";
		$convert2to3["SO"]="SOM";
		$convert2to3["ZA"]="ZAF";
		$convert2to3["GS"]="SGS";
		$convert2to3["ES"]="ESP";
		$convert2to3["LK"]="LKA";
		$convert2to3["SD"]="SDN";
		$convert2to3["SR"]="SUR";
		$convert2to3["SJ"]="SJM";
		$convert2to3["SZ"]="SWZ";
		$convert2to3["SE"]="SWE";
		$convert2to3["CH"]="CHE";
		$convert2to3["SY"]="SYR";
		$convert2to3["TW"]="TWN";
		$convert2to3["TJ"]="TJK";
		$convert2to3["TZ"]="TZA";
		$convert2to3["TH"]="THA";
		$convert2to3["TL"]="TLS";
		$convert2to3["TG"]="TGO";
		$convert2to3["TK"]="TKL";
		$convert2to3["TO"]="TON";
		$convert2to3["TT"]="TTO";
		$convert2to3["TN"]="TUN";
		$convert2to3["TR"]="TUR";
		$convert2to3["TM"]="TKM";
		$convert2to3["TC"]="TCA";
		$convert2to3["TV"]="TUV";
		$convert2to3["UG"]="UGA";
		$convert2to3["UA"]="UKR";
		$convert2to3["AE"]="ARE";
		$convert2to3["GB"]="GBR";
		$convert2to3["US"]="USA";
		$convert2to3["UM"]="UMI";
		$convert2to3["UY"]="URY";
		$convert2to3["UZ"]="UZB";
		$convert2to3["VU"]="VUT";
		$convert2to3["VA"]="VAT";
		$convert2to3["VE"]="VEN";
		$convert2to3["VN"]="VNM";
		$convert2to3["VG"]="VGB";
		$convert2to3["VI"]="VIR";
		$convert2to3["WF"]="WLF";
		$convert2to3["EH"]="ESH";
		$convert2to3["YE"]="YEM";
		$convert2to3["YU"]="YUG";
		$convert2to3["ZM"]="ZMB";
		$convert2to3["ZW"]="ZWE";
		if (isset($convert2to3[$iso_code_2])) {
		  return $convert2to3[$iso_code_2];
		}
		else return null;
	}
	
	function convertIso3to2($iso_code_3)
	{
		$convert3to2["AFG"]="AF";
		$convert3to2["ALA"]="AX";
		$convert3to2["ALB"]="AL";
		$convert3to2["DZA"]="DZ";
		$convert3to2["ASM"]="AS";
		$convert3to2["AND"]="AD";
		$convert3to2["AGO"]="AO";
		$convert3to2["AIA"]="AI";
		$convert3to2["ATA"]="AQ";
		$convert3to2["ATG"]="AG";
		$convert3to2["ARG"]="AR";
		$convert3to2["ARM"]="AM";
		$convert3to2["ABW"]="AW";
		$convert3to2["AUS"]="AU";
		$convert3to2["AUT"]="AT";
		$convert3to2["AZE"]="AZ";
		$convert3to2["BHS"]="BS";
		$convert3to2["BHR"]="BH";
		$convert3to2["BGD"]="BD";
		$convert3to2["BRB"]="BB";
		$convert3to2["BLR"]="BY";
		$convert3to2["BEL"]="BE";
		$convert3to2["BLZ"]="BZ";
		$convert3to2["BEN"]="BJ";
		$convert3to2["BMU"]="BM";
		$convert3to2["BTN"]="BT";
		$convert3to2["BOL"]="BO";
		$convert3to2["BIH"]="BA";
		$convert3to2["BWA"]="BW";
		$convert3to2["BVT"]="BV";
		$convert3to2["BRA"]="BR";
		$convert3to2["IOT"]="IO";
		$convert3to2["BRN"]="BN";
		$convert3to2["BGR"]="BG";
		$convert3to2["BFA"]="BF";
		$convert3to2["BDI"]="BI";
		$convert3to2["KHM"]="KH";
		$convert3to2["CMR"]="CM";
		$convert3to2["CAN"]="CA";
		$convert3to2["CPV"]="CV";
		$convert3to2["CYM"]="KY";
		$convert3to2["CAF"]="CF";
		$convert3to2["TCD"]="TD";
		$convert3to2["CHL"]="CL";
		$convert3to2["CHN"]="CN";
		$convert3to2["CXR"]="CX";
		$convert3to2["CCK"]="CC";
		$convert3to2["COL"]="CO";
		$convert3to2["COM"]="KM";
		$convert3to2["COG"]="CG";
		$convert3to2["COD"]="CD";
		$convert3to2["COK"]="CK";
		$convert3to2["CRI"]="CR";
		$convert3to2["CIV"]="CI";
		$convert3to2["HRV"]="HR";
		$convert3to2["CUB"]="CU";
		$convert3to2["CYP"]="CY";
		$convert3to2["CZE"]="CZ";
		$convert3to2["DNK"]="DK";
		$convert3to2["DJI"]="DJ";
		$convert3to2["DMA"]="DM";
		$convert3to2["DOM"]="DO";
		$convert3to2["ECU"]="EC";
		$convert3to2["EGY"]="EG";
		$convert3to2["SLV"]="SV";
		$convert3to2["GNQ"]="GQ";
		$convert3to2["ERI"]="ER";
		$convert3to2["EST"]="EE";
		$convert3to2["ETH"]="ET";
		$convert3to2["FLK"]="FK";
		$convert3to2["FRO"]="FO";
		$convert3to2["FJI"]="FJ";
		$convert3to2["FIN"]="FI";
		$convert3to2["FRA"]="FR";
		$convert3to2["GUF"]="GF";
		$convert3to2["PYF"]="PF";
		$convert3to2["ATF"]="TF";
		$convert3to2["GAB"]="GA";
		$convert3to2["GMB"]="GM";
		$convert3to2["GEO"]="GE";
		$convert3to2["DEU"]="DE";
		$convert3to2["GHA"]="GH";
		$convert3to2["GIB"]="GI";
		$convert3to2["GRC"]="GR";
		$convert3to2["GRL"]="GL";
		$convert3to2["GRD"]="GD";
		$convert3to2["GLP"]="GP";
		$convert3to2["GUM"]="GU";
		$convert3to2["GTM"]="GT";
		$convert3to2["GGY"]="GG";
		$convert3to2["GIN"]="GN";
		$convert3to2["GNB"]="GW";
		$convert3to2["GUY"]="GY";
		$convert3to2["HTI"]="HT";
		$convert3to2["HMD"]="HM";
		$convert3to2["VAT"]="VA";
		$convert3to2["HND"]="HN";
		$convert3to2["HKG"]="HK";
		$convert3to2["HUN"]="HU";
		$convert3to2["ISL"]="IS";
		$convert3to2["IND"]="IN";
		$convert3to2["IDN"]="ID";
		$convert3to2["IRN"]="IR";
		$convert3to2["IRQ"]="IQ";
		$convert3to2["IRL"]="IE";
		$convert3to2["IMM"]="IM";
		$convert3to2["ISR"]="IL";
		$convert3to2["ITA"]="IT";
		$convert3to2["JAM"]="JM";
		$convert3to2["JPN"]="JP";
		$convert3to2["JEY"]="JE";
		$convert3to2["JOR"]="JO";
		$convert3to2["KAZ"]="KZ";
		$convert3to2["KEN"]="KE";
		$convert3to2["KIR"]="KI";
		$convert3to2["PRK"]="KP";
		$convert3to2["KOR"]="KR";
		$convert3to2["KWT"]="KW";
		$convert3to2["KGZ"]="KG";
		$convert3to2["LAO"]="LA";
		$convert3to2["LVA"]="LV";
		$convert3to2["LBN"]="LB";
		$convert3to2["LSO"]="LS";
		$convert3to2["LBR"]="LR";
		$convert3to2["LBY"]="LY";
		$convert3to2["LIE"]="LI";
		$convert3to2["LTU"]="LT";
		$convert3to2["LUX"]="LU";
		$convert3to2["MAC"]="MO";
		$convert3to2["MKD"]="MK";
		$convert3to2["MDG"]="MG";
		$convert3to2["MWI"]="MW";
		$convert3to2["MYS"]="MY";
		$convert3to2["MDV"]="MV";
		$convert3to2["MLI"]="ML";
		$convert3to2["MLT"]="MT";
		$convert3to2["MHL"]="MH";
		$convert3to2["MTQ"]="MQ";
		$convert3to2["MRT"]="MR";
		$convert3to2["MUS"]="MU";
		$convert3to2["MYT"]="YT";
		$convert3to2["MEX"]="MX";
		$convert3to2["FSM"]="FM";
		$convert3to2["MDA"]="MD";
		$convert3to2["MCO"]="MC";
		$convert3to2["MNG"]="MN";
		$convert3to2["MNE"]="ME";
		$convert3to2["MSR"]="MS";
		$convert3to2["MAR"]="MA";
		$convert3to2["MOZ"]="MZ";
		$convert3to2["MMR"]="MM";
		$convert3to2["NAM"]="NA";
		$convert3to2["NRU"]="NR";
		$convert3to2["NPL"]="NP";
		$convert3to2["NLD"]="NL";
		$convert3to2["ANT"]="AN";
		$convert3to2["NCL"]="NC";
		$convert3to2["NZL"]="NZ";
		$convert3to2["NIC"]="NI";
		$convert3to2["NER"]="NE";
		$convert3to2["NGA"]="NG";
		$convert3to2["NIU"]="NU";
		$convert3to2["NFK"]="NF";
		$convert3to2["MNP"]="MP";
		$convert3to2["NOR"]="NO";
		$convert3to2["OMN"]="OM";
		$convert3to2["PAK"]="PK";
		$convert3to2["PLW"]="PW";
		$convert3to2["PSE"]="PS";
		$convert3to2["PAN"]="PA";
		$convert3to2["PNG"]="PG";
		$convert3to2["PRY"]="PY";
		$convert3to2["PER"]="PE";
		$convert3to2["PHL"]="PH";
		$convert3to2["PCN"]="PN";
		$convert3to2["POL"]="PL";
		$convert3to2["PRT"]="PT";
		$convert3to2["PRI"]="PR";
		$convert3to2["QAT"]="QA";
		$convert3to2["REU"]="RE";
		$convert3to2["ROU"]="RO";
		$convert3to2["RUS"]="RU";
		$convert3to2["RWA"]="RW";
		$convert3to2["BLM"]="BL";
		$convert3to2["SHN"]="SH";
		$convert3to2["KNA"]="KN";
		$convert3to2["LCA"]="LC";
		$convert3to2["MAF"]="MT";
		$convert3to2["SPM"]="PM";
		$convert3to2["VCT"]="VC";
		$convert3to2["WSM"]="WS";
		$convert3to2["SMR"]="SM";
		$convert3to2["STP"]="ST";
		$convert3to2["SAU"]="SA";
		$convert3to2["SEN"]="SN";
		$convert3to2["SRB"]="RS";
		$convert3to2["SYC"]="SC";
		$convert3to2["SLE"]="SL";
		$convert3to2["SGP"]="SG";
		$convert3to2["SVK"]="SK";
		$convert3to2["SVN"]="SI";
		$convert3to2["SLB"]="SB";
		$convert3to2["SOM"]="SO";
		$convert3to2["ZAF"]="ZA";
		$convert3to2["SGS"]="GS";
		$convert3to2["ESP"]="ES";
		$convert3to2["LKA"]="LK";
		$convert3to2["SDN"]="SD";
		$convert3to2["SUR"]="SR";
		$convert3to2["SJM"]="SJ";
		$convert3to2["SWZ"]="SZ";
		$convert3to2["SWE"]="SE";
		$convert3to2["CHE"]="CH";
		$convert3to2["SYR"]="SY";
		$convert3to2["TWN"]="TW";
		$convert3to2["TJK"]="TJ";
		$convert3to2["TZA"]="TZ";
		$convert3to2["THA"]="TH";
		$convert3to2["TLS"]="TL";
		$convert3to2["TGO"]="TG";
		$convert3to2["TKL"]="TK";
		$convert3to2["TON"]="TO";
		$convert3to2["TTO"]="TT";
		$convert3to2["TUN"]="TN";
		$convert3to2["TUR"]="TR";
		$convert3to2["TKM"]="TM";
		$convert3to2["TCA"]="TC";
		$convert3to2["TUV"]="TV";
		$convert3to2["UGA"]="UG";
		$convert3to2["UKR"]="UA";
		$convert3to2["ARE"]="AE";
		$convert3to2["GBR"]="GB";
		$convert3to2["USA"]="US";
		$convert3to2["UMI"]="UM";
		$convert3to2["URY"]="UY";
		$convert3to2["UZB"]="UZ";
		$convert3to2["VUT"]="VU";
		$convert3to2["VAT"]="VA";
		$convert3to2["VEN"]="VE";
		$convert3to2["VNM"]="VN";
		$convert3to2["VGB"]="VG";
		$convert3to2["VIR"]="VI";
		$convert3to2["WLF"]="WF";
		$convert3to2["ESH"]="EH";
		$convert3to2["YEM"]="YE";
		$convert3to2["YUG"]="YU";
		$convert3to2["ZMB"]="ZM";
		$convert3to2["ZWE"]="ZW";
		if (isset($convert3to2[$iso_code_3])) {
      return $convert3to2[$iso_code_3];
    }
    else return null;
	}
	
	function getIso3Flag($iso_code_3)
	{
		$iso2 = self::convertIso3to2($iso_code_3);
		if ($iso2) {
			$path = JURI::base().'media/com_tracks/images/flags/'.strtolower($iso2).'.png';
			return $path;
		}
		else return null;
	}
		
	function getCountryFlag($countrycode, $attributes = '')
	{
		$src = self::getIso3Flag($countrycode);
		if (!$src) {
			return '';
		}
		$html = '<img src="'.$src.'" alt="'.self::getCountryName($countrycode).'" title="'.self::getCountryName($countrycode).'" '.$attributes.'/>';
		return $html;
	}
	
	function getCountryName($iso3)
	{
		$countries = self::getCountries();
		return $countries[$iso3]['name'];
	}
}
?>