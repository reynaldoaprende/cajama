<?php
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        $rows = [
            ['id' => 1, 'initials' => 'CO', 'name' => 'Colombia', 'code' => '57'],
            ['id' => 47, 'initials' => 'AF', 'name' => 'Afghanistan', 'code' => '93'],
            ['id' => 2, 'initials' => 'AL', 'name' => 'Albania', 'code' => '355'],
            ['id' => 3, 'initials' => 'DZ', 'name' => 'Algeria', 'code' => '213'],
            ['id' => 4, 'initials' => 'AS', 'name' => 'American Samoa', 'code' => '1684'],
            ['id' => 5, 'initials' => 'AD', 'name' => 'Andorra', 'code' => '376'],
            ['id' => 6, 'initials' => 'AO', 'name' => 'Angola', 'code' => '244'],
            ['id' => 7, 'initials' => 'AI', 'name' => 'Anguilla', 'code' => '1264'],
            ['id' => 8, 'initials' => 'AQ', 'name' => 'Antarctica', 'code' => '0'],
            ['id' => 9, 'initials' => 'AG', 'name' => 'Antigua And Barbuda', 'code' => '1268'],
            ['id' => 10, 'initials' => 'AR', 'name' => 'Argentina', 'code' => '54'],
            ['id' => 11, 'initials' => 'AM', 'name' => 'Armenia', 'code' => '374'],
            ['id' => 12, 'initials' => 'AW', 'name' => 'Aruba', 'code' => '297'],
            ['id' => 13, 'initials' => 'AU', 'name' => 'Australia', 'code' => '61'],
            ['id' => 14, 'initials' => 'AT', 'name' => 'Austria', 'code' => '43'],
            ['id' => 15, 'initials' => 'AZ', 'name' => 'Azerbaijan', 'code' => '994'],
            ['id' => 16, 'initials' => 'BS', 'name' => 'Bahamas The', 'code' => '1242'],
            ['id' => 17, 'initials' => 'BH', 'name' => 'Bahrain', 'code' => '973'],
            ['id' => 18, 'initials' => 'BD', 'name' => 'Bangladesh', 'code' => '880'],
            ['id' => 19, 'initials' => 'BB', 'name' => 'Barbados', 'code' => '1246'],
            ['id' => 20, 'initials' => 'BY', 'name' => 'Belarus', 'code' => '375'],
            ['id' => 21, 'initials' => 'BE', 'name' => 'Belgium', 'code' => '32'],
            ['id' => 22, 'initials' => 'BZ', 'name' => 'Belize', 'code' => '501'],
            ['id' => 23, 'initials' => 'BJ', 'name' => 'Benin', 'code' => '229'],
            ['id' => 24, 'initials' => 'BM', 'name' => 'Bermuda', 'code' => '1441'],
            ['id' => 25, 'initials' => 'BT', 'name' => 'Bhutan', 'code' => '975'],
            ['id' => 26, 'initials' => 'BO', 'name' => 'Bolivia', 'code' => '591'],
            ['id' => 27, 'initials' => 'BA', 'name' => 'Bosnia and Herzegovina', 'code' => '387'],
            ['id' => 28, 'initials' => 'BW', 'name' => 'Botswana', 'code' => '267'],
            ['id' => 29, 'initials' => 'BV', 'name' => 'Bouvet Island', 'code' => '0'],
            ['id' => 30, 'initials' => 'BR', 'name' => 'Brazil', 'code' => '55'],
            ['id' => 31, 'initials' => 'IO', 'name' => 'British Indian Ocean Territory', 'code' => '246'],
            ['id' => 32, 'initials' => 'BN', 'name' => 'Brunei', 'code' => '673'],
            ['id' => 33, 'initials' => 'BG', 'name' => 'Bulgaria', 'code' => '359'],
            ['id' => 34, 'initials' => 'BF', 'name' => 'Burkina Faso', 'code' => '226'],
            ['id' => 35, 'initials' => 'BI', 'name' => 'Burundi', 'code' => '257'],
            ['id' => 36, 'initials' => 'KH', 'name' => 'Cambodia', 'code' => '855'],
            ['id' => 37, 'initials' => 'CM', 'name' => 'Cameroon', 'code' => '237'],
            ['id' => 38, 'initials' => 'CA', 'name' => 'Canada', 'code' => '1'],
            ['id' => 39, 'initials' => 'CV', 'name' => 'Cape Verde', 'code' => '238'],
            ['id' => 40, 'initials' => 'KY', 'name' => 'Cayman Islands', 'code' => '1345'],
            ['id' => 41, 'initials' => 'CF', 'name' => 'Central African Republic', 'code' => '236'],
            ['id' => 42, 'initials' => 'TD', 'name' => 'Chad', 'code' => '235'],
            ['id' => 43, 'initials' => 'CL', 'name' => 'Chile', 'code' => '56'],
            ['id' => 44, 'initials' => 'CN', 'name' => 'China', 'code' => '86'],
            ['id' => 45, 'initials' => 'CX', 'name' => 'Christmas Island', 'code' => '61'],
            ['id' => 46, 'initials' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'code' => '672'],
            ['id' => 48, 'initials' => 'KM', 'name' => 'Comoros', 'code' => '269'],
            ['id' => 49, 'initials' => 'CG', 'name' => 'Republic Of The Congo', 'code' => '242'],
            ['id' => 50, 'initials' => 'CD', 'name' => 'Democratic Republic Of The Congo', 'code' => '242'],
            ['id' => 51, 'initials' => 'CK', 'name' => 'Cook Islands', 'code' => '682'],
            ['id' => 52, 'initials' => 'CR', 'name' => 'Costa Rica', 'code' => '506'],
            ['id' => 53, 'initials' => 'CI', 'name' => 'Cote DIvoire (Ivory Coast)', 'code' => '225'],
            ['id' => 54, 'initials' => 'HR', 'name' => 'Croatia (Hrvatska)', 'code' => '385'],
            ['id' => 55, 'initials' => 'CU', 'name' => 'Cuba', 'code' => '53'],
            ['id' => 56, 'initials' => 'CY', 'name' => 'Cyprus', 'code' => '357'],
            ['id' => 57, 'initials' => 'CZ', 'name' => 'Czech Republic', 'code' => '420'],
            ['id' => 58, 'initials' => 'DK', 'name' => 'Denmark', 'code' => '45'],
            ['id' => 59, 'initials' => 'DJ', 'name' => 'Djibouti', 'code' => '253'],
            ['id' => 60, 'initials' => 'DM', 'name' => 'Dominica', 'code' => '1767'],
            ['id' => 61, 'initials' => 'DO', 'name' => 'Dominican Republic', 'code' => '1809'],
            ['id' => 62, 'initials' => 'TP', 'name' => 'East Timor', 'code' => '670'],
            ['id' => 63, 'initials' => 'EC', 'name' => 'Ecuador', 'code' => '593'],
            ['id' => 64, 'initials' => 'EG', 'name' => 'Egypt', 'code' => '20'],
            ['id' => 65, 'initials' => 'SV', 'name' => 'El Salvador', 'code' => '503'],
            ['id' => 66, 'initials' => 'GQ', 'name' => 'Equatorial Guinea', 'code' => '240'],
            ['id' => 67, 'initials' => 'ER', 'name' => 'Eritrea', 'code' => '291'],
            ['id' => 68, 'initials' => 'EE', 'name' => 'Estonia', 'code' => '372'],
            ['id' => 69, 'initials' => 'ET', 'name' => 'Ethiopia', 'code' => '251'],
            ['id' => 70, 'initials' => 'XA', 'name' => 'External Territories of Australia', 'code' => '61'],
            ['id' => 71, 'initials' => 'FK', 'name' => 'Falkland Islands', 'code' => '500'],
            ['id' => 72, 'initials' => 'FO', 'name' => 'Faroe Islands', 'code' => '298'],
            ['id' => 73, 'initials' => 'FJ', 'name' => 'Fiji Islands', 'code' => '679'],
            ['id' => 74, 'initials' => 'FI', 'name' => 'Finland', 'code' => '358'],
            ['id' => 75, 'initials' => 'FR', 'name' => 'France', 'code' => '33'],
            ['id' => 76, 'initials' => 'GF', 'name' => 'French Guiana', 'code' => '594'],
            ['id' => 77, 'initials' => 'PF', 'name' => 'French Polynesia', 'code' => '689'],
            ['id' => 78, 'initials' => 'TF', 'name' => 'French Southern Territories', 'code' => '0'],
            ['id' => 79, 'initials' => 'GA', 'name' => 'Gabon', 'code' => '241'],
            ['id' => 80, 'initials' => 'GM', 'name' => 'Gambia The', 'code' => '220'],
            ['id' => 81, 'initials' => 'GE', 'name' => 'Georgia', 'code' => '995'],
            ['id' => 82, 'initials' => 'DE', 'name' => 'Germany', 'code' => '49'],
            ['id' => 83, 'initials' => 'GH', 'name' => 'Ghana', 'code' => '233'],
            ['id' => 84, 'initials' => 'GI', 'name' => 'Gibraltar', 'code' => '350'],
            ['id' => 85, 'initials' => 'GR', 'name' => 'Greece', 'code' => '30'],
            ['id' => 86, 'initials' => 'GL', 'name' => 'Greenland', 'code' => '299'],
            ['id' => 87, 'initials' => 'GD', 'name' => 'Grenada', 'code' => '1473'],
            ['id' => 88, 'initials' => 'GP', 'name' => 'Guadeloupe', 'code' => '590'],
            ['id' => 89, 'initials' => 'GU', 'name' => 'Guam', 'code' => '1671'],
            ['id' => 90, 'initials' => 'GT', 'name' => 'Guatemala', 'code' => '502'],
            ['id' => 91, 'initials' => 'XU', 'name' => 'Guernsey and Alderney', 'code' => '44'],
            ['id' => 92, 'initials' => 'GN', 'name' => 'Guinea', 'code' => '224'],
            ['id' => 93, 'initials' => 'GW', 'name' => 'Guinea-Bissau', 'code' => '245'],
            ['id' => 94, 'initials' => 'GY', 'name' => 'Guyana', 'code' => '592'],
            ['id' => 95, 'initials' => 'HT', 'name' => 'Haiti', 'code' => '509'],
            ['id' => 96, 'initials' => 'HM', 'name' => 'Heard and McDonald Islands', 'code' => '0'],
            ['id' => 97, 'initials' => 'HN', 'name' => 'Honduras', 'code' => '504'],
            ['id' => 98, 'initials' => 'HK', 'name' => 'Hong Kong S.A.R.', 'code' => '852'],
            ['id' => 99, 'initials' => 'HU', 'name' => 'Hungary', 'code' => '36'],
            ['id' => 100, 'initials' => 'IS', 'name' => 'Iceland', 'code' => '354'],
            ['id' => 101, 'initials' => 'IN', 'name' => 'India', 'code' => '91'],
            ['id' => 102, 'initials' => 'ID', 'name' => 'Indonesia', 'code' => '62'],
            ['id' => 103, 'initials' => 'IR', 'name' => 'Iran', 'code' => '98'],
            ['id' => 104, 'initials' => 'IQ', 'name' => 'Iraq', 'code' => '964'],
            ['id' => 105, 'initials' => 'IE', 'name' => 'Ireland', 'code' => '353'],
            ['id' => 106, 'initials' => 'IL', 'name' => 'Israel', 'code' => '972'],
            ['id' => 107, 'initials' => 'IT', 'name' => 'Italy', 'code' => '39'],
            ['id' => 108, 'initials' => 'JM', 'name' => 'Jamaica', 'code' => '1876'],
            ['id' => 109, 'initials' => 'JP', 'name' => 'Japan', 'code' => '81'],
            ['id' => 110, 'initials' => 'XJ', 'name' => 'Jersey', 'code' => '44'],
            ['id' => 111, 'initials' => 'JO', 'name' => 'Jordan', 'code' => '962'],
            ['id' => 112, 'initials' => 'KZ', 'name' => 'Kazakhstan', 'code' => '7'],
            ['id' => 113, 'initials' => 'KE', 'name' => 'Kenya', 'code' => '254'],
            ['id' => 114, 'initials' => 'KI', 'name' => 'Kiribati', 'code' => '686'],
            ['id' => 115, 'initials' => 'KP', 'name' => 'Korea North', 'code' => '850'],
            ['id' => 116, 'initials' => 'KR', 'name' => 'Korea South', 'code' => '82'],
            ['id' => 117, 'initials' => 'KW', 'name' => 'Kuwait', 'code' => '965'],
            ['id' => 118, 'initials' => 'KG', 'name' => 'Kyrgyzstan', 'code' => '996'],
            ['id' => 119, 'initials' => 'LA', 'name' => 'Laos', 'code' => '856'],
            ['id' => 120, 'initials' => 'LV', 'name' => 'Latvia', 'code' => '371'],
            ['id' => 121, 'initials' => 'LB', 'name' => 'Lebanon', 'code' => '961'],
            ['id' => 122, 'initials' => 'LS', 'name' => 'Lesotho', 'code' => '266'],
            ['id' => 123, 'initials' => 'LR', 'name' => 'Liberia', 'code' => '231'],
            ['id' => 124, 'initials' => 'LY', 'name' => 'Libya', 'code' => '218'],
            ['id' => 125, 'initials' => 'LI', 'name' => 'Liechtenstein', 'code' => '423'],
            ['id' => 126, 'initials' => 'LT', 'name' => 'Lithuania', 'code' => '370'],
            ['id' => 127, 'initials' => 'LU', 'name' => 'Luxembourg', 'code' => '352'],
            ['id' => 128, 'initials' => 'MO', 'name' => 'Macau S.A.R.', 'code' => '853'],
            ['id' => 129, 'initials' => 'MK', 'name' => 'Macedonia', 'code' => '389'],
            ['id' => 130, 'initials' => 'MG', 'name' => 'Madagascar', 'code' => '261'],
            ['id' => 131, 'initials' => 'MW', 'name' => 'Malawi', 'code' => '265'],
            ['id' => 132, 'initials' => 'MY', 'name' => 'Malaysia', 'code' => '60'],
            ['id' => 133, 'initials' => 'MV', 'name' => 'Maldives', 'code' => '960'],
            ['id' => 134, 'initials' => 'ML', 'name' => 'Mali', 'code' => '223'],
            ['id' => 135, 'initials' => 'MT', 'name' => 'Malta', 'code' => '356'],
            ['id' => 136, 'initials' => 'XM', 'name' => 'Man (Isle of)', 'code' => '44'],
            ['id' => 137, 'initials' => 'MH', 'name' => 'Marshall Islands', 'code' => '692'],
            ['id' => 138, 'initials' => 'MQ', 'name' => 'Martinique', 'code' => '596'],
            ['id' => 139, 'initials' => 'MR', 'name' => 'Mauritania', 'code' => '222'],
            ['id' => 140, 'initials' => 'MU', 'name' => 'Mauritius', 'code' => '230'],
            ['id' => 141, 'initials' => 'YT', 'name' => 'Mayotte', 'code' => '269'],
            ['id' => 142, 'initials' => 'MX', 'name' => 'Mexico', 'code' => '52'],
            ['id' => 143, 'initials' => 'FM', 'name' => 'Micronesia', 'code' => '691'],
            ['id' => 144, 'initials' => 'MD', 'name' => 'Moldova', 'code' => '373'],
            ['id' => 145, 'initials' => 'MC', 'name' => 'Monaco', 'code' => '377'],
            ['id' => 146, 'initials' => 'MN', 'name' => 'Mongolia', 'code' => '976'],
            ['id' => 147, 'initials' => 'MS', 'name' => 'Montserrat', 'code' => '1664'],
            ['id' => 148, 'initials' => 'MA', 'name' => 'Morocco', 'code' => '212'],
            ['id' => 149, 'initials' => 'MZ', 'name' => 'Mozambique', 'code' => '258'],
            ['id' => 150, 'initials' => 'MM', 'name' => 'Myanmar', 'code' => '95'],
            ['id' => 151, 'initials' => 'NA', 'name' => 'Namibia', 'code' => '264'],
            ['id' => 152, 'initials' => 'NR', 'name' => 'Nauru', 'code' => '674'],
            ['id' => 153, 'initials' => 'NP', 'name' => 'Nepal', 'code' => '977'],
            ['id' => 154, 'initials' => 'AN', 'name' => 'Netherlands Antilles', 'code' => '599'],
            ['id' => 155, 'initials' => 'NL', 'name' => 'Netherlands The', 'code' => '31'],
            ['id' => 156, 'initials' => 'NC', 'name' => 'New Caledonia', 'code' => '687'],
            ['id' => 157, 'initials' => 'NZ', 'name' => 'New Zealand', 'code' => '64'],
            ['id' => 158, 'initials' => 'NI', 'name' => 'Nicaragua', 'code' => '505'],
            ['id' => 159, 'initials' => 'NE', 'name' => 'Niger', 'code' => '227'],
            ['id' => 160, 'initials' => 'NG', 'name' => 'Nigeria', 'code' => '234'],
            ['id' => 161, 'initials' => 'NU', 'name' => 'Niue', 'code' => '683'],
            ['id' => 162, 'initials' => 'NF', 'name' => 'Norfolk Island', 'code' => '672'],
            ['id' => 163, 'initials' => 'MP', 'name' => 'Northern Mariana Islands', 'code' => '1670'],
            ['id' => 164, 'initials' => 'NO', 'name' => 'Norway', 'code' => '47'],
            ['id' => 165, 'initials' => 'OM', 'name' => 'Oman', 'code' => '968'],
            ['id' => 166, 'initials' => 'PK', 'name' => 'Pakistan', 'code' => '92'],
            ['id' => 167, 'initials' => 'PW', 'name' => 'Palau', 'code' => '680'],
            ['id' => 168, 'initials' => 'PS', 'name' => 'Palestinian Territory Occupied', 'code' => '970'],
            ['id' => 169, 'initials' => 'PA', 'name' => 'Panama', 'code' => '507'],
            ['id' => 170, 'initials' => 'PG', 'name' => 'Papua new Guinea', 'code' => '675'],
            ['id' => 171, 'initials' => 'PY', 'name' => 'Paraguay', 'code' => '595'],
            ['id' => 172, 'initials' => 'PE', 'name' => 'Peru', 'code' => '51'],
            ['id' => 173, 'initials' => 'PH', 'name' => 'Philippines', 'code' => '63'],
            ['id' => 174, 'initials' => 'PN', 'name' => 'Pitcairn Island', 'code' => '0'],
            ['id' => 175, 'initials' => 'PL', 'name' => 'Poland', 'code' => '48'],
            ['id' => 176, 'initials' => 'PT', 'name' => 'Portugal', 'code' => '351'],
            ['id' => 177, 'initials' => 'PR', 'name' => 'Puerto Rico', 'code' => '1787'],
            ['id' => 178, 'initials' => 'QA', 'name' => 'Qatar', 'code' => '974'],
            ['id' => 179, 'initials' => 'RE', 'name' => 'Reunion', 'code' => '262'],
            ['id' => 180, 'initials' => 'RO', 'name' => 'Romania', 'code' => '40'],
            ['id' => 181, 'initials' => 'RU', 'name' => 'Russia', 'code' => '70'],
            ['id' => 182, 'initials' => 'RW', 'name' => 'Rwanda', 'code' => '250'],
            ['id' => 183, 'initials' => 'SH', 'name' => 'Saint Helena', 'code' => '290'],
            ['id' => 184, 'initials' => 'KN', 'name' => 'Saint Kitts And Nevis', 'code' => '1869'],
            ['id' => 185, 'initials' => 'LC', 'name' => 'Saint Lucia', 'code' => '1758'],
            ['id' => 186, 'initials' => 'PM', 'name' => 'Saint Pierre and Miquelon', 'code' => '508'],
            ['id' => 187, 'initials' => 'VC', 'name' => 'Saint Vincent And The Grenadines', 'code' => '1784'],
            ['id' => 188, 'initials' => 'WS', 'name' => 'Samoa', 'code' => '684'],
            ['id' => 189, 'initials' => 'SM', 'name' => 'San Marino', 'code' => '378'],
            ['id' => 190, 'initials' => 'ST', 'name' => 'Sao Tome and Principe', 'code' => '239'],
            ['id' => 191, 'initials' => 'SA', 'name' => 'Saudi Arabia', 'code' => '966'],
            ['id' => 192, 'initials' => 'SN', 'name' => 'Senegal', 'code' => '221'],
            ['id' => 193, 'initials' => 'RS', 'name' => 'Serbia', 'code' => '381'],
            ['id' => 194, 'initials' => 'SC', 'name' => 'Seychelles', 'code' => '248'],
            ['id' => 195, 'initials' => 'SL', 'name' => 'Sierra Leone', 'code' => '232'],
            ['id' => 196, 'initials' => 'SG', 'name' => 'Singapore', 'code' => '65'],
            ['id' => 197, 'initials' => 'SK', 'name' => 'Slovakia', 'code' => '421'],
            ['id' => 198, 'initials' => 'SI', 'name' => 'Slovenia', 'code' => '386'],
            ['id' => 199, 'initials' => 'XG', 'name' => 'Smaller Territories of the UK', 'code' => '44'],
            ['id' => 200, 'initials' => 'SB', 'name' => 'Solomon Islands', 'code' => '677'],
            ['id' => 201, 'initials' => 'SO', 'name' => 'Somalia', 'code' => '252'],
            ['id' => 202, 'initials' => 'ZA', 'name' => 'South Africa', 'code' => '27'],
            ['id' => 203, 'initials' => 'GS', 'name' => 'South Georgia', 'code' => '0'],
            ['id' => 204, 'initials' => 'SS', 'name' => 'South Sudan', 'code' => '211'],
            ['id' => 205, 'initials' => 'ES', 'name' => 'Spain', 'code' => '34'],
            ['id' => 206, 'initials' => 'LK', 'name' => 'Sri Lanka', 'code' => '94'],
            ['id' => 207, 'initials' => 'SD', 'name' => 'Sudan', 'code' => '249'],
            ['id' => 208, 'initials' => 'SR', 'name' => 'Suriname', 'code' => '597'],
            ['id' => 209, 'initials' => 'SJ', 'name' => 'Svalbard And Jan Mayen Islands', 'code' => '47'],
            ['id' => 210, 'initials' => 'SZ', 'name' => 'Swaziland', 'code' => '268'],
            ['id' => 211, 'initials' => 'SE', 'name' => 'Sweden', 'code' => '46'],
            ['id' => 212, 'initials' => 'CH', 'name' => 'Switzerland', 'code' => '41'],
            ['id' => 213, 'initials' => 'SY', 'name' => 'Syria', 'code' => '963'],
            ['id' => 214, 'initials' => 'TW', 'name' => 'Taiwan', 'code' => '886'],
            ['id' => 215, 'initials' => 'TJ', 'name' => 'Tajikistan', 'code' => '992'],
            ['id' => 216, 'initials' => 'TZ', 'name' => 'Tanzania', 'code' => '255'],
            ['id' => 217, 'initials' => 'TH', 'name' => 'Thailand', 'code' => '66'],
            ['id' => 218, 'initials' => 'TG', 'name' => 'Togo', 'code' => '228'],
            ['id' => 219, 'initials' => 'TK', 'name' => 'Tokelau', 'code' => '690'],
            ['id' => 220, 'initials' => 'TO', 'name' => 'Tonga', 'code' => '676'],
            ['id' => 221, 'initials' => 'TT', 'name' => 'Trinidad And Tobago', 'code' => '1868'],
            ['id' => 222, 'initials' => 'TN', 'name' => 'Tunisia', 'code' => '216'],
            ['id' => 223, 'initials' => 'TR', 'name' => 'Turkey', 'code' => '90'],
            ['id' => 224, 'initials' => 'TM', 'name' => 'Turkmenistan', 'code' => '7370'],
            ['id' => 225, 'initials' => 'TC', 'name' => 'Turks And Caicos Islands', 'code' => '1649'],
            ['id' => 226, 'initials' => 'TV', 'name' => 'Tuvalu', 'code' => '688'],
            ['id' => 227, 'initials' => 'UG', 'name' => 'Uganda', 'code' => '256'],
            ['id' => 228, 'initials' => 'UA', 'name' => 'Ukraine', 'code' => '380'],
            ['id' => 229, 'initials' => 'AE', 'name' => 'United Arab Emirates', 'code' => '971'],
            ['id' => 230, 'initials' => 'GB', 'name' => 'United Kingdom', 'code' => '44'],
            ['id' => 231, 'initials' => 'US', 'name' => 'United States', 'code' => '1'],
            ['id' => 232, 'initials' => 'UM', 'name' => 'United States Minor Outlying Islands', 'code' => '1'],
            ['id' => 233, 'initials' => 'UY', 'name' => 'Uruguay', 'code' => '598'],
            ['id' => 234, 'initials' => 'UZ', 'name' => 'Uzbekistan', 'code' => '998'],
            ['id' => 235, 'initials' => 'VU', 'name' => 'Vanuatu', 'code' => '678'],
            ['id' => 236, 'initials' => 'VA', 'name' => 'Vatican City State (Holy See)', 'code' => '39'],
            ['id' => 237, 'initials' => 'VE', 'name' => 'Venezuela', 'code' => '58'],
            ['id' => 238, 'initials' => 'VN', 'name' => 'Vietnam', 'code' => '84'],
            ['id' => 239, 'initials' => 'VG', 'name' => 'Virgin Islands (British)', 'code' => '1284'],
            ['id' => 240, 'initials' => 'VI', 'name' => 'Virgin Islands (US)', 'code' => '1340'],
            ['id' => 241, 'initials' => 'WF', 'name' => 'Wallis And Futuna Islands', 'code' => '681'],
            ['id' => 242, 'initials' => 'EH', 'name' => 'Western Sahara', 'code' => '212'],
            ['id' => 243, 'initials' => 'YE', 'name' => 'Yemen', 'code' => '967'],
            ['id' => 244, 'initials' => 'YU', 'name' => 'Yugoslavia', 'code' => '38'],
            ['id' => 245, 'initials' => 'ZM', 'name' => 'Zambia', 'code' => '260'],
            ['id' => 246, 'initials' => 'ZW', 'name' => 'Zimbabwe', 'code' => '263']

        ];
        foreach ($rows as $row) {
            \App\Country::create($row);
        }

    }
}