<?php
/*

    verified son verificadas manualmente
    unavailable son no disponibles en themoviedb, comprobado manualmente. Estas peliculas se anulan.
    186589 la borramos por que la fecha de fa esta mal
    509175 la borramos por que en tm esta mal
*/
return [

    'ban' => [
        'B00A7JFYXC',
        'B00ADHNAR0',
        'B00A7J925I',
        'B01FRP254G',
        'B01FRP253W',
        'B01FRP252S',
        'B00FXF75DC',
        'B01ECEM7S2', //4TB
        'B00W35L37E',
        'B00W35L6DA',
        'B00W35L5YK',
        'B00W35L3K6',
        'B01AAKZRN4', //2TB
        'B01CVOLGHS', //FURY 480, no esta en userbenchmarks
        'B01F9G414U', //duplicado con B00S9Q9UKS
        'B01F9G43WU', //duplicado con B00S9Q9VS4
        'B01F9G46Q8', //duplicado con B018X8LB2G
        //carcasas de plastico de los transcend ssd370
        'B00K9HID2G',
        'B00K9HID0I',
        'B00K9HID9Y',
        'B00K9HID1C',
        'B00K9HIF4C',
        'B0151KMB9G',//es hdd
        'B013J7HHCY',//es hdd
        'B0151KM9FW',//es hdd
        'B013J7WB3O',//es hdd
        'B01A9GZGQ2',//duplicado con B00ZYNHDT4, solo cambia color y es mas caro
        'B01KKZLX46', //2TB
        'B01LY5ZZ4P', //1TB


    ],

    'title' => [
        'B00TWIUXVW' => 'Samsung 850 EVO M.2',
        'B00TGIW1XG' => 'Samsung 850 EVO M.2',
        'B00A1ZTZOG' => 'Kingston SSDNow V300',
        'B00A1ZTZNM' => 'Kingston SSDNow V300',
        'B00FXJWO5C' => 'Kingston SSDNow V300',
        'B00A35X6GM' => 'Kingston SSDNow V300',
        'B01LYCC2D2' => 'KingDian',
        'B01B2OR33E' => 'KingDian',
        'B01B2OR2VC' => 'KingDian',
        'B01B2OR2TY' => 'KingDian',
    ],

    'size' => [
        'B00COFMPAM' => '60',
        'B00TGIVTP2' => '250',
        'B00TGIVVKU' => '500',
        'B01K1W7JNW' => '60',
        'B014KH92IY' => '960',
        'B00RQA6LFA' => '250',
        'B01LYCC2D2' => '60',
        'B01B2OR33E' => '120',
        'B01B2OR2VC' => '250',
        'B01B2OR2TY' => '500',
        'B01K8A2A0E' => '250',
        'B00WMK89S6' => '120',

    ],


    'stats' => [
        //Average Bench, MKT, Read, Write, image, format

        //Samsung 750, 850, PRO
        ['B01AAKZRPW', '70.8', '0.5', '467', '252', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/42465/Samsung-SSD-750-EVO-120GB'],
        ['B01AAKZRP2', '71.3', '1.3', '470', '249', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/71929/Samsung-SSD-750-EVO-250GB'],
        ['B01G844L88', '69.9', '0.3', '456', '245', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/143302/Samsung-SSD-750-EVO-500GB'],
        ['B00P738MUU', '94.5', '1.1', '494', '389', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-1TB/Rating/3576'],
        ['B00P738Z8O', '93.6', '1.5', '491', '386', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-120GB/Rating/3484'],
        ['B010UFKDHY', '90.1', '0.0', '503', '395', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/32539/Samsung-SSD-850-EVO-2TB'],
        ['B00P736UEU', '94.0', '9.0', '490', '384', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-250GB/Rating/2977'],
        ['B00P73B1E4', '96.4', '6.2', '492', '386', '/samsung-750-850-evo', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-500GB/Rating/3477'],
        
        ['B00LF10L02', '93.1', '0.4', '496', '393', '/samsung-850-pro', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Pro-128GB/Rating/3483'],
        ['B00LMXBOP4', '98.7', '1.7', '501', '448', '/samsung-850-pro', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Pro-256GB/Rating/2385'],
        ['B00LF10KTO', '100', '0.9', '498', '449', '/samsung-850-pro', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Pro-512GB/Rating/3478'],
        ['B00LF10KTE', '101', '0.3', '507', '457', '/samsung-850-pro', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Pro-1TB/Rating/3577'],

        //OCZ
        ['B01B4NUKUG', '67.2', '0.1', '497', '312', '/ocz-trion', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/OCZ-Trion-150-120GB/Rating/3618'],
        ['B01B4NUKMY', '66.5', '0.2', '489', '323', '/ocz-trion', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/OCZ-Trion-150-240GB/Rating/3619'],
        ['B01B4NUKME', '66.1', '0.2', '484', '318', '/ocz-trion', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/OCZ-Trion-150-480GB/Rating/3620'],

        //KINGSTON V300, UV400
        ['B00A1ZTZOG', '47.2', '4.4', '340', '111', '/kingston-ssdnow-v300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-120GB/Rating/1892'],
        ['B00A1ZTZNM', '58.6', '2.3', '410', '196', '/kingston-ssdnow-v300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-240GB/Rating/1817'],
        ['B00FXJWO5C', '52.1', '0.2', '428', '225', '/kingston-ssdnow-v300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-480GB/Rating/3480'],
        ['B00A35X6GM', '43.2', '0.4', '322', '073', '/kingston-ssdnow-v300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/1905/KINGSTON-SV300S37A60G'],
        ['B01FJ4UN76', '52.4', '0.7', '446', '178', '/kingston-ssdnow-uv400', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137022/KINGSTON-SUV400S37120G'],
        ['B01FJ4UL2S', '54.9', '0.9', '452', '221', '/kingston-ssdnow-uv400', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137815/KINGSTON-SUV400S37240G'],
        ['B01FJ4UM9A', '54.7', '0.2', '451', '230', '/kingston-ssdnow-uv400', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/138433/KINGSTON-SUV400S37480G'],

        //CRUCIAL
        ['B016JREGAC', '63.6', '0.8', '463', '232', '/crucial-bx200', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-240GB/Rating/3626'],
        ['B016JREG84', '63.1', '0.2', '462', '232', '/crucial-bx200', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-480GB/Rating/3627'],
        ['B016JREG6Q', '65.2', '0.0', '473', '237', '/crucial-bx200', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-960GB/Rating/3628'],

        ['B01IAGSD5O', '67.7', '0.4', '460', '304', '/crucial-mx300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-MX300-275GB/Rating/3642'],
        ['B01IAGSD68', '68.6', '0.3', '448', '305', '/crucial-mx300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-MX300-525GB/Rating/3643'],
        ['B01DUNLMUU', '69.7', '0.2', '451', '301', '/crucial-mx300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-MX300-750GB/Rating/3644'],
        ['B01IAGSDUE', '70.9', '0.1', '461', '310', '/crucial-mx300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-MX300-1TB/Rating/3645'],
        ['B01KKZLX46', '65.2', '0.0', '473', '237', '/crucial-mx300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-960GB/Rating/3628'],

        //TRASCEND SSD220, SSD370
        ['B01FYD9SKU', '66.3', '0.0', '479', '226', '/transcend-ssd220s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/152820/TS120GSSD220S'],
        ['B01DRWWNX4', '60.3', '0.0', '459', '223', '/transcend-ssd220s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/129705/TS240GSSD220S'],
        ['B01DRWWLUO', '63.8', '0.0', '465', '230', '/transcend-ssd220s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137646/TS480GSSD220S'],
        ['B00VX82P42', '53.5', '0.0', '409', '76', '/transcend-ssd370s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/17734/TS64GSSD370'],
        ['B00VX82P2E', '65.0', '0.0', '482', '148', '/transcend-ssd370s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-128GB/Rating/2699'],
        ['B00VX82P38', '76.5', '0.1', '487', '289', '/transcend-ssd370s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-256GB/Rating/2701'],
        ['B00VX82PA6', '82.9', '0.0', '486', '405', '/transcend-ssd370s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-512GB/Rating/3472'],
        ['B00VX82KBK', '83.5', '0.0', '472', '379', '/transcend-ssd370s', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-1TB/Rating/3579'],

        //TOSHIBA Q300
        ['B01AWP7NAW', '50.6', '0.1', '455', '186', '/toshiba-q300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/35283/TOSHIBA-Q300'],
        ['B01AWP7O7Y', '54.0', '0.1', '464', '209', '/toshiba-q300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/35974/TOSHIBA-Q300'],
        ['B01AWP7L7M', '51.4', '0.1', '443', '196', '/toshiba-q300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/38603/TOSHIBA-Q300'],
        ['B01AWP7MI0', '59.4', '0.0', '491', '220', '/toshiba-q300', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/123892/TOSHIBA-Q300'],
        
        //HYPERX FURY, SAVAGE
        ['B00KW3MTBS', '54.8', '1.1', '438', '118', '/hyperx-fury', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/HyperX-Fury-120GB/Rating/2586'],
        ['B00KW3MT7W', '64.8', '0.6', '475', '208', '/hyperx-fury', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L3CO', '75.3', '0.2', '480', '340', '/hyperx-savage', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/HyperX-Savage-120GB/Rating/3496'],
        ['B00W35L5S6', '81.0', '0.6', '485', '440', '/hyperx-savage', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L2KC', '84.1', '0.0', '511', '485', '/hyperx-savage', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L2A2', '81.6', '0.0', '482', '460', '/hyperx-savage', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],

        //SANDISK ULTRA II, PLUS
        ['B00M8ABCZM', '63.5', '0.2', '431', '221', '/sandisk-ultra-ii', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-120GB/Rating/3486'],
        ['B00M8ABEIM', '65.2', '0.8', '448', '250', '/sandisk-ultra-ii', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-240GB/Rating/2548'],
        ['B00M8ABFX6', '67.2', '0.8', '457', '272', '/sandisk-ultra-ii', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-480GB/Rating/3473'],
        ['B00M8ABHVQ', '65.4', '0.5', '454', '256', '/sandisk-ultra-ii', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-960GB/Rating/3582'],
        ['B00S9Q9UKS', '62.3', '1.0', '463', '247', '/sandisk-plus', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/24452/SanDisk-SDSSDA120G'],
        ['B00S9Q9VS4', '66.2', '1.5', '463', '326', '/sandisk-plus', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/25612/SanDisk-SDSSDA240G'],
        ['B018X8LB2G', '62.7', '0.1', '477', '328', '/sandisk-plus', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/131770/SanDisk-SDSSDA480G'],

        //ADATA
        ['B013J7PP96', '60.9', '0.7', '463', '201', '/adata-sp550', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-120GB/Rating/3622'],
        ['B013J7Q338', '63.4', '0.6', '464', '232', '/adata-sp550', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-240GB/Rating/3623'],
        ['B013J7P7SK', '62.3', '0.2', '462', '234', '/adata-sp550', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-480GB/Rating/3624'],

        //KINGDIAN
        ['B01LYCC2D2', '42.9', '0.0', '427', '92', '/kingdian', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/33520/KingDian-S200-60GB'],
        ['B01B2OR33E', '79.6', '0.0', '495', '330', '/kingdian', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/67979/KingDian-S280-120GB'],
        ['B01B2OR2VC', '82.1', '0.0', '492', '359', '/kingdian', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/68986/KingDian-S280-240GB'],        
        ['B01B2OR2TY', '81.8', '0.0', '504', '371', '/kingdian', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/65996/KingDian-S280-480GB'],        

        //PORTABLE
        ['B01AAKZRKW', '74.3', '0.0', '422', '396', '/samsung-t3', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/117507/Samsung-Portable-SSD-T3'],
        ['B01AAKZRU2', '64.9', '0.0', '418', '358', '/samsung-t3', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/81567/Samsung-Portable-SSD-T3'],
        ['B01AAKZRMK', '60.0', '0.0', '404', '340', '/samsung-t3', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/130206/Samsung-Portable-SSD-T3'],
        ['B00ZTRY532', '60.3', '0.0', '402', '312', '/sankisk-extreme-500', 'Portable USB 3.1', '-'],//inventados
        ['B00ZTRY5IW', '70.0', '0.0', '418', '354', '/sankisk-extreme-500', 'Portable USB 3.1', '-'],
        ['B00ZYNHDT4', '67.4', '0.0', '414', '344', '/sankisk-extreme-500', 'Portable USB 3.1', '-'],//inventados



        //M.2 SAMSUNG
        ['B015SOI392', '189', '1.2', '1682', '843', '/ss2-m2', 'M.2 PCIe', 'http://ssd.userbenchmark.com/SpeedTest/38570/NVMe-Samsung-SSD-950'],
        ['B01639694M', '232', '1.8', '1966', '1299', '/ss2-m2', 'M.2 PCIe', 'http://ssd.userbenchmark.com/SpeedTest/38554/NVMe-Samsung-SSD-950'],

        ['B00TWIUXVW', '94.5', '0.1', '500', '391', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/27974/Samsung-SSD-850-EVO-M2-120GB'],
        ['B00TGIVZTW', '93.3', '0.4', '498', '387', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/27038/Samsung-SSD-850-EVO-M2-250GB'],
        ['B00TGIW1XG', '95.8', '0.3', '499', '393', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/25579/Samsung-SSD-850-EVO-M2-500GB'],

        //M.2 KINGSTOM
        ['B01BCEYJPY', '63.7', '0.0', '503', '186', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/80405/KINGSTON-SM2280S3G2120G'],
        ['B01BCEYML0', '74.6', '0.1', '503', '304', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/118096/KINGSTON-SM2280S3G2240G'],
        ['B01BCEYOXG', '85.7', '0.0', '504', '464', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/128228/KINGSTON-SM2280S3G2480G'],

        //M.2 TRANSCEND
        ['B00KLTPTL0', '34.5', '0.0', '208', '38', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/67237/TS32GMTS400'],
        ['B00KLTPTA6', '38.5', '0.0', '225', '37', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/64669/TS32GMTS600'],
        ['B00KLTPW30', '29.2', '0.0', '211', '37', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/37749/TS32GMTS800'],
        ['B00KLTPSKM', '50.1', '0.0', '422', '74', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/38328/TS64GMTS400'],
        ['B00KLTPVJ0', '59.2', '0.0', '409', '76', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/46925/TS64GMTS600'],
        ['B00KLTPUPA', '56.3', '0.0', '419', '77', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/22661/TS64GMTS800'],
        ['B00KLTPUU0', '67.6', '0.0', '502', '128', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/31664/TS128GMT-TS128GMTS400'],
        ['B00KLTPUFA', '51.9', '0.0', '477', '121', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/36102/TS128GMT-S600'],
        ['B00KLTPURI', '68.6', '0.0', '495', '197', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/149987/TS128GMT-S800'],
        ['B00KLTPUG4', '78.6', '0.0', '500', '295', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/18101/TS256GMTS400'],
        ['B00KLTPT6A', '87.3', '0.0', '503', '284', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/18928/TS256GMT-S600'],
        ['B00KLTPUYG', '81.0', '0.0', '495', '294', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/33392/TS256GMT-S800'],
        ['B00KLTPWJE', '81.5', '0.0', '490', '406', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13460/TS512GMTS600'],
        ['B00KLTPVV8', '81.1', '0.0', '497', '409', '/ss2-m2', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/22251/TS512GMTS800'],

        //mSATA
        ['B00CG8GTPO', '63.2', '0.0', '471', '173', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/536/KINGSTON-SMS200S3120G'],
        ['B00COFMPAM', '51.3', '0.2', '361', '115', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/5751/KINGSTON-SMS200S360G'],
        ['B00JT0DSQK', '57.7', '0.0', '463', '163', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/163802/SMS200S3-240G'],
        ['B00JT0DSYC', '57.9', '0.0', '492', '159', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/77465/KINGSTON-SMS200S3480G'],

        ['B00TGIVVKU', '88.5', '0.1', '493', '393', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/25593/Samsung-SSD-850-EVO-mSATA-250GB'],
        ['B00TGIVTP2', '88.9', '0.1', '491', '389', '/ssd-msata', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/24632/Samsung-SSD-850-EVO-mSATA-500GB'],


    ],

    'descriptions' => [
        'evo750' => [
            'h1' => 'Samsung EVO 750',
            'h2' => 'El SSD barato de Samsung',
            'p' => '<p>A prinipios de 2016 Samsung presentó sus nuevos 750 EVO con 2 modelos de poca capacidad (120 y 250GB), y el pasado mes de Junio añadió a la gama el modelo de 500GB.</p> <p>La línea 750 EVO es la opción mas económica de la marca, un producto pensado para para competir en la gama baja donde prima la relacion precio por GB. A nivel técnico se encuentra solo un paso por debajo de su hermoano mayor (<a href="{{route("evo850")}}">Evo 850</a>), monta controlador MGX, chips NAND TLC (sin tecnología 3D NAND) y 256 MB de caché DRAM y ofrece 3 años de garantía (a diferencia de los 5 años del 850 EVO).</p> <p>Puedes consultar las especificaciones y descargas oficiales <a href="http://www.samsung.com/semiconductor/minisite/ssd/product/consumer/750evo.html">aquí</a>.</p> <p>El cuidado que le ha dado Samsung a su SSD más económico propicia un gran resultado en los tests de rendimiento, que se va aproximando al máximo en la que su veterana interfaz Sata 3 puede trabajar (500MB/s), y se ha convertido rapidamente en uno de los modelos mas vendidos del mercado.</p> <p>Si buscas un SSD bueno y barato, cómpralo.</p>',
            'p2' => '<p>El Samsung 750 Evo propociona un rendimiento óptimo tanto en lectura como en escritura, facilitando una carga casi instantánea del sistema operativo. La garantía del fabricante asiático es en este caso un signo de tranquilidad, ya que se trata de una de las marcas con más prestigio de las que fabrican discos de estado sólido. Ha sido diseñado para usarse como unidad de arranque del sistema en situaciones de trabajo de almacenamiento no demasiado intensas, ya que las opciones limitadas de capacidad de almacenamiento resultan un problema para usarlo como almacenamiento de ficheros o bibliotecas multimedia. Desde esta premisa, el EVO 750 ofrece una gran experiencia al usuario en relación a su ajustado precio, de echo las medidas muestran un rendimiento bastante próximo al del <a href="{{route("evo850")}}">Evo 850</a></p>.',
            'meta' => 'Samsung EVO 750 a examen ¿Merece la pena comprarlo? Analizamos su precio en Amazon y sus prestaciones'
            ],
        'evo850' => [
            'h1' => 'Samsung EVO 850',
            'h2' => 'El SSD más vendido de Samsung',
            'p' => '<p>Siguiendo la línea de éxito de su predecesor, el 840 EVO, y una vez subsanados algunos de los problemas de rendimiento del antiguo modelo, encontramos uno de los SSD más populares en la actualidad, el <a href="http://www.samsung.com/es/consumer/memory-storage/memory-storage/ssd/MZ-75E250B/EU">850 Evo</a>.</p> <p>Un producto con capacidades disponibles desde los 120 GB hasta los mas nuevos de 4Tb, se ha convertido en todo un referente y desde hace tiempo se encuentran entre los mas vendidos en las principales tiendas online.</p> <p>Como podemos observar en los tests, el 850 EVO ofrece unas prestaciones excelentes al exprimir al máximo las capacidades del Sata 3, y aunque los 520 MB/s de escritura y 540 MB/s de lectura que anuncia Samsung en sus especificaciones oficiales, caen como es habitual en ser demasiado optimistas, los valores reales no estan tan alejados como en otros casos, y son hasta el momento los mejores resultados en este formato que encontramos en rankingssd.com.</p> 
                <p>Si ademas tenemos en cuenta su ajustado precio nos encontramos ante una compra mas que recomendada, una compra maestra.</p>',
            'p2' => 'Samsung atesora una muy buena reputación en el terreno de los discos de estado sólido, y suele fabricar unidades muy fibles, en parte gracias que llevan ellos mismos la mayor parte del proceso de fabricación de sus discos SSD.<br>En verano de 2013 Samsung presentó el EVO 840, que se convirtió rápidamente en todo un éxito de ventas debido a sus altas prestaciones a un precio muy ajustado. El EVO 850 es su sucesor, ha seguido la senda del éxito y hasta ha sido capaz de superar el listón dejado por su predecesor. El EVO 850 es el hermano pequeño del tope de gama, el 850 PRO, y ofrece un modelo que combina unas altas prestaciones próximas a modelos superiores, con un precio popular al mismo nivel de discos de estado sólido de supuesta gama mas baja, un equilibrio realmente bueno para cualquier usuario de cualquier tipo. Usa memoria TLC con tecnología 3D V-NAND de Samsung.',
            'meta' => 'Analizamos el Samsung EVO 850, valoramos su precio en Amazon y su rendimiento, ¿Merece la pena comprarlo?'
            ],

        'v300' => [
            'h1' => 'Kingston SSDNow V300',
            'h2' => 'Uno de los SSD más conocidos y mas económicos, lo examinamos',
            'p' => '<p>El SSDNow V300 es un veterano (muy veterano) modelo de Kingston, fue presentado en varano del 2013 y se ubica en la gama mas baja de la marca.</p> <p>Tras superar varios problemas iniciales con firmwares anteriores al 5.0.5, se ha asentado con el paso del tiempo hasta convertirse en la actualidad en uno de los modelos con mayor cuota de mercado. El fabricante nos anuncia unos valores de 450MB/s en lectura y 450MB/s en escritura, bastante alejadas de las medidas reales, que se situan en un rango medio de rendimiento.</p> <p>Válido si deseas gastar lo menos posible . El V300 se encuentra disponible en capacidades de 16, 120, 240 y 480GB y ofrece 3 años de garantía.</p>',
            'p2' => '',
            'meta' => 'Analizamos el Kingston SSDNow V300, valoramos su rendimiento y su precio en Amazon, ¿Es recomendable su compra?'
            ],

        'uv400' => [
            'h1' => 'Kingston SSDNow UV400',
            'h2' => 'Nuevo modelo de Kingston para el mercado de gama económica',
            'p' => '<p>Kingston dispone desde el pasado mes de Mayo de 2016 de un nuevo modelo dentro de la familia SSDNOW, el UV400.</p> <p>Es la evolución del casi testimonial UV300 y se situa como todos los SSDNOW en la supuesta gama de entrada. Es también el segundo TLC NAND de Kingston (tras el mencionado UV300), usa un TLC NAND Toshiba 15nm y controlador Marvell de 4 canales 88SS1074 y ofrece 550 MB/s de lectura y de 350 a 500 MB/s en escritura, siempre según fabricante. En la práctica el rendimiento es muy similar al de su hermano pequeño, el SSDNOW V300. También lo es el precio, por lo que ambas opciones son similares.</p> <p>El UV400 viene con cuatro variantes de almacenamiento, 120, 240, 480 y 960GB y 3 años de garantía.</p>',
            'p2' => '',
            'meta' => 'A examen el nuevo modelo de Kingston, el SSDNow UV400. ¿Hay algún SSD mejor? Analizamos su precio en Amazon y su rendimiento.'
            ],

        'max100' => [
            'h1' => '¿Qué SSD comprar con 100€?',
            'h2' => 'Analizamos los discos SSD mas baratos del mercado',
            'p'  => '<p>Los precios de los SSD llevan años bajando hasta un nivel que se encuentra en la actualidad (2016) en los 0.24€/GB de media, y los pronósticos de cara al 2017 siguen muy siendo muy favorables y el precio podría alcanzar los 0.17€/GB en poco tiempo.</p> <div class="table-content"><table><tr><th></th><th>2012</th><th>2013</th><th>2014</th><th>2015</th><th>2016*</th><th>2017*</th></tr><tr><td>HDD</td><td>0.09</td><td>0.08</td><td>0.07</td><td>0.06</td><td>0.06</td><td>0.06</td></tr><tr><td>SSD</td><td>0.99</td><td>0.68</td><td>0.55</td><td>0.39</td><td>0.24</td><td>0.17</td></tr></table><span class="caption">Precios €/GB &nbsp;&nbsp;&nbsp; * Estimación</span></div> <p> Con esta tendencia a la baja tan marcada, los discos SSD se han echo un hueco dentro de la categoría de discos baratos por menos de 100€, y lo han echo con tanta fuerza que podemos encontrar algún modelo incluso por debajo de 50€, así como modelos de hasta 500GB de capacidad por debajo de la barrera de 100€. A continuación te los mostramos.</p>',
            'p2' => '',
            'meta' => '¿Qué disco SSD comprar por menos de 100€? En RankingSSD hemos analizado los más populares, los comparamos y valoramos todas las opciones. '
        ],

        
        'max200' => [
            'h1' => '¿Qué SSD comprar con 200€?',
            'h2' => 'Valoramos los mejores discos SSD por 200€ o menos',
            'p'  => '<p>Los SSD son aun unas cuatro veces más caros que los HDD convencionales, sin embargo la tendencia es muy reveladora. El precio de los HDD se ha estabilizado y las previsiones indican que se detendran a unos 0.06€/GB, que es prácticamente su precio en la actualidad. Pero con los SSD el mercado se mueve en otra dirección.</p> <p>Su bajada de precios es de más de un 10% trimestral, y de un año para otro prácticamente doblamos capacidad por un mismo precio. Lo que hace poco tiempo pagabamos por un disco SSD de 120GB, hoy en día lo pagamos por uno de 500€.</p> <p>Así, la opción que creemos más favorable pasa por elegir de entre uno de los varios modelos de 500€ de capacidad, ya que todos rondan los 150€. A continuación te mostramos las comparativas y los valoramos, como siempre en relación a su precio de venta en la actualidad en Amazon.</p>',
            'p2' => '',
            'meta' => 'Por 200€ podemos optar a SSD de primer nivel por rendimiento y capacidad, te mostramos todas las opciones con un presupuesto '
        ],

        
        'b128' => [
            'h1' => 'Discos SSD de 120GB',
            'h2' => 'Los Discos SSD más baratos para un uso básico',
            'p'  => '<p>La enorme popularidad de los discos SSD ha acelerado el descenso de su precio, aun por encima de las ya de por si buenas previsiones. Esta gran aceptación ha motivado a vendedores y distribuidores de PC a montarlos en masa en sus equipos nuevos, y a los usuarios con equipos antiguos a preferirlos como primera opción a la hora de actualizar su PC o portatil.</p> <div class="note-content"><i class="fa fa-lightbulb-outline"></i>Actualizar tu equipo con un SSD es tan facil como conectar a uno de los puertos SATA de tu placa base, o en el caso de un portatil, desconectar tu HDD y conectar tu SDD en el mismo lugar</div> <p>Ante la paulatina desaparición de los discos SDD de 60GB, los modelos con 120GB se han convertido en la opción de entrada mas bárata para un usuario básico, suficiente sin embargo en la mayoría de los casos para arrancar un sistema operativo con el software habitual. Te mostramos las mejores opciones en discos SSD de 120GB.',
            'p2' => '',
            'meta' => '¿Qué opciones hay en el mercado y qué recomenadmos en RankingSSD? Los mejores discos SSD de 120GB.'
        ],

        
        'b256' => [
            'h1' => 'Discos SSD de 250GB',
            'h2' => 'Discos SSD de 250GB, los más populares en la actualidad',
            'p'  => '<p>En torno a la mitad de los SSD vendidos en la actualidad son discos SSD de 250GB de capacidad. Los podemos comprar a un precio de entre 60€ y 90€, esto corresponde a un costo de unos 0.30€/GB.</p> <p>
                La popularidad de los SSD de 250GB se ha disparado y son ya, junto a los modelos con 500GB de capacidad, los mas recomendados teniendo en cuenta la evolución en los precios. Hay que destacar que hasta hace poco tiempo los más populares eran los de 120GB, hoy en día sin embargo estos modelos rondan los 0.40€/GB, y dada su capacidad los convierte en una opción menor y orientada a usuarios con pocas pretensiones y para funciones básicas.</p> <p>En RankingSSD recomendamos actualmente discos SSD con un mínimo de 250GB de capacidad, aquí os enseñamos que opciones hay disponibles en el mercado, y los valoramos como siempre hacemos en función de su rendimiento y precio.</p>',
            'p2' => '',
            'meta' => 'Los mejores discos SSD de 250GB, ¿cuál comprar? Los valoramos con sus precios actualizados en Amazon para que sepas qué comprar y que no comprar.'
        ],

        
        'b512' => [
            'h1' => 'Discos SSD de 500GB',
            'h2' => 'Los discos SSD mas recomendados en la acualidad',
            'p'  => '<p>Cuando tenemos que recomendar actualmente sobre discos SSD, uno de los principales consejos es la compra de modelos de 250GB o de 500GB, son sin duda las dos mejores opciones en relación capacidad precio a día de hoy.</p><p>Pero esto es un mercado que cambia rápido. Los precios caen en picado y no dejaran de hacerlo, las capacidades de almacenamiento aumentan, y lo que hace no mucho era inaccesible hoy en día se convierte en común</p><p>Los discos SSD más populares están ya por debajo de los 150€, alguno incluso rondando ya los 100€. Son precios que los han convertido en los modelos con mayores incrementos de ventas, y que se convertirán en los próximos meses en los que más demanda acaparen.</p><p>Si vas a comprar un disco SSD, en RankingSSD te invitamos a que valores estos modelos, ya que muchos de ellos aúnan un precio muy competitivo con la versatilidad y durabilidad que ofrece su capacidad de almacenamiento, a continuación te enseñamos nuestro análisis de la selección de los modelos más populares del mercado, con su precio actualizado</p>',
            'p2' => '',
            'meta' => 'Si vas a comprar un disco SSD, los de 500GB son una de las mejores opciones. En RankingSSD seleccionamos los más populares y los valoramos.'
        ],

        
        'b1tb' => [
            'h1' => 'Discos SSD de 1TB',
            'h2' => 'Los discos SSD con gran capacidad de almacenamiento están aquí para quedarse',
            'p'  => '<p>1TB, 2TB o 4TB han sido desde hace unos años capacidades habitules para discos SSD, sin embargo solo era cuestión de tiempo que el auge de los SSD llegara al mercado de los discos de gran capacidad.</p> <p>En la actualidad los discos SSD de 1TB estan muy extendidos, y casi todos los fabricantes los ofertan ya en su catálogo. Rondan los 300€, cuando hace no mucho tenían precios fuera de mercado, y las previsiones son que seguiran bajando durante muchos años.</p><p>Es cierto que los HDD aun conservan una ventaja importante de precio, el precio habitual para los discos HDD de 1TB es de 50€, y 60€ en los de 2TB. Sin embargo la distancia se ha acortado tanto, que hoy en día la compra de un SSD de 1TB es una opción muy válida para usuarios con exigencias importantes en almacenamiento y de rendimiento. Las ventajas son muchas, tiempos de acceso a los datos (son unas 10 veces más rápidos que los discos HDD convencionales), robustez ante caídas y golpes, el inapreciable nivel de ruido o el menor consumo.</p> <p>Si estas pensando en hacerte con uno, en RankingSSD hemos elegido y analizado algunos de los discos SSD de 1TB más populares de los actualmente disponibles en el mercado</p>.',
            'p2' => '',
            'meta' => 'El precio de los discos SSD de 1TB ha caído en picado y ya son una gran opción, los valoramos por precio y rendimiento y te enseñamos sus pros y contras'
        ],

        
        'fm2' => [
            'h1' => 'Discos SSD con formato M.2',
            'h2' => 'Abrimos paso al formato que marcará el futuro de los SSD, el formato M.2',
            'p'  => '<p>Con los discos SSD muy afianzados en el mercado, los fabricantes han buscado nuevas soluciones para poder exprimir aun más sus posibilidades, y una de las más prometedoras es el formato M.2.</p><p>Los discos SSD con formado M.2 tienen un rendimiendo muy superior a un disco SSD tradicional, llegando a alcanzar velocidades de lectura secuencial cercanas a 2GB/s y a 1.5GB/s en escritura. Unos números impresionantes si tenemos en cuenta que los discos SSD con la habitual interfaz Sata 3 tienen un límite máximo teórico (en la práctica es, según modelos, bastante más bajo) de 600MB/s (hay que tener en cuenta que las diferencias se reducen considerablemente cuando testeamos con muchos archivos pequeños en lugar de uno grande)</p><table class="table-content"><tr><td>IDE</td><td>133MB/s</td></tr><tr><td>SATA</td><td>150MB/s</td></tr><tr><td>SATA 2</td><td>300MB/s</td></tr><tr><td>SATA 3</td><td>600MB/s</td></tr><tr><td>SATA EXPRESS</td><td>2GB/s</td></tr><tr><td>M.2 sobre PCIe 2.0 x4</td><td>2GB/s</td></tr><tr><td>M.2 sobre PCIe 3.0 x4</td><td>2GB/s</td></tr></table><p>Los M.2 ya están en el mercado y empiezan a asomar en las posiciones destacadas de las listas de ventas. Antes de lanzarte a por uno debes asegurarte que tu equipo es compatible. Hay placas base de última generación y portátiles nuevos que ya incorporan ranuras M.2. <div class="note-content"><i class="fa fa-lightbulb-outline"></i>Algunos fabricantes de placas llaman a los puertos M.2 PCIe 3.0 x4, "Ultra M.2"</div>Sin embargo si tu equipo no tiene ranura M.2, tendrás que hacerte con una <a rel="nofollow" href="https://www.amazon.es/gp/product/B00MYCQP38/ref=as_li_tf_tl?ie=UTF8&camp=3626&creative=24790&creativeASIN=B00MYCQP38&linkCode=as2&tag=rankingssd-21">tarjeta PCIe como esta</a></p>',
            'p2' => '<p>M.2 es compatible con Sata3, USB y PCIe, esto puede ser algo confuso, y hay que tener en cuenta que ya existen en el mercado SSD M.2 bajo Sata3, son unidades que no representan una ventaja a nivel de velocidad, puesto que siguen viendose limitados por el interfaz Sata3.</p>  <p>Son los M.2 con interfaz PCIe los que están recibiendo una aceptación más importante, son dispositivos que aprobechan el ancho de banda del PCIe y que se convierten en un verdadero paso adelante con respecto a los SSD tradicionales.</p><p>Otro término que va a sonar mucho a partir de ahoraes el protocolo NVMe. Específicamente pensado para sustituir al viejo AHCE (creado y pensado para los HDD) en los actuales SSD, aporta mejoras en términos de velocidad, latencia o consumo. Esta nueva técnología, que ya está siendo usado por los más nuevos discos SSD, la podemos encontrar en conexiones PCIe o en formato 2,5 con interfaces U.2 o Sata Express (más velocidad que Sata 3).</p>',
            'meta' => '¿Qué son los SSD con formato M.2? ¿Merecen la pena? Te explicamos qué son, los analizamos y los valoramos en función a su precio.'
        ],



    ],




];



