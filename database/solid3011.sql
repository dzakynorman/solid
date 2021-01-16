/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : solid

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 01/12/2020 00:52:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hlsp
-- ----------------------------
DROP TABLE IF EXISTS `hlsp`;
CREATE TABLE `hlsp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_solid` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name_class` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vlsp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hlsp
-- ----------------------------
INSERT INTO `hlsp` VALUES (1, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (2, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (3, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (4, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (5, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (6, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (7, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (8, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (9, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (10, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (11, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (12, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (13, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (14, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (15, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (16, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (17, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (18, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (19, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (20, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (21, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (22, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (23, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (24, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (25, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (26, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (27, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (28, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (29, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (30, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (31, 'Solidjwxs1gn6k7', 'closable', 'TIDAK');
INSERT INTO `hlsp` VALUES (32, 'Solidjwxs1gn6k7', 'flushable', 'TIDAK');
INSERT INTO `hlsp` VALUES (33, 'Solidw832d1qfjb', 'command', 'YA');
INSERT INTO `hlsp` VALUES (34, 'Solidw832d1qfjb', 'command', 'YA');
INSERT INTO `hlsp` VALUES (35, 'Solidw832d1qfjb', 'target', 'TIDAK');
INSERT INTO `hlsp` VALUES (36, 'Solidw832d1qfjb', 'command', 'YA');
INSERT INTO `hlsp` VALUES (37, 'Solidw832d1qfjb', 'command', 'YA');
INSERT INTO `hlsp` VALUES (38, 'Solidw832d1qfjb', 'target', 'TIDAK');

-- ----------------------------
-- Table structure for hsrp
-- ----------------------------
DROP TABLE IF EXISTS `hsrp`;
CREATE TABLE `hsrp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_solid` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name_class` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vsrp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hsrp
-- ----------------------------
INSERT INTO `hsrp` VALUES (1, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (2, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (3, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (4, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (5, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (6, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (7, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (8, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (9, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (10, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (11, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (12, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (13, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (14, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (15, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (16, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (17, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (18, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (19, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (20, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (21, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (22, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (23, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (24, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (25, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (26, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (27, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (28, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (29, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (30, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (31, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (32, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (33, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (34, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (35, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (36, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (37, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (38, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (39, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (40, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (41, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (42, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (43, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (44, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (45, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (46, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (47, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (48, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (49, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (50, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (51, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (52, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (53, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (54, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (55, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (56, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (57, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (58, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (59, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (60, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (61, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (62, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (63, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (64, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (65, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (66, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (67, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (68, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (69, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (70, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (71, 'Solidjwxs1gn6k7', 'closable', 'YA');
INSERT INTO `hsrp` VALUES (72, 'Solidjwxs1gn6k7', 'flushable', 'YA');
INSERT INTO `hsrp` VALUES (73, 'Solidjwxs1gn6k7', 'outputstream', 'YA');
INSERT INTO `hsrp` VALUES (74, 'Solidjwxs1gn6k7', 'outputstream_a', 'YA');
INSERT INTO `hsrp` VALUES (75, 'Solidjwxs1gn6k7', 'outputstream_b', 'YA');
INSERT INTO `hsrp` VALUES (76, 'Solidw832d1qfjb', 'command', 'YA');
INSERT INTO `hsrp` VALUES (77, 'Solidw832d1qfjb', 'goblin', 'YA');
INSERT INTO `hsrp` VALUES (78, 'Solidw832d1qfjb', 'invisibilityspell', 'YA');
INSERT INTO `hsrp` VALUES (79, 'Solidw832d1qfjb', 'target', 'YA');
INSERT INTO `hsrp` VALUES (80, 'Solidw832d1qfjb', 'shrinkspell', 'YA');
INSERT INTO `hsrp` VALUES (81, 'Solidw832d1qfjb', 'wizard', 'YA');

-- ----------------------------
-- Table structure for tbl_class
-- ----------------------------
DROP TABLE IF EXISTS `tbl_class`;
CREATE TABLE `tbl_class`  (
  `id_class` int NOT NULL AUTO_INCREMENT,
  `id_solid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_users` int NOT NULL DEFAULT 0,
  `name_class` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class_induk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type_class` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_parent` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isInduk` int NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_class`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_class
-- ----------------------------
INSERT INTO `tbl_class` VALUES (16, 'Solidw832d1qfjb', 4, 'wizard', '', 'class', 'concrete', 1, '2020-12-01 00:49:52', '2020-12-01 00:49:52');
INSERT INTO `tbl_class` VALUES (20, 'Solidw832d1qfjb', 4, 'target', '', 'class', 'abstract', 1, '2020-12-01 00:49:57', '2020-12-01 00:49:57');
INSERT INTO `tbl_class` VALUES (21, 'Solidw832d1qfjb', 4, 'command', '', 'class', 'abstract', 1, '2020-12-01 00:50:00', '2020-12-01 00:50:00');
INSERT INTO `tbl_class` VALUES (22, 'Solidw832d1qfjb', 4, 'shrinkspell', 'command', 'subclass', 'abstract', 0, '2020-12-01 00:50:04', '2020-12-01 00:50:04');
INSERT INTO `tbl_class` VALUES (24, 'Solidw832d1qfjb', 4, 'invisibilityspell', 'command', 'subclass', 'abstract', 0, '2020-12-01 00:50:17', '2020-12-01 00:50:17');
INSERT INTO `tbl_class` VALUES (58, 'Solidw832d1qfjb', 4, 'goblin', 'target', 'subclass', 'concrete', 0, '2020-12-01 00:50:22', '2020-12-01 00:50:22');
INSERT INTO `tbl_class` VALUES (59, 'Solidjwxs1gn6k7', 4, 'closable', '', 'class', 'interface', 1, '2020-11-30 22:31:59', '2020-11-30 22:31:59');
INSERT INTO `tbl_class` VALUES (60, 'Solidjwxs1gn6k7', 4, 'flushable', '', 'class', 'interface', 1, '2020-11-30 22:32:02', '2020-11-30 22:32:02');
INSERT INTO `tbl_class` VALUES (61, 'Solidjwxs1gn6k7', 4, 'outputstream', '', 'class', 'abstract', 1, '2020-11-30 22:32:04', '2020-11-30 22:32:04');
INSERT INTO `tbl_class` VALUES (62, 'Solidjwxs1gn6k7', 4, 'outputstream_a', 'closable', 'subclass', 'abstract', 0, '2020-11-30 22:32:06', '2020-11-30 22:32:06');
INSERT INTO `tbl_class` VALUES (63, 'Solidjwxs1gn6k7', 4, 'outputstream_b', 'flushable', 'subclass', 'abstract', 0, '2020-11-30 22:32:12', '2020-11-30 22:32:12');

-- ----------------------------
-- Table structure for tbl_field
-- ----------------------------
DROP TABLE IF EXISTS `tbl_field`;
CREATE TABLE `tbl_field`  (
  `id_field` int NOT NULL AUTO_INCREMENT,
  `id_class` int NULL DEFAULT NULL,
  `name_field` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `typedata` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isStatus` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_field`) USING BTREE,
  INDEX `FK_tbl_field_tbl_class`(`id_class`) USING BTREE,
  CONSTRAINT `FK_tbl_field_tbl_class` FOREIGN KEY (`id_class`) REFERENCES `tbl_class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_field
-- ----------------------------
INSERT INTO `tbl_field` VALUES (4, 16, 'logger', 'logger', b'0', '2020-11-12 16:05:08', NULL);
INSERT INTO `tbl_field` VALUES (5, 16, 'undostack', 'deque<command>', b'0', '2020-11-12 16:05:08', NULL);
INSERT INTO `tbl_field` VALUES (6, 16, 'redostack', 'deque<command>', b'0', '2020-11-12 16:05:09', NULL);
INSERT INTO `tbl_field` VALUES (7, 20, 'logger', 'logger', b'0', '2020-11-13 08:51:47', NULL);
INSERT INTO `tbl_field` VALUES (8, 20, 'size', 'size', b'0', '2020-11-13 08:51:47', NULL);
INSERT INTO `tbl_field` VALUES (9, 20, 'visibility', 'visibility', b'0', '2020-11-13 08:51:47', NULL);
INSERT INTO `tbl_field` VALUES (10, 22, 'target', 'target', b'0', '2020-11-13 10:20:51', NULL);
INSERT INTO `tbl_field` VALUES (11, 22, 'oldsize', 'size', b'0', '2020-11-13 10:20:51', NULL);
INSERT INTO `tbl_field` VALUES (12, 24, 'target', 'target', b'0', '2020-11-13 14:11:15', NULL);

-- ----------------------------
-- Table structure for tbl_hasil
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hasil`;
CREATE TABLE `tbl_hasil`  (
  `id_hasil` int NOT NULL AUTO_INCREMENT,
  `id_users` int NULL DEFAULT NULL,
  `id_solid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `val_srp` int NULL DEFAULT NULL,
  `val_ocp` int NULL DEFAULT NULL,
  `val_lsp` int NULL DEFAULT NULL,
  `val_isp` int NULL DEFAULT NULL,
  `val_dip` int NULL DEFAULT NULL,
  `result` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isStatus` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_hasil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hasil
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_method
-- ----------------------------
DROP TABLE IF EXISTS `tbl_method`;
CREATE TABLE `tbl_method`  (
  `id_nom` int NOT NULL AUTO_INCREMENT,
  `id_class` int NULL DEFAULT NULL,
  `id_induk` int NULL DEFAULT NULL,
  `method` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `param` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `method_parent` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isNME` int NOT NULL DEFAULT 0,
  `isNMO` int NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_nom`) USING BTREE,
  INDEX `FK_tbl_nom_tbl_class`(`id_class`) USING BTREE,
  CONSTRAINT `FK_tbl_nom_tbl_class` FOREIGN KEY (`id_class`) REFERENCES `tbl_class` (`id_class`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 72 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_method
-- ----------------------------
INSERT INTO `tbl_method` VALUES (1, 16, 0, 'wizard', '', '', 0, 0, '2020-11-19 16:02:44', '2020-11-19 16:02:44');
INSERT INTO `tbl_method` VALUES (2, 16, 0, 'castspell', 'command,target', '', 0, 0, '2020-11-19 14:19:15', '2020-11-19 14:19:15');
INSERT INTO `tbl_method` VALUES (3, 16, 0, 'undolastspell', '', '', 0, 0, '2020-11-19 14:19:17', '2020-11-19 14:19:17');
INSERT INTO `tbl_method` VALUES (4, 16, 0, 'redolastspell', '', '', 0, 0, '2020-11-19 14:19:20', '2020-11-19 14:19:20');
INSERT INTO `tbl_method` VALUES (5, 16, 0, 'tostring', '', '', 0, 0, '2020-11-19 14:19:22', '2020-11-19 14:19:22');
INSERT INTO `tbl_method` VALUES (6, 20, 0, 'tostring', '', '', 0, 0, '2020-11-19 14:19:31', '2020-11-19 14:19:31');
INSERT INTO `tbl_method` VALUES (7, 20, 0, 'printstatus', '', '', 0, 0, '2020-11-19 14:19:35', '2020-11-19 14:19:35');
INSERT INTO `tbl_method` VALUES (8, 21, 0, 'execute', 'target', '', 0, 0, '2020-11-19 14:19:39', '2020-11-19 14:19:39');
INSERT INTO `tbl_method` VALUES (9, 21, 0, 'undo', '', '', 0, 0, '2020-11-19 14:19:40', '2020-11-19 14:19:40');
INSERT INTO `tbl_method` VALUES (10, 21, 0, 'redo', '', '', 0, 0, '2020-11-19 14:19:42', '2020-11-19 14:19:42');
INSERT INTO `tbl_method` VALUES (11, 21, 0, 'tostring', '', '', 0, 0, '2020-11-19 14:19:55', '2020-11-19 14:19:55');
INSERT INTO `tbl_method` VALUES (12, 22, 21, 'execute', 'target', 'abstract', 1, 0, '2020-11-20 14:09:41', '2020-11-20 14:09:41');
INSERT INTO `tbl_method` VALUES (13, 22, 21, 'undo', '', 'abstract', 1, 0, '2020-11-20 14:09:43', '2020-11-20 14:09:43');
INSERT INTO `tbl_method` VALUES (14, 22, 21, 'redo', '', 'abstract', 1, 0, '2020-11-20 14:09:44', '2020-11-20 14:09:44');
INSERT INTO `tbl_method` VALUES (15, 22, 21, 'tostring', '', 'abstract', 1, 0, '2020-11-20 14:09:45', '2020-11-20 14:09:45');
INSERT INTO `tbl_method` VALUES (16, 24, 21, 'execute', 'target', 'abstract', 1, 0, '2020-11-20 14:09:45', '2020-11-20 14:09:45');
INSERT INTO `tbl_method` VALUES (17, 24, 21, 'undo', '', 'abstract', 1, 0, '2020-11-20 14:09:46', '2020-11-20 14:09:46');
INSERT INTO `tbl_method` VALUES (18, 24, 21, 'redo', '', 'abstract', 1, 0, '2020-11-20 14:09:46', '2020-11-20 14:09:46');
INSERT INTO `tbl_method` VALUES (19, 24, 21, 'tostring', '', 'abstract', 1, 0, '2020-11-20 14:09:48', '2020-11-20 14:09:48');
INSERT INTO `tbl_method` VALUES (53, 58, 20, 'tostring', '', 'concrete', 1, 0, '2020-11-28 14:20:21', NULL);
INSERT INTO `tbl_method` VALUES (54, 58, 20, 'goblin', '', 'concrete', 0, 0, '2020-11-28 14:20:21', NULL);
INSERT INTO `tbl_method` VALUES (55, 59, 0, 'close', 'void', 'abstract', 1, 0, '2020-11-28 14:23:05', NULL);
INSERT INTO `tbl_method` VALUES (56, 60, 0, 'flush', 'void', 'abstract', 1, 0, '2020-11-28 14:23:59', NULL);
INSERT INTO `tbl_method` VALUES (57, 61, 0, 'write', 'int,void', 'abstract', 1, 0, '2020-11-28 14:34:38', NULL);
INSERT INTO `tbl_method` VALUES (58, 61, 0, 'write', 'byte,off int,len in,void', 'abstract', 1, 0, '2020-11-28 14:34:38', NULL);
INSERT INTO `tbl_method` VALUES (59, 61, 0, 'write', 'byte,void', 'abstract', 1, 0, '2020-11-28 14:34:38', NULL);
INSERT INTO `tbl_method` VALUES (60, 61, 0, 'flush', 'void', 'abstract', 1, 0, '2020-11-28 14:34:38', NULL);
INSERT INTO `tbl_method` VALUES (61, 61, 0, 'close', 'void', 'abstract', 1, 0, '2020-11-28 14:34:38', NULL);
INSERT INTO `tbl_method` VALUES (62, 62, 59, 'close', 'void', 'abstract', 1, 0, '2020-11-28 21:45:03', NULL);
INSERT INTO `tbl_method` VALUES (63, 62, 59, 'flush', 'void', 'abstract', 0, 0, '2020-11-28 21:45:03', NULL);
INSERT INTO `tbl_method` VALUES (64, 62, 59, 'write', 'int,void', 'abstract', 0, 0, '2020-11-28 21:45:03', NULL);
INSERT INTO `tbl_method` VALUES (65, 62, 59, 'write', 'byte,void', 'abstract', 0, 0, '2020-11-28 21:45:03', NULL);
INSERT INTO `tbl_method` VALUES (66, 62, 59, 'write', 'byte,off int,len int,void', 'abstract', 0, 0, '2020-11-28 21:52:32', '2020-11-28 21:52:32');
INSERT INTO `tbl_method` VALUES (67, 63, 60, 'close', 'void', 'abstract', 0, 0, '2020-11-28 21:52:32', '2020-11-28 21:52:32');
INSERT INTO `tbl_method` VALUES (68, 63, 60, 'flush', 'void', 'abstract', 0, 0, '2020-11-28 21:52:33', '2020-11-28 21:52:33');
INSERT INTO `tbl_method` VALUES (69, 63, 60, 'write', 'int,void', 'abstract', 0, 0, '2020-11-28 21:52:37', '2020-11-28 21:52:37');
INSERT INTO `tbl_method` VALUES (70, 63, 60, 'write', 'byte,void', 'abstract', 0, 0, '2020-11-28 21:52:46', '2020-11-28 21:52:46');
INSERT INTO `tbl_method` VALUES (71, 63, 60, 'write', 'byte,off int,len int,void', 'abstract', 0, 0, '2020-11-28 21:52:47', '2020-11-28 21:52:47');

-- ----------------------------
-- Table structure for tbl_subclass
-- ----------------------------
DROP TABLE IF EXISTS `tbl_subclass`;
CREATE TABLE `tbl_subclass`  (
  `id_subclass` int NOT NULL AUTO_INCREMENT,
  `id_class` int NOT NULL DEFAULT 0,
  `id_users` int NOT NULL DEFAULT 0,
  `name_subclass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_parent` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isStatus` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_subclass`) USING BTREE,
  INDEX `FK__tbl_class`(`id_class`) USING BTREE,
  CONSTRAINT `FK__tbl_class` FOREIGN KEY (`id_class`) REFERENCES `tbl_class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_subclass
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_typedata
-- ----------------------------
DROP TABLE IF EXISTS `tbl_typedata`;
CREATE TABLE `tbl_typedata`  (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `category` enum('nom','field') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isStatus` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_typedata
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (3, 'iki', 'iki', '202cb962ac59075b964b07152d234b70', 'iki@mail.com', 'admin', '2020-06-20 16:17:52', 1);
INSERT INTO `tbl_user` VALUES (4, 'riris', 'riris', '202cb962ac59075b964b07152d234b70', 'rishnaskr@gmail.com', 'user', '2020-06-20 16:20:45', 1);
INSERT INTO `tbl_user` VALUES (6, 'riski', 'riski', '202cb962ac59075b964b07152d234b70', 'riski@gmail.com', 'user', '2020-11-13 07:20:04', 1);

-- ----------------------------
-- View structure for vwisp_field
-- ----------------------------
DROP VIEW IF EXISTS `vwisp_field`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwisp_field` AS SELECT id_solid,name_class from tbl_class
where name_parent = 'interface' ;

-- ----------------------------
-- View structure for vwlsp_a1
-- ----------------------------
DROP VIEW IF EXISTS `vwlsp_a1`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwlsp_a1` AS select d.id_solid,lamp.id_class as id_class,d.name_parent, d.class_induk as class , m.id_class as id_subclass,d.name_class as subclass,m.method, m.isNME , m.isNMO
from tbl_method m
inner join tbl_method lamp ON lamp.id_class = m.id_induk
inner join tbl_class d on d.id_class = m.id_class
group by m.id_class,m.method ;

-- ----------------------------
-- View structure for vwlsp_b1
-- ----------------------------
DROP VIEW IF EXISTS `vwlsp_b1`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwlsp_b1` AS SELECT u.id_solid,m.id_class, u.class_induk as class,u.name_parent, u.name_class as subclass , m.method,m.method_parent
FROM tbl_class AS u
INNER JOIN tbl_class as temp ON u.class_induk = temp.name_class
INNER JOIN tbl_method m ON m.id_class = u.id_class
GROUP BY u.name_class,m.method ;

-- ----------------------------
-- View structure for vwlsp_class
-- ----------------------------
DROP VIEW IF EXISTS `vwlsp_class`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwlsp_class` AS select c.id_solid,c.class_induk as class,temp.id_class as id_class , temp.method
from tbl_method u
inner join tbl_method temp ON temp.id_class = u.id_induk
inner join tbl_class c on c.id_class = u.id_class
group by c.class_induk,temp.method ;

-- ----------------------------
-- View structure for vwlsp_subclass
-- ----------------------------
DROP VIEW IF EXISTS `vwlsp_subclass`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwlsp_subclass` AS select d.id_solid,lamp.id_class as id_class,d.class_induk as class , m.id_class as id_subclass,d.name_class as subclass,m.method
from tbl_method m
inner join tbl_method lamp ON lamp.id_class = m.id_induk
inner join tbl_class d on d.id_class = m.id_class
group by m.id_class,m.method ;

-- ----------------------------
-- View structure for vwmethod
-- ----------------------------
DROP VIEW IF EXISTS `vwmethod`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwmethod` AS SELECT 
  id_class,
  method, 
  param, 
  CASE WHEN param IS NULL OR param = '' THEN CHAR_LENGTH(param) +1 ELSE (CHAR_LENGTH(param) - CHAR_LENGTH(REPLACE(param, ',', '')) + 2) END AS total
FROM tbl_method ;

-- ----------------------------
-- View structure for vw_lsp
-- ----------------------------
DROP VIEW IF EXISTS `vw_lsp`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_lsp` AS select b.* , c.nme,c.nmo,
case when c.nme = b.nmia then 'YA' else 'TIDAK' end clsp
from vw_lsp_b b
left join vw_lsp_a c ON c.class = b.class
group by b.class,b.subclass ;

-- ----------------------------
-- View structure for vw_lsp_a
-- ----------------------------
DROP VIEW IF EXISTS `vw_lsp_a`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_lsp_a` AS select id_solid,class,subclass,
sum(case when la.isNME = 1 and la.isNMO = 0 then 1 else 0 end) nme,
sum(case when la.isNME = 0 and la.isNMO = 2 then 1 else 0 end) nmo
from vwlsp_a1 la
group by id_subclass ;

-- ----------------------------
-- View structure for vw_lsp_b
-- ----------------------------
DROP VIEW IF EXISTS `vw_lsp_b`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_lsp_b` AS SELECT id_solid, class ,subclass,
sum(case when method_parent = 'concrete' then 1 else 0 end) nmik,
sum(case when method_parent = 'abstract' then 1 else 0 end) nmia
from vwlsp_b1 tab1
group by class,subclass
order by class,subclass desc ;

SET FOREIGN_KEY_CHECKS = 1;
