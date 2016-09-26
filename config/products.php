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
        'B01ECEM7S2', //4tb, muy nuevo?
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


    ],

    'title' => [
        'B00TWIUXVW' => 'Samsung 850 EVO M.2',
        'B00TGIW1XG' => 'Samsung 850 EVO M.2',
        'B00A1ZTZOG' => 'Kingston SSDNow V300',
        'B00A1ZTZNM' => 'Kingston SSDNow V300',
        'B00FXJWO5C' => 'Kingston SSDNow V300',
        'B00A35X6GM' => 'Kingston SSDNow V300',
    ],

    'size' => [
        'B00COFMPAM' => '60',
        'B00TGIVTP2' => '250',
        'B00TGIVVKU' => '500',
        'B01K1W7JNW' => '60',
        'B014KH92IY' => '960',
        'B00RQA6LFA' => '250',
    ],


    'stats' => [
        //Average Bench, MKT, Read, Write, image, format

        //Samsung 750, 850
        ['B01AAKZRPW', '70.8', '0.5', '467', '252', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/42465/Samsung-SSD-750-EVO-120GB'],
        ['B01AAKZRP2', '71.3', '1.3', '470', '249', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/71929/Samsung-SSD-750-EVO-250GB'],
        ['B01G844L88', '69.9', '0.3', '456', '245', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/143302/Samsung-SSD-750-EVO-500GB'],
        ['B00P738MUU', '94.5', '1.1', '494', '389', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-1TB/Rating/3576'],
        ['B00P738Z8O', '93.6', '1.5', '491', '386', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-120GB/Rating/3484'],
        ['B010UFKDHY', '90.1', '0.0', '503', '395', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/32539/Samsung-SSD-850-EVO-2TB'],
        ['B00P736UEU', '94.0', '9.0', '490', '384', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-250GB/Rating/2977'],
        ['B00P73B1E4', '96.4', '6.2', '492', '386', '/image-01.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Samsung-850-Evo-500GB/Rating/3477'],

        //OCZ
        ['B01B4NUKMY', '66.5', '0.2', '489', '323', '/image-02.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/OCZ-Trion-150-240GB/Rating/3619'],
        ['B01B4NUKME', '66.1', '0.2', '484', '318', '/image-02.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/OCZ-Trion-150-480GB/Rating/3620'],

        //KINGSTON V300, UV400
        ['B00A1ZTZOG', '47.2', '4.4', '340', '111', '/image-03.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-120GB/Rating/1892'],
        ['B00A1ZTZNM', '58.6', '2.3', '410', '196', '/image-03.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-240GB/Rating/1817'],
        ['B00FXJWO5C', '52.1', '0.2', '428', '225', '/image-03.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Kingston-SSDNow-V300-480GB/Rating/3480'],
        ['B00A35X6GM', '43.2', '0.4', '322', '073', '/image-03.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/1905/KINGSTON-SV300S37A60G'],
        ['B01FJ4UN76', '52.4', '0.7', '446', '178', '/image-05.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137022/KINGSTON-SUV400S37120G'],
        ['B01FJ4UL2S', '54.9', '0.9', '452', '221', '/image-05.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137815/KINGSTON-SUV400S37240G'],
        ['B01FJ4UM9A', '54.7', '0.2', '451', '230', '/image-05.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/138433/KINGSTON-SUV400S37480G'],

        //CRUCIAL
        ['B016JREGAC', '63.6', '0.8', '463', '232', '/image-04.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-240GB/Rating/3626'],
        ['B016JREG84', '63.1', '0.2', '462', '232', '/image-04.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-480GB/Rating/3627'],
        ['B016JREG6Q', '65.2', '0.0', '473', '237', '/image-04.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Crucial-BX200-960GB/Rating/3628'],

        //TRASCEND SSD220, SSD370
        ['B01FYD9SKU', '66.3', '0.0', '479', '226', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/152820/TS120GSSD220S'],
        ['B01DRWWNX4', '60.3', '0.0', '459', '223', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/129705/TS240GSSD220S'],
        ['B01DRWWLUO', '63.8', '0.0', '465', '230', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/137646/TS480GSSD220S'],
        ['B00VX82P42', '53.5', '0.0', '409', '76', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/17734/TS64GSSD370'],
        ['B00VX82P2E', '65.0', '0.0', '482', '148', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-128GB/Rating/2699'],
        ['B00VX82P38', '76.5', '0.1', '487', '289', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-256GB/Rating/2701'],
        ['B00VX82PA6', '82.9', '0.0', '486', '405', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-512GB/Rating/3472'],
        ['B00VX82KBK', '83.5', '0.0', '472', '379', '/image-06.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Transcend-SSD370-1TB/Rating/3579'],

        //TOSHIBA Q300
        ['B01AWP7NAW', '50.6', '0.1', '455', '186', '/image-08.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/35283/TOSHIBA-Q300'],
        ['B01AWP7O7Y', '54.0', '0.1', '464', '209', '/image-08.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/35974/TOSHIBA-Q300'],
        ['B01AWP7L7M', '51.4', '0.1', '443', '196', '/image-08.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/38603/TOSHIBA-Q300'],
        ['B01AWP7MI0', '59.4', '0.0', '491', '220', '/image-08.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/123892/TOSHIBA-Q300'],
        
        //HYPERX FURY, SAVAGE
        ['B00KW3MTBS', '54.8', '1.1', '438', '118', '/image-09.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/HyperX-Fury-120GB/Rating/2586'],
        ['B00KW3MT7W', '64.8', '0.6', '475', '208', '/image-09.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L3CO', '75.3', '0.2', '480', '340', '/image-17.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/HyperX-Savage-120GB/Rating/3496'],
        ['B00W35L5S6', '81.0', '0.6', '485', '440', '/image-17.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L2KC', '84.1', '0.0', '511', '485', '/image-17.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],
        ['B00W35L2A2', '81.6', '0.0', '482', '460', '/image-17.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13145/KINGSTON-SHFS37A240G'],

        //SANDISK ULTRA II, PLUS
        ['B00M8ABCZM', '63.5', '0.2', '431', '221', '/image-07.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-120GB/Rating/3486'],
        ['B00M8ABEIM', '65.2', '0.8', '448', '250', '/image-07.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-240GB/Rating/2548'],
        ['B00M8ABFX6', '67.2', '0.8', '457', '272', '/image-07.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-480GB/Rating/3473'],
        ['B00M8ABHVQ', '65.4', '0.5', '454', '256', '/image-07.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SanDisk-Ultra-II-960GB/Rating/3582'],
        ['B00S9Q9UKS', '62.3', '1.0', '463', '247', '/image-11.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/24452/SanDisk-SDSSDA120G'],
        ['B00S9Q9VS4', '66.2', '1.5', '463', '326', '/image-11.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/25612/SanDisk-SDSSDA240G'],
        ['B018X8LB2G', '62.7', '0.1', '477', '328', '/image-11.png', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/131770/SanDisk-SDSSDA480G'],

        //ADATA
        ['B013J7PP96', '60.9', '0.7', '463', '201', '/image-13.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-120GB/Rating/3622'],
        ['B013J7Q338', '63.4', '0.6', '464', '232', '/image-13.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-240GB/Rating/3623'],
        ['B013J7P7SK', '62.3', '0.2', '462', '234', '/image-13.jpg', '2,5\'\' Sata 3', 'http://ssd.userbenchmark.com/Adata-Premier-SP550-480GB/Rating/3624'],

        //PORTABLE
        ['B01AAKZRKW', '74.3', '0.0', '422', '396', '/image-18.png', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/117507/Samsung-Portable-SSD-T3'],
        ['B01AAKZRU2', '64.9', '0.0', '418', '358', '/image-18.png', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/81567/Samsung-Portable-SSD-T3'],
        ['B01AAKZRMK', '60.0', '0.0', '404', '340', '/image-18.png', 'Portable USB 3.1', 'http://ssd.userbenchmark.com/SpeedTest/130206/Samsung-Portable-SSD-T3'],
        ['B00ZTRY532', '60.3', '0.0', '402', '312', '/image-19.png', 'Portable USB 3.1', '-'],//inventados
        ['B00ZTRY5IW', '70.0', '0.0', '418', '354', '/image-19.png', 'Portable USB 3.1', '-'],
        ['B00ZYNHDT4', '67.4', '0.0', '414', '344', '/image-19.png', 'Portable USB 3.1', '-'],//inventados



        //M.2 SAMSUNG
        ['B015SOI392', '189', '1.2', '1682', '843', '/image-10.png', 'M.2 PCIe', 'http://ssd.userbenchmark.com/SpeedTest/38570/NVMe-Samsung-SSD-950'],
        ['B01639694M', '232', '1.8', '1966', '1299', '/image-10.png', 'M.2 PCIe', 'http://ssd.userbenchmark.com/SpeedTest/38554/NVMe-Samsung-SSD-950'],

        ['B00TWIUXVW', '94.5', '0.1', '500', '391', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/27974/Samsung-SSD-850-EVO-M2-120GB'],
        ['B00TGIVZTW', '93.3', '0.4', '498', '387', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/27038/Samsung-SSD-850-EVO-M2-250GB'],
        ['B00TGIW1XG', '95.8', '0.3', '499', '393', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/25579/Samsung-SSD-850-EVO-M2-500GB'],

        //M.2 KINGSTOM
        ['B01BCEYJPY', '63.7', '0.0', '503', '186', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/80405/KINGSTON-SM2280S3G2120G'],
        ['B01BCEYML0', '74.6', '0.1', '503', '304', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/118096/KINGSTON-SM2280S3G2240G'],
        ['B01BCEYOXG', '85.7', '0.0', '504', '464', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/128228/KINGSTON-SM2280S3G2480G'],

        //M.2 TRANSCEND
        ['B00KLTPTL0', '34.5', '0.0', '208', '38', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/67237/TS32GMTS400'],
        ['B00KLTPTA6', '38.5', '0.0', '225', '37', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/64669/TS32GMTS600'],
        ['B00KLTPW30', '29.2', '0.0', '211', '37', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/37749/TS32GMTS800'],
        ['B00KLTPSKM', '50.1', '0.0', '422', '74', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/38328/TS64GMTS400'],
        ['B00KLTPVJ0', '59.2', '0.0', '409', '76', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/46925/TS64GMTS600'],
        ['B00KLTPUPA', '56.3', '0.0', '419', '77', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/22661/TS64GMTS800'],
        ['B00KLTPUU0', '67.6', '0.0', '502', '128', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/31664/TS128GMT-TS128GMTS400'],
        ['B00KLTPUFA', '51.9', '0.0', '477', '121', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/36102/TS128GMT-S600'],
        ['B00KLTPURI', '68.6', '0.0', '495', '197', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/149987/TS128GMT-S800'],
        ['B00KLTPUG4', '78.6', '0.0', '500', '295', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/18101/TS256GMTS400'],
        ['B00KLTPT6A', '87.3', '0.0', '503', '284', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/18928/TS256GMT-S600'],
        ['B00KLTPUYG', '81.0', '0.0', '495', '294', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/33392/TS256GMT-S800'],
        ['B00KLTPWJE', '81.5', '0.0', '490', '406', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/13460/TS512GMTS600'],
        ['B00KLTPVV8', '81.1', '0.0', '497', '409', '/image-10.png', 'M.2 Sata 3', 'http://ssd.userbenchmark.com/SpeedTest/22251/TS512GMTS800'],

        //mSATA
        ['B00CG8GTPO', '63.2', '0.0', '471', '173', '/image-12.jpg', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/536/KINGSTON-SMS200S3120G'],
        ['B00COFMPAM', '51.3', '0.2', '361', '115', '/image-12.jpg', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/5751/KINGSTON-SMS200S360G'],
        ['B00JT0DSQK', '57.7', '0.0', '463', '163', '/image-12.jpg', 'mSata', 'http://ssd.userbenchmark.com/SpeedTest/163802/SMS200S3-240G'],


    ],

    'descriptions' => [
        'evo750' => [
            'h1' => 'Samsung EVO 750',
            'h2' => 'El SSD barato de Samsung',
            'p' => 'A prinipios de 2016 Samsung presentó sus nuevos 750 EVO con 2 modelos de poca capacidad (120 y 250GB), y el pasado mes de Junio añadió a la gama el modelo de 500GB. La línea 750 EVO es la opción mas económica de la marca, un producto pensado para para competir en la gama baja donde prima la relacion precio por GB. A nivel técnico se encuentra solo un paso por debajo de su hermoano mayor (850 EVO), monta controlador MGX, chips NAND TLC (sin tecnología 3D NAND) y 256 MB de caché DRAM y ofrece 3 años de garantía (a diferencia de los 5 años del 850 EVO). El cuidado que le ha dado Samsung a su SSD más económico propicia un gran resultado en los tests de rendimiento, que se va aproximando al máximo en la que su madura interfaz Sata 3 puede trabajar (500MB/s), y se ha convertido rapidamente en uno de los modelos mas vendidos del mercado. Si buscas un SSD bueno y barato, cómpralo.'
            ],
        'evo850' => [
            'h1' => 'Samsung EVO 850',
            'h2' => 'El SSD más vendido de Samsung',
            'p' => 'Siguiendo la línea de éxito de su predecesor, el 840 EVO, y una vez subsanados algunos de sus problemas de rendimiento, encontramos uno de los SSD más populares, el 850 Evo. Un producto con capacidades disponibles desde los 120 GB hasta los mas nuevos de 4Tb, se ha convertido en todo un referente y desde hace tiempo se encuentran entre los mas vendidos en las principales tiendas online. Como podemos observar en los tests, el 850 EVO presenta un rendimiento excelente al exprimir al máximo las capacidades del Sata 3, y aunque los 520 MB/s de escritura y 540 MB/s de lectura que anuncia Samsung en sus especificaciones oficiales, caen como es habitual en ser demasiado optimistas, los valores reales no estan tan alejados como en otros casos, y son hasta el momento los mejores resultados en este formato que encontramos en rankingssd.com. Si ademas tenemos en cuenta su ajustado precio nos encontramos ante una compra mas que recomendada, una compra maestra.'
            ],

        'v300' => [
            'h1' => 'Kingston SSDNow V300',
            'h2' => 'Uno de los SSD más conocidos y mas económicos, lo examinamos',
            'p' => 'El SSDNow V300 es un veterano (muy veterano) modelo de Kingston, fue presentado en varano del 2013 y se ubica en la gama mas baja de la marca. Tras superar varios problemas iniciales con firmwares anteriores al 5.0.5, se ha asentado con el paso del tiempo hasta convertirse en la actualidad en uno de los modelos con mayor cuota de mercado. El fabricante nos anuncia unos valores de 450MB/s en lectura y 450MB/s en escritura, bastante alejadas de las medidas reales, que se situan en un rango medio de rendimiento. Válido si deseas gastar lo menos posible . El V300 se encuentra disponible en capacidades de 16, 120, 240 y 480GB y ofrece 3 años de garantía.'
            ],

        'uv400' => [
            'h1' => 'Kingston SSDNow UV400',
            'h2' => 'Nuevo modelo de Kingston para el mercado de gama económica',
            'p' => 'Kingston dispone desde el pasado mes de Mayo de 2016 de un nuevo modelo dentro de la familia SSDNOW, el UV400. Es la evolución del casi testimonial UV300 y se situa como todos los SSDNOW en la supuesta gama de entrada. Es también el segundo TLC NAND de Kingston (tras el mencionado UV300), usa un TLC NAND Toshiba 15nm y controlador Marvell de 4 canales 88SS1074 y ofrece 550 MB/s de lectura y de 350 a 500 MB/s en escritura, siempre según fabricante. En la práctica el rendimiento es muy similar al de su hermano pequeño, el SSDNOW V300. También lo es el precio, por lo que ambas opciones son similares. El UV400 viene con cuatro variantes de almacenamiento, 120, 240, 480 y 960GB y 3 años de garantía.'
            ],

        'max100' => [
            'h1' => 'Discos SSD baratos',
            'h2' => '¿Cuales son los mejores discos ssd por menos de 100€?',
            'p'  => ''
        ],

        
        'max200' => [
            'h1' => 'Discos SSD recomendados',
            'h2' => 'Valoramos los mejores discos SSD por menos de 200€',
            'p'  => ''
        ],

        
        'b128' => [
            'h1' => 'Discos SSD de 128GB',
            'h2' => 'Guía de compra de SSD de 128GB',
            'p'  => ''
        ],

        
        'b256' => [
            'h1' => 'Discos SSD de 256GB',
            'h2' => 'Guía de compra de SSD de 256GB',
            'p'  => ''
        ],

        
        'b512' => [
            'h1' => 'Discos SSD de 512GB',
            'h2' => 'Guía de compra de SSD de 512B',
            'p'  => ''
        ],

        
        'b1tb' => [
            'h1' => 'Discos SSD de 1TB',
            'h2' => 'Guía de compra de SSD de 1TB',
            'p'  => ''
        ],

        
        'fm2' => [
            'h1' => 'Discos SSD con formato M.2',
            'h2' => '¿Qué es M.2? ¿Merece la pena? ¿Qué SSD M.2 hay disponibles actualmente?',
            'p'  => ''
        ],



    ],




];