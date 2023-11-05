SELECT O.order_id, P.name AS product_name, O.quantity, (O.quantity * O.unit_price) AS total_amount
FROM Order_Items O JOIN Products P ON O.product_id = P.product_id
ORDER BY O.order_id ASC;
