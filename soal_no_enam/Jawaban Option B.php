SELECT ct.id,ct.name AS category_name, GROUP_CONCAT(pr.name) AS products FROM categories ct JOIN products pr WHERE ct.id=pr.id GROUP BY ct.id;
