/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : id16870566_baicuoiky

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 08/01/2023 20:55:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for baihat
-- ----------------------------
DROP TABLE IF EXISTS `baihat`;
CREATE TABLE `baihat`  (
  `idBaiHat` int NOT NULL AUTO_INCREMENT,
  `TenBaiHat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhBaiHat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Casi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LinkBaiHat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LuotThich` int NOT NULL DEFAULT 0,
  `idAlbum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `idTheLoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `idPayList` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idBaiHat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of baihat
-- ----------------------------
INSERT INTO `baihat` VALUES (3, 'Va Vào Giai Điệu Này ', 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/mck.jpg', 'MCK', 'https://bookingluxuru.000webhostapp.com/Baihat/vavaogiaidieunay.mp3', 1, '0', '2', '6,2');
INSERT INTO `baihat` VALUES (4, 'Black Jack , Tháng 5', 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/black.jpg', 'Soobin', 'https://bookingluxuru.000webhostapp.com/Baihat/masup.mp3', 1, NULL, NULL, '6');
INSERT INTO `baihat` VALUES (5, '3107 - 2', 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/307.jpg', 'Duongg, Nâu', 'https://bookingluxuru.000webhostapp.com/Baihat/3107-WnDuonggNau-6099150.mp3', 1, '0', '4', '0');
INSERT INTO `baihat` VALUES (6, 'Câu Hẹn Câu Thề', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/dinhdung.jpg', 'Đình Dũng', 'https://bookingluxuru.000webhostapp.com/Baihat/CauHenCauThe-DinhDung-6994741.mp3', 1, '0', '0', '1');
INSERT INTO `baihat` VALUES (8, 'Thầm Thương Trộm Nhớ', 'https://bookingluxuru.000webhostapp.com/Hinhanh/tttnho.jpg', 'Hoàng Dũng - Miu Lê', 'https://bookingluxuru.000webhostapp.com/Baihat/tttn.mp3', 1, '0', '4', '0');
INSERT INTO `baihat` VALUES (11, 'Quan Tài Hư', 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/qth.jpg', 'Tommy Tèo', 'https://bookingluxuru.000webhostapp.com/Baihat/QuanTaiHu-YoungMilo-6996488.mp3', 1, NULL, '2', NULL);
INSERT INTO `baihat` VALUES (12, 'Sài Gòn Đau Lòng Quá', 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/HKTxHD_SGDLQ.jpg', ' Hứa Kim Tuyền, Hoàng Duyên', 'https://bookingluxuru.000webhostapp.com/Baihat/SaiGonDauLongQua-HuaKimTuyenHoangDuyen-6992977.mp3', 1, NULL, NULL, '6');
INSERT INTO `baihat` VALUES (13, 'Lạc Trôi', 'https://bookingluxuru.000webhostapp.com/Hinhanh/artworks-000202632576-yhfroc-t500x500.jpg', 'Sơn Tùng MT-P', 'https://bookingluxuru.000webhostapp.com/Baihat/Lac-Troi-Masew-Mix-Son-Tung-M-TP-Masew.mp3', 200, NULL, NULL, NULL);
INSERT INTO `baihat` VALUES (17, 'fgdfgd', 'HinhBaiHat/63ba7eb208380-320917454_562148408607138_1218948686193079449_n.jpg', 'dfgdfg', 'LinkBaiHat/63ba7eb208380-Lunatic Eyes _ Invisible Full Moon 【F_C TOUHOU RE_LOG VOL. 2】.mp3', 0, '1', '1,2,3', '1,2');
INSERT INTO `baihat` VALUES (20, 'aaa', '/HinhBaiHat/63bac8cf50fda-320917454_562148408607138_1218948686193079449_n.jpg', 'aaa', '/LinkBaiHat/63bac8cf50fda-6390bbac73962-RsAkU - Time Splash.mp3', 0, '1', '1,2', '1,2');

-- ----------------------------
-- Table structure for idalbum
-- ----------------------------
DROP TABLE IF EXISTS `idalbum`;
CREATE TABLE `idalbum`  (
  `idAlbum` int NOT NULL AUTO_INCREMENT,
  `TenAlbum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenCasiAlbum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhAlbum` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idAlbum`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of idalbum
-- ----------------------------
INSERT INTO `idalbum` VALUES (1, 'Là 1 Thằng Con Trai (Single)', 'Jack', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Album/albumjack.jpg');
INSERT INTO `idalbum` VALUES (2, 'Những bài hát hay nhất của khách phương', 'Khánh Phương', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Album/kp.jpg');

-- ----------------------------
-- Table structure for idchude
-- ----------------------------
DROP TABLE IF EXISTS `idchude`;
CREATE TABLE `idchude`  (
  `idChude` int NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhChuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idChude`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of idchude
-- ----------------------------
INSERT INTO `idchude` VALUES (1, 'Nhạc Việt Remix Hot Tháng 04/2021', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/chude.jpg');
INSERT INTO `idchude` VALUES (2, 'Acoutstic', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/ac.jpg');
INSERT INTO `idchude` VALUES (3, 'Underground', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/rap.png');
INSERT INTO `idchude` VALUES (4, 'Cô Đơn', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/codon.jpg');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2023_01_08_032110_create_users_table', 1);

-- ----------------------------
-- Table structure for paylist
-- ----------------------------
DROP TABLE IF EXISTS `paylist`;
CREATE TABLE `paylist`  (
  `idPayList` int NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhNen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhIcon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idPayList`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paylist
-- ----------------------------
INSERT INTO `paylist` VALUES (1, 'Những Bài Hát Hay Nhất Của Đình Dũng', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/bbannerdingdung.jpg', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/dinhdung.jpg');
INSERT INTO `paylist` VALUES (2, 'Rap Việt All-Star Concert 2021', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/rapvietbanner.jpeg', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/rapviet.jpg');
INSERT INTO `paylist` VALUES (3, 'Top 20 Tuần 4/2020', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/1580371498142_500.jpg', 'https://bookingluxuru.000webhostapp.com/Hinhanh/paylist/1580371498142_500.jpg');
INSERT INTO `paylist` VALUES (9, 'test', '/HinhNen/63bac938b18c5-320917454_562148408607138_1218948686193079449_n.jpg', '/HinhIcon/63bac938b18c5-320917454_562148408607138_1218948686193079449_n.jpg');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for quangcao
-- ----------------------------
DROP TABLE IF EXISTS `quangcao`;
CREATE TABLE `quangcao`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idBaiHat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `TenBaiHat` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quangcao
-- ----------------------------
INSERT INTO `quangcao` VALUES (1, 'https://bookingluxuru.000webhostapp.com/Hinhanh/soobin.jpg', 'BlackJack là bài hát được thế hiện bởi Soobin x Binz. ', '4', 'Mashup', 'https://bookingluxuru.000webhostapp.com/Hinhanh/bannersb.jpg');
INSERT INTO `quangcao` VALUES (2, 'https://bookingluxuru.000webhostapp.com/Hinhanh/AnhNhac/mrmsc.jpg', 'Muộn Rồi Mà Sao Còn là bài hát mới nhất của Sơn Tùng M-TP, đây là một bản pop-ballad ngọt ngào cùng giai điệu vui tươi dễ dàng chạm đến trái tim. ', '2', 'Muộn Rồi Mà Sao Còn', 'https://bookingluxuru.000webhostapp.com/Hinhanh/loi-bai-hat-muon-roi-ma-sao-con.jpg');
INSERT INTO `quangcao` VALUES (3, 'https://bookingluxuru.000webhostapp.com/Hinhanh/hoangdung.jpg', 'Sự Kết Hợp Của Miu Lê Và Hoàng Dũng', '8', 'Thầm Thương Trộm Nhớ', 'https://bookingluxuru.000webhostapp.com/Hinhanh/tttnho.jpg');
INSERT INTO `quangcao` VALUES (5, '/hinhanh/63bac7d906380-320917454_562148408607138_1218948686193079449_n.jpg', 'test', '2', 'Muộn Rồi Mà Sao Còn', '/banner/63bac7d906380-320917454_562148408607138_1218948686193079449_n.jpg');

-- ----------------------------
-- Table structure for theloai
-- ----------------------------
DROP TABLE IF EXISTS `theloai`;
CREATE TABLE `theloai`  (
  `idTheLoai` int NOT NULL AUTO_INCREMENT,
  `TenTheLoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhTheLoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idChude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idTheLoai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of theloai
-- ----------------------------
INSERT INTO `theloai` VALUES (2, 'Rap', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/rap.png', '3');
INSERT INTO `theloai` VALUES (3, 'Nhạc Buồn', 'https://bookingluxuru.000webhostapp.com/Hinhanh/Chude/codon.jpg', '4');
INSERT INTO `theloai` VALUES (4, 'Nhạc Lofi', 'https://bookingluxuru.000webhostapp.com/Hinhanh/TheLoai/lofi.png', NULL);
INSERT INTO `theloai` VALUES (5, 'dfgdfg', '/HinhTheLoai/63bab79c480a7-15_1.2_19IT210_Phan Văn Quốc Tuấn (1).jpg', '1');
INSERT INTO `theloai` VALUES (6, 'ttt', '/HinhTheLoai/63bab7c04cb4e-320917454_562148408607138_1218948686193079449_n.jpg', '0');
INSERT INTO `theloai` VALUES (7, 'vvv', '/HinhTheLoai/63bab823e9fcc-320917454_562148408607138_1218948686193079449_n.jpg', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'tuan', '$2y$10$Dak4EjCVo7wxsXcuMvtJPuBlI5BbslI0kKtE6YEDdgVUS4H1ntixq');

SET FOREIGN_KEY_CHECKS = 1;
