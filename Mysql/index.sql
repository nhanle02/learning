-- Create table
CREATE TABLE `users`;

-- Create table and column
CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nhan',
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Add column
ALTER TABLE `news`
ADD COLUMN `user_id` int(11) UNSIGNED NOT NULL AFTER `title`;

-- ADD forign key
ALTER TABLE `news` ADD FOREIGN KEY (user_id) REFERENCES users(id);

-- Rename table
ALTER TABLE table_name
  RENAME TO new_table_name;


-- INSERT|UPDATE|SELECT|DELETE

-- INSERT
-- SYNTAX
INSERT INTO table_name (column_1, column_2, ...)
    VALUES (value_1, value_2, ..);

-- UPDATE
-- SYNTAX
UPDATE table_name 
SET column_1 = 'value_1', column_2 = 'value_2'
WHERE condition;
-- Ex:
UPDATE `users` SET username = 'nhan_abc', email = 'nhan_abc@gmail.com' WHERE id = 2;

-- DELETE
-- SYNTAX
DELETE FROM table_name WHERE condition;

-- SELECT
-- SYNTAX all column
SELECT * FROM table_name; 
-- SYNTAX column
SELECT column_1, column_2, ... FROM table_name;
-- SYNTAX column by condition
SELECT column_1, column_2, ... FROM table_name WHERE condition;

-- AND|OR

-- WHERE
-- =| != | < |<= | >|>=
-- WHERE column IN (value_1, value_2, ...)
-- WHERE column IS NULL | IS NOT NULL;
-- WHERE LIKE => KHớp đầu => "abc%" |KHớp bộ phận => "%abc%" | KHớp cuối => "%abc"


-- JOIN
    - INNER JOIN
    - LEFT JOIN
    - RIGHT JOIN
=> Lấy dữ liệu ở ở bảng khác nhau thông qua khóa ngoại (foriegn key)
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;


