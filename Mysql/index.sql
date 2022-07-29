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

-- ORDER BY
Sắp xếp thứ tự hàng truy vấn tăng dần hoặc giản dần
Tăng dần: ASC
giảm dần: DESC
Syntax: ORDER BY column_name sort_type
SELECT * FROM `posts` ORDER BY title DESC;


-- LIMIT
- Giới hạn số dòng truy vấn
- có 2 params: start, limit -- start là vị trí bắt đầu lấy (bắt đầu từ 0), limit (Số record lấy)
SELECT * FROM `posts` LIMIT 2, 3;

-- CONCAT
Hàm concat có tác dụng là nối các chuỗi lại với nhau với cú pháp như sau:
select concat('freetuts','.net') as domain

-- UNION
Toán tử UNION cho phép bạn nối kết quả của hai hoặc nhiều câu truy vấn lại với nhau để trở thành một danh sách kết quả duy nhất. 
Cú pháp của MySQL UNION như sau:
SELECT column1, column2
UNION [DISTINCT | ALL]
SELECT column1, column2
UNION [DISTINCT | ALL]
…
Tuy nhiên khi sử dụng UNION trong MySQL chúng ta cần phải tuân thủ những nguyên tắc sau đây:

Số lượng colums trong tất cả các lệnh SELECT phải bằng nhau
Mỗi column tương ứng vị trí phải có cùng kiểu dữ liệu và độ dài
Theo mặc định thì UNION sẽ loại bỏ các kết quả trùng lặp của các câu SELECT nên nó tạo cho chúng ta hai lựa chọn sau:

Nếu chọn UNION DISTINCT thì nó sẽ loại bỏ kết quả trùng.
Nếu chọn UNION ALL thì nó giữ lại kết quả trùng.
Nếu bạn không chọn gì thì mặc định nó sẽ lấy UNION DISTINCT

-- BETWEEN
SELECT * FROM table_name
WHERE column_name BETWEEN start AND end

-- JOIN
    - INNER JOIN
    - LEFT JOIN
    - RIGHT JOIN
=> Lấy dữ liệu ở ở bảng khác nhau thông qua khóa ngoại (foriegn key)
--  INNER JOIN
SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;

Ex: 
SELECT * FROM `users` 
JOIN `posts` ON users.id = posts.user_id
JOIN `comments` ON posts.id = comments.post_id;

-- LEFT JOIN
Left join trong MySQL cũng giống như Inner Join, 
có một điểu khác là nó sẽ lấy kết quả ở bên trái trong trường hợp bên phải không có dữ liệu phù hợp.
-- Right JOIN
Ngược lại với left join

-- Group By 
Group By trong MySQL có công dụng gom nhóm dữ liệu theo một hoặc nhiều field nào đó.
Nó rất hữu ích khi xuất dữ liệu trong báo cáo, nhưng sẽ ảnh hưởng đến tốc độ xử lý của cấu truy vấn.
-- Syntax:
SELECT
    c1, c2,..., cn
FROM
    table
WHERE
    where_conditions
GROUP BY c1 , c2,...,cn;

-- JOIN SUB QUERY
SELECT * FROM `posts` 
JOIN (
	SELECT * FROM users WHERE id = 4
) AS users_customs
ON posts.user_id = users_customs.id;

-- FUNCTION
- CONCAT
- MIN
- MAX
- COUNT
- SUM
- ADDDATE
- ADDTIME
- DATE
- DATE_ADD
- DATE_SUB
- NOW
- 