--
-- Dumping initial data for table `region`
--


INSERT INTO `facility` (`id`, `name`, `district_id`, `partner_id`, `email`, `phone`, `rollout_status`, `rollout_date`, `google_maps`) VALUES
(1, 'Kisesa', 109, 6, '', '', 1, NULL, NULL),
(2, 'Nasa', 109, 6, '', '', 1, NULL, NULL),
(3, 'Nyanguge', 109, 6, '', '', 1, NULL, NULL),
(4, 'Mkula', 109, 6, '', '', 1, NULL, NULL),
(5, 'Misasi', 110, 6, '', '', 1, NULL, NULL),
(6, 'Bukumbi', 110, 6, '', '', 1, NULL, NULL),
(7, 'Makongoro', 170, 6, '', '', 1, NULL, NULL),
(8, 'Kwediboma', 162, 7, '', '', 1, NULL, NULL),
(9, 'Tunguli', 162, 7, '', '', 1, NULL, NULL),
(10, 'Kibirashi', 162, 7, '', '', 1, NULL, NULL),
(11, 'Kikunde', 162, 7, '', '', 1, NULL, NULL),
(12, 'Bulwa', 166, 7, '', '', 1, NULL, NULL),
(13, 'Mkuzi', 166, 7, '', '', 1, NULL, NULL),
(14, 'Mnazi', 165, 7, '', '', 1, NULL, NULL),
(15, 'Kangagai', 165, 7, '', '', 1, NULL, NULL),
(16, 'Kwai', 165, 7, '', '', 1, NULL, NULL),
(17, 'Soni', 165, 7, '', '', 1, NULL, NULL),
(18, 'Makambako', 115, 3, '', '', 1, NULL, NULL),
(19, 'Kidugala', 117, 3, '', '', 2, NULL, NULL),
(20, 'Mtwango', 117, 3, '', '', 1, NULL, NULL),
(21, 'JKT Mafinga', 117, 3, '', '0765785437', 1, NULL, NULL),
(22, 'Nzihi', 23, 3, '', '', 1, NULL, NULL),
(23, 'Isman', 23, 3, '', '', 1, NULL, NULL),
(24, 'Idodo', 23, 3, '', '', 1, NULL, NULL),
(25, 'Migoli', 23, 3, '', '', 1, NULL, NULL),
(26, 'Mgololo', 39, 3, '', '', 1, NULL, NULL),
(27, 'Kassanga', 39, 3, '', '', 1, NULL, NULL),
(28, 'Igawilo', 85, 4, '', '', 1, NULL, NULL),
(29, 'Ruanda', 85, 4, '', '', 1, NULL, NULL),
(30, 'Iyunga', 85, 4, '', '', 1, NULL, NULL),
(31, 'Ipinda', 83, 4, '', '', 1, NULL, NULL),
(32, 'Ngonga', 83, 4, '', '', 1, NULL, NULL),
(33, 'Matema', 83, 4, '', '', 1, NULL, NULL),
(34, 'Masukulu', 89, 4, '', '', 1, NULL, NULL),
(36, 'Igoma', 86, 4, '', '', 1, NULL, NULL),
(37, 'Inyala', 86, 4, '', '', 1, NULL, NULL),
(38, 'Mikindani', 103, 2, '', '', 1, NULL, NULL),
(39, 'Likombe', 103, 2, '', '', 1, NULL, NULL),
(40, 'Mkunya', 105, 2, '', '', 1, NULL, NULL),
(41, 'Kitangari', 105, 2, 'kitangari', '00000000000', 1, '2014-03-29', NULL),
(42, 'Police', 103, 2, 'Police', '0000000000', 1, '2014-03-29', NULL),
(43, 'Lupembe', 117, 3, 'lupembe', '0753503554', 1, '2014-04-01', NULL),
(44, '514 KJ', 115, 3, 'kj@yahoo.com', '45', 1, '2014-04-24', NULL),
(45, 'Mswaki', 162, 7, 'mswaki@gmail.com', '0754451264', 1, '2014-05-20', NULL),
(46, 'Negero', 162, 7, 'negero@gmail.com', '0789766128', 1, '2014-05-20', NULL),
(47, 'Nkumba', 166, 7, 'nkumba@gmail.com', '0788282497', 1, '2014-05-20', NULL),
(48, 'RLToffice', 166, 7, 'rlt@gmail.com', '0768357999', 1, '2014-05-20', NULL),
(49, 'Sunga', 165, 7, 'mtae@gmail.com', '0713501026', 1, '2014-05-20', NULL),
(50, 'Mlola', 165, 7, 'mlola@gmail.com', '0683674524', 1, '2014-05-20', NULL),
(51, 'Maramba', 167, 7, 'maramba@gmail.com', '0719000085', 1, '2014-05-20', NULL),
(52, 'Mjesani', 167, 7, 'mjesani@gmail.com', '0656484157', 1, '2014-05-20', NULL),
(53, 'Segera', 160, 7, 'segera@gmail.com', '0654682772', 1, '2014-05-20', NULL),
(54, 'Kabuku', 160, 7, 'kabuku@gmail.com', '717599384', 1, '2014-05-20', NULL),
(55, 'Bungu', 164, 7, 'bungu@gmail.com', '784199129', 1, '2014-05-20', NULL),
(56, 'Magoma', 164, 7, 'magoma@gmail.com', '0717191907', 1, '2014-05-20', NULL),
(57, 'Mombo', 164, 7, 'mombo@gmail.com', '0715678724', 1, '2014-05-20', NULL),
(58, 'Manolo', 164, 7, 'mombo@gmail.com', '0713187370', 1, '2014-05-20', NULL),
(59, 'Mkalamo', 168, 7, 'mkalamo@gmail.com', '0787316733', 1, '2014-05-20', NULL),
(60, 'Mwera', 168, 7, 'mwera', '0653699788', 1, '2014-05-20', NULL),
(61, 'kimanga', 168, 7, 'kimanga@gmail.com', '0714542999', 1, '2014-05-21', NULL),
(62, 'Back-up', 169, 7, 'backup@gmail.com', '0713821524', 1, '2014-06-02', NULL),
(63, 'Tunduma Health Centre', 90, 4, 'tundumahc@gmail.com', '0754947941', 1, '2014-06-09', NULL),
(65, 'Njombe Health Centre', 117, 3, 'njombehc@gmail.com', '0756215714', 1, '2014-06-09', NULL),
(66, 'Ipelele Health Centre', 116, 3, 'ipelele@yahoo.co.uk', '0754211703', 1, '2014-06-09', NULL),
(67, 'Kidabaga Health Centre', 25, 3, 'kidabaga@gmail.com', '0769271583', 1, '2014-06-09', NULL),
(68, 'Ipinda Health Centre', 83, 4, 'ipinga@yahoo.co.uk', '0755641826', 1, '2014-06-09', NULL),
(69, 'Mlangali Health Centre', 114, 3, 'mlangali@yahoo.co.uk', '0757017240', 1, '2014-06-09', NULL),
(70, 'Ikuti Health Centre', 89, 4, 'ikuti@gmail.com', '0759918126', 1, '2014-06-09', NULL),
(72, 'Madibira Health centre', 84, 4, 'madibira@yahoo.com', '0767432284', 1, '2014-06-09', NULL),
(73, 'Kiwira Coal Mine Health Centre', 83, 4, 'kiwira@yahoo.com', '0755995912', 1, '2014-06-09', NULL),
(74, 'Ngome Health centre', 24, 3, 'ngome@yahoo.com', '0768072740', 1, '2014-06-09', NULL),
(75, 'Allamano Health Centre', 24, 3, 'allamano@yahoo.com', '07675350998', 1, '2014-06-09', NULL),
(76, 'Matamba Health Centre', 116, 3, 'matamba@yahoo.com', '0752207061', 1, '2014-06-09', NULL),
(77, 'Itaka Health centre', 83, 4, 'itaka@yahoo.com', '0755245730', 1, '2014-06-09', NULL),
(78, 'Mbuyuni Health centre', 81, 4, 'mbuyunichunya@yahoo.com', '0762945312', 1, '2014-06-09', NULL),
(79, 'Makongolos DSP', 81, 4, 'makongolos@yahoo.com', '0766863289', 1, '2014-06-09', NULL),
(80, 'Mtanila Health Centre', 81, 4, 'mtanilahc@yahoo.com', '0759717808', 1, '2014-06-09', NULL),
(81, 'Njisi Disp', 83, 4, 'njisi@yahoo.com', '0767584918', 1, '2014-06-09', NULL),
(82, 'Mwakaleli Health centre', 172, 4, 'mwakaleli@yahoo.com', '0754873623', 1, '2014-06-09', NULL),
(83, 'Lupila Health centre', 116, 3, 'lupila@gmail.com', '0759001692', 1, '2014-06-09', NULL),
(84, 'Kimande Health centre', 23, 3, 'kimande@yahoo.com', '0754628981', 1, '2014-06-09', NULL),
(85, 'Malangali Health Centre', 39, 3, 'malangali@gmail.com', '0769217670', 1, '2014-06-09', NULL),
(86, 'Mtandika Health centre', 25, 3, 'mtandika@gmail.com', '0683858593', 1, '2014-06-09', NULL),
(87, 'Kamsamba Health centre', 87, 4, 'kamsamba@yahoo.com', '0766314482', 1, '2014-06-09', NULL),
(88, 'Ilembo', 86, 4, 'ilembo@yahoo.com', '0755843966', 1, '2014-06-09', NULL),
(90, 'Kisa Health centre', 89, 4, 'kisa@yahoo.com', '0765620705', 1, '2014-06-09', NULL),
(91, 'Manda Health Centre', 114, 3, 'manda@yahoo.com', '0763421360', 1, '2014-06-09', NULL),
(92, 'Isansa Health Centre', 87, 4, 'isansa@yahoo.com', '0758427216', 1, '2014-06-09', NULL),
(93, 'Mwambani Hospital', 81, 4, 'mwambani@yahoo.com', '0764598755', 2, '2014-06-09', NULL),
(95, 'Uhai Baptist Health Centre', 85, 4, 'uhai@gmail.com', '0755194556', 1, '2014-06-09', NULL),
(96, 'Lyasa Image Helath Centre', 25, 3, 'lyasa@yahoo.com', '0769754509', 1, '2014-06-09', NULL),
(97, 'Ifwagi Health Centre', 39, 3, 'ifwagi@yahoo.com', '0765367840', 1, '2014-06-10', NULL),
(98, 'Lubanda', 82, 9, 'lubanda', '0766077140', 1, '2014-06-10', NULL),
(99, 'Ibaba Health Centre', 82, 9, 'ibaba', '0753002917', 1, '2014-06-10', NULL),
(100, 'Mbebe', 82, 9, 'mbebe', '0766960024', 1, '2014-06-10', NULL);