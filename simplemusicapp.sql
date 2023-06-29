/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : simplemusicapp

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 09/01/2023 21:27:04
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
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of baihat
-- ----------------------------
INSERT INTO `baihat` VALUES (24, 'Intro', '/HinhBaiHat/63bc2048898ed-e772358978fef8a02eefd34f6a4ca6f3.jpg', 'MONO', '/LinkBaiHat/63bc2048898ed-Intro-MONO-7735971.mp3', 3, '9', '8', '11');
INSERT INTO `baihat` VALUES (25, 'Buông', '/HinhBaiHat/63bc20645e4aa-e772358978fef8a02eefd34f6a4ca6f3.jpg', 'MONO', '/LinkBaiHat/63bc20645e4aa-Buong-MONO-7736062.mp3', 0, '9', '8,9', '11');
INSERT INTO `baihat` VALUES (26, 'Em là', '/HinhBaiHat/63bc20838f799-e772358978fef8a02eefd34f6a4ca6f3.jpg', 'MONO', '/LinkBaiHat/63bc20838f799-EmLa-MONOOnionn-7736094.mp3', 0, '9', '8,9', '11');
INSERT INTO `baihat` VALUES (27, 'Kill Me', '/HinhBaiHat/63bc20a3c2ae5-e772358978fef8a02eefd34f6a4ca6f3.jpg', 'MONO', '/LinkBaiHat/63bc20a3c2ae5-KillMe-MONO-7736121.mp3', 0, '9', '8', NULL);
INSERT INTO `baihat` VALUES (28, 'Thế Là Tết', '/HinhBaiHat/63bc224b6bfb2-2fc335b282d1deadc9137dee0e69450f.jpg', 'Minzy', '/LinkBaiHat/63bc224b6bfb2-TheLaTet-DucPhucHoaMinzy-5353822.mp3', 0, NULL, '9', '11');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of idalbum
-- ----------------------------
INSERT INTO `idalbum` VALUES (6, 'Níu Duyên Không Thành (Single)', 'Hương Ly', '/HinhAlbum/63bc1da7cd1d9-5260e7d0c97762e070ab8b3e24da3500.jpg');
INSERT INTO `idalbum` VALUES (7, 'Xuân Tha Hương', 'Lưu Ánh Loan', '/HinhAlbum/63bc1e094fadb-84dcc621d8bdf4a1d06bd718426dbd11.jpg');
INSERT INTO `idalbum` VALUES (8, 'Vọng', 'buitruonglinh', '/HinhAlbum/63bc1e3173a28-c49dded74500b9486b75168c17023ab6.jpg');
INSERT INTO `idalbum` VALUES (9, '22', 'MONO', '/HinhAlbum/63bc1e6e76b36-e772358978fef8a02eefd34f6a4ca6f3.jpg');

-- ----------------------------
-- Table structure for idchude
-- ----------------------------
DROP TABLE IF EXISTS `idchude`;
CREATE TABLE `idchude`  (
  `idChude` int NOT NULL AUTO_INCREMENT,
  `TenChuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhChuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idChude`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of idchude
-- ----------------------------
INSERT INTO `idchude` VALUES (7, 'Remix Việt Ngày Nay', '/HinhChuDe/63bc1c66bbb54-5d26e39c6c700ee9174db1fda4e057e6.jpg');
INSERT INTO `idchude` VALUES (8, 'Acoustic', '/HinhChuDe/63bc1cb46b5af-c967826d16f693e293de6f04ccdc111f.jpg');
INSERT INTO `idchude` VALUES (9, 'Indie', '/HinhChuDe/63bc1cec84754-504c9667858918caac5f16ac59a8249a.jpg');
INSERT INTO `idchude` VALUES (10, 'Trữ Tình & Bolero', '/HinhChuDe/63bc1d3797061-159226aaebc0421c28d4921c041dc862.jpg');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of paylist
-- ----------------------------
INSERT INTO `paylist` VALUES (11, 'Rap Vui Ngày Tết', '/HinhNen/63bc1ed28540e-2fc335b282d1deadc9137dee0e69450f.jpg', '/HinhIcon/63bc1ed28540e-f23bf9621c6e87ef8c9f168994778627.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quangcao
-- ----------------------------
INSERT INTO `quangcao` VALUES (10, '/hinhanh/63bc21963c405-e772358978fef8a02eefd34f6a4ca6f3.jpg', 'MONO ra mắt album 22: “Những trạng thái vui, buồn bạn cảm nhận qua các bài hát chính là cảm xúc thật sự của mình”', '24', 'Intro', '/banner/63bc21963c405-MONO-COVER-ALBUM.jpg');
INSERT INTO `quangcao` VALUES (11, '/hinhanh/63bc22cc7b870-2fc335b282d1deadc9137dee0e69450f.jpg', 'XUÂN 2023 - Bình An Đón Xuân - ca khúc nhạc Tết hay nhất', '28', 'Thế Là Tết', '/banner/63bc22cc7b870-tt-nguyen-dan-2023-vao-ngay-nao-duong-lch_d559e3ef.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of theloai
-- ----------------------------
INSERT INTO `theloai` VALUES (8, 'V-Pop', '/HinhTheLoai/63bc1f2808ab6-d77ec003f0b03aaedb1759f05b0c00d7.jpg', '7');
INSERT INTO `theloai` VALUES (9, 'Rock', '/HinhTheLoai/63bc1f5ca5b73-eecf7daea37a298c2ede05bcb6a269e5.jpg', '9');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'hieu', '$2y$10$Dak4EjCVo7wxsXcuMvtJPuBlI5BbslI0kKtE6YEDdgVUS4H1ntixq');

SET FOREIGN_KEY_CHECKS = 1;
