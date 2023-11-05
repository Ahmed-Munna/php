SELECT C.name AS customer_name, SUM(O.total_amount) AS total_purchase_amount
FROM Customers C JOIN Orders O ON C.customer_id = O.customer_id 
GROUP BY C.customer_id, C.name ORDER BY total_purchase_amount DESC
LIMIT 5;
