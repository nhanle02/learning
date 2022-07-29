-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.27 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shops
CREATE DATABASE IF NOT EXISTS `shops` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shops`;

-- Dumping structure for table shops.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.comments: ~0 rows (approximately)
REPLACE INTO `comments` (`id`, `post_id`, `user_id`, `content`) VALUES
	(1, 1, 1, ''),
	(2, 2, 2, ''),
	(3, 3, 3, ''),
	(4, 4, 4, ''),
	(5, 5, 5, '');

-- Dumping structure for table shops.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.contacts: ~0 rows (approximately)
REPLACE INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `content`) VALUES
	(1, 'van a', 'tranvana@gmail.com', '0123456789', 'quần', ''),
	(2, 'van b', 'tranvanb@gmail.com', '0123456788', 'quần', ''),
	(3, 'nhan le', 'nhanle1@gmail.com', '0123456799', 'áo', ''),
	(4, 'nghia le', 'nghiale@gmail.com', '0942534450', 'giày dép', ''),
	(5, 'thi c', 'lethic@gmail.com', '0942532345', 'váy', '');

-- Dumping structure for table shops.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `total` float NOT NULL,
  `paid_amount` float NOT NULL,
  `note` text,
  `updated_by` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.orders: ~5 rows (approximately)
REPLACE INTO `orders` (`id`, `user_id`, `status`, `total`, `paid_amount`, `note`, `updated_by`) VALUES
	(1, 2, 1, 299000, 299000, '', 1),
	(2, 3, 1, 199000, 399000, '', 1),
	(3, 1, 1, 399000, 199000, '', 1),
	(4, 4, 1, 99000, 99000, '', 1),
	(5, 5, 1, 299000, 299000, '', 1);

-- Dumping structure for table shops.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.order_details: ~5 rows (approximately)
REPLACE INTO `order_details` (`id`, `order_id`, `product_id`, `name`, `price`, `sku`, `quantity`, `total_price`) VALUES
	(1, 1, 1, 'mũ', 299000, '', 2, 598000),
	(2, 2, 2, 'quần jean', 199000, '', 1, 199000),
	(3, 3, 3, 'giày thể thao', 399000, '', 2, 798000),
	(4, 4, 4, 'áo thun', 99000, '', 1, 99000),
	(5, 5, 5, 'váy ngắn', 299000, '', 1, 299000);

-- Dumping structure for table shops.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_unique` (`slug`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.pages: ~0 rows (approximately)
REPLACE INTO `pages` (`id`, `user_id`, `title`, `slug`, `content`) VALUES
	(1, 1, 'mũ', 'slug1', ''),
	(2, 2, 'quần', 'slug2', ''),
	(3, 3, 'giày dép ', 'slug3', ''),
	(4, 4, 'áo', 'slug4', ''),
	(5, 5, 'váy', 'slug5', '');

-- Dumping structure for table shops.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `view_counts` int NOT NULL DEFAULT '0',
  `comment_counts` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.posts: ~5 rows (approximately)
REPLACE INTO `posts` (`id`, `user_id`, `title`, `description`, `content`, `view_counts`, `comment_counts`) VALUES
	(1, 1, 'mũ', 'chủ để này nói về mũ', '', 0, 0),
	(2, 2, 'quần', 'chủ để này nói về quần', '', 0, 0),
	(3, 3, 'giày dép', 'chủ để này nói về giày dép', '', 0, 0),
	(4, 4, 'áo', 'chủ để này nói về áo', '', 0, 0),
	(5, 5, 'váy', 'chủ để này nói về váy', '', 0, 0);

-- Dumping structure for table shops.post_categories
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: public, 2 unpublic',
  `thumbnail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Slug_Unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.post_categories: ~6 rows (approximately)
REPLACE INTO `post_categories` (`id`, `name`, `slug`, `status`, `thumbnail`) VALUES
	(1, 'van a ', 'slug1', 1, ''),
	(2, 'van b', 'slug2', 2, ''),
	(3, 'nhan le', 'slug3', 1, ''),
	(4, 'nghia le', 'slug4', 1, ''),
	(5, 'thi c', 'slug5', 2, '');

-- Dumping structure for table shops.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `review_counts` int NOT NULL DEFAULT '0',
  `thumbnail` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.products: ~0 rows (approximately)
REPLACE INTO `products` (`id`, `user_id`, `name`, `sku`, `price`, `description`, `content`, `review_counts`, `thumbnail`) VALUES
	(1, 1, 'mũ ', '', 199000, 'Chất liệu vải an toàn cho sức khỏe, Chất vải thoáng mát tạo cảm giác thoải mái khi mặc, Kiểu dáng thời trang đẹp mắt, Thiết kế mang phong cách hiện đại, cá tính', '', 0, ''),
	(2, 2, 'quần jean', '', 299000, 'quần jean chất liệu cao cấp, thiết kế đẹp, giá tốt.', '', 0, ''),
	(3, 3, 'giày thể thao', '', 399000, 'Sử Dụng Chất Liệu Có Độ Đàn Hồi Cao Độ Bền Tốt, Giúp Tăng Độ Êm Ái Cho Chân. Thiết Kế Bề Mặt Dạng Lưới Giúp Giày Có Độ Thông Thoáng Cao, Mang Lại Cảm...', '', 0, ''),
	(4, 4, 'áo thun', '', 99000, 'Tuy thiết kế đơn giản nhưng sở hữu vẻ đẹp thời trÁo Thun ICON DENIM Rebellion Printedang trường tồn theo thời gian và các sản phẩm áo thun tại 160STORE luôn ...', '', 0, ''),
	(5, 5, 'váy ngắn', '', 299000, 'chất liệu cao cấp, thiết kế đa dạng, giá ưu đãi...', '', 0, '');

-- Dumping structure for table shops.product_favorites
CREATE TABLE IF NOT EXISTS `product_favorites` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `product_favorites_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `product_favorites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.product_favorites: ~0 rows (approximately)
REPLACE INTO `product_favorites` (`id`, `product_id`, `user_id`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(3, 3, 3),
	(4, 4, 4),
	(5, 5, 5);

-- Dumping structure for table shops.product_reviews
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `star` float NOT NULL DEFAULT '0',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.product_reviews: ~0 rows (approximately)
REPLACE INTO `product_reviews` (`id`, `product_id`, `user_id`, `star`, `content`) VALUES
	(1, 1, 1, 0, ''),
	(2, 2, 2, 0, ''),
	(3, 3, 3, 0, ''),
	(4, 4, 4, 0, ''),
	(5, 5, 5, 0, '');

-- Dumping structure for table shops.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: active, 2 deactive',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table shops.users: ~0 rows (approximately)
REPLACE INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `avatar`, `status`) VALUES
	(1, 'tran van a', 'tranvana@gmail.com', '123456', '0123456789', 'quang ngai', 'van a', 1),
	(2, 'tran van b', 'tranvanb@gmail.com', '123455', '0123456788', 'da nang', 'van b', 2),
	(3, 'le dinh nhan', 'nhanle1@gmail.com', '123454', '0123456799', 'quang nam', 'nhan le', 1),
	(4, 'le nghia', 'nghiale@gmail.com', '121212', '0942534450', 'quang nam', 'nghia le', 2),
	(5, 'le thi c', 'lethic@gmail.com', '131313', '0942532345', 'da nang', 'thi c', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
