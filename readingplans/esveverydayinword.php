<?php

class bibleplan {
    function getVersion() {
        return '1.0.3';
    }

    function getId() {
        return 'esveverydayinword';
    }

    function getName() {
        return 'Every Day In the Word';
    }

    function getInfo() {
        $info = "Every Day in the Word<br /><a target='_new' href='http://www.esv.org/biblereadingplans'>www.esv.org</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Genesis 1:1-2:25;Matthew 1:1-2:12;Psalm 1:1-6;Proverbs 1:1-6',
            2 => 'Genesis 3:1-4:26;Matthew 2:13-3:6;Psalm 2:1-12;Proverbs 1:7-9',
            3 => 'Genesis 5:1-7:24 ;Matthew 3:7-4:11;Psalm 3:1-8;Proverbs 1:10-19',
            4 => 'Genesis 8:1-10:32;Matthew 4:12-25;Psalm 4:1-8;Proverbs 1:20-23',
            5 => 'Genesis 11:1-13:4;Matthew 5:1-26;Psalm 5:1-12;Proverbs 1:24-28',
            6 => 'Genesis 13:5-15:21;Matthew 5:27-48;Psalm 6:1-10;Proverbs 1:29-33',
            7 => 'Genesis 16:1-18:19;Matthew 6:1-24;Psalm 7:1-17;Proverbs 2:1-5',
            8 => 'Genesis 18:20-19:38;Matthew 6:25-7:14;Psalm 8:1-9;Proverbs 2:6-15',
            9 => 'Genesis 20:1-22:24;Matthew 7:15-29;Psalm 9:1-12;Proverbs 2:16-22',
            10 => 'Genesis 23:1-24:51;Matthew 8:1-17;Psalm 9:13-20;Proverbs 3:1-6',
            11 => 'Genesis 24:52-26:16;Matthew 8:18-34;Psalm 10:1-15;Proverbs 3:7-8',
            12 => 'Genesis 26:17-27:46;Matthew 9:1-17;Psalm 10:16-18;Proverbs 3:9-10',
            13 => 'Genesis 28:1-29:35;Matthew 9:18-38;Psalm 11:1-7;Proverbs 3:11-12',
            14 => 'Genesis 30:1-31:16;Matthew 10:1-25;Psalm 12:1-8;Proverbs 3:13-15',
            15 => 'Genesis 31:17-32:12;Matthew 10:26-11:6;Psalm 13:1-6;Proverbs 3:16-18',
            16 => 'Genesis 32:13-34:31;Matthew 11:7-30;Psalm 14:1-7;Proverbs 3:19-20',
            17 => 'Genesis 35:1-36:43;Matthew 12:1-21;Psalm 15:1-5;Proverbs 3:21-26',
            18 => 'Genesis 37:1-38:30;Matthew 12:22-45;Psalm 16:1-11;Proverbs 3:27-32',
            19 => 'Genesis 39:1-41:16;Matthew 12:46-13:23;Psalm 17:1-15;Proverbs 3:33-35',
            20 => 'Genesis 41:17-42:17;Matthew 13:24-46;Psalm 18:1-15;Proverbs 4:1-6',
            21 => 'Genesis 42:18-43:34;Matthew 13:47-14:12;Psalm 18:16-36;Proverbs 4:7-10',
            22 => 'Genesis 44:1-45:28;Matthew 14:13-36;Psalm 18:37-50;Proverbs 4:11-13',
            23 => 'Genesis 46:1-47:31;Matthew 15:1-28;Psalm 19:1-14;Proverbs 4:14-19',
            24 => 'Genesis 48:1-49:33;Matthew 15:29-16:12;Psalm 20:1-9;Proverbs 4:20-27',
            25 => 'Genesis 50:1-26; Exodus 1:1-2:10;Matthew 16:13-17:9;Psalm 21:1-13;Proverbs 5:1-6',
            26 => 'Exodus 2:11-3:22;Matthew 17:10-27;Psalm 22:1-18;Proverbs 5:7-14',
            27 => 'Exodus 4:1-5:21;Matthew 18:1-22;Psalm 22:19-31;Proverbs 5:15-21',
            28 => 'Exodus 5:22-7:24;Matthew 18:23-19:12;Psalm 23:1-6;Proverbs 5:22-23',
            29 => 'Exodus 7:25-9:35;Matthew 19:13-30;Psalm 24:1-10;Proverbs 6:1-5',
            30 => 'Exodus 10:1-12:13;Matthew 20:1-28;Psalm 25:1-15;Proverbs 6:6-11',
            31 => 'Exodus 12:14-13:16;Matthew 20:29-21:22;Psalm 25:16-22;Proverbs 6:12-15',
            32 => 'Exodus 13:17-15:18;Matthew 21:23-46;Psalm 26:1-12;Proverbs 6:16-19',
            33 => 'Exodus 15:19-17:7;Matthew 22:1-33;Psalm 27:1-6;Proverbs 6:20-26',
            34 => 'Exodus 17:8-19:15;Matthew 22:34-23:12;Psalm 27:7-14;Proverbs 6:27-35',
            35 => 'Exodus 19:16-21:21;Matthew 23:13-39;Psalm 28:1-9;Proverbs 7:1-5',
            36 => 'Exodus 21:22-23:13;Matthew 24:1-28;Psalm 29:1-11;Proverbs 7:6-23',
            37 => 'Exodus 23:14-25:40;Matthew 24:29-51;Psalm 30:1-12;Proverbs 7:24-27',
            38 => 'Exodus 26:1-27:21;Matthew 25:1-30;Psalm 31:1-8;Proverbs 8:1-11',
            39 => 'Exodus 28:1-43;Matthew 25:31-26:13;Psalm 31:9-18;Proverbs 8:12-13',
            40 => 'Exodus 29:1-30:10;Matthew 26:14-46;Psalm 31:19-24;Proverbs 8:14-26',
            41 => 'Exodus 30:11-31:18;Matthew 26:47-68;Psalm 32:1-11;Proverbs 8:27-32',
            42 => 'Exodus 32:1-33:23;Matthew 26:69-27:14;Psalm 33:1-11;Proverbs 8:33-36',
            43 => 'Exodus 34:1-35:9;Matthew 27:15-31;Psalm 33:12-22;Proverbs 9:1-6',
            44 => 'Exodus 35:10-36:38;Matthew 27:32-66;Psalm 34:1-10;Proverbs 9:7-8',
            45 => 'Exodus 37:1-38:31;Matthew 28:1-20;Psalm 34:11-22;Proverbs 9:9-10',
            46 => 'Exodus 39:1-40:38;Mark 1:1-28;Psalm 35:1-16;Proverbs 9:11-12',
            47 => 'Leviticus 1:1-3:17;Mark 1:29-2:12,Psalm 35:17-28;Proverbs 9:13-18',
            48 => 'Leviticus 4:1-5:19;Mark 2:13-3:6;Psalm 36:1-12;Proverbs 10:1-2',
            49 => 'Leviticus 6:1-7:27;Mark 3:7-30;Psalm 37:1-11,Proverbs 10:3-4',
            50 => 'Leviticus 7:28-9:6;Mark 3:31-4:25,Psalm 37:12-29;Proverbs 10:5',
            51 => 'Leviticus 9:7-10:20;Mark 4:26-5:20,Psalm 37:30-40;Proverbs 10:6-7',
            52 => 'Leviticus 11:1-12:8;Mark 5:21-43;Psalm 38:1-22;Proverbs 10:8-9',
            53 => 'Leviticus 13:1-59;Mark 6:1-29;Psalm 39:1-13,Proverbs 10:10',
            54 => 'Leviticus 14:1-57;Mark 6:30-56;Psalm 40:1-10;Proverbs 10:11-12',
            55 => 'Leviticus 15:1-16:28;Mark 7:1-23,Psalm 40:11-17;Proverbs 10:13-14',
            56 => 'Leviticus 16:29-18:30;Mark 7:24-8:10,Psalm 41:1-13;Proverbs 10:15-16',
            57 => 'Leviticus 19:1-20:21;Mark 8:11-38,Psalm 42:1-11;Proverbs 10:17',
            58 => 'Leviticus 20:22-22:16;Mark 9:1-29,Psalm 43:1-5;Proverbs 10:18',
            59 => 'Leviticus 22:17-23:44;Mark 9:30-10:12,Psalm 44:1-8;Proverbs 10:19',
            60 => 'Leviticus 24:1-25:46;Mark 10:13-31,Psalm 44:9-26;Proverbs 10:20-21',
            61 => 'Leviticus 25:47-27:13;Mark 10:32-52,Psalm 45:1-17;Proverbs 10:22',
            62 => 'Leviticus 27:14-34; Numbers 1:1-54,Mark 11:1-25;Psalm 46:1-11;Proverbs 10:23',
            63 => 'Numbers 2:1-3:51;Mark 11:27-12:17,Psalm 47:1-9;Proverbs 10:24-25',
            64 => 'Numbers 4:1-5:31;Mark 12:18-37,Psalm 48:1-14;Proverbs 10:26',
            65 => 'Numbers 6:1-7:89;Mark 12:38-13:13,Psalm 49:1-20;Proverbs 10:27-28',
            66 => 'Numbers 8:1-9:23;Mark 13:14-37,Psalm 50:1-23;Proverbs 10:29-30',
            67 => 'Numbers 10:1-11:23;Mark 14:1-21,Psalm 51:1-19;Proverbs 10:31-32',
            68 => 'Numbers 11:24-13:33;Mark 14:22-52,Psalm 52:1-9;Proverbs 11:1-3',
            69 => 'Numbers 14:1-15:16;Mark 14:53-72,Psalm 53:1-6;Proverbs 11:4',
            70 => 'Numbers 15:17-16:40;Mark 15:1-47,Psalm 54:1-7;Proverbs 11:5-6',
            71 => 'Numbers 16:41-18:32;Mark 16:1-20,Psalm 55:1-23;Proverbs 11:7',
            72 => 'Numbers 19:1-20:29;Luke 1:1-25,Psalm 56:1-13;Proverbs 11:8',
            73 => 'Numbers 21:1-22:20;Luke 1:26-56,Psalm 57:1-11;Proverbs 11:9-11',
            74 => 'Numbers 22:21-23:30;Luke 1:57-80,Psalm 58:1-11;Proverbs 11:12-13',
            75 => 'Numbers 24:1-25:18;Luke 2:1-35,Psalm 59:1-17;Proverbs 11:14',
            76 => 'Numbers 26:1-51;Luke 2:36-52;Psalm 60:1-12;Proverbs 11:15',
            77 => 'Numbers 26:52-28:15;Luke 3:1-22,Psalm 61:1-8;Proverbs 11:16-17',
            78 => 'Numbers 28:16-29:40;Luke 3:23-38,Psalm 62:1-12;Proverbs 11:18-19',
            79 => 'Numbers 30:1-31:54;Luke 4:1-30,Psalm 63:1-11;Proverbs 11:20-21',
            80 => 'Numbers 32:1-33:39;Luke 4:31-5:11,Psalm 64:1-10;Proverbs 11:22',
            81 => 'Numbers 33:40-35:34;Luke 5:12-28,Psalm 65:1-13;Proverbs 11:23',
            82 => 'Numbers 36:1-13; Deuteronomy 1:1-46;Luke 5:29-6:11;Psalm 66:1-20;Proverbs 11:24-26',
            83 => 'Deuteronomy 2:1-3:29;Luke 6:12-38;Psalm 67:1-7;Proverbs 11:27',
            84 => 'Deuteronomy 4:1-49;Luke 6:39-7:10;Psalm 68:1-18;Proverbs 11:28',
            85 => 'Deuteronomy 5:1-6:25;Luke 7:11-35,Psalm 68:19-35;Proverbs 11:29-31',
            86 => 'Deuteronomy 7:1-8:20;Luke 7:36-8:3;Psalm 69:1-18;Proverbs 12:1',
            87 => 'Deuteronomy 9:1-10:22;Luke 8:4-21,Psalm 69:19-36;Proverbs 12:2-3',
            88 => 'Deuteronomy 11:1-12:32;Luke 8:22-39,Psalm 70:1-5;Proverbs 12:4',
            89 => 'Deuteronomy 13:1-15:23;Luke 8:40-9:6,Psalm 71:1-24;Proverbs 12:5-7',
            90 => 'Deuteronomy 16:1-17:20;Luke 9:7-27,Psalm 72:1-20;Proverbs 12:8-9',
            91 => 'Deuteronomy 18:1-20:20;Luke 9:28-50,Psalm 73:1-28;Proverbs 12:10',
            92 => 'Deuteronomy 21:1-22:30;Luke 9:51-10:12,Psalm 74:1-23;Proverbs 12:11',
            93 => 'Deuteronomy 23:1-25:19;Luke 10:13-37,Psalm 75:1-10;Proverbs 12:12-14',
            94 => 'Deuteronomy 26:1-27:26;Luke 10:38-11:13,Psalm 76 1-12;Proverbs 12:15-17',
            95 => 'Deuteronomy 28:1-68;Luke 11:14-36;Psalm 77:1-20;Proverbs 12:18',
            96 => 'Deuteronomy 29:1-30:20;Luke 11:37-12:7,Psalm 78:1-31;Proverbs 12:19-20',
            97 => 'Deuteronomy 31:1-32:27;Luke 12:8-34,Psalm 78:32-55;Proverbs 12:21-23',
            98 => 'Deuteronomy 32:28-52;Luke 12:35-59,Psalm 78:56-64;Proverbs 12:24',
            99 => 'Deuteronomy 33:1-29;Luke 13:1-21;Psalm 78:65-72;Proverbs 12:25',
            100 => 'Deuteronomy 34:1-12; Joshua 1:1-2:24,Luke 13:22-14:6;Psalm 79:1-13,Proverbs 12:26',
            101 => 'Joshua 3:1-4:24;Luke 14:7-35;Psalm 80:1-19;Proverbs 12:27-28',
            102 => 'Joshua 5:1-7:15;Luke 15:1-32;Psalm 81:1-16;Proverbs 13:1',
            103 => 'Joshua 7:16-9:2;Luke 16:1-18;Psalm 82:1-8;Proverbs 13:2-3',
            104 => 'Joshua 9:3-10:43;Luke 16:19-17:10,Psalm 83:1-18;Proverbs 13:4',
            105 => 'Joshua 11:1-12:24;Luke 17:11-37,Psalm 84:1-12;Proverbs 13:5-6',
            106 => 'Joshua 13:1-14:15;Luke 18:1-17,Psalm 85:1-13;Proverbs 13:7-8',
            107 => 'Joshua 15:1-63;Luke 18:18-43;Psalm 86:1-17;Proverbs 13:9-10',
            108 => 'Joshua 16:1-18:28;Luke 19:1-27,Psalm 87:1-7;Proverbs 13:11',
            109 => 'Joshua 19:1-20:9;Luke 19:28-48,Psalm 88:1-18;Proverbs 13:12-14',
            110 => 'Joshua 21:1-22:20;Luke 20:1-26,Psalm 89:1-13;Proverbs 13:15-16',
            111 => 'Joshua 22:21-23:16;Luke 20:27-47,Psalm 89:14-37;Proverbs 13:17-19',
            112 => 'Joshua 24:1-33;Luke 21:1-28;Psalm 89:38-52;Proverbs 13:20-23',
            113 => 'Judges 1:1-2:9;Luke 21:29-22:13,Psalm 90:1-91:16;Proverbs 13:24-25',
            114 => 'Judges 2:10-3:31;Luke 22:14-34,Psalm 92:1-93:5;Proverbs 14:1-2',
            115 => 'Judges 4:1-5:31;Luke 22:35-53;Psalm 94:1-23;Proverbs 14:3-4',
            116 => 'Judges 6:1-40;Luke 22:54-23:12;Psalm 95:1-96:13;Proverbs 14:5-6',
            117 => 'Judges 7:1-8:17;Luke 23:13-43;Psalm 97:1-98:9;Proverbs 14:7-8',
            118 => 'Judges 8:18-9:21;Luke 23:44-24:12;Psalm 99:1-9;Proverbs 14:9-10',
            119 => 'Judges 9:22-10:18;Luke 24:13-53;Psalm 100:1-5;Proverbs 14:11-12',
            120 => 'Judges 11:1-12:15;John 1:1-28;Psalm 101:1-8;Proverbs 14:13-14',
            121 => 'Judges 13:1-14:20;John 1:29-51;Psalm 102:1-28;Proverbs 14:15-16',
            122 => 'Judges 15:1-16:31;John 2:1-25;Psalm 103:1-22;Proverbs 14:17-19',
            123 => 'Judges 17:1-18:31;John 3:1-21;Psalm 104:1-23;Proverbs 14:20-21',
            124 => 'Judges 19:1-20:48;John 3:22-4:3;Psalm 104:24-35;Proverbs 14:22-24',
            125 => 'Judges 21:1-25; Ruth 1:1-22;John 4:4-42;Psalm 105:1-15;Proverbs 14:25',
            126 => 'Ruth 2:1-4:22;John 4:43-54;Psalm 105:16-36;Proverbs 14:26-27',
            127 => '1Samuel 1:1-2:21;John 5:1-23;Psalm 105:37-45;Proverbs 14:28-29',
            128 => '1Samuel 2:22-4:22;John 5:24-47;Psalm 106:1-12;Proverbs 14:30-31',
            129 => '1Samuel 5:1-7:17;John 6:1-21;Psalm 106:13-31;Proverbs 14:32-33',
            130 => '1Samuel 8:1-9:27;John 6:22-42;Psalm 106:32-48;Proverbs 14:34-35',
            131 => '1Samuel 10:1-11:15;John 6:43-71;Psalm 107:1-43;Proverbs 15:1-3',
            132 => '1Samuel 12:1-13:22;John 7:1-29;Psalm 108:1-13;Proverbs 15:4',
            133 => '1Samuel 13:23-14:52;John 7:30-52;Psalm 109:1-31;Proverbs 15:5-7',
            134 => '1Samuel 15:1-16:23;John 7:53-8:20;Psalm 110:1-7;Proverbs 15:8-10',
            135 => '1Samuel 17:1-18:4;John 8:21-30;Psalm 111:1-10;Proverbs 15:11',
            136 => '1Samuel 18:5-19:24;John 8:31-59;Psalm 112:1-10;Proverbs 15:12-14',
            137 => '1Samuel 20:1-21:15;John 9:1-41;Psalm 113:1-114:8;Proverbs 15:15-17',
            138 => '1Samuel 22:1-23:29;John 10:1-21;Psalm 115:1-18;Proverbs 15:18-19',
            139 => '1Samuel 24:1-25:44;John 10:22-42;Psalm 116:1-19;Proverbs 15:20-21',
            140 => '1Samuel 26:1-28:25;John 11:1-53;Psalm 117:1-2;Proverbs 15:22-23',
            141 => '1Samuel 29:1-31:13;John 11:54-12:19;Psalm 118:1-18;Proverbs 15:24-26',
            142 => '2Samuel 1:1-2:11;John 12:20-50;Psalm 118:19-29;Proverbs 15:27-28',
            143 => '2Samuel 2:12-3:39;John 13:1-30;Psalm 119:1-16;Proverbs 15:29-30',
            144 => '2Samuel 4:1-6:23;John 13:31-14:14;Psalm 119:17-32;Proverbs 15:32',
            145 => '2Samuel 7:1-8:18;John 14:15-31;Psalm 119:33-48;Proverbs 15:33',
            146 => '2Samuel 9:1-11:27;John 15:1-27;Psalm 119:49-64;Proverbs 16:1-3',
            147 => '2Samuel 12:1-31;John 16:1-33;Psalm 119:65-80;Proverbs 16:4-5',
            148 => '2Samuel 13:1-39;John 17:1-26;Psalm 119:81-96;Proverbs 16:6-7',
            149 => '2Samuel 14:1-15:22;John 18:1-24;Psalm 119:97-112;Proverbs 16:8-9',
            150 => '2Samuel 15:23-16:23;John 18:25-19:22;Psalm 119:113-128;Proverbs 16:10-11',
            151 => '2Samuel 17:1-29;John 19:23-42;Psalm 119:129-152;Proverbs 16:12-13',
            152 => '2Samuel 18:1-19:10;John 20:1-31;Psalm 119:153-176;Proverbs 16:14-15',
            153 => '2Samuel 19:11-20:13;John 21:1-25;Psalm 120:1-7;Proverbs 16:16-17',
            154 => '2Samuel 20:14-22:20;Acts 1:1-26;Psalm 121:1-8;Proverbs 16:18',
            155 => '2Samuel 22:21-23:23;Acts 2:1-47;Psalm 122:1-9;Proverbs 16:19-20',
            156 => '2Samuel 23:24-24:25;Acts 3:1-26;Psalm 123:1-4;Proverbs 16:21-23',
            157 => '1Kings 1:1-53;Acts 4:1-37;Psalm 124:1-8;Proverbs 16:24',
            158 => '1Kings 2:1-3:3;Acts 5:1-42;Psalm 125:1-5;Proverbs 16:25',
            159 => '1Kings 3:4-4:34;Acts 6:1-15;Psalm 126:1-6;Proverbs 16:26-27',
            160 => '1Kings 5:1-6:38;Acts 7:1-29;Psalm 127:1-5;Proverbs 16:28-30',
            161 => '1Kings 7:1-51;Acts 7:30-50;Psalm 128:1-6;Proverbs 16:31-33',
            162 => '1Kings 8:1-66;Acts 7:51-8:13;Psalm 129:1-8;Proverbs 17:1',
            163 => '1Kings 9:1-10:29;Acts 8:14-40;Psalm 130:1-8;Proverbs 17:2-3',
            164 => '1Kings 11:1-12:19;Acts 9:1-25;Psalm 131:1-3;Proverbs 17:4-5',
            165 => '1Kings 12:20-13:34;Acts 9:26-43;Psalm 132:1-18;Proverbs 17:6',
            166 => '1Kings 14:1-15:24;Acts 10:1-23a;Psalm 133:1-3;Proverbs 17:7-8',
            167 => '1Kings 15:25-17:24;Acts 10:23b-48;Psalm 134:1-3;Proverbs 17:9-11',
            168 => '1Kings 18:1-46;Acts 11:1-30;Psalm 135:1-21;Proverbs 17:12-13',
            169 => '1Kings 19:1-21;Acts 12:1-23;Psalm 136:1-26;Proverbs 17:14-15',
            170 => '1Kings 20:1-21:29;Acts 12:24-13:15;Psalm 137:1-9;Proverbs 17:16',
            171 => '1Kings 22:1-53;Acts 13:16-41;Psalm 138:1-8;Proverbs 17:17-18',
            172 => '2Kings 1:1-2:25;Acts 13:42-14:7;Psalm 139:1-24;Proverbs 17:19-21',
            173 => '2Kings 3:1-4:17;Acts 14:8-28;Psalm 140:1-13;Proverbs 17:22',
            174 => '2Kings 4:18-5:27;Acts 15:1-35;Psalm 141:1-10;Proverbs 17:23',
            175 => '2Kings 6:1-7:20;Acts 15:36-16:15;Psalm 142:1-7;Proverbs 17:24-25',
            176 => '2Kings 8:1-9:13;Acts 16:16-40;Psalm 143:1-12;Proverbs 17:26',
            177 => '2Kings 9:14-10:31;Acts 17:1-34;Psalm 144:1-15;Proverbs 17:27-28',
            178 => '2Kings 10:32-12:21;Acts 18:1-22;Psalm 145:1-21;Proverbs 18:1',
            179 => '2Kings 13:1-14:29;Acts 18:23-19:12;Psalm 146:1-10;Proverbs 18:2-3',
            180 => '2Kings 15:1-16:20;Acts 19:13-41;Psalm 147:1-20;Proverbs 18:4-5',
            181 => '2Kings 17:1-18:12;Acts 20:1-38;Psalm 148:1-14;Proverbs 18:6-7',
            182 => '2Kings 18:13-19:37;Acts 21:1-16;Psalm 149:1-9;Proverbs 18:8',
            183 => '2Kings 20:1-22:2;Acts 21:17-36;Psalm 150:1-6;Proverbs 18:9-10',
            184 => '2Kings 22:3-23:30;Acts 21:37-22:16;Psalm 1:1-6;Proverbs 18:11-12',
            185 => '2Kings 23:31-25:30;Acts 22:17-23:10;Psalm 2:1-12;Proverbs 18:13',
            186 => '1Chronicles 1:1-2:17;Acts 23:11-35;Psalm 3:1-8;Proverbs 18:14-15',
            187 => '1Chronicles 2:18-4:4;Acts 24:1-27;Psalm 4:1-8;Proverbs 18:16-18',
            188 => '1Chronicles 4:5-5:17;Acts 25:1-27;Psalm 5:1-12;Proverbs 18:19',
            189 => '1Chronicles 5:18-6:81;Acts 26:1-32;Psalm 6:1-10;Proverbs 18:20-21',
            190 => '1Chronicles 7:1-8:40;Acts 27:1-20;Psalm 7:1-17;Proverbs 18:22',
            191 => '1Chronicles 9:1-10:14;Acts 27:21-44;Psalm 8:1-9;Proverbs 18:23-24',
            192 => '1Chronicles 11:1-12:18;Acts 28:1-31;Psalm 9:1-12;Proverbs 19:1-3',
            193 => '1Chronicles 12:19-14:17;Romans 1:1-17;Psalm 9:13-20;Proverbs 19:4-5',
            194 => '1Chronicles 15:1-16:36;Romans 1:18-32;Psalm 10:1-15;Proverbs 19:6-7',
            195 => '1Chronicles 16:37-18:17;Romans 2:1-24;Psalm 10:16-18;Proverbs 19:8-9',
            196 => '1Chronicles 19:1-21:30;Romans 2:25-3:8;Psalm 11:1-7;Proverbs 19:10-12',
            197 => '1Chronicles 22:1-23:32;Romans 3:9-31;Psalm 12:1-8;Proverbs 19:13-14',
            198 => '1Chronicles 24:1-26:11;Romans 4:1-12;Psalm 13:1-6;Proverbs 19:15-16',
            199 => '1Chronicles 26:12-27:34;Romans 4:13-5:5;Psalm 14:1-7;Proverbs 19:17',
            200 => '1Chronicles 28:1-29:30;Romans 5:6-21;Psalm 15:1-5;Proverbs 19:18-19',
            201 => '2Chronicles 1:1-3:17;Romans 6:1-23;Psalm 16:1-11;Proverbs 19:20-21',
            202 => '2Chronicles 4:1-6:11;Romans 7:1-13;Psalm 17:1-15;Proverbs 19:22-23',
            203 => '2Chronicles 6:12-8:10;Romans 7:14-8:8;Psalm 18:1-15;Proverbs 19:24-25',
            204 => '2Chronicles 8:11-10:19;Romans 8:9-21;Psalm 18:16-36;Proverbs 19:26',
            205 => '2Chronicles 11:1-13:22;Romans 8:22-39;Psalm 18:37-50;Proverbs 19:27-29',
            206 => '2Chronicles 14:1-16:14;Romans 9:1-21;Psalm 19:1-14;Proverbs 20:1',
            207 => '2Chronicles 17:1-18:34;Romans 9:22-10:13;Psalm 20:1-9;Proverbs 20:2-3',
            208 => '2Chronicles 19:1-20:37;Romans 10:14-11:12;Psalm 21:1-13;Proverbs 20:4-6',
            209 => '2Chronicles 21:1-23:21;Romans 11:13-36;Psalm 22:1-18;Proverbs 20:7',
            210 => '2Chronicles 24:1-25:28;Romans 12:1-21;Psalm 22:19-31;Proverbs 20:8-10',
            211 => '2Chronicles 26:1-28:27;Romans 13:1-14;Psalm 23:1-6;Proverbs 20:11',
            212 => '2Chronicles 29:1-36;Romans 14:1-23;Psalm 24:1-10;Proverbs 20:12',
            213 => '2Chronicles 30:1-31:21;Romans 15:1-22;Psalm 25:1-15;Proverbs 20:13-15',
            214 => '2Chronicles 32:1-33:13;Romans 15:23-16:7;Psalm 25:16-22;Proverbs 20:16-18',
            215 => '2Chronicles 33:14-34:33;Romans 16:8-27;Psalm 26:1-12;Proverbs 20:19',
            216 => '2Chronicles 35:1-36:23;1Corinthians 1:1-17;Psalm 27:1-6;Proverbs 20:20-21',
            217 => 'Ezra 1:1-2:70;1Corinthians 1:18-2:5;Psalm 27:7-14;Proverbs 20:22-23',
            218 => 'Ezra 3:1-4:24;1Corinthians 2:6-3:4;Psalm 28:1-9;Proverbs 20:24-25',
            219 => 'Ezra 5:1-6:22;1Corinthians 3:5-23;Psalm 29:1-11;Proverbs 20:26-27',
            220 => 'Ezra 7:1-8:20;1Corinthians 4:1-21;Psalm 30:1-12;Proverbs 20:28-30',
            221 => 'Ezra 8:21-9:15;1Corinthians 5:1-13;Psalm 31:1-8;Proverbs 21:1-2',
            222 => 'Ezra 10:1-44;1Corinthians 6:1-20;Psalm 31:9-18;Proverbs 21:3',
            223 => 'Nehemiah 1:1-3:14;1Corinthians 7:1-24;Psalm 31:19-24;Proverbs 21:4',
            224 => 'Nehemiah 3:15-5:13;1Corinthians 7:25-40;Psalm 32:1-11;Proverbs 21:5-7',
            225 => 'Nehemiah 5:14-7:60;1Corinthians 8:1-13;Psalm 33:1-11;Proverbs 21:8-10',
            226 => 'Nehemiah 7:61-9:21;1Corinthians 9:1-18;Psalm 33:12-22;Proverbs 21:11-12',
            227 => 'Nehemiah 9:22-10:39;1Corinthians 9:19-10:13;Psalm 34:1-10;Proverbs 21:13',
            228 => 'Nehemiah 11:1-12:26;1Corinthians 10:14-11:2;Psalm 34:11-22;Proverbs 21:14-16',
            229 => 'Nehemiah 12:27-13:31;1Corinthians 11:3-16;Psalm 35:1-16;Proverbs 21:17-18',
            230 => 'Ester 1:1-3:15;1Corinthians 11:17-34;Psalm 35:17-28;Proverbs 21:19-20',
            231 => 'Ester 4:1-7:10;1Corinthians 12:1-26;Psalm 36:1-12;Proverbs 21:21-22',
            232 => 'Ester 8:1-10:3;1Corinthians 12:27-13:13;Psalm 37:1-11;Proverbs 21:23-24',
            233 => 'Job 1:1-3:26;1Corinthians 14:1-17;Psalm 37:12-29;Proverbs 21:25-26',
            234 => 'Job 4:1-7:21;1Corinthians 14:18-40;Psalm 37:30-40;Proverbs 21:27',
            235 => 'Job 8:1-11:20;1Corinthians 15:1-28;Psalm 38:1-22;Proverbs 21:28-29',
            236 => 'Job 12:1-15:35;1Corinthians 15:29-58;Psalm 39:1-13;Proverbs 21:30-31',
            237 => 'Job 16:1-19:29;1Corinthians 16:1-24;Psalm 40:1-10;Proverbs 22:1',
            238 => 'Job 20:1-22:30;2Corinthians 1:1-11;Psalm 40:11-17;Proverbs 22:2-4',
            239 => 'Job 23:1-27:23;2Corinthians 1:12-2:11;Psalm 41:1-13;Proverbs 22:5-6',
            240 => 'Job 28:1-30:31;2Corinthians 2:12-17;Psalm 42:1-11;Proverbs 22:7',
            241 => 'Job 31:1-33:33;2Corinthians 3:1-18;Psalm 43:1-5;Proverbs 22:8-9',
            242 => 'Job 34:1-36:33;2Corinthians 4:1-12;Psalm 44:1-8;Proverbs 22:10-12',
            243 => 'Job 37:1-39:30;2Corinthians 4:13-5:10;Psalm 44:9-26;Proverbs 22:13',
            244 => 'Job 40:1- 42:17;2Corinthians 5:11-21;Psalm 45:1-17;Proverbs 22:14',
            245 => 'Ecclesiastes 1:1-3:22;2Corinthians 6:1-13;Psalm 46:1-11;Proverbs 22:15',
            246 => 'Ecclesiastes 4:1-6:12;2Corinthians 6:14-7:7;Psalm 47:1-9;Proverbs 22:16',
            247 => 'Ecclesiastes 7:1-9:18;2Corinthians 7:8-16;Psalm 48:1-14;Proverbs 22:17-19',
            248 => 'Ecclesiastes 10:1-12:14;2Corinthians 8:1-15;Psalm 49:1-20;Proverbs 22:20-21',
            249 => 'SongOfSongs 1:1-4:15;2Corinthians 8:16-24;Psalm 50:1-23;Proverbs 22:22-23',
            250 => 'SongOfSongs 5:1-8:14;2Corinthians 9:1-15;Psalm 51:1-19;Proverbs 22:24-25',
            251 => 'Isaiah 1:1-2:22;2Corinthians 10:1-18;Psalm 52:1-9;Proverbs 22:26-27',
            252 => 'Isaiah 3:1-5:30;2Corinthians 11:1-15;Psalm 53:1-6;Proverbs 22:28-29',
            253 => 'Isaiah 6:1-7:25;2Corinthians 11:16-33;Psalm 54:1-7;Proverbs 23:1-3',
            254 => 'Isaiah 8:1-9:21;2Corinthians 12:1-10;Psalm 55:1-23;Proverbs 23:4-5',
            255 => 'Isaiah 10:1-11:16;2Corinthians 12:11-21;Psalm 56:1-13;Proverbs 23:6-8',
            256 => 'Isaiah 12:1-14:32;2Corinthians 13:1-14;Psalm 57:1-11;Proverbs 23:9-11',
            257 => 'Isaiah 15:1-18:7;Galatians 1:1-24;Psalm 58:1-11;Proverbs 23:12',
            258 => 'Isaiah 19:1-21:17;Galatians 2:1-16;Psalm 59:1-17;Proverbs 23:13-14',
            259 => 'Isaiah 22:1-24:23;Galatians 2:17-3:9;Psalm 60:1-12;Proverbs 23:15-16',
            260 => 'Isaiah 25:1-28:13;Galatians 3:10-22;Psalm 61:1-8;Proverbs 23:17-18',
            261 => 'Isaiah 28:14-30:11;Galatians 3:23-4:31;Psalm 62:1-12;Proverbs 23:19-21',
            262 => 'Isaiah 30:12-33:12;Galatians 5:1-12;Psalm 63:1-11;Proverbs 23:22',
            263 => 'Isaiah 33:13-36:22;Galatians 5:13-26;Psalm 64:1-10;Proverbs 23:23',
            264 => 'Isaiah 37:1-38:22;Galatians 6:1-18;Psalm 65:1-13;Proverbs 23:24',
            265 => 'Isaiah 39:1-41:16;Ephesians 1:1-23;Psalm 66:1-20;Proverbs 23:25-28',
            266 => 'Isaiah 41:17-43:13;Ephesians 2:1-22;Psalm 67:1-7;Proverbs 23:29-35',
            267 => 'Isaiah 43:14-45:10;Ephesians 3:1-21;Psalm 68:1-18;Proverbs 24:1-2',
            268 => 'Isaiah 45:11- 48:11;Ephesians 4:1-16;Psalm 68:19-35;Proverbs 24:3-4',
            269 => 'Isaiah 48:12-50:11;Ephesians 4:17-32;Psalm 69:1-18;Proverbs 24:5-6',
            270 => 'Isaiah 51:1-53:12;Ephesians 5:1-33;Psalm 69:19-36;Proverbs 24:7',
            271 => 'Isaiah 54:1-57:13;Ephesians 6:1-24;Psalm 70:1-5;Proverbs 24:8',
            272 => 'Isaiah 57:14-59:21;Philippians 1:1-26;Psalm 71:1-24;Proverbs 24:9-10',
            273 => 'Isaiah 60:1-62:5;Philippians 1:27-2:18;Psalm 72:1-20;Proverbs 24:11-12',
            274 => 'Isaiah 62:6-65:25;Philippians 2:19-3:4a;Psalm 73:1-28;Proverbs 24:13-14',
            275 => 'Isaiah 66:1-24;Philippians 3:4b-21;Psalm 74:1-23;Proverbs 24:15-16',
            276 => 'Jeremiah 1:1-2:30;Philippians 4:1-23;Psalm 75:1-10;Proverbs 24:17-20',
            277 => 'Jeremiah 2:31-4:18;Colossians 1:1-20;Psalm 76:1-12;Proverbs 24:21-22',
            278 => 'Jeremiah 4:19-6:14;Colossians 1:21-2:7;Psalm 77:1-20;Proverbs 24:23-25',
            279 => 'Jeremiah 6:15-8:7;Colossians 2:8-23;Psalm 78:1-31;Proverbs 24:26',
            280 => 'Jeremiah 8:8-9:26;Colossians 3:1-17;Psalm 78:32-55;Proverbs 24:27',
            281 => 'Jeremiah 10:1-11:23;Colossians 3:18-4:18;Psalm 78:56-72;Proverbs 24:28-29',
            282 => 'Jeremiah 12:1-14:10;1Thessalonians 1:1-2:9;Psalm 79:1-13;Proverbs 24:30-34',
            283 => 'Jeremiah 14:11-16:15;1Thessalonians 2:10-3:13;Psalm 80:1-19;Proverbs 25:1-5',
            284 => 'Jeremiah 16:16-18:23;1Thessalonians 4:1-5:3;Psalm 81:1-16;Proverbs 25:6-7a',
            285 => 'Jeremiah 19:1-21:14;1Thessalonians 5:4-28;Psalm 82:1-8;Proverbs 25:7b-10',
            286 => 'Jeremiah 22:1-23:20;2Thessalonians 1:1-12;Psalm 83:1-18;Proverbs 25:11-14',
            287 => 'Jeremiah 23:21-25:38;2Thessalonians 2:1-17;Psalm 84:1-12;Proverbs 25:15',
            288 => 'Jeremiah 26:1-27:22;2Thessalonians 3:1-18;Psalm 85:1-13;Proverbs 25:16',
            289 => 'Jeremiah 28:1-29:32;1Timothy 1:1-20;Psalm 86:1-17;Proverbs 25:17',
            290 => 'Jeremiah 30:1-31:26;1Timothy 2:1-15;Psalm 87:1-7;Proverbs 25:18-19',
            291 => 'Jeremiah 31:27-32:44;1Timothy 3:1-16;Psalm 88:1-18;Proverbs 25:20-22',
            292 => 'Jeremiah 33:1-34:22;1Timothy 4:1-16;Psalm 89:1-13;Proverbs 25:23-24',
            293 => 'Jeremiah 35:1- 36:32;1Timothy 5:1-25;Psalm 89:14-37;Proverbs 25:25-27',
            294 => 'Jeremiah 37:1-38:28;1Timothy 6:1-21;Psalm 89:38-52;Proverbs 25:28',
            295 => 'Jeremiah 39:1-41:18;2Timothy 1:1-18;Psalm 90:1-91:16;Proverbs 26:1-2',
            296 => 'Jeremiah 42:1-44:23;2Timothy 2:1-21;Psalm 92:1-93:5;Proverbs 26:3-5',
            297 => 'Jeremiah 44:24-47:7;2Timothy 2:22-3:17;Psalm 94:1-23;Proverbs 26:6-8',
            298 => 'Jeremiah 48:1-49:22;2Timothy 4:1-22;Psalm 95:1-96:13;Proverbs 26:9-12',
            299 => 'Jeremiah 49:23-50:46;Titus 1:1-16;Psalm 97:1-98:9;Proverbs 26:13-16',
            300 => 'Jeremiah 51:1-53;Titus 2:1-15;Psalm 99:1-9;Proverbs 26:17',
            301 => 'Jeremiah 51:54-52:34;Titus 3:1-15;Psalm 100:1-5;Proverbs 26:18-19',
            302 => 'Lamentations 1:1-2:19;Philemon 1-25;Psalm 101:1-8;Proverbs 26:20',
            303 => 'Lamentations 2:20-3:66;Hebrews 1:1-14;Psalm 102:1-28;Proverbs 26:21-22',
            304 => 'Lamentations 4:1-5:22;Hebrews 2:1-18;Psalm 103:1-22;Proverbs 26:23',
            305 => 'Ezekiel 1:1-3:15;Hebrews 3:1-19;Psalm 104:1-23;Proverbs 26:24-26',
            306 => 'Ezekiel 3:16-6:14;Hebrews 4:1-16;Psalm 104:24-35;Proverbs 26:27',
            307 => 'Ezekiel 7:1-9:11;Hebrews 5:1-14;Psalm 105:1-15;Proverbs 26:28',
            308 => 'Ezekiel 10:1-11:25;Hebrews 6:1-20;Psalm 105:16-36;Proverbs 27:1-2',
            309 => 'Ezekiel 12:1-14:11;Hebrews 7:1-17;Psalm 105:37-45;Proverbs 27:3',
            310 => 'Ezekiel 14:12-16:42;Hebrews 7:18-28;Psalm 106:1-12;Proverbs 27:4-6',
            311 => 'Ezekiel 16:43-17:24;Hebrews 8:1-13;Psalm 106:13-31;Proverbs 27:7-9',
            312 => 'Ezekiel 18:1-19:14;Hebrews 9:1-10;Psalm 106:32-48;Proverbs 27:10',
            313 => 'Ezekiel 20:1-49;Hebrews 9:11-28;Psalm 107:1-43;Proverbs 27:11',
            314 => 'Ezekiel 21:1-22:31;Hebrews 10:1-17;Psalm 108:1-13;Proverbs 27:12',
            315 => 'Ezekiel 23:1-49;Hebrews 10:18-39;Psalm 109:1-31;Proverbs 27:13',
            316 => 'Ezekiel 24:1-26:21;Hebrews 11:1-16;Psalm 110:1-7;Proverbs 27:14',
            317 => 'Ezekiel 27:1-28:26;Hebrews 11:17-31;Psalm 111:1-10;Proverbs 27:15-16',
            318 => 'Ezekiel 29:1-30:26;Hebrews 11:32-12:13;Psalm 112:1-10;Proverbs 27:17',
            319 => 'Ezekiel 31:1-32:32;Hebrews 12:14-29;Psalm 113:1-114:8;Proverbs 27:18-20',
            320 => 'Ezekiel 33:1-34:31;Hebrews 13:1-25;Psalm 115:1-18;Proverbs 27:21-22',
            321 => 'Ezekiel 35:1-36:38;James 1:1-18;Psalm 116:1-19;Proverbs 27:23-27',
            322 => 'Ezekiel 37:1-38:23;James 1:19-2:17;Psalm 117:1-2;Proverbs 28:1',
            323 => 'Ezekiel 39:1-40:27;James 2:18-3:18;Psalm 118:1-18;Proverbs 28:2',
            324 => 'Ezekiel 40:28-41:26;James 4:1-17;Psalm 118:19-29;Proverbs 28:3-5',
            325 => 'Ezekiel 42:1-43:27;James 5:1-20;Psalm 119:1-16;Proverbs 28:6-7',
            326 => 'Ezekiel 44:1-45:12;1Peter 1:1-12;Psalm 119:17-32;Proverbs 28:8-10',
            327 => 'Ezekiel 45:13-46:24;1Peter 1:13-2:10;Psalm 119:33-48;Proverbs 28:11',
            328 => 'Ezekiel 47:1-48:35;1Peter 2:11-3:7;Psalm 119:49-64;Proverbs 28:12-13',
            329 => 'Daniel 1:1-2:23;1Peter 3:8-4:6;Psalm 119:65-80;Proverbs 28:14',
            330 => 'Daniel 2:24-3:30;1Peter 4:7-5:14;Psalm 119:81-96;Proverbs 28:15-16',
            331 => 'Daniel 4:1-37;2Peter 1:1-21;Psalm 119:97-112;Proverbs 28:17-18',
            332 => 'Daniel 5:1-31;2Peter 2:1-22;Psalm 119:113-128;Proverbs 28:19-20',
            333 => 'Daniel 6:1-28;2Peter 3:1-18;Psalm 119:129-152;Proverbs 28:21-22',
            334 => 'Daniel 7:1-28;1John 1:1-10;Psalm 119:153-176;Proverbs 28:23-24',
            335 => 'Daniel 8:1-27;1John 2:1-17;Psalm 120:1-7;Proverbs 28:25-26',
            336 => 'Daniel 9:1-11:1;1John 2:18-3:6;Psalm 121:1-8;Proverbs 28:27-28',
            337 => 'Daniel 11:2-35;1John 3:7-24;Psalm 122:1-9;Proverbs 29:1',
            338 => 'Daniel 11:36-12:13;1John 4:1-21;Psalm 123:1-4;Proverbs 29:2-4',
            339 => 'Hosea 1:1-3:5;1John 5:1-21;Psalm 124:1-8;Proverbs 29:5-8',
            340 => 'Hosea 4:1-5:15;2John 1-13;Psalm 125:1-5;Proverbs 29:9-11',
            341 => 'Hosea 6:1-9:17;3John 1-15;Psalm 126:1-6;Proverbs 29:12-14',
            342 => 'Hosea 10:1-14:9;Jude 1-25;Psalm 127:1-5;Proverbs 29:15-17',
            343 => 'Joel 1:1-3:21;Revelation 1:1-20;Psalm 128:1-6;Proverbs 29:18',
            344 => 'Amos 1:1-3:15;Revelation 2:1-17;Psalm 129:1-8;Proverbs 29:19-20',
            345 => 'Amos 4:1-6:14;Revelation 2:18-3:6;Psalm 130:1-8;Proverbs 29:21-22',
            346 => 'Amos 7:1-9:15;Revelation 3:7-22;Psalm 131:1-3;Proverbs 29:23',
            347 => 'Obadiah 1-21;Revelation 4:1-11;Psalm 132:1-18;Proverbs 29:24-25',
            348 => 'Jonah 1:1-4:11;Revelation 5:1-14;Psalm 133:1-3;Proverbs 29:26-27',
            349 => 'Micah 1:1-4:13;Revelation 6:1-17;Psalm 134:1-3;Proverbs 30:1-4',
            350 => 'Micah 5:1-7:20;Revelation 7:1-17;Psalm 135:1-21;Proverbs 30:5-6',
            351 => 'Nahum 1:1-3:19;Revelation 8:1-13;Psalm 136:1-26;Proverbs 30:7-9',
            352 => 'Habakkuk 1:1-3:19;Revelation 9:1-21;Psalm 137:1-9;Proverbs 30:10',
            353 => 'Zephaniah 1:1-3:20;Revelation 10:1-11;Psalm 138:1-8;Proverbs 30:11-14',
            354 => 'Haggai 1:1-2:23;Revelation 11:1-19;Psalm 139:1-24;Proverbs 30:15-16',
            355 => 'Zechariah 1:1-21;Revelation 12:1-17;Psalm 140:1-13;Proverbs 30:17',
            356 => 'Zechariah 2:1-3:10;Revelation 13:1-18;Psalm 141:1-10;Proverbs 30:18-20',
            357 => 'Zechariah 4:1-5:11;Revelation 14:1-20;Psalm 142:1-7;Proverbs 30:21-23',
            358 => 'Zechariah 6:1-7:14;Revelation 15:1-8;Psalm 143:1-12;Proverbs 30:24-28',
            359 => 'Zechariah 8:1-23;Revelation 16:1-21;Psalm 144:1-15;Proverbs 30:29-31',
            360 => 'Zechariah 9:1-17;Revelation 17:1-18;Psalm 145:1-21;Proverbs 30:32',
            361 => 'Zechariah 10:1-11:17;Revelation 18:1-24;Psalm 146:1-10;Proverbs 30:33',
            362 => 'Zechariah 12:1-13:9;Revelation 19:1-21;Psalm 147:1-20;Proverbs 31:1-7',
            363 => 'Zechariah 14:1-21;Revelation 20:1-15;Psalm 148:1-14;Proverbs 31:8-9',
            364 => 'Malachi 1:1-2:17;Revelation 21:1-27;Psalm 149:1-9;Proverbs 31:10-24',
            365 => 'Malachi 3:1-4:6;Revelation 22:1-21;Psalm 150:1-6;Proverbs 31:25-31'
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