<?php

class bibleplan {
    function getVersion() {
        return '1.0.1';
    }

    function getId() {
        return 'heartlightotandnt';
    }

    function getName() {
        return 'Old and New Testament';
    }

    function getInfo() {
        $info = "Old Testament and New Testament<br /><a target='_new' href='http://www.heartlight.org/devotionals/reading_plans/'>www.heartlight.org</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1-3;Matthew 1',
            2 => 'Genesis 4-6;Matthew 2',
            3 => 'Genesis 7-9;Matthew 3',
            4 => 'Genesis 10-12;Matthew 4',
            5 => 'Genesis 13-15;Matthew 5:1-26',
            6 => 'Genesis 16-17;Matthew 5:27-48',
            7 => 'Genesis 18-19;Matthew 6:1-18',
            8 => 'Genesis 20-22;Matthew 6:19-34',
            9 => 'Job 1-2;Matthew 7',
            10 => 'Job 3-4;Matthew 8:1-17',
            11 => 'Job 5-7;Matthew 8:18-34',
            12 => 'Job 8-10;Matthew 9:1-17',
            13 => 'Job 11-13;Matthew 9:18-38',
            14 => 'Job 14-16;Matthew 10:1-20',
            15 => 'Job 17-19;Matthew 10:21-42',
            16 => 'Job 20-21;Matthew 11',
            17 => 'Job 22-24;Matthew 12:1-23',
            18 => 'Job 25-27;Matthew 12:24-50',
            19 => 'Job 28-29;Matthew 13:1-30',
            20 => 'Job 30-31;Matthew 13:31-58',
            21 => 'Job 32-33;Matthew 14:1-21',
            22 => 'Job 34-35;Matthew 14:22-36',
            23 => 'Job 36-37;Matthew 15:1-20',
            24 => 'Job 38-40;Matthew 15:21-39',
            25 => 'Job 41-42;Matthew 16',
            26 => 'Genesis 23-24;Matthew 17',
            27 => 'Genesis 25-26;Matthew 18:1-20',
            28 => 'Genesis 27-28;Matthew 18:21-35',
            29 => 'Genesis 29-30;Matthew 19',
            30 => 'Genesis 31-32;Matthew 20:1-16',
            31 => 'Genesis 33-35;Matthew 20:17-34',
            32 => 'Genesis 36-38;Matthew 21:1-22',
            33 => 'Genesis 39-40;Matthew 21:23-46',
            34 => 'Genesis 41-42;Matthew 22:1-22',
            35 => 'Genesis 43-45;Matthew 22:23-46',
            36 => 'Genesis 46-48;Matthew 23:1-22',
            37 => 'Genesis 49-50;Matthew 23:23-29',
            38 => 'Exodus 1-3;Matthew 24:1-28',
            39 => 'Exodus 4-6;Matthew 24:29-51',
            40 => 'Exodus 7-8;Matthew 25:1-30',
            41 => 'Exodus 9-11;Matthew 25:31-46',
            42 => 'Exodus 12-13;Matthew 26:1-35',
            43 => 'Exodus 14-15;Matthew 26:36-75',
            44 => 'Exodus 16-18;Matthew 27:1-26',
            45 => 'Exodus 19-20;Matthew 27:27-50',
            46 => 'Exodus 21-22;Matthew 27:51-66',
            47 => 'Exodus 23-24;Matthew 28',
            48 => 'Exodus 25-26;Mark 1:1-22',
            49 => 'Exodus 27-28;Mark 1:23-45',
            50 => 'Exodus 29-30;Mark 2',
            51 => 'Exodus 31-33;Mark 3:1-19',
            52 => 'Exodus 34-35;Mark 3:20-35',
            53 => 'Exodus 36-38;Mark 4:1-20',
            54 => 'Exodus 39-40;Mark 4:21-41',
            55 => 'Psalm 90;Leviticus 1-2;Mark 5:1-20',
            56 => 'Leviticus 3-5;Mark 5:21-43',
            57 => 'Leviticus 6-7;Mark 6:1-29',
            58 => 'Leviticus 8-10;Mark 6:30-56',
            59 => 'Leviticus 11-12;Mark 7:1-13',
            60 => 'Leviticus 13;Mark 7:14-37',
            61 => 'Leviticus 14;Mark 8:1-21',
            62 => 'Leviticus 15-16;Mark 8:22-38',
            63 => 'Leviticus 17-18;Mark 9:1-29',
            64 => 'Leviticus 19-20;Mark 9:30-50',
            65 => 'Leviticus 21-22;Mark 10:1-31',
            66 => 'Leviticus 23-24;Mark 10:32-52',
            67 => 'Leviticus 25;Mark 11:1-18',
            68 => 'Leviticus 26-27;Mark 11:19-33',
            69 => 'Numbers 1-2;Mark 12:1-27',
            70 => 'Numbers 3-4;Mark 12:28-44',
            71 => 'Numbers 5-6;Mark 13:1-20',
            72 => 'Numbers 7-8;Mark 13:21-37',
            73 => 'Numbers 9-11;Mark 14:1-26',
            74 => 'Numbers 12-14;Mark 14:27-53',
            75 => 'Numbers 15-16;Mark 14:54-72',
            76 => 'Numbers 17-19;Mark 15:1-25',
            77 => 'Numbers 20-22;Mark 15:26-47',
            78 => 'Numbers 23-25;Mark 16',
            79 => 'Numbers 26-27;Luke 1:1-20',
            80 => 'Numbers 28-30;Luke 1:21-38',
            81 => 'Numbers 31-33;Luke 1:39-56',
            82 => 'Numbers 34-36;Luke 1:57-80',
            83 => 'Deuteronomy 1-2;Luke 2:1-24',
            84 => 'Deuteronomy 3-4;Luke 2:25-52',
            85 => 'Deuteronomy 5-7;Luke 3',
            86 => 'Deuteronomy 8-10;Luke 4:1-30',
            87 => 'Deuteronomy 11-13;Luke 4:31-44',
            88 => 'Deuteronomy 14-16;Luke 5:1-16',
            89 => 'Deuteronomy 17-19;Luke 5:17-39',
            90 => 'Deuteronomy 20-22;Luke 6:1-26',
            91 => 'Deuteronomy 23-25;Luke 6:27-49',
            92 => 'Deuteronomy 26-27;Luke 7:1-30',
            93 => 'Deuteronomy 28-29;Luke 7:31-50',
            94 => 'Deuteronomy 30-31;Luke 8:1-25',
            95 => 'Deuteronomy 32-34;Luke 8:26-56',
            96 => 'Joshua 1-3;Luke 9:1-17',
            97 => 'Joshua 4-6;Luke 9:18-36',
            98 => 'Joshua 7-9;Luke 9:37-62',
            99 => 'Joshua 10-12;Luke 10:1-24',
            100 => 'Joshua 13-15;Luke 10:25-42',
            101 => 'Joshua 16-18;Luke 11:1-28',
            102 => 'Joshua 19-21;Luke 11:29-54',
            103 => 'Joshua 22-24;Luke 12:1-31',
            104 => 'Judges 1-3;Luke 12:32-59',
            105 => 'Judges 4-6;Luke 13:1-22',
            106 => 'Judges 7-8;Luke 13:23-35',
            107 => 'Judges 9-10;Luke 14:1-24',
            108 => 'Judges 11-12;Luke 14:25-35',
            109 => 'Judges 13-15;Luke 15:1-10',
            110 => 'Judges 16-18;Luke 15:11-32',
            111 => 'Judges 19-21;Luke 16',
            112 => 'Ruth 1-4;Luke 17:1-19',
            113 => '1Samuel 1-3;Luke 17:20-37',
            114 => '1Samuel 4-6;Luke 18:1-23',
            115 => '1Samuel 7-9;Luke 18:24-43',
            116 => '1Samuel 10-12;Luke 19:1-27',
            117 => '1Samuel 13-14;Luke 19:28-48',
            118 => '1Samuel 15-16;Luke 20:1-26',
            119 => '1Samuel 17-18;Luke 20:27-47',
            120 => '1Samuel 19;Psalm 23-59;Luke 21:1-19',
            121 => '1Samuel 20-21;Psalm 34;Luke 21:20-38',
            122 => '1Samuel 22;Psalm 56;Luke 22:1-23',
            123 => 'Psalm 52-Psalm 57-Psalm 142;Luke 22:24-46',
            124 => '1Samuel 23;Psalm 54;63;Luke 22:47-71',
            125 => '1Samuel 24-27;Luke 23:1-25',
            126 => '1Samuel 28-29;Luke 23:26-56',
            127 => '1Samuel 30-31;Luke 24:1-35',
            128 => '2Samuel 1-2;Luke 24:36-53',
            129 => '2Samuel 3-5;John 1:1-28',
            130 => '2Samuel 6-7;Psalm 30;John 1:29-51',
            131 => '2Samuel 8-9;Psalm 60;John 2',
            132 => '2Samuel 10-12;John 3:1-15',
            133 => 'Psalm 32-Psalm 51;John 3:16-36',
            134 => '2Samuel 13-14;John 4:1-26',
            135 => '2Samuel 15;Psalm 3;69;John 4:27-54',
            136 => '2Samuel 16-18;John 5:1-24',
            137 => '2Samuel 19-20;John 5:25-47',
            138 => 'Psalm 64-Psalm 70;John 6:1-21',
            139 => '2Samuel 21-22;Psalm 18;John 6:22-40',
            140 => '2Samuel 23-24;John 6:41-71',
            141 => 'Psalm 4-6;John 7:1-27',
            142 => 'Psalm 7-8;John 7:28-53',
            143 => 'Psalm 9-Psalm 11;John 8:1-27',
            144 => 'Psalm 12-14;John 8:28-59',
            145 => 'Psalm 15-16;John 9:1-23',
            146 => 'Psalm 17-Psalm 19;John 9:24-41',
            147 => 'Psalm 20-22;John 10:1-21',
            148 => 'Psalm 24-26;John 10:22-42',
            149 => 'Psalm 27-29;John 11:1-29',
            150 => 'Psalm 31-Psalm 35;John 11:30-57',
            151 => 'Psalm 36-38;John 12:1-26',
            152 => 'Psalm 39-41;John 12:27-50',
            153 => 'Psalm 53-Psalm 55-Psalm 58;John 13:1-20',
            154 => 'Psalm 61-62-Psalm 65;John 13:21-38',
            155 => 'Psalm 68-Psalm 72-Psalm 86;John 14',
            156 => 'Psalm 101-Psalm 103-Psalm 108;John 15',
            157 => 'Psalm 109-110-Psalm 138;John 16',
            158 => 'Psalm 139-141;John 17',
            159 => 'Psalm 143-145;John 18:1-18',
            160 => '1Kings 1-2;John 18:19-40',
            161 => '1Kings 3-4;Proverbs 1;John 19:1-22',
            162 => 'Proverbs 2-4;John 19:23-42',
            163 => 'Proverbs 5-7;John 20',
            164 => 'Proverbs 8-9;John 21',
            165 => 'Proverbs 10-12;Acts 1',
            166 => 'Proverbs 13-15;Acts 2:1-21',
            167 => 'Proverbs 16-18;Acts 2:22-47',
            168 => 'Proverbs 19-21;Acts 3',
            169 => 'Proverbs 22-24;Acts 4:1-22',
            170 => 'Proverbs 25-26;Acts 4:23-37',
            171 => 'Proverbs 27-29;Acts 5:1-21',
            172 => 'Proverbs 30-31;Acts 5:22-42',
            173 => 'SongOfSongs 1-3;Acts 6',
            174 => 'SongOfSongs 4-5;Acts 7:1-21',
            175 => 'SongOfSongs 6-8;Acts 7:22-43',
            176 => '1Kings 5-7;Acts 7:44-60',
            177 => '1Kings 8-9;Acts 8:1-25',
            178 => '1Kings 10-11;Acts 8:26-40',
            179 => 'Ecclesiastes 1-3;Acts 9:1-22',
            180 => 'Ecclesiastes 4-6;Acts 9:23-43',
            181 => 'Ecclesiastes 7-9;Acts 10:1-23',
            182 => 'Ecclesiastes 10-12;Acts 10:24-48',
            183 => '1Kings 12-13;Acts 11',
            184 => '1Kings 14-15;Acts 12',
            185 => '1Kings 16-18;Acts 13:1-25',
            186 => '1Kings 19-20;Acts 13:26-52',
            187 => '1Kings 21-22;Acts 14',
            188 => '2Kings 1-3;James 1',
            189 => '2Kings 4-6;James 2',
            190 => '2Kings 7-9;James 3',
            191 => '2Kings 10-12;James 4',
            192 => '2Kings 13-14;James 5',
            193 => 'Jonah 1-4;Acts 15:1-21',
            194 => 'Amos 1-3;Acts 15:22-41',
            195 => 'Amos 4-6;Galatians 1',
            196 => 'Amos 7-9;Galatians 2',
            197 => '2Kings 15-16;Galatians 3',
            198 => '2Kings 17-18;Galatians 4',
            199 => '2Kings 19-21;Galatians 5',
            200 => '2Kings 22-23;Galatians 6',
            201 => '2Kings 24-25;Acts 16:1-21',
            202 => 'Psalm 1-2-Psalm 10;Acts 16:22-40',
            203 => 'Psalm 33-Psalm 43-Psalm 66;Philippians 1',
            204 => 'Psalm 67-Psalm 71;Philippians 2',
            205 => 'Psalm 89-Psalm 92;Philippians 3',
            206 => 'Psalm 93-95;Philippians 4',
            207 => 'Psalm 96-98;Acts 17:1-15',
            208 => 'Psalm 99-100;Psalm 102;Acts 17:16-34',
            209 => 'Psalm 104-105;1Thessalonians 1',
            210 => 'Psalm 106-Psalm 111-112;1Thessalonians 2',
            211 => 'Psalm 113-115;1Thessalonians 3',
            212 => 'Psalm 116-118;1Thessalonians 4',
            213 => 'Psalm 119:1-88;1Thessalonians 5',
            214 => 'Psalm 119:89-176;2Thessalonians 1',
            215 => 'Psalm 120-122;2Thessalonians 2',
            216 => 'Psalm 123-125;2Thessalonians 3',
            217 => 'Psalm 127-129;Acts 18',
            218 => 'Psalm 130-132;1Corinthians 1',
            219 => 'Psalm 133-135;1Corinthians 2',
            220 => 'Psalm 136-Psalm 146;1Corinthians 3',
            221 => 'Psalm 147-148;1Corinthians 4',
            222 => 'Psalm 149-150;1Corinthians 5',
            223 => '1Chronicles 1-3;1Corinthians 6',
            224 => '1Chronicles 4-6;1Corinthians 7:1-19',
            225 => '1Chronicles 7-9;1Corinthians 7:20-40',
            226 => '1Chronicles 10-12;1Corinthians 8',
            227 => '1Chronicles 13-15;1Corinthians 9',
            228 => '1Chronicles 16;Psalm 42;Psalm 44;1Corinthians 10:1-18',
            229 => 'Psalm 45-47;1Corinthians 10:19-33',
            230 => 'Psalm 48-50;1Corinthians 11:1-16',
            231 => 'Psalm 73-Psalm 85;1Corinthians 11:17-34',
            232 => 'Psalm 87-88;1Corinthians 12',
            233 => '1Chronicles 17-19;1Corinthians 13',
            234 => '1Chronicles 20-22;1Corinthians 14:1-20',
            235 => '1Chronicles 23-25;1Corinthians 14:21-40',
            236 => '1Chronicles 26-27;1Corinthians 15:1-28',
            237 => '1Chronicles 28-29;1Corinthians 15:29-58',
            238 => '2Chronicles 1-3;1Corinthians 16',
            239 => '2Chronicles 4-6;2Corinthians 1',
            240 => '2Chronicles 7-9;2Corinthians 2',
            241 => '2Chronicles 10-12;2Corinthians 3',
            242 => '2Chronicles 13-14;2Corinthians 4',
            243 => '2Chronicles 15-16;2Corinthians 5',
            244 => '2Chronicles 17-18;2Corinthians 6',
            245 => '2Chronicles 19-20;2Corinthians 7',
            246 => '2Chronicles 21;Obadiah;2Corinthians 8',
            247 => '2Chronicles 22;Joel 1;2Corinthians 9',
            248 => '2Chronicles 23;Joel 2;3;2Corinthians 10',
            249 => '2Chronicles 24-26;2Corinthians 11:1-15',
            250 => 'Isaiah 1-2;2Corinthians 11:16-33',
            251 => 'Isaiah 3-4;2Corinthians 12',
            252 => 'Isaiah 5-6;2Corinthians 13',
            253 => '2Chronicles 27-28;Acts 19:1-20',
            254 => '2Chronicles 29-30;Acts 19:21-41',
            255 => '2Chronicles 31-32;Acts 20:1-16',
            256 => 'Isaiah 7-8;Acts 20:17-38',
            257 => 'Isaiah 9-10;Ephesians 1',
            258 => 'Isaiah 11-13;Ephesians 2',
            259 => 'Isaiah 14-16;Ephesians 3',
            260 => 'Isaiah 17-19;Ephesians 4',
            261 => 'Isaiah 20-22;Ephesians 5:1-16',
            262 => 'Isaiah 23-25;Ephesians 5:17-23',
            263 => 'Isaiah 26-27;Ephesians 6',
            264 => 'Isaiah 28-29;Romans 1',
            265 => 'Isaiah 30-31;Romans 2',
            266 => 'Isaiah 32-33;Romans 3',
            267 => 'Isaiah 34-36;Romans 4',
            268 => 'Isaiah 37-38;Romans 5',
            269 => 'Isaiah 39-40;Romans 6',
            270 => 'Isaiah 41-42;Romans 7',
            271 => 'Isaiah 43-44;Romans 8:1-21',
            272 => 'Isaiah 45-46;Romans 8:22-39',
            273 => 'Isaiah 47-49;Romans 9:1-15',
            274 => 'Isaiah 50-52;Romans 9:16-33',
            275 => 'Isaiah 53-55;Romans 10',
            276 => 'Isaiah 56-58;Romans 11:1-18',
            277 => 'Isaiah 59-61;Romans 11:19-36',
            278 => 'Isaiah 62-64;Romans 12',
            279 => 'Isaiah 65-66;Romans 13',
            280 => 'Hosea 1-4;Romans 14',
            281 => 'Hosea 5-8;Romans 15:1-13',
            282 => 'Hosea 9-11;Romans 15:14-33',
            283 => 'Hosea 12-14;Romans 16',
            284 => 'Micah 1-3;Acts 21:1-17',
            285 => 'Micah 4-5;Acts 21:18-40',
            286 => 'Micah 6-7;Acts 22',
            287 => 'Nahum 1-3;Acts 23:1-15',
            288 => '2Chronicles 33-34;Acts 23:16-35',
            289 => 'Zephaniah 1-3;Acts 24',
            290 => '2Chronicles 35;Habakkuk 1-3;Acts 25',
            291 => 'Jeremiah 1-2;Acts 26',
            292 => 'Jeremiah 3-5;Acts 27:1-26',
            293 => 'Jeremiah 6;Jeremiah 11-12;Acts 27:27-44',
            294 => 'Jeremiah 7-8;Jeremiah 26;Acts 28',
            295 => 'Jeremiah 9-10;Jeremiah 14;Colossians 1',
            296 => 'Jeremiah 15-17;Colossians 2',
            297 => 'Jeremiah 18-19;Colossians 3',
            298 => 'Jeremiah 20;Jeremiah 35-36;Colossians 4',
            299 => 'Jeremiah 25;Jeremiah 45-46;Hebrews 1',
            300 => 'Jeremiah 47-48;Hebrews 2',
            301 => 'Jeremiah 49;Jeremiah 13;Jeremiah 22;Hebrews 3',
            302 => 'Jeremiah 23-24;Hebrews 4',
            303 => 'Jeremiah 27-29;Hebrews 5',
            304 => 'Jeremiah 50;Hebrews 6',
            305 => 'Jeremiah 51;Jeremiah 30;Hebrews 7',
            306 => 'Jeremiah 31-32;Hebrews 8',
            307 => 'Jeremiah 33;Jeremiah 21;Hebrews 9',
            308 => 'Jeremiah 34;Jeremiah 37-38;Hebrews 10:1-18',
            309 => 'Jeremiah 39;Jeremiah;Jeremiah 40;Hebrews 10:19-39',
            310 => 'Jeremiah 41-42;Hebrews 11:1-19',
            311 => 'Jeremiah 43-44;Hebrews 11:20-40',
            312 => 'Lamentations 1-2;Hebrews 12',
            313 => 'Lamentations 3-5;Hebrews 13',
            314 => '2Chronicles 36;Daniel 1-2;Titus 1',
            315 => 'Daniel 3-4;Titus 2',
            316 => 'Daniel 5-7;Titus 3',
            317 => 'Daniel 8-10;Philemon',
            318 => 'Daniel 11-12;1Timothy 1',
            319 => 'Psalm 137;Ezekiel 1-2;1Timothy 2',
            320 => 'Ezekiel 3-4;1Timothy 3',
            321 => 'Ezekiel 5-7;1Timothy 4',
            322 => 'Ezekiel 8-10;1Timothy 5',
            323 => 'Ezekiel 11-13;1Timothy 6',
            324 => 'Ezekiel 14-15;2Timothy 1',
            325 => 'Ezekiel 16-17;2Timothy 2',
            326 => 'Ezekiel 18-19;2Timothy 3',
            327 => 'Ezekiel 20-21;2Timothy 4',
            328 => 'Ezekiel 22-23;1Peter 1',
            329 => 'Ezekiel 24-26;1Peter 2',
            330 => 'Ezekiel 27-29;1Peter 3',
            331 => 'Ezekiel 30-32;1Peter 4',
            332 => 'Ezekiel 33-34;1Peter 5',
            333 => 'Ezekiel 35-36;2Peter 1',
            334 => 'Ezekiel 37-39;2Peter 2',
            335 => 'Ezekiel 40-41;2Peter 3',
            336 => 'Ezekiel 42-44;1John 1',
            337 => 'Ezekiel 45-46;1John 2',
            338 => 'Ezekiel 47-48;1John 3',
            339 => 'Ezra 1-2;1John 4',
            340 => 'Ezra 3-4;1John 5',
            341 => 'Haggai 1-2;2John',
            342 => 'Zechariah 1-4;3John',
            343 => 'Zechariah 5-8;Jude',
            344 => 'Zechariah 9-10;Revelation 1',
            345 => 'Zechariah 11-12;Revelation 2',
            346 => 'Zechariah 13-14;Revelation 3-4',
            347 => 'Psalm 74-76;Revelation 5',
            348 => 'Psalm 77-78;Revelation 6',
            349 => 'Psalm 79-80;Revelation 7',
            350 => 'Psalm 81-83;Revelation 8',
            351 => 'Psalm 84-90;Revelation 9',
            352 => 'Psalm 107;Psalm 126;Revelation 10',
            353 => 'Ezra 5-7;Revelation 11',
            354 => 'Esther 1-2;Matthew 1;Luke 3',
            355 => 'Esther 3-5;Revelation 12',
            356 => 'Esther 6-8;Revelation 13',
            357 => 'Esther 9-10;Revelation 14',
            358 => 'Ezra 8-10;Revelation 15',
            359 => 'Nehemiah 1-3;Revelation 16',
            360 => 'Nehemiah 4-6;Revelation 17',
            361 => 'Nehemiah 7-9;Revelation 18',
            362 => 'Nehemiah 10-11;Revelation 19',
            363 => 'Nehemiah 12-13;Revelation 20',
            364 => 'Malachi 1-2;Revelation 21',
            365 => 'Malachi 3-4;Revelation 22'
        );
        return $data;
    }
}
$bibleplan = new bibleplan();

function s($day) {
	return explode(";", $day);
}
$plan = array();
foreach ($bibleplan->getData() as $day) {
   $plan = array_merge($plan, s($day));
}
$plan['id'] = $bibleplan->getId();
$plan['name'] = $bibleplan->getName();
$plan['info'] = $bibleplan->getInfo();

$plan_json = json_encode($plan);

echo $plan_json;

file_put_contents('readingplans/'.$bibleplan->getId().'.json', $plan_json);
?>