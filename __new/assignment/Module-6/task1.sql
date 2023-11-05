SELECT C.customer_id, C.name AS customer_name, C.email AS customer_email, C.location AS customer_location, COUNT(O.order_id) AS total_orders_placed FROM Customers C 
LEFT JOIN Orders O ON C.customer_id = O.customer_id
GROUP BY C.customer_id, C.name, C.email, C.location
ORDER BY total_orders_placed DESC;
