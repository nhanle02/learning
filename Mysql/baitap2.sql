
-- 1.

SELECT `id`, `email` FROM `users` 
WHERE STATUS = 1
ORDER BY email DESC;

-- 2. 

SELECT `name` FROM `products`  
ORDER BY name ASC;

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

SELECT * FROM `orders` WHERE order_date LIKE '2022-07%';

-- 8.

SELECT products.id,`name`, `price`, `full_name`
FROM users 
INNER JOIN products ON users.id = products.user_id
WHERE price >= 2000000;




