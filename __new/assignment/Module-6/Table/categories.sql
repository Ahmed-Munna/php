CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);