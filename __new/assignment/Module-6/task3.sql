SELECT C.name AS category_name, SUM(O.quantity * O.unit_price) AS total_revenue
FROM categories C JOIN products P ON C.category_id = P.category_id
LEFT JOIN order_items O ON P.product_id = O.product_id
GROUP BY C.name ORDER BY total_revenue DESC;
