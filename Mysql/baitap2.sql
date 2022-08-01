
-- 1.

SELECT `id`, `email` FROM `users` 
WHERE STATUS = 1
ORDER BY email DESC;

-- 2. 

SELECT `name` FROM products 
WHERE price = ( 
	SELECT max(price) FROM products
)
ORDER BY name ASC
LIMIT 1;

-- 3.

SELECT `id`, `full_name` FROM `users` WHERE full_name LIKE 'l%' AND address LIKE 'da _ang%';

-- 4.

SELECT * FROM products 
ORDER BY DATE_UPDATE DESC
LIMIT 3;

-- 5.

SELECT * FROM products WHERE name LIKE '%samsung%';

-- 6.

SELECT * FROM products WHERE name LIKE '%MacBook%' AND price >= 1000000;

-- 7.
-- cách 1
SELECT * FROM `orders` WHERE YEAR(order_date) = 2022 AND MONTH(order_date) = 7;

-- cách 2
SELECT * FROM `orders` WHERE order_date BETWEEN '2022-07-01' AND '2022-07-31';

-- hạn chế dùng: dùng ở trường hợp tìm kiếm
SELECT * FROM `orders` WHERE order_date LIKE '2022-07%';

-- 8.

SELECT products.id, products.name, products.price, `quantity`, `full_name`
FROM products 
INNER JOIN users ON products.user_id = users.id
INNER JOIN order_details ON products.id = order_details.product_id
WHERE products.price >= 200000;




